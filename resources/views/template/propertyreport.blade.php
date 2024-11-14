@extends('template.layout.main')

@section('section')
    <!-- sec1 -->
    <div class="propertysec1">
        <div class="container section-padding ">
            <h1 class="fw-bold  sec1-h1">What is your property worth?</h1>
            <p class=" mt-3  mt-md-4 about-sec-p">Get your free comprehensive property value report today!
            </p>
            <div class="input-wrapper  d-flex align-items-center mt-md-4 mt-lg-5 mt-3">
                <i class="fa-solid fa-location-dot me-4 sec-1-icon"></i>
                <input type="text" class="sec-1-input" placeholder="Enter Your Address...">
                <a class="text-decoration-none" href="javascript:void(0)">
                    <button class="sec-1-btn">
                        Generate Report
                    </button>
                </a>
            </div>
        </div>
    </div>


    <div class="sec2">
        <div class="slider">
            <div class="slide-track" id="slide-track">
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/Capturegroup.PNG') }}" alt="1" class="img-fluid ">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/10.png') }}" alt="10"
                        style="height: 66px !important;padding-top : 28px;" class="img-fluid  px-3">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/11.png') }}" alt="11"
                        style="height: 60px !important;padding-top : 22px;" class="img-fluid  px-3">
                </div>
                <!--<div class="slide d-flex align-items-center justify-content-center">-->
                <!--    <img src="assets/img/13.png" alt="13" style="height: 60px !important;padding-top : 27px;"   class="img-fluid px-3">-->
                <!--</div>-->
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/14.png') }}" alt="14"
                        style="height: 60px !important;padding-top : 31px;" class="img-fluid   px-3">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/Capturegroup.PNG') }}" alt="1" class="img-fluid ">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/10.png') }}" alt="10"
                        style="height: 66px !important;padding-top : 28px;" class="img-fluid  px-3">
                </div>
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/11.png') }}" alt="11"
                        style="height: 60px !important;padding-top : 22px;" class="img-fluid  px-3">
                </div>
                <!--<div class="slide d-flex align-items-center justify-content-center">-->
                <!--    <img src="assets/img/13.png" alt="13" style="height: 60px !important;padding-top : 27px;"   class="img-fluid px-3">-->
                <!--</div>-->
                <div class="slide d-flex align-items-center justify-content-center">
                    <img src="{{ asset('template/assets/img/14.png') }}" alt="14"
                        style="height: 60px !important;padding-top : 31px;" class="img-fluid   px-3">
                </div>
            </div>
        </div>
    </div>


    <!-- sec 3 -->
    <div class="propertysec-3-bg">
        <div class="container stepbox section-padding  pt-md-5 pt-3">
            <h1 class="step-box-h2 p-0 m-0">Get the most accurate online valuation for you home</h1>
            <h3 class="p-0 mt-3 fw-normal roboto-regular step-box-h3">We combine hundreds of data points about the market,
                the neighbourhood, and the home itself,<br> all to provide you with the most accurate home valuation report.
            </h3>
            <div class="d-flex flex-wrap  gap-2 my-0 align-items-center justify-content-center step-box ">
                <div class="position-relative d-flex">
                    <img src="{{ asset('template/assets/img/Step1.png') }}" class="img-fluid stepboximg" alt="">
                    <div class="img_text px-3 px-lg-4">
                        <div class="">
                            <h4 class="mb-0">Track your home’s value</h4>
                        </div>
                        <p class="text-center ">Instantly learn your home’s value and how much you could sell for in today’s
                            market.
                        </p>
                    </div>
                </div>
                <div class="position-relative d-flex">
                    <img src="{{ asset('template/assets/img/Step2.png') }}" class="img-fluid stepboximg" alt="">
                    <div class="img_text px-3 px-lg-4 pt-3">
                        <div class="">
                            <h4 class="mb-0" style="color : #2E353C">See local market trends</h4>
                        </div>
                        <p class="text-center ">Stay up to date on market changes and find out how much homes like yours
                            have sold in the recent months. </p>
                    </div>
                </div>
                <div class="position-relative d-flex">
                    <img src="{{ asset('template/assets/img/Step3.png') }}" class="img-fluid stepboximg" alt="">
                    <div class="img_text px-3 px-lg-4">
                        <div class="">

                            <h4 class="mb-0" style="color :#A3A3A3">Get your free property report</h4>
                        </div>
                        <p class="text-center ">A FREE comprehensive property report will be emailed out to you the same
                            day. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- sec4 -->
    <div class="propertysec4   ">
        <div class="container section-padding  py-5">
            <h1 class="propertysec4-h1">Get your <span class="fw-bold">FREE</span> comprehensive property report</h1>
            <p class="propertysec4-p mt-5">How much is my house worth? It's a question every homeowner <br> wants to know
                the answer to, especially if <br> you're
                thinking about selling.</p>
            <div class="position-relative">

                <p class="propertysec4-p ">Any number of factors might affect the value of <br> your home,
                    including the neighbourhood <br> you're located in, the
                    size of your lot and the <br> age and condition of the structure itself.</p>
                <img src="{{ asset('template/assets/img/property.png') }}" class="propertyimg" alt="">
            </div>
        </div>
    </div>

    <!-- faq -->
    <div class="faqSec cashbg">
        <div class="container section-padding">
            <h2 class="py-5">Property Report - FAQs</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">What does a full
                            property report include?</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p class="pt-4">Estimated property price</p>
                        <p class="pt-2">Investment potential</p>
                        <p class="pt-2">Market trends for the area</p>
                        <p class="pt-2">Property history – sales and rental</p>
                        <p class="pt-2">Similar properties on the market</p>
                        <p class="pt-2">Suburb snapshot – population, average age, owner occupier, vacancy rates.</p>
                        <p class="pb-4 pt-2">Your suburb’s latest sales data</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">How is the value
                            of my house estimated by Agent Choice?</span><span class="icon"
                            aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p class="py-4">Agent Choice employs a proprietary algorithm, leveraging a CoreLogic™ Data feed,
                            to determine the
                            current value of your home. This advanced formula analyses recent sales data of comparable
                            properties
                            in your area over the past 3-6 months to arrive at an estimate. It is important to note that
                            variations in
                            property finishes and renovations can influence the accuracy of the valuation.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Why should I use
                            a property value report ?</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p class="py-4">Using a property value report helps you figure out how much your home might be
                            worth before selling it
                            and getting an official appraisal. This information lets you plan for how much money you might
                            make
                            from selling your home, helping you budget for your next home. When you're looking to buy a
                            home,
                            checking nearby home values can help you make competitive offers.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How reliable is
                            the property value estimated provided?</span><span class="icon"
                            aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p class="py-4">The property value estimate is an approximate value and should not be considered
                            as an exact representation of
                            your property's true value. Reports may show a range of estimated values or a single figure,
                            usually with a
                            confidence level indicator. This estimate is calculated using an algorithm which is computer
                            generated and should
                            not replace a professional appraisal by a real estate agent for accurate market value
                            assessment. To get a more
                            accurate idea, consider speaking with a real estate agent for additional guidance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Faq Js -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll(".accordion button");

            function toggleAccordion() {
                const itemToggle = this.getAttribute('aria-expanded');

                // Close all other accordions
                for (let i = 0; i < items.length; i++) {
                    items[i].setAttribute('aria-expanded', 'false');
                    items[i].nextElementSibling.style.maxHeight = 0; // Close the content
                    items[i].nextElementSibling.style.opacity = 0;
                }

                // Toggle the clicked accordion
                if (itemToggle === 'false') {
                    this.setAttribute('aria-expanded', 'true');
                    this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + "px";
                    this.nextElementSibling.style.opacity = 1;
                }
            }

            items.forEach(item => item.addEventListener('click', toggleAccordion));
        });
    </script>
@endsection
