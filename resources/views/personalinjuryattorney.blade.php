@extends('layouts.web')

@section('content')



    <div class="clearfix"></div>
    <!-- Begin  Content -->
    <div id="first_container" class="content-container fr-view">
        <div class="container">
            <div class="clearfix body-content"></div>
        </div>

        <div class="hero_section_container">
            <div class="container">
                <div class="col-md-8 center-block">
                    <h1 class='hero_h1'>LEGAL - PERSONAL INJURY ATTORNEY</h1>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix clearfix-lg"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h2 style="text-align: center;"><strong>Accident Solution has limited openings for experienced
                            personal injury attorneys in zip codes throughout the US.</strong></h2>
                    <p id="isPasted"><span style="font-size: 16px;">Here is how our service works:</span></p>
                    <ol start="1" type="1">
                        <li style="font-size: 16px;">Our social media marketing and optimization processes allow an
                            individual who is seeking help in the event of an accident to reach you.&rdquo;</li>
                        <li style="font-size: 16px;">Our website guides accident victims, step by step, through the
                            process of identifying providers in their area who have the knowledge and expertise in
                            handling accident cases. We convey to our users that when they select a provider in a
                            particular area, they can be confident that the provider has experience in the area of
                            expertise that they are seeking help with.</li>
                        <li style="font-size: 16px;">Your listing appears in the attorney search results for legal
                            representation in the area you selected. The accident victim will have the option to choose
                            any of the providers displayed on the search result screen.</li>
                        <li style="font-size: 16px;">If selected, the accident victim contacts you directly and
                            requests an appointment with your office.&nbsp;</li>
                        <li style="font-size: 16px;">You get a motivated personal injury client who is ready to retain
                            your services.</li>
                        <li style="font-size: 16px;">We also provide an opt-in tracking option.&nbsp;</li>
                    </ol>
                    <p style="text-align: center;"><a class="btn-lg btn btn-danger"
                            href="http://www.accidentsolutionllc.com/join" rel="noopener noreferrer"
                            target="_blank">GET STARTED NOW</a></p>
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


    @section('style')





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
        background-image: url("{{asset('images/Depositphotos_4389811_XL.jpg')}}");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .hero_section_container .container {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .hero_section_container .hero_h1 {
        color: rgb(255, 255, 255);
        font-size: 45px;
        font-weight: 600;
    }

    .hero_section_container .hero_h2 {
        color: ;
        font-size: 36px;
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
@endsection
