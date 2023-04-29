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
                <h1 class='hero_h1'>Worker's Comp</h1>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix clearfix-lg"></div>

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h2 style="text-align: center;"><strong>Workers&#39; Comp</strong></h2>
                <p id="isPasted"><span style="font-size: 16px;">Accident Solution has limited openings in select areas
                        which are available to experienced Workers&#39; compensation attorneys and are further limited
                        by practice state.</span></p>
                <p><span style="font-size: 16px;"><strong>Here is how our service works:</strong></span></p>
                <ol start="1" type="1">
                    <li style="font-size: 16px;">Our social media marketing and optimization processes allow an
                        individual who is seeking help in the event of an accident, to reach you.</li>
                    <li style="font-size: 16px;">The accident victim can access your service by way of a drop-down
                        filter that identifies the type of accident that they were involved in. We convey to our users
                        that when they select a provider in a particular area, they can be confident that the provider
                        has experience in the area of expertise that they are seeking help with.&nbsp;</li>
                    <li style="font-size: 16px;">Your listing appears in the attorney search results for your state.
                    </li>
                    <li style="font-size: 16px;">The accident victim contacts you directly and requests an appointment
                        with your office. &nbsp;</li>
                    <li style="font-size: 16px;">You get motivated Work injury clients who are ready to retain your
                        services. .&nbsp;</li>
                </ol>
                <p><br></p>
                <p style="text-align: center;"><a class="btn-lg btn btn-danger"
                        href="http://www.accidentsolutionllc.com/join" rel="noopener noreferrer" target="_blank">GET
                        STARTED NOW</a></p>
                <p><br></p>
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
    #first_container > .container:first-child .clearfix.body-content{
    display:none;
}
        .hero_section_container::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgb(0,0,0);
        opacity: 0.5;
        left:0;
        top:0;
    }
    .hero_section_container {
    background-image: url("/images/cdn-pages-xM_1ZYHOc9E-unsplash.jpg");
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
.hero_section_container > .container > div {
            float: none!important;
            text-align: center;
}
    </style>

@endsection
