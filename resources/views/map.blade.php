<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div id="map" style="width: 500px; height: 500px;"></div>

    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>

    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}"></script>
    <script type="text/javascript" src="/assets/js/jquery.googlemap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>

    <script>
        // get user location

        var gMap;
        let markersArray = [];

        function clearOverlays() {
            for (var i = 0; i < markersArray.length; i++) {
                markersArray[i].setMap(null);
            }
            markersArray.length = 0;
        }

        $(document).ready(function () {

            navigator.geolocation.getCurrentPosition(pos => {
                let lat = pos.coords.latitude;
                let lng = pos.coords.longitude;
                // add a blue dot marker to the map for current location
                var latlng = new google.maps.LatLng(lat, lng);
                var myOptions = {
                    zoom: 12,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                gMap = new google.maps.Map(document.getElementById("map"), myOptions);
                let currentLocationMarker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat, lng),
                    title: "Şu anki konumunuz",
                    map: gMap,
                    icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                });


                google.maps.event.addListener(gMap, 'bounds_changed', _.throttle(function () {
                    let json = gMap.getBounds().toJSON();
                    $.ajax({
                        'url': '/api/listings-by-bounds',
                        'method': 'POST',
                        'data': {
                            'bounds': json,
                            '_token': '{{csrf_token()}}'
                        },
                        success: function (data) {
                            // clear all markers first
                            clearOverlays();
                            console.log(data);
                            // add markers to the map
                            data.listings.forEach(listing => {

                                var infowindow = new google.maps.InfoWindow({
                                    content: `<a href='${listing.url}' target='_blank'><div>${listing.title}</div> <div>${listing.price} ₺</div>`
                                });
                                var marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(listing.lat, listing.lng),
                                    title: "Title for marker",
                                    map: gMap
                                });
                                markersArray.push(marker);
                                marker.addListener('click', function () {
                                    infowindow.open(gMap, marker);
                                });

                            });
                        }

                    })
                }, 1500));
            })
            //  event is triggered when the map is moved or zoomed. this makes a heavy request to the server, so we need to throttle it
            //  we can use lodash throttle function to throttle the request
            //  https://lodash.com/docs/4.17.15#throttle
            // do it with lodash, so we don't have to write the throttle function ourselves
            //  https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js is included

            //  google.maps.event.addListener(gMap, 'bounds_changed', _.throttle(function () {
            //      let json = gMap.getBounds().toJSON();
            //      $.ajax({
            //          'url': '/api/listings-by-bounds',
            //          'method': 'POST',
            //          'data': {
            //              'bounds': json,
            //              '_token
            //          },
            //          success: function (data) {
            //              // clear all markers first
            //              clearOverlays();
            //              console.log(data);
            //              // add markers to the map
            //              data.listings.forEach(listing => {

            //                  var infowindow = new google.maps.InfoWindow({
            //                      content: "<div>" + listing.title + "</div> <div>" + listing.price + "</div>"
            //                  });
            //                  var marker = new google.maps.Marker({
            //                      position: new google.maps.LatLng(listing.lat, listing.lng),
            //                      title: "Title for marker",
            //                      map: gMap
            //                  });
            //                  markersArray.push(marker);
            //                  marker.addListener('click', function () {
            //                      infowindow.open(gMap, marker);

            //                  });

            //              });
            //          }

            //      })
            //  }, 1000));





        });
    </script>

</body>

</html>
