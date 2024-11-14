<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Admins;

Route::prefix("admin")->group(function(){

    // Route For Admin Login
    Route::get('/login', [AdminController::class, "login"])->name("admin.login");

    // Route For Admin Login Check
    Route::post('/login-check', [AdminController::class, "loginCheck"])->name("admin.login.check");

    // Secured Routes For Admin Dashbaord
    Route::middleware(Admins::class)->group(function(){

        // Route For Admin Dashboard
        Route::get('/dashboard', [AdminController::class, "dashboard"])->name("admin.dashboard");

        // Route For Admin Logout
        Route::get('/logout', [AdminController::class, "logout"])->name("admin.logout");

        // Agent Management
        Route::prefix("agent-management")->group(function(){

            // Route For List Of Agents
            Route::get('/', [AdminController::class, "agentManagement"])->name("admin.agent.management");

            // Route For Adding Agents
            Route::get('/add', [AdminController::class, "addAgent"])->name("admin.add.agent");

            // Route For Storing Agents
            Route::post('/store', [AdminController::class, "storeAgent"])->name('admin.store.agent');

            // Route For Deletion of Agent
            Route::get('/delete/{id}', [AdminController::class, "deleteAgent"])->name("admin.delete.agent");

            // Route For Updating Status Of the agent
            Route::post('/update-status/{id}', [AdminController::class, "updateAgentStatus"])->name("admin.update.status.agent");

            // Route For Agent Profile
            Route::get('/profile/{id}', [AdminController::class, "agentProfile"])->name('admin.agent.profile');

            // Route For Agent Edit
            Route::get('/edit-agent/{id}', [AdminController::class, "editAgent"])->name("admin.edit.agent");

            // Route For Agent Edit
            Route::get('/test', [AdminController::class, "test"])->name("admin.test.agent");

            // Route For Template Profile Show
            Route::get('/template-profile/{id}', [AdminController::class, "templateProfile"])->name("admin.template.profile");

            // Route For Agent Update
            Route::post('/update-agent/{id}', [AdminController::class, "updateAgent"])->name("admin.update.agent");

        });

        // Lead Management
        Route::prefix("lead-Management")->group(function(){

            // Route For List Of Leads
            Route::get('/', [AdminController::class, "leadManagement"])->name("admin.lead.management");

            // Route For Adding Lead
            Route::get('/add', [AdminController::class, "addLead"])->name("admin.add.lead");

            // Route For Storing Lead
            Route::post('/store', [AdminController::class, "storeLead"])->name('admin.store.lead');

            // Route For Deletion Of Lead
            Route::get('/delete/{id}', [AdminController::class, "deleteLead"])->name("admin.delete.lead");

            // Route For Edit Lead
            Route::get('/edit/{id}', [AdminController::class, "editLead"])->name("admin.edit.lead");

            // Route For Updating Lead
            Route::post('/update/{id}', [AdminController::class, "updateLead"])->name("admin.update.lead");

            // Route For Lead Details
            Route::get('/details/{id}', [AdminController::class, "leadDetails"])->name('admin.lead.details');

            // Route For Importing Lead From Excel Sheet
            Route::post('/import', [AdminController::class, "importLead"])->name("admin.import.lead");

        });

        // Assigned Management
        Route::prefix("assign-management")->group(function(){

            // List Of Assigned Lead
            Route::get('/assigned-leads', [AdminController::class, "assignedLeads"])->name("admin.assigned.leads");

            // List Of Unassigned Lead
            Route::get('/unassigned-leads', [AdminController::class, "unassignedLeads"])->name("admin.unassigned.leads");

            // Route For Assigning Of Lead
            Route::post('/assign-agent-lead/{id}', [AdminController::class, "assignLead"])->name("admin.assign.agent.lead");

            // Route For Remove Assigning From the Agent
            Route::get('/remove-assign/{id}', [AdminController::class, "removeAssign"])->name("admin.remove.assign");

        });

        // Contact Management
        Route::prefix("contact-management")->group(function(){

            // Route For List Of Contacts
            Route::get('/', [AdminController::class, "contactManagement"])->name("admin.contact.management");

            // Route For Deleting Contact
            Route::get('/delete/{id}', [AdminController::class, "deleteContact"])->name("admin.delete.contact");

            // Route For Contact Details
            Route::get('/details/{id}', [AdminController::class, "contactDetails"])->name('admin.contact.details');

        });

        // Property Report
        Route::prefix("property-report")->group(function(){

            // Route For List Of All Property Reports
            Route::get('/', [AdminController::class, "propertReportManagement"])->name("admin.property.reports");

            // Route For Deleting Property Report
            Route::get('/delete/{id}', [AdminController::class, "deletePropertyReport"])->name("admin.delete.property.report");

            // Route For Property Report Details
            Route::get('/details/{id}', [AdminController::class, "propertyReportDetals"])->name('admin.property.report.details');

        });

        // Route For Newsletter
        Route::get('/newsletter', [AdminController::class, "newsletterManagement"])->name("admin.newsletter.management");

        // Route For Deleting Newsletter
        Route::get('/delete-newsletter/{id}', [AdminController::class, "deleteNewsLetter"])->name("admin.delete.newsletter");

        // Route For Admin Profile
        Route::get("/admin-profile", [AdminController::class, "adminProfile"])->name("admin.profile");

        // Route For Updating Admin Profile
        Route::post('/update-admin-profile', [AdminController::class, "updateAdminProfile"])->name("admin.update.profile");

        // Route For Viewing Agreement
        Route::get('/view-agreement/{id}', [AdminController::class, "agreementView"])->name("admin.view.agreement");

    });

});
