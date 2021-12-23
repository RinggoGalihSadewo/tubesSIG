<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

    <!-- My Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- My Font Dancing Script -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@300&display=swap" rel="stylesheet">

    <title>Wilayah Covid</title>
  </head>
  <body onload="init()">

    <div class="container-sm-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse fw-bold" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/beranda')}}">Beranda</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="#edukasi">Edukasi</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="#peta_sebaran">Sebaran</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>

            <section>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="/img/slide1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="/img/slide2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="/img/slide3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <section id="edukasi">
                <div class="edukasi">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center" >
                            <h1 style="border-bottom: 2px solid white;"><b>Edukasi</b></h1>
                        </div>
                    </div>
                    <center>
                    <div class="row mt-5">
                        <div class="col-12 col-sm-4">
                            <img src="/img/edukasi1.png">
                        </div>
                        <div class="col-12 col-sm-4 mt-4 mt-sm-0">   
                            <img src="/img/edukasi2.png">
                        </div>
                        <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                            <img src="/img/edukasi3.png">
                        </div>                                                
                    </div>
                    </center>
                </div>
            </section>

            <section id="peta_sebaran">
                <div class="peta_sebaran">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center" >
                            <h1 style="border-bottom: 2px solid white;"><b>Peta Persebaran</b></h1>
                        </div>
                    </div>
                    <div class="container peta_info mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="info1">
                                    <h3>Nama Kabupaten</h3>
                                </div>
                                <div class="info2 mt-3">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Lampung Barat
                                        </button>
                                        </h2>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Lampung Selatan
                                        </button>
                                        </h2>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Lampung Tengah
                                        </button>
                                        </h2>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Lampung Timur
                                        </button>
                                        </h2>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Lampung Utara
                                        </button>
                                        </h2>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Mesuji
                                        </button>
                                        </h2>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Bandar Lampung
                                        </button>
                                        </h2>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Pringsewu
                                        </button>
                                        </h2>
                                    </div>                                        
                                    </div>
                                </div>                          
                            </div>
                            <div class="col-12 col-sm-8">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="row mt-5">
                        <div class="col-12">
                        <center>
                        <div class="row">
                            <div class="col-4">
                                <div>
                                    <img src="/img/red.png" alt="">
                                    <b>Resiko Tinggi</b>
                                </div>
                            </div>
                            <div class="col-4">
                                <div>
                                    <img src="/img/yellow.png" alt="">
                                    <b>Resiko Sedang</b>
                                </div>
                            </div>
                            <div class="col-4">
                                <div>
                                    <img src="/img/green.png" alt="">
                                    <b>Resiko Rendah</b>
                                </div>
                            </div>
                        </div>
                    </center>
                        </div>
                    </div>
                </div>   
            </section>

            <section>
                <div class="container riwayat mt-4">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center" >
                            <h1 style="border-bottom: 2px solid #0F7CE1;"><img src="/img/riwayat.png" alt=""> <b>Riwayat</b></h1>
                        </div>
                    </div>
                    <div style="margin-top: 4%;">
                        <div class="row">
                            <div class="col-2">
                                <h2><b>Kabupaten</b></h2>
                            </div>
                            <div class="col-4">
                            <select onchange="test()" id="wilayah" class="form-select" aria-label="Default select example">
                                <option value="lampungBarat" selected>Lampung Barat</option>
                                <option value="lampungSelatan">Lampung Selatan</option>
                                <option value="lampungTengah">Lampung Tengah</option>
                                <option value="lampungTimur">Lampung Timur</option>
                                <option value="lampungUtara">Lampung Utara</option>
                                <option value="mesuji">Mesuji</option>
                                <option value="bandarLampung">Bandar Lampung</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Positif</th>
                                    <th scope="col">Sembuh</th>
                                    <th scope="col">Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">12/03/2020</th>
                                    <td id="positif">31</td>
                                    <td id="sembuh">32</td>
                                    <td id="meninggal">53</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="mt-4">
                <center>
                    <b>Copyright 2021 - TEAM ADIDAS</b>
                </center>
            </footer>
    </div>
    
    <!-- Javascript leaflet -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

    <!-- My javascript leaflet -->
    <script src="/js/index.js"></script>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

  <script>


        var positf = document.getElementById('positif') 
        var sembuh = document.getElementById('sembuh')
        var meninggal = document.getElementById('meninggal')

        var data 

    function init(){
        test2()
        getData()
    }

  async function getData(){
    await fetch('http://localhost:4000/data/get')
    .then(response => response.json())
    .then(json => {
        data = json[0].data
    })

    console.log(data)

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

    var lampungTimur = L.polygon([
        [-5.334378846376091, 105.809326171875],
        [-5.2386573862016, 105.86151123046875],
        [-4.814575430505828, 105.85052490234375],
        [-4.814575430505828, 105.6170654296875],
        [-4.874784352885863, 105.07598876953125],
        [-4.9979220896098475, 105.2325439453125],
        [-5.263272887191521, 105.38360595703125],
        [-5.334378846376091, 105.809326171875]
    ]).addTo(map);

    lampungTimur.bindPopup(`Lampung Timur <br><br> Positif: ${data.lampungTimur.positif}<br><br> Negatif: ${data.lampungTimur.sembuh} <br><br> Meninggal: ${data.lampungTimur.meninggal}`);

    var lampungSelatan = L.polygon([
        [-4.882994243904852, 105.09521484375],
        [-5.014338718527196, 104.688720703125],
        [-5.501171835635236, 104.644775390625],
        [-5.801826969242172, 105.18310546875],
        [-5.555847953199212, 105.1885986328125],
        [-5.227716852021079, 105.1116943359375],
        [-5.2386573862016, 105.3369140625],
        [-5.867403444598698, 105.6390380859375],
        [-5.8127569137510084, 105.787353515625],
        [-5.348052128123205, 105.7928466796875],
        [-4.882994243904852, 105.09521484375]
    ]).addTo(map);

    lampungSelatan.bindPopup(`Lampung Selatan <br><br> Positif: ${data.lampungSelatan.positif}<br><br> Negatif: ${data.lampungSelatan.sembuh} <br><br> Meninggal: ${data.lampungSelatan.meninggal}`);

    var lampungTengah = L.polygon([
        [-5.00339434502215, 104.6832275390625],
        [-4.817312315826116, 105.8367919921875],
        [-4.149200693099276, 105.8367919921875],
        [-3.7710780569298117, 105.34790039062499],
        [-4.160158150193397, 104.9468994140625],
        [-4.335456463573485, 104.3865966796875],
        [-4.773520832778661, 104.26025390625],
        [-5.00339434502215, 104.6832275390625]
    ]).addTo(map);

    lampungTengah.bindPopup(`Lampung Tengah <br><br> Positif:${data.lampungTengah.positif} <br><br> Negatif: ${data.lampungTengah.sembuh} <br><br> Meninggal: ${data.lampungTengah.meninggal}`);

    var bandarLampung = L.polygon([
        [-5.585917657852072, 105.23803710937499],
        [-5.446490692533117, 105.281982421875],
        [-5.695248967605625, 105.52230834960938],
        [-5.662451740971942, 105.53329467773438],
        [-5.242760037159453, 105.3369140625],
        [-5.230452003501331, 105.11444091796874],
        [-5.591384711305773, 105.19134521484374],
        [-5.585917657852072,  105.23803710937499]
    ]).addTo(map);

    bandarLampung.bindPopup(`Bandar Lampung <br><br> Positif: ${data.bandarLampung.positif}<br><br> Negatif:${data.bandarLampung.sembuh} <br><br> Meninggal: ${data.bandarLampung.meninggal}`);

    var lampungBarat = L.polygon([
        [-4.784468966579362 ,104.2547607421875 ],
        [ -5.55038056899795 , 104.4085693359375 ],
        [-5.954826733929924 , 104.6282958984375  ],
        [-5.927508440962705 , 104.71618652343749 ],
        [-5.484768018141262 , 104.62280273437499, ],
        [-4.9979220896098475 , 104.666748046875 ],
        [ -4.784468966579362 , 104.2547607421875 ]
    ]).addTo(map);

    lampungBarat.bindPopup(`Lampung Barat <br><br> Positif: ${data.lampungBarat.positif}<br><br> Negatif: ${data.lampungBarat.sembuh}<br><br> Meninggal: ${data.lampungBarat.meninggal}`);

    var lampungBarat2 = L.polygon([   
        [-4.335456463573485,104.4085693359375],
        [-4.006740062068221 ,103.74938964843749  ],
        [-4.653079918274038 ,103.194580078125],
        [-5.834616165610046 ,104.556884765625],
        [ -4.335456463573485 ,104.4085693359375]
    ]).addTo(map);

    lampungBarat2.bindPopup(`Lampung Barat <br><br> Positif: ${data.lampungBarat.positif}<br><br> Negatif: ${data.lampungBarat.sembuh}<br><br> Meninggal: ${data.lampungBarat.meninggal}`);

    // var polygon7 = L.polygon([
    //     [-4.127285323245357 , 105.84228515625 ],
    //     [ -4.116327411282937 , 105.84228515625],
    //     [-4.116327411282937 ,105.84228515625],
    //     [-4.127285323245357 ,105.84228515625 ]
    // ]).addTo(map);

    var mesuji = L.polygon([
        [-4.127285323245357 , 105.86975097656249],
        [ -3.4585910482810767 , 105.8203125 ],
        [-3.370856476926319 , 105.2325439453125 ],
        [ -3.535352145400865, 104.8590087890625 ],
        [ -3.8204080831949407 , 104.8370361328125],
        [ -3.9574209405181326 , 105.150146484375],
        [ -3.7765593098768635 , 105.3424072265625],
        [-4.127285323245357 , 105.86975097656249]
    ]).addTo(map);

    mesuji.bindPopup(`Mesuji <br><br> Positif: ${data.mesuji.positif}<br><br> Negatif: ${data.mesuji.sembuh}<br><br> Meninggal: ${data.mesuji.meninggal}`);


    var lampungUtara = L.polygon([
        [-3.8204080831949407 , 104.820556640625 ],
        [-4.17659404992233 , 104.08447265624999 ],
        [-4.3299789981207795, 104.3865966796875],
        [-4.149200693099276, 104.95788574218749 ],
        [-3.9738609758391017 , 105.13916015625 ],
        [ -3.8204080831949407,104.820556640625]
    ]).addTo(map);

    lampungUtara.bindPopup(`lampung Utara <br><br> Positif: ${data.lampungUtara.positif}<br><br> Negatif: ${data.lampungBarat.sembuh}<br><br> Meninggal: ${data.lampungUtara.meninggal}`);

    // Status 
    lampungUtara.setStyle({
        color: data.lampungUtara.positif > 30 ? 'red' : 'green'
    });

    lampungTengah.setStyle({
        color: data.lampungTengah.positif > 30 ? 'red' : 'green'
    });


    lampungTimur.setStyle({
        color: data.lampungTimur.positif > 30 ? 'red' : 'green'
    });


    lampungBarat.setStyle({
        color: data.lampungBarat.positif > 30 ? 'red' : 'green'
    });

    lampungBarat2.setStyle({
        color: data.lampungBarat.positif > 30 ? 'red' : 'green'
    });

    lampungSelatan.setStyle({
        color: data.lampungSelatan.positif > 30 ? 'red' : 'green'
    });

    bandarLampung.setStyle({
        color: data.bandarLampung.positif > 30 ? 'red' : 'green'
    });


    mesuji.setStyle({
        color: data.mesuji.positif > 30 ? 'red' : 'green'
    });

}


      function test2(){
        fetch(`http://localhost:4000/data/lampungBarat`)
            .then(response => response.json())
            .then(response => {
                positif.innerHTML = response.positif ;
                sembuh.innerHTML = response.sembuh ;
                meninggal.innerHTML = response.meninggal ;
            })
      }


      function test(){
        var value = document.getElementById('wilayah').value 
         

          fetch(`http://localhost:4000/data/${value}`)
            .then(response => response.json())
            .then(response => {
                positif.innerHTML = response.positif ;
                sembuh.innerHTML = response.sembuh ;
                meninggal.innerHTML = response.meninggal ;
            })
      }
</script>
</html>