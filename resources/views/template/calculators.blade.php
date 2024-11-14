@extends('template.layout.main')

@section('section')
    <aside class="roboto-light" style="overflow-x : hidden !important;">
        <div class="calculaterSec1" id="block">
            <div class="container section-padding">
                <h1 class="fw-normal calculaterSec1-h1 fw-bold">Agent Commission Calculator</h1>
                <p class="calculaterSec1-p mt-3 p-0 fw-normal">Our commission calculator relies on data shared by real <br>
                    estate agents within our network for accurate <br> calculations.</p>
                <div class="input-wrapper d-flex align-items-center mt-md-4 mt-lg-5 mt-3">
                    <i class="fa-solid fa-location-dot me-4 sec-1-icon"></i>
                    <input type="text" class="sec-1-input" placeholder="Enter suburb or postcode">
                    <button id="calculate-btn" class="sec-1-btn px-4">Calculate</button>
                </div>
            </div>
        </div>
        <div class="calculaterSec2" id="hidden" style="display: none;">
            <div class="container section-padding commissionCalculator">
                <h1 class="fw-normal calculaterSec1-h1 fw-bold">Commission Calculator</h1>
                <div class="d-flex mx-0 mt-2  px-0 flex-column flex-md-row">
                    <div class="commissionleftcol mx-0 ps-3 pe-md-5 pe-3 py-3">
                        <div class="d-flex flex-wrap justify-content-between gap-3 w-100">
                            <div class="d-flex  align-items-center">
                                <button class="btn-1">Fixed Commissions</button>
                                <button class="btn-2">Tiered Commissions</button>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-rotate "></i>
                                <h2 class="mt-2">New Search</h2>
                            </div>
                        </div>
                        <h3 class="mt-3">Burleigh Heads, QLD</h3>
                        <div class="slider-container d-flex flex-column flex-md-row align-items-end gap-3 mt-3">
                            <div class="w-100">
                                <input type="range" id="priceRange" min="0" max="10000000" value="3490000">
                            </div>
                            <div>
                                <h4 class="m-0 p-0 text-nowrap">Target sale price:</h4>
                                <div id="priceValue" class="mb-1">$3,490,000</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 mt-3">
                            <h5 class="text-nowrap">2.18 %</h5>
                            <p>2.18% is the average commission rate Burleigh Heads</p>
                        </div>
                    </div>
                    <div
                        class="commissionrightcol d-flex align-items-center flex-column justify-content-center text-white  mx-0 px-4 py-4">
                        <h1 class="m-0 p-0">$920,525</h1>
                        <p class="p-0 my-2 fw-light">in your pocket</p>
                        <button class="text-nowrap">Fixed Commissions: <span class="fw-bold">$24,475</span></button>
                    </div>
                </div>
                <div class="d-flex align-items-start gap-2 mt-3 disclaimer">
                    <img src="{{ asset('template/assets/img/info.png') }}" class="infoicon mt-1">
                    <h2 class="stepboxheading02 text-dark">Commission rates in this calculator exclude GST.Please confirm
                        with your agent whether GST is included.</h2>
                </div>
                <h1 class="fw-normal calculaterSec1-h1 mb-0 fw-bold mt-3">Your Next Step</h1>
                <p class="calculaterSec1-p p-0 fw-normal">Compare top agents and their commissions in Suburb</p>
                <button class="commbtn mt-2">Compare Agents in Suburb</button>
            </div>
        </div>



        <div class="sec2">
            <div class="slider">
                <div class="slide-track" id="slide-track">
                    <div class="slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('template/assets/img/Capturegroup.PNG') }}" alt="1" class="img-fluid ">
                    </div>
                    <div class="slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('template/assets/img/10.png') }}" alt="10" style="height: 66px !important;padding-top : 28px;"
                            class="img-fluid  px-3">
                    </div>
                    <div class="slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('template/assets/img/11.png') }}" alt="11" style="height: 60px !important;padding-top : 22px;"
                            class="img-fluid  px-3">
                    </div>
                    <!--<div class="slide d-flex align-items-center justify-content-center">-->
                    <!--    <img src="assets/img/13.png" alt="13" style="height: 60px !important;padding-top : 27px;"   class="img-fluid px-3">-->
                    <!--</div>-->
                    <div class="slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('template/assets/img/14.png') }}" alt="14" style="height: 60px !important;padding-top : 31px;"
                            class="img-fluid   px-3">
                    </div>
                    <div class="slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('template/assets/img/Capturegroup.PNG') }}" alt="1" class="img-fluid ">
                    </div>
                    <div class="slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('template/assets/img/10.png') }}" alt="10" style="height: 66px !important;padding-top : 28px;"
                            class="img-fluid  px-3">
                    </div>
                    <div class="slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('template/assets/img/11.png') }}" alt="11" style="height: 60px !important;padding-top : 22px;"
                            class="img-fluid  px-3">
                    </div>
                    <!--<div class="slide d-flex align-items-center justify-content-center">-->
                    <!--    <img src="assets/img/13.png" alt="13" style="height: 60px !important;padding-top : 27px;"   class="img-fluid px-3">-->
                    <!--</div>-->
                    <div class="slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('template/assets/img/14.png') }}" alt="14" style="height: 60px !important;padding-top : 31px;"
                            class="img-fluid   px-3">
                    </div>
                </div>
            </div>
        </div>

        <!-- Commission Section Starts Here -->
        <div class="commissionSec pt-5 cashbg">
            <div class="container mt-md-4 section-padding">
                <h2 class="mb-5">Why do real estate agents charge a commission?</h2>
                <div class="row d-flex gx-4 m-0 pb-5 justify-content-between">
                    <!-- Commission Content -->
                    <div class="col-lg-7 p-0 m-0 commission-content">
                        <p class="">
                            In Australia, real estate agents charge a commission for their services primarily as a way to be
                            compensated for the time, effort, expertise, and resources they invest in facilitating property
                            transactions. Real estate agents provide a range of valuable services to both sellers and
                            buyers, including property marketing, market analysis, negotiation, paperwork handling, property
                            showings, and guidance throughout the buying or selling process.
                        </p>
                        <p class="py-3">
                            The commission fee structure incentivizes
                            real estate agents to work diligently on behalf of their clients to achieve the best possible
                            outcomes in property transactions. By tying their compensation to the successful sale of a
                            property, agents have a vested interest in securing the best price for the seller or helping the
                            buyer
                            find the right property at a fair market value.
                        </p>
                        <p class="para">
                            Additionally, the commission system allows real estate
                            agents to operate their businesses without charging upfront fees to clients, making their
                            services
                            accessible to a broader range of property buyers and sellers. This model aligns the interests of
                            clients and agents and ensures that agents are motivated to deliver results while assuming some
                            of the financial risks associated with marketing and selling properties.
                        </p>
                    </div>
                    <!-- Commission Side Image -->
                    <div class="col-lg-5 m-0 p-0 commission-img">
                        <img src="{{ asset('template/assets/img/Assets/calsec.png') }}" class="img-fluid " alt="pic">
                    </div>
                </div>

                <div class="commissionSec m-0 p-0 row mx-0 px-0 d-flex gx-5 pb-5">
                    <h2 class="mb-md-5 p-0 mb-4 ">Are real estate agent commissions regulated in Australia?</h2>
                    <!-- Commission Content -->
                    <div class="col-lg-5 col-xl-4 m-0 px-0 commission-img2 commission-content  pb-md-5 pb-3">
                        <img src="{{ asset('template/assets/img/Assets/Commcalulatorimg2.png') }}" class="img-fluid h-100 w-100"
                            alt="Agent Picture">
                    </div>
                    <!-- Commission Side Image -->
                    <div class="col-lg-7 col-xl-8 m-0 px-0  pb-5">
                        <p class="para">
                            Real estate agent commissions in Australia are not federally regulated; however, each state and
                            territory has its own set of guidelines regarding real estate agent commissions.Real estate
                            agents typically charge a commission based on a percentage of the final sale price of a
                            property, which is agreed upon between the agent and the client.
                        </p>
                        <p class="para">
                            While there is no fixed
                            commission rate set by law, real estate agents are required to disclose their commission rates
                            and fees to clients before entering into any agreement. This transparency helps clients
                            understand the costs involved and make informed decisions when engaging the services of a real
                            estate agent.
                        </p>
                        <p class="para">
                            Clients can also negotiate commission rates with agents to ensure a fair and
                            mutually beneficial arrangement. It’s important for property sellers and buyers to review and
                            understand the terms of any agreement with a real estate agent, including the commission
                            structure, before proceeding with a property transaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Commission Section End Here -->

        <!-- Most Common Section Starts Here -->
        <div class="mostCommon">
            <div class="container section-padding">
                <h2 class="text-white ">Most common Types of agent commissions</h2>
                <p class="text-white">In Australia, the two most commonly used commission types for real estate agents
                    are:</p>
                <div class="row d-flex gx-5 pb-4">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header d-flex  flex-md-row">
                                    <img src="{{ asset('template/assets/img/percentage.png') }}" class="img-fluid card-img-1" alt="">
                                    <h3> Percentage-Based Commission:</h3>
                                </div>
                                <p class="card-text mt-3">This is the traditional and widely used commission structure in
                                    Australia. Real estate agents charge a percentage of the final sale price of the
                                    property as their commission. The percentage typically ranges from 1% to 3% of the sale
                                    price. This model incentivizes agents to work towards achieving the highest possible
                                    sale price for the property.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header d-flex  flex-row">
                                    <img src="{{ asset('template/assets/img/tiered.png') }}" class="img-fluid card-img-2" alt="">
                                    <h3>Tiered Commission:</h3>
                                </div>
                                <p class="card-text mt-3">Some agents use a tiered commission structure where the
                                    commission
                                    percentage varies based on the sale price of the property. For example, the agent may
                                    charge a lower percentage for properties sold below a certain price threshold and a
                                    higher percentage for properties sold above that threshold. This structure can provide
                                    flexibility and align the agent’s compensation with the property’s value.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Most Common Section Ends Here -->


        <!-- Flat Fee Commission Section -->
        <div class="flatFee">
            <div class="container section-padding">
                <div class="row">
                    <div class="col-12">
                        <h2 class="fw-bold">What is a Flat Fee Commission?</h2>
                        <p>
                            Flat fee commissions are gaining popularity in Australia, especially in recent years. While
                            percentage-based commissions have traditionally been the norm in the real estate industry, flat
                            fee commissions are increasingly being embraced by both real estate agents and clients.
                        </p>
                        <p>
                            In this
                            commission structure, the real estate agent charges a fixed fee for their services, regardless
                            of the final sale price of the property. This type of commission can offer transparency and
                            predictability for clients, as they know the exact amount they will need to pay for the agent’s
                            services. Flat fee commissions are gaining popularity for providing clarity on costs and
                            appealing to clients seeking cost certainty in their real estate transactions.
                        </p>
                        <p>
                            Additionally, flat fee commissions can be advantageous for properties with higher values, as
                            clients may save money compared to a percentage-based commission that would increase in line
                            with the sale price.
                        </p>
                        <p>
                            Overall, while flat fee commissions are still not as widespread as percentage-based commissions
                            in Australia, their popularity is on the rise as clients seek more certainty and transparency in
                            their real estate transactions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Flat Fee Commission Section -->

    </aside>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        document.getElementById('calculate-btn').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default button behavior

            // Hide the form fields
            document.querySelector('#block').style.display = 'none';

            // Show the thank-you message
            document.getElementById('hidden').style.display = 'block';
        });
    </script>


    <!-- Faq Js -->
    <script>
        const items = document.querySelectorAll(".accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute('aria-expanded');

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
            }

            if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
            }
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>

    <script>
        $(document).ready(function() {
            $("#priceRange").change(function() {
                var rangeVal = $("#priceValue").text();

                var trimmedVal = rangeVal.replace("$", "");

                var finalVal = trimmedVal;

                console.log(finalVal);
            })
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceRange = document.getElementById('priceRange');
            const priceValue = document.getElementById('priceValue');

            function formatNumber(number) {
                return number.toLocaleString(); // Format number with commas
            }

            function updatePrice() {
                const value = parseInt(priceRange.value, 10);
                priceValue.textContent = `$${formatNumber(value)}`;

                // Update the slider's filled portion based on the current value
                const percent = (value - priceRange.min) / (priceRange.max - priceRange.min) * 100;
                priceRange.style.background = `linear-gradient(to right, #8EC2BA ${percent}%, #CEF2EC ${percent}%)`;
            }
            priceRange.addEventListener('input', updatePrice);
            // Initialize with the current value
            updatePrice();
        });
    </script>
@endsection
