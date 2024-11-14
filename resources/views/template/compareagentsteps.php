<?php include 'Layout/header.php' ?>
<!--comapresteps -->
<div class="comparestepsbg">
    <div class="container comparestepsbox ">
        <!-- Step 1 -->
    <div class="step activebox" id="step-1">
        <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">Are you looking to sell or rent your property?</h1>
        <div class="d-flex sellbox align-items-center justify-content-center mx-auto">
            <div class="step1sellbox1 justify-content-center  d-flex align-items-center gap-md-5 gap-2" onclick="nextStep('step-2')">
                <div class="">
                    <img src="assets/img/salewhiteimg.png" alt=""  class="white-img">
                </div>
                <div>
                <p class="">Sell</p>
                </div>
            </div>
            <div data-bs-toggle="modal" data-bs-target="#exampleModal" class="step1sellbox2  justify-content-center  d-flex align-items-center gap-md-5 gap-2 ">
                <div>
                    <img src="assets/img/rentgreenimg.png" alt=""  class="green-img ">
                </div>
                <div>
                <p  class="">Rent</p>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-start gap-2 disclaimer">
            <img src="assets/img/infoicon.png" class="infoicon mt-1"/>
            <h2 class="stepboxheading02">Disclaimer: Agent Choice offers a 100% free, no-obligation service, with no affiliations or connections to any real estate agents</h2>
        </div>
    </div>
    </div>
    <!-- Step 2 -->
    <div class="step" id="step-2">
         <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">What type of property are you selling?</h1>
        <div class="d-flex  sellbox  align-items-center justify-content-center">
            <div class="step2sellbox1 justify-content-center  d-flex flex-column align-items-center" onclick="nextStep('step-3')">
                <div class="">
                    <img src="assets/img/step2home.png" alt=""  class="white-img">
                </div>
                <div>
                <p class="">House</p>
                </div>
            </div>
            <div class="step2sellbox2  justify-content-center  d-flex flex-column align-items-center" onclick="nextStep('step-3')">
                <div>
                    <img src="assets/img/step2unit.png" alt=""  class="green-img ">
                </div>
                <div>
                <p  class="">Unit / Townhouse</p>
                </div>
            </div>
            <div class="step2sellbox3  justify-content-center  d-flex flex-column align-items-center"  onclick="nextStep('step-3')">
                <div>
                    <img src="assets/img/step2land.png" alt=""  class="green-img ">
                </div>
                <div>
                <p  class="">Land</p>
                </div>
            </div>
            <div class="step2sellbox4  justify-content-center  d-flex flex-column align-items-center"  onclick="nextStep('step-3')">
                <div>
                    <img src="assets/img/step2other.png" alt=""  class="green-img ">
                </div>
                <div>
                <p  class="">Others</p>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-start gap-2 disclaimer">
            <img src="assets/img/info.png" class="infoicon mt-1">
            <h2 class="stepboxheading02">At Agent Choice we only compare the top performing agents and only suggest the top 3 agents for you </h2>
        </div>
    </div>
        </div>
   
    <!-- Step 3 -->
    <div class="step" id="step-3">
            <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">When are you looking to sell?</h1>
        <div class="d-flex  sellbox  align-items-center justify-content-center">
            <div class="step2sellbox1  py-4 justify-content-center  d-flex flex-column align-items-center" onclick="nextStep('step-4')">
                <div>
                <p class="step3text">ASAP</p>
                </div>
            </div>
            <div class="step2sellbox2  py-4 justify-content-center  d-flex flex-column align-items-center" onclick="nextStep('step-4')">
                <div>
                <p  class="step3text">3 Months</p>
                </div>
            </div>
            <div class="step2sellbox3 py-4 justify-content-center  d-flex flex-column align-items-center" onclick="nextStep('step-4')">

                <div>
                <p  class="step3text">6 Months</p>
                </div>
            </div>
            <div class="step2sellbox4 py-4 justify-content-center  d-flex flex-column align-items-center" onclick="nextStep('step-4')">
                <div>
                <p  class="step3text">12+ Months</p>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-start gap-2 disclaimer">
               <img src="assets/img/info.png" class="infoicon mt-1">
            <h2 class="stepboxheading02">At Agent Choice the top 3 agents are compared with days on the market, no of sales , average sale price and customer reviews </h2>
        </div>
    </div>
    </div>
       
    <!-- Step 4 -->
     <div class="step" id="step-4">
        <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">What is the property address?</h1>
        <div class="sellbox">
            <div class="step4sellbox1  d-flex ">
                <input type="text" class="step4input" placeholder="Type your address here" />
                <button class="step4btn" onclick="nextStep('step-5')">Continue</button>
            </div>
        </div>
        <div class="d-flex align-items-start gap-2 disclaimer">
            <img src="assets/img/info.png" class="infoicon mt-1">
            <h4 class="stepboxheading02">Your details will not be shared with agents without your consent</h2>
        </div>
    </div>
       
    </div>
    
    <!-- Step 5 -->
    <div class="step" id="step-5">
          <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">We need to verify your details to recommend agents</h1>
            <div class="d-flex align-items-start gap-2 mt-3">
                <img src="assets/img/info.png" class="infoicon mt-1"/>
                <h2 class="stepboxheading02">Your details will not be shared with agents without your consent</h2>
            </div>
        <div class="sellbox">
                <input type="text" class="step5input mt-1" placeholder="First Name" />
                <input type="text" class="step5input mt-2" placeholder="Last Name" />
                <input type="email" class="step5input mt-2" placeholder="Email Address" />
            <div class="step4sellbox1  d-flex w-100 mt-5">
                <input type="number" class="step4input" placeholder="Phone Number" />
                <button class="step4btn" onclick="nextStep('step-6')">Continue</button>
            </div>
        </div>
        <div class=" disclaimer">
            <h2 class="stepboxheading02 fw-normal">By continuing, I agree and accept the <a class="text-decoration-none" href="terms.php" style="color : #84C5BD;">  
                Terms and Conditions</a> and <a class="text-decoration-none" href="privacy.php" style="color : #84C5BD;">Privacy Policy</a> on this website.I agree that Agent Choice will contact me to discuss my cashback offer and provide me with the top 3 agents in my local area.</h2>
        </div>
    </div>
         
    </div>
    
    
    <!-- Step 6 -->
    <div class="step" id="step-6">
            <div class="stepsbox">
                <h1 class=" fw-bold stepboxheading01">Please verify your number</h1>
                <h2 class="stepboxheading02">Enter your 4 Digit Code</h2>
                <div class="sellbox">
                <div class="step4sellbox1 verification-container  d-flex flex-wrap w-100 gap-2">
                <input type="number" maxlength="1" class="step6input   text-center" placeholder=""
                aria-label="Digit 1" >
                <input type="number" maxlength="1" class="step6input  text-center" placeholder=""
                aria-label="Digit 2" >
                <input type="number" maxlength="1" class="step6input   text-center" placeholder=""
                aria-label="Digit 3">
                <input type="number" maxlength="1" class="step6input   text-center" placeholder=""
                aria-label="Digit 4">
                <button class="step6btn" onclick="nextStep('step-7')">Continue</button>
                </div>
            </div>
             <div class="disclaimer">
            <h3 class="stepboxheading03">The 4 digit code was sent to 0403517430</h3>
            <h2 class="stepboxheading02 fw-normal">If the entered the mobile number is incorrect please enter the correct mobile.<span class="fw-bold" style="color : #84C5BD;">  
                Change Number</span></h2>
        </div>
    </div>
    </div>
    <!--step 7 -->
    <div class="step" id="step-7">
        <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">Thank you - We have received your request </h1>
            <h2 class="stepboxheading02 fw-normal">Our dedicated team of Real Estate Specialists is currently reviewing the information you have provided and will be in touch with you shortly. Once your details have been verified, we will arrange introductions to the top 3 agents selected for you, providing comprehensive information to ensure their suitability for your specific needs and preferences.</h2>
            <h2  class="stepboxheading02 fw-normal">Please feel free to contact us on 1300 344 148 or email info@agentchoiuce.com.au in the meantime should you require further assistance.</h2>
            <div class="d-flex align-items-start gap-2 disclaimer">
            <img src="assets/img/infoicon.png" class="infoicon mt-1"/>
            <h2 class="stepboxheading02 fw-normal">Disclaimer: Agent Choice offers a 100% free, no-obligation service to homeowners and maintains complete independence with no affiliations or associations to any real estate agents.
            </h2>
            </div>
                <button class="cashbackbtn" onclick="nextStep('step-8')">Cashback Calculator</button>
    </div>
    </div>
    <!--step 8 -->
    <div class="step" id="step-8">
        <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">Cashback Calculator</h1>
            <h2 class="stepboxheading02 fw-normal"> Enter the approximate value of your property.</h2>
            <div class="d-flex aling-items-center flex-column flex-md-row justify-content-center gap-md-3 mt-3">
                <button class="step8btn1">$1,500,000</button>
                <h2 class="step8equal mt-3 text-center">=</h2>
                <div class="position-relative w-100">
                <button class="step8btn2">$2,250-$3,000</button>
                <button class="step8cashbackbtn">Your cashback amount</button>
                </div>
            </div>
            <div class="d-flex align-items-start gap-2 mt-5 mt-lg-5">
            <img src="assets/img/info.png" class="infoicon mt-1"/>
            <h2 class="fw-medium h2 mt-1">Calculated using a minimum commission rate of 1.5% and a maximum of 2.0%.
            </h2>
            </div>
          
    </div>
    </div>
        
    
    

    <!-- Add more steps as needed -->
    <div>
        <div class="d-flex flex-column align-items-start justify-content-start col-12 col-sm-2 progressdiv visible">
            <progress id="file" value="0" max="100"></progress>
            <div class="d-flex align-items-center">
            <p class=" steptext">Step <span class="pageactive"></span> <span class="pagenoactive"></span></h1>
            </div>
        </div>
    </div>
    <div class="back-button-container d-flex align-items-center justify-content-end gap-2 visible ">
    <a class="text-decoration-none" href="javascript:void(0);" onclick="prevStep('step-' + (currentStep - 1))">
        <img class="infoicon" src="assets/img/arrowbacksteps.png"/>
    </a>
    <h2 class="steptext fw-semibold mb-0 mt-1">Go Back</h2></div>

