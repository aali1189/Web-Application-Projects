let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 32.572387, lng: 15.722061 },
    zoom: 8
  });
}



//L.mapquest.key = 'EMexL8WIaYKLXjKkrBkBiEZzd2w8Hg3c';
//
//// 'map' refers to a <div> element with the ID map
//L.mapquest.map('map', {
//  center: [37.7749, -122.4194],
//  layers: L.mapquest.tileLayer('map'),
//  zoom: 12
//});