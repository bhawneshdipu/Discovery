var pg={lat:19.136386,lng: 72.828240}
var pg1={lat:19.136376,lng: 72.828241}
var iconBase = 'logo/';
var icons = {
    discovery: {
        name: 'Discovery Restaurant',
        icon: iconBase + 'icon.png'
    }
};

var features = [
    {
        position: pg,
        type: 'discovery'
    }
];
function myMap() {

    var mapOptions = {
        center: pg,
        zoom: 25,
        mapTypeId: 'roadmap',
        gestureHandling: 'cooperative'
    };
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
        position: pg1,
        map: map
    });

    // Create markers.
    features.forEach(function(feature) {
        var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
        });
    });

    var legend = document.getElementById('legend');
    for (var key in icons) {
        var type = icons[key];
        var name = type.name;
        var icon = type.icon;
        var div = document.createElement('div');
        div.innerHTML = '<img src="' + icon + '" width="80px" height="30px"> ' + '<a style="font-size:20px;color:dodgerblue;" >'+name+'</a>';
        legend.appendChild(div);
    }

    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);

}

