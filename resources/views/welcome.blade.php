<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <title>Хспорт</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta property="og:type" content="website"/>
    <meta property="og:image" content="images/fb-graph.jpg"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:locale" content="ru_RU"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="#" type="image/png" />
    <meta name="khrug" content="khrug"/>
    <meta name="khrug-color" content="#DFC980"/>
    <meta name="khrug-image" content="#"/>
    <style>
        @font-face {
            font-family: 'Druk';
            src: local('Druk Wide Medium'), local('DrukWideMedium'), url('https://khrug.ru/fonts/druk/Druk-Wide-Medium-Web.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
        }
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{
            border:0;
            font-size:100%;
            font:inherit;
            vertical-align:baseline;
            margin:0;
            padding:0}
        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{
            display:block}
        body{line-height:1}
        ol,ul{list-style:none}
        blockquote,q{quotes:none}
        blockquote:before,blockquote:after,q:before,q:after{content:none}
        table{border-collapse:collapse;border-spacing:0}
        html, body {
            height: 100%;
        }

        .root {
            font-family: 'Arial', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            height: 100%;
            position: relative;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Druk';
        }

        a:focus {
            outline: none;
        }



        .kruzhok-link {
            color: #fff;
            text-decoration: none;
        }

        .kruzhok-link:hover {
            text-decoration: underline;
        }

        .copyright {
            font-size: 21px;
            line-height: 1.2;
            width: 100%;
            color: white;
        }
        .cover {
            font-family: 'Druk';
            color: #fff;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            animation: fadeOut 1s linear 1s 1 forwards;
        }

        .main-link {
            color: inherit;
            text-decoration: none;
            transition: transform 0.2s ease-in-out;
        }

        .main-link:hover {
            transform: scale(1.01);
        }

        .cover__title {
            text-transform: uppercase;
            font-size: 120px;
            animation: pulse .8s linear infinite alternate;
        }

        .cover__subtitle {
            text-transform: uppercase;
            font-size: 30px;
            margin-bottom: 10px;
            animation: pulse .8s linear infinite alternate;
        }

        .bg {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 0;
        }

        .bg__video_index {
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

        .video__color-layer {}

        .copyright {
            position: absolute;
            bottom: 25px;
            z-index: 2;
            font-size: 21px;
            line-height: 1.2;
            width: 100%;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
<div class="root">
    <div class="cover">
        <a href="/clothes" class="main-link">
            <p class="cover__subtitle">@lang('main.1')</p>
            <p class="cover__title">@lang('main.2')</p>
        </a>
    </div>

    <p class="copyright copyright__white">@lang('main.3')
        <a href="https://www.instagram.com/kadyrovkt/" target="_blank" rel="noopener noreferrer" class="kruzhok-link">
            @lang('main.4')
        </a>
    </p>
</div>

<div class="bg">
    <video autoplay loop playsinline class="bg__video_index" poster="#" >
        <source src="https://res.cloudinary.com/dg3iwxvf4/video/upload/v1618335761/fdd_mvhtn9.mp4" type="video/mp4" >
    </video>
     <div class="video__color-layer"></div>
</div>
</body>
</html>
