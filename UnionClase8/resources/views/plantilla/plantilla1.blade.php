<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="author" content="@yield('author')">
        <meta name="description" content="@yield('description')" />
        {!!Html::style('css/bootstrap.css')!!}
       </head>
       <body>
       	  @yield('content')
       	  <footer>
       	  </footer>
       	  {!!Html::script('js/app.js')!!} 
        {!!Html::script('js/npm.js')!!} 
         {!!Html::script('js/bootstrap.min.js')!!} 
        {!!Html::script('js/jquery.js')!!}
       </body>