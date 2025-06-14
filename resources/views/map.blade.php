<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <title>Map - inaRISK Web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
  <!-- Geocoder CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css"/>

  <style>
    body, html { margin: 0; padding: 0; height: 100%; }
    #map { width: 100%; height: 100vh; }
    .layer-panel {
      position: absolute;
      top: 10px;
      left: 10px;
      width: 280px;
      background: #f2f2f2;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      font-family: sans-serif;
      font-size: 14px;
      z-index: 999;
    }
    .layer-panel h3 {
      margin-top: 0;
      color: orange;
    }
    .section { margin-bottom: 10px; }
    .section hr { border: 1px solid orange; }
    .section label { display: block; margin-bottom: 5px; }
    .apply-btn {
      background-color: orange;
      border: none;
      color: white;
      padding: 6px 15px;
      cursor: pointer;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div id="map"></div>

<!-- UI Layer Panel -->
<div class="layer-panel">
  <h3>➤ Layer Services</h3>

  <div class="section">
    <label><input type="radio" name="basemap" value="road" checked> Road</label>
    <label><input type="radio" name="basemap" value="satellite"> Satellite</label>
    <label><input type="radio" name="basemap" value="terrain"> Terrain</label>
  </div>

  <hr>

  <div class="section">
    <label><input type="checkbox" class="hazard" value="banjir" checked> Banjir</label>
    <label><input type="checkbox" class="hazard" value="kekeringan"> Kekeringan</label>
    <label><input type="checkbox" class="hazard" value="gempabumi"> Gempabumi</label>
    <label><input type="checkbox" class="hazard" value="longsor"> Tanah Longsor</label>
  </div>

  <hr>

  <div class="section">
    <label><input type="radio" name="category" value="bahaya" checked> Bahaya</label>
    <label><input type="radio" name="category" value="kerentanan"> Kerentanan</label>
    <label><input type="radio" name="category" value="risiko"> Risiko</label>
  </div>

  <hr>

  <div class="section">
    <label><input type="checkbox"> Topografi</label>
    <label><input type="checkbox"> Hilshade</label>
    <label><input type="checkbox" checked> Batas Admin</label>
  </div>

  <button class="apply-btn" onclick="applyLayers()">Apply</button>
</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<!-- Geocoder JS -->
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

<script>

  const map = L.map('map', {
    center: [-6.2, 106.8],
    zoom: 6,
    minZoom: 2.5,
    maxZoom: 15,
    worldCopyJump: false,
    inertia: false,
    maxBoundsViscosity: 1.0
  });

  map.setMaxBounds([[-85, -180], [85, 180]]);

  const baseMaps = {
    road: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }),
    satellite: L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
      subdomains: ['mt0','mt1','mt2','mt3'],
      attribution: '© Google'
    }),
    terrain: L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenTopoMap contributors'
    })
  };

  baseMaps.road.addTo(map);

  const hazardLayers = {
    banjir: L.geoJSON({
      "type": "FeatureCollection",
      "features": [{
        "type": "Feature",
        "geometry": {
          "type": "Point",
          "coordinates": [106.8, -6.2]
        },
        "properties": { "name": "Banjir" }
      }]
    }).addTo(map),
    kekeringan: L.geoJSON({
      "type": "FeatureCollection",
      "features": [{
        "type": "Feature",
        "geometry": {
          "type": "Point",
          "coordinates": [107.0, -6.5]
        },
        "properties": { "name": "Kekeringan" }
      }]
    }).addTo(map),
    gempabumi: L.geoJSON({
      "type": "FeatureCollection",
      "features": [{
        "type": "Feature",
        "geometry": {
          "type": "Point",
          "coordinates": [107.5, -6.3]
        },
        "properties": { "name": "Gempabumi" }
      }]
    }).addTo(map),
    longsor: L.geoJSON({
      "type": "FeatureCollection",
      "features": [{
        "type": "Feature",
        "geometry": {
          "type": "Point",
          "coordinates": [107.2, -6.7]
        },
        "properties": { "name": "Tanah Longsor" }
      }]
    }).addTo(map)
  };

  function applyLayers() {
    const selectedBase = document.querySelector('input[name="basemap"]:checked').value;
    map.eachLayer(layer => map.removeLayer(layer));
    baseMaps[selectedBase].addTo(map);

    for (let key in hazardLayers) {
      map.removeLayer(hazardLayers[key]);
    }

    document.querySelectorAll('.hazard:checked').forEach(cb => {
      const layer = hazardLayers[cb.value];
      if (layer) map.addLayer(layer);
    });
  }

  L.Control.geocoder({
    defaultMarkGeocode: true,
    placeholder: "Cari provinsi/kota/kecamatan...",
    errorMessage: "Lokasi tidak ditemukan",
    geocoder: L.Control.Geocoder.nominatim()
  }).addTo(map);
</script>

</body>
</html>
