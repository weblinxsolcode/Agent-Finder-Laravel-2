<?php

use App\Http\Controllers\IndexController;
use App\Http\Middleware\AgentMiddleware;
use Illuminate\Support\Facades\Route;

/*** Complete Routes For Web ***/

// Route For Agent Login
Route::get('/agent-login', [IndexController::class, "login"])->name("agent.login");

// Route For Agreement Review
Route::get('/agreement-view', [IndexController::class, "agreementView"])->name("agreement");

// Route For Agent Login Check
Route::post('/agent-login-check', [IndexController::class, "loginCheck"])->name("agent.login.check");

// Route For URL Login
Route::get('/url-login/{id}', [IndexController::class, "urlLogin"])->name("url.login");

// Route For Home Page
// Route::get('/', [IndexController::class, "home"])->name("home");
Route::get('/', function () {
    return redirect()->route("agent.login");
})->name("home");

// Route For Testing Email
Route::get('/test', [IndexController::class, "testingMail"]);

// Route For Agent Portal
Route::get('/agent', [IndexController::class, "index"])->name('agent.home');

// Route For About Us
Route::get('/about-us', [IndexController::class, "aboutUs"])->name("about.us");

// Route For Cash back
Route::get('/cash-back', [IndexController::class, "cashBack"])->name("cash.back");

// Route For Property Report
Route::get('/property-report', [IndexController::class, "propertyReport"])->name("property.report");

// Route For Calculator
Route::get('/calculator', [IndexController::class, "calculator"])->name("calculator");

// Route For Contact Us
Route::get('/contact', [IndexController::class, "contact"])->name("contact");

// Route For Storing Contact
Route::post('/store-contact', [IndexController::class, "storeContact"])->name("store.contact");

// Route For Storing Contact
Route::post('/subscribe-news', [IndexController::class, "subscribe"])->name("subscribe");

// Route For Registration
Route::get('/register', [IndexController::class, "registration"])->name("registration");

// Route For Storing Registration
Route::post('/store-register', [IndexController::class, "storeRegistration"])->name("store.register");

// Route For Verifying Code
Route::post('/verify-code', [IndexController::class, "verifyCode"])->name("verify.code");

// Route For User Agreement
Route::get('/user-agreement', [IndexController::class, "userAgreement"])->name("user.agreement");

// Route For Privacy Policy
Route::get('/privacy-policy', [IndexController::class, "privacy"])->name("privacy.policy");

// Route For Terms & Conditions
Route::get('/terms-conditions', [IndexController::class, "termsConditions"])->name("terms");

// Route For Disclaimer
Route::get('/disclaimer', [IndexController::class, "disclaimer"])->name("disclaimer");

// Route For Forgetting Password
Route::get('/forget-password', [IndexController::class, "forgetPassword"])->name("forget.password");

// Route For Post Request
Route::post('/post-request', [IndexController::class, "postRequest"])->name("post.request");

// Route For New Password
Route::get('/set-new-password/{id}', [IndexController::class, "changePassword"])->name("set.new.password");

// Route For Update New Password
Route::post('/update-new-password/{id}', [IndexController::class, "updateNewPassword"])->name("update.new.password");

Route::middleware(AgentMiddleware::class)->group(function () {

// Route For Dashboard
    Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');

// Route For Opportunities
    Route::get('/opportunities', [IndexController::class, 'opportunities'])->name('opportunities');

    // Route For Lead Info
    Route::get('/lead-info/{id}', [IndexController::class, "leadInfo"])->name("lead.info");

// Route For Profile
    Route::get('/profile', [IndexController::class, 'profile'])->name('profile');

    Route::get('/editprofile', [IndexController::class, 'editprofile'])->name('editprofile');

    // Route For Updating Agency Logo
    Route::post('/update-agency-logo', [IndexController::class, "updateagencyLogo"])->name("update.agency.logo");

    // Route For Updating Profile Picture
    Route::post('/update-profile-picture', [IndexController::class, "updateProfilePicture"])->name("update.profile.picture");

// Route For Profile Update
    Route::post("/profile-update", [IndexController::class, "profileUpdate"])->name("profile.update");

// Route For Signout
    Route::get('/signout', [IndexController::class, 'signout'])->name('signout');

    // Route For Upload Agreement
    Route::post('/upload-agreement/{id}', [IndexController::class, "uploadAgreement"])->name("upload.user.agreement");

    // Route For Downloading User Agreement
    Route::get('/download-agreement', [IndexController::class, "agreementView"])->name("download.agreement");

    // Route For Updating Fees
    Route::post('/update-fees', [IndexController::class, "updateFees"])->name("agent.update.fees");

    // Route For Updating Video Link
    Route::post('/update-video-link', [IndexController::class, "updateVideoLink"])->name("agent.update.video.link");

    // Route For Updating Address
    Route::post('/update-address', [IndexController::class, "updateAddress"])->name("agent.update.address");

    // Route For Updating Password
    Route::post('/update-password', [IndexController::class, "updatePassword"])->name("agent.update.password");

});

/*** End Complete Routes For Web ***/

/** This file includes all the routes for the admin side working **/
include "admin.php";
/** This file includes all the routes for the admin side working **/
