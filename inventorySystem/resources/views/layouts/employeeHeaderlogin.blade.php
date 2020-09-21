<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css')}}/indexx.css">
        @yield('style')
        <title id="title">@yield('title')</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  justify-content-end ">
    <form action="{{url('/signUpForm')}}" class="mx-3">
    <button class="btn btn-outline-primary " type="submit">signUp</button></form>
    <form action="{{url('/loginForm')}}" >
    <button class="btn btn-outline-primary " type="submit">login</button></form>
    </nav>


      
    