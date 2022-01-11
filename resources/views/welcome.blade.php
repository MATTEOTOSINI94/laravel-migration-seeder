<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 50px;
            }
        </style>
    </head>
    <body>
      <header>
          <div><h1 class="text-center">Viaggi</h1></div>
      </header>
    
      <main style="">
        <div class="row m-0 text-center justify-content-center">
            
        @foreach ($viaggio as $trip)
        <div class="col-4">
          <img style="width:300px" src="{{$trip["img_place"]}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$trip["location_trip"]}}</h5>
            <p class="card-text">{{$trip["description"]}}</p>
            <div><p>Giorni Pacchetto: {{$trip["days_stays"]}} <br> Price: {{$trip["price"]}}$</p></div>
           
            <a href="#" class="btn btn-primary">Go</a>
          </div>
        </div>
        @endforeach
    </div>
      </main>
    </body>
</html>
