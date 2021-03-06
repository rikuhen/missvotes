<?php

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

Route::get('/', 'WebsiteController@index')->name('website.home')->middleware('showMiss');
Route::get('/miss', 'WebsiteController@showMisses')->name('website.miss.index')->middleware('showMiss');
Route::get('/miss/{slug}', 'WebsiteController@show')->name('website.miss.show')->middleware('showMiss');
Route::get('/change-language', 'WebsiteController@setLocale')->name('website.locale');


// votes for miss
Route::post('/miss/vote', 'VoteController@store')->name('website.miss.vote.store')->middleware('auth','isClient');

Route::group(['prefix'=>'account'],function(){
	Route::get('/','WebsiteController@myAccount')->name('website.account')->middleware('auth');
	Route::get('/edit','WebsiteController@editAccount')->name('website.account.edit')->middleware('auth');
	Route::get('/delete','WebsiteController@deleteAccount')->name('website.account.delete')->middleware('auth');
	Route::post('/delete','WebsiteController@postDeleteAccount')->name('website.account.postdelete')->middleware('auth');
	Route::post('/update','WebsiteController@updateAccount')->name('website.account.update')->middleware('auth');
	Route::post('subscribe','StripeController@subscribe')->name('website.stripe.subscribe')->middleware('auth');
	Route::post('ticket','StripeController@buyTicket')->name('website.stripe.buyticket')->middleware('auth');
	Route::post('psubscribe','PaypalController@subscribe')->name('website.paypal.subscribe')->middleware('auth');
	Route::get('pstatus','PaypalController@getPaymentStatus')->name('website.paypal.status')->middleware('auth');
});

Route::group(['prefix'=>'raffles'],function(){

	Route::get('/','TicketVoteClientController@index')->name('list.buy.ticket')->middleware('auth','isClient');
	Route::get('/query','TicketVoteClientController@query')->name('list.buy.ticket.query')->middleware('auth','isClient');
	Route::post('/add','TicketVoteClientController@add')->name('list.buy.ticket.add')->middleware('auth','isClient');
	Route::post('/remove','TicketVoteClientController@remove')->name('list.buy.ticket.remove')->middleware('auth','isClient');
	Route::post('pticket','PaypalController@buyTicket')->name('website.paypal.buyticket')->middleware('auth');
	Route::get('pstatus','PaypalController@getPaymentStatus')->name('list.buy.ticket.status')->middleware('auth');
});

Route::group(['middleware'=>'can:postulate','prefix'=>'apply'],function(){
	Route::get("requirements","ApplyCandidateController@requirements")->name('apply.requirements')->middleware('auth','isClient');
	Route::post("requirements","ApplyCandidateController@aceptrequirements")->name('apply.aceptrequirements')->middleware('auth','isClient');
	Route::get("aplication-process","ApplyCandidateController@aplicationProcess")->name('apply.aplicationProcess')->middleware('auth','isClient');
	Route::post("update-aplication-process","ApplyCandidateController@updateAplicationProcess")->name('update.apply.aplicationProcess')->middleware('auth','isClient');

	Route::post("pay-paypal-aplication-process",'ApplyCandidateController@payApplyProcess')->name('pay.paypal.aplication')->middleware('auth','isClient');
	Route::get('pay-paypal-aplication-process','ApplyCandidateController@getPaymentStatus')->name('pay.paypal.aplication.status')->middleware('auth','isClient');

	Route::post("pay-stripe-aplication-process",'ApplyCandidateController@payStripeApplyProcess')->name('pay.stripe.aplication')->middleware('auth','isClient');

	Route::post('insert-applicant','ApplyCandidateController@insertPrecandidate')->name('insert.applicant')->middleware('auth','isClient');
});

Route::group(['prefix'=>'auth'],function(){
	// login
	Route::get('login', 'Auth\LoginClientController@showLoginForm')->name('client.show.login');
	Route::post('login', 'Auth\LoginClientController@login')->name('client.login');
	Route::post('logout', 'Auth\LoginClientController@logout')->name('client.logout');
	
	// register
	Route::get('register', 'Auth\RegisterClientController@showRegistrationForm')->name('client.show.register');
	Route::post('register', 'Auth\RegisterClientController@register')->name('client.register');
	Route::get('register-success', 'Auth\RegisterClientController@registerSuccess')->name('client.register.success');
	
	// activate account
	Route::get('activate','Auth\ActivateClientController@showActivationForm')->name('client.show.activate');
	Route::get('activate/{activationCode}','Auth\ActivateClientController@activateAccount')->name('client.register.activate');
	Route::post('activate','Auth\ActivateClientController@reSendactivationCode')->name('client.re-send-activate');

	// forgot and change password
	Route::get('reset-email','Auth\ForgotClientPasswordController@showLinkRequestForm')->name('client.show.reset-email');
	Route::post('send-reset-email','Auth\ForgotClientPasswordController@sendResetLinkEmail')->name('client.reset-email');
	Route::get('reset/{token}','Auth\ResetClientPasswordController@showResetForm');
	Route::post('/password/reset','Auth\ResetClientPasswordController@reset');
});




Route::group(['prefix'=>'backend'],function(){

	Route::get('/',function(){})->middleware('guest:is_admin');

	Route::get('resend/{id}', function($id) {
	    $now = \Carbon\Carbon::now();
        $currentMonth = \Lang::get('email.casting.month_'.$now->format('m'));
        $numNextMonth = \Carbon\Carbon::now()->addMonth()->format('m');
        $numNextMonth = "02";
        $nextMonth = \Lang::get('email.casting.month_'.$numNextMonth);
        $minDayCurrentMonth = $now->startOfMonth()->format('j');
        $maxDayCurrentMonth = $now->endOfMonth()->format('j');
        $applicant = \MissVote\Models\Miss::find($id);
        \Mail::send('frontend.emails.casting',[
            'applicant'=>$applicant,
            'currentMonth'=>$currentMonth,
            'minDayCurrentMonth'=>$minDayCurrentMonth,
            'maxDayCurrentMonth'=>$maxDayCurrentMonth,
            'nextMonth' => $nextMonth,
        ], function($message) use ($applicant) {
            $message->from(config('mail.from.address'),config('app.name'))->to($applicant->email , $applicant->name .' '. $applicant->last_name)
                ->subject(\Lang::get('email.casting.subject',['name'=>config('app.name')]));
        });

         // check for failures
    	if (!\Mail::failures()) {
        	return "listo";
    	}
	});

	// Authentication Routes...
    Route::get('login', 'Auth\LoginAdminController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginAdminController@login');
    Route::post('logout', 'Auth\LoginAdminController@logout')->name('logout');
    //resources
    Route::get('dashboard', 'ReportController@dashboard')->name('dashboard');
    Route::get('casting/export', 'ExportController@resumeCasting')->name('dashboard.export.casting');
    Route::get('tickets/export/{format?}', 'ExportController@resumeTickets')->name('dashboard.export.tickets');
    Route::get('countries-network/export/{casting?}/{format?}', 'ExportController@resumeSocialNetwork')->name('dashboard.export.countries-network');
    Route::get('countries-network-casting/export/', 'ExportController@resumeSocialNetworkCasting')->name('dashboard.export.countries-network-casting');
    Route::get('countriesagrouped-network-casting/export/{casting?}/{format?}', 'ExportController@resumeAgroupedSocialNetworkCasting')->name('dashboard.export.agroupedcountries-network-casting');
	Route::resource('/users', 'UserController');
	Route::get('/clients/export/{format?}', 'ExportController@resumeClientTickets')->name('dashboard.export.clientTickets');
	Route::resource('/clients', 'ClientController');
	Route::get('/memberships/export{format?}', 'ExportController@resumeMemberships')->name('dashboard.export.memberships');
	Route::resource('/memberships', 'MembershipController');
	Route::resource('/countries', 'CountryController');
	Route::get('/candidates/export', 'ExportController@candidates')->name('candidates.export');
	Route::resource('/candidates', 'CandidateController');
	Route::get('/config', 'ConfigController@index')->name('config.index');
	Route::post('/config', 'ConfigController@store')->name('config.store');
	Route::delete('/config', 'ConfigController@destroy')->name('config.destroy');
	Route::get('/applicants/export', 'ExportController@applicants')->name('applicants.export');
	Route::post('/applicants/sendmail', 'ApplicantController@sendMail')->name('applicants.sendmail');
	Route::get('/casting/{castingKey}', 'ReportController@reportCasting')->name('resume.casting');
	Route::resource('/applicants', 'ApplicantController',['only'=>['index','show','update','destroy']]);
	Route::get('/precandidates/export', 'ExportController@precandidates')->name('precandidates.export');
	Route::resource('/precandidates', 'PrecandidateController',['only'=>['index','show','update','destroy']]);
	Route::resource('/activities', 'ClientActivityController',['only'=>['index']]);
	Route::post('/upload-photo', 'CandidateController@uploadPhoto');
	Route::post('/delete-photo', 'CandidateController@deletePhoto');
});


