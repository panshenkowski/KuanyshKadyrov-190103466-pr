<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta property="og:type" content="website">
    <meta property="og:image" content="images/fb-graph.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://khrug.ru/sport">
    <meta property="og:title" content="Село Хрюг">
    <meta property="og:description" content="Подростки села Хрюг рассказывают о месте, в котором живут.">
    <meta property="og:locale" content="ru_RU">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <style>

        @font-face {
            font-family: 'Druk';
            src:  url('https://khrug.ru/fonts/druk/Druk-Wide-Medium-Web.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
        }
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{
            border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0}
        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{
            display:block}
        body{line-height:1}
        ol,ul{list-style:none}
        blockquote,q{quotes:none}
        blockquote:before,blockquote:after,q:before,q:after{content:none}
        table{border-collapse:collapse;border-spacing:0}

        .video-cover {
            height: 80vh;
            position: relative;
        }

        .header, .content, .footer {
            width: calc(100% - 40px);
            margin: auto;
        }

        .content {
            width: 100%;
            max-width: 900px;
            margin: auto;
        }

        .header__container  {
            text-align: center;
        }

        .header__link {
            padding-bottom: 3px;
        }

        .bg {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 0;
            opacity: 0;
            animation: fadeIn 0.4s linear 0.4s 1 forwards;
            background-size: cover;
            background-position: center;
            background-color: #2b2b2b;
        }

        .bg__video {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            zoom: 0.4;
        }

        .video__color-layer {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .video-title {
            text-align: center;
            max-width: 100%;
            color: #fff;
        }

        .video-title__heading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 108px;
            text-transform: uppercase;
        }

        .video-title__authors {
            position: absolute;
            left: 50%;
            bottom: 20px;
            transform: translateX(-50%);
            font-size: 21px;
            width: 100%;
            line-height: 1.4;
        }

        .content__title {
            font-family: 'Druk';
            font-size: 54px;
            width: 100%;
            margin: 60px 0;
            line-height: 1.2;
            text-align: center;
        }


        .content__note {
            font-size: 12px;
            margin-top: 5px;
            text-align: center;
        }

        .content__video_container {
            width: 100%;
            margin: 20px 0;
        }

        .content__video {
            width: 100%;
            background-color: #2b2b2b;
        }

        .content__text {
            font-size: 21px;
            width: 100%;
            max-width: 785px;
            margin-top: 30px;
            line-height: 1.6;
        }

        .copyright, .kruzhok-link {
            color: black;
        }

        .footer {
            margin-top: 50px;
            margin-bottom: 30px;
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
            font-family: 'Druk' ;
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


        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
                z-index: 0;
            }
        }

        @keyframes pulse {
            from {opacity: 1;}
            to {opacity: .7;}
        }

        @keyframes loading {
            0% {
                opacity: 0;
                border-color: transparent;
                transform: scale(0.5) rotate(0);
            }
            40% {
                opacity: 1;
                border-color: #fff;
            }
            80% {
                opacity: 0;
                transform: scale(1.2);
            }
            100% {
                opacity: 0;
                transform: scale(0);
            }
        }


        .text-block {
            font-size: 14px;
            font-family: 'Druk';
            line-height: 2;
            padding: 100px;
            border: 1px solid black;
        }
        .card-img-tiles {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            background-color: #fff;
            z-index: 5;
        }

        .card-img-tiles .main-img>img,
        .card-img-tiles .thumblist>img {
            display: block;
            width: 100%;
            border-radius: 15px;
        }

        .card-img-tiles .main-img {
            width: 67%;
            padding-right: .375rem
        }

        .card-img-tiles .thumblist {
            width: 33%;
            padding-left: .375rem
        }

        .card-img-tiles .thumblist>img {
            margin-bottom: .75rem
        }

        .card-img-tiles .thumblist>img:last-child {
            margin-bottom: 0
        }

        .mb-grid-gutter {
            margin-bottom: 30px !important;
        }
        body{
            font-family: 'Druk';
        }


    </style>
</head>
<body>
<div class="root">
    <section class="video-cover">

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
                <a href="/" class="header__logo-container hh" style="margin-left: 10px">
                    <span class="header__logo" href="/">@lang('main.2')</span>
                </a>
                <nav class="header__nav" >
                    <a class="header__link" href="/more" style="margin-left: 400px">
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
        <div class="bg sport-cover">
            <video autoplay="" loop="" muted="" class="bg__video bg__video_text-page" poster="#">
                <source src="https://res.cloudinary.com/dg3iwxvf4/video/upload/v1618337084/videoplayback_1_kvz11u.mp4" type="video/mp4">
            </video>
            <div class="video__color-layer">
                <div class="video-title">
                    <h2 class="video-title__heading">@lang('main.men')</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="content" style="margin-top: 20px;">
        <div class="container pb-5 mb-sm-1">
            <!-- Categories grid-->
            <div class="row">
            @foreach($products as $product)
                <!-- Product -->
                    @php
                        $image = '';
                        if(count($product->images) > 0){
                            $image = $product->images[0]['img'];
                        } else {
                            $image = 'https://www.creativefabrica.com/wp-content/uploads/2019/03/Monogram-SH-Logo-Design-by-Greenlines-Studios-580x386.jpg';
                        }
                    @endphp
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 mb-grid-gutter">
                        <a class="card-img-tiles" href="">
                            <div class="main-img"><img src="{{$image}}" alt="{{$product->title}}"></div>
                            <div class="thumblist">
                                @if($image == 'https://www.creativefabrica.com/wp-content/uploads/2019/03/Monogram-SH-Logo-Design-by-Greenlines-Studios-580x386.jpg')

                                @else
                                    @foreach($product->images as $img)
                                        @if($loop->first)
                                            <img src="{{$img['img']}}" alt="{{$product->title}}">
                                        @else
                                            <img src="{{$img['img']}}" alt="{{$product->title}}">
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </a>
                        <div class="card-body border mt-n1 py-4 text-center" style="border-radius: 15px;">
                            <h2 class="h5 mb-1">{{$product->title}}</h2><span class="d-block mb-3 font-size-xs text-muted"> <span class="font-weight-semibold">@lang('main.$'){{$product->price}}</span></span><a class="btn btn-pill btn-outline-primary btn-sm" href="shop-style1-ls.html">@lang('main.buy')</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>


</body>
</html>
