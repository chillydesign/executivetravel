(function ($, root, undefined) {

    $(function () {

        'use strict';

        $('.section_colonnes, .section_four_boxes').each(function(){
          var $this = $(this);
          $this.find('.column').matchHeight();
        })

        var $navigation_menu = $('#navigation_menu');
        var $phone_header = $('#phone_header');
        var $menu_button = $('#menu_button');
        var $phone_button = $('#phone_button');
        $menu_button.on('click', function(e){
            e.preventDefault();
            $navigation_menu.toggleClass('menu_visible');
            $phone_header.removeClass('visible');
        });
        $phone_button.on('click', function(e){
            e.preventDefault();
            $phone_header.toggleClass('visible');
        });


var $restofpage = $('#rest_of_page');
$restofpage.on('click', function(e){
     $navigation_menu.removeClass('menu_visible');
     $phone_header.removeClass('visible');
});


// if press escape key, hide menu
$(document).on('keydown', function(e){
    if(e.keyCode == 27 ){
        $navigation_menu.removeClass('menu_visible');
        $phone_header.removeClass('visible');
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

        $(".slickslider_partners").slick({

                  // normal options...
                  infinite: true,
                  autoplay: true,
                  dots: false,
                  slidesToShow: 8,

                  // the magic
                  responsive: [{

                      breakpoint: 992,
                      settings: {
                          slidesToShow: 5,
                      }

                  }, {
                      breakpoint: 768,
                      settings: {
                          slidesToShow: 3
                      }

                  }]
              });


        //Home slider
        $(".homeslider").slick({
            infinite: true,
            autoplay: true,
            arrows: false,
            dots: false,
            slidesToShow: 1,
            easing: 'ease-in-out',
            autoplaySpeed: 4000,
            speed: 1200,
            fade: true
        });


        //Home slider
        $(".slickslider_img").slick({
            infinite: true,
            autoplay: true,
            arrows: true,
            dots: false,
            // slidesToShow: 1,
            easing: 'ease-in-out',
            autoplaySpeed: 4000,
            speed: 1200,
             centerMode: true,
             variableWidth: true
        });



        var $homesliderheight = $('section.section_large_image_with_links').outerHeight();
        $('.homeslider li div.slide_image').css({'height' : $homesliderheight});




      	var map_container = $('#agencymap');
        if (map_container.length > 0) {
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

          }




    });


    var $window = $(window);
    var $windowHeight = $window.height();
    var $docHeight = $(document).height();
    var $header = $('header');
    var $large_image_link = $('a.large_image_link');

    function makeLargeImagesVisible($scrollTop) {
        if ($large_image_link.length > 0) {
            var $first = $large_image_link[0];
            $offset = $first.offsetParent.offsetTop -  $window.height();
            if ( $scrollTop > $offset && !$large_image_link.hasClass("showlink")) {
                $large_image_link.addClass('showlink');
            }
        }
    }

    var $scrollTop = $window.scrollTop();
    makeLargeImagesVisible($scrollTop);

    $window.on('scroll', function() {

        var $scrollTop = $window.scrollTop();

        makeLargeImagesVisible($scrollTop);


        $topbitheight = $('.section_large_image_with_links').outerHeight();
        if ( $scrollTop  > $topbitheight) {
            if (!$header.hasClass("bottomheader")) {
                $header.addClass('bottomheader');
            }
        } else {
            $header.removeClass('bottomheader');
        }

        var $social_bar = $('#social_bar');
        if ($scrollTop > (600)) {
			$social_bar.addClass('visible_bar');
		} else {
			$social_bar.removeClass('visible_bar');
		}

        var $blocs = $('.bloc');
        var $bloc_texts = $('.bloc_text');
        var $bltxof  = 70 - ($scrollTop / $docHeight * 200) ;
        $bloc_texts.css({
            'transform' : 'translateY(' +  $bltxof + 'px)'
        });

        var $distanc = $windowHeight - 100;
        $blocs.each(function(){
            var $this = $(this);
            $distanceFromTop = $this.offset().top;
            if ( ($scrollTop + $distanc) > $distanceFromTop ) {
                $this.addClass('animate');
            }
        });



    });




    function resizebloc(){
      $('.bloc').each(function(){
        var $this = $(this);
        var $textheight  = $this.find('.bloc_text').outerHeight() + 180;
        $this.css({'min-height' : $textheight});
      });
    }
    resizebloc();

    $window.on('resize', function() {
      resizebloc();
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
