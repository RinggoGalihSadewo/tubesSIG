<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <title>Admin | Login</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            overflow: none;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-color: #80A1DA;
        }
        .wrapper{
            margin-top: 6%;
        }
        .login{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40vw;
            height: auto;
            padding: 30px;
            margin: 0 auto;

            background-color: white;
            border-radius: 20px;
        }
        .form-control{
            border: 0px solid black;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
        }
    </style>
  </head>
  <body>

    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-12">
                <center>
                    <img src="/img/logo.png" alt="Logo" height="9%" width="9%" style="border: 1px solid black; border-radius: 50%;">
                </center>
            </div>
            <div class="col-12 mt-4">
                <center>
                    <b>Ayah Dan Ibu Doakan Aku Selamat</b>
                </center>
            </div>
        </div>
        <div class="login mt-5">
            <div class="formLogin container-fluid   ">
                <form action="">
                    @csrf
                    <label for="username"><h4 style="color: #4366A3;">Username</h4></label>
                    <input type="text" class="form-control mt-2" name="username" id="username" placeholder="Username">

                    <label for="pw" class="mt-4" style="color: #4366A3;"><h4>Password</h4></label>
                    <input type="password" class="form-control mt-2" name="password" id="pw" placeholder="Password">
                   
                    <a href="{{url('/dashboard')}}" class="btn btn-primary mt-4" style="width: 100%; background-color: #4366A3;">
                        LOGIN
                        <!-- <button type="submit" class="btn btn-primary mt-4" style="width: 100%; background-color: #4366A3;">LOGIN</button> -->
                    </a>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>