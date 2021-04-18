<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        @font-face {
            font-family: 'Druk';
            src:  url('https://khrug.ru/fonts/druk/Druk-Wide-Medium-Web.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
        }

        html, body {
            height: 100%;
        }

        .root {
            font-family: 'Arial', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            /*min-height: 100vh;*/
            height: 100%;
            position: relative;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Druk';
        }

        a:focus {
            outline: none;
        }

        .header {
            font-family: 'Druk';
            position: relative;
            z-index: 1;
        }

        .header__container {
            display: flex;
            min-height: 74px;
            align-items: center;
            justify-content: space-between;
            margin: auto;
        }

        .header__logo-container {
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: opacity ease-in-out 0.2s;
        }

        .header__logo-container:hover, .header__link:hover {
            opacity: .7;
        }

        .header__logo, .header__link {
            font-size: 30px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            outline: none;
            display: block;
            transition: opacity ease-in-out 0.2s;
        }

        .kruzhok-link {
            color: #fff;
            text-decoration: none;
        }

        .kruzhok-link:hover {
            text-decoration: underline;
        }

        .footer {
            margin: 0px 0 30px;
            text-align: center;
        }

        .copyright {
            font-size: 21px;
            line-height: 1.2;
            width: 100%;
            color: white;
        }
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}table{border-collapse:collapse;border-spacing:0}

        body {
            background-color: #2b2b2b;
        }

        .root {
            width: calc(100% - 40px);
            margin: auto;
        }

        .card {
            display: block;
            height: 295px;
            margin-bottom: 20px;
            border-radius: 3px;
            color: white;
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-color: rgb(71, 71, 71);
        }

        .card__title {
            font-size: 60px;
            position: absolute;
            top: 20px;
            left: 20px;
            text-transform: uppercase;
            font-family: 'Druk';
            z-index: 1;
            transition: padding 0.1s ease-in-out;
            text-decoration: none;
        }

        .card__text {
            font-size: 24px;
            position: absolute;
            bottom: 20px;
            left: 20px;
            max-width: 400px;
            z-index: 1;
            opacity: 0;
            transition: all 0.2s ease-in-out;
        }

        .card:hover > .card__text {
            opacity: 1;
        }

        .card:hover > .card__bg-video {
            transform: translate(-50%,-50%) scale(1.05);
        }

        .card__bg-video {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            zoom: 0.4;
            transition: all 0.2s ease-in-out;
        }
    </style>
</head>
<body>
@php
    $cur1 ="";
    $cur2 ="";
  if(\Illuminate\Support\Facades\App::getLocale()=='en'){
        $cur1 ='kz';
        $cur2 ='ru';}
  elseif(\Illuminate\Support\Facades\App::getLocale()=='ru'){
        $cur1 ='kz';
        $cur2 ='en';}
  else{
      $cur1 ='en';
      $cur2 ='ru';}
@endphp
<header class="header">
    <div class="header__container">
        <a href="/" class="header__logo-container" style="margin-left: 10px">
            <span class="header__logo" href="/">@lang('main.2')</span>
        </a>
        <nav class="header__nav" >
            <a class="header__link" href="/more" style="margin-left: 450px">
                @lang('main.feedback')
            </a>
        </nav>
        <nav class="header__nav">
            <a class="header__link" href="{{route('locale' ,$cur1)}}" style="margin-right: 10px">
                @lang('main.kz')
            </a>
        </nav>
        <nav class="header__nav">
            <a class="header__link" href="{{route('locale' ,$cur2)}}" style="margin-right: 10px">
                @lang('main.ru')
            </a>
        </nav>
    </div>
</header>


<section class="cards">
    <a class="card " href="">
        <p class="card__title">@lang('main.women')</p>
        <p class="card__text">
            @lang('main.cotton')
        </p>
        <video autoplay="" loop="" muted="" class="card__bg-video" poster="#" style="top: 80%">
            <source src="https://res.cloudinary.com/dg3iwxvf4/video/upload/v1618336090/%D0%B0%D0%BF%D0%B2_yqtziw.mp4" type="video/mp4">
        </video>
    </a>
    <a class="card " href="/products">
        <p class="card__title">@lang('main.men')</p>
        <p class="card__text">
            @lang('main.cotton')
        </p>
        <video autoplay="" loop="" muted="" class="card__bg-video" poster="#" style="top: 80%">
            <source src="https://res.cloudinary.com/dg3iwxvf4/video/upload/v1618337084/videoplayback_1_kvz11u.mp4" type="video/mp4">
        </video>
    </a>
    <a class="card " href="">
        <p class="card__title">@lang('main.kid')</p>
        <p class="card__text">
            @lang('main.cotton')
        </p>
        <video autoplay="" loop="" muted="" class="card__bg-video" poster="#" style="top: 80%">
            <source src="https://res.cloudinary.com/dg3iwxvf4/video/upload/v1618337017/videoplayback_gnjbl6.mp4" type="video/mp4">
        </video>
    </a>

</section>


</body>
</html>
