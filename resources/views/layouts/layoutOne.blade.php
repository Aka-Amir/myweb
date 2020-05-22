<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel &#x1F525;</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="/CSS/styles.css">
        <link rel="stylesheet" href="/CSS/Query.css">
        <link rel="stylesheet" href="/Assets/node_modules/animate.css/animate.css">
        <link rel="stylesheet" href="/Assets/node_modules/fortawesome/fontawesome-free/css/all.css">
    </head>
    <body>

        @yield('Landing')
        
        <script src="/Assets/node_modules/jquery/dist/jquery.js"></script>
        <script src="/Assets/node_modules/wowjs/dist/wow.js"></script>
        <script>   
            wow = new WOW(
                {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       200,          // default
                mobile:       true,       // default
                live:         true        // default
                }
            )
            wow.init();
        </script>
        <script src="JS/app.js"></script>
    </body>
</html>