

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
                    <h1 class='hero_h1'>HOW IT WORKS</h1>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix clearfix-lg"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h2 style="text-align: center;"><strong>OUR MARKETING STRATEGY</strong></h2>
                    <p><br></p>
                    <p id="isPasted"><span style="font-size: 16px;">We market to consumers using the following
                            channels:</span></p>
                    <p><span style="font-size: 16px;">&middot; &nbsp; &nbsp; &nbsp;Digital Marketing: The site is
                            marketed through multiple digital and social media channels across multiple media
                            platforms.</span></p>
                    <p><span style="font-size: 16px;">&middot; &nbsp; &nbsp; &nbsp;Consumer Website: Consumers will be
                            encouraged to use their website for education about how to manage their accident cases and
                            will be provided with information about their providers that would allow them to make an
                            informed choice.&nbsp;</span></p>
                    <p><span style="font-size: 16px;">&middot; &nbsp; &nbsp; &nbsp;Providers will also be able to post
                            useful articles directly to the consumer website to educate the public about their
                            service.</span></p>
                    <p><span style="font-size: 16px;">&middot; &nbsp; &nbsp; &nbsp;Consumers: Consumers are encouraged
                            to share their experience using our services with their social circles as a FREE resource
                            for help in the event of an accident. &nbsp;They let their friends and family know that our
                            service is a one-stop solution!</span></p>
                    <p><span style="font-size: 16px;">As you can see from the above, we lead the marketing effort
                            through digital marketing, website backlinks, landing pages, and collaboration with
                            providers and customers to build a value network across the USA!</span></p>
                    <p><br></p>
                    <p style="text-align: center;"><img
                            src="{{asset('images/201e6f76e1aa679c2d504c96ec95dc189d4f9879.jpg')}}"
                            class="fr-dib insert5449" style="width: 680px;" loading="lazy"></p>
                    <p><br></p>
                    <div style="text-align: center;"><span style="font-size: 30px;"><strong>Why Advertise with
                                Us</strong></span></div>
                    <p id="isPasted">&nbsp;</p>
                    <p>Advertising or listing your services with Accident Solution is a mutually beneficial
                        relationship. We look for service providers who complement our services and provide maximum
                        value to our users.&nbsp;</p>
                    <p>As a valued provider, you can grow your business through advertising on our national platform and
                        reach millions of customers in need of your service.&nbsp;</p>
                    <h2 style="text-align: center;"><a class="btn btn-primary"
                            href="{{route('join')}}">Join Now</a></h2>
                    <p id="isPasted" style="text-align: center;"><span
                            style="font-size: 16px; color: rgb(184, 49, 47);">Member must enter their company name,
                            phone number, and email to access the pricing. &nbsp;</span></p>
                    <p><span style="font-size: 16px;">&nbsp;</span></p>
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
        background-image: url("{{ asset('images/claire-anderson-Vq__yk6faOI-unsplash.jpg') }}");
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
