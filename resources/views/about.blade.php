@extends('layouts.web')

@section('content')

    <!--GOOGLE TAG MANAGER CODE-->

    <div class="clearfix"></div>
    <!-- Begin  Content -->
    <div id="first_container" class="content-container fr-view">
        <div class="container">
            <div class="clearfix body-content"></div>
        </div>

        <div class="hero_section_container">
            <div class="container">
                <div class="col-md-12 center-block">
                    <h1 class='hero_h1'>ABOUT US</h1>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix clearfix-lg"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <p id="isPasted"><span style="font-size: 16px;">The key principals of Accident Solution are
                            established leaders in the Med/Legal marketing industry and experts in nationwide
                            direct-response advertising campaigns. For more than 30 years, these executives have
                            successfully connected attorneys and doctors to consumers who are in need of their
                            services.&nbsp;</span></p>
                    <p><span style="font-size: 15px;">&nbsp;In 2006, these legal marketing veterans merged with the
                            leading experts in Search Engine Optimization to leverage the internet as a prime resource
                            for clients seeking qualified attorneys and patients looking to find a medical provider on a
                            lien /LOP (letter of protection) nationwide. These successful partnerships produced a
                            channel for accident-related service providers to advertise under one roof.</span></p>
                    <p><span style="font-size: 15px;">Providing a no-cost, no-risk, solution for consumers to find the
                            multiple resources they need in the event of an accident allows them to make critical
                            decisions with confidence and speed. Our platform puts you in front of motivated prospects
                            who are ready to retain the services that you offer.&nbsp;</span></p>
                    <p><span style="font-size: 15px;">Accident Solution&rsquo;s management team boasts a wealth of
                            experience in:</span></p>
                    <ul>
                        <li style="font-size: 15px;">Marketing consulting to law firms (30 years experience)</li>
                        <li style="font-size: 15px;">Direct response med-legal advertising campaigns (30 years
                            experience)</li>
                        <li style="font-size: 15px;">Market research and analysis (30 years experience)</li>
                        <li style="font-size: 15px;">Marketing copywriting (20 years experience)</li>
                        <li style="font-size: 15px;">Web design and database programming (20 years experience)</li>
                        <li style="font-size: 15px;">SEO and social media marketing (20 years experience)</li>
                    </ul>
                    <p><span style="font-size: 16px; font-family: Lato;"> Our depth of experience, combined with a
                            proven commitment to both medical and legal consumers, makes Accident Solution the most
                            logical and cost-effective advertising solution for law firms seeking to increase their
                            business and profitability.</span></p>
                    <p><span style="font-size: 16px;"><br><br></span></p>
                    <p><br></p>
                    <div class="clearfix clearfix-lg hidden-md hidden-lg"><br></div>
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
    background-image: url("{{asset('images/Depositphotos_252067566_XL.jpg')}}");
    background-position: center center;
    background-repeat: no-repeat;
            background-size: cover;
            position: relative;
}
.hero_section_container .container {
    padding-top: 70px;
    padding-bottom: 110px;
}
.hero_section_container .hero_h1 {
    color: rgb(255, 255, 255);
    font-size: 45px;
    font-weight: 600;
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
.hero_section_container > .container > div {
            float: none!important;
            text-align: center;
}
    </style>
@endsection
