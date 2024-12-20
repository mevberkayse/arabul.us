<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haritada Ara</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

    .infowindow-content {
        width: 200px;
        height: 200px;
        text-align: center;
        font-family: Arial, sans-serif;
        padding: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        background-color: #fff;
    }

    .infowindow-image {
        width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .infowindow-title {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
        color: black;
        text-decoration: none;
        display: inline-block;
        transition: color 0.2s ease;
        /* Hover geçişi için */
    }

    .infowindow-title:hover {
        text-decoration: underline;
        color: #820933;
        /* Hover rengi beyaz */
    }

    .infowindow-price {
        font-size: 14px;
        color: #820933;
        font-weight: bold;
    }
</style>

<body>
    <div id="searchMap" style="width: 100%; height: 100%;"></div>

    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>


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
                gMap = new google.maps.Map(document.getElementById("searchMap"), myOptions);
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
                                    content: `
        <div class="infowindow-content">
            <img src='https://via.placeholder.com/200x150' alt='Ürün Resmi' class='infowindow-image'/>
            <a href='${listing.url}' target='_blank' class='infowindow-title'>${listing.title}</a>
            <div class='infowindow-price'>${listing.price} ₺</div>
        </div>`
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
        });
    </script>

</body>

</html>
