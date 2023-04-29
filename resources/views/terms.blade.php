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
                background-image: url("{{asset('images/freshbg.jpg')}}");
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
                    <h1 class='hero_h1'>Terms of Service</h1>
                    <h2 class='hero_h2'>Terms of Use</h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix clearfix-lg"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <p id="isPasted" style="text-align: center;"><strong><span style="font-size: 16px;">Terms and
                                conditions Member Agreement and Directory listing</span></strong></p>
                    <p>This corporative advertising and marketing &nbsp; Agreement and Terms of Service together with
                        any referenced materials (&ldquo;Agreement&rdquo; OR &ldquo;ToS&rdquo;) contain the complete
                        terms and conditions that apply to your usage and listing in the Accident Solution Directory
                        &nbsp;(&ldquo;AS&rdquo; or &ldquo; Directory&rdquo;) and participation as a member on the
                        platform and network provided by the Directory. This Agreement is entered into by and between
                        you, and Accident Solution LLC. a corporation duly organized and existing under and by virtue of
                        the laws of the State of Delaware (&quot;we,&quot; &quot;us,&quot; &ldquo;our&rdquo; or
                        &quot;AS&quot;). If you do not agree to these Terms and Conditions, please do not purchase a
                        Directory Listing.</p>
                    <p>Please read this Agreement carefully before participating as a member on this advertising
                        platform or using the various other associated online services (together &ldquo;Services&rdquo;)
                        we provide, as defined below, so that you are aware of your legal rights and obligations with
                        respect to the directory or AS.&nbsp;</p>
                    <ul style="list-style-type: undefined;margin-left:-2.5px;">
                        <li>Attorneys are subject to ethical and professional rules and regulations as set by your state
                            of licensure. Please verify all applicable advertising rules before signing up for an
                            account or purchasing any service, as defined below.</li>
                        <li>Except as you may specifically advise any client, no attorney-client privilege shall exist
                            with respect to any communication with or through the directory or the provision of its
                            services.</li>
                        <li>All fees, including any advertising, promotion or placement fees are explained during the
                            registration or order process. By entering into this agreement, you acknowledge that fees
                            may have an initial and recurring payment feature and you accept responsibility for all
                            recurring charges prior to cancellation.</li>
                        <li>Except as otherwise provided in this agreement with respect to any termination, our premium
                            (paid) services are subject to a minimum term of one year. Please be aware that whether paid
                            in full or in recurring periodic payments, by signing up for our services your payment
                            obligations shall be subject to the minimum one-year term.</li>
                        <li>The directory is an advertising platform dependent on user adoption and deployment. AS does
                            not guarantee the number of users of the directory that he/she will be exposed to any area.
                            You understand that this is a directory listing and will not be promoted to advertise your
                            specific business.</li>
                        <li>Except as specifically provided below, all sales or subscriptions to any of our services are
                            final. No refunds or credits shall be issued by AS for any reason.</li>
                        <li>By registering or subscribing to our services, you agree to be listed in our directory under
                            your specific heading and receive free content and/or promotional offers from us.</li>
                        <li>Our business changes constantly, as do our policies, rules and regulations posted on the
                            directory or any of its associated services, including this agreement. &nbsp;It is your
                            expressed obligation to check the directory frequently to see if there are any recent
                            changes to this agreement. We reserve the right to revise this agreement at any time without
                            providing notice. Your listing and continued use of the services or your account shall be
                            deemed an irrevocable acceptance of any such revisions.</li>
                        <li>Your access to the directory and the usage of any service is void and unauthorized where
                            prohibited by applicable law or regulation.</li>
                    </ul>
                    <p>1) Description and Advertising Platform: The directory provides licensed attorneys, &nbsp;and
                        other specified categories of professionals with a directory listing designed to enhance client
                        (&ldquo;Client&rdquo;) access through on line &nbsp;technology. All activities and capabilities
                        offered by or through the directory, including all advertisings, promotions, placements and
                        communications shall individually and collectively be referred to as &ldquo;Services&rdquo;. AS
                        reserves the right to add, change, modify, suspend or discontinue any portion of the
                        &nbsp;Service(s) offered at any time. AS may also impose limits on certain Services or features
                        and/or restrict access to the directory or any Services in our sole and absolute discretion and
                        without notice or liability to anyone.</p>
                    <p>2) Membership Categories:&nbsp;All professionals participating in this program must be currently
                        licensed to practice in their U.S. State of licensure. Other categories of professionals must be
                        currently licensed to conduct business in their respective professions at the time of
                        registration.</p>
                    <ol start="1" style="margin-bottom: 0in;color: rgb(0, 0, 0);" type="1">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Eligibility :&nbsp;All registrants must be eighteen (18) years of age or older to enter into
                            this Agreement.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            This directory and its Services were designed for professionals who are licensed to conduct
                            business within their registered professions and are legal residents of the United States
                            and its territories. Usage of the directory and Services is void where prohibited.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Professional Responsibility:&nbsp;Registered professionals are subject to ethical and
                            professional standards, laws, rules and regulations of your profession as set by your state
                            of licensure and other regulating bodies. It is your responsibility to verify that any and
                            all Services you subscribe to or actions you engage in or through the directory and its
                            Services are in full compliance with applicable standards, laws, rules and regulations. AS
                            assumes no responsibility and shall have no liability whatsoever for your use of, or
                            inability to use, the directory or Services.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Advertising :&nbsp;A directory listing in our directory is considered an advertising.
                            Registered members are subject to legal advertising standards, laws, rules and regulations
                            as set by your state of licensure and other regulating bodies. Please verify all applicable
                            advertising rules before signing up for an Account. AS assumes no responsibility and shall
                            have no liability whatsoever for your use of the directory or Services in any manner not in
                            compliance with applicable standards, laws, rules and regulations.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Attorney-Client Privilege:&nbsp;Except as you may specifically advise any Client, no
                            attorney-client privilege shall exist with respect to any communication with or through the
                            directory or the provision of its Services. The directory provides various Services that
                            enable direct communications, whether private or public, between Attorneys and Clients.
                            Please make sure to assess each Service&rsquo;s compliance with applicable state&rsquo;s
                            laws and regulations. It is your responsibility to properly advise any Client, both
                            prospective and existing, of the status of any attorney-client privilege with respect to
                            communication using the Services. If you have any questions with respect to the technical
                            aspects of any form of communication provided through our Services, please contact us
                            at&nbsp;support@accidnetsolutionllc.com. AS assumes no responsibility and shall have no
                            liability whatsoever for your use of the directory or Services in any manner not in
                            compliance with applicable Attorney-Client standards, laws, rules and regulations.</li>
                    </ol>
                    <p>3) Licensing Services: &nbsp;Services offered to registered members includes a directory listing
                        under their respective professional category in the directory. Except as otherwise provided,
                        these are premium Services (&ldquo;Premium&rdquo;) and require the payment of fees
                        (&ldquo;Fees&rdquo;). Any and all Premium Services shall require the registration of an Account
                        through which members may update their listing and promote their services. Licensing is offered
                        across diverse regions divided across geographical concentrations and average accident rates.
                        These diverse advertising regions are offered to members for subscription based on listing.
                        &nbsp;A listing represents an advertising unit within a geographical boundary or state.&nbsp;
                    </p>
                    <ol start="1" style="margin-bottom: 0in;color: rgb(0, 0, 0);" type="1">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Members may subscribe to one of more listings in any geographical location.<ol
                                start="1" style="margin-bottom: 0in;" type="i">
                                <li
                                    style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                    In the event that a member subscribes either to the sole existing listing
                                    requirements within a geographical region or to all areas within a geographical
                                    region, the member may have the option limit their advertising to geographical
                                    region within their professional category, outside of the personal injury
                                    category.&nbsp;</li>
                                <li
                                    style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                    In the event a member subscribes either to a single listing within a geographical
                                    region or state that includes multiple areas or category, the member shall share
                                    listing rights with other members for that geographical region within their
                                    professional category.&nbsp;</li>
                            </ol>
                        </li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            The directory is an advertising platform dependent on Client adoption and deployment. AS is
                            granting you the right to use this platform to market and advertise your business. AS does
                            not guarantee the number of &nbsp;Clients that would be generated from any advertisement or
                            promotion.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Fees : Our directory listing and Premium Services are available via periodic (e.g. annual,
                            semiannual &nbsp;or quarterly) subscriptions. The Fees and any terms for Premium Services,
                            including any available discounts, are explained to prospective members during either the
                            registration or Service order process and are subject to change from time to time at
                            AS&rsquo;s absolute and sole discretion. Please note that any Fees that are disclosed to you
                            in the registration or Service order process are deemed part of this Agreement. You agree to
                            pay AS for all usage and/or subscription Fees charged to your Account, as per this
                            Agreement. All charges will appear on your credit card bill, check or any form of payment
                            used during your registration.&nbsp;</li>
                    </ol>
                    <p>4) Term and Termination of Services:</p>
                    <ol start="1" style="margin-bottom: 0in;color: rgb(0, 0, 0);" type="1">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Service Term: Please be advised that our Silver, Gold or Platinum plan Services are made
                            available subject to a minimum subscription term of one year. When purchasing or subscribing
                            to a Premium Service that is subject to a minimum term, you are agreeing to pay the total
                            cumulative Fees regardless of the periodic payment plan you choose. For example, a Premium
                            Service with minimum terms of one year may provide the option of paying Fees on a quarterly
                            or semi-annually basis. In the event you terminate the foregoing Service prior to the end of
                            the minimum term, you must provide a thirty day notice prior to termination otherwise your
                            credit card or other form of payment used when registering shall be charged the full
                            remaining balance of the Fees, prorated over one year. Please review any terms or rules
                            provided to you during registration or Service purchase process for additional details.</li>
                    </ol>
                    <p>5) Failure to Pay : If for any reason AS is unable to charge your credit card for the amount owed
                        for the Premium Services provided, or if AS receives notification of a chargeback, reversal,
                        payment dispute, or is charged a penalty (together &ldquo;Penalty&rdquo;) for any fee it
                        previously charged to your credit card, you agree that AS may pursue all available lawful
                        remedies in order to obtain payment, including but not limited to, immediate cancellation,
                        without notice to you, of any Premium Services provided. &nbsp;AS also reserves the right to
                        charge you reasonable &quot;processing fees&quot; for any Penalty incurred by AS directory, as a
                        result of your noncompliance with this Agreement (as determined by AS in its sole and absolute
                        discretion). &nbsp; These processing fees will be billed to the credit card you have on file
                        with AS.</p>
                    <ol start="1" style="margin-bottom: 0in;color: rgb(0, 0, 0);" type="1">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Termination and Credit Policy: EXCEPT AS SPECIFICALLY PROVIDED HEREIN BELOW, AS WILL NOT
                            REFUND OR CREDIT ANY PREMIUM SERVICE FEES PAID OR OWED BY YOU FOR ANY REASON WHATSOEVER, IN
                            WHOLE OR IN PART.<ol start="1" style="margin-bottom: 0in;" type="i">
                                <li
                                    style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                    Premium Services subject to a minimum one-year term may be terminated with a 30-day
                                    notice, during the initial 90-days. In other words, a notice of termination, as
                                    provided below, must be received by AS within 60 days of the initial date of
                                    registration and subscription to the Premium Service.<ol start="1"
                                        style="margin-bottom: 0in;" type="1">
                                        <li
                                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                            To be effective, notice of cancellation must be in writing and sent to the
                                            contact information below via US mail, email or as otherwise specifically
                                            provided on the Site.</li>
                                        <li
                                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                            Such notice will not affect charges submitted before AS could reasonably
                                            take action in response to your notice.</li>
                                        <li
                                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                            Such notice shall also not be effective if any Fees are due and unpaid by
                                            you prior to receipt of such notice by AS.</li>
                                        <li
                                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                            The notice of termination shall become effective at the end of the initial
                                            90-day period and no refund or chargeback shall be permitted for that
                                            initial 90-day paid subscription. In the event you first subscribed using an
                                            annual or periodic subscription longer than the initial 90 days, upon
                                            termination your account will be credited the pro-rated balance of your
                                            Account net of the initial 90-day period as described above. In this case
                                            the annual pre pay discount shall not apply and net refund shall be based on
                                            regular monthly rate.</li>
                                    </ol>
                                </li>
                                <li
                                    style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                    During the initial twelve months of your subscription to our services, except as
                                    specifically provided above, AS will not refund any premium service fees paid or
                                    owed by you for any reason whatsoever, in whole or in part.</li>
                                <li
                                    style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                    After the initial twelve months of your paid subscription to our Services, you may
                                    terminate your Account and Services at any time by giving us a 30-day notice.
                                    Termination shall become effective after the 30-day notice period and no refund or
                                    chargeback shall be permitted for any such 30-day notice period. To be effective,
                                    notice of cancellation must be in writing and sent to the contact information below
                                    via US mail, email or as otherwise specifically provided on the Site.</li>
                                <li
                                    style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                                    Your non-termination or continued use of the Premium Services reaffirms that AS is
                                    authorized to charge your account. AS may submit those charges for payment and you
                                    will be responsible for such charges. Your charges may be payable in advance, in
                                    arrears, per usage, or as otherwise described when you initially registered your
                                    Account or subscribed to the Premium Services.</li>
                            </ol>
                        </li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Any changes are effective upon Notice to You. Notice may be provided to you by delivering
                            such changes via electronic mail, TXT/SMS messages or any other means that we deem
                            reasonable, in our sole and absolute discretion (&ldquo;Notice&rdquo;).</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            We may decide at any time in our sole and absolute discretion whether to remove and/or
                            terminate your access to the Services, for any reason, including but not limited to
                            violations of this Agreement. We may or may not provide notice to you of such termination
                            through any reasonable means including, but not limited to, sending notice to you at the
                            e-mail address that you provided during or subsequent to registration or purchase. Such
                            termination is effective when executed by us or upon transmittal by us. However, your
                            obligations of indemnification pursuant to this Agreement shall survive the termination of
                            your Account or this Agreement.</li>
                    </ol>
                    <p>Withdrawal of consent or request to have your Account terminated will have no effect on the legal
                        validity and/or enforceability of this Agreement for the time period prior to your request and
                        during the time period needed for us to reasonably act to comply with your request.</p>
                    <p>6) Registration :&nbsp;In order to subscribe to our Premium Services, you will be required to
                        create an Account. You may never use someone else&rsquo;s Account. You may also never grant
                        anyone else access to your Account. When creating an Account on the directory, you agree to
                        provide accurate, current and complete information about yourself (&quot;Registration
                        Data&quot;) as prompted by our registration form. Registration Data may include your personal
                        name, company name, e-mail address, password, billing address and credit card information.
                        Registration Data may also include voluntary relevant information such as areas of practice, and
                        license information. You also represent that we may rely on your Registration Data as accurate,
                        current and complete. You agree to maintain and update your Registration Data to keep it
                        accurate, current and complete. We reserve the right, in our sole and absolute discretion, to
                        terminate your Account for inaccurate, untrue, deceptive and/or incomplete Registration Data. AS
                        will not be responsible for any content or listing information provided on the account.</p>
                    <p>7) Username and Password: As part of the registration process, you will be asked to select a
                        username (or use your email address) and password. We may refuse to grant to you any username,
                        which in our sole and absolute discretion is deemed to be invalid. Invalid usernames include,
                        but are not limited to, usernames that are fashioned to impersonate another person, are
                        protected by trademark law or other proprietary rights, and vulgar or otherwise offensive or
                        those that may cause confusion. These are only some examples of invalid usernames and we reserve
                        the sole right, at our own discretion, to deem any username invalid at any time both during and
                        after registration. You are solely responsible for maintaining the confidentiality of your
                        username, password and any and all subscriptions, communications and other activities that are
                        conducted through your account. You agree not to transfer, sell or resell your username or
                        password, or otherwise provide access to the services, through the use of your username and
                        password, to any third party. If you have reason to believe that your Account is no longer
                        secure, you must promptly change your password by updating your Account information and
                        immediately notify us by e-mailing us at support@accidentsolutionllc.com</p>
                    <p>8) Indemnification :&nbsp;You agree to indemnify, defend and hold us, and our subsidiaries,
                        affiliates, officers, parent companies, agents, co-branders or other partners, and employees
                        (each a &quot;Covered Party&quot;), harmless, at your expense, against any and all claims,
                        actions, proceedings, and suits and all related liabilities, damages, settlements, penalties,
                        fines, costs and expenses (including, without limitation, reasonable attorneys&#39; fees and
                        other dispute resolution expenses) incurred by any Covered Party or other third party and
                        arising out of, (i) your use or misuse of the Services, (ii) arising from your breach of this
                        Agreement, or (iii) arising from your violation or breach of any term of this Agreement or other
                        policies, rules or guidelines referenced herein.</p>
                    <p>9) Warranties :&nbsp;You expressly agree that access and/or use of the Services is at your sole
                        risk. The Services are provided on an &quot;AS IS&quot; and &quot;AS AVAILABLE&quot; basis,
                        without any express or implied warranty of any kind, including, but not limited,
                        non-infringement of intellectual property. The directory Services may contain bugs, errors,
                        problems or other limitations.</p>
                    <ol start="1" style="margin-bottom: 0in;color: rgb(0, 0, 0);" type="1">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            We and the Covered Parties have no liability whatsoever for your use of, or inability to
                            use, the directory or Services to the fullest extent permitted by applicable law.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            We and the Covered Parties are not liable to you or to any third party for any indirect,
                            special, incidental or consequential damages, whether based on breach of contract, breach of
                            warranty, tort (including negligence), product liability or otherwise, even if advised of
                            the possibility of such damages.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            The negation of damages set forth above is a fundamental element of the basis of the bargain
                            between us and you. The Services would not be provided to you without such limitations. No
                            advice or information, whether oral or written, obtained by you from us through the
                            directory or Services shall create any warranty, representation or guarantee not expressly
                            stated in this Agreement. We are not responsible to you and/or any third party, without
                            limitation, for: 1) any error, omission, interruption, deletion, defect, delay in operation
                            or transmission, communications line failure, theft or destruction or unauthorized access to
                            or alteration of, communications; 2) the conduct of any person, whether online or offline;
                            3) any computer virus or other malicious, destructive or corrupting code, agent, program or
                            macros; 4) any infringement of another&#39;s rights, including intellectual property rights;
                            or 5) any violation, intended or otherwise, of applicable state or legal bar&rsquo;s ethics
                            or professional laws, rules or regulations.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            You agree that AS is not the publisher of any Submissions, as define above, found on the
                            directory and, as such, shall not be liable for damages arising there from including,
                            without limitation, any and all criminal and/or civil liability.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            AS shall not be liable to you for any Services, goods and/or information available from
                            third parties, even if obtained at or through the directory or Services. If you are
                            dissatisfied with the Services or with this Agreement, your sole and exclusive remedy is the
                            cancellation of your Account and to discontinue use of the Services (subject to any
                            termination restrictions).</li>
                    </ol>
                    <p>10) Miscellaneous :&nbsp;Should any part of this Agreement be held invalid or unenforceable, that
                        portion shall be construed consistent with applicable law and the remaining portions shall
                        remain in full force and effect. To the extent that anything in or associated with, the
                        directory or Services is in conflict or inconsistent with this Agreement, this Agreement shall
                        take precedence. Our failure to enforce any provision of this Agreement shall not be deemed a
                        waiver of such provision nor of the right to enforce such provision, or any other provisions in
                        this Agreement.</p>
                    <ol start="1" style="margin-bottom: 0in;color: rgb(0, 0, 0);" type="1">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            You expressly authorize us to comply with any and all lawful notices, subpoenas, court
                            orders and/or warrants without prior notice to you.</li>
                    </ol>
                    <p>11) Dispute Resolution:&nbsp;If a dispute arises between you and us, our goal is to provide you
                        with a neutral and cost effective means of resolving the dispute quickly. Accordingly, you agree
                        that we will resolve any claim or controversy at law or equity that arises out of this
                        Agreement, the directory or our Services (a &quot;Claim&quot;) in accordance with one of the
                        subsections below or as we and you otherwise agree in writing. Before resorting to these
                        alternatives, we strongly encourage you to first contact us directly to seek a resolution by
                        sending an email to&nbsp;support@accidentsolutionllc.com. We will consider reasonable requests
                        to resolve the dispute through alternative dispute resolution procedures, such as mediation or
                        arbitration, as alternatives to litigation.</p>
                    <ol start="1" style="margin-bottom: 0in;color: rgb(0, 0, 0);" type="1">
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Choice of Law and Forum - This Agreement shall be treated as though it were executed and
                            performed in Los Angeles County, CA and shall be governed in all respects by the laws of the
                            State of California without regard to conflict of law provisions. You agree that any Claim
                            or dispute you may have against us must be resolved by a court located in Los Angeles
                            County, California, except as otherwise agreed by the parties or as described in the
                            Arbitration Option section below. You agree to submit to the personal jurisdiction of the
                            courts located within Los Angeles County, California for the purpose of litigating all such
                            Claims or disputes.</li>
                        <li
                            style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;color:#777777;'>
                            Legal Warning: Any attempt by any individual, whether an Attorney, Client or otherwise to
                            damage, destroy, tamper with, vandalize and/or otherwise interfere with the operation of the
                            directory and/or Services, is a violation of criminal and civil law and we will diligently
                            pursue all remedies in this regard against any offending individual or entity to the fullest
                            extent permissible by law and in equity.</li>
                    </ol>
                    <p>13) This document constitutes a binding agreement:&nbsp;By checking &ldquo;I accept these Terms
                        and Conditions,&rdquo; on the Member Registration Page, you agree that you have had the
                        opportunity to read this Agreement and agree to each and all of the provisions and conditions
                        therein. Further, you understand that you are signing a non-refundable binding agreement.</p>
                    <p>14) Contact Us :Accident Solution LLC.</p>
                    <p>425 E Arrow Hwy #301,</p>
                    <p>Glendora, CA 91740</p>
                    <p>support@accidentsolutionllc.com</p>
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


@endsection
