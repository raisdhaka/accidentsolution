
<div class="footer">
    <div class="container">
        <div class="row">
            <ul class="footer_menu sm-text-center">
                <li class='col-md-2 col-md-offset-1'><span id='link338' class='head'> Website</span>
                    <ul>
                        <li class=''><a href='{{route('howitworks')}}' id='link339'>How It Works</a></li>
                        <li class=''><a href='{{route('join')}}' id='link340'>List Your Company</a></li>
                    </ul>
                </li>
                <li class='col-md-2'><span id='link341' class='head'> Search</span>
                    <ul>
                        <li class=''><a href='#' id='link342'>Browse Categories</a></li>
                        <li class=''><a href='#' id='link343'>Browse Locations</a></li>
                    </ul>
                </li>
                <li class=''><a href='{{route('contact')}}' id='link346'>Contact Us</a></li>
                <li class='col-md-2'><span id='link344' class='head'> Support</span>
                    <ul>
                        <li class=''><a href='{{route('login')}}' id='link345'>Member Login</a></li>
                        <li class='font-sm inline-block hpad'><a href='{{route('terms')}}' id='link355'
                                title='Terms of Use'>Terms of Service</a></li>
                    </ul>
                </li>
                <li class='col-md-12 clearfix'><span id='link347'> </span></li>
                <li class='col-md-5 vpad vmargin'><span id='link348'>
                        <div itemscope itemtype="http://schema.org/WebSite">
                            <meta itemprop="name" content="Accident Solution" id="sitename">
                            <link href="//www.accidentsolutionllc.com" itemprop="url" id="sitelink">
                            <div class="list-social-links">
                                <a class="network-icon contact" href="{{route('contact')}}"
                                    title="Contact Us Accident Solution">
                                    <i class="fa fa-envelope"></i>
                                </a>



                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </span></li>
                <li class='col-md-6 col-md-offset-1 vpad vmargin'><a href='/join' id='link349'
                        class='btn btn_footer_get_listed btn-lg btn-block bold center sm-block'> - Get Listed
                        Today</a></li>
                <li class='col-md-12 clearfix vmargin text-center'><span id='link350'> </span>
                    <ul>
                        <li class='clearfix vmargin vpad inline-block'><span id='link351'> </span></li>
                        <li class='btn-lg font-sm  novpad  norpad inline-block'><span id='link352'> © 2023</span>
                        </li>
                        <li class='font-sm inline-block hpad'><a href='/' id='link353'
                                title='Accident Solution'>Accident Solution</a></li>
                        <li class='font-sm inline-block'><span id='link354'> All Rights Reserved</span></li>
                        <li class='font-sm inline-block'> <a href='{{route('privacy')}}' id='link356'
                                title='Privacy Policy'>Privacy Policy</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<style type='text/css'>
    .scrollup {
        border-radius: 3px;
        width: 40px;
        height: 40px;
        opacity: 0.4;
        position: fixed;
        bottom: 30px;
        right: 30px;
        display: none;
        background: rgba(119, 119, 119, 0.8);
        z-index: 1000000;
    }

    .scrollup i {
        font-size: 36px;
        color: white;
        position: relative;
        top: 0px;
        left: 10px;
    }
</style>


<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"
    href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/limonte-sweetalert2/6.11.2/sweetalert2.min.css">
<noscript>
    <link rel="stylesheet"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/limonte-sweetalert2/6.11.2/sweetalert2.min.css">
</noscript>
<script
    src="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/limonte-sweetalert2/6.11.2/sweetalert2.min.js"></script>

<script>
    function clearContent(thisObj) {
        var size;
        if (thisObj.hasClass('input-sm') || thisObj.parents('.input-group').hasClass('input-group-sm')) {
            size = "small";
        } else if (thisObj.hasClass('input-lg') || thisObj.parents('.input-group').hasClass('large-autosuggest')) {
            size = "large";
        } else {
            size = "medium";
        }
        if (!thisObj.parent().hasClass('input_wrapper')) {
            if (thisObj.parent().hasClass('input-group-sm')) {
                thisObj.wrap('<span class="input-group-sm input_wrapper"></span>');
            } else if (thisObj.parent().hasClass('input-group-lg')) {
                thisObj.wrap('<span class="input-group-lg input_wrapper"></span>');
            } else {
                thisObj.wrap('<span class="input_wrapper"></span>');
            }
        }
        if (thisObj.val() != "") {
            if (thisObj.hasClass('googleSuggest')) {
                thisObj.parent().find('.fill_location').remove();
            }
            if (!thisObj.parent().find('.clear_content').length) {
                thisObj.parent().append(`<span class="clear_content ${size}"><i class="fa fa-times-circle" aria-hidden="true"></i></span>`);
                if (thisObj.hasClass("tt-input")) {
                    thisObj.focus();
                }

            }
        }
    }

    $(document).on('click', '.drp-buttons .applyBtn', function () {
        clearContent($(".dateRange input"));
    });

    $('.sm-autosuggest input, .googleSuggest, .large-autosuggest input, .md-autosuggest input, .normal-autosuggest input, .google-writen-location, .dateRange input').keyup(function () {
        clearContent($(this));
    });

    $(document).ready(function () {
        $('.sm-autosuggest input, input.googleSuggest, .large-autosuggest input, .md-autosuggest input, .normal-autosuggest input, .google-writen-location, .dateRange input').each(function () {
            clearContent($(this));
        })
    })

    $(document).on('click', '.clear_content', function () {
        $(this).parent().find('input').val('');
        //tt-input its a class for typeahead auto-suggest
        if ($(this).parent().find('input').hasClass("tt-input")) {
            $(this).parent().find('input').typeahead('val', '');
        }
        clearContent($(this).parent().find('input'));
        $(this).remove();
    });

    $(window).on('load', function () {
        setTimeout(function () {
            // add missing href attribute to multi-category options in search modules
            $('.bootstrap-select.show-tick .dropdown-menu a').attr('href', '#');
        }, 2000);
    });
