<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ouchi-Note</title>

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

        .content {
            text-align: center;
        }

        .links > a {
            color: #636b6f;
            padding: 0 10px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
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

@extends('layouts.app')

@section('content')

    {{--トップナビ案2--}}
    {{--<div class="container-md">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--    @if (Route::has('login'))--}}
    {{--            <div class="top-center links">--}}
    {{--            <a class="content text-dark" href="{{route('ouchi.index')}}">OuchiNot</a>--}}
    {{--            <a class="content text-dark" href="https://calendar.google.com/calendar/u/0/r/month?tab=wc">Calendar</a>--}}
    {{--            @auth--}}
    {{--                <a class="content text-dark" href="{{ url('/home') }}">Home</a>--}}
    {{--            @else--}}
    {{--                <a class="content text-dark" href="{{ route('login') }}">Login</a>--}}
    {{--                @if (Route::has('register'))--}}
    {{--                    <a class="contenttext-dark" href="{{ route('register') }}">Register</a>--}}
    {{--                @endif--}}
    {{--            @endauth--}}
    {{--        </div>--}}
    {{--    @endif--}}
    {{--    </div>--}}
    {{--</div>--}}

    {{--トップ画像--}}
    <div class="content">
        <img class="container-md" src="http://archi-engineer.sakura.ne.jp/ouchinote2.jpg"
             alt="Responsive image">
    </div>
    <div class="container-md">
        <h3 class="content text-dark my-5">さあ、家づくりをはじめよう</h3>
    </div>
    <div class="container-md">
        {{--ouchinote--}}
        <div class="card text-center mb-3">
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
                <p class="card-text">お気に入りの住宅会社を登録して、あなただけの家づくりノートを作成</p>
                <a href="{{route('ouchi.index')}}" class="btn btn-dark">Let's build a house</a>
            </div>
        </div>

        {{--Google Calendar--}}
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

@endsection

</body>
</html>