</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0 d-flex align-items-end justify-content-end ">
        <!--<button type="button" class="close" ></button>-->
        <i class="fa-solid fa-xmark btn" data-bs-dismiss="modal" aria-label="Close"></i>
        
      </div>
      <div class="modal-body">
        <h2 class="stepboxheading02 text-center">Sorry this Function is currently unavailable. <br> If you are looking to sell or compare top local agents.</h2>
     <button class="modalbtn fw-semibold mx-auto d-flex">Click here</button>
      </div>
    </div>
  </div>
</div>


<script>
    let currentStep = 1;
const totalSteps = 8;

function updateProgress() {
    const progressElement = document.getElementById('file');
    const progress = document.querySelector('.progressdiv');
    const pageNumberElement = document.querySelector('.pageactive');
    
    if (currentStep === 7 || currentStep === 8 ) { // Adjusted to check for step 8
        progress.classList.add('btnhidden');
        progress.classList.remove('btnvisible');
    } else {
        progress.classList.add('btnvisible');
        progress.classList.remove('btnhidden');
        const stepPercentage = ((currentStep - 0) / (totalSteps - 0)) * 100;
        progressElement.value = stepPercentage;
        pageNumberElement.innerHTML = `${currentStep} of <span class="pagenoactive">7</span>`;
    }
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
    document.querySelectorAll('.step').forEach(function (stepElement) {
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
    document.querySelectorAll('.step').forEach(function (stepElement) {
        stepElement.classList.remove('activebox');
    });

    // Show the selected step
    document.getElementById(stepId).classList.add('activebox');
    
    // Decrement step and update progress bar
    if (currentStep > 1 && currentStep <= totalSteps) {
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
<?php include "Layout/footer.php" ?>




