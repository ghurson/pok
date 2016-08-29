// TODO: turn this back on. its off right now because of the carousels.

//$(document).foundation();

init_mobile_menu();
init_services_menu_sizing();
init_front_page_video_content();
init_container_adjust();
init_home_slider();
init_home_page_modal();
init_archive_dd();

$(window).resize(function () {
    init_services_menu_sizing();
    size_info_label_elements();
    init_container_adjust();
});

$(window).load(function () {
    $(document).foundation();
    size_info_label_elements();
    init_location_maps();
});


function init_container_adjust() {
    var w = $(window).width();
    var s = $('.ses-site-sidebar').width();
    var c = w - s;
    var $c = $('.ses-body-content');

    if (w > 638) {
        $c.width(c);
    } else {
        $c.width('100%');
    }

    // console.log('w='+w);
    // console.log('s='+s);
    // console.log('c='+c);
}

function init_mobile_menu() {

    $(".mobile-header-section .menu-icon-container").click(function () {
        $(".ses-mobile-menu").toggle();
    })
}

function get_screen_size() {

    // TODO: verify that these are the actual breakpoints

    var w = $(window).width();

    if (w >= 1024) return 'large';
    if (w >= 600) return "medium";
    return 'small';

}

function init_services_menu_sizing() {
    var items = $(".ses-services-menu-item");

    if (!items.length) return false;

    var size = get_screen_size();

    if (size == 'small') return false;

    items.each(function () {
        var ratio = $(this).attr("data-ratio-" + size);

        if (ratio == undefined && size == 'large')
            ratio = $(this).attr("data-ratio-medium");

        var height = $(this).width() * ratio;
        $(this).height(height + "px");

    })


}

function size_info_label_elements() {

    $(".info-label").bigtext();
}

function init_front_page_video_content() {

    var desktop_vid_carousel = $(".ses-front-video-carousel").owlCarousel({
        items: 1,
        loop: true
    });

    var mobile_vid_carousel = $(".ses-mobile-video-carousel").owlCarousel({
        items: 1,
        loop: true,
        onInitalized: test
    });

    function test() {
        alert("test");
    }

    mobile_vid_carousel.on("initalized.owl.carousel", function () {
        alert("something")
    });

    mobile_vid_carousel.parent().siblings(".pager-prev").click(function () {
        mobile_vid_carousel.trigger("prev.owl.carousel");
    });

    mobile_vid_carousel.parent().siblings(".pager-next").click(function () {
        mobile_vid_carousel.trigger("next.owl.carousel");
    });


}

function init_home_slider() {

    var carousel = $(".pok-home-slider");

    if(!carousel.length) return;

    var home_slider = carousel.owlCarousel({
        items: 1,
        loop: true
    });


    home_slider.find(".l-arrow").click(function () {
        home_slider.trigger("prev.owl.carousel");
    });

    home_slider.find(".r-arrow").click(function () {
        home_slider.trigger("next.owl.carousel");
    });
}


function init_location_maps() {

    contact_page_maps();

    function contact_page_maps() {

        var map = $('.location-with-map');

        if (!map.length) return;

        console.log('found map');

        map.each(function () {

            var box = $(this).find(".map_box");

            var lat = box.data('lat');
            var lng = box.data('lng');

            var myLatLng = {lat: lat, lng: lng};

            var map = new google.maps.Map(box.get(0), {
                zoom: 15,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
        })

    }


}

function init_home_page_modal(){

    var locations = $(".locations__address");

    if(!locations.length) return;

    console.log('init modal');

    locations.each(function(){
        var trigger = $(this).find(".show-map");

        trigger.click(function(e){
            e.preventDefault();
            var modal = $("<div class='pok-modal'></div>");
            var closetrigger = $("<span class='trigger'>&times;</span>");
            var closebutton = $("<div class='close'></div>");
            closebutton.append(closetrigger);

            modal.append(closebutton);
            var mapbox = $("<div class='map-box'></div>");
            modal.append(mapbox);


            var box = $(this).parent(".locations__address");

            $('body').append(modal);

            var lat = box.data('lat');
            var lng = box.data('lng');

            var myLatLng = {lat: lat, lng: lng};

            var map = new google.maps.Map(mapbox.get(0), {
                zoom: 17,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });

            closetrigger.click(function(){
                modal.remove();
            });

        })


    })



}

function init_archive_dd(){

    var dd = $(".blog-rail select");
    if(!dd.length) return false;

    dd.change(function(){
        var url = $(this)[0].value;
        if(url == "#") return;
        window.location.href = url;
    })

}