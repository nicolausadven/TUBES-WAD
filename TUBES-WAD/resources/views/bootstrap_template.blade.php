<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DISDUKCAPIL CIANJUR</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #FCD484">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <span class="navbar-brand" href="#">
                <a href="{{'/home'}}"> <img src="{{asset('elkatp/disduk 2.png')}}" height="60px" class="d-inline-block align-top" alt=""></a>
                <a type="button" href="{{ url('/persyaratan')}} "> <img src="{{asset('elkatp/syart.png')}}" height="60px" class="ml-3 d-inline-block align-top" alt=""></a>
                <a type="button" href="{{ url('/bantuan')}} "> <img src="{{asset('elkatp/bantuan.png')}}" height="60px" class="d-inline-block align-top" alt=""></a>
            </span>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>

                <ul class="navbar-nav ">
                    <!-- PROFILE DROPDOWN -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navDropDownLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('elkatp/profile.png')}}" height="50px" class="ml-3 d-inline-block align-top" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navDropDownLink">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/login-pengguna')}}">Logout</a>
                        </div>
                    </li>
                </ul>

            </div>


        </div>

    </nav>

    @yield('content')



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</body>
<div style="margin-top:200px;">
    <footer class="fixed-bottom mt-top" style="background-color: #FCD484;">
        <div class="container">
            <div class="mx-auto col-lg-12 py-2 text-center">
                <p>
                    &copy; Made By Kelompok 7
                </p>
            </div>
        </div>
    </footer>
</div>

</html>