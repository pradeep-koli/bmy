<?php

namespace App\Controllers;

use App\Models\CreateUserModel;
use App\Models\FilesModel;
use App\Models\HistoryModel;
use App\Models\ReservationModel;
use App\Models\UserModel;
use App\Models\YachtBookingModel;
use App\Models\YachtModel;
use App\Models\YachtNAModel;
use App\Models\EnquiryFormModel;
use App\Models\UserContactModel;
use App\Models\UserSubscribeModel;
use App\Models\AboutSubscribeModel;
use App\Models\ServiceModel;


class NewYachtCRM extends BaseController
{
	// public function calendar()
	// {

	// 	if (!session('email')) {
	// 		return redirect()->to('admin');
	// 	}

	// 	$eventModel = new YachtBookingModel();
	// 	$model = new YachtModel();
	// 	$YachtNAModel = new YachtNAModel();
	// 	$data['options'] = $model->find();
	// 	$data['events'] = $eventModel->findAll();
	// 	$data['yachtNA'] = $YachtNAModel->findAll();
	// 	return view('NewYachtCRM/calendar', $data);
	// }

	public function calendar()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}

		$eventModel = new YachtBookingModel();
		$model = new YachtModel();
		$YachtNAModel = new YachtNAModel();

		$data['options'] = $model->find();
		$data['events'] = $eventModel->findAll();
		$data['yachtNA'] = $YachtNAModel->findAll();
		$data['role'] = session('role');
		$data['username'] = session('name');

		return view('NewYachtCRM/calendar', $data);
	}


	public function adminYachtBooking()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}

		$Model = new YachtBookingModel();
		$data['users'] = $Model->findAll();
		return view('NewYachtCRM/admin-yacht-booking', $data);
	}

	public function BookingDetails()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}

		$Model = new YachtBookingModel();
		$data['users'] = $Model->findAll();
		return view('NewYachtCRM/booking-details', $data);
	}


	public function YachtBookingDetails($id)
	{
		$YachtModel = new YachtModel();
		$FilesModel = new FilesModel();
		$YachtBookingModel = new YachtBookingModel();
		$YachtService = new ServiceModel();

		$data['YachtModel'] = $YachtModel->find($id);
		$data['FilesModel'] = $FilesModel->where('yacht_id', $id)->findAll();
		$data['YachtBookingModel'] = $YachtBookingModel->where('yacht_id', $id)->findAll();
		$data['YachtService'] = $YachtService->where('service_id', $id)->findAll();

		$img1 = $data['FilesModel'][0]['images'] ?? null;
		$img2 = $data['FilesModel'][1]['images'] ?? null;
		$img3 = $data['FilesModel'][2]['images'] ?? null;
		$img4 = $data['FilesModel'][3]['images'] ?? null;

		$data['img1'] = $img1;
		$data['img2'] = $img2;
		$data['img3'] = $img3;
		$data['img4'] = $img4;

		return view('NewYachtCRM/yacht-booking-details', $data);
	}



	public function userDetails()
	{

		if (!session('email')) {
			return redirect()->to('admin');
		}

		$model = new UserModel();
		$data['userRecord'] = $model->findAll();
		return view('NewYachtCRM/user-details', $data);
	}

	public function createUserPage()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}

		return view('NewYachtCRM/create-user');
	}

	public function createUserRegister()
	{
		$model = new UserModel();

		$data = [
			'name' => $this->request->getPost('name'),
			'email' => $this->request->getPost('email'),
			'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
			'phone' => $this->request->getPost('phone'),
			'gender' => $this->request->getPost('gender'),
			'address' => $this->request->getPost('address'),
			'country' => $this->request->getPost('country'),
			'role' => $this->request->getPost('role'),
		];

		$model->insert($data);
		return redirect()->to('user-details');
	}

	public function yachtNA()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}

		$YachtNAModel = new YachtNAModel();

		$data['yachtNA'] = $YachtNAModel->findAll();
		return view('NewYachtCRM/yachtNA', $data);
	}

	public function addYachtNA()
	{
		$YachtNAModel = new YachtNAModel();

		$data = [
			'username' => $this->request->getPost('username'),
			'date' => $this->request->getPost('date'),
			'reason' => $this->request->getPost('reason'),
			'starttime' => $this->request->getPost('starttime'),
			'endtime' => $this->request->getPost('endtime'),
			'yachtname' => $this->request->getPost('yachtname')
		];

		$YachtNAModel->insert($data);
		return redirect()->to('yachtNA');
	}

	public function deleteYachtNA($id)
	{
		$model = new YachtNAModel();
		$model->delete($id);
		return redirect()->to('yachtNA');
	}

	public function saveBooking()
	{
		$bookingModel = new YachtBookingModel();
		$regervationModel = new ReservationModel();

		date_default_timezone_set('Asia/Kolkata');

		$currentDate = new \DateTime('now', new \DateTimeZone('Asia/Kolkata'));

		$formattedDate = $currentDate->format('Y-m-d H:i');
		$amPm = ($currentDate->format('H') < 12) ? 'AM' : 'PM';
		$currentTimestamp = $formattedDate . ' ' . $amPm;

		$data = [
			'token' => $this->request->getPost('yacht_owner'),
			'username' => $this->request->getPost('username'),
			'yacht_id' => $this->request->getPost('yacht_id'),
			'yacht_type' => $this->request->getPost('yacht_type'),
			'hname' => $this->request->getPost('hname'),
			'customer_name' => $this->request->getPost('customer_name'),
			'ccount' => $this->request->getPost('ccount'),
			'phone' => $this->request->getPost('phone'),
			'email' => $this->request->getPost('email'),
			'address' => $this->request->getPost('address'),
			'booking_date' => $this->request->getPost('booking_date'),
			'booking_time' => $this->request->getPost('booking_time'),
			'plan_description' => $this->request->getPost('plan_description'),
			'price' => $this->request->getPost('price'),
			'status' => $this->request->getPost('status'),
			'adate' => $currentTimestamp,
		];

		$postId = $bookingModel->insert($data);

		$regervationData = [
			'uid' => $postId,
			'ucount' => $this->request->getPost('ccount'),
			'rdate' => $this->request->getPost('booking_date'),
			'status' => 'status',
			'comments' => 'message',
			'token' => 'token',
			'bdate' => $currentTimestamp,
		];

		$regervationModel->insert($regervationData);

		return redirect()->to('calendar');
	}

	public function delete($id)
	{
		$model = new YachtBookingModel();
		$model->delete($id);
		return redirect()->to('admin-yacht-booking');
	}

	public function approve($id)
	{
		$userModel = new YachtBookingModel();
		$user = $userModel->find($id);

		$user = (object) $user;

		$user->status = 'Approve';
		$userModel->update($id, $user);

		return redirect()->to('admin-yacht-booking');
	}

	public function deny($id)
	{
		$userModel = new YachtBookingModel();
		$user = $userModel->find($id);

		$user = (object) $user;

		$user->status = 'Denied';
		$userModel->update($id, $user);

		return redirect()->to('admin-yacht-booking');
	}

	public function enquiryForm()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}

		$model = new EnquiryFormModel();
		$data['enquiryData'] = $model->findAll();
		return view('NewYachtCRM/enquiry-form', $data);
	}

	public function deleteEnquiry($id)
	{
		$model = new EnquiryFormModel();
		$model->delete($id);
		return redirect()->to('enquiry-form');
	}

	public function contactForm()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}

		$model = new UserContactModel();
		$data['contactForm'] = $model->findAll();
		return view('NewYachtCRM/contact-form', $data);
	}

	public function deleteContact($id)
	{
		$model = new UserContactModel();
		$model->delete($id);
		return redirect()->to('contact-form');
	}

	public function contactSubscribe()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}

		$model = new UserSubscribeModel();
		$data['subscribe'] = $model->findAll();
		return view('NewYachtCRM/contact-subscribe', $data);
	}

	public function deleteContactSubscribe($id)
	{
		$model = new UserSubscribeModel();
		$model->delete($id);
		return redirect()->to('contact-subscribe');
	}

	public function aboutSubscribe()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}

		$model = new AboutSubscribeModel();
		$data['subscribe'] = $model->findAll();
		return view('NewYachtCRM/about-subscribe', $data);
	}

	public function deleteAboutSubscribe($id)
	{
		$model = new AboutSubscribeModel();
		$model->delete($id);
		return redirect()->to('about-subscribe');
	}
}
