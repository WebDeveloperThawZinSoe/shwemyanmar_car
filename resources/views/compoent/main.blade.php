<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Style -->
    <style>
        #hero{
            background-image:url("{{ URL::asset('images/template/one.jpg') }}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            color: white;
            border-radius: 0px;
        }

        #banner-one{
            background-image:url("{{ URL::asset('images/template/banner-two.jpg') }}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            color: white;
            border-radius: 0px;
        }

        #banner-two{
            background-image:url("{{ URL::asset('images/template/banner-two.jpg') }}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            background-attachment: fixed;
            color: white;
            border-radius: 0px;
        }

        .mini-footer{
            background-color: black !important;
            color: white;
            padding-top: 40px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>

    @include('compoent.nav')
    @yield('content')

    <div class="mini-footer" style="margin-top:40px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-text">
            <p>© 2022
              <a href="#">ShweMyanmar</a>. All rights reserved. Created by
              <a href="#">Thaw ZIn Soe</a>
            </p>
          </div>

          <div class="go_top">
            <span class="icon-arrow-up"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>