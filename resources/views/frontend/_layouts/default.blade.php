<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Frontend" />
        <meta name="author" content="" />

        <title>Frontend</title>
		<link rel="stylesheet" href="{{ URL::asset('/css/style.css')}}">
        <script src="{{ URL::asset('/javascript/site.js')}}"></script>

    </head>
    <body>
        @include('frontend._partials.header')
        <div class="container-fluid">
      
            @yield('main')
        </div>

        @include('frontend._partials.footer')
    </body>
</html>