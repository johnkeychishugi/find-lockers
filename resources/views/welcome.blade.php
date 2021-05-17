<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Find Locker</title>
    <style>
        html,
        body {
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100%;
            margin: 0;
        }

        .gradient {
            background-color: rgba(0, 0, 0, 0.7);
            /*opacity: 0.7;*/
            color: #fff;
            position: absolute;
            z-index: 15;
        }

        .gradient .links {
            color: red;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 70px;
            z-index: 100;
            opacity: 0.9;
            position: relative;
        }


        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" width="150" height="50" class="d-inline-block align-top" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            @livewire('live-search')
        </div>
    </div>
    @livewireScripts
</body>

</html>
