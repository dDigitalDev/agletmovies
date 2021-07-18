<!-- extends in the layouts folder and the name of the file is (app) app.blade.php -->
@extends('layouts.app')


<!--Rapping the html tags into section so they can go into the main content-->
@section('content')
        <div class="container">
            <h1 class="text-center">Contact Me</h1>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item">
                            <i class="fa fa-map"></i>
                            <h3>Ou:</h3>
                            <p>Johannesburg, Sandton, Paulshof</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <i class=" fa fa-phone"></i>
                            <h3>Contact Number:</h3>
                            <p>+27 67 232 0947</p>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="item">
                            <i class="fa fa-envelope"></i>
                            <h3>Email:</h3>
                            <p>mcnkuna98@gmail.com</p>
                        </div>
                    </div>
                </div>

            <hr>
              <div class="row">
                <div class="col-sm-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14340.478967757937!2d28.036931622233272!3d-26.029637854986785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9573de19f2fb85%3A0xb57cfe1cfc3dad6!2sPaulshof%2C%20Sandton%2C%202191!5e0!3m2!1sen!2sza!4v1626629720724!5m2!1sen!2sza" width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-sm-4" id="contact2">
                    <h3>Full Name:</h3>
                    <hr align="left" width="50%">
                    <h4 class="pt-2">Mpendulo Charles Nkuna</h4>
                  </div>
              </div>
            </div>

            <div class="row text-center bg-success text-white" id="author">
              <div class="col-12 mt-4 h3 ">
              <a href="https://aglet.co.za/" target="blank">By Aglet Teams</a>
            </div>
            <div class="col-12 my-2">
            <a href="https://www.linkedin.com/in/mpendulo-charles-nkuna-817205203/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
            </div>
            </div>

@endsection
