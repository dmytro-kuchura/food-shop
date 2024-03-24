<!DOCTYPE html>
<html lang="ua">
<head>
    <title>Панель Адміністратора</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="Language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- css -->
    @vite(['resources/css/admin.scss', 'resources/js/admin.js'])
    <!-- csrf-token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body id="page-top">
<div id="wrapper">
    @widget('adminSidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @widget('adminHeader')
            @yield('content')
        </div>
        @widget('adminFooter')
    </div>
</div>
</body>
</html>
