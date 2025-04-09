<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//NewYachtCRM Controller start
$routes->get('calendar', 'NewYachtCRM::calendar', ['filter' => 'role:admin,manager,user']);
$routes->post('/users/delete/(:num)', 'NewYachtCRM::delete/$1');
$routes->post('/users/approve/(:num)', 'NewYachtCRM::approve/$1');
$routes->post('/users/deny/(:num)', 'NewYachtCRM::deny/$1');

$routes->post('submit-booking', 'NewYachtCRM::saveBooking');
$routes->get('admin-yacht-booking', 'NewYachtCRM::adminYachtBooking', ['filter' => 'role:admin,manager,user']);
$routes->get('booking-details', 'NewYachtCRM::BookingDetails', ['filter' => 'role:admin']);
$routes->get('yacht-booking-details(:num)', 'NewYachtCRM::YachtBookingDetails/$1', ['filter' => 'role:admin']);
$routes->get('user-details', 'NewYachtCRM::userDetails', ['filter' => 'role:admin']);
$routes->get('create-user', 'NewYachtCRM::createUserPage', ['filter' => 'role:admin,user']);
$routes->post('create/user', 'NewYachtCRM::createUserRegister');

// holiday page working
$routes->get('yachtNA', 'NewYachtCRM::yachtNA', ['filter' => 'role:admin,manager']);
$routes->post('YachtNA/insert', 'NewYachtCRM::addYachtNA');
$routes->get('YachtNA/delete(:num)', 'NewYachtCRM::deleteYachtNA/$1');
// holiday page working end

$routes->get('enquiry-form', 'NewYachtCRM::enquiryForm', ['filter' => 'role:admin']);
$routes->get('contact-form', 'NewYachtCRM::contactForm', ['filter' => 'role:admin']);
$routes->get('enquiry/delete(:num)', 'NewYachtCRM::deleteEnquiry/$1');
$routes->get('contact/delete(:num)', 'NewYachtCRM::deleteContact/$1');
$routes->get('contact-subscribe', 'NewYachtCRM::contactSubscribe', ['filter' => 'role:admin']);
$routes->get('contact-subscribe/delete(:num)', 'NewYachtCRM::deleteContactSubscribe/$1');
$routes->get('about-subscribe', 'NewYachtCRM::aboutSubscribe', ['filter' => 'role:admin']);
$routes->get('about-subscribe/delete(:num)', 'NewYachtCRM::deleteAboutSubscribe/$1');

//NewYachtCRM Controller end

//YACHT Controller pages working start
$routes->get('/', 'Yacht::index');

$routes->post('enquiryForm', 'Yacht::enquiryForm');
// $routes->get('us/yacht-detail(:num)', 'Yacht::yachtRecordEdit/$1');
$routes->get('yacht-detail(:num)', 'Yacht::yachtRecordEditnew/$1');
$routes->get('us/yacht-booking(:num)', 'Yacht::yachtBooking/$1');

$routes->get('us/yacht-list', 'Yacht::yachtList');
$routes->get('us/cruise', 'Yacht::cruise');
$routes->get('us/catamaranYacht', 'Yacht::catamaranYacht');
$routes->get('us/MotorYachts', 'Yacht::MotorYachts');
$routes->get('us/LuxuryYachts', 'Yacht::LuxuryYachts');
$routes->get('sorting(:segment)', 'Yacht::filter/$1');
$routes->match(['get', 'post'], 'filter', 'Yacht::filterYachts');

$routes->get('yacht-detail', 'Yacht::yachtDetail');
$routes->get('us/yacht-booking', 'Yacht::yachtBookingPage');
$routes->post('booking-ticket', 'Yacht::yachtBook');
// $routes->post('booking-confirm','Yacht::yachtBook');
// $routes->post('us/yacht-booked','Yacht::yachtBook');// No code was selected, so I will provide a general improvement suggestion.
// Consider organizing the routes into separate sections or files for better readability and maintainability.

// For example, you can group the routes by controller or by functionality
// NewYachtCRM Controller routes
$routes->group('NewYachtCRM', function ($sub) {
    $sub->get('calendar', 'NewYachtCRM::calendar', ['filter' => 'role:admin,manager,user']);
    $sub->post('/users/delete/(:num)', 'NewYachtCRM::delete/$1');
    $sub->post('/users/approve/(:num)', 'NewYachtCRM::approve/$1');
    $sub->post('/users/deny/(:num)', 'NewYachtCRM::deny/$1');
    // ...
});

// YACHT Controller routes
$routes->group('Yacht', function ($sub) {
    $sub->get('/', 'Yacht::index');
    $sub->post('enquiryForm', 'Yacht::enquiryForm');
    // ...
});

