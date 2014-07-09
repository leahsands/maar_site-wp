<?php
/*
Template Name: Ordinance Map
*/
get_header(); ?>

<!-- Page Content -->
<div class="maar-content-inner">

<div class="main-body row">
	<div class="row">
		<section class="twelve columns">
			<h1><?php the_title(); ?></h1>
		</section>
	</div>
	
	<div class="row">
        <div class="twelve columns gen-div">
            <div class="gen-div-inner">
        		<div><h4>Selected Area: <span id="areaName"></span></h4></div>

        		<!-- Step 4: Define the canvas where the area is drawn -->
        		<div style="width: 100%;" id="map"></div>
            </div>
        </div>
	</div>
</div>

<!-- Step 2: Include raphaelJS and SVG Map libraries -->
  <script src="<?php bloginfo('template_directory');?>/js/_custom/ordinance-map/raphael-min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/_custom/ordinance-map/SVGMap.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/_custom/ordinance-map/popup.js"></script>


<script type="text/javascript">
  $(function() {

     // Step 3: Options allow you to overwrite colors and formatting -->
     var options = {
		 BackButton: {
			 popup: { 
				 enabled: false
			 },

			'regular': {
				'fill': '#e82e0a',
	            'stroke': '#FFFFFF',
		        'stroke-width': "1"
			},

			'over' : {
	            'fill': '#b72408',
		       'stroke': '#FFFFFF',
			    'stroke-width': "3"
	        }

		 },

		 Drillable: {
			popup: {
				enabled: false
			},

			'regular': {
				'fill': '#b72408',
	            'stroke': '#FFFFFF',
		        'stroke-width': "1"
			},

			 'over' : {
	            'fill': '#e82e0a',
		        'stroke': '#FFFFFF',
			    'stroke-width': "2"
	        },
		 },
        /* Global Options */
        'regular': {
            'fill': '#334374',
            'stroke': '#FFFFFF',
            'stroke-width': "1"
        },
        'over' : {
            'fill': '#072554',
            'stroke': '#FFFFFF',
            'stroke-width': "2"

        },
        'regulartext': {
        },
        'overtext': {
            'fill': '#FFFFFF'
        },

        popup: {
            'fill': '#072554',
            'stroke': '#FFFFFF',
            'stroke-width': "2",
            "fill-opacity": .9
        },
        popupText: {
            'fill': '#FFFFFF',
            'font-weight': 'bold',
            'font-size': '14px'
        }

    };

        // Define elements for displaying area name
        var areaNameEl= $("#areaName");

        // Define mapping
		        var mapping = {
		          "aurora" : "Aurora.pdf",
		          "naperville" : "Naperville.pdf",
		          "gurnee" : "Gurnee.pdf",
		          "tinleypark" : "Tinley-Park.pdf"
          };


        // Step 5: Create the map and load .xml file into it
        var map = new TenK.SvgMap({
            canvas: "map",
            zoom: 1,
            onClickCallBack: function(areaId) {
				location.href = "<?php echo home_url(); ?>/ordinances/" + areaId.toLowerCase();
              },
            onChangeCallBack: function(areaName) {
              areaNameEl.text(areaName);
            }
        }, options);

        map.loadUrl("<?php bloginfo('template_directory');?>/city-map/map.xml");

    });
 </script>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>