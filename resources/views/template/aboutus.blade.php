@extends('template.layout.main')

@section('section')
    <aside class="roboto-light">
        <div class="aboutsec1">
            <div class="container section-padding  roboto-regular">
                <h1 class="fw-bold  about-sec-1">About Us</h1>
                <hr class="aboutsec1line  p-0">
                <p class=" about-sec-p">“Helping everyday Australians <br> as they embrace this <br> significant chapter
                    <br> in their lives”
                </p>
            </div>
        </div>
        <div class="aboutsec2 cashbg">
            <div class="container section-padding">
                <div class="">
                    <h1 class="aboutsec2-h1">Agent Choice provides a 100% free no obligation service to home owners and is
                        entirely independent,
                        with
                        no
                        affiliations to any real estate agent or agencies.</h1>
                </div>
                <div class="row">
                    <div class="col-lg-8 ">
                        <p class="aboutsec2-p">Agent Choice is a mission driven initiative focused on making a meaningful
                            difference in the lives of everyday Australians. As an independent Australian company, we are
                            steadfastly committed to empowering homeowners to make well informed decisions when choosing a
                            real estate agent. We accomplish this through unbiased performance assessments of agents,
                            simplifying the process of identifying top local agents, and enhancing the chances of achieving
                            optimal sale prices.
                        </p>
                        <p class=" mt-3 p-0 aboutsec2-p">Agent Choice stands as a beacon of support for those navigating the
                            complexities
                            of selling a
                            home,
                            ensuring that every family receives the assistance they deserve during this pivotal chapter of
                            their lives.
                        </p>
                    </div>
                    <div class="col-lg-4 m-0 p-0">
                        <img src="{{ asset('template/assets/img/Assets/aboutimg1.png') }}" class="img-fluid aboutsec2-img" alt="">
                    </div>
                </div>
                <div class="row my-3 flex-column-reverse flex-lg-row d-flex">
                    <div class="col-lg-5">
                        <img src="{{ asset('template/assets/img/aboutpageimg2.jpg') }}" class="img-fluid aboutsec2-img mt-md-2" alt="">
                    </div>
                    <div class="col-lg-7 ">
                        <h2 class="aboutsec2-h2">“Supporting everyday Australian families by giving back to the community
                            and providing guidance
                            in their real estate journey”
                        </h2>
                        <p class=" mt-3 p-0 aboutsec2-p">At Agent Choice, we are driven by a heartfelt mission to stand by
                            families in
                            times of need. By offering a cashback up to $5,000 we aim to make a meaningful difference in the
                            lives of those facing challenges. We recognize the emotional weight and complexity involved in
                            selecting a real estate agent, and we strive to lighten this burden.
                        </p>
                    </div>
                </div>
                <div class="row my-2 my-md-4  py-2 py-md-4">
                    <div class="col-lg-8">
                        <h3 class="aboutsec2-h3"><span style="color:#8EC2BA;">What makes us</span> different?</h3>
                        <p class="aboutsec2-p mt-4">Agent Choice sets itself apart from other agent comparison platforms
                            through two distinct
                            features. Firstly, we exclusively recommend the top 3 performing agents in your local area,
                            ensuring that you receive the highest quality service and expertise available in the industry.
                            Unlike our competitors who may prioritize agents subscribed to their platforms, we prioritize
                            excellence and guarantee that you work with the best agents in the business.
                        </p>
                        <p class=" mt-4 p-0 aboutsec2-p">Secondly, Agent Choice stands out by giving back to the community.
                            When a vendor
                            connects and sells their property through our platform, we offer a cashback incentive of up to
                            $5000. This unique feature not only allows you to benefit from the expertise of top agents but
                            also provides you with a valuable cashback reward, making your experience with Agent Choice both
                            rewarding and beneficial.
                        </p>
                    </div>
                    <div class="col-lg-4  mx-0">
                        <img src="{{ asset('template/assets/img/Assets/aboutimg3.png') }}" class="img-fluid " alt="">
                    </div>
                </div>
                <h1 class="pb-5 m-0 aboutsec2-h1">“Making a difference in the lives of everyday Australian families”</h1>
            </div>
        </div>
    </aside>
@endsection
