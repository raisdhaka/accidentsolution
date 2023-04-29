@extends('layouts.web')

@section('content')
    <div class="clearfix"></div>
    <!-- Begin  Content -->
    <div id="first_container" class="content-container fr-view">
        <div class="container">
            <div class="clearfix body-content"></div>
            <style type='text/css'>
                div#map-bounds {
                    width: 100%;
                    height: 600px;
                    display: block;
                }

                .gsc-control-cse.gsc-control-cse-en {
                    border-radius: 4px;
                    margin-top: 20px;
                    padding-top: 0;
                }

                .mid_section .btn-sm.btn-block {
                    width: auto;
                    display: inline-block
                }
            </style>
            <div class="clearfix"></div>
            <div class="row content_w_sidebar member_results">

                <div class='col-md-9 col-md-push-3'>
                    <style type='text/css'>
                        .views {
                            margin-top: -1px !important;
                        }

                        @media only screen and (max-width: 767px) {

                            .member_results .sort-members-select,
                            .member_results .overall_rating_filter {
                                float: left;
                                width: 150px;
                            }
                        }
                    </style>
                    <div class="col-sm-4 nopad bmargin">
                        Showing 1 - <span class="current__amount__js">1</span> of

                        <span class="total__js">1</span> Results
                    </div>
                    <div class="col-sm-8 nopad text-right bmargin">
                        <div class="form-inline">
                            <div class="form-group sort-members-select">
                                <select class="form-control pull-right input-sm" name=sort
                                    onchange="window.location='/search_results?sort='+this.value;" id="sortbox">
                                    <option value="" selected>Sort Results
                                    </option>

                                    <option value="reviews">
                                        Sort by Most Reviews
                                    </option>
                                    <option value="name ASC">
                                        Sort by Name A-Z
                                    </option>
                                    <option value="name DESC">
                                        Sort by Name Z-A
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="member_results_header">
                        <h1 class="bold nomargin"> Results</h1>
                    </div>

                    <hr>
                    <div class="grid-container">
                        <div class="row-fluid member_results level_8 search_result clearfix">
                            <div class="grid_element">
                                <div class="img_section col-xs-2 nopad">
                                    <a title="Accident Solution - " href="/top-level-category/accident-solution">
                                        <img class="search_result_image img-rounded center-block lazyloader" loading="auto"
                                            width="400" height="400" alt="Accident Solution"
                                            src="{{asset('images/profile-profile-holder.png')}}">

                                    </a>
                                </div>
                                <div class="mid_section col-xs-10 col-sm-7 norpad">
                                    <a class="center-block" title="Accident Solution"
                                        href="/top-level-category/accident-solution">
                                        <span class="h3 bold inline-block nomargin member-search-full-name">
                                            Accident Solution </span>
                                    </a>
                                    <div class="clearfix fpad-sm nobpad"></div>
                                    <div title="This member verified their information"
                                        class="btn-xs alert-success bold nopad nolpad rmargin inline-block member-search-verified align-middle">
                                        <span class="btn-xs novpad bg-success pull-left"
                                            style="border-radius: 3px 0 0 3px;">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="btn-xs novpad">
                                            verified
                                        </span>
                                    </div>
                                    <div class="clearfix fpad-sm nobpad"></div>

                                </div>
                                <div class="info_section hidden-xs col-sm-3 norpad">
                                    <div class="module nomargin fpad text-center">
                                        <a class="btn btn-sm btn-success btn-block bold search_view_listing_button"
                                            href="/top-level-category/accident-solution">View Listing</a>
                                        <div class="clearfix fpad-sm nobpad"></div>
                                        <a class="btn btn-sm btn-primary btn-block bold search_contact_now_button"
                                            href="/top-level-category/accident-solution/connect">Send Message</a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                    </div>

                    <div class="map_container" style="display:none;">
                    </div>
                    <div class="member-pagination-block">
                        <div class="clearfix tmargin"></div>
                        <ul class="pagination pagination-lg">
                        </ul>
                        <div class="clearfix clearfix-lg"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-3 col-md-pull-9">
                    <!--

    This search module will detect which of the default membership features' search results pages is being viewed and display the related search feature.

    IMPORTANT: This module will only work with the default search features that come with the software when they are using the default forms associated with those features.  If the form or the membership feature is modified, this widget may not work as expected.

    -->

                    <div class="module">
                        <h2>Find Attorney</h2>
                        <form action="/search_results" class="website-search" accept-charset="UTF-8" method="get">

                            <div class="form-group normal-autosuggest">
                                <label>Practice Area</label>
                                <input type="text" name="q" value="" placeholder="Category"
                                    class="form-control member_search">
                            </div>

                            <div class="form-group">
                                <label>Search by location:</label>
                                <input type=text placeholder="City or Zip Code"
                                    class="googleSuggest googleLocation form-control" id="location_google_maps_homepage"
                                    name="location_value" value="">
                            </div>

                            <div class="form-group nomargin">
                                <button class="btn btn-primary btn-block" type="submit">Search Now</button>
                            </div>
                        </form>
                    </div>
                    <div class="module">
                        <h3 class="bpad text-center">Join Our Newsletter</h3>
                        <a href="#" data-toggle="modal" data-target="#newsletter_subscribe_modal"
                            class="btn btn-primary btn-block">
                            Click to Subscribe
                        </a>
                    </div>

                    <div class="modal fade" id="newsletter_subscribe_modal" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h3 class="nomargin">
                                                Join Our Newsletter
                                            </h3>
                                            <hr>
                                            <div class="newsletter_modal_form_container">
                                                <style type="text/css">
                                                    label span.required {
                                                        color: #B94A48;
                                                    }

                                                    span.help-inline,
                                                    span.help-block {
                                                        font-size: .9em;
                                                    }
                                                </style>
                                                <form
                                                    action="/api/widget/json/get/Bootstrap%20Theme%20-%20Module%20-%20Newsletter%20Actions"
                                                    id="newsletter" method="post" labelwidth="100"
                                                    labelpaddingtop="0.5em" enctype="multipart/form-data"
                                                    form_action_type="widget"
                                                    form_action_div=".newsletter_modal_form_container" return_data_type=""
                                                    name="newsletter_modal_signup" class=" "><input type="hidden"
                                                        name="sized" value="0" id="newsletter-element-0" /><input
                                                        type="hidden" name="mysql_real_escape_string_runned"
                                                        value="1" id="newsletter-element-1" /><input type="hidden"
                                                        name="form" value="myform" id="newsletter-element-2" /><input
                                                        type="hidden" name="formname" value="newsletter_modal_signup"
                                                        id="newsletter-element-3" /><input type="hidden" name="dowiz"
                                                        value="1" id="newsletter-element-4" /><input type="hidden"
                                                        name="save" value="1" id="newsletter-element-5" /><input
                                                        type="hidden" name="action" autocomplete="off"
                                                        value="subscribe" id="newsletter-element-6" />
                                                    <div class="form-group"><input type="text" name="first_name"
                                                            placeholder="Name" autocomplete="off" value
                                                            class="form-control control-group  form-control "
                                                            id="newsletter-element-7" /></div>
                                                    <div class="form-group"><input type="email" name="email" required
                                                            placeholder="Enter email address" autocomplete="off" value
                                                            class="form-control control-group form-control"
                                                            id="newsletter-element-8" /></div>
                                                    <div class="form-group">
                                                        <div class="form-group security_question_label">
                                                            <div id="newsletter-captchaContainer" class="control-group">
                                                                <div class="g-recaptcha" id="newsletter-google-recaptcha">
                                                                </div>
                                                            </div>
                                                            <small class="help-block" id="recaptcha_error"
                                                                style="display:none;" data-fv-validator="notEmpty"
                                                                data-fv-for="recaptcha" data-fv-result="INVALID" />The
                                                            security check was not completed successfully.</small>
                                                            <div class="clearfix bmargin"></div>
                                                            <input type="hidden" name="recaptcha" id="newsletter-rcap">
                                                        </div>
                                                        <style>
                                                            .modal .g-recaptcha-scale,
                                                            .col-md-4 .g-recaptcha-scale,
                                                            .col-md-3 .g-recaptcha-scale,
                                                            .col-lg-3 .g-recaptcha-scale,
                                                            .col-lg-4 .g-recaptcha-scale {
                                                                transform: scale(0.77);
                                                                -webkit-transform: scale(0.77);
                                                                transform-origin: 0 0;
                                                                -webkit-transform-origin: 0 0;
                                                                margin-bottom: -15px;
                                                            }

                                                            .modal #newsletter-captchaContainer,
                                                            .col-md-4 #newsletter-captchaContainer,
                                                            .col-md-3 #newsletter-captchaContainer,
                                                            .col-lg-3 #newsletter-captchaContainer,
                                                            .col-lg-4 #newsletter-captchaContainer {
                                                                transform: scale(0.77);
                                                                -webkit-transform: scale(0.77);
                                                                transform-origin: 0 0;
                                                                -webkit-transform-origin: 0 0;
                                                                margin-bottom: -15px;
                                                            }
                                                        </style>
                                                        <script type="text/javascript">
                                                            var formID = '';
                                                            var currentCaptcha = {};
                                                            var captchaHolders = {};
                                                            window.addEventListener('load', () => {
                                                                formID = document.querySelectorAll('[name="recaptcha"]');
                                                                if (typeof formID != "undefined" && formID !== null) {
                                                                    for (let i = 0; i < formID.length; i++) {
                                                                        let formIDForm = formID[i].closest('form');
                                                                        if (typeof formIDForm != "undefined" && formIDForm !== null) {
                                                                            formIDForm.addEventListener('click', reCaptchaOnFormClick, false);
                                                                        }
                                                                    }
                                                                }
                                                            });

                                                            function reCaptchaOnFormClick(event) {
                                                                currentCaptchaForm = event.srcElement.closest('form');
                                                                var head = document.getElementsByTagName('head')[0];
                                                                var script = document.createElement('script');
                                                                script.type = 'text/javascript';
                                                                script.src = 'https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=en';
                                                                head.appendChild(script);
                                                                if (typeof currentCaptchaForm != "undefined" && currentCaptchaForm !== null) {
                                                                    currentCaptchaForm.removeEventListener('click', reCaptchaOnFormClick, false);
                                                                }
                                                            }


                                                            var onloadCallback = function(event) {
                                                                var captcha = currentCaptchaForm.querySelectorAll('div[class=g-recaptcha]');
                                                                if (captcha[0].id) {
                                                                    captchaHolders[captcha[0].id] = grecaptcha.render(captcha[0].id, {
                                                                        'sitekey': '6LdVlIEfAAAAALs8F1418WpUFvNZXRlnXghMPaQh'
                                                                    });
                                                                }
                                                            }
                                                        </script>
                                                        <script>
                                                            function respuesta() {
                                                                var checkedTextArea = document.getElementsByClassName('g-recaptcha');
                                                                var rcap = document.getElementsByTagName('recaptcha');
                                                                for (var i = 0; i < checkedTextArea.length; i++) {
                                                                    if (checkedTextArea[i].value != '') {
                                                                        for (var index = 0; i < rcap.length; index++) {
                                                                            rcap[index].setAttribute("value", "checked");
                                                                        }
                                                                    }
                                                                }
                                                            }

                                                            $(document).ready(function() {
                                                                $("#newsletter input[type=submit]").unbind('click');
                                                                $("#newsletter input[type=submit]").click(function(event) {

                                                                    var formId = $(this.form).attr('id');
                                                                    var captchaHolderKey = formId + "-google-recaptcha";

                                                                    if (typeof captchaHolders[captchaHolderKey] != "undefined") {
                                                                        event.preventDefault();

                                                                        if (grecaptcha.getResponse(captchaHolders[captchaHolderKey]) === "") {
                                                                            $("#" + formId).formValidation('validate');
                                                                            $("#" + formId + " .security_question_label").addClass("has-error");
                                                                            $("#" + formId + " #recaptcha_error").css("display", "block");
                                                                            return false;
                                                                        } else {
                                                                            $("#" + formId + " .security_question_label").removeClass("has-error");
                                                                            $("#" + formId + " #recaptcha_error").css("display", "none");
                                                                            respuesta();
                                                                            $("#" + formId).submit();
                                                                        }
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                    <div class="form-group"><input type="hidden" name="bd_hpc"
                                                            autocomplete="off" value class="form-control control-group "
                                                            id="newsletter-element-11" /></div>
                                                    <div class="form-actions"><input type="submit" value="Subscribe Now"
                                                            name class="btn btn-success btn-block btn-lg  bold "
                                                            id="newsletter-element-12" /></div><input type='hidden'
                                                        name='origin' value='/search_results'>
                                                </form>
                                                <script type="text/javascript">
                                                    jQuery(document).ready(function() {
                                                        jQuery("#newsletter").bind("submit", function() {});
                                                    });
                                                </script>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside>
                        <div class="module">
                            <h3>Join Our Community</h3>
                            <p>
                                <b>1.</b> Register a member account<br>
                                <b>2.</b> Create a searchable listing<br>
                                <b>3.</b> Connect with more clients
                            </p>
                            <a title="Get Listed Today" href="/join" class="btn btn-primary btn-block">Get Listed
                                Today</a>
                        </div>
                    </aside>
                </div>
            </div>

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
