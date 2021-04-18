<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
        @font-face {
            font-family: 'Druk';
            src:  url('https://khrug.ru/fonts/druk/Druk-Wide-Medium-Web.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
        }

        html, body {
            height: 100%;
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
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}table{border-collapse:collapse;border-spacing:0}

        body {
            background-color: #2b2b2b;
        }
        form { max-width:420px; margin:50px auto; }

        .feedback-input {
            color:white;
            font-family: 'Druk';
            font-weight:500;
            font-size: 18px;
            border-radius: 5px;
            line-height: 22px;
            background-color: transparent;
            border:2px solid #fff;
            transition: all 0.3s;
            padding: 13px;
            margin-bottom: 15px;
            width:100%;
            box-sizing: border-box;
            outline:0;
        }

        .feedback-input:focus { border:2px solid #fff; }

        textarea {
            height: 150px;
            line-height: 150%;
            resize:vertical;
        }

        [type="submit"] {
            font-family: 'Druk';
            width: 100%;
            background:#fff;
            border-radius:5px;
            border:0;
            cursor:pointer;
            color:#2b2b2b;
            font-size:24px;
            padding-top:10px;
            padding-bottom:10px;
            transition: all 0.3s;
            margin-top:-4px;
            font-weight:700;
        }
        [type="submit"]:hover { background:#fff; }

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
        <nav class="header__nav">
            <a class="header__link" href="{{route('locale' ,$cur1)}}" style="margin-left: 800px">
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

<form method="POST" action="{{ route('add-post')}}" enctype ="multipart/form-data">
    @csrf
    <input name="name" type="text" class="feedback-input" placeholder=" @lang('main.name')" />
    <input name="email" type="text" class="feedback-input" placeholder=" @lang('main.email')" />
    <textarea name="sms" class="feedback-input" placeholder=" @lang('main.comment')"></textarea>
    <input type="file" name="image" class="feedback-input" placeholder="Image">
    <button type="submit" >  @lang('main.send')</button>
</form>
<script>
</script>

</body>
</html>
