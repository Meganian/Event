
  
$(function() {                                    // When the DOM is ready


'use strict'
 var times; 
                                  // Declare global variable
  $.ajax({
    beforeSend: function(xhr) {                   // Before requesting data
      if (xhr.overrideMimeType) {                 // If supported
        xhr.overrideMimeType("application/json"); // set MIME to prevent errors
      }
    }
  });
    
  // FUNCTION THAT COLLECTS DATA FROM THE JSON FILE
  function loadTimetable() {                    // Declare function
    $.getJSON('data/example.json')              // Try to collect JSON data
    .done( function(data){                      // If successful
      times = data;                             // Store it in a variable
    }).fail( function() {                       // If a problem: show message
      $('#event').html('Sorry! We could not load the timetable at the moment');
    });
  }

  loadTimetable();                              // Call the function


  // CLICK ON THE EVENT TO LOAD A TIMETABLE 
  	$('#content').on('click', '#event a', function(e) {  // User clicks on event

	    e.preventDefault();                                // Prevent loading page
	    var thisID = this.id.toUpperCase();                   // Get value of id attr
	    var newContent = '';                               // Build up timetable by
	    for (var i = 0; i < times[thisID].length-2; i++) {      // looping through events
	      newContent += '<li><span class="time">' + times[thisID][i].time +" "+ '</span>';
	      newContent += '<a href="descriptions.php#';
	      newContent += times[thisID][i].time.replace(/ /g,'-')+'">';
	      newContent += times[thisID][i].title + '</a></li>';
	    $('#sessions').html('<ul>' + newContent + '</ul>'); // Display times on page
	    $('#event a.current').removeClass('current');       // Update selected item
	    $(this).addClass('current');
	    $('#details').text('');                             // Clear third column
	}

	init(thisID, times);


  });

  // CLICK ON A SESSION TO LOAD THE DESCRIPTION
  $('#content').on('click', '#sessions li a', function(e) { // Click on session
    e.preventDefault();                                     // Prevent loading
    var fragment = this.href;                               // Title is in href

    fragment = fragment.replace('#', ' #');              // Add space after#
    $('#map').load(fragment);                           // To load info

    $('#sessions a.current').removeClass('current');        // Update selected
    $(this).addClass('current');
  });


  // CLICK ON PRIMARY NAVIGATION
  $('nav a').on('click', function(e) {                       // Click on nav
    e.preventDefault();                                      // Prevent loading
    var url = this.href;                                     // Get URL to load
    $('nav a.current').removeClass('current');               // Update nav
    $(this).addClass('current');

    $('#container').remove();                                // Remove old part
    $('#content').load(url + ' #container').hide().fadeIn('slow'); // Add new

  });



});

function init(thisID, times) {

  var venueMap;
  var lat = times[thisID][3].latitude;
  var lng = times[thisID][3].longitude;
  var zoom = 11;
  var myLatLng = {lat: parseFloat(lat), lng: parseFloat(lng)}; 

  var mapOptions = {                                 
    center: new google.maps.LatLng(lat, lng),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom: zoom,
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
      position: google.maps.ControlPosition.TOP_LEFT
    },
    scaleControl: true,
    scaleControlOptions: {
      position: google.maps.ControlPosition.TOP_CENTER
    },
    streetViewControl: false,
    overviewMapControl: false,

    styles: [
      {
        stylers: [
          { hue: "#00ff6f" },
          { saturation: -50 }
        ]
      }, {
        featureType: "road",
        elementType: "geometry",
        stylers: [
          { lightness: 100 },
          { visibility: "simplified" }
        ]
      }, {
        featureType: "transit",
        elementType: "geometry",
        stylers: [
          { hue: "#ff6600" },
          { saturation: +80 }
        ]
      }, {
        featureType: "transit",
        elementType: "labels",
        stylers: [
          { hue: "#ff0066" },
          { saturation: +80 }
        ]
      }, {
        featureType: "poi",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
      }, {
        featureType: "poi.park",
        elementType: "labels",
        stylers: [
          { visibility: "on" }
        ]
      }, {
        featureType: "water",
        elementType: "geometry",
        stylers: [
          { hue: "#c4f4f4" }
        ]
      }, {
        featureType: "road",
        elementType: "labels",
        stylers: [
          { visibility: "on" },
          { color: "red" }
        ]
      }
    ]
  };
    
  // Map() draws a map
  venueMap = new google.maps.Map(document.getElementById('map'), mapOptions);
  setMarkers(venueMap, times, thisID);

}
//=============================var marker;
    var image = {url: 'http://maps.google.com/mapfiles/kml/pal3/icon58.png',};

    function toggleBounce() {
        if (this.getAnimation() !== null) {
          this.setAnimation(null);
        } else {
          this.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    function setMarkers (venueMap, times, thisID){
      var pos = times[thisID][4].MarkerPosition;
      for (var i = 0; i < pos.length; i++) {
        var beach = pos[i];
        var marker = new google.maps.Marker({
          	position: {lat: beach[1], lng: beach[2]},
            map: venueMap,
            icon: image,
            title: beach[0],
            zIndex: beach[3],
            animation: google.maps.Animation.DROP,
        });
        marker.addListener('click', toggleBounce);
      }

  }
 


  function loadScript() {
    var script = document.createElement('script');  
    //var script =  document.getElementById('map').innerHTML;
    script.src = 'http://maps.googleapis.com/maps/api/js?key=AIzaSyA5S6k4ht5IZilRqkoC16qPZROlhUM-HU0&callback=init';
    document.body.appendChild(script);   

  }


  window.onload = loadScript;                          // on load call loadScript()  


