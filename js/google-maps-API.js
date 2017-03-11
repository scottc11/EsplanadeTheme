
var reviewsArray = [];

function initMap() {

  var mapDiv = document.getElementById('google-map');

  var myLongLat = {lat: 43.646234, lng: -79.375499};

  var map = new google.maps.Map(mapDiv, {
      center: myLongLat,
      zoom: 17,
      draggable: false,
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
    console.log(place.reviews.length);
    if (status == google.maps.places.PlacesServiceStatus.OK) {


      for (var i = 0; i < place.reviews.length; i++) {
        if (place.reviews[i].rating >= 4) {
          console.log(place.reviews.length);
          reviewsArray.push(place.reviews[i]);
          reviewsArray.sort(function(a, b) {
            if (a.rating < b.rating)
              return -1;
            if (a.rating > b.rating)
              return 1;
            return 0;
          });
        }
      }

      initReviews(reviewsArray);
    } else {
      console.log("Places Service is not working");
    }
  });
}


// If number of chars in review exceed <300>, set 'read more'
// button to display: block;
// On button click - set max-height = none;




function showReviews() {
  $('#loader').attr('style', 'display: none;');
  $('.reviews-container').removeClass('fade-out');
}

function initializeName(nameString) {

  var array = nameString.split(" ");

  if (array.length === 1) {
    return nameString;
  }
  else {
    var firstName = array[0];
    var lastInitial = array[1].split("")[0];
    var name = "- " + firstName + " " + lastInitial + ".";
    return name;
  }

}


// ----------------------------------------------------------------
// this function iterates over all the '.review' elements and
// applies a corrosponding google review (based on the index) to
// that containers elements
// ----------------------------------------------------------------

function initReviews(reviews) {

  // var $containers = $('.review').toArray();

  $('.review').each(function( index ) {

    var name = initializeName(reviews[index].author_name);

    var text = reviews[index].text;
    var rating = reviews[index].rating;

    $(this).find('.review-author').text(name);
    $(this).find('.review-text').text('"' + text +'"');

    // reset all the glyphicons to empty stars
    $(this).find('.review-rating > li > span ')
        .removeClass('glyphicon-star')
        .addClass('glyphicon-star-empty');

    // setting the star rating using glyphicons classes
    var $stars = $(this).find('.review-rating > li').toArray();

    for (var i = 0; i < rating; i++) {

      $($stars[i])
          .children() // the span element
          .removeClass('glyphicon-star-empty')
          .addClass('glyphicon-star');
    }

  });

  showReviews();
}

// ------------------
// BUTTONS
// ------------------

$('.review-button-left').on('click', function() {
  var review = reviewsArray.pop(); // remove last element
  reviewsArray.unshift(review); //append element to front of array
  initReviews(reviewsArray);
});

$('.review-button-right').on('click', function() {
  var review = reviewsArray.shift(); // remove first element in array
  reviewsArray.push(review); // append to end of array
  initReviews(reviewsArray);
});

// center review expander for extra long reviews
$('.read-more-button').on('click', function() {
  // if user wants to read more...
  if ($(this).text() == 'read more...') {
    $('.center-review-text-container').attr('style', 'max-height: none;');
    $(this).text('read less...')
  }
  // if user wants to read less...
  else {
    $('.center-review-text-container').attr('style', 'max-height: 300px;');
    $(this).text('read more...')
  }
});
