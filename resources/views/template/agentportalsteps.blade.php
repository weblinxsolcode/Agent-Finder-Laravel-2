@extends('template.layout.main')

@section('section')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--agentportalsteps -->
    <div class="agentportalstepsbg">
        <form action="javascript:void(0)" method="post">
            @csrf
            <div class="container comparestepsbox">
                <div class="d-flex mb-4 w-100 flex-column align-items-start justify-content-start col-12 col-sm-2 progressdiv visible">
                    <div class="d-flex align-items-center">
                        <p class=" steptext">Step <span class="pageactive"></span> <span class="pagenoactive"></span>
                            </h1>
                    </div>
                    <progress id="file" value="0" max="100"></progress>
                </div>
                <!-- Step 1 -->
                <div class="step activebox" id="step-1">
                    <div class="stepsbox">
                        <h1 class=" fw-bold stepboxheading01">Tell us about yourself? I am a...</h1>
                        <div class="d-flex  sellbox  align-items-center justify-content-center  my-md-5 my-4 pe-lg-5">
                            <div class="agentportalstep1box-1 justify-content-center d-flex flex-column align-items-center"
                                onclick="selectAgentType('principal_director'); nextStep('step-2');">
                                <input type="radio" class="agencyType" name="agent_type" id="principal_director"
                                    value="Principal/Director" hidden>
                                <div class="">
                                    <img src="{{ asset('template/assets/img/agentportalsteps1.png') }}" alt=""
                                        class="">
                                </div>
                                <div>
                                    <p class="fw-bold">Principal/Director</p>
                                </div>
                            </div>
                            <div class="agentportalstep1box-2 justify-content-center d-flex flex-column align-items-center"
                                onclick="selectAgentType('contractor'); nextStep('step-2');">
                                <input type="radio" class="agencyType" name="agent_type" id="contractor"
                                    value="Contractor" hidden>
                                <div>
                                    <img src="{{ asset('template/assets/img/agentportalsteps2.png') }}" alt=""
                                        class="">
                                </div>
                                <div>
                                    <p class="fw-bold">Contractor</p>
                                </div>
                            </div>
                            <div class="agentportalstep1box-3 justify-content-center d-flex flex-column align-items-center"
                                onclick="selectAgentType('sales_agent'); nextStep('step-2');">
                                <input type="radio" class="agencyType" name="agent_type" id="sales_agent"
                                    value="Sales Agent" hidden>
                                <div>
                                    <img src="{{ asset('template/assets/img/agentportalsteps3.png') }}" alt=""
                                        class="">
                                </div>
                                <div>
                                    <p class="fw-bold">Sales Agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- This script is working for form submission --}}
                <script>
                    function selectAgentType(agentId) {
                        // Check the radio button programmatically
                        document.getElementById(agentId).checked = true;
                    }
                </script>
                {{-- End Script --}}

                <!-- Step 2 -->
                <div class="step" id="step-2">
                    <div class="stepsbox ">
                        <h1 class=" fw-bold stepboxheading01">Which agency are you associated with?</h1>
                        <div class="sellbox my-md-5 my-4">
                            <input type="text" class="step5input" placeholder="Agency Name" id="agencyName"
                                name="agency_name" required />
                            <input type="text" class="step5input mt-2" placeholder="Agency Address"
                                id="agencyOfficeAddress" name="agency_address" required />
                            <div class="step4sellbox1  d-flex w-100 mt-2">
                                <input type="text" class="step4input" placeholder="ABN/ACN" name="agency_code"
                                    id="agencyCode" required />
                                <button type="button" class="step4btn">Continue</button>
                            </div>
                            <input type="hidden" id="latitude" name="latitude">
                            <input type="hidden" id="longitude" name="longitude">
                        </div>
                    </div>
                </div>

                <!-- Add the this google map apis to webpage -->
                <script
                    src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyAp0oOTg0H4Zn6WPfkXiXXnhYz3h5nIf80&libraries=places">
                </script>
                <script>
                    $("#agencyOfficeAddress").keyup(function() {
                        var input = document.getElementById('agencyOfficeAddress');

                        // Ensure the Google Maps Places library is initialized
                        if (!window.google || !google.maps || !google.maps.places) {
                            console.error('Google Maps Places library is not loaded.');
                            return;
                        }

                        var autocomplete = new google.maps.places.Autocomplete(input);
                        autocomplete.addListener('place_changed', function() {
                            var place = autocomplete.getPlace();

                            // Ensure that the place has geometry information
                            if (!place.geometry) {
                                console.error('No geometry information found for the selected place.');
                                return;
                            }

                            // Update the latitude and longitude fields
                            document.getElementById("latitude").value = place.geometry.location.lat();
                            document.getElementById("longitude").value = place.geometry.location.lng();
                        });
                    });
                </script>
                {{-- This script is working for next button working --}}
                <script>
                    $(".step4btn").click(function() {
                        // Get values from input fields
                        var agencyName = $("#agencyName").val().trim();
                        var agencyAddress = $("#agencyOfficeAddress").val().trim();
                        var agencyCode = $("#agencyCode").val().trim();

                        // Check if all fields are filled
                        if (!agencyName || !agencyAddress || !agencyCode) {
                            alert('Please fill in all fields.');
                            return; // Stop further execution if validation fails
                        }

                        // Call the nextStep function if validation passes
                        nextStep('step-3');
                    });
                </script>
                {{-- End Script --}}

                <!-- Step 3 -->
                <div class="step" id="step-3">
                    <div class="stepsbox">
                        <h1 class=" fw-bold stepboxheading01">Please fill in your details below</h1>
                        <div class="sellbox">
                            <input type="text" class="step5input mt-1" id="firstName" placeholder="First Name"
                                name="first_name" required />
                            <input type="text" class="step5input mt-2" id="lastName" placeholder="Last Name"
                                name="last_name" required />
                            <input type="email" class="step5input mt-2" id="agencyAddress" placeholder="Email Address"
                                name="email" required />
                            <div class="step4sellbox1  d-flex w-100 mt-2">
                                <input type="number" class="step4input" id="agnecyPhone" placeholder="Phone Number"
                                    name="phone_number" required />
                                <button class="step4btn step5Button" type="button">Continue</button>
                            </div>
                        </div>
                        <div class=" disclaimer">
                            <h2 class="stepboxheading02 fw-normal">By continuing, I confirm that I understand and accept
                                the
                                <a class="text-decoration-none" href="{{ route('privacy.policy') }}"
                                    style="color : #84C5BD;">Website Privacy
                                    Policy</a> and <a class="text-decoration-none" href="{{ route('terms') }}"
                                    style="color : #84C5BD;">Terms and Conditions</a>
                            </h2>
                        </div>
                    </div>
                </div>
                {{-- This script is working for next button working --}}
                <script>
                    $(".step5Button").click(function() {
                        // Get values from input fields
                        var firstName = $("#firstName").val();
                        var lastName = $("#lastName").val();
                        var email = $("#agencyAddress").val();
                        var phoneNumber = $("#agnecyPhone").val();

                        // Check if all fields are filled
                        if (!firstName || !lastName || !email || !phoneNumber) {
                            alert('Please fill in all fields.');
                            return; // Stop further execution if validation fails
                        }

                        // Call the nextStep function if validation passes
                        nextStep('step-4');
                    });
                </script>
                {{-- End Script --}}

                {{-- This script is working for appending data to form --}}
                <script>
                    $(document).ready(function() {
                        $(".appendDetails").click(function() {

                            var first_name = $("#firstName").val();
                            var last_name = $("#lastName").val();

                            var full_name = first_name + last_name;
                            var address = $("#agencyAddress").val();
                            var agencyName = $("#agencyName").val();
                            var agencyCode = $("#agencyCode").val();
                            var agencyOffice = $("#agencyOfficeAddress").val();

                            $(".formFullName").text(full_name);
                            $(".agencyNameForm").text(agencyName);
                            $(".agencyCodeForm").text(agencyCode);
                            $(".agencyAddressForm").text(agencyOffice);
                            $(".agencyEmailForm").text(address)

                        });
                    });
                </script>
                {{-- End Script --}}

                <!-- Step 4 -->
                <div class="step" id="step-4">
                    <div class="stepsbox ">
                        <h1 class=" fw-bold stepboxheading01">Are you focused on sales, rentals or both?</h1>
                        <div class="d-flex sellbox align-items-center justify-content-center mx-auto my-md-5 my-4 pe-lg-5">
                            <div class="agentportalstep1box-1 justify-content-center pe-md-4 py-4 px-md-4 d-flex align-items-center gap-2"
                                onclick="selectPropertyType('sell'); nextStep('step-5')">
                                <input type="radio" class="focusedOn" name="property_type" id="sell"
                                    value="Sell" hidden>
                                <div class="">
                                    <img src="{{ asset('template/assets/img/salewhiteimg.png') }}" alt=""
                                        class="white-img">
                                </div>
                                <div>
                                    <p class="fw-bolder m-0">Sell</p>
                                </div>
                            </div>

                            <div class="agentportalstep1box-2 justify-content-center pe-md-4 py-4 px-md-4 d-flex align-items-center gap-3"
                                onclick="selectPropertyType('rent'); nextStep('step-5')">
                                <input type="radio" class="focusedOn" name="property_type" id="rent"
                                    value="Rent" hidden>
                                <div>
                                    <img src="{{ asset('template/assets/img/rentlightimg.png') }}" alt=""
                                        class="green-img">
                                </div>
                                <div>
                                    <p class="fw-bolder m-0">Rent</p>
                                </div>
                            </div>

                            <div class="agentportalstep1box-3 justify-content-center py-4 px-md-4 d-flex align-items-center gap-3"
                                onclick="selectPropertyType('both'); nextStep('step-5')">
                                <input type="radio" class="focusedOn" name="property_type" id="both"
                                    value="Both" hidden>
                                <div class="d-flex">
                                    <img src="{{ asset('template/assets/img/salesblackimg.png') }}" alt=""
                                        class="white-img">
                                    <img src="{{ asset('template/assets/img/rentgreenimg.png') }}" alt=""
                                        class="green-img">
                                </div>
                                <div>
                                    <p class="fw-bolder m-0">Both</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function selectPropertyType(typeId) {
                        // Check the radio button programmatically
                        document.getElementById(typeId).checked = true;
                    }
                </script>

                <!-- Step 5 -->
                <div class="step" id="step-5">
                    <div class="stepsbox">
                        <h1 class=" fw-bold stepboxheading01">Fess & Terms</h1>
                        <div class="sellbox ">
                            <div class="step5sellbox1 d-flex flex-wrap ">
                                <div class="d-flex gap-3 gap-lg-3 gap-xl-5 flex-wrap">
                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div>
                                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                                    class="me-3">
                                            </div>
                                            <div>
                                                <h2>Referral Fee Payment</h2>
                                                <p>The referral fee is payable only upon <br> settlement or within three
                                                    business days <br> following settlement.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div>
                                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                                    class="me-3">
                                            </div>
                                            <div>
                                                <h2>Vendor Policy</h2>
                                                <p>Referral fee cannot be passed on to <br> vendors.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 flex-wrap mt-3">
                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div>
                                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                                    class="me-3">
                                            </div>
                                            <div>
                                                <h2>Referral Fee Rate</h2>
                                                <p>The referral fee of 20% plus GST is applicable <br> per referral.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start px-1">
                                            <div>
                                                <img src="{{ asset('template/assets/img/footerarrow.png') }}"
                                                    class="me-3">
                                            </div>
                                            <div>
                                                <h2>Referral Valid Period</h2>
                                                <p>Referral leads remain valid for a period of 12 <br> months from the date
                                                    of
                                                    recipt.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step5sellbox2 d-flex flex-wrap mt-3">
                                <div class="d-flex gap-5 flex-wrap">
                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div>
                                                <img src="{{ asset('template/assets/img/cashbackarrow.png') }}"
                                                    class="me-3">
                                            </div>
                                            <div>
                                                <h2 style="color: #8EC2BA;">Applicability of Fees for Existing Clients</h2>
                                                <h3>The referral fee will apply to existing clients under the following
                                                    conditions:</h3>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div class="d-flex align-items-start">
                                                <h4>1.</h4>
                                                <h3 class="mx-2">The agent has not had any <br> written communication
                                                    with
                                                    <br> the vendor within 90 days <br> prior to receiving the lead.
                                                </h3>
                                            </div>
                                            <div class="d-flex align-items-start">
                                                <h4>2.</h4>
                                                <h3 class="mx-2">There is no signed agency <br> agreement or tenancy <br>
                                                    agreement in effect at the <br> time the referral lead is <br> provided.
                                                </h3>
                                            </div>
                                            <div class="d-flex align-items-start">
                                                <h4>3.</h4>
                                                <h3 class="mx-2">No in-house appraisal has <br> been conducted within the
                                                    <br> past 90 days of receiving the <br> lead.
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="step5sellbox2 d-flex flex-wrap my-3 " style="background : #fff;">
                                <div class="d-flex gap-5 flex-wrap">
                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div>
                                                <img src="{{ asset('template/assets/img/cashbackarrow.png') }}"
                                                    class="me-3">
                                            </div>
                                            <div>
                                                <h2 style="color: #8EC2BA;">Exemptions from Fees</h2>
                                                <h3 class="fw-normal" style="color: #2e353c;">The referral fee will not
                                                    apply
                                                    if the agent can provide written evidence of any of the following:</h3>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div class="d-flex align-items-start">
                                                <h4>1.</h4>
                                                <h3 class="fw-normal mx-2" style="color: #2e353c;">A signed agency
                                                    agreement
                                                    <br> or tenancy agreement in <br> place at the time the referral <br>
                                                    lead
                                                    is provided.
                                                </h3>
                                            </div>
                                            <div class="d-flex align-items-start">
                                                <h4>2.</h4>
                                                <h3 class="fw-normal mx-2" style="color: #2e353c;">Written communication
                                                    <br>
                                                    with the vendor within the <br> past 90 days.
                                                </h3>
                                            </div>
                                            <div class="d-flex align-items-start">
                                                <h4>3.</h4>
                                                <h3 class="fw-normal mx-2" style="color: #2e353c;">A home appraisal
                                                    conducted
                                                    <br> within the past 90 days of <br> receiving the lead.
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-center mb-md-5 mb-4">
                                <div class="d-flex flex-column flex-sm-row align-items-start gap-3">
                                    <input type="checkbox" id="acceptTerms" class="step5checkbox" required />
                                    <h2 class="stepboxheading02">By continuing, I agree and confirm that I have read and
                                        accept
                                        the <br> <span style="color : #84C5BD;">Fees and terms</span> outlined above.</h2>
                                </div>
                                <div>
                                    <button class="step6btn appendDetails px-5" type="button">Accept</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- This script is working for next button working --}}
                <script>
                    $(".step6btn").click(function() {
                        // Check if the terms checkbox is checked
                        if (!$("#acceptTerms").is(":checked")) {
                            alert('Please accept the fees and terms to continue.');
                            return; // Stop further execution if validation fails
                        }

                        // Call the nextStep function if the checkbox is checked
                        nextStep('step-6');
                    });
                </script>
                {{-- End Script --}}

                <!-- Step 6 -->
                <div class="step" id="step-6">
                    <div class="stepsbox">
                        <h1 class=" fw-bold stepboxheading01">Agent Referral Agreement</h1>
                        <div class="sellbox ">
                            <div class="step6sellbox1 mb-4">
                                <div for="acceptTerms" class="forscroll">
                                    <h2>Agent Choice Agreement Basis of Agreement</h2>
                                    <div class="mt-3">
                                        <h2 class="fw-bold" style="color : #2E353C;">Basic of Agreement</h2>
                                        <p class="mb-0">Agent Choice is dedicated to offering a comprehensive website
                                            platform and facilitating referrals to real estate agents.</p>
                                        <p class="mb-0">The Agent has agreed to pay Agent Choice for Completed Referrals
                                            in
                                            accordance with the Key Details and the terms and conditions on the following
                                            pages
                                            (which together form this “agreement”).</p>
                                        <p class="mb-0">By clicking “Accept”, you acknowledge and agree to the Fees and
                                            Terms
                                            and the Agent Referral Agreement in this website.</p>
                                        <p class="mb-0">Should you have any concerns or questions on this regard please
                                            contact us on <a href="tel:1300 344 148">1300 344 148</a> or email us on <a
                                                href="mailto:support@agentchoice.com.au">support@agentchoice.com.au</a></p>
                                        <p class="mb-0">The Website offers a feature that allows you to print or email a
                                            copy
                                            of the Agent Referral Agreement. We recommend that you retain a copy for your
                                            records.</p>

                                        <div class="my-3">
                                            <h2 class="fw-bold" style="color : #2E353C;">Key details</h2>
                                            <div class="d-flex align-items-center gap-3 ">
                                                <h2 class="mb-0" style="color : #2E353C;">Start Date:</h2>
                                                <input type="date" name=""
                                                    value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="">
                                            </div>
                                            <h2 class="my-3 fw-bold" style="color : #2E353C;">The Parties</h2>
                                            <table>
                                                <tr>
                                                    <th>What each party will be called in this agreement</th>
                                                    <th class="formFullName">Full Name</th>

                                                </tr>
                                                <tr>
                                                    <td>Agent</td>
                                                    <td>
                                                        <span class="agencyNameForm"></span> (ABN/ACN: <span
                                                            class="agencyCodeForm"></span>) of <span
                                                            class="agencyAddressForm"></span>
                                                        <span class="agencyEmailForm"></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Agent Choice</td>
                                                    <td>Agent Choice The Trustee for the Agent Choice Unit Trust ABN 68 271
                                                        308
                                                        458 of Suite 312, Level 3, 478 George Street, Sydney NSW 2000.<br>
                                                        Email: support@agenthoice.com.au
                                                    </td>

                                                </tr>
                                            </table>
                                            <h2 class="my-3 fw-bold" style="color : #2E353C;">Commission</h2>
                                            <table>
                                                <tr>
                                                    <th>Commission Percentage</th>
                                                    <th>Due Date</th>
                                                    <th>Referral Validity Period</th>
                                                    <th>Payment method</th>
                                                </tr>
                                                <tr>
                                                    <td>20% (plus GST)</td>
                                                    <td>Within 3 business days of receiving the commission payable invoice.
                                                    </td>
                                                    <td>Referral leads remain valid for a period of 12 months from the date
                                                        of
                                                        receipt</td>
                                                    <td>Electronic Bank Transfer. To be Advised.</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <h3>Terms and Conditions</h3>
                                        <h4>1. HOW TO READ THIS AGREEMENT</h4>
                                        <p>1.1 MEANING OF CAPITALISED WORDS AND PHRASES</p>
                                        <p class="mb-0"> Capitalised words and phrases used in these terms and conditions
                                            have the meaning given: </p>
                                        <p class="mb-0">(a) to that word or phrase in the Key Details;</p>
                                        <p class="mb-0">(b) by the words immediately preceding any bolded and bracketed
                                            word(s) or phrase(s); or</p>
                                        <p class="mb-0">(c) in the definitions in clause 17 of this agreement.</p>

                                        <p>1.2 ORDER OF PRECEDENCE</p>
                                        <p> Unless otherwise expressly stated, in the event of any inconsistency between
                                            these
                                            terms and conditions and the Key Details, these terms and conditions will
                                            prevail to
                                            the extent of such inconsistency.</p>

                                        <h4>2. DURATION OF THIS AGREEMENT</h4>

                                        <p>(a)This agreement will commence on the Start Date and continues until it is
                                            terminated in accordance with clause 2(b) or clause 14 <span
                                                class="fw-bold">(Term)</span>.</p>
                                        <p>(b) The parties may agree to terminate this agreement by mutual agreement in
                                            writing.
                                        </p>


                                        <h4>3. INTRODUCTIONS AND REFERRALS </h4>
                                        <p>3.1 DEFINITIONS</p>
                                        <p>For the purposes of this clause 3 and the rest of this agreement, the following
                                            capitalised terms have the following meanings:</p>
                                        <p>(a) <span>“Authorised Representative”</span> has the meaning given in clause
                                            3.1(d)(i) below.</p>
                                        <p>(b) <span>“Completed Referral”</span> means an Introduction between the Agent and
                                            an
                                            End Customer, performed by Agent Choice, which leads to the End Customer
                                            entering
                                            into an agreement with the Agent, and the Agent receives payment.</p>
                                        <p>(c) <span>“End Customer”</span> means a strategic partner or a past, present or
                                            prospective customer of Agent Choice, or any other person Agent Choice may
                                            introduce
                                            to the Agent, but excluding:</p>
                                        <p>(i) any person who is an existing customer of the Agent at the time of the
                                            Introduction of that person; and</p>
                                        <p>(ii) any person that has been excluded by the Agent, by notice in writing to
                                            Agent
                                            Choice prior to the Introduction of that person.
                                        </p>
                                        <p>(d) <span>“Introduction”</span> means an introduction between an End Customer and
                                            the
                                            Agent, where the introduction:</p>
                                        <p>(i) is to a representative of the End Customer with authority to purchase
                                            services
                                            from the Agent on behalf of the End Customer <span>(Authorised
                                                Representative)</span>;</p>
                                        <p>(ii) contains the name and contact details of the Authorised Representative; and
                                        </p>
                                        <p>(iii) contains a general indication of the types of services the End Customer
                                            requires.</p>

                                        <p>3.2 INTRODUCTIONS</p>
                                        <p>(a) Agent Choice may, but is under no obligation to, Introduce its clients,
                                            strategic
                                            partners and any other persons to the Agent.</p>
                                        <p>(b) Agent Choice must provide the Agent with all information and assistance
                                            reasonably required by the Agent after an Introduction.</p>



                                        <h4>4. RELATIONSHIP </h4>
                                        <p>4.1 RELATIONSHIP </p>
                                        <p> The relationship between the Agent and Agent Choice is of a principal and an
                                            independent contractor. Nothing in this agreement constitutes or deems Agent
                                            Choice
                                            to be an employee or the Agent of the Agent. Either party must not hold itself
                                            out
                                            as being entitled to contract or accept payment in the name of or on account of
                                            the
                                            other party.</p>
                                        <p>4.2 NO EXCLUSIVITY</p>
                                        <p>(a) This agreement is not a commitment by Agent Choice or the Agent to work
                                            exclusively with each other regarding referrals of work.</p>
                                        <p>(b) Agent Choice is under no financial obligation to the Agent and is not
                                            required to
                                            refer work to the Agent.</p>
                                        <p>4.3 AGENT OBLIGATIONS</p>
                                        <p>(a) The Agent must act professionally, courteously, and with integrity in
                                            dealings
                                            with End Customers and with Agent Choice.</p>
                                        <p>(b) The Agent must respond to leads diligently and make reasonable efforts to
                                            provide
                                            high levels of service to End Customers.</p>
                                        <p>(c) The Agent must comply with all applicable laws related to the activities
                                            performed under this agreement, including maintaining a valid real estate agent
                                            licence and adhering to the Australian Privacy Principles.</p>
                                        <h4>5. PAYMENT</h4>
                                        <p>5.1 COMMISSION</p>
                                        <p> If Agent Choice provides the Agent with a Completed Referral, the Agent will pay
                                            Agent Choice the Commission Percentage of the Agent’s relevant Agent Commission
                                            during the Commission Period <span>(Commission)</span>, in the amounts and at
                                            the
                                            times set out in the Key Details, or as otherwise agreed in writing.</p>
                                        <p>5.2 WAIVER OF COMMISSION</p>
                                        <p>(a) Agent Choice may elect to Waive the Commission for a Completed Referral if,
                                            at
                                            the date the lead was sent to the Agent <span>(Referral Date)</span>, either of
                                            the
                                            following conditions is met:</p>
                                        <p>(i) Within 90 days before the Referral Date, the Agent had conducted a formal
                                            written
                                            appraisal of the End Customer's property, or has written evidence (such as CRM
                                            notes) that the Agent was already in discussions about the sale or rental of the
                                            property during this time; or</p>
                                        <p>(ii) At the Referral Date, the Agent had a current Sale Authority, Letting
                                            Authority,
                                            or Property Management Agreement with the End Customer over the property being
                                            referred or any other property owned by the End Customer.</p>
                                        <p>(b) To request a Waiver, the Agent must provide written notice to Agent Choice
                                            within
                                            10 Business Days of the Referral Date, detailing the sale for which the Agent
                                            wishes
                                            to claim a Waiver and providing supporting evidence as required under this
                                            clause.
                                        </p>
                                        <p>(c) Upon receiving a request for a Waiver, Agent Choice will review the provided
                                            evidence and may request further information if needed. Agent Choice will make a
                                            determination as promptly as reasonably possible and notify the Agent of the
                                            outcome, which will be final and binding.</p>
                                        <p>(d) The following scenarios, among others, will not justify a Waiver of the
                                            Commission:</p>
                                        <p>(i) the Agent meets the lead at an open home;</p>
                                        <p>(ii) the client states that Agent Choice had no involvement in the selection of
                                            the
                                            Agent;</p>
                                        <p>(iii) the lead is already on the Agent’s database; or</p>
                                        <p>(iv) the Agent is a friend or relative of the lead.</p>
                                        <p>5.3 REPORTING REQUIREMENTS</p>
                                        <p>(a) The Agent must promptly (within 2 Business Days) report to Agent Choice the
                                            occurrence of any of the following events:</p>
                                        <p>(i) the signing of a contract for services with an End Customer referred by Agent
                                            Choice;</p>
                                        <p>(ii) the signing of any agreement for the sale or rental of property for an End
                                            Customer provided by Agent Choice, along with the details required for
                                            processing
                                            the Commission;</p>
                                        <p>(iii) when any agreement related to an End Customer becomes unconditional; and
                                        </p>
                                        <p>(iv) any early payment of Commission to the Agent in respect of an End Customer.
                                        </p>
                                        <p>(b) If the Agent fails to notify Agent Choice in accordance with this clause, the
                                            Agent must pay to Agent Choice a penalty of $250 plus GST, representing a
                                            genuine
                                            pre-estimate of the loss or damage suffered by Agent Choice due to the failure
                                            to
                                            notify.</p>
                                        <p>5.4 NO ADDITIONAL ENTITLEMENTS</p>
                                        <p>(a) Agent Choice agrees that the Commission is the only fee or financial benefit
                                            that
                                            Agent Choice is entitled to in connection with the Completed Referral, and that
                                            no
                                            additional charges or entitlements will be made to or claimed by Agent Choice.
                                        </p>
                                        <p>(b) Agent Choice will not receive any Commission for Agent Commissions received
                                            by
                                            the Agent outside the Commission Period.</p>
                                        <p>5.5 END CUSTOMER PAYMENTS</p>
                                        <p>(a) Throughout the Commission Period, the Agent will notify Agent Choice when it
                                            receives a payment from an End Customer for which Commission is payable
                                            <span>(Commission Notice)</span>, such notice to specify the amount of
                                            Commission
                                            owed to Agent Choice by the Agent in relation to the payment from an End
                                            Customer
                                            <span>(Commission Payable)</span>.
                                        </p>
                                        <p>(b) Within 3 Business Days of receiving a Commission Notice, Agent Choice will
                                            issue
                                            a validly rendered tax invoice to the Agent in respect of the Commission
                                            Payable.
                                        </p>
                                        <p>(c) Provided that the Agent receives a valid invoice in accordance with clause
                                            5.5(b), the Agent will pay the Commission Payable to Agent Choice:</p>
                                        <p>(i) by the due date set out in the Commission Notice; or</p>
                                        <p>4.3 AGENT OBLIGATIONS</p>
                                        <p>(ii) if no due date is set out in a Commission Notice, then within 30 days of the
                                            Commission Notice’s date of issue.</p>
                                        <p>5.6 GST</p>
                                        <p>(a) Unless otherwise indicated, amounts stated in the Key Details do not include
                                            GST.
                                        </p>
                                        <p>(b) If GST is or becomes payable on a Supply made under or in connection with
                                            this
                                            agreement, an additional amount is payable by the party providing consideration
                                            for
                                            the Supply equal to the amount of GST payable on that Supply as calculated by
                                            the
                                            party making the Supply in accordance with A New Tax System (Goods and
                                            Transitional
                                            Business Continuity Services Tax) Act 1999 (Cth) <span>(GST Act)</span>.</p>
                                        <p>(c) Any capitalised term in this clause which is not defined in this clause has
                                            the
                                            meaning given to that term in the GST Act.</p>
                                        <p>5.7 PAYMENT METHOD </p>
                                        <p> The Agent will pay the Commission in accordance with the payment method set out
                                            in
                                            the Key Details.</p>
                                        <p>5.8 NON-TRANSFERABILITY OF REFERRAL FEE</p>
                                        <p>(a) The Agent agrees that under no circumstances will the referral fee paid to
                                            Agent
                                            Choice pursuant to this agreement be passed on, directly or indirectly, to any
                                            End
                                            Customer or client. the Agent acknowledges that the referral fee is an exclusive
                                            arrangement between the Agent and Agent Choice, and the End Customer or client
                                            shall
                                            not be burdened with any costs associated with this referral fee.</p>
                                        <p>(b) If the Agent is found to have passed on the referral fee to an End Customer
                                            or
                                            client, Agent Choice reserves the right to terminate this agreement immediately
                                            and
                                            seek reimbursement of the referral fee, along with any additional costs incurred
                                            due
                                            to the breach.</p>
                                        <p>6. CONFIDENTIALITY</p>
                                        <p>6.1 CONFIDENTIAL INFORMATION</p>
                                        <p> The parties will not, during, or at any time after, the Term, disclose
                                            Confidential
                                            Information directly or indirectly to any third party, except:</p>
                                        <p>(a) with the other party’s prior written consent;</p>
                                        <p>(b) as required by Law; or</p>
                                        <p>(c) to their Personnel on a need to know basis for the purposes of performing its
                                            obligations under this agreement <span>(Additional Disclosees)</span>.</p>
                                        <p>6.2 BREACH</p>
                                        <p> If either party becomes aware of a suspected or actual breach of clause 6.1 by
                                            that
                                            party or an Additional Disclosee, that party will immediately notify the other
                                            party
                                            and take reasonable steps required to prevent, stop or mitigate the suspected or
                                            actual breach. The parties agree that damages may not be a sufficient remedy for
                                            a
                                            breach of clause 6.1.</p>
                                        <p>6.3 PERMITTED USE</p>
                                        <p> A party may only use the Confidential Information of the other party for the
                                            purposes of exercising its rights or performing its obligations under this
                                            agreement.</p>
                                        <p>6.4 RETURN</p>
                                        <p>On termination or expiration of this agreement, each party must immediately
                                            return to
                                            the other party, or (if requested by the other party) destroy, any documents or
                                            other Material in its possession or control containing Confidential Information
                                            of
                                            the other party.</p>
                                        <p>6.5 ADDITIONAL DISCLOSEES</p>
                                        <p>Each party will ensure that Additional Disclosees keep the Confidential
                                            Information
                                            confidential on the terms provided in this clause 6. Each party will, when
                                            requested
                                            by the other party, arrange for an Additional Disclosee to execute a document in
                                            a
                                            form reasonably required by the other party to protect Confidential Information.
                                        </p>
                                        <h4>7. INTELLECTUAL PROPERTY</h4>
                                        <p>7.1 EXISTING MATERIAL</p>
                                        <p> Except to the extent otherwise stated in the Key Details or in this clause 7:
                                        </p>
                                        <p>(a) each party retains ownership of the Intellectual Property Rights in its
                                            Existing
                                            Material; and</p>
                                        <p>(b) nothing in this agreement transfers ownership of, or assigns any Intellectual
                                            Property Rights in, either party’s Existing Material to the other party.</p>
                                        <p>7.2 TRADE MARKS</p>
                                        <p> Each party <span>(First Party)</span> grants the other party a non-exclusive,
                                            non-transferable, royalty-free licence for the Term to use the First Party’s
                                            name
                                            and trade marks notified to the other party from time to time solely for the
                                            purposes of making general public statements about the referral relationship
                                            between
                                            the parties, including in any proposal, promotional material, and press release,
                                            provided no commercially sensitive information is used or disclosed.</p>
                                        <p>8. REPORTING REQUIREMENTS</p>
                                        <p> Upon request by Agent Choice, the Agent must provide a copy of their agreement
                                            with
                                            the End Customer, including any amendments or variations to such agreements,
                                            within
                                            10 Business Days of receiving the request.</p>
                                        <p>9. VERIFICATION OF REPORTS</p>
                                        <p>(a) Agent Choice reserves the right to verify the reports <span>(Agency
                                                Agreement)</span> provided by the Agent under this agreement. Such
                                            verification
                                            may include, but is not limited to, requesting additional documentation or
                                            seeking
                                            confirmation from the End Customer.</p>
                                        <p>(b) The Agent must cooperate fully with Agent Choice in the verification process,
                                            providing all necessary documentation and information within a reasonable
                                            timeframe
                                            as specified by Agent Choice.</p>
                                        <p>(c) If any discrepancies or inaccuracies are found in the reports provided by the
                                            Agent, the Agent must correct such discrepancies and provide revised reports to
                                            Agent Choice within 3 Business Days of being notified.</p>
                                        <h4>10. NO GUARANTEE OF ADVERTISING</h4>
                                        <p>(a) Agent Choice makes no guarantees, representations, or warranties that it will
                                            advertise or promote the Agent's services or agency in any form.</p>
                                        <p>(b) Any promotional activities undertaken by Agent Choice will be at its sole
                                            discretion, and the Agent acknowledges that Agent Choice is under no obligation
                                            to
                                            carry out any such activities.</p>
                                        <h4>11. LIMITATION OF LIABILITY</h4>
                                        <p>11.1 LIABILITY</p>
                                        <p>(a) To the maximum extent permitted by law, the total liability of each party in
                                            respect of loss or damage sustained by the other party in connection with this
                                            agreement is limited to the amount paid by the Agent to Agent Choice in the 3
                                            months
                                            preceding the date of the event giving rise to the relevant liability.</p>
                                        <p>(b) Agent Choice shall not be liable to the Agent for:</p>
                                        <p>(i) any hacking, interception, or other breach of security by a third party
                                            affecting
                                            data related to this Agreement;</p>
                                        <p>(ii) any interruption to the operation of Agent Choice’s services for any reason
                                            whatsoever; or</p>
                                        <p>(iii) any loss or claim relating to the accuracy of information provided by End
                                            Customers or third-party data suppliers.</p>
                                        <p>11.2 CONSEQUENTIAL LOSS</p>
                                        <p>To the maximum extent permitted by law, neither party will be liable for any
                                            incidental, special or consequential loss or damages, or damages for loss of
                                            data,
                                            business or business opportunity, goodwill, anticipated savings, profits or
                                            revenue
                                            in connection with this agreement or any Introductions, except:</p>
                                        <p>(a) in relation to a party’s liability for fraud, personal injury, death or loss
                                            or
                                            damage to tangible property; or</p>
                                        <p>(b) to the extent this liability cannot be excluded under the Competition and
                                            Consumer Act 2010 (Cth).</p>
                                        <h4>12. PRIVACY</h4>
                                        <p>In providing Introductions to the Agent, Agent Choice agrees to comply with:</p>
                                        <p>(a) the Australian Privacy Principles set out in the Privacy Act 1988 (Cth); and
                                        </p>
                                        <p>(b) any other applicable Laws or privacy guidelines.</p>
                                        <h4>13. DISPUTE RESOLUTION</h4>
                                        <p>(a) A party claiming that a dispute has arisen under or in connection with this
                                            agreement must not commence court proceedings arising from or relating to the
                                            dispute, other than a claim for urgent interlocutory relief, unless that party
                                            has
                                            complied with the requirements of this clause.</p>
                                        <p>(b) A party that requires resolution of a dispute which arises under or in
                                            connection
                                            with this agreement must give the other party or parties to the dispute written
                                            notice containing reasonable details of the dispute and requiring its resolution
                                            under this clause.</p>
                                        <p>(c) Once the dispute notice has been given, each party to the dispute must then
                                            use
                                            its best efforts to resolve the dispute in good faith. If the dispute is not
                                            resolved within a period of 14 days (or such other period as agreed by the
                                            parties
                                            in writing) after the date of the notice, any party to the dispute may take
                                            legal
                                            proceedings to resolve the dispute.</p>
                                        <p>14. TERMINATION</p>
                                        <p>14.1 TERMINATION FOR CONVENIENCE</p>
                                        <p>Either party may terminate this agreement for convenience by providing 20
                                            Business
                                            Days’ notice to the other party.</p>
                                        <p>14.2 TERMINATION FOR BREACH</p>
                                        <p>14.2 TERMINATION FOR BREACH</p>
                                        <p>(b) A <span>“Breach”</span> of this agreement means:</p>
                                        <p>(i) a party <span>(Notifying Party)</span> considers the other party is in breach
                                            of
                                            this agreement and notifies the other party;</p>
                                        <p>(ii) the other party is given 10 Business Days to rectify the breach; and</p>
                                        <p>(iii) the breach has not been rectified within 10 Business Days or another period
                                            agreed between the parties in writing.</p>
                                        <p>14.3 EFFECT OF TERMINATION</p>
                                        <p>Upon termination of this agreement,:</p>
                                        <p>(a) the Agent will pay all amounts owed to Agent Choice as at the date of
                                            termination;</p>
                                        <p>(b) each party must return all property and Confidential Information to the other
                                            party; </p>
                                        <p>(c) each party must stop using any materials that are no longer owned by, or
                                            licensed
                                            to, them when this agreement is terminated; and </p>
                                        <p>(d) each party must comply with all obligations that are by their nature intended
                                            to
                                            survive the end of this agreement, including without limitation clauses 3, 4, 6,
                                            7,
                                            8, 13 and 14.</p>
                                        <h4>15. NOTICES</h4>
                                        <p>(a) A notice or other communication to a party under this agreement must be:</p>
                                        <p>(i) in writing and in English; and</p>
                                        <p>(ii) delivered via email to the other party, to the email address specified in
                                            this
                                            agreement, or if no email address is specified in this agreement, then the email
                                            address most regularly used by the parties to correspond regarding the subject
                                            matter of this agreement as at the date of this agreement <span>(Email
                                                Address)</span>. The parties may update their Email Address by notice to the
                                            other party.</p>
                                        <p>(b) Unless the party sending the notice knows or reasonably ought to suspect that
                                            an
                                            email was not delivered to the other party’s Email Address, notice will be taken
                                            to
                                            be given:</p>
                                        <p>(i) 24 hours after the email was sent, unless that falls on a Saturday, Sunday or
                                            a
                                            public holiday in the state or territory whose laws govern this agreement, in
                                            which
                                            case the notice will be taken to be given on the next occurring business day in
                                            that
                                            state or territory; or</p>
                                        <p>(ii) when replied to by the other party,</p>
                                        <p>whichever is earlier.</p>
                                        <h4>16. GENERAL</h4>
                                        <p>16.1 GOVERNING LAW AND JURISDICTION</p>
                                        <p>This agreement is governed by the law applying in the New South Wales, Australia.
                                            Each party irrevocably submits to the exclusive jurisdiction of the courts of
                                            New
                                            South Wales, Australia and courts of appeal from them in respect of any
                                            proceedings
                                            arising out of or in connection with this agreement. Each party irrevocably
                                            waives
                                            any objection to the venue of any legal process on the basis that the process
                                            has
                                            been brought in an inconvenient forum.</p>
                                        <p>16.2 BUSINESS DAYS</p>
                                        <p> If the day on which any act is to be done under this agreement is a day other
                                            than a
                                            Business Day, that act must be done on or by the immediately following Business
                                            Day
                                            except where this agreement expressly specifies otherwise.</p>
                                        <p>16.3 AMENDMENTS</p>
                                        <p>16.3 AMENDMENTS</p>
                                        <p>16.4 WAIVER</p>
                                        <p> No party to this agreement may rely on the words or conduct of any other party
                                            as a
                                            waiver of any right unless the waiver is in writing and signed by the party
                                            granting
                                            the waiver.</p>
                                        <p>16.5 SEVERANCE</p>
                                        <p> Any term of this agreement which is wholly or partially void or unenforceable is
                                            severed to the extent that it is void or unenforceable. The validity and
                                            enforceability of the remainder of this agreement is not limited or otherwise
                                            affected.</p>
                                        <p>16.6 JOINT AND SEVERAL LIABILITY</p>
                                        <p> An obligation or a liability assumed by, or a right conferred on, two or more
                                            persons binds or benefits them jointly and severally.</p>
                                        <p>16.7 ASSIGNMENT</p>
                                        <p> A party cannot assign, novate or otherwise transfer any of its rights or
                                            obligations
                                            under this agreement without the prior written consent of the other party.</p>
                                        <p>16.8 COSTS</p>
                                        <p> Except as otherwise provided in this agreement, each party must pay its own
                                            costs
                                            and expenses in connection with negotiating, preparing, executing and performing
                                            this agreement.</p>
                                        <p>16.9 ENTIRE AGREEMENT</p>
                                        <p>This agreement embodies the entire agreement between the parties and supersedes
                                            any
                                            prior negotiation, conduct, arrangement, understanding or agreement, express or
                                            implied, in relation to the subject matter of this agreement.</p>
                                        <p>16.10INTERPRETATION</p>
                                        <p>(a) <span>(singular and plural)</span> words in the singular includes the plural
                                            (and
                                            vice versa);</p>
                                        <p>4.3 (b) <span>(gender)</span> words indicating a gender includes the
                                            corresponding
                                            words of any other gender;</p>
                                        <p>(c) <span>(defined terms)</span> if a word or phrase is given a defined meaning,
                                            any
                                            other part of speech or grammatical form of that word or phrase has a
                                            corresponding
                                            meaning;</p>
                                        <p>(d) <span>(person)</span> a reference to “person” or “you” includes an
                                            individual,
                                            the estate of an individual, a corporation, an authority, an association,
                                            consortium
                                            or joint venture (whether incorporated or unincorporated), a partnership, a
                                            trust
                                            and any other entity;</p>
                                        <p>(e) <span>(party)</span> a reference to a party includes that party’s executors,
                                            administrators, successors and permitted assigns, including persons taking by
                                            way of
                                            novation and, in the case of a trustee, includes any substituted or additional
                                            trustee;</p>
                                        <p>(e) <span>(party)</span> a reference to a party includes that party’s executors,
                                            administrators, successors and permitted assigns, including persons taking by
                                            way of
                                            novation and, in the case of a trustee, includes any substituted or additional
                                            trustee;</p>
                                        <p>(f) <span>(this agreement)</span> a reference to a party, clause, paragraph,
                                            schedule, exhibit, attachment or annexure is a reference to a party, clause,
                                            paragraph, schedule, exhibit, attachment or annexure to or of this agreement,
                                            and a
                                            reference to this agreement includes all schedules, exhibits, attachments and
                                            annexures to it;</p>
                                        <p>(g) <span>(document)</span> a reference to a document (including this agreement)
                                            is
                                            to that document as varied, novated, ratified or replaced from time to time;</p>
                                        <p>(h) <span>(headings)</span> headings and words in bold type are for convenience
                                            only
                                            and do not affect interpretation;</p>
                                        <p>(i) <span>(includes)</span> the word “includes” and similar words in any form is
                                            not
                                            a word of limitation;</p>
                                        <p>(j) <span>(adverse interpretation)</span> no provision of this agreement will be
                                            interpreted adversely to a party because that party was responsible for the
                                            preparation of this agreement or that provision; and</p>
                                        <p>(k) <span>(currency)</span> a reference to $, or “dollar”, is to Australian
                                            currency,
                                            unless otherwise agreed in writing.</p>



                                        <!--<section class="signature-component mt-5">-->
                                        <!--<canvas id="signature-pad" width="200" height="100"></canvas>-->
                                        <!--</section>-->
                                        <!--<div>-->
                                        <!--    <button id="clear" class="clearbtn">Clear</button>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap justify-content-between align-items-center mb-md-5 mb-4">
                                <div class="d-flex flex-column flex-sm-row align-items-start gap-3">
                                    <input id="helloAccep" type="checkbox" class="step5checkbox">
                                    <h2 class="stepboxheading02">By continuing, I acknowledge and accept the <span
                                            style="color : #8EC2BA" class="fw-bold">Agent Referral Agreement</span> and
                                        <br>
                                        the <span style="color : #8EC2BA" class="fw-bold"
                                            onclick="nextStep('step-5')">Fees
                                            and Terms</span> outlined on this website. I agree to comply with the terms <br>
                                        and
                                        conditions set forth by Agent Choice for successful referrals.
                                    </h2>
                                </div>
                                <div>
                                    <!-- <button class="step6btn px-5" id="acceptBtn" disabled onclick="nextStep('step-7')">Accept</button> -->
                                    <button type="button" class="step6btn stepButton8 px-5">Accept</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- This script is working for next button working --}}
                <script>
                    $(".stepButton8").click(function() {
                        // Check if the terms checkbox is checked
                        if (!$("#helloAccep").is(":checked")) {
                            alert('Please accept the fees and terms to continue.');
                            return; // Stop further execution if validation fails
                        }

                        // Call the nextStep function if the checkbox is checked
                        nextStep('step-7');
                    });
                </script>
                {{-- End Script --}}

                <!-- Step 7 -->
                <div class="step" id="step-7">
                    <div class="stepsbox">
                        <div class="agentstepboxheading">
                            <h1 class="fw-bold stepboxheading01 border-0 p-0 m-0">Set up your profile</h1>
                            <p class="m-0 fw-medium" style="color: #2E353C;">As part of the profile setup, you will
                                provide
                                your email, create a password, and receive a confirmation code sent to your email for
                                verification.</p>
                        </div>
                        <div class="sellbox mb-5 mb-md-4 mt-3 ">
                            <input type="email" class="step5input mt-1" placeholder="Username (email@email.com.au)"
                                name="email" id="formEmail" required>
                            <div class="d-flex align-items-center gap-2 mt-2">
                                <img class="img-fluid infoicon" src="{{ asset('template/assets/img/info.png') }}" />
                                <h2 class="stepboxheading02 mt-1">You email address will be your username </h2>
                            </div>
                            <input type="password" class="step5input mt-2" id="passsword" placeholder="Password"
                                name="password" required>
                            <input type="password" class="step5input mt-2" id="confirmPassword"
                                placeholder="Confirm Password" name="confirm_password" required>
                            <div class="d-flex flex-wrap align-items-start justify-content-between  mt-3">
                                <div class="d-flex align-items-start gap-2 ">
                                    <img class="img-fluid infoicon mt-1"
                                        src="{{ asset('template/assets/img/info.png') }}" />
                                    <h2 class="stepboxheading02" id="passwordValidation">Use passwords of at least 8
                                        characters with uppercase,<br>
                                        lowercase, numbers, and symbols for security. </h2>
                                </div>
                                <div>
                                    <button type="button" class="step6btn formSubmissionButton">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- This scirpt is working for form submission --}}
                <script>
                    $(document).ready(function() {
                        $(".formSubmissionButton").click(function() {
                            // Collect data from the form
                            var agentType = $(".agencyType:checked").val();
                            var agencyName = $("#agencyName").val().trim();
                            var agencyAddress = $("#agencyOfficeAddress").val().trim();
                            var agencyCode = $("#agencyCode").val().trim();
                            var firstName = $("#firstName").val().trim();
                            var lastName = $("#lastName").val().trim();
                            var userEmail = $("#agencyAddress").val().trim(); // Confirm if this is correct
                            var phoneNumber = $("#agnecyPhone").val().trim();
                            var focusedOn = $(".focusedOn:checked")
                                .val(); // Assuming there's a radio button for focusedOn
                            var email = $("#formEmail").val().trim();
                            var latitude = $("#latitude").val().trim();
                            var longitude = $("#longitude").val().trim();
                            var password = $("#passsword").val().trim();
                            var confirmPassword = $("#confirmPassword").val().trim();

                            // Simple validation
                            if (!agentType || !agencyName || !agencyAddress || !agencyCode ||
                                !firstName || !lastName || !userEmail || !phoneNumber ||
                                !focusedOn || !email || !password || !confirmPassword) {
                                alert('Please fill in all fields.');
                                return;
                            }

                            // Password validation pattern
                            var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

                            // Check if passwords match
                            if (password !== confirmPassword) {
                                alert('Passwords do not match.');
                                // Outline password fields in red
                                $("#passsword, #confirmPassword").css("border", "2px solid red");
                                return;
                            } else {
                                // Reset border color if they match
                                $("#passsword, #confirmPassword").css("border", "");
                            }

                            // Check password strength
                            if (!passwordPattern.test(password)) {
                                $("#passwordValidation").css("color", "red");
                                // Outline password fields in red
                                $("#passsword, #confirmPassword").css("border", "2px solid red");
                                return;
                            } else {
                                // Reset border color if password is valid
                                $("#passsword, #confirmPassword").css("border", "");
                            }

                            // Data object to be sent
                            var formData = {
                                agent_type: agentType,
                                agency_name: agencyName,
                                agency_address: agencyAddress,
                                agency_code: agencyCode,
                                first_name: firstName,
                                last_name: lastName

                                    ,
                                phone_number: phoneNumber,
                                focused_on: focusedOn,
                                email: email,
                                longitude: longitude,
                                latitude: latitude,
                                password: password // Include password only if necessary; handle securely
                            };

                            // AJAX submission
                            $.ajax({
                                url: "{{ route('store.register') }}", // Your server endpoint
                                type: 'POST',
                                data: {
                                    agent_type: agentType,
                                    agency_name: agencyName,
                                    agency_address: agencyAddress,
                                    agency_code: agencyCode,
                                    first_name: firstName,
                                    last_name: lastName,
                                    phone_number: phoneNumber,
                                    focused_on: focusedOn,
                                    email: email,
                                    longitude: longitude,
                                    latitude: latitude,
                                    password: password,
                                    _token: '{{ csrf_token() }}' // Directly adding CSRF token
                                }
                            }).done(function(response, textStatus, jqXHR) {
                                if (jqXHR.status == 401) {
                                    alert("Mail already Exists !");
                                }
                                if (jqXHR.status == 200) {
                                    $("#appendEmail").val(response.emailAddress);
                                    nextStep('step-8');
                                }

                                if (jqXHR.status == 500) {
                                    alert("Something went wrong. Please try again later.");
                                }
                            }).fail(function(jqXHR, textStatus, errorThrown) {
                                // Handle error response
                                console.error('Error:', textStatus, errorThrown);
                                console.error('Status Code:', jqXHR.status); // Get the status code on error
                                alert('An error occurred. Please try again later.');
                            });
                        });
                    });
                </script>

                {{-- End Script --}}

                <!-- Step 8 -->
                <div class="step" id="step-8">
                    <div class="stepsbox">
                        <h1 class="fw-bold stepboxheading01">Verify your password</h1>
                        <div class="sellbox mb-5 mb-md-4 mt-3 ">
                            <div class="d-flex align-items-start gap-2 mt-2">
                                <img class="img-fluid infoicon mt-1" src="{{ asset('template/assets/img/info.png') }}" />
                                <h2 class="stepboxheading02">Please check your email for the confirmation code sent. If you
                                    haven't received this code please check your spam/ junk folder.</h2>
                            </div>
                            <input type="email" id="appendEmail" class="step5input mt-2" readonly
                                placeholder="Username (email@email.com.au)">
                            <input type="text" class="step5input mt-3" placeholder="Confirmation code"
                                id="confirmationCode" required>
                            <div class="d-flex flex-wrap align-items-start justify-content-between  mt-3">
                                <div class="d-flex align-items-start gap-2 ">
                                    <img class="img-fluid infoicon mt-1"
                                        src="{{ asset('template/assets/img/info.png') }}" />
                                    <h2 class="stepboxheading02"><span style="color : #8EC2BA">Resend</span> the code to
                                        my
                                        email address</h2>
                                </div>
                                <div>
                                    <button class="step6btn verificationButton" type="button">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- This script is working for verification of code --}}
                <script>
                    $(document).ready(function() {
                        $(".verificationButton").click(function() {

                            var email = $("#appendEmail").val();
                            var code = $("#confirmationCode").val();

                            if (!email || !code) {
                                alert('Please fill in all fields.');
                                return;
                            }

                            $.ajax({
                                url: "{{ route('verify.code') }}",
                                type: 'POST',
                                data: {
                                    email: email,
                                    code: code,
                                    _token: '{{ csrf_token() }}'
                                }
                            }).done(function(response, textStatus, jqXHR) {
                                if (jqXHR.status == 200) {
                                    $("#firstNameText").text(response.info.first_name);
                                    nextStep('step-9');
                                }
                                if (jqXHR.status == 400) {
                                    alert(response.message);
                                }
                                if (jqXHR.status == 401) {
                                    alert(response.message);
                                }
                                if (jqXHR.status == 500) {
                                    alert("Something went wrong. Please try again later.");
                                }
                            }).fail(function(jqXHR, textStatus, errorThrown) {
                                // Handle error response
                                console.error('Error:', textStatus, errorThrown);
                                console.error('Status Code:', jqXHR.status); // Get the status code on error
                                alert('An error occurred. Please try again later.');
                            });

                        });
                    });
                </script>
                {{-- End Script --}}

                <!-- Step 9 -->
                <div class="step" id="step-9">
                    <div class="stepsbox">
                        <div class="agentstepboxheading">
                            <h1 class="fw-bold stepboxheading01 border-0 p-0 m-0">Congratulations <span
                                    id="firstNameText"></span>!</h1>
                            <h2 class="m-0 fw-bold">You have completed your registration.</h2>
                        </div>
                        <div class="sellbox mb-5 mb-md-4 mt-3 pe-md-5">
                            <div class="d-flex align-items-start gap-2">
                                <img class="img-fluid infoicon mt-1" src="{{ asset('template/assets/img/info.png') }}" />
                                <h2 class="stepboxheading02">One of our team members will be in touch with you shortly.
                                </h2>
                            </div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mt-4">
                                <a class="agentstepsbtn-1" href="{{ route('dashboard') }}">
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <img class="img-fluid"
                                            src="{{ asset('template/assets/img/agentportalstepimg1.png') }}" />
                                        <h3 class="m-0">Dashboard</h3>
                                    </div>
                                </a>
                                <div onclick="nextStep('step-4')"
                                    class="agentstepsbtn-2 d-flex align-items-center justify-content-center gap-2">
                                    <img class="img-fluid"
                                        src="{{ asset('template/assets/img/agentportalstepimg2.png') }}" />
                                    <h3 class="m-0 text-nowrap">Update your profile</h3>
                                </div>
                            </div>
                            <h1 class="fw-normal h1-heading mt-4">Still got questions give us a call on <a class="fw-bold"
                                    href="tel:1300 344 148" style="color : #8EC2BA;">1300 344 148</a></h1>
                        </div>
                    </div>
                </div>

                <!-- Add more steps as needed -->
                <div class="back-button-container d-flex align-items-center justify-content-end gap-2 visible">
                    <a class="text-decoration-none" href="javascript:void(0);"
                        onclick="prevStep('step-' + (currentStep - 1))">
                        <img class="infoicon" src="{{ asset('template/assets/img/arrowbacksteps.png') }}" />
                    </a>
                    <h2 class="steptext fw-semibold mb-0 mt-1">Go Back</h2>
                </div>

            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script>
        let currentStep = 1;
        const totalSteps = 9; // Total number of steps in the process
        const visibleSteps = 6; // Number of steps to show in the progress bar

        function updateProgress() {
            const progressElement = document.getElementById('file');
            const progress = document.querySelector('.progressdiv');
            const pageNumberElement = document.querySelector('.pageactive');

            // Show or hide progress based on the step number
            if (currentStep > visibleSteps) {
                progress.classList.add('btnhidden');
                progress.classList.remove('btnvisible');
            } else {
                progress.classList.add('btnvisible');
                progress.classList.remove('btnhidden');

                // Calculate step percentage based on visible steps
                const stepPercentage = ((currentStep - 1) / (visibleSteps - 1)) * 100;
                progressElement.value = stepPercentage;
            }

            // Always show the correct total number of steps
            pageNumberElement.innerHTML =
                `${Math.min(currentStep, visibleSteps)} of <span class="pagenoactive">${visibleSteps}</span>`;
        }

        function updateBackButtonVisibility() {
            const backButtonContainer = document.querySelector('.back-button-container');
            if (currentStep === 1) {
                backButtonContainer.classList.add('btnhidden');
                backButtonContainer.classList.remove('btnvisible');
            } else {
                backButtonContainer.classList.add('btnvisible');
                backButtonContainer.classList.remove('btnhidden');
            }
        }

        function nextStep(stepId) {
            // Hide all steps
            document.querySelectorAll('.step').forEach(function(stepElement) {
                stepElement.classList.remove('activebox');
            });

            // Show the selected step
            document.getElementById(stepId).classList.add('activebox');

            // Increment step and update progress bar
            if (currentStep < totalSteps) {
                currentStep++;
            }

            updateProgress();
            updateBackButtonVisibility();
        }

        function prevStep(stepId) {
            // Hide all steps
            document.querySelectorAll('.step').forEach(function(stepElement) {
                stepElement.classList.remove('activebox');
            });

            // Show the selected step
            document.getElementById(stepId).classList.add('activebox');

            // Decrement step and update progress bar
            if (currentStep > 1) {
                currentStep--;
            }

            updateProgress();
            updateBackButtonVisibility();
        }

        // Initialize progress and back button visibility on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateProgress();
            updateBackButtonVisibility();
        });
    </script>

    <script>
        // Enable Accept button when checkbox is checked
        document.getElementById('acceptTerms').addEventListener('change', function() {
            document.getElementById('acceptBtn').disabled = !this.checked;
        });

        // Generate PDF on button click
        document.getElementById('acceptBtn').addEventListener('click', function() {
            const {
                jsPDF
            } = window.jspdf;
            const pdf = new jsPDF();

            // Get content of the forscroll div
            const content = document.querySelector('.forscroll').innerText;

            // Add content to the PDF
            pdf.text(content, 10, 10);

            // Save the PDF with a name
            pdf.save('agreement.pdf');
        });
    </script>

    <script>
        document.querySelectorAll('.verification-container input').forEach((input, index, inputs) => {
            input.addEventListener('input', (e) => {
                if (e.target.value.length > 1) {
                    e.target.value = e.target.value.slice(0, 1);
                }
                if (/^\d$/.test(e.target.value) && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && e.target.value === '' && index > 0) {
                    inputs[index - 1].focus();
                }
            });

            input.addEventListener('paste', (e) => {
                e.preventDefault();
            });

            input.addEventListener('keypress', (e) => {
                if (!/^\d$/.test(e.key)) {
                    e.preventDefault();
                }
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
@endsection