// DASHBOARD routes
$routes->group('Dashboard', function ($sub) {
    $sub->get('admin', 'Home::index');
    $sub->get('dashboard', 'Home::dashboardPage');
    // ...
});

$routes->post('user-contact', 'Yacht::userContact');
$routes->post('user-subscribe', 'Yacht::userSubscribe');
$routes->post('about-subscribe', 'Yacht::aboutSubscribe');
$routes->get('thank-you', 'Yacht::thankYou');
$routes->get('us/contact', 'Yacht::contact');
$routes->get('us/services', 'Yacht::services');
$routes->get('us/gallery', 'Yacht::gallery');
$routes->get('us/about', 'Yacht::about');

// booking form woring
$routes->get('goto-booking', 'Yacht::gotobooking');
$routes->get('us/booking-page', 'Yacht::BookingForm');
$routes->get('us/booking-page(:num)', 'Yacht::yachtBookingTest/$1');
// $routes->get('ticket(:num)', 'Yacht::ticket/$1');
$routes->get('us/booking-test', 'Yacht::bookingTest');
$routes->get('ticket', 'Yacht::bookingTicket');

$routes->get('terms', 'Yacht::terms');
$routes->get('privacy', 'Yacht::privacy');
$routes->get('refund', 'Yacht::refund');
$routes->get('support', 'Yacht::support');
$routes->get('footer', 'Yacht::footer');
$routes->get('booking-confirm', 'Yacht::bookingConfirm');
$routes->get('booking-page', 'Yacht::bookingPage');

$routes->get('payment', 'Yacht::payment');
$routes->post('payment/insert', 'Yacht::paymentRecord');
$routes->get('payment-detail', 'Yacht::paymentDetail');
$routes->get('payment/delete(:num)', 'Yacht::paymentDelete/$1');
$routes->get('payment/edit(:num)', 'Yacht::paymentEdit/$1');
$routes->post('payment/update(:num)', 'Yacht::paymentUpdate/$1');



//BOOKMYYACHT Website Pages End

// DASHBOARD Start
$routes->get('admin', 'Home::index');
$routes->get('dashboard', 'Home::dashboardPage');
$routes->get('user-register', 'Home::userRegister');
$routes->get('manager-register', 'Home::managerRegister');

//forgot password start
$routes->get('forgot-password', 'Home::forgotPassword');
$routes->get('verify-otp', 'Home::verifyViewOTP');

$routes->post('otp/send', 'Home::sendOtp');
$routes->post('otp/verify', 'Home::verifyOtp');
$routes->post('forgot-password', 'Home::sendResetCode');
    
$routes->post('login', 'Home::loginInsert');
$routes->get('reset-password', 'Home::resetPassword');
$routes->post('/reset-password', 'Home::resetPasswordInsert');
//forgot password end

$routes->get('manager-login', 'Home::managerLogin');
// $routes->get('register', 'Home::registerPage');
$routes->get('register', 'Home::registerPage' ,['filter' => 'role:admin']);
$routes->get('user-history', 'Home::userAllRecord', ['filter' => 'role:admin']);
$routes->get('logout', 'Home::logout');

//user query pages links
$routes->post('register/home', 'Home::do_register'); //user register (dashboard)
$routes->post('login/home', 'Home::do_login');	//user login (dashboard)

// user crud operation start
$routes->get('user-records', 'Home::do_userData',['filter' => 'role:admin']);
$routes->get('user/delete(:num)', 'Home::deleteData/$1');
$routes->get('formEdit(:num)', 'Home::editData/$1');
$routes->post('user/update(:num)', 'Home::updateUser/$1');
// user crud operation end

// yacht crud operation start
$routes->post('yacht/insert-record', 'Home::yachtRecordInsert');
$routes->post('update-status', 'Home::updateStatus');
$routes->get('yacht-record', 'Home::yachtRecord', ['filter' => 'role:admin,manager']);
$routes->get('yacht/delete-record(:num)', 'Home::yachtRecordDelete/$1');
$routes->get('yacht/edit-record(:num)', 'Home::yachtRecordEdit/$1');
$routes->post('yacht/update-record(:num)', 'Home::yachtRecordUpdate/$1');
$routes->post('delete-image', 'Home::deleteImage');
// yacht crud operation end

//extra add images code start
$routes->get('images-records', 'Home::ImagesRecord');	//Images shos records
$routes->get('images/edit-record(:num)', 'Home::ImagesEdit/$1');
$routes->post('images/update-record(:num)', 'Home::ImageUpdate/$1');
$routes->post('img', 'Home::img');	//Add Extra Images
// DASHBOARD End

$routes->set404Override('App\Controllers\Home::show404');

$routes->get('/service', 'Home::abc');
$routes->match(['get', 'post'], '/service/addService', 'Home::addService');


