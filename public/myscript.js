var po = org.polymaps;

var map = po.map()
    .container(document.getElementById("map").appendChild(po.svg("svg")))
    .center({lat: 40, lon: -95})
    .zoomRange([3, 7])
    .zoom(4)
    .add(po.interact());

map.add(po.image()
    .url(po.url("http://{S}tile.cloudmade.com"
    + "/1a1b06b230af4efdbb989ea99e9841af" // http://cloudmade.com/register
    + "/20760/256/{Z}/{X}/{Y}.png")
    .hosts(["a.", "b.", "c.", ""])));

map.add(po.geoJson()
    .url("http://polymaps.appspot.com/state/{Z}/{X}/{Y}.json")
    .on("load", load));

function load(e) {
  for (var i = 0; i < e.features.length; i++) {
    var feature = e.features[i] , d = undefined; // states[feature.data.id.substring(6)];
    if (d == undefined) {
      feature.element.setAttribute("display", "none");
    } else {
      feature.element.setAttribute("class", "q" + quantile(d) + "-" + 9);
      feature.element.appendChild(po.svg("title").appendChild(
          document.createTextNode(feature.data.properties.name + ": "
          + format(d).replace(/ [ ]+/, " ")))
          .parentNode);
    }
  }
}

