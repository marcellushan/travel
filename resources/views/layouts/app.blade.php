<!DOCTYPE html>
<html>
<head>
    <title>Travel</title>

    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='shortcut icon' href='{{URL::to('/')}}/images/favicon.ico' type='image/x-icon'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/bootswatch.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/styles.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/printing.css">
    <script src="{{URL::to('/')}}/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webshim/1.16.0/dev/polyfiller.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
    <script>
        webshim.activeLang('en');
        webshims.polyfill('forms');
        webshims.cfg.no$Switch = true;
    </script>
    <script src="{{URL::to('/')}}/js/js_functions.js"></script>
    <script src="{{URL::to('/')}}/jquery/jquery_validation.js"></script>
</head>
<body>
<body  style="background-color:#004990;">
<div class="container">
    <div class="jumbotron">
        <img style="float:left; margin-right: 20px;"  src="{{URL::to('/')}}/images/logo.png"  height="80" width="166" />
        <h1 class="display-1" >Travel</h1>
    </div>
    {{--<div class="main container">--}}
    <div class="well">
@yield('content')
</body>
</html>


