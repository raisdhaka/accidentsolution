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
                    <h1 class='hero_h1'>MEMBERSHIP PLANS</h1>
                    <h2 class='hero_h2'>Join Our Online Community</h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix clearfix-lg"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <p><br></p>
                    <table class="froala-table" style="width: 100%;">
                        <tbody>
                            {{-- <tr>
                                <td class="fpad-lg"
                                    style="width: 30%; vertical-align: top; text-align: center; background: rgb(235, 239, 243) none repeat scroll 0% 0%;">
                                    <h2><span style="color: rgb(51, 51, 51);font-size: 36px;"><strong>Silver</strong></span>
                                    </h2>
                                    <p><span style="color: rgb(51, 51, 51);font-size: 24px;">Select for Pricing</span></p><a
                                        class="btn btn-lg btn-success" href="/checkout/6" rel="noopener noreferrer"
                                        target="_blank"><strong>SELECT PLAN</strong></a>
                                </td>
                                <td style="width: 70%; vertical-align: middle;">
                                    <p style="line-height: 1.5;"><span style="font-size: 18px;"><br></span></p>
                                    <table class="froala-table" style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td class="nopad" style="width: 50%; vertical-align: top;">
                                                    <ul class="nomargin">
                                                        <li style="line-height: 2;"><strong><span
                                                                    style="font-size: 18px;">Listing on Consumer
                                                                    Site</span></strong></li>
                                                        <li style="line-height: 2;"><strong><span
                                                                    style="font-size: 18px;">Individual Email
                                                                    Tracking</span></strong></li>
                                                    </ul>
                                                </td>
                                                <td class="nopad" style="width: 50%; vertical-align: top;">
                                                    <ul class="nomargin">
                                                        <li style="line-height: 2;"><strong><span
                                                                    style="font-size: 18px;">Real Time
                                                                    Analytics</span></strong></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="nopad" colspan="2">
                                    <p><br></p>
                                    <hr>
                                    <p><br></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="fpad-lg"
                                    style="width: 30%; vertical-align: top; text-align: center; background: rgb(235, 239, 243) none repeat scroll 0% 0%;">
                                    <h2><span
                                            style="color: rgb(51, 51, 51);font-size: 36px;"><strong>Gold<br></strong></span>
                                    </h2>
                                    <p><span style="color: rgb(51, 51, 51);font-size: 24px;">Select for Pricing</span></p><a
                                        class="btn btn-lg btn-success" href="/checkout/7" rel="noopener noreferrer"
                                        target="_blank"><strong>SELECT PLAN</strong></a>
                                </td>
                                <td style="width: 70%; vertical-align: middle;">
                                    <p style="line-height: 1.5;"><br></p>
                                    <table class="froala-table" style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td class="nopad" style="width: 50%; vertical-align: top;">
                                                    <ul class="nomargin">
                                                        <li style="line-height: 2;"><strong><span
                                                                    style="font-size: 18px;">Listing on Consumer
                                                                    Site</span></strong></li>
                                                        <li style="line-height: 2;">
                                                            <font size="4"><strong>Individual Email Tracking</strong>
                                                            </font>
                                                        </li>
                                                        <li style="line-height: 2;">
                                                            <font size="4"><strong>Social Networking Sites</strong>
                                                            </font>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="nopad" style="width: 50%; vertical-align: top;">
                                                    <ul class="nomargin">
                                                        <li style="line-height: 2;"><strong><span
                                                                    style="font-size: 18px;">Real Time
                                                                    Analytics</span></strong></li>
                                                        <li style="line-height: 2;"><strong><span
                                                                    style="font-size: 18px;">Individual Phone
                                                                    Number</span></strong></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="nopad" colspan="2">
                                    <p><br></p>
                                    <hr>
                                    <p><br></p>
                                </td>
                            </tr> --}}
                            <tr>
                                @foreach ($packages as $package)

                                    <td class="fpad-lg"
                                        style="width: 30%; vertical-align: top; text-align: center; background: rgb(235, 239, 243) none repeat scroll 0% 0%;">
                                        <h2><span style="color: rgb(51, 51, 51);font-size: 36px;"><strong>{{$package->Name}}</strong></span>
                                        </h2>
                                        <p><span style="color: rgb(51, 51, 51);font-size: 24px;">Select for Pricing</span></p><a
                                            class="btn btn-lg btn-success" href="{{route('checkout', $package->id)}}" rel="noopener noreferrer"
                                            target="_blank"><strong>SELECT PLAN</strong></a>
                                    </td>
                                    <td style="width: 70%; vertical-align: middle;">
                                        <p style="line-height: 1.5;"><br></p>
                                        <table class="froala-table" style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td class="nopad fr-cell-handler " style="width: 50%; vertical-align: top;">
                                                        <ul class="nomargin">
                                                            <li style="line-height: 2;"><strong><span
                                                                        style="font-size: 18px;">Listing on Consumer
                                                                        Site</span></strong></li>
                                                            <li style="line-height: 2;"><strong><span
                                                                        style="font-size: 18px;">Individual Email
                                                                        Tracking</span></strong></li>
                                                            <li style="line-height: 2;"><strong><span
                                                                        style="font-size: 18px;">Social Media
                                                                        Placement</span></strong></li>
                                                            <li style="line-height: 2;"><strong><span
                                                                        style="font-size: 18px;">Option to Include Member Blog
                                                                        on Consumer Site</span></strong></li>
                                                        </ul>
                                                    </td>
                                                    <td class="nopad fr-cell-fixed " style="width: 50%; vertical-align: top;">
                                                        <ul class="nomargin">
                                                            <li style="line-height: 2; font-weight: bold; font-size: 18px;">
                                                                Real Time Analytics</li>
                                                            <li id="isPasted"
                                                                style="line-height: 2; font-size: 18px; font-weight: bold;">
                                                                <span class="fr-unprocessed"
                                                                    style="font-size: 18px;"><strong>Individual Phone
                                                                        Number</strong></span></li>
                                                            <li id="isPasted" style="line-height: 2;"><span
                                                                    class="fr-unprocessed"><strong>
                                                                        <font size="4">Major Search Engine Listings.
                                                                        </font>
                                                                    </strong></span></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td class="nopad" colspan="2">
                                    <p><span class="fr-unprocessed" style="font-size: 18px;"><strong><br></strong></span>
                                    </p>
                                    <hr>
                                    <p><span class="fr-unprocessed" style="font-size: 18px;"><strong><br></strong></span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
