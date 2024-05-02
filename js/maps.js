

function generateOfficeLocation(locationName,latLng){
  var defaultLayers = platform.createDefaultLayers();
    var map = new H.Map(document.getElementById(locationName+'-map'),
    defaultLayers.vector.normal.map,{
     center: latLng,
     zoom: 15,
    pixelRatio: window.devicePixelRatio || 1
  });
  var marker = new H.map.Marker(latLng);
  map.addObject(marker);
    // add a resize listener to make sure that the map occupies the whole container
    window.addEventListener('resize', () => map.getViewPort().resize());

    // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
    var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
    
    // Create the default UI components
    var ui = H.ui.UI.createDefault(map, defaultLayers);
}
  

  

  var platform = new H.service.Platform({
    'apikey': 'hMUTaee_Ph-BvOFQx-Hx0KwqPSx-qQwSrPMQUJVMs_M'
  });
  
  
  generateOfficeLocation("london",{ lat: 51.681730214537794, lng: -0.003061701750403549 });
  generateOfficeLocation("cambridge",{ lat: 52.23541300922571, lng: 0.1542174437756883 });
  generateOfficeLocation("wymondham",{ lat: 52.575952, lng: 1.136284 });
  generateOfficeLocation("yarmouth",{ lat: 52.555813, lng: 1.712979 });

  

  window.onload = function () {
   
  }
                    