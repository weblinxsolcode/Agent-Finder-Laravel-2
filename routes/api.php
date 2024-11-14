<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

// API For Getting data
Route::get('/get-data', [ApiController::class, "agentComission"]);

// API For Submitting Lead
Route::post('/store-lead', [ApiController::class, "storeLead"]);

// API For Submitting Property Report
Route::post('/submit-property-report', [ApiController::class, "propertReport"]);

// API For Submitting Newsletter
Route::post('/submit-newsletter', [ApiController::class, "newsletter"]);

// API For Submitting Contact Us
Route::post('/submit-partner-with-us', [ApiController::class, "partnerWithUs"]);

// API For Submitting Contact Us
Route::post('/agent-signup', [ApiController::class, "register"]);
