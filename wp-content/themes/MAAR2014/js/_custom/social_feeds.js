//Homepage Video
{
    var newsroomURL = 'http://gdata.youtube.com/feeds/api/users/MinneapolisREALTORS/uploads?alt=json&max-results=1';
    var videoURL= 'http://www.youtube.com/watch?v=';
    $.getJSON(newsroomURL, function(data) {
        var video_data="";
        $.each(data.feed.entry, function(i, item) {
            var feedTitle = item.title.$t;
            var feedURL = item.link[1].href;
            var fragments = feedURL.split("/");
            var videoID = fragments[fragments.length - 2];
            var url = videoURL + videoID;
            var thumb = "http://img.youtube.com/vi/"+ videoID +"/default.jpg";
            var embed = "http://www.youtube.com/embed/"+ videoID;
            video_data += '<a href="'+ url +'" target="_blank"><article class="youtube video"><iframe width="560" height="315" src="'+ embed +'"></iframe ></article></a>';
        });
        $(video_data).appendTo(".video-home");
    });
};

//Newsroom Videos

{
    var newsroomURL = 'http://gdata.youtube.com/feeds/api/users/MinneapolisREALTORS/uploads?alt=json&max-results=2';
    var videoURL= 'http://www.youtube.com/watch?v=';
    $.getJSON(newsroomURL, function(data) {
        var video_data="";
        $.each(data.feed.entry, function(i, item) {
            var feedTitle = item.title.$t;
            var feedURL = item.link[1].href;
            var fragments = feedURL.split("/");
            var videoID = fragments[fragments.length - 2];
            var url = videoURL + videoID;
            var thumb = "http://img.youtube.com/vi/"+ videoID +"/default.jpg";
            var embed = "http://www.youtube.com/embed/"+ videoID;
            video_data += '<div class="row main-body"><article class="youtube video"><iframe width="560" height="315" src="'+ embed +'"></iframe></article></div>';
        });
        $(video_data).appendTo(".video-newsroom");
    });
};

//News Room Flickr Images
$(document).ready(function(){

    $('#flickr_gallery').jflickrfeed({
        limit: 20,
        qstrings: {
            id: '27833342@N03'
        },
        itemTemplate: '<li><img src="{{image_m}}" alt="{{title}}" /></li>'
    });

});


//News Room Flickr Images
$(document).ready(function(){

    $('#flickr_gallery_yopro').jflickrfeed({
        limit: 10,
        qstrings: {
            id: '124545997@N07'
        },
        itemTemplate: '<li><img src="{{image_m}}" alt="{{title}}" /></li>'
    });

});

//Video Page Main
{
    var newsroomURL = 'http://gdata.youtube.com/feeds/api/users/MinneapolisREALTORS/uploads?alt=json&max-results=2';
    var videoURL= 'http://www.youtube.com/watch?v=';
    $.getJSON(newsroomURL, function(data) {
        var video_data="";
        $.each(data.feed.entry, function(i, item) {
            var feedTitle = item.title.$t;
            var feedURL = item.link[1].href;
            var fragments = feedURL.split("/");
            var videoID = fragments[fragments.length - 2];
            var url = videoURL + videoID;
            var thumb = "http://img.youtube.com/vi/"+ videoID +"/default.jpg";
            var embed = "http://www.youtube.com/embed/"+ videoID;
            video_data += '<section class="six columns gen-div"><a href="'+ url +'" target="_blank"><article class="video-overlay"><h2>'+ feedTitle +'</h2><i class="icon-video"></i></article><article class="youtube video"><iframe width="560" height="315" src="'+ embed +'"></iframe ></article></a></section>';
        });
        $(video_data).appendTo(".video-videopage");
    });
};

//Row two of Video Main Page
{
    var newsroomURL = 'http://gdata.youtube.com/feeds/api/users/MinneapolisREALTORS/uploads?alt=json&max-results=2&start-index=3';
    var videoURL= 'http://www.youtube.com/watch?v=';
    $.getJSON(newsroomURL, function(data) {
        var video_data="";
        $.each(data.feed.entry, function(i, item) {
            var feedTitle = item.title.$t;
            var feedURL = item.link[1].href;
            var fragments = feedURL.split("/");
            var videoID = fragments[fragments.length - 2];
            var url = videoURL + videoID;
            var thumb = "http://img.youtube.com/vi/"+ videoID +"/default.jpg";
            var embed = "http://www.youtube.com/embed/"+ videoID;
            video_data += '<section class="six columns gen-div"><a href="'+ url +'" target="_blank"><article class="video-overlay"><h2>'+ feedTitle +'</h2><i class="icon-video"></i></article><article class="youtube video"><iframe width="560" height="315" src="'+ embed +'"></iframe ></article></a></section>';
        });
        $(video_data).appendTo(".video-videopage-2");
    });
};

//Archive
{
    var newsroomURL = 'http://gdata.youtube.com/feeds/api/users/MinneapolisREALTORS/uploads?alt=json&max-results=7&start-index=5';
    var videoURL= 'http://www.youtube.com/watch?v=';
    $.getJSON(newsroomURL, function(data) {
        var video_data="";
        $.each(data.feed.entry, function(i, item) {
            var feedTitle = item.title.$t;
            var feedURL = item.link[1].href;
            var fragments = feedURL.split("/");
            var videoID = fragments[fragments.length - 2];
            var url = videoURL + videoID;
            video_data += '<li><a href="'+ url +'" target="_blank">'+ feedTitle +'</a></li>';
        });
        $(video_data).appendTo(".video-videopage-archive");
    });
};