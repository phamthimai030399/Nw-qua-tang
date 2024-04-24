<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('frontend.panels.styles')
    <title>{{ $web_information->information->site_name }}</title>
</head>

</html>

<body>
      
    @include('frontend.element.header')
    
    @yield('content')

    @include('frontend.element.footer')

    @include('frontend.element.popup_login')

    @include('frontend.panels.scripts')
</body>