</script>



<a href="#" class="scrollup" title="scrollup">
    <i class="fa fa-caret-up" aria-hidden="true"></i>
</a>

<script
    src="https://www.optimizecdn.com/directory/cdn/bootstrap/formvalidation/current/dist/js/formValidation.min.js"></script>
<script
    src="https://www.optimizecdn.com/directory/cdn/bootstrap/formvalidation/current/dist/js/framework/bootstrap.min.js"></script>


<div class="modal fade" id="newsletter_subscribe_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                id="newsletter" method="post" labelwidth="100" labelpaddingtop="0.5em"
                                enctype="multipart/form-data" form_action_type="widget"
                                form_action_div=".newsletter_modal_form_container" return_data_type=""
                                name="newsletter_modal_signup" class=" "><input type="hidden" name="sized" value="0"
                                    id="newsletter-element-0" /><input type="hidden" name="form" value="myform"
                                    id="newsletter-element-1" /><input type="hidden" name="formname"
                                    value="newsletter_modal_signup" id="newsletter-element-2" /><input type="hidden"
                                    name="dowiz" value="1" id="newsletter-element-3" /><input type="hidden"
                                    name="save" value="1" id="newsletter-element-4" /><input type="hidden"
                                    name="action" autocomplete="off" value="subscribe" id="newsletter-element-5" />
                                <div class="form-group"><input type="text" name="first_name" placeholder="Name"
                                        autocomplete="off" value class="form-control control-group  form-control "
                                        id="newsletter-element-6" /></div>
                                <div class="form-group"><input type="email" name="email" required
                                        placeholder="Enter email address" autocomplete="off" value
                                        class="form-control control-group form-control" id="newsletter-element-7" />
                                </div>
                                <div class="form-group">
                                    <div class="form-group security_question_label">
                                        <div id="newsletter-captchaContainer" class="control-group">
                                            <div class="g-recaptcha" id="newsletter-google-recaptcha"></div>
                                        </div>
                                        <small class="help-block" id="recaptcha_error" style="display:none;"
                                            data-fv-validator="notEmpty" data-fv-for="recaptcha"
                                            data-fv-result="INVALID" />The security check was not completed
                                        successfully.</small>
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


                                        var onloadCallback = function (event) {
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

                                        $(document).ready(function () {
                                            $("#newsletter input[type=submit]").unbind('click');
                                            $("#newsletter input[type=submit]").click(function (event) {

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
                                <div class="form-group"><input type="hidden" name="bd_hpc" autocomplete="off" value
                                        class="form-control control-group " id="newsletter-element-10" /></div>
                                <div class="form-actions"><input type="submit" value="Subscribe Now" name
                                        class="btn btn-success btn-block btn-lg  bold "
                                        id="newsletter-element-11" /></div><input type='hidden' name='origin'
                                    value='/'>
                            </form>
                            <script type="text/javascript">jQuery(document).ready(function () {
                                    jQuery("#newsletter").bind("submit", function () {
                                    });
                                }); </script>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function decision(message, url) {
        if (confirm(message)) {
            setTimeout(function () {
                window.location = url;
            }, 0);
        }
    }
</script>
<style type='text/css'>
    select#sid[disabled],
    select#tid[disabled],
    select.combobox[disabled],
    select#bd-chained[disabled],
    select#category-chained[disabled],
    select.infinite-chained[disabled],
    select.subcategory-chained[disabled],
    select.search-chained[disabled],
    select#country-chained[disabled],
    select#state-chained[disabled],
    select#country-chained-2[disabled],
    select#state-chained-2[disabled],
    select#profession_id[disabled] {
        cursor: wait
    }

    select.select2-preload {
        line-height: initial;
    }

    select#sid,
    select#tid,
    select.combobox,
    select#bd-chained,
    select#category-chained,
    select.infinite-chained,
    select.subcategory-chained,
    select.search-chained,
    select#country-chained,
    select#state-chained,
    select#country-chained-2,
    select#state-chained-2,
    select#profession_id,
    [name^="bd_phone_country_code"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: url(/images/select2ArrowDown.png) !important;
        background-repeat: no-repeat !important;
        background-size: 10px 9px !important;
        background-position: 99% 16px;
        border-radius: 6px;
        overflow: hidden;
    }

    .module select#sid,
    .module select#tid,
    .module select.combobox,
    .module select#bd-chained,
    .module select#category-chained,
    .module select.infinite-chained,
    .module select.subcategory-chained,
    .module select.search-chained,
    .module select#country-chained,
    .module select#state-chained,
    .module select#country-chained-2,
    .module select#state-chained-2,
    .module select#profession_id,
    [name^="bd_phone_country_code"] {
        background-position: 98.2% 12px;
    }
</style> <!-- DROPDOWN SELECT SCRIPT -->
<!-- Select2 CSS Included in website-styles.pkgd.min.css -->
<!--[if lt IE 9]>
<script defer src="https://www.optimizecdn.com/directory/cdn/assets/html5shiv/3.7.2/html5shiv.min.js"></script>
<script defer src="https://www.optimizecdn.com/directory/cdn/bootstrap/select2/master/js/respond.min.js"></script>
<![endif]-->


<script type="text/javascript"
    src="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>


<script defer
    src="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/js/websiteScripts.min.js?v=0.4"></script>
