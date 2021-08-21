        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">

        <title>{{ $title ?? "" }}</title>

        <!-- Favicon -->
        <link type="image/x-icon" href="{{ asset('favicon.ico') }}" rel="icon"/>
        <link type="image/x-icon" href="{{ asset('favicon.ico') }}" rel="shortcut icon" id="favicon"/>
        <link rel="apple-touch-icon" sizes="194x194" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

        <meta name="og:image" content="{{ asset('favicon.ico') }}"/>

        <!-- Template core CSS -->
        <link href="{{ asset('assets/css/template.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/template.dark.min.css') }}" rel="stylesheet" media="(prefers-color-scheme: dark)">

        <link href="{{ asset('assets/css/app.css?a='.time()) }}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />