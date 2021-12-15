<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('title')</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        nav{
            display: flex;
            width: 100%;
            height: auto;   
        }
        .sidebar{
            background-color: #CCAC02;
            padding: 20px;
            height: 100vh;
        }
        .sidebar a{
            font-size: 20px;
            color: white;
            text-decoration: none;
        }
        .sidebarLink{
            margin-top: 32%;
        }
        .content{
            padding: 0px;  
        }
        footer{
            width: 100%;
            height: auto;
            padding: 40px;
            background-color: #9BA9C0;
        }
    </style>
  </head>
  <body>

    <div class="container-fluid">
        <div class="row" class="margin: 12px 0 12px 0">
            <div class="col-2 sidebar">
                <h3 style="padding-top: 11%;">DASHBOARD</h3>
                <div class="sidebarLink">
                    <div>
                        <a href="{{url('/dashboard')}}"><img src="/img/vector.png" alt=""> Peta Sebaran</a>
                    </div>
                    <br>
                    <div>
                        <a href="{{url('/login')}}"><img src="/img/Frame.png" alt=""> Logout</a>
                    </div>
                </div>
            </div>

            <div class="col-10 content">
            <div style="background-color: #4366A3; width: 100%; padding: 20px;">
                <h2 class="text-center text-white">Admin Website Persebaran COVID-19 Provinsi Lampung <img src="/img/adminLogo.png" alt="" width="80px" height="80px" style="border: 1px solid black; border-radius: 50%;"></h2>
            </div>
            <div style="padding: 10%">
                @yield('mainContent')
            </div>
            </div>
            
            <footer>
                <center>
                    <b>Copyright 2021 - TEAM ADIDAS</b>
                </center>
            </footer>

        </div>
    

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://kit.fontawesome.com/dfa1cbbb7b.js" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>