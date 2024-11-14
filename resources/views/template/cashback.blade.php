@extends('template.layout.main')

@section('section')
    <aside class="roboto-light">
        <div class="cashsec1 ">
            <div class="container section-padding roboto-regular">
                <h1 class="fw-bold ">Pick an Agent <br> <span style="color : #8EC2BA;">Get Rewarded </span></h1>
                <hr class="aboutsec1line ">
                <p class="fw-normal">“Cashback Explained. Find <br> out your cashback reward”
                </p>
            </div>
        </div>
        <aside class="cashbg">
            <div class="cashsec2 ">
                <div class="container section-padding">
                    <div class="">
                        <h1 class="fw-semibold">How does the cashback work?</h1>
                        <p class="mt-3">Simply search and compare the top performing realestate agents in your local area
                            via
                            our website and
                            pick an agent of your choice for the sale of your home. Once you have connected with the agent
                            via
                            our platform at settlement you will receive a cashback of up to $5000. No questions asked.
                        </p>
                        <p class="p-0 mt-4">Here’s an
                            overview of how the cashback process works:</p>
                        <div>
                            <div class="d-flex align-items-start gap-4">
                                <img src="{{ asset('template/assets/img/cashbackarrow.png') }}" class="casharrow" />
                                <p> Vendor (Seller) begins by searching and comparing profiles of top performing real estate
                                    agents
                                    available in their local area via our platform.</p>
                            </div>
                            <div class="d-flex align-items-start gap-4">
                                <img src="{{ asset('template/assets/img/cashbackarrow.png') }}" class="casharrow" />
                                <p> After selecting an agent that suits their
                                    requirements, vendor proceeds to connect with the chosen agent through our platform.</p>
                            </div>
                            <div class="d-flex align-items-start gap-4">
                                <img src="{{ asset('template/assets/img/cashbackarrow.png') }}" class="casharrow" />
                                <p> Once the vendor and the agent have been successfully introduced and connected through
                                    our
                                    platform,
                                    the agent
                                    proceeds to sell the property. Upon sale of the property, the vendor will receive a
                                    cashback
                                    incentive of up to $5000 from Agent choice.</p>
                            </div>
                            <div class="d-flex align-items-start gap-4">
                                <img src="{{ asset('template/assets/img/cashbackarrow.png') }}" class="casharrow" />
                                <p>
                                    The cashback amount is provided to the vendor as a token
                                    of appreciation for their engagement with Agent choice.</p>
                            </div>
                        </div>
                        <p class="mt-md-4 pb-md-5">This cashback program is our way of rewarding clients for choosing
                            quality real estate
                            professionals
                            through our <br> platform and aims to enhance the overall client experience in the real estate
                            industry.
                        </p>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-7">
                            <h1 class="fw-semibold">If I chose to use my own agent can <br> I still receive the cashback?
                            </h1>
                            <p class="mt-4 p-0">Certainly! Our cashback offer extends to any real estate agent you choose to
                                engage with through our platform. While we highly recommend selecting from our list of top 3
                                high performing agents for the best results, you retain the flexibility to opt for any agent
                                of
                                your choice via our platform and still receive the cashback incentive.
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset('template/assets/img/cashbackimg.jpg') }}" class="img-fluid cashbackimg" alt="">
                        </div>
                    </div>
                    <h1 class="fw-semibold mt-3">How does Agent Choice manage to offer a <br> cashback program up to $5000
                        to clients?</h1>
                    <p class="mt-4"> At Agent Choice, our core mission revolves around supporting families during
                        challenging
                        times. To make
                        a
                        tangible impact and assist individuals facing obstacles, we have introduced a cashback program of up
                        to
                        $5000. This program is made possible through our unique operational model. </p>
                    <p> When a homeowner engages with our
                        platform and successfully sells their property through one of our recommended agents or an agent of
                        their
                        choice we offer a generous cashback incentive. This cashback, which can amount to up to $5000,
                        serves as
                        a
                        token of appreciation for choosing Agent Choice and rewards clients for their trust in our services.
                    </p>
                    <p> To
                        sustain this cashback program, Agent Choice operates on a standard industry referral fee structure.
                        We
                        receive a 20% referral fee from the total commission earned by the real estate agent for a
                        successful
                        property sale facilitated through our platform. This fee structure allows us to provide our services
                        to
                        homeowners completely free of charge, ensuring that you receive support without any financial
                        burden.
                    </p>
                    <p> By
                        leveraging this fee structure, we are able to allocate a portion of the referral fees received to
                        offer
                        the
                        cashback incentive to clients who engage with agents through our platform. This not only fosters a
                        sense
                        of
                        community and mutual support but also ensures that your experience with Agent Choice is both
                        fulfilling
                        and
                        advantageous.</p>
                    <p class="m-0">
                        At Agent Choice, we are committed to transparency and dedicated to making a positive impact in
                        the lives of our clients. If you have any further questions or require additional information about
                        our
                        cashback program, please do not hesitate to reach out to our team.
                    </p>
                    <h1 class="fw-semibold mt-3">Calculate your Cashback</h1>
                    <p>Estimate your commission accurately with our Commission Calculator</p>
                    <div class=" mx-auto mt-3 cont-5000 " style="max-width: 1370px; border-radius: 16px;"
                        bis_skin_checked="1">
                        <div class="row border m-auto  cont-5000-row"
                            style="border-radius: 10px; background-color: white; max-width: 1295px; box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;  "
                            bis_skin_checked="1">
                            <div class="left-column px-md-5 col-md-7 d-flex flex-column justify-content-center"
                                style="max-width: 773px; height: 200px; padding-top: 25px;" bis_skin_checked="1">
                                <label for="" class="plus-jakarta-sans-regular"
                                    style="font-size: 22px; font-weight: bold; margin-bottom: 0px;">Property Sale/Buy
                                    Price</label>
                                <input type="text" class="form-control border mt-3" style="height: 50px; width : 100%;"
                                    placeholder=" Enter Sale Price">
                                <a class="text-decoration-none" href="compareagentsteps.php">
                                    <button class="btn text-light border-0 "
                                        style="background-color: #8ec2ba; height: 45px;">Check Cashback</button>
                                </a>
                            </div>

                            <div class="right-column col-md-5 rounded"
                                style="max-width: 498px; height: 200px; background-color: #8ec2ba; padding-top: 25px; border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important;"
                                bis_skin_checked="1">
                                <p class="plus-jakarta-sans-regular text-center text-light"
                                    style="font-size: 22px; line-height: 31px; font-weight: 400;">To find your cashback
                                    amount <br> answer 6 quick questions <br> (under 60 seconds) </p>
                                <h2 class="text-light text-center poly-regular fw-bold" style="font-size: 64px; ">$5,000
                                </h2>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Faq Section -->
            <div class="faqSec" id="cashbackfaq">
                <div class="container section-padding">
                    <h2 class="pt-5 mb-5">Frequently Asked Questions - Cashback</h2>
                    <!--<p class="firstFaq">Aenean quis est erat. Pellentesque pretium convallis ligula, vitae euismod nisl vehicula-->
                    <!--    non. <br>In felis-->
                    <!--    leo, faucibus vel sagittis pharetra, varius ullamcorper quam. Suspendisse potenti.</p>-->
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Is there a
                                    limit to the cashback amount I can receive?</span><span class="icon"
                                    aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p class="py-4">Yes, the cashback amount can be up to $5000.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">What is the
                                    purpose of the cashback program?</span><span class="icon"
                                    aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p class="py-4">Our cashback program aims to support families during challenging times and
                                    reward clients for choosing quality real estate professionals through our platform,
                                    enhancing the overall client experience.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Are there
                                    any conditions or questions asked to receive the cashback?</span><span class="icon"
                                    aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p class="py-4">No, there are no conditions or questions. You simply need to connect with
                                    an agent through our platform and complete the property sale to receive your cashback.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">What happens
                                    if my property does not sell?</span><span class="icon"
                                    aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p class="py-4">The cashback incentive is contingent upon the successful sale of your
                                    property. If your property does not sell, you will not receive the cashback.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">What If I
                                    have already spoken with an agent?</span><span class="icon"
                                    aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p class="py-4">That’s totally fine, provided no home appraisal or agency agreement has
                                    been locked in with the agent within the last 90 days of, you can proceed to connect and
                                    formalise the engagement of your preferred agent through our platform. In the event you
                                    have already made a connection with an agent in the form of a home appraisal or a signed
                                    agreement in the last 90 days of using this platform, you will not be eligible for the
                                    Cashback unfortunately.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Do the
                                    recommended real estate agents charge additional fees or pass on the referral fee to
                                    me?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p class="py-4">All agents are required to comply with our terms and conditions which
                                    strictly prohibit them from passing on the referral fee to you, the vendor. You can be
                                    rest assured that there will be no extra charges imposed on you due to our
                                    recommendation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

    </aside>
    <script>
        var video = document.getElementById('myVideo');
        var videoPlayButton = document.querySelector('.videoplaybtn');

        videoPlayButton.addEventListener('click', function() {
            if (video.classList.contains('videohide')) {
                video.classList.remove('videohide');
                video.classList.add('videoshow');
                document.getElementById('video_play').classList.remove('videoshow');
                document.getElementById('video_play').classList.add('videohide');
                video.play().catch(function(error) {
                    console.log('Play failed:', error);
                });
            } else {
                video.classList.remove('videoshow');
                video.classList.add('videohide');
                video.pause();
                document.getElementById('video_play').classList.remove('videohide');
                document.getElementById('video_play').classList.add('videoshow');
            }
        });
    </script>



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
