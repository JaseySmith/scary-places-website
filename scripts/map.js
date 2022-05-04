// Initialize and add the map
function initMap() {
    // The location of mammoth
    const mammoth = { lat: 37.6485, lng: -118.9721 };
    // The map, centered at mammoth
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 8,
      center: mammoth,
    });
    // The marker, positioned at mammoth
    const marker = new google.maps.Marker({
      position: mammoth,
      map: map,
    });
  }
  
  window.initMap = initMap;



// Range slider
var input = document.querySelector('input[type="range"]');

var rangeVal = function() {
  var newVal = input.value;
  var target = document.querySelector('.value');
  target.innerHTML = newVal;
}

input.addEventListener("input", rangeVal);