<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//NewYachtCRM Controller start
$routes->get('calendar', 'NewYachtCRM::calendar', ['filter' => 'role:admin,manager,user']);
$routes->get('user-calendar', 'NewYachtCRM::userCalendar', ['filter' => 'role:admin,user']);
$routes->post('/users/delete/(:num)', 'NewYachtCRM::delete/$1');
$routes->post('/users/approve/(:num)', 'NewYachtCRM::approve/$1');
$routes->post('/users/deny/(:num)', 'NewYachtCRM::deny/$1');

$routes->post('submit-booking', 'NewYachtCRM::saveBooking');
$routes->get('admin-yacht-booking', 'NewYachtCRM::adminYachtBooking', ['filter' => 'role:admin,manager,user']);
$routes->get('user-yacht-booking', 'NewYachtCRM::userYachtBooking', ['filter' => 'role:admin,user']);
$routes->get('admin-tour-booking', 'NewYachtCRM::adminTourBooking', ['filter' => 'role:admin']);
$routes->get('user-tour-booking', 'NewYachtCRM::userTourBooking', ['filter' => 'role:admin,user']);
$routes->get('user-details', 'NewYachtCRM::userDetails', ['filter' => 'role:admin']);
$routes->get('create-user', 'NewYachtCRM::createUserPage', ['filter' => 'role:admin,user']);
$routes->post('create/user', 'NewYachtCRM::createUserRegister');
$routes->get('yachtNA', 'NewYachtCRM::yachtNA', ['filter' => 'role:admin,manager']);
$routes->get('user-yachtNA', 'NewYachtCRM::useryachtNA', ['filter' => 'role:admin,user']);
$routes->post('yachtNA/insert', 'NewYachtCRM::addHoliday');
$routes->get('yachtNA/delete(:num)', 'NewYachtCRM::deleteHoliday/$1');

$routes->get('enquiry-form', 'NewYachtCRM::enquiryForm', ['filter' => 'role:admin']);
$routes->get('contact-form', 'NewYachtCRM::contactForm', ['filter' => 'role:admin']);
$routes->get('contact/delete(:num)', 'NewYachtCRM::deleteContact/$1');
$routes->get('contact-subscribe', 'NewYachtCRM::contactSubscribe', ['filter' => 'role:admin']);
$routes->get('contact-subscribe/delete(:num)', 'NewYachtCRM::deleteContactSubscribe/$1');
$routes->get('about-subscribe', 'NewYachtCRM::aboutSubscribe', ['filter' => 'role:admin']);
$routes->get('about-subscribe/delete(:num)', 'NewYachtCRM::deleteAboutSubscribe/$1');

//NewYachtCRM Controller end

//YACHT Controller pages working start
$routes->get('/', 'Yacht::index');

$routes->post('enquiryForm', 'Yacht::enquiryForm');
$routes->get('us/yacht-detail(:num)', 'Yacht::yachtRecordEdit/$1');
$routes->get('yacht-detail(:num)', 'Yacht::yachtRecordEditnew/$1');
$routes->get('us/yacht-booking(:num)', 'Yacht::yachtBooking/$1');

$routes->get('us/yacht-list', 'Yacht::yachtList');
$routes->get('us/gulet-yacht', 'Yacht::guletYacht');
$routes->get('us/catamaranYacht', 'Yacht::catamaranYacht');
$routes->get('us/MotorYachts', 'Yacht::MotorYachts');
$routes->get('us/LuxuryYachts', 'Yacht::LuxuryYachts');
// $routes->get('us/yacht-list(:segment)', 'Yacht::filter/$1');
// $routes->post('us/yacht-list', 'Yacht::filterYachts');
$routes->get('sorting(:segment)', 'Yacht::filter/$1');
$routes->match(['get', 'post'], 'filter', 'Yacht::filterYachts');

$routes->post('us/yachtDetail', 'Yacht::saveBooking');
$routes->get('us/yacht-detail', 'Yacht::yachtDetail');
$routes->get('us/yacht-booking', 'Yacht::yachtBookingPage');
$routes->post('booking-ticket', 'Yacht::yachtBook');
// $routes->post('booking-confirm','Yacht::yachtBook');
// $routes->post('us/yacht-booked','Yacht::yachtBook');

$routes->post('user-contact', 'Yacht::userContact');
$routes->post('user-subscribe', 'Yacht::userSubscribe');
$routes->post('about-subscribe', 'Yacht::aboutSubscribe');
$routes->get('thank-you', 'Yacht::thankYou');
$routes->get('us/contact', 'Yacht::contact');
$routes->get('us/services', 'Yacht::services');
$routes->get('us/gallery', 'Yacht::gallery');
$routes->get('us/about', 'Yacht::about');

// booking form woring
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
//BOOKMYYACHT Website Pages End

// DASHBOARD Start
$routes->get('admin', 'Home::index');
$routes->get('dashboard', 'Home::dashboardPage');
$routes->get('user-register', 'Home::userRegister');
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
// yacht crud operation end

//extra add images code start
$routes->get('images-records', 'Home::ImagesRecord');	//Images shos records
$routes->get('images/edit-record(:num)', 'Home::ImagesEdit/$1');
$routes->post('images/update-record(:num)', 'Home::ImageUpdate/$1');
$routes->post('img', 'Home::img');	//Add Extra Images
// DASHBOARD End
