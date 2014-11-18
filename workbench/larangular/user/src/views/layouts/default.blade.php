<!DOCTYPE html>
<html lang="en">
<head>
    @include('user::includes.head')

</head>
<body class="<?php echo str_replace('.','-',Route::currentRouteName());?>">
<div id="wrapper">
    @include('user::includes.header')
    <section id="content">
        <section class="main padder">
            @yield('content')
        </section>
    </section>
</div>
</body>
</html>