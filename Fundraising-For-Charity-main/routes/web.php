<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\DonationController;
use \App\Http\Controllers\OrganizerController;
use \App\Http\Controllers\EventController;
use \App\Http\Controllers\NotificationController;
use \App\Http\Controllers\LogoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware'=>['sess']], function() {
    Route::view('/user/admin/index', 'user.admin.index');
    Route::get('/transactions', [\App\Http\Controllers\TransactionController::class, 'index']);
    Route::get('/userList', [UserController::class, 'index']);
    Route::get('/user/profile/{id}', [UserController::class, 'show']);
    Route::get('/user/changeStatus/{id}/{status}', [UserController::class, 'changeStatus']);
    Route::view('/addManager', 'manager.create');
    Route::post('/addManager', [UserController::class, 'addManager']);
    Route::get('/donationReport/yearly', [DonationController::class, 'index']);
    Route::get('/donationReport/monthly/{year}', [DonationController::class, 'monthlyDonationReport']);
    Route::get('/donorList', [DonationController::class, 'donorList']);
    Route::get('/topDonor', [DonationController::class, 'topDonor']);
    Route::get('/nonDonorList', [DonationController::class, 'nonDonorList']);
    Route::get('/nonOrganizerList', [OrganizerController::class, 'nonOrganizerList']);
    Route::get('/topOrganizer', [OrganizerController::class, 'topOrganizerDetails']);
    Route::get('/userHomePage/events', [EventController::class, 'index']); //Home page for admin
    Route::post('/userHomePage/events', [EventController::class, 'searchActiveEvents']);
    Route::get('/events/eventRequest', [EventController::class, 'eventRequest']);
    Route::get('/eventRequest/approveForm/{id}', [EventController::class, 'approveForm']);
    Route::post('/eventRequest/approveForm/{id}', [EventController::class, 'confirmCreateEvent']);
    Route::get('/organizerList/report', [OrganizerController::class, 'organizerNumOfEvents']);
    Route::get('/organizerReport/yearly/{id}', [OrganizerController::class, 'organizerYearEventReport']);
    Route::get('/event/smallReport/{id}', [EventController::class, 'eventBriefDetails']);
    Route::get('/event/removeActiveEvent/{id}', [EventController::class, 'showEventForRemove']);
    Route::get('/event/confirmRemoveEvent/{id}', [EventController::class, 'removeActiveEvent']);
    Route::get('/admin/notice', [NotificationController::class, 'adminNotification']);
    Route::get('/admin/readNotice/{id}', [NotificationController::class, 'adminReadNotice']);
    Route::get('/admin/logout', [LogoutController::class, 'index']);
    Route::get('/events/removePendingEvent/{id}', [EventController::class, 'removePendingEvent']);
    Route::get('/events/archivedEvents', [EventController::class, 'archivedEvents']);
    Route::get('/event/information/{id}', [EventController::class, 'eventInformation']);
    Route::post('/event/information/{id}', [EventController::class, 'changeManagerForEvent']);
    Route::get('/event/chooseManagerForUpdate/{id}', [EventController::class, 'chooseManagerForEventUpdate']);
    Route::post('/event/chooseManagerForUpdate/{id}', [EventController::class, 'changeManagerForEvent']);
    Route::get('/admin/createNotice', [NotificationController::class, 'adminCreateNotice']);
    Route::post('/admin/createNotice', [NotificationController::class, 'adminSendNotice']);
    Route::get('/event/detailReviews/{id}', [EventController::class, 'detailReviews']);
    Route::get('/event/removeComment/{id}/{eventId}', [EventController::class, 'removeEventComment']);
    Route::get('/notices/checkSentNotices', [NotificationController::class, 'checkSentNotices']);
    Route::get('/notice/readSentNotices/{id}', [NotificationController::class, 'readSentNotice']);
});


Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verification');

Route::get('/org/forgotPass', 'orgForgotPass@index');
Route::post('/org/forgotPass', 'orgForgotPass@change');



Route::get('/signup', 'orgSignup@index');
Route::post('/signup', 'orgSignup@insert');



Route::group(['middleware'=>['sess']], function(){

    Route::get('/create', 'orgCreateController@index');
    Route::post('/create', 'orgCreateController@add');

    Route::get('/org_dashboard', 'orgDashboardController@index');
    Route::post('/org_dashboard', 'orgDashboardController@search');

    Route::get('/org/mycampaign', 'orgMycampaign@index');
    Route::get('/org/delete/{eId}', 'orgMycampaign@delete');
    Route::get('/org/edit/{eId}', 'orgEditCampaign@index');
    Route::post('/org/edit/{eId}', 'orgEditCampaign@update');


    Route::get('/campaignDetails/{eId}', 'orgCampaignDetails@index');
    Route::get('/donorlist/{eId}', 'orgCampaignDetails@donor');
    Route::post('/campaignComment/{eId}', 'orgCampaignComment@insert');

    Route::get('/donate/transaction/{eId}', 'orgCampaignTran@index');
    Route::post('/donate/transaction/{eId}', 'orgCampaignTran@sendMoney');

    Route::get('/details', 'orgDetails@index')->name('org.details');
    Route::get('/editProfile', 'orgEditProfile@index');
    Route::post('/editProfile', 'orgEditProfile@update');



    Route::get('/org/logout', 'orgLogout@index');
});
Route::group(['middleware'=>['Msess']], function(){
    Route::get('/man_dashboard', 'ManeventmanageController@Dashboard');
    Route::get('/man_dashboarddata', 'ManeventmanageController@Dashboard');
    Route::get('/man_Profile', 'manDashboardController@Profile');
    Route::get('/man_eventslist', 'ManeventmanageController@show');
    Route::get('/man_donorlist', 'UserController@donorlist');

    Route::get('/man_donorsearch', 'UserController@donorindex');
    Route::post('/man_donorsearch', 'UserController@donorsearch');

    Route::get('/man_orglist', 'UserController@orglist');
    Route::get('/man_orgsearch', 'UserController@orgindex');
    Route::post('/man_orgsearch', 'UserController@orgsearch');

    Route::get('/man_notices', 'NoticesController@index');
    Route::post('/man_notices', 'NoticesController@store');

    Route::get('/man_feedback', 'CommentController@index');
    Route::post('/man_feedback', 'CommentController@store');

    Route::get('/monthly_calc', 'TransactionController@index');
    Route::get('/man_monthlycalcupdate/{id}', 'TransactionController@edit');
    Route::post('/man_monthlycalcupdate/{id}', 'TransactionController@update');

    Route::get('/yearly_calc', 'TransactionController@index2');
    Route::get('/man_yearlycalcupdate/{id}', 'TransactionController@edit2');
    Route::post('/man_yearlycalcupdate/{id}', 'TransactionController@update2');

    Route::get('/man_eventdone', 'ManeventmanageController@eventsinfo');
    Route::get('/event_details/{id}', 'ManeventmanageController@details')->name('manager.details');
    Route::get('/man_updateprof', 'UserController@editpage');
    Route::post('/man_updateprof', 'UserController@Updateprof');
    Route::get('/man_eventreport', 'UserController@eventreport');
    Route::post('/man_eventreport', 'ManeventmanageController@eventreport');
});

