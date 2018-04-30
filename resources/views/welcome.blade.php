
@extends('layouts.navbar')

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 id ="mulu_birhan">MuluBerhan Online Acadamic Platform </h2>

              <div class="col-md-10">

                 <p class="motto"><i class="fa fa-users"></i>Connect With Students of your batch and descover your future world</p>

                 <p class="motto"><i class="fa fa-question-circle"></i>Ask questions and get excellent answers from Seniors, Teachers and Acadamic pros</p>
                 <p class="motto"><i class="fa fa-globe"></i>Prepare for National exams with international mindset and competence</p>
                 <p class="motto"><i class="fa fa-book"></i>Get all  you need to succeed in your acadamic life</p>

              </div>

          </div>
          <div class="col-md-6">
            <div class="row">

              <div class="col-md-1">

              </div>

              <div class="col-md-10">

              <form method="post" action="{{ url('/profile') }}">
                    {{ csrf_field() }}
                    <fieldset class="form-group">
                      <legend>Sign Up Now</legend>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">First Name</label>
                        <div class="col-9">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" name="first_name">                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Last Name</label>
                        <div class="col-9">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" name="last_name">                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-date-input" class="col-3 col-form-label">Date of birth</label>
                        <div class="col-9">
                          <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Email</label>
                        <div class="col-9">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.com" name="email">                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Password</label>
                        <div class="col-9">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password" name="password">                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Confirm password</label>
                        <div class="col-9">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password" name="conf_password">                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label"></label>
                        <div class="col-9">
                          <button type="submit" class="btn btn-primary btn-block">Register</button>
                      </div>


                      <div class="col-md-1">

                      </div>

                  </fieldset>
                  </form>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div
@endsection
