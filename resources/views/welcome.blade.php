
@extends('layouts.navbar')

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3"><b>MuluBerhan Online Acadamy</b></h1>
        <h2 id="our_moto"><b><i class="fa fa-group" style="font-size:38px"></i>Associate with Acadamic Community and descover your future world!</b></h2>

      </div>
      <div class="row" id="my_welcome_page">
      <div class="col-md-6">
        <h2>Login Please</h2>
        <label>username</label>
        <input type="text" name="username"/>
        <label>password</label>
        <input type="text" name="password"/>
        <button type="submit">Login</button>
      </div>
      <div class="col-md-6">
        <div id="new_registration">
        <h2 >Create New Account</h1>
        </div>
      </div>
      </div>
    </div

    <div class="container">
     <!-- Example row of columns -->
     <div class="row">
       <div class="col-md-4">
         <h2><i class="fa fa-asterisk" style="font-size:40px;color:green;position:relative;left:150px;"></i></h2>
         <p><b class="our_cores">Ask questions and get excellent answers from Seniors, Teachers and Acadamic pros</b></p>

       </div>
       <div class="col-md-4">
         <h2><i class="fa fa-asterisk" style="font-size:40px; color:green;position:relative;left:150px;"></i></h2>
         <p><b class="our_cores">Prepare for National exams with international mind set, confidence and competence</b> </p>

      </div>
       <div class="col-md-4">
         <h2><i class="fa fa-asterisk" style="font-size:40px; color:green;position:relative;left:150px;"></i></h2>
         <p><b class="our_cores">Get all the resources you need to create your future</b></p>

       </div>
     </div>
@endsection
