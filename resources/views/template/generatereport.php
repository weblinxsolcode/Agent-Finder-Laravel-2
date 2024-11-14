<?php include 'Layout/header.php' ?>
<style>
    
</style>

<!--comapresteps -->
<div class="comparestepsbg">
    <div class="container comparestepsbox">
        <!-- Step 1 -->
    <div class="step activebox" id="step-1">
        <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">Do you own the property?</h1>
        <div class="d-flex sellbox align-items-center justify-content-center mx-auto">
            <div class="step1sellbox1 justify-content-center  d-flex align-items-center gap-md-5 gap-2" onclick="nextStep('step-2')">
                <div class="">
                    <img src="assets/img/Assets/Icons/reporticon2.png" alt=""  class="white-img">
                </div>
                <div>
                <p class="">Yes</p>
                </div>
            </div>
            <div class="step1sellbox2  justify-content-center  d-flex align-items-center gap-md-5 gap-2 ">
                <div>
                    <img src="assets/img/Assets/Icons/reporticon1.png" alt=""  class="green-img">
                </div>
                <div>
                <p  class="">No</p>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-start gap-2 disclaimer">
            <img src="assets/img/infoicon.png" class="infoicon mt-1"/>
            <h2 class="stepboxheading02">Disclaimer: Whilst all reasonable effort is made to ensure the information in this publication is current, CoreLogic does not warrant the accuracy or completeness of the data and information contained in this publication.</h2>
        </div>
    </div>
    </div>
    <!-- Step 2 -->
    <div class="step" id="step-2">
         <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">Are you looking to sell?</h1>
        <div class="d-flex  sellbox  align-items-center justify-content-center">
            <div class="step2sellbox1 justify-content-center  d-flex flex-column align-items-center" onclick="nextStep('step-3')">
                <div class="">
                    <img src="assets/img/Assets/Icons/step2icon1.png" alt=""  class="white-img">
                </div>
                <div>
                <p class="fw-bold">Yes</p>
                </div>
            </div>
            <div class="step2sellbox2  justify-content-center  d-flex flex-column align-items-center" onclick="nextStep('step-3')">
                <div>
                    <img src="assets/img/Assets/Icons/step2icon2.png" alt=""  class="green-img ">
                </div>
                <div>
                <p class="fw-bold">No</p>
                </div>
            </div>
            <div class="step2sellbox3  justify-content-center  d-flex flex-column align-items-center"  onclick="nextStep('step-3')">
                <div>
                    <img src="assets/img/Assets/Icons/step2icon3.png" alt=""  class="green-img ">
                </div>
                <div>
                <p  class="fw-bold">Refinance</p>
                </div>
            </div>
            <div class="step2sellbox4  justify-content-center  d-flex flex-column align-items-center"  onclick="nextStep('step-3')">
                <div>
                    <img src="assets/img/Assets/Icons/step2icon4.png" alt=""  class="green-img ">
                </div>
                <div>
                <p  class="fw-bold">Just Curious</p>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2 disclaimer">
            <i class="fa-solid fa-bars"></i>
            <h2 class="stepboxheading02 mt-2">Please select one of the option above. </h2>
        </div>
    </div>
        </div>
   

       
    <!-- Step 3 -->
     <div class="step" id="step-3">
        <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">Where should we email the report to?</h1>
        <div class="sellbox">
            <div class="step4sellbox1  d-flex w-100 ">
                <input type="email" class="step4input" placeholder="Please enter your email address" />
                <button class="step4btn" onclick="nextStep('step-4')">Continue</button>
            </div>
        </div>
         <div class="d-flex align-items-start gap-2 disclaimer">
            <img src="assets/img/info.png" class="infoicon mt-1"/>
            <h2 class="stepboxheading02">Your details will not be shared with agents without your consent</h2>
        </div>
    </div>
       
    </div>
    
    <!-- Step 4 -->
    <div class="step" id="step-4">
          <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">Who should we address the report to?</h1>
            
        <div class="sellbox">
                <input type="text" class="step5input mt-1" placeholder="Please enter your first name" />
            <div class="step4sellbox1  d-flex w-100 mt-2">
                <input type="text" class="step4input" placeholder="Please enter your last name" />
                <button class="step4btn" onclick="nextStep('step-5')">Continue</button>
            </div>
        </div>
        <div class="d-flex align-items-start gap-2 disclaimer">
            <img src="assets/img/info.png" class="infoicon mt-1"/>
            <h2 class="stepboxheading02">Your details will not be shared with agents without your consent</h2>
        </div>
    </div>
         
    </div>
    
    
       <!-- Step 5 -->
     <div class="step" id="step-5">
        <div class="stepsbox">
            <h1 class=" fw-bold stepboxheading01">Finally, please enter your Mobile Number?</h1>
        <div class="sellbox">
            <div class="step4sellbox1  d-flex w-100 ">
                <input type="number" class="step4input" placeholder="Please enter your mobile number here" />
                <button class="step4btn" onclick="nextStep('step-6')">Continue</button>
            </div>
        </div>
        <div class="d-flex align-items-start gap-2 mt-md-4 mt-2">
            <img src="assets/img/info.png" class="infoicon mt-1"/>
            <h2 class="stepboxheading02 m-0">Your details will not be shared with agents without your consent</h2>
        </div>
        <h2 class="stepboxheading02 mt-3 mb-md-5 mb-2">By continuing, I agree and accept the <a class="text-decoration-none" href="terms.php" style="color : #84C5BD;">  
                Terms and Conditions</a> and <a class="text-decoration-none" href="privacy.php" style="color : #84C5BD;">Privacy Policy</a> on this website. </h2>
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
            <h1 class=" fw-bold stepboxheading01">Thank you for submitting your details.</h1>
            <h2 class="stepboxheading02 fw-bold">You should receive a property report shortly.</h2>
            <h2  class="stepboxheading02">If you do not receive an email shortly please check your spam/junk folder.</h2>
            <div class="mt-md-5 mt-3">
                <h2 class="stepboxheading02">Speak to a top performing agent in your local area for an accurate home appraisal.</h2>
            </div>
            <a class="text-decoration-none" href="compareagentsteps.php">
            <button class="cashbackbtn mt-2">Speak to an Agent</button>
            </a>
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
    <div class="back-button-container d-flex align-items-center justify-content-end gap-2 visible">
    <a class="text-decoration-none" href="javascript:void(0);" onclick="prevStep('step-' + (currentStep - 1))">
        <img class="infoicon" src="assets/img/arrowbacksteps.png"/>
    </a>
    <h2 class="steptext fw-semibold mb-0 mt-1">Go Back</h2></div>

</div>
</div>



<script>
    let currentStep = 1;
const totalSteps = 7;

function updateProgress() {
    const progressElement = document.getElementById('file');
    const progress = document.querySelector('.progressdiv');
    const pageNumberElement = document.querySelector('.pageactive');
    
    if (currentStep === 7) {
        progress.classList.add('btnhidden');
        progress.classList.remove('btnvisible');
    } else {
        progress.classList.add('btnvisible');
        progress.classList.remove('btnhidden');
        const stepPercentage = ((currentStep - 0) / (totalSteps - 0)) * 100;
        progressElement.value = stepPercentage;
        pageNumberElement.innerHTML = `${currentStep} of <span class="pagenoactive">${totalSteps}</span>`;
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
    } else if (currentStep === totalSteps) {
        currentStep = 7; // Manually set to step 7 when trying to go beyond totalSteps
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
    if (currentStep > 1 && currentStep <= 6) {
        currentStep--;
    } else if (currentStep === 7) {
        currentStep = 6; // Reset to step 6 when going back from step 7
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




