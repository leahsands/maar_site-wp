/*
Author: Andrei Rjeousski (10K Research and Marketing LLC.)
Last Updated: April 29, 2013
Version: 2.0

*/
/*
STYLE OPTIONS
-------------

Style options can be used to override few of the attributes of the map.

For Shapes & Text Inside Shapes:
    'fill': '#CC0000'
'stroke': '#FFFFFF'
'stroke-width': "2"

For Text:
    'font-size': '15'
'font-family': 'Helvetica'
	

Group styles can be used to define styles for groups of shapes. Commonly used groups are:
BackButton - if map has multiple layers
Drillable - areas that can be drilled down on

Each Group (including global) can have 4 different styles:
regular
over
regulartext
overtext


   
var styleOptions = {
    // Styles for Groups 

    // Special formatting for text inside the map (only used to display area name - optional)
    AreaName: {
		'font-size': '15',
		'font-family': 'Helvetica'
    },

        // Formatting for drillable shapes
        Drillable: {
		    'regular': {                        
        stroke: '#FFFFFF',
			    'stroke-width': "2"
    },                    
		 'over' : {
        fill: '#CC0000',
        stroke: '#FFFFFF',
			    'stroke-width': "2"
    }
    },
		    
        // Global Styles 
	'regular': {                        
        stroke: '#FFFFFF',
	        'stroke-width': "2"
    },                    
    'over' : {
        fill: '#CC0000',
        stroke: '#FFFFFF',
	        'stroke-width': "2"
			
    },
	'regulartext': {
			
    },
	'overtext': {
        fill: '#000000'
    }                   
};

*/

