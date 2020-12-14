<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OUCHI-NOTE</title>

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
                margin-bottom: 30px;
            }
            /*カード*/
            .card_ao{
                width: 288px;
                height: auto;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 4px 15px rgba(0,0,0,.2)
            }

            .card__imgframe_ao{
                width: 100%;
                height: auto;
                /*padding-top: 56.25%;*/
                background: #bbb;
                box-sizing: border-box;
            }

            .card__textbox_ao{
                width: 100%;
                height: auto;
                padding: 20px 18px;
                background: #fff;
                box-sizing: border-box;
            }

            .card__textbox_ao > * + *{
                margin-top: 10px;
            }

            .card__titletext_ao{
                font-size: 20px;
                font-weight: bold;
                line-height: 125%;
            }

            .card__overviewtext_ao{
                font-size: 12px;
                line-height: 150%;
            }



        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    OuchiNote
                </div>
                <h2 class="content">さあ、家づくりをはじめよう</h2>
{{--カード作成--}}
                <div class="links flex-center m-b-md">
                    <a href="{{route('ouchi.index')}}">
                <div class="card_ao">
                    <div class="card__imgframe_ao">
                        <img src="https://blog.autumnblue.net/wp-content/uploads/2020/12/house.jpeg" width="100%" height="auto" alt="家づくり">
                    </div>
                    <div class="card__textbox_ao">
                        <div class="card__titletext_ao">
                            OuchiNote
                        </div>
                        <div class="card__overviewtext_ao">
                            お気に入りの住宅会社を登録して、
                            自分だけの家づくりノートを作成
                        </div>
                    </div>
                </div>
                    </a>
                </div>
                {{--カード作成2--}}
                <div class="links flex-center">
                    <a href="https://calendar.google.com/calendar/u/0/r/month?tab=wc">
                        <div class="card_ao">
                            <div class="card__imgframe_ao">
                                <img src="https://duo-works.com/wp-content/uploads/2018/11/google-calendar.jpg" width="100%" height="auto" alt="Google Calendar">
                            </div>
                            <div class="card__textbox_ao">
                                <div class="card__titletext_ao">
                                    Google Calendar
                                </div>
                                <div class="card__overviewtext_ao">
                                    見学会や相談日などの家づくりイベントを、Googleカレンダーに登録・確認
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
{{--                <div class="links">--}}
{{--                    <a href="{{route('ouchi.index')}}">OuchiNote</a>--}}
{{--                    <a href="https://calendar.google.com/calendar/u/0/r/month?tab=wc"  class="btn btn-outline-info">Google Calendar</a>--}}
{{--                    <a href="https://blog.laravel.com"  class="btn btn-outline-info">Blog</a>--}}
{{--                </div>--}}
            </div>

        </div>

    </body>
</html>
