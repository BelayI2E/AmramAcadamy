<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Amram') }}</title>

    <!-- Styles -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
  <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top nav-color">
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <a class="navbar-brand" href="#">Logo-Logo</a>

       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li>
         </ul>

         <div class="form-inline my-2 my-lg-0">
             <a class="nav-link" href="#">Login <i class="fas fa-sign-in-alt"></i></a>
             <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>

         </div>
         {{-- <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="text" placeholder="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form> --}}
       </div>
     </nav>
<div class="container-fluid">
  @yield('content')
</div>
@extends('layouts.footer')

</body>
</html>
