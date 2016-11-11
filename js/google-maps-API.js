
var reviewsArray = [];

function initMap() {

  var mapDiv = document.getElementById('google-map');

  var myLongLat = {lat: 43.646234, lng: -79.375499};

  var map = new google.maps.Map(mapDiv, {
      center: myLongLat,
      zoom: 17,
      scrollwheel: false,
      styles: [
    {
        "featureType": "all",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": -100
            },
            {
                "lightness": -30
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#353535"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#656565"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#505050"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#808080"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#454545"
            }
        ]
    }
]
  });

  var marker = new google.maps.Marker({
    position: myLongLat,
    map: map,
  });

  // Nova Dry Cleaners Place ID: ChIJa2ji0i3L1IkRFx0-jv2ctJQ
  var request = {
    placeId: 'ChIJa2ji0i3L1IkRFx0-jv2ctJQ' // example: ChIJN1t_tDeuEmsRUsoyG83frY4
  };

  // init a google service
  var service = new google.maps.places.PlacesService(map);



  // get the place reviews
  service.getDetails(request, function(place, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      reviewsArray = place.reviews;
      initReviews(reviewsArray);
    } else {
      console.log("Places Service is not working");
    }
  });

}


// ----------------------------------------------------------------
// this function iterates over all the '.review' elements and
// applies a corrosponding google review (based on the index) to
// that containers elements
// ----------------------------------------------------------------

function initReviews(reviews) {

  var $containers = $('.review').toArray();
  console.log($containers);
  console.log(reviews);

  $('.review').each(function( index ) {
    console.log(index);

    var name = reviews[index].author_name;
    var text = reviews[index].text;
    var rating = reviews[index].rating;

    $(this).find('.review-author').text(name);
    $(this).find('.review-text').text('"' + text +'"');

    // setting the star rating using glyphicons classes
    var $stars = $(this).find('.review-rating > li').toArray();

    for (var i = 0; i < rating; i++) {
      $($stars[i])
        .children() // the span element
        .removeClass('glyphicon-star-empty')
        .addClass('glyphicon-star');
    }

  });

}

$('.review-button').on('click', function() {
  console.log(reviewsArray);
  var review = reviewsArray.pop();
  reviewsArray.unshift(review);
  initReviews(reviewsArray);
});