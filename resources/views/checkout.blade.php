@extends('layouts.web')

@section('content')
    <div class="clearfix"></div>
    <!-- Begin  Content -->
    <div id="first_container" class="content-container fr-view">
        <div class="container">
            <div class="clearfix body-content"></div>
        </div>
        <style>
            #first_container>.container:first-child .clearfix.body-content {
                display: none;
            }

            .hero_section_container::before {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                background: rgb(0, 0, 0);
                opacity: 0.5;
                left: 0;
                top: 0;
            }

            .hero_section_container {
                background-image: url("/images/eaa20374f0d8328450f5646df43f57783e2223ec.jpg");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }

            .hero_section_container .container {
                padding-top: 70px;
                padding-bottom: 60px;
            }

            .hero_section_container .hero_h1 {
                color: rgb(255, 255, 255);
                font-size: 30px;
                font-weight: 400;
            }

            .hero_section_container .hero_h2 {
                color: rgb(255, 255, 255);
                font-size: 56px;
                font-weight: 600;
            }

            .hero_section_container .hero_content {
                color: ;
                font-size: 10px;
            }

            .hero_section_container>.container>div {
                float: none !important;
                text-align: center;
            }
        </style>
        <div class="hero_section_container">
            <div class="container">
                <div class="col-md-12 center-block">
                    <h1 class='hero_h1'>Create Account</h1>
                    <h2 class='hero_h2'>{{$package->Name}}</h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix clearfix-lg"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-6 offset-3 border">

                    <h3>Enter Email and Create Password</h3>


                    <form>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                        </div>



                        <h4>Select a Payment Option</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Monthly" name="checkout" id="Monthly1">
                            <label class="form-check-label" for="Monthly1">
                                Monthly ${{$package->Monthly_amount}} {{$package->Monthly_text}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Quarterly" name="checkout" id="Quarterly1">
                            <label class="form-check-label" for="Quarterly1">
                                Quarterly ${{$package->Quarterly_amount}} {{$package->Quarterly_text}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="SemiAnnually" name="checkout" id="SemiAnnually1">
                            <label class="form-check-label" for="SemiAnnually1">
                                SemiAnnually ${{$package->SemiAnnually_amount}} {{$package->SemiAnnually_text}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Annually" name="checkout" id="Annually1">
                            <label class="form-check-label" for="Annually1">
                                Annually ${{$package->Annually_amount}} {{$package->Annually_text}}
                            </label>
                        </div>

                        <h4>Enter Billing Information</h4>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">* Name on Card</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="* Name on Card">
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Company Name</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Company Name">
                              <span>Optional, if using a company card. This will display on invoices if
                                  added.</span>
                                </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Street Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Street Address">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Country</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Country">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">State</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="State">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">City</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="City">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ZipCode</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ZipCode">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Card Number Expiration Date / Security Code</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Card Number Expiration Date / Security Code">
                        </div>
                        <P>By creating an account, you agree to our terms &
                            conditions
                            (http://www.accidentsolutionllc.com/about/terms)</P>

                            <div class="mb-3">
                                <button class="btn btn-lg btn-primary">Create My Profile</button>
                            </div>

                    </form>



                    <p><br></p>

                    <h2 style="text-align: center;"><span class="fr-unprocessed"
                            style="font-size: 18px;"><strong><br></strong></span></h2>
                    <p><span class="fr-unprocessed" style="font-size: 18px;"><strong><br></strong></span></p>
                    <p><span class="fr-unprocessed" style="font-size: 18px;"><strong><br><br><br><br><br></strong></span>
                    </p>
                </div>


            </div> <!-- Closes Row -->


            <div class="clearfix"></div>
        </div>
    </div>
    <!-- End Content -->
    <div class="clearfix footer-clear-element clearfix-lg"></div>

    <style type='text/css'>
        .newsletter_row input[type="email"] {
            float: none;
            margin-left: auto;
            margin-right: auto;
            width: 62% !important;
        }
    </style>
    <div class="content-container newsletter_row">
        <div class="container text-center vpad">
            <div class="col-md-12 xs-nopad">
                <a href="#" data-toggle="modal" data-target="#newsletter_subscribe_modal"
                    class="btn btn-lg newsletter_footer_button col-xs-12 col-md-6 nofloat fpad bold">
                    <div class="col-sm-6 nopad newsletter_button_left">
                        Join Our Newsletter
                    </div>
                    <div class="col-sm-6 nopad newsletter_button_right">
                        Click to Subscribe
                        <i class='fa fa-chevron-circle-right fa-fw'></i>
                    </div>

                    <div class="clearfix"></div>
                </a>
            </div>
        </div>
    </div>
@endsection
