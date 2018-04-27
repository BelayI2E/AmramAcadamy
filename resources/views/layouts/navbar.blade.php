<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MuluBerhan') }}</title>

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
       <a class="navbar-brand" href="#"><i class="fa fa-sun-o" aria-hidden="true"></i> MuluBerhan</a>

       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="navbar-nav mr-auto">
           {{-- <li class="nav-item active">
             <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li> --}}
         </ul>

         <form method="post" action="/login">

         <div class="form-inline my-2 my-lg-0">
           {{-- <div class="form-group row pr-2">

             <label for="example-text-input" class="col-3 col-form-label"><i class="fa fa-envelope pr-2" aria-hidden="true"></i></label>
             <div class="col-9">
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.com">                        </div>
           </div> --}}

           <div class="input-group mb-2 mr-sm-2 mb-sm-0 pr-2">
            <div class="input-group-addon"><i class="fa fa-envelope pr-2" aria-hidden="true"></i></div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="email@example.com">
           </div>

           <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <div class="input-group-addon"><i class="fa fa-unlock-alt pr-2" aria-hidden="true"></i></div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-md btn-primary">Login</button>

         </div>

         </form>

       </div>
     </nav>
<div class="container-fluid">
  @yield('content')
</div>
@extends('layouts.footer')

</body>
</html>
