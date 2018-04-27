
@extends('layouts.navbar')

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Muluerhan Online Acadamy education platform</h2>
            <!-- bad way of styling ... -->
            <h5>Associate with students of your batch and descover your future world</h5>
            <p><a class="btn btn-primary btn-md" href="#" role="button">Learn more &raquo;</a></p>
          </div>
          <div class="col-md-6">
            <div class="row">

              <div class="col-md-1">

              </div>

              <div class="col-md-10">

                  <form method="post" action="/Register">
                    <fieldset class="form-group">
                      <legend>Sign Up Now</legend>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">First Name</label>
                        <div class="col-9">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Last Name</label>
                        <div class="col-9">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-date-input" class="col-3 col-form-label">Date of birth</label>
                        <div class="col-9">
                          <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Email</label>
                        <div class="col-9">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.com">                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Password</label>
                        <div class="col-9">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Confirm password</label>
                        <div class="col-9">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">                        </div>
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

    <div class="container">
     <!-- Example row of columns -->
     <div class="row">
       <div class="col-md-4">
         <h2>Heading</h2>
         <p><b>Ask questions and get excellent answers from Seniors, Teachers and Acadamic pros</b></p>
         <p><a class="btn btn-secondary" href="#" role="button">More ... &raquo;</a></p>
       </div>
       <div class="col-md-4">
         <h2>Heading</h2>
         <p><b>Prepare for National exams with international mind set, confidence and competence</b> </p>
         <p><a class="btn btn-secondary" href="#" role="button">More ... &raquo;</a></p>
      </div>
       <div class="col-md-4">
         <h2>Heading</h2>
         <p><b>Get all the resources you need to create your future</b></p>
         <p><a class="btn btn-secondary" href="#" role="button">More ... &raquo;</a></p>
       </div>
     </div>
@endsection
