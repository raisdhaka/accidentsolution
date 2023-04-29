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
                background-image: url("/images/Depositphotos_10911004_XL.jpg");
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
        <div class="hero_section_container">
            <div class="container">
                <div class="col-md-8 center-block">
                    <h1 class='hero_h1'>FAQ</h1>
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
                    <h2 style="text-align: center;"><strong>Frequently Asked Questions</strong></h2>
                    <p><br></p>
                    <table class="froala-table" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="width: 50%; vertical-align: top;">
                                    <h4><strong>What is the minimum contract term for Accident Solution?</strong></h4>
                                    <p><span style="font-size: 16px;">The minimum contract term for the Silver, and Gold
                                            Membership Packages is one year with an option to cancel after 90 days. The
                                            minimum contract for the Platinum Membership is one year with the option to
                                            cancel after 180 days.</span></p>
                                    <p><br></p>
                                </td>
                                <td style="width: 50%; vertical-align: top;">
                                    <h4><strong>How am I billed for this service?</strong></h4>
                                    <p><span style="font-size: 16px;">We have three different billing options &ndash;
                                            quarterly, biannual, and annual billing, with the first portion of the payment
                                            due at signup.&nbsp;</span></p>
                                    <p><br></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%; vertical-align: top;">
                                    <h4><strong>How is Accident Solution different from other Online Legal
                                            Directories?</strong></h4>
                                    <p><span style="font-size: 16px;">Accident Solution offers all the advantages of a
                                            premier legal directory listing plus a high-end, new client acquisition and
                                            management system that is unlike anything available on the market today.</span>
                                    </p>
                                    <p><br></p>
                                </td>
                                <td style="width: 50%; vertical-align: top;">
                                    <h4><strong>What is the Accident Solution Seal of Approval?</strong></h4>
                                    <p><span style="font-size: 16px;">Our Seal of Approval allows consumers to access
                                            providers&rsquo; listings and profiles with confidence knowing that their
                                            credentials and information have been verified by Accident Solution.</span></p>
                                    <p><br></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%; vertical-align: top;">
                                    <h4><strong>How much does a listing in the Accident Solution online directory
                                            cost?&nbsp;</strong></h4>
                                    <p><span style="font-size: 16px;">&nbsp;Each category listing with Accident Solution
                                            costs as little as $1250 per month -- with specific pricing based upon the
                                            features and terms you select. Click here to view our entire selection of
                                            Membership Options.</span></p>
                                    <p><br></p>
                                </td>
                                <td style="width: 50%; vertical-align: top;">
                                    <h4><strong>Why should I purchase multiple category listings? <br></strong></h4>
                                    <p>Purchasing multiple category listings increases your visibility in the attorney
                                        search results by allowing potential clients to find you under multiple areas or
                                        practice areas (i.e. personal injury, workers compensation, auto accident, etc.). If
                                        you subscribe to the Platinum membership package, any additional categories you
                                        purchase will be linked to your profile page at no cost!</p>
                                    <p><br></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%; vertical-align: top;">
                                    <h4><strong>Can a client find me directly from my profile page? <br></strong></h4>
                                    <p><span style="font-size: 16px;">Yes, if the client does a name search only. &nbsp;
                                            &nbsp;</span></p>
                                </td>
                                <td style="width: 50%; vertical-align: top;">
                                    <h4><strong>Can I purchase a membership in a category that is not listed on the
                                            Membership Application?</strong></h4>
                                    <p>If you would like to purchase a membership in a category that is not listed on our
                                        Membership Application, please contact us at sales@accidentsolution.com. Please note
                                        that the categories listed on our Membership Application represent only the main
                                        practice areas, however, your purchase of the main category includes relevant
                                        subcategories for that area as well.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%; vertical-align: top;">
                                    <p id="isPasted"><strong><span style="font-size: 18px;">How do you promote and
                                                drive&nbsp;</span></strong><span
                                            style="font-size: 18px;"><strong>traffic</strong></span><strong><span
                                                style="font-size: 18px;">&nbsp;to Accident Solution?</span></strong></p>
                                    <p><span style="font-size: 16px;">A.&nbsp;In addition to using the most advanced and
                                            sophisticated technology to optimize our web pages for excellent search engine
                                            results, Accident Solution takes full advantage of all traditional media sources
                                            and new market trends to advertise our online directory. As a result, thousands
                                            of consumers in need of legal help are driven
                                            to&nbsp;www.accidentsolution.comthrough a variety of multimedia channels,
                                            including:</span></p>
                                    <ul>
                                        <li><span style="font-size: 16px;">Television and radio advertising</span></li>
                                        <li>Pay-per-click online advertising</li>
                                        <li>Major search engines (Google, Yahoo, Bing, etc.)</li>
                                        <li>Social networking sites (Facebook, Twitter, YouTube, LinkedIn, etc.)</li>
                                        <li>Email and Direct Mail marketing campaigns</li>
                                        <li>And other proprietary sources</li>
                                        <li>&ldquo;Find An Attorney&rdquo;&nbsp;mobile phone application</li>
                                        <li>All sources of advertising are based on the market budget.</li>
                                    </ul>
                                </td>
                                <td style="width: 50%; vertical-align: top;"><strong><span style="font-size: 18px;">What is
                                            SEO?</span></strong><br><br><span style="font-size: 16px;">A. SEO stands for
                                        Search Engine Optimization, the process of improving the volume or quality of
                                        traffic to a website from search engines via &quot;natural&quot; or un-paid search
                                        results. Typically, the higher a website appears in the search engine&rsquo;s
                                        results list, the more visitors it will receive from the search engine. As an
                                        internet marketing strategy, SEO considers how search engines work and what people
                                        search for. Optimizing a website primarily involves editing its content and
                                        associated coding to increase its relevance to specific keywords and to remove
                                        barriers to the indexing activities of search engines.</span><br></td>
                            </tr>
                            <tr>
                                <td><strong><span style="font-size: 18px;">Are there any
                                            guarantees?</span></strong><br><br><span style="font-size: 16px;">A. Neither
                                        Accident Solution nor any of its members or representatives have made or are
                                        authorized to make any representation, warranties, or guarantees with respect to the
                                        quality of consumer inquiries connected to the member or that such consumer
                                        inquiries will result in actual fees to the member or that the member will receive
                                        any revenue or potential revenue whatsoever in connection with this
                                        program.</span><br></td>
                                <td style="width: 50%; vertical-align: top;"><br></td>
                            </tr>
                        </tbody>
                    </table>
                    <p><br></p>
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
