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

            .hero_section_container {
                background-image: url("/images/freshbg.jpg");
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
                <div class="col-md-8 center-block">
                    <h1 class='hero_h1'>Accident Solution</h1>
                    <h2 class='hero_h2'>Privacy Policy</h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix clearfix-lg"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <p>Accident Solution respects the privacy of our users and has developed this Privacy Policy to
                        demonstrate its commitment to protecting your privacy. This Privacy Policy is intended to
                        describe for you, as an individual who is a user of Accident Solution (and all websites and
                        URL&#39;s controlled or operated by Accident Solution which link to this policy, unless
                        otherwise specified) or our services, or otherwise provide us with information through various
                        means the information we collect, how that information may be used, with whom it may be shared,
                        and your choices about such uses and disclosures.<br><br>We encourage you to read this Privacy
                        Policy carefully when using our website or services or transacting business with us. By using
                        our website, you are accepting the practices described in this Privacy Policy.<br><br>If you
                        have any questions about our privacy practices, please refer to the end of this Privacy Policy
                        for information on how to contact us.<br><br><strong><span
                                style="text-decoration: underline;">Information we collect about
                                you&nbsp;</span></strong><br><br><span style="text-decoration: underline;">In
                            General</span>. We may collect personal information that can identify you such as your name
                        and email address and other information that does not identify you. When you provide personal
                        information through our website, the information may be sent to servers located in the United
                        States and other countries around the world.</p>
                    <ul class="small">
                        <li><strong>Information you provide.</strong>We may collect and store any personal information
                            you enter on our website or provide to us in some other manner. This includes identifying
                            information, such as your name, address, e-mail address, and telephone number, and in
                            addition, for Professionals, your credit card number and other personally identifiable
                            information. We also may request information about your interests and activities, your
                            gender and age, and other demographic information</li>
                        <li><strong>Information from other sources.</strong>We may also periodically obtain both
                            personal and non-personal information about you from other business partners, contractors
                            and other third parties. Examples of information that we may receive include (but are not
                            limited to): updated delivery and address information, purchase history, and additional
                            demographic information.</li>
                        <li><strong>Information about others.</strong>We may also collect and store personal information
                            about other people that you provide to us. If you use our website to send others (friends,
                            relatives, colleagues, etc.) information that may interest them through our system, we may
                            store your personal information, and the personal information of each such recipient</li>
                    </ul>
                    <p><br><span style="text-decoration: underline;">Use of cookies and other technologies to collect
                            information.</span> We use various technologies to collect information from your computer
                        and about your activities on our site.</p>
                    <ul class="small">
                        <li><strong>Information collected automatically.</strong>We automatically collect information
                            from your browser when you visit our website. This information includes your IP address,
                            your browser type and language, access times, the content of any undeleted cookies that your
                            browser previously accepted from us (see &quot;Cookies&quot; below), and the referring
                            website address.</li>
                        <li><strong>Cookies.</strong>When you visit our website, we may assign your computer one or more
                            cookies to facilitate access to our site and to personalize your online experience. Through
                            the use of a cookie, we also may automatically collect information about your online
                            activity on our site, such as the web pages you visit, the links you click, and the searches
                            you conduct on our site. Most browsers automatically accept cookies, but you can usually
                            modify your browser setting to decline cookies. If you choose to decline cookies, please
                            note that you may not be able to sign in or use some of the interactive features offered on
                            our website.</li>
                        <li><strong>Other Technologies.</strong>We may use standard Internet technology, such as web
                            beacons and other similar technologies, to track your use of our site. We also may include
                            web beacons in promotional [or other] e-mail messages or newsletters to determine whether
                            messages have been opened and acted upon. The information we obtain in this manner enables
                            us to customize the services we offer our website visitors to deliver targeted
                            advertisements and to measure the overall effectiveness of our online advertising, content,
                            programming or other activities.</li>
                        <li><strong>Information collected by third-parties.</strong>We may allow third-parties,
                            including (but not limited to) our authorized service providers, advertising companies, and
                            ad networks, to display advertisements on our site. These companies may use tracking
                            technologies, such as cookies, to collect information about users who view or interact with
                            their advertisements. Our website does not provide any personal information to these third
                            parties. This information allows them to deliver targeted advertisements and gauge their
                            effectiveness. Some of these third-party advertising companies may be advertising networks
                            that are members of the Network Advertising Initiative, which offers a single location to
                            opt out of ad targeting from member companies (<a href="http://www.networkadvertising.org/"
                                target="_blank">www.networkadvertising.org</a>).</li>
                    </ul>
                    <p><br><strong><span style="text-decoration: underline;">How we use the information we
                                collect</span></strong><br><br><span style="text-decoration: underline;">In
                            general.</span> We may use information that we collect about you to:</p>
                    <ul class="small">
                        <li>deliver the products and services that you have requested;</li>
                        <li>manage your account and provide you with customer support;</li>
                        <li>perform research and analysis about your use of, or interest in, our products, services, or
                            content, or products, services or content offered by others;</li>
                        <li>communicate with you by e-mail, postal mail, telephone and/or mobile devices or send
                            newsletters about products or services that may be of interest to you either from us or
                            other third parties;</li>
                        <li>communicate with you with regard to partially completed service requests;</li>
                        <li>develop and display content and advertising tailored to your interests on our site and other
                            sites;</li>
                        <li>verify your eligibility and deliver prizes in connection with contests and sweepstakes;</li>
                        <li>perform background screening, which may include the use of third parties, on Service
                            Professionals</li>
                        <li>enforce our terms and conditions;</li>
                        <li>manage our business and</li>
                        <li>perform functions as otherwise described to you at the time of collection.</li>
                    </ul>
                    <p><br><span style="text-decoration: underline;">Financial information.</span> For Professionals,
                        we may use financial information or payment method to process payment for any purchases made on
                        our website, enroll you in the discount, rebate, and other programs in which you elect to
                        participate, to pre-qualify you for credit card and other offers that you might find of
                        interest, to pre-qualify Professionals to participate in our directory service, to protect
                        against or identify possible fraudulent transactions, and otherwise as needed to manage our
                        business.<br><br><span style="text-decoration: underline;">Job applicants.</span> If your
                        personal information is submitted through our website when applying for a position with our
                        company, the information will be used solely in connection with considering and acting upon your
                        application. We may retain your personal information for a period of time, but only for the
                        purpose of considering your application for current or future available positions. This
                        information may be shared with our other companies for the purpose of evaluating your
                        qualifications for the particular position or other available positions, as well as with
                        third-party service providers retained by us to collect, maintain and analyze candidate
                        submissions for job postings.<br><br><strong><span style="text-decoration: underline;">With
                                whom we share your information</span></strong><br><br>We want you to understand when and
                        with whom we may share personal or other information we have collected about you or your
                        activities on our web site or while using our services.<br><br><span
                            style="text-decoration: underline;">Personal information.</span> We do not share your
                        personal information with others except as indicated below or when we inform you and give you an
                        opportunity to opt out of having your personal information shared. We may share personal
                        information with:</p>
                    <ul class="small">
                        <li><strong>Authorized service providers:</strong>We may share your personal information with
                            our authorized service providers that perform certain services on our behalf. These services
                            may include fulfilling orders, processing credit card payments, delivering packages,
                            providing customer service and marketing assistance, performing business and sales analysis,
                            supporting our website functionality, and supporting contests, sweepstakes, surveys and
                            other features offered through our website or performing background checks of Professionals.
                            These service providers may have access to personal information needed to perform their
                            functions but are not permitted to share or use such information for any other purposes.
                        </li>
                        <li><strong>Business partners:</strong>When you make purchases, reservations or engage in
                            promotions offered through our website or our services, we may share personal information
                            with the businesses with which we partner to offer you those products, services, promotions,
                            contests and/or sweepstakes. When you elect to engage in a particular merchant&#39;s offer
                            or program, you authorize us to provide your email address and other information to that
                            merchant.</li>
                        <li><strong>Professionals.</strong>We match your information and service request against our
                            list of Professionals. When you submit a match request through our website, you consent to
                            our providing your personal information and request to the Professionals we match with your
                            request. Sharing this information with Professionals allows them to contact you using the
                            e-mail address or other contact information you provided. In addition, we have other
                            approved contractual partners that fulfill service requests, or that utilize their own
                            Professionals to supplement our network, and we share your information with them, subject to
                            contractual confidentiality restrictions, in order to attempt to provide the services
                            requested. If using our services pursuant to a membership with one of our partners, Accident
                            Solution may share your service request activity information with such partner. We may also
                            release information to collection and/or credit agencies for past due Professional accounts.
                        </li>
                        <li><strong>Direct mail partners.</strong>From time to time we may share our postal mailing list
                            with selected providers of goods and services that may be of interest to you. If you prefer
                            not to have us share your postal mailing information with these selected providers, you can
                            notify us at any time by emailing us at sales@accidentsolutionllc.com</li>
                        <li><strong>Other Situations.</strong>We also may disclose your information:</li>
                        <li>In response to a subpoena or similar investigative demand, a court order, or a request for
                            cooperation from a law enforcement or other government agency; to establish or exercise our
                            legal rights; to defend against legal claims; or as otherwise required by law. In such
                            cases, we may raise or waive any legal objection or right available to us.</li>
                        <li>When we believe disclosure is appropriate in connection with efforts to investigate,
                            prevent, or take other action regarding illegal activity, suspected fraud or other
                            wrongdoing; to protect and defend the rights, property or safety of our company, our users,
                            our employees, or others; to comply with applicable law or cooperate with law enforcement;
                            or to enforce our website terms and conditions or other agreements or policies.</li>
                        <li>In connection with a substantial corporate transaction, such as the sale of our business, a
                            divestiture, merger, consolidation, or asset sale, or in the unlikely event of bankruptcy.
                        </li>
                    </ul>
                    <p>Any third parties to whom we may disclose personal information may have their own privacy
                        policies which describe how they use and disclose personal information. Those policies will
                        govern use, handling and disclosure of your personal information once we have shared it with
                        those third parties as described in this Privacy Policy. If you want to learn more about their
                        privacy practices, we encourage you to visit the websites of those third parties. These entities
                        or their servers may be located either inside or outside the United States.<br><br><span
                            style="text-decoration: underline;">Aggregated and non-personal information.</span> We may
                        share aggregated and non-personal information we collect under any of the above circumstances.
                        We may also share it with third parties to develop and deliver targeted advertising on our
                        websites and on websites of third parties. We may combine non-personal information we collect
                        with additional non-personal information collected from other sources. We also may share
                        aggregated information with third parties, including advisors, advertisers and investors, for
                        the purpose of conducting general business analysis. For example, we may tell our advertisers
                        the number of visitors to our website and the most popular features or services accessed. This
                        information does not contain any personal information and may be used to develop website content
                        and services that we hope you and other users will find of interest and to target content and
                        advertising. For Professionals, we may share your business contact information with third
                        parties, including but not limited to, business name, address, telephone number, email address
                        and name of owner or proprietor of the business.<br><br><strong><span
                                style="text-decoration: underline;">Third-party websites</span></strong><br><br>There
                        are a number of places on our website where you may click on a link to access other websites
                        that do not operate under this Privacy Policy. For example, if you click on an advertisement or
                        a search result on our website, you may be taken to a website that we do not control. These
                        third-party websites may independently solicit and collect information, including personal
                        information, from you and, in some instances, provide us with information about your activities
                        on those websites. We recommend that you consult the privacy statements of all third-party
                        websites you visit by clicking on the &quot;privacy&quot; link typically located at the bottom
                        of the webpage you are visiting.<br><br><strong><span style="text-decoration: underline;">How
                                you can access your information</span></strong><br><br>If you have an online consumer
                        account with us, you have the ability to review and update your personal information online by
                        logging into your account. You can also review and update your personal information by
                        contacting us. More information about how to contact us is provided below.<br><br>You can also
                        choose to have your account disabled by contacting sales@accidentsolutionllc.com . After you
                        deactivate your account, you will not be able to sign in to our website or access any of your
                        personal information. However, you can open a new account at any time. If you deactivate your
                        account, we may still retain certain information associated with your account for analytical
                        purposes and record keeping integrity, as well as to prevent fraud, collect any fees owed,
                        enforce our terms and conditions, take actions we deem necessary to protect the integrity of our
                        web site or our users, or take other actions otherwise permitted by law. In addition, if certain
                        information has already been provided to third parties as described in this Privacy Policy,
                        retention of that information will be subject to those third parties&#39;
                        policies.<br><br><strong><span style="text-decoration: underline;">Your choices about
                                collection and use of your information</span></strong></p>
                    <ul class="small">
                        <li>You can choose not to provide us with certain information, but that may result in you being
                            unable to use certain features of our website because such information may be required in
                            order for you to register as a member of our directory service; to use our services;
                            purchase products or services; participate in a contest, promotion, survey, or sweepstakes;
                            ask a question; or initiate other transactions on our website.</li>
                        <li>At any time a consumer user can choose to no longer receive commercial or promotional emails
                            or newsletters from us by accessing your user account and opting out. You also will be given
                            the opportunity, in any commercial e-mail that we send to you, to opt out of receiving such
                            messages in the future. It may take up to 10 days for us to process an opt-out request. We
                            may send you other types of transactional and relationship e-mail communications, such as
                            service announcements, administrative notices, and surveys, without offering you the
                            opportunity to opt out of receiving them.</li>
                        <li>If you prefer not to have us share your postal mailing information with these selected
                            providers of goods and services that may be of interest to you, you can notify us at any
                            time by emailing us at sales@accidentsolutionllc.com .</li>
                    </ul>
                    <p><br><strong><span style="text-decoration: underline;">How we protect your personal
                                information</span></strong><br><br>We take appropriate security measures (including
                        physical, electronic and procedural measures) to help safeguard your personal information from
                        unauthorized access and disclosure. For example, only authorized employees are permitted to
                        access personal information, and they may do so only for permitted business functions. We use
                        firewalls to help prevent unauthorized persons from gaining access to your personal
                        information.<br><br>We want you to feel confident using our website to transact business.
                        However, no system can be completely secure. Therefore, although we take steps to secure your
                        information, we do not promise, and you should not expect, that your personal information,
                        searches, or other communications will always remain secure. Please refer to the Federal Trade
                        Commission&#39;s website at <a href="http://www.ftc.gov/bcp/menus/consumer/data.shtm"
                            target="_blank">http://www.ftc.gov/bcp/menus/consumer/data.shtm</a> for information about
                        how to protect yourself against identity theft.<br><br><strong><span
                                style="text-decoration: underline;">Blogs, bulletin boards, reviews and chat
                                rooms</span></strong><br><br>We may provide areas on our websites where you can post
                        information about yourself and others and communicate with others, as well as post reviews of
                        products, establishments, contractors, and the like, or upload content (e.g. pictures, videos,
                        audio files, etc.). Such postings are governed by our Terms &amp; Conditions. In addition, such
                        postings may appear on other websites or when searches are executed on the subject of your
                        posting. Also, whenever you voluntarily disclose personal information on publicly-viewable web
                        pages, that information will be publicly available and can be collected and used by others. For
                        example, if you post your email address, you may receive unsolicited messages. We cannot control
                        who reads your posting or what other users may do with the information you voluntarily post, so
                        we encourage you to exercise discretion and caution with respect to your personal information.
                        Once you have posted information, you may not be able to edit or delete such
                        information.<br><br><strong><span style="text-decoration: underline;">Children&#39;s
                                privacy</span></strong><br><br>Our website is a general audience site, and we do not
                        knowingly collect personal information from children under the age of 13.<br><br><strong><span
                                style="text-decoration: underline;">Visiting our websites from outside the United
                                States</span></strong><br><br>This Privacy Policy is intended to cover collection of
                        information on our website from residents of the United States. If you are visiting our website
                        from outside the United States, please be aware that your information may be transferred to,
                        stored, and processed in the United States where our servers are located and our central
                        database is operated. The data protection and other laws of the United States and other
                        countries might not be as comprehensive as those in your country. Please be assured that we seek
                        to take reasonable steps to ensure that your privacy is protected. By using our services, you
                        understand that your information may be transferred to our facilities and those third parties
                        with whom we share it as described in this privacy policy.<br><br><strong><span
                                style="text-decoration: underline;">No Rights of Third
                                Parties</span></strong><br><br>This Privacy Policy does not create rights enforceable by
                        third parties or require disclosure of any personal information relating to users of the
                        website.<br><br><strong><span style="text-decoration: underline;">Changes to this Privacy
                                Policy</span></strong><br><br>We will occasionally update this Privacy Policy to reflect
                        changes in our practices and services. We recommend that you check our website from time to time
                        to inform yourself of any changes in this Privacy Policy or any of our other
                        policies.<br><br><strong><span style="text-decoration: underline;">How to contact
                                us&nbsp;</span></strong><br><br>If you have any questions about this Privacy Policy or
                        our information-handling practices, or if you would like to request information about our
                        disclosure of personal information to third parties for their direct marketing purposes, please
                        contact us by e-mail as follows: sales@accidentsolutionllc.com</p>
                    <p>For our Canadian users:<br><br>Your rights to access your personal information are not absolute.
                        We may deny access:</p>
                    <ul class="small">
                        <li>When denial of access is required by law</li>
                        <li>When granting you access would have an unreasonable impact on other people&#39;s privacy;
                        </li>
                        <li>To protect our Company&#39;s rights and property; or</li>
                        <li>Where the request if frivolous or vexatious.</li>
                    </ul>
                    <p><br>If we deny your request for access to, or refuse a request to correct personal information,
                        we will explain why.<br><br>Accident Solution, &nbsp;All rights reserved.</p>
                    <p>We may provide this information in a standardized format that is not specific to you. The
                        designated email address for these requests is sales@accidentsolutionllc.com
                        .<br><br><strong><span style="text-decoration: underline;">Linked
                                information:</span></strong><br><br>Cookies:<br><br>A cookie is a small text file that
                        is stored on a user&#39;s computer for record keeping purposes. Cookies can be either session
                        cookies or persistent cookies. A session cookie expires when you close your browser and is used
                        to make it easier for you to navigate our website. A persistent cookie remains on your hard
                        drive for an extended period of time.<br><br>For example, when you sign in to our website, we
                        will record your user or member ID and the name on your user or member account in the cookie
                        file on your computer. We also may record your password in this cookie file, if you indicated
                        that you would like your password saved for automatic sign-in. For security purposes, we will
                        encrypt any usernames, passwords, and other user or member account-related data that we store in
                        such cookies. In the case of sites and services that do not use a user or member ID, the cookie
                        will contain a unique identifier. We may allow our authorized service providers to serve cookies
                        from our website to allow them to assist us in various activities, such as doing analysis and
                        research on the effectiveness of our site, content and advertising.<br><br>You may delete or
                        decline cookies by changing your browser settings. (Click &quot;Help&quot; in the toolbar of
                        most browsers for instructions.) If you do so, some of the features and services of our website
                        may not function properly.<br><br>We may allow third-parties, including advertising companies
                        and ad networks, to display advertisements on our site. These companies may use tracking
                        technologies, such as cookies, to collect information about users who view or interact with
                        their advertisements. Our website does not provide any personal information to these third
                        parties, but they may collect information about where you, or others who are using your
                        computer, saw and/or clicked on the advertisements they deliver, and possibly associate this
                        information with your subsequent visits to the advertised websites. They also may combine this
                        information with personal information they collect from you. The collection and use of that
                        information is subject to the third-party&#39;s privacy policy. This information allows them to
                        deliver targeted advertisements and gauge their effectiveness. Some of these third-party
                        advertising companies may be advertising networks that are members of the Network Advertising
                        Initiative, which offers a single location to opt out of ad targeting from member companies (<a
                            href="http://www.networkadvertising.org/"
                            target="_blank">www.networkadvertising.org</a>).<br><br>Web Beacons:<br><br>Web beacons
                        (also known as clear gifs, pixel tags or web bugs) are tiny graphics with a unique identifier,
                        similar in function to cookies, and are used to track the online movements of web users or to
                        access cookies. Unlike cookies which are stored on the user&#39;s computer hard drive, web
                        beacons are embedded invisibly on the web pages (or in email) and are about the size of the
                        period at the end of this sentence.<br><br>Web beacons may be used to deliver or communicate
                        with cookies, to count users who have visited certain pages and to understand usage patterns. We
                        also may receive an anonymous identification number if you come to our site from an online
                        advertisement displayed on a third-party website.</p>
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
