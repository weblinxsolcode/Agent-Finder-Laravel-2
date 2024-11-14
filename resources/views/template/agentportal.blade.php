@extends('template.layout.main')

@section('section')
    <aside class="roboto-light">
        <div class="agentportalsec1">
            <div class="container section-padding roboto-regular">
                <h1 class="fw-bolder agent-sec-h1">Elevate Your Game. <br> <span style="color : #8EC2BA;">Dominate the
                        market.</span></h1>
                <hr class="aboutsec1line ">
                <p class="fw-normal">Unleash Your Real Estate Potential:<br> Secure Listings and Elevate Your Business!</p>
                <a href="{{ route('registration') }}" class="text-decoration-none">
                    <button class="modalbtn fw-semibold mt-4">Register Now</button>
                </a>
            </div>
        </div>

        <!--sec2-->
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
        <!--sec3-->
        <div class="cashbg">
            <div class="container section-padding agentportalsec2">
                <h1 class="agentportalsec2-h1">The Agent Choice Advantage</h1>
                <div class="agentportalsec2boxes d-flex flex-column gap-4 py-lg-5 py-3">
                    <div class="row mx-0 px-0 agentportalsec2box align-items-center">
                        <div class="col-md-8 mx-0 px-0 py-3">
                            <h1>Top-tier Premier <span>Leads</span></h1>
                            <hr class="agentportalsec2line">
                            <p class="fw-normal">We connect you with highly qualified sellers who are genuinely <br>
                                prepared to enter the market. Rest assured, you will only engage <br> with 100% motivated
                                vendors, ensuring optimal opportunities for <br> your success.</p>
                        </div>
                        <div class="col-md-4 mx-0 px-0 ">
                            <img src="{{ asset('template/assets/img/Assets/agentsec1.png') }}" class="img-fluid" />
                        </div>
                    </div>
                    <div class="row mx-0 px-0 agentportalsec2box align-items-center">
                        <div class="col-md-7 col-lg-8 mx-0 px-0 py-3">
                            <h1>Elite Local <span>Agents</span></h1>
                            <hr class="agentportalsec2line">
                            <p class="fw-normal">At Agent Choice, we prioritize connecting you with the top three <br>
                                agents in your area. If you are recognized as a high-performing <br> agent, you can expect
                                guaranteed leads from vendors seeking to <br> engage with the best.</p>
                        </div>
                        <div class="col-md-4 mx-0 px-0">
                            <img src="{{ asset('template/assets/img/Assets/agentsec2.png') }}" class="img-fluid" />
                        </div>
                    </div>
                    <div class="row mx-0 px-0 agentportalsec2box align-items-center">
                        <div class="col-md-8 mx-0 px-0 py-3">
                            <h1>Agent Portal <span>Dashboard</span></h1>
                            <hr class="agentportalsec2line">
                            <p class="fw-normal">Revamp your dashboard to start receiving high-quality leads <br> tailored
                                to your expertise. By making this update, you'll unlock a <br> range of new opportunities
                                that can significantly enhance your <br> business growth and client engagement.</p>
                        </div>
                        <div class="col-md-5 col-lg-4 mx-0 px-0">
                            <img src="{{ asset('template/assets/img/Assets/agentsec3.png') }}" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Most Common Section Starts Here -->
        <div class="mostCommon">
            <div class="container section-padding">
                <h2 class="text-white text-center ">
                    Why Partner with Agent Choice?
                </h2>

                <div class="row d-flex gap-md-0 gap-3 py-4">
                    <div class="col-md-4 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header  pb-2 p-0 gap-3 d-flex  flex-md-row ">
                                    <img src="{{ asset('template/assets/img/agentportalimg1.png') }}"
                                        class="img-fluid agent-portalimg-1" alt="">
                                    <h3 class="fw-bolder mb-0">Increased Visibility</h3>
                                </div>
                                <p class="card-text mt-3">Being featured as a top three agent boosts your visibility among
                                    vendors, enhances your reputation, and builds trust with potential clients, leading to
                                    more listings and inquiries for your business.

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header  pb-2 p-0 gap-1 align-items-center d-flex flex-row">
                                    <img src="{{ asset('template/assets/img/agentportalimg2.png') }}"
                                        class="img-fluid agent-portalimg-2" alt="">
                                    <h3 class="fw-bolder mb-0"> Competitive Advantage</h3>
                                </div>
                                <p class="card-text mt-3">Partnering with Agent Choice helps you stand out in a competitive
                                    market. As a recognized top local agent, you become a trusted expert, attracting more
                                    vendors and increasing your sales opportunities
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header pb-2 p-0 gap-1 align-items-center d-flex  flex-row">
                                    <img src="{{ asset('template/assets/img/agentportalimg3.png') }}"
                                        class="img-fluid agent-portalimg-3" alt="">
                                    <h3 class="fw-bolder mb-0">Win-Win Partnerships</h3>
                                </div>
                                <p class="card-text mt-3">The cashback incentive of up to $5,000 is a game-changer for you
                                    and your vendors. This enticing offer attracts more vendors, helping you secure new
                                    business and boost earnings. Building these relationships can lead to long- term
                                    connections and valuable referrals, enhancing your network and growth potential.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Most Common Section Ends Here -->
        <div class="sec-3 py-md-3  ">
            <div class="container stepbox section-padding mt-md-4 pt-5 pt-md-3">
                <h1 class="step-box-h2 p-0 m-0">The 3 Step Process</h1>
                <div class="d-flex flex-wrap  gap-md-2 my-0 align-items-center justify-content-center step-box ">
                    <div class="position-relative d-flex">
                        <img src="{{ asset('template/assets/img/Step1.png') }}" class="img-fluid stepboximg"
                            alt="">
                        <div class="img_text px-3 mt-2 px-lg-4">
                            <div class="d-flex justify-content-center mt-3 mx-auto align-items-center gap-2">
                                <img src="{{ asset('template/assets/img/stepboximg1.png') }}" class="stepicon"
                                    alt="">
                                <h4 class="mb-0"> Create your profile</h4>
                            </div>

                            <p class="text-center" style="font-size : 11px">Update your profile with your details , agency
                                information , and fee structure. We'll share this during the introduction to homeowners for
                                comparison.
                            </p>

                        </div>
                    </div>
                    <div class="position-relative d-flex ">
                        <img src="{{ asset('template/assets/img/Step2.png') }}" class="img-fluid stepboximg"
                            alt="">
                        <div class="img_text px-3 px-lg-4 mt-3 pb-3">
                            <div class="d-flex justify-content-center mt-3  mx-auto align-items-center  gap-2">
                                <img src="{{ asset('template/assets/img/stepboximg2.png') }}" class="stepicon"
                                    alt="">

                                <h4 class="mb-0" style="color : #2E353C"> Connect with your vendor</h4>
                            </div>
                            <p class="text-center" style="font-size : 11px">Following the introduction, we'll provide the
                                vendor's details. Upon accepting our terms , you will not receive leads through our Agent
                                Portal Dashboard. </p>
                        </div>
                    </div>
                    <div class="position-relative d-flex">
                        <img src="{{ asset('template/assets/img/Step3.png') }}" class="img-fluid stepboximg"
                            alt="">
                        <div class="img_text px-3 mt-2  px-lg-4">
                            <div class="d-flex  justify-content-center mx-auto align-items-center gap-2">
                                <img src="assets/img/stepboximg3.png" class="stepicon" alt="">
                                <h4 class="mb-0" style="color :#A3A3A3">Pay at settlement</h4>
                            </div>
                            <p class="text-center">Agent Choice will only receive the <br> referral fee upon settlement,
                                once the <br> property has sold. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="partnersec">
            <div class="section-padding container  d-flex flex-column align-items-end  justify-content-end">
                <div class="form">
                    <h1>Partner with us</h1>
                    <p>The Elite Agents Platform</p>
                    <form class="partnerform d-flex flex-column align-items-start" action="{{ route('store.contact') }}" method="POST">
                        @csrf
                        <input type="text" placeholder="Name" name="name" required/>
                        <input type="email" placeholder="Email" name="email" required/>
                        <input type="number" placeholder="Phone" name="phone" required/>
                        <input type="text" placeholder="Agency" name="description" required/>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="faqSec cashbg">
            <div class="container section-padding">
                <h2 class="pt-5 mb-5">Frequently Asked Questions - By Agents</h2>
                <div class="accordion mt-5">
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why should I
                                an agent use Agent Choice?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p class="pt-4">Agent Choice differentiates itself from other agent comparison platforms
                                through two key features. Firstly, we exclusively recommend only the top three performing
                                agents in each local area, ensuring that vendors receive the highest quality service and
                                expertise in the industry unlike our competitors who may prioritise agents based on
                                subscription or registration status on their platform.</p>
                            <p class="pt-2">Additionally, our competitors often recommend any agent registered on their
                                platforms, which can dilute the quality of service. In contrast, our approach ensures that
                                only the top three agents in each locality are introduced to potential clients, maximising
                                your opportunities for success.</p>
                            <p class="pb-4 mt-2">Secondly, Agent Choice is committed to giving back to the community. When
                                vendors successfully connect and sell their property through our platform, we offer a
                                cashback incentive of up to $5,000. This unique feature not only attracts vendors but also
                                fosters strong connections with our elite agents, making Agent Choice the preferred platform
                                for exceptional real estate representation.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Will I
                                receive a preferential service when I partner with Agent Choice?</span><span class="icon"
                                aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p class="py-4">At Agent Choice, we prioritise fairness and transparency in our agent
                                selection process. Unlike our competitors, our Agent Portal does not operate on a
                                subscription model, meaning that inclusion does not confer any preferential treatment when
                                we recommend the top 3 agents in a locality. The portal serves solely as a platform for
                                agents to log in, submit their information, and agree to our terms and conditions as part of
                                the client introduction process. This ensures that all agents are evaluated on merit rather
                                than subscription or registration status, allowing vendors to choose from the top performers
                                in their area.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">What if I
                                have already connected with a vendor?</span><span class="icon"
                                aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p class="pt-4">If you’ve already established a connection with a vendor, there’s no need to
                                worry. We value your existing relationships and want to support your efforts. As long as you
                                can provide evidence of your communication with the vendor within 90 days prior to receiving
                                the referral, you will be exempted from paying the referral fee to Agent Choice. </p>
                            <p class="pb-4 mt-2">This policy is designed to ensure that you can continue to nurture and
                                leverage your pre-existing client relationships without any additional costs. Simply submit
                                the necessary evidence, and we’ll honor your prior engagement with the vendor. Our goal is
                                to foster a collaborative environment that respects your hard work while still connecting
                                vendors with the elite agents they deserve.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Once I
                                connect with a vendor through Agent Choice, do I need to submit any documentation?
                            </span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p class="pt-4">Absolutely! To ensure a smooth process, we do have a two-step verification
                                system in place. We’ll need a copy of the agency agreement to confirm the commission you’re
                                charging. Additionally, we will verify this information with the vendor to ensure
                                consistency with what’s outlined in the agreement.</p>
                            <p class="pb-4 mt-2">This process helps us maintain transparency and trust for both agents and
                                vendors, ensuring everyone is on the same page. We appreciate your cooperation and look
                                forward to supporting your success!</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Is the
                                referral fee negotiable?</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p class="pt-4">We appreciate your question! While we understand that negotiations can be a
                                part of many business dealings, our referral fee is set at an industry standard rate of 20%
                                plus GST for each successful property sale. This fee is payable on or after settlement.</p>
                            <p class="pb-4 mt-2">You’ll receive our invoice three days prior to settlement, and it will be
                                due on the settlement date or within three business days afterward. This structure helps us
                                maintain consistency and ensures our services remain top-notch. Thank you for your
                                understanding, and we’re here to support you every step of the way!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </aside>
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