(function ($) {

    // Setup 10K Namespace        
    window.TenK = {};

    // Utilities
    /**
     * Extend an object with the members of another
     * @param {Object} a The object to be extended
     * @param {Object} b The object to add to the first one
     */
    function extend(a, b) {
        var n;
        if (!a) {
            a = {};
        }
        for (n in b) {
            a[n] = b[n];
        }
        return a;
    }

    // usage: log('inside coolFunc',this,arguments);
    // http://paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
    var DEBUG = false;
    function LOG() {
        var args = arguments;
        if (this.console && DEBUG) {
            if ((Array.prototype.slice.call(args)).length === 1 && typeof Array.prototype.slice.call(args)[0] === 'string') {
                console.log((Array.prototype.slice.call(args)).toString());
            }
            else {
                console.log((Array.prototype.slice.call(args)));
            }
        }
    }

    function SvgBasedMap(options, styles) {
        var defaultOptions = {
            canvas: null,   // canvas to render map to
            zoom: 1,
            loadingText: "Please Wait... Map is loading...",
            noAreaSelectedText: "No Area Selected",
            onClickCallBack: null, // function to call when an area is clicked
            onChangeCallBack: null // function to call when area is selected with a mouse
        };
        options = extend(defaultOptions, options);

        // Regular stuff
        var mapData;
        var paper;
        var layerStack = [];
        var currentLayer;
        var selectedArea = "";

        // Popup variables
        var popupFrame;
        var popupLabel;
        var popupTimer;
        var popupStyle = extend({ fill: "#000", stroke: "#666", "stroke-width": 2, "fill-opacity": .7 }, styles.popup);
        var popupTextStyle = extend({ font: '13px Helvetica, Arial', fill: "#fff" }, styles.popupText);

        // Need to easily access special variables
        var backButtonElement, layerNameElement, areaNameElement, loadingTextElement;

        var enableAnimations = true;
        var enablePopups = true;

        // Figure out if we need to use alternate rendering (rendering 10 shapes at a time)
        var alternateRendering = Raphael.type === 'VML' ? true : false;

        // Initalize canvas
        paper = Raphael(options.canvas);
        loadingTextElement = paper.text(0, 20, options.loadingText).attr({
            'text-anchor': 'start',
            'font-size': '16'
        });

        function loadSvgXmlUrl(url) {
            $.ajax({
                type: "GET",
                url: url,
                dataType: "text",
                success: function (data) {
                    setTimeout((function () {
                        loadSvgXml(data);
                    }), 0);
                },
                error: function () {
                    loadingTextElement.attr({ text: "Unable to load map data" });
                }
            });
        }


        function loadSvgXml(svgText) {
            // Need to strip off comments from SVG, otherwise IE<9 fails
            mapData = parseSvgIntoDataMapping($.parseXML(svgText.replace(/<!.*>/g, "")));
            setupCanvas();
            plotNewLayer("Main");
        }


        function updateSelectedText(text) {
            /// <summary>Updates text for currently selected area (if defined in SVG) and calls callback function</summary>
            /// <param name="text" type="string">text to display</param>

            if (selectedArea !== text) {
                selectedArea = text;

                if (areaNameElement) {
                    areaNameElement.elements[0].gElement.attr({ "text": selectedArea });
                }

                // Call onChange function if we've actually changed text
                var onChangeCallBack = options.onChangeCallBack;
                if (onChangeCallBack && $.isFunction(onChangeCallBack)) onChangeCallBack(selectedArea);
            }
        }

        function areaClicked(areaId) {
            var onClickCallback = options.onClickCallBack;
            if (onClickCallback && $.isFunction(onClickCallback)) {
                onClickCallback(areaId);
            }
        }

        function getPopupDescription(areaId) {
            var onPopupCallback = options.onPopupCallback;
            if (onPopupCallback && $.isFunction(onPopupCallback)) {
                return onPopupCallback(areaId).description;
            }
            return "N/A";
        }

        function setupCanvas() {
            var zoomedWidth = mapData.width * options.zoom;
            var zoomedHeight = mapData.height * options.zoom;

            LOG("Set Canvas Size:", zoomedWidth, zoomedHeight, " Zoom:", options.zoom);
            paper.setSize(zoomedWidth, zoomedHeight);


            paper.setViewBox(mapData.x, mapData.y, mapData.width, mapData.height);



            if (mapData.layers["Elements"]) {
                LOG("Found Elements Layer");
                var layer = mapData.layers["Elements"];
                if (layer["BackButton"]) {
                    backButtonElement = layer["BackButton"];
                    LOG("Found back button");
                } else {
                    backButtonElement = {};
                }
                if (layer["LayerName"]) {
                    layerNameElement = layer["LayerName"];
                    layerNameElement.clickable = false;
                }
                if (layer["AreaName"]) {
                    areaNameElement = layer["AreaName"];
                    areaNameElement.clickable = false;
                }
            }

            // Initial Setup
            backButtonElement.visible = false;
        }

        function parseLayerName(str) {
            return unescape(str.replace(/_[0-9]+_$/, "").replace(/_x([0-9a-z]{2})([0-9a-z]{2})_/ig, "%u$1$2").replace(/_x([0-9a-z]{2})_/ig, "%$1").replace(/_/g, " "));
        }

        function parseSvgIntoDataMapping(xml) {
            LOG("Starting to read SVG XML");
            mapData = {};

            // get dimensions
            var root = $(xml).find('svg')[0], vb = root.getAttribute('viewBox'), dims = vb ? vb.split(' ') : [0, 0, root.getAttribute('width'), root.getAttribute('height')];
            mapData.x = parseFloat(dims[0]);
            mapData.y = parseFloat(dims[1]);
            mapData.width = parseFloat(dims[2]);
            mapData.height = parseFloat(dims[3]);
            LOG("Dimensions", mapData.x, mapData.y, mapData.width, mapData.height);

            // Read Layer data
            var layers = $(root).children("g");
            mapData.layers = {};
            layers.each(function (index, node) {
                var lData = parseLayerName($(node).attr("id")).split("|");
                var layerId = lData[0];
                LOG("Processing LayerID:" + layerId);
                mapData.layers[layerId] = {};
                if (lData[1]) mapData.layers[layerId].heading = lData[1];
                mapData.layers[layerId].shapeGroups = [];
                // shapeGroups
                var shapeGroups = $(node).children("g[id]");
                shapeGroups.each(function () {
                    var g = {};
                    var gData = parseLayerName($(this).attr("id")).split("|");
                    if (gData[0]) g.name = gData[0];
                    if (gData[1]) g.styleGroup = gData[1];
                    if (gData[2]) g.command = gData[2];
                    if (gData[3]) g.param1 = gData[3];
                    g.visible = true;
                    if (g.command !== "extra") {
                        g.clickable = true;
                        g.pushToFront = true;
                    }

                    g.id = g.name.replace(/[^0-9a-zA-Z_-]/g, "");


                    // Add all paths inside the layer
                    g.elements = [];

                    $(this).find('path,text,polygon,line,polyline,rect').each(function () {
                        var element;
                        var $this = $(this);
                        var skipPush = false; // Define if we need to skip pushing the element to the elemnet list
                        var parentNode = $this.parent();
                        var isElementText = false;

                        // If this polygon or its parent have text, mark shape as text
                        if (($this.attr('id') && $this.attr('id').toLowerCase().indexOf("text") >= 0) || (parentNode.attr('id') && parentNode.attr('id').toLowerCase().indexOf("text") >= 0)) {
                            isElementText = true;
                        }

                        switch (this.nodeName) {
                            case "path":
                                if (g.command === "text") {
                                    element = getElementData(this, ["d"], []);
                                    element.type = "text";
                                    element.isText = true;
                                    element.transform = "m1,0,0,1," + element.d.substring(1) + "";
                                    if (styles && styles[g.styleGroup]) element.styles = styles[g.styleGroup];
                                } else {
                                    element = getElementData(this, ["d"], ['stroke-linejoin', 'stroke', 'fill', 'stroke-miterlimit', 'stroke-width', 'stroke-linecap']);
                                    parentNode = $(this).parent();

                                    // If we are parsing paths for a text, mark it as "do not fill"
                                    if (isElementText) {

                                        // See if we've already added an element for the same parent
                                        var i,
                                            gLen = g.elements.length,
                                            parentNodeName = parentNode.attr('id').toLowerCase();
                                        for (i = 0; i < gLen; i++) {
                                            if (g.elements[i].parentNodeName === parentNodeName) {
                                                element = g.elements[i];

                                                // add path to the old element
                                                if (element.d) {
                                                    element.d = element.d + $(this).attr("d");
                                                }

                                                skipPush = true;
                                                break;
                                            }
                                        }
                                        element.parentNodeName = parentNodeName;
                                    }
                                }
                                break;
                            case "text":
                                element = getElementData(this, ["transform"], ['font-family', 'font-size', 'fill', 'font-weight', 'stroke-width']);
                                if (element.transform.substring(0, 6) === "matrix") {
                                    element.transform = element.transform.replace(/[\(\)]/g, "").replace("matrix", "m").replace(/[ ]/g, ",");
                                }
                                element.isText = true;
                                break;
                            case "polygon":
                                element = getElementData(this, ["points"], ['stroke-linejoin', 'stroke', 'fill', 'stroke-miterlimit', 'stroke-width', 'stroke-linecap']);
                                element["d"] = "M" + element.points.replace(/[ ]+/g, " ").replace(/[, ]/, ",").replace(/ /, "L") + "z";
                                element.type = "path";
                                break;
                            case "line":
                                element = getElementData(this, ["x1", "y1", "x2", "y2"], ['stroke-linejoin', 'stroke', 'fill', 'stroke-miterlimit', 'stroke-width', 'stroke-linecap']);
                                element.type = "path";
                                element["d"] = "M" + element.x1 + "," + element.y1 + "L" + element.x2 + "," + element.y2;

                                break;
                            case "polyline":
                                element = getElementData(this, ["points"], ['stroke-linejoin', 'stroke', 'fill', 'stroke-miterlimit', 'stroke-width', 'stroke-linecap']);
                                element.type = "path";
                                element["d"] = "M" + element.points.replace(/[ ]+/g, " ").replace(/[, ]/, ",").replace(/ /, "L"); // We don't need to close path for polylines
                                break;
                            case "rect":
                                element = getElementData(this, ["x", "y", "width", "height"], ['stroke-linejoin', 'stroke', 'fill', 'stroke-miterlimit', 'stroke-width', 'stroke-linecap']);
                                element.type = "path";
                                element["d"] = "M" + element.x + "," + element.y + "h" + element.width + ",0v0," + element.height + "h-" + element.width + ",0z";
                                break;

                            default:
                                // Skip, since we don't support it
                                LOG("Error: Found element that isn't supported:" + this.nodeName);
                                break;
                        }

                        if (isElementText) {
                            element.isText = true;
                        }

                        element.parent = g;
                        if (!skipPush) g.elements.push(element);
                    });

                    mapData.layers[layerId].shapeGroups.push(g);
                    if (layerId === "Elements") {
                        mapData.layers[layerId][g.id] = g;
                    }
                }); // ShapeGroup

            }); // Layer        
            return mapData;
        }

        function getElementData(element, attribs, styleAttribs) {
            var obj = {};
            obj.type = element.nodeName;
            var node = $(element);

            // Regular attributes
            $(attribs).each(function () {
                var attrib = this.toString();
                if (node.attr(attrib)) {
                    if (obj[attrib]) {
                        obj[attrib] = obj[attrib] + node.attr(attrib);
                    } else {
                        obj[attrib] = node.attr(attrib);
                    }
                }
            });

            // Styles
            obj.styles = {};
            $(styleAttribs).each(function () {
                var styleName = this.toString();
                if (node.attr(styleName)) {
                    obj.styles[styleName] = node.attr(styleName);

                    if (styleName === "stroke") {
                        if (!obj.styles["stroke-width"]) obj.styles["stroke-width"] = "1";
                    }

                } else {
                    // Defaults
                    var value = "";
                    switch (styleName) {
                        case "fill":
                            value = "#000000";
                            break;
                        case "font-weight":
                            value = "normal";
                            break;
                        case "stroke-width":
                            value = "0";
                            break;
                        default:
                            break;
                    }
                    if (!obj.styles[styleName]) obj.styles[styleName] = value;
                }
            });

            if (obj.styles["stroke-width"] === '0') {
                obj.styles["stroke"] = "none";
            }

            if (node.attr('style')) {
                var atts = node.attr('style').split(';');
                for (var i = 0; i < atts.length; i++) {
                    var bits = atts[i].split(':');
                    node.styles[bits[0]] = bits[1];
                }
            }

            obj.value = node.text();

            return obj;
        }


        function plotPopupBubble() {
            popupLabel = paper.set();
            popupLabel.push(paper.text(60, 12, "").attr(popupTextStyle));
        }


        function displayPopup(x, y, side, label, description) {
            // Update text
            popupLabel[0].attr({ text: label });

            // Create new popup frame
            popupFrame = paper.popup(x, y, popupLabel, side).attr(popupStyle).toFront();
            popupLabel.toFront();

            // Show popup frame
            popupLabel.show();
        }


        function plotNewLayer(layerName) {
            if (!mapData.layers[layerName]) return;

            paper.clear();

            // Plot map elements
            plotLayer("Elements");

            // Plot actual layer
            if (alternateRendering) {
                plotLayer(layerName, false);

                var processMainLayer = function (start, count) {
                    setTimeout((function () {
                        // Plot actual layer
                        var result = plotLayer(layerName, true, start, count);
                        if (result !== 0) processMainLayer(result, count);
                    }), 0);
                };
                processMainLayer(0, 10);

            } else {
                plotLayer(layerName);
            }

            currentLayer = layerName;
            updateSelectedText(options.noAreaSelectedText);

            if (enablePopups) {
                plotPopupBubble();
            }
        }


        // Attributes are taken in the following order: StyleGroup, Global Styles, Local Styles
        function getFillandStrokeAttribs(element, type, localStylesOnly) {

            var attrNames = ["fill", "stroke", "stroke-width"];
            var attrs = {};
            var i;
            var attrName;

            if (element.isText === true) {
                type = type + 'text';
            }

            var groupStyleFound;
            for (i = 0; i < attrNames.length; i++) {
                groupStyleFound = false;
                attrName = attrNames[i];
                // Local style
                if (element.styles && element.styles[attrName]) {
                    attrs[attrName] = element.styles[attrName];
                }

                if (!localStylesOnly) {
                    // StyleGroup style
                    if (styles[element.parent.styleGroup] && styles[element.parent.styleGroup][type] && styles[element.parent.styleGroup][type][attrName]) {
                        attrs[attrName] = styles[element.parent.styleGroup][type][attrName];
                        groupStyleFound = true;
                    }

                    // Global style
                    if (!groupStyleFound && !(styles[element.parent.styleGroup]) && styles[type] && styles[type][attrName]) {
                        attrs[attrName] = styles[type][attrName];
                    }
                }
            }

            return attrs;
        }

        function isPopupEnabled(element) {
            var isEnabled = true;
            if (styles['popup'] && styles['popup'].enabled !== undefined) {
                isEnabled = styles['popup'].enabled;
            }

            if (styles[element.parent.styleGroup] && styles[element.parent.styleGroup]['popup'] && styles[element.parent.styleGroup]['popup'].enabled !== undefined) {
                isEnabled = styles[element.parent.styleGroup]['popup'].enabled;
            }
            return isEnabled;
        }

        function plotLayer(layerName, isText, startIndex, maxGroups) {
            var pathCount = 0;

            // Function Handlers
            var clickFunction = function () {
                var context = this.areaContext;
                switch (context.command) {
                    case "open":
                        areaClicked(context.id);
                        break;
                    case "show":
                        backButtonElement.visible = true;
                        layerStack.push(currentLayer);
                        plotNewLayer(context.param1);
                        break;
                    case "back":
                        if (layerStack && layerStack.length > 0) {
                            if (layerStack.length === 1) backButtonElement.visible = false;
                            plotNewLayer(layerStack.pop());
                        }

                        break;
                    default:
                        break;
                }
            }, overFunction = function (event) {
                var curSet = this;
                var offset = $("#" + options.canvas).offset(); //This is JQuery function

                $(this.elements).each(function () {
                    var obj = this;
                    if (!obj.isText || obj.isText === false) {
                        var attrs = getFillandStrokeAttribs(obj, "over");
                        // Only show the areas at the end of the fade
                        var showText = function (areaContext) {
                            if (areaContext.command === "show" || areaContext.command === "open") updateSelectedText(areaContext.name);
                        };
                        if (enableAnimations) {
                            obj.gElement.animate(attrs, 100, 'linear', showText(curSet));
                        } else {
                            obj.gElement.attr(attrs);
                            showText(curSet);
                        }

                        // Popup
                        if (enablePopups && isPopupEnabled(obj)) {
                            // Figure out popup position
                            var bbox = this.gElement.getBBox();

                            var path1 = {
                                x1: bbox.x,
                                y1: bbox.y,
                                x2: bbox.x2,
                                y2: bbox.y2,
                                xMiddle: bbox.x + (bbox.width / 2),
                                yMiddle: bbox.y + (bbox.height / 2)
                            };

                            clearTimeout(popupTimer);
                            popupTimer = setTimeout(function () {
                                var description = getPopupDescription(curSet.id) || "N/A";

                                // Try X positioning
                                var position = {
                                    x: path1.x2,
                                    side: "box_right",
                                    y: path1.yMiddle
                                };

                                if (position.x > paper.width / 2) {
                                    position.x = path1.x1;
                                    position.side = "box_left";
                                }

                                var margins = 100;
                                if (position.x <= margins || paper.width - position.x <= margins) {
                                    // Switch to y position
                                    position.x = path1.xMiddle;
                                    position.y = path1.y2;
                                    position.side = "box_bottom";

                                    if (position.y > paper.height / 2) {
                                        position.y = path1.y1;
                                        position.side = "box_top";
                                    }
                                }

                                displayPopup(position.x, position.y, position.side, curSet.name, description);

                            }, 500);


                        }
                    }
                });

            }, outFunction = function () {
                $(this.elements).each(function () {
                    var obj = this;
                    if (!obj.isText || obj.isText === false) {
                        var attrs = getFillandStrokeAttribs(obj, "regular");

                        if (enableAnimations) {
                            obj.gElement.animate(attrs, 100);
                        } else {
                            obj.gElement.attr(attrs);
                        }

                        // Popup
                        if (enablePopups) {
                            clearTimeout(popupTimer);
                            if (popupFrame) popupFrame.remove();
                            popupLabel.hide();
                            //popupLabel[0].hide();
                            //popupLabel[1].hide();
                        }
                    }

                });
                updateSelectedText(options.noAreaSelectedText);
            };

            var layerData = mapData.layers[layerName];
            // Draw each group
            var numGroupsProcessed = 0;
            var i = startIndex || 0;
            for (; (!maxGroups || numGroupsProcessed < maxGroups) && i < layerData.shapeGroups.length; i++) {

                var shapeGroup = layerData.shapeGroups[i];

                if (!shapeGroup.visible) continue; // Skip invisible groups           

                // Draw Paths
                var shapeSet = paper.set();
                shapeSet.areaContext = shapeGroup;

                if (!shapeGroup.pushToFront) {
                    shapeSet.toBack();
                }

                $(shapeGroup.elements).each(function () {
                    var element = this;
                    var gElement = null;
                    var attrs = {}; // Global Attibutes 
                    if (isText !== undefined && ((isText === true && element.isText !== true) || (isText === false && element.isText === true))) return;
                    switch (element.type) {
                        case "path":
                            gElement = paper.path(element.d);
                            pathCount++;
                            // If no stroke with is defined, default it to 1
                            if (element.styles['stroke-width'] === "") {
                                $.extend(attrs, { 'stroke-width': 1 });
                            }

                            $.extend(attrs, getFillandStrokeAttribs(element, "regular", !shapeSet.areaContext.clickable));


                            break;
                        case "text":
                            gElement = paper.text(0, 0, element.value);
                            $.extend(attrs, { 'text-anchor': 'start' });
                            break;
                        default:
                            // Don't know how to draw it
                            break;
                    }

                    if (gElement) {

                        // Apply transform
                        if (element.transform && element.transform.substring(0, 1) === "m") {
                            gElement.transform(element.transform);
                        }

                        // Add styles
                        if (element.styles) {
                            var styleAttrs = {};
                            $.each(element.styles, function (name, value) {
                                if (name !== "fill" && name !== "stroke" && name !== "stroke-width") {
                                    styleAttrs[name] = value;
                                }
                            });
                            $.extend(attrs, styleAttrs);
                        }

                        gElement.areaContext = shapeSet.areaContext;
                        gElement.elementContext = element;

                        gElement.attr(attrs); // Set object attributes

                        element.gElement = gElement;
                        shapeSet.push(gElement);
                    }


                }); // Foreach element in shapegroup


                if (shapeGroup.clickable) {
                    shapeSet.hover(overFunction, outFunction, shapeGroup, shapeGroup)
                        .click(clickFunction);

                    shapeSet.attr("cursor", "pointer");
                }

                numGroupsProcessed++;
            } // Foreach group in a set


            // Apply render fixes
            paper.renderfix();
            paper.safari();

            if (i === layerData.shapeGroups.length) numGroupsProcessed = 0;

            // Return true if there are more groups to be drawn
            return numGroupsProcessed !== 0 ? startIndex + numGroupsProcessed : 0;
        }

        return {
            loadSvgXml: loadSvgXml,
            loadUrl: loadSvgXmlUrl
        };
    }

    // Make the function publically available
    extend(TenK, {
        // Constructors
        SvgMap: SvgBasedMap
    });

}($));