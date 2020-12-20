<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OUCHI-NOTE</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstorap -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

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

        .top-center {
            position: absolute;
            text-align: center;
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
            margin-bottom: 30px;
        }

        /*カード*/
        .card-height {
            height: 500px;
        }

        .card__textbox_ao > * + * {
            margin-top: 10px;
        }


    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    @if (Route::has('login'))
        <div class="top-center links">
            <a class="text-dark" href="{{route('ouchi.index')}}">OuchiNot</a>
            <a class="text-dark" href="https://calendar.google.com/calendar/u/0/r/month?tab=wc">Calendar</a>
            @auth
                <a class="text-dark" href="{{ url('/home') }}">Home</a>
            @else
                <a class="text-dark" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="text-dark" href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content">
        <h2 class="content text-primary">OuchiNote</h2>
        <img src="https://blog.autumnblue.net/wp-content/uploads/2020/12/house2.jpg" alt="Responsive image">

{{--        <div class="alert alert-warning" role="alert">--}}
{{--            <h4 class="alert-heading">さあ、家づくりをはじめよう</h4>--}}
{{--            <p>Did you find a good housing company?　Use this service to successfully build your precious home!</p>--}}
{{--            <hr>--}}
{{--            <p class="mb-0">Let's start looking for a housing company.</p>--}}
{{--        </div>--}}
{{--        <div class="jumbotron jumbotron-fluid">--}}
{{--            <div class="container">--}}
{{--                <h1 class="display-4">さあ、家づくりをはじめよう</h1>--}}
{{--                <p class="lead">Did you find a good housing company?　Use this service to successfully build your precious home!</p>--}}
{{--            </div>--}}
{{--        </div>--}}

        <h2 class="content text-dark my-3">さあ、家づくりをはじめよう</h2>
        {{--        ouchinote--}}
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="#">OuchiNote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ouchi.index')}}">Let's build a house</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title text-dark">OuchiNote</h5>
                <p class="card-text">お気に入りの住宅会社を登録して、自分だけの家づくりノートを作成</p>
                <a href="{{route('ouchi.index')}}" class="btn btn-dark">Let's build a house</a>
            </div>
        </div>

        {{--        Google Calendar--}}
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="#">Google Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://calendar.google.com/calendar/u/0/r/month?tab=wc">Check!</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title text-dark">Google Calendar</h5>
                <p class="card-text">見学会や相談日などのイベントを、Googleカレンダーに登録・確認</p>
                <a href="https://calendar.google.com/calendar/u/0/r/month?tab=wc" class="btn btn-dark">Check!</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
