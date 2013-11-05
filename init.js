var mapBBcode = new MapBBCode({
    windowPath: 'mapbbcode/',
//    layers: 'OpenStreetMap',
    defaultZoom: 5,
    defaultPosition: [55, 61],
    viewWidth: 604,
    viewHeight: 300,
    fullViewHeight: 600,
    editorHeight: 400,
    windowWidth: 800,
    windowHeight: 500,
    fullFromStart: false,
    preferStandardLayerSwitcher: true,
    createLayers: function(L) { return [
        L.tileLayer('http://129.206.74.245:8001/tms_r.ashx?x={x}&y={y}&z={z}', { name: 'OpenMapSurfer', attribution: 'Map &copy; <a href=\"http://openstreetmap.org\">OSM</a> | Tiles &copy; <a href=\"http://giscience.uni-hd.de/\">GIScience Heidelberg</a>', minZoom: 0, maxZoom: 19 }),
        MapBBCode.prototype.createOpenStreetMapLayer()
    ]}
});
