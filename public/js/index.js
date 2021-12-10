var map = L.map('map').setView([-5.42544, 105.25803], 10);

var marker = L.marker([-5.42544, 105.25803]).addTo(map);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Team Adidas | Tugas Besar Sistem Informasi Geografis',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoicmluZ2dvMDciLCJhIjoiY2t4MHB2ZjJ0MHV3YzJycHo0OHhzZGIwOSJ9.odEp1QZ9gCcw9biNi2j6Tg'
}).addTo(map);

var polygon = L.polygon([
    [-5.680217137155463, 105.523681640625],
    [-5.889260560133925, 105.72418212890625],
    [-5.4082109285908295, 105.80108642578125],
    [-5.308398772287252, 105.71044921875],
    [-5.3726632649978034, 105.14190673828125],
    [-5.36172510441336, 104.79583740234375],
    [-5.512107462769789, 104.68185424804688],
    [-5.710280404765265, 104.9853515625],
    [-5.77996644503404, 105.21743774414062],
    [-5.595484967884634, 105.16937255859375],
    [-5.580450553378533, 105.24215698242188],
    [-5.453326108568553, 105.29571533203125],
    [-5.680217137155463, 105.523681640625]
]).addTo(map);

polygon.bindPopup('Daerah Lampung');