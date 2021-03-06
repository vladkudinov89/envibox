<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Feedback</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        
    </head>
    <body class="has-navbar-fixed-top">
        <div id="app"></div>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
    </html>