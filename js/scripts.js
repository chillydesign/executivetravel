(function ($, root, undefined) {

    $(function () {

        'use strict';



        var $navigation_menu = $('#navigation_menu');
        var $menu_button = $('#menu_button');
        $menu_button.on('click', function(){
            $navigation_menu.toggleClass('menu_visible');
        });

        // if press escape key, hide menu
        $(document).on('keydown', function(e){
            if(e.keyCode == 27 ){
                $navigation_menu.removeClass('menu_visible');
            }
        })


        //News slider
        $(".slickslider").slick({

            // normal options...
            infinite: true,
            autoplay: true,
            dots: false,
            slidesToShow: 5,

            // the magic
            responsive: [{

                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }

            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }

            }]
        });


        //Home slider
        $(".homeslider").slick({

            // normal options...
            infinite: true,
            autoplay: true,
            dots: false,
            slidesToShow: 1,
          fade: true
        });

        var $homesliderheight = $('section.section_large_image_with_links').outerHeight();
        $('.homeslider li div.slide_image').css({'height' : $homesliderheight});


      	var map_container = $('#agencymap');
      	map_container.css({
      		width : '100%'
      	})
      	var agencymap = new google.maps.Map(map_container.get(0), {
      		// center: {lat: latitude , lng: longitude  },
      		zoom: 14,
      		scrollwheel: false
      	});

      	var marker, i;
      	var locations = [[46.2256554,6.1065002, 'Agence Genève Aéroport'], [46.2028587,6.1522949, 'Agence Genève Centre']]
      	var bounds = new google.maps.LatLngBounds();
      	var infowindow = new google.maps.InfoWindow({content: '...'});
      	for (i = 0; i < locations.length; i++) {
      		var location = locations[i];
      		var latlng = new google.maps.LatLng(location[0], location[1]),
      		marker = new google.maps.Marker({
      			position: latlng,
      			map: agencymap,
      			title: location[2]
      		});
      		marker.addListener('click', function() {
      			infowindow.setContent(  this.title);
      			infowindow.open(agencymap, this);
      		});
      		bounds.extend(latlng);
      	}

      	agencymap.fitBounds(bounds);

        $('.map_height').matchHeight();




    });



    $(window).scroll(function() {
      if ($(window).scrollTop() > 30 && !$('a.large_image_link').hasClass("showlink")) {$('a.large_image_link').addClass('showlink'); }
      $topbitheight = $('.section_large_image_with_links').outerHeight();
      if ($(window).scrollTop() > $topbitheight) {
        if (!$('header').hasClass("bottomheader")) { $('header').addClass('bottomheader'); }
      } else {
        $('header').removeClass('bottomheader');
      }
    });






})(jQuery, this);





function generate_chilly_map( $options ) {
    var map_theme = [{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF"}]}];

    var map_options = {
        zoom: 15,
        mapTypeControl: true,
        scrollwheel: false,
        draggable: true,
        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: map_theme
    };


    var location_map_container = jQuery( $options.element  );
    location_map_container.css({
        width : '100%',
        height : 300
    })

    var location_map = new google.maps.Map(location_map_container.get(0), map_options);
    var latlng = new google.maps.LatLng(  $options.lat, $options.lng   );
    var infowindow = new google.maps.InfoWindow({content: ''});
    var marker = new google.maps.Marker({
        position: latlng,
        map: location_map,
        optimized: false
    });

    marker.addListener('click', function(){
        infowindow.setContent( $options.title );
        infowindow.open(location_map, this);
    })

    location_map.setCenter( latlng );



}
// MAP
