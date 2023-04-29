@extends('layouts.web')

@section('content')




    <!--GOOGLE TAG MANAGER CODE-->

    <div class="clearfix"></div>
    <!-- Begin  Content -->
    <div id="first_container" class="content-container fr-view">
        <div class="container">
            <div class="clearfix body-content"></div>
            <style type='text/css'>
                .body-content {
                    margin: 0px;
                }

                #first_container {
                    background-image: url('{{asset('images/Depositphotos_145393015_XL.jpg')}}');
                    background-position: center top;
                    background-repeat: no-repeat;
                    position: relative;
                    background-size: cover;
                }

                .search_box,
                .homepage_settings .center-block {
                    float:
                        left !important;
                }

                @media only screen and (max-width: 768px) {
                    #first_container {
                        background-position: left top;
                    }

                    .homepage_title,
                    .homepage_settings h2,
                    .search_box {
                        float: none !important;
                    }
                }

                [class^="homepage-section-"]:empty {
                    display: none;
                }
            </style>
            <div class="row-fluid homepage_settings">
                <div class="col-lg-7 center-block nopad homepage_title">
                    <h1 class="sm-text-center">Accident Solution</h1>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 search_box fpad img-rounded center-block">
                    <div class="clearfix"></div>
                    <form class="fpad form-horizontal website-search" name="frm1" action="/search_results">
                        <div class="form-group nomargin hidden-sm hidden-xs col-lg-5">
                            <label>Practice Area</label>
                        </div>
                        <div class="input-group input-group-lg bmargin col-lg-7 large-autosuggest">
                            <span class="input-group-addon">
                                <i class="fa fa-fw fa-search"></i>
                            </span>
                            <input type="text" class="member_search form-control input-lg large-autosuggest-input"
                                name="q" id="keywordSuggest" value="" placeholder="Category">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group nomargin hidden-sm hidden-xs col-lg-5">
                            <label>
                                Search by location:
                            </label>
                        </div>
                        <div class="input-group input-group-lg bmargin col-lg-7">
                            <span class="input-group-addon">
                                <i class="fa fa-fw fa-location-arrow"></i>
                            </span>
                            <input type="text" class="googleSuggest googleLocation form-control input-lg"
                                name="location_value" id="location_google_maps_homepage" value=""
                                placeholder="City or Zip Code" autocomplete="off">
                        </div>
                        <div class="col-lg-offset-5 col-lg-7 nopad">
                            <button type="submit" class="btn-block btn btn-lg btn_home_search">Search Now</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div> <!-- closes container + content-container -->


    <div class="homepage-sections fr-view">
        <div class="homepage-section-1">
            <div class="clearfix" id="capa1"></div>
            <div class="content-container">
                <div class="container">
                    <div class="row" id="join-about-modules">
                        <div class="col-md-6 homepage-join-module">
                            <div class="module fpad-xl text-center nomargin">
                                <h2>
                                    PROVIDERS SIGN UP NOW </h2>
                                <div>
                                </div>
                                <div class="clearfix"></div>
                                <a href="/join" class="btn btn-lg tmargin center-block btn-primary">
                                    Join Our Site Today </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix clearfix-lg hidden-md hidden-lg"></div>
                        <div class="col-md-6 homepage-about-module">
                            <div class="module fpad-xl text-center nomargin">
                                <h2>
                                    ABOUT US </h2>
                                <div>
                                </div>
                                <div class="clearfix"></div>
                                <a class="btn btn-lg tmargin center-block btn-primary" href="/about">
                                    Learn More </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-container custom-homepage-content homepage-section-2">
            <div class="container">
                <p><img src="{{asset('images/84134159655559da1320588d203594aeac5f3024.jpg')}}"
                        class="fr-dib insert3807" style="width: 598px;" loading="lazy" data-tag="image"
                        data-url="{{asset('images/84134159655559da1320588d203594aeac5f3024.jpg')}}">&nbsp;
                </p>
                <p><br></p>
                <table class="froala-table" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td style="width: 50%;">
                                <h2><strong>Been in an Accident</strong></h2>
                                <h2><strong>Our Service is FREE to Consumers</strong></h2>
                                <p><strong><a class="btn btn-primary btn-lg"
                                            href="{{route('consumer')}}" rel="noopener noreferrer"
                                            target="_blank">Learn More</a></strong></p>
                            </td>
                            <td style="width: 50%;">
                                <div style="text-align: left;"><img
                                        src="{{asset('images/eaa20374f0d8328450f5646df43f57783e2223ec.jpg')}}"
                                        style="width: 245px;" class="fr-dib fr-fil" loading="lazy"><img
                                        src="{{asset('images/a29920580fd88ffe69eea1b66c9b95fc66cade57.jpg')}}"
                                        style="width: 247px;" class="fr-fil fr-dib" loading="lazy"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p><br></p>
                <p id="isPasted">Individuals who have been involved in an auto accident, sometimes don&rsquo;t know how
                    to navigate the process of finding the right attorney to assist with their claim. Accident Solution
                    is a FREE multi-platform directory that is designed to help accident victims to easily find help
                    from qualified providers.</p>
                <p>We market our service to qualified providers to ensure that when consumers search for a provider,
                    they find qualified professionals in the territories who matches their service need. We check our
                    professional&rsquo;s license and verify that they are accepting new clients on a contingency basis
                    where applicable so that our users can be confident that they are in good hands when they use our
                    service.</p>
                <p>We will also ask our users to rate their experience with the providers they select, this will help us
                    to maintain a level of confidence with consumers and providers.</p>
                <p>Our consumer website will display providers that serve the area the user selected based on zip code
                    and category selection. After a provider is selected the user will have the option to review the
                    provider&rsquo;s profile prior to making a selection. This allows the user to select a provider that
                    closely matches their needs. &nbsp;The user will be able to immediately contact you via telephone,
                    email, or text message based on the method you select during sign-up.</p>
                <p><br></p>
                <p style="text-align: center;"><a class="btn btn-primary btn-lg"
                        href="{{route('consumer')}}" rel="noopener noreferrer" target="_blank">Get
                        Started</a></p>
            </div>
        </div>
        <div class="homepage-section-3">
            <div class="clearfix"></div>
            <div class="content-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 homepage_content_3">
                            <p><br></p>
                            <table class="froala-table" style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 49.9556%; text-align: center; vertical-align: top;">
                                            <p><a href="{{route('personalinjuryattorney')}}"><img
                                                        src="{{asset('images/9d1391bbbd89859d44c472ab2cff2bc028b1dc5e.jpg')}}"
                                                        style="width: 300px;" class="fr-dib" loading="lazy"></a></p>
                                            <h4><strong>Personal Injury</strong></h4>
                                            <p><br></p>
                                        </td>
                                        <td style="width: 50.0444%; text-align: center; vertical-align: top;">
                                            <p><a href="{{route('workerscomp')}}"><img
                                                        src="{{asset('images/eba7b94abdb1430c6b7d0e2695d0aa045718d2a7.jpg')}}"
                                                        style="width: 300px;" class="fr-dib" loading="lazy"></a></p>
                                            <h4><strong>Workers&#39; Comp</strong></h4>
                                            <p><br></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><br></p>
                            <p><br></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </div>
    </div>
    <!-- End Content -->
    <div class="clearfix footer-clear-element "></div>


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


@endsection
