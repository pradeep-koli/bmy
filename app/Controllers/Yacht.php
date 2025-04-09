<?php

namespace App\Controllers;

use App\Models\YachtModel;
use App\Models\YachtBookingModel;
use App\Models\ReservationModel;
use App\Models\FilesModel;
use App\Models\UserContactModel;
use App\Models\UserSubscribeModel;
use App\Models\AboutSubscribeModel;
use App\Models\EnquiryFormModel;
use App\Models\PaymentModel;
use App\Models\PriceModel;

use App\Models\ServiceModel;

class Yacht extends BaseController
{
	public function index()
	{
		$recordModel = new YachtModel();
		$data['yacht'] = $recordModel->findAll();
		return view('yachtProject/index', $data);
	}

	public function enquiryForm()
	{
		$EnquiryForm = new EnquiryFormModel();

		$data = [
			'name' => $this->request->getPost('name'),
			'email' => $this->request->getPost('email'),
			'phone' => $this->request->getPost('phone'),
			'location' => $this->request->getPost('location'),
			'budget' => $this->request->getPost('budget'),
			'people' => $this->request->getPost('people'),
			'enquiry' => $this->request->getPost('enquiry'),
		];

		$EnquiryForm->insert($data);
		return redirect()->to('/');
	}

	public function yachtRecordEdit($id)
	{
		$model = new YachtModel();
		$imageModel = new FilesModel();

		$data['record'] = $model->find($id);
		$data['booking'] = $id ? $imageModel->where('yacht_id', $id)->findAll() : $imageModel->findAll();
		$data['similar'] = $model->where('yacht_type', $data['record']['yacht_type'])
			->where('id !=', $id) // Exclude the current yacht from similar yachts
			->limit(3)
			->findAll();

		return view('yachtProject/us/yacht-detail', $data);
	}

	public function yachtRecordEditnew($id)
	{
		$model = new YachtModel();
		$imageModel = new FilesModel();
		$priceModel = new PriceModel();
		$YachtService = new ServiceModel();

		$data['record'] = $model->find($id);
		$data['booking'] = $id ? $imageModel->where('yacht_id', $id)->findAll() : $imageModel->findAll();
		$data['price'] = $id ? $priceModel->where('yacht_id', $id)->findAll() : $priceModel->findAll();
		$data['YachtService'] = $id ? $YachtService->where('service_id', $id)->findAll() : $YachtService->findAll();
		$data['similar'] = $model->where('status', 'Approve')->where('yacht_type', $data['record']['yacht_type'])
			->where('id !=', $id)
			->limit(3)
			->findAll();

		$img1 = $data['booking'][0]['images'] ?? null;
		$img2 = $data['booking'][1]['images'] ?? null;
		$img3 = $data['booking'][2]['images'] ?? null;
		$img4 = $data['booking'][3]['images'] ?? null;
		$img5 = $data['booking'][4]['images'] ?? null;

		$data['img1'] = $img1;
		$data['img2'] = $img2;
		$data['img3'] = $img3;
		$data['img4'] = $img4;
		$data['img5'] = $img5;

		$images = [];
		if (count($data['booking']) > 4) {
			for ($i = 3; $i < count($data['booking']); $i++) {
				$images[] = $data['booking'][$i]['images'];
			}
		}

		$data['images'] = $images;

		if (isset($data['similar'][0])) {
			$data['img11'] = $data['similar'][0]['thumb-img'];
			$data['yachtName11'] = $data['similar'][0]['hname'];
			$data['price11'] = $data['similar'][0]['price'];
			$data['YachtID11'] = $data['similar'][0]['id'];
		} else {
			$data['img11'] = null;
			$data['yachtName11'] = null;
			$data['price11'] = null;
			$data['YachtID11'] = null;
		}

		if (isset($data['similar'][1])) {
			$data['img22'] = $data['similar'][1]['thumb-img'];
			$data['yachtName22'] = $data['similar'][1]['hname'];
			$data['price22'] = $data['similar'][1]['price'];
			$data['YachtID22'] = $data['similar'][1]['id'];
		} else {
			$data['img22'] = null;
			$data['yachtName22'] = null;
			$data['price22'] = null;
			$data['YachtID22'] = null;
		}


		return view('yacht-detail', $data);
	}



	public function yachtDetail()
	{
		$model = new YachtModel();
		$data['booking'] = $model->findAll();
		return view('yacht-detail', $data);
	}

	


	public function cruise()
	{
		$model = new YachtModel();
		$model->where('yacht_type', "cruise");
		$model->where('status', 'Approve');

		$filter = [
			"booking_date" => 0,
			"location" => 0,
			"yacht_type" => "cruise",
			"yacht_length" => 0,
			"price" => 0,
			"cabin" => 0,
			"guest" => 0
		];

		$data = [
			'yachtList' => $model->paginate(9),
			'pager' => $model->pager,
			'filter' => $filter,
			'title' => "Yacht List"
		];
		return view('yachtProject/us/yacht-list', $data);
	}

	public function catamaranYacht()
	{
		$model = new YachtModel();
		$model->where('yacht_type', "Catamarans Yachts");
		$model->where('status', 'Approve');

		$filter = [
			"booking_date" => 0,
			"location" => 0,
			"yacht_type" => "Catamarans Yachts",
			"yacht_length" => 0,
			"price" => 0,
			"cabin" => 0,
			"guest" => 0
		];

		$data = [
			'yachtList' => $model->paginate(9),
			'pager' => $model->pager,
			'filter' => $filter
		];
		return view('yachtProject/us/yacht-list', $data);
	}



	public function MotorYachts()
	{
		$model = new YachtModel();
		$model->where('yacht_type', "Motor Yachts");
		$model->where('status', 'Approve');

		$filter = [
			"booking_date" => 0,
			"location" => 0,
			"yacht_type" => "Motor Yachts",
			"yacht_length" => 0,
			"price" => 0,
			"cabin" => 0,
			"guest" => 0
		];

		$data = [
			'yachtList' => $model->paginate(9),
			'pager' => $model->pager,
			'filter' => $filter
		];
		return view('yachtProject/us/yacht-list', $data);
	}

	public function LuxuryYachts()
	{
		$model = new YachtModel();
		$model->where('yacht_type', "Luxury Yachts");
		$model->where('status', 'Approve');

		$filter = [
			"booking_date" => 0,
			"location" => 0,
			"yacht_type" => "Luxury Yachts",
			"yacht_length" => 0,
			"price" => 0,
			"cabin" => 0,
			"guest" => 0
		];

		$data = [
			'yachtList' => $model->paginate(9),
			'pager' => $model->pager,
			'filter' => $filter
		];
		return view('yachtProject/us/yacht-list', $data);
	}




	public function yachtList()
	{
		$model = new YachtModel();
		$filter = [
			"booking_date" => 0,
			"location" => 0,
			"yacht_type" => 0,
			"yacht_length" => 0,
			"price" => 0,
			"cabin" => 0,
			"guest" => 0
		];

		$approvedYachts = $model->where('status', 'Approve')->paginate(9);

		$data = [
			'yachtList' => $approvedYachts,
			'pager' => $model->pager,
			'filter' => $filter
		];
		return view('yachtProject/us/yacht-list', $data);
	}

	public function filterYachts()
	{
		$yachtModel = new YachtModel();

		$bdate = $this->request->getGet('booking_date');
		$location = $this->request->getGet('location');
		$yachtType = $this->request->getGet('yacht_type');
		$yachtLength = $this->request->getGet('yacht_length');
		$yachtPrice = $this->request->getGet('price');
		$cabin = $this->request->getGet('cabin');
		$guest = $this->request->getGet('guest');
		$sortOrder = $this->request->getGet('sortOrder');

		$filter = [
			"booking_date" => $bdate,
			"location" => $location,
			"yacht_type" => $yachtType,
			"yacht_length" => $yachtLength,
			"price" => $yachtPrice,
			"sortOrder" => $sortOrder,
			"cabin" => $cabin,
			"guest" => $guest
		];

		$approvedYachts = $yachtModel->where('status', 'Approve');

		if ($location) {
			$approvedYachts = $approvedYachts->where('location', $location);
		}

		if ($yachtType) {
			$approvedYachts = $approvedYachts->where('yacht_type', $yachtType);
		}

		if ($yachtLength) {
			$approvedYachts = $approvedYachts->where('yacht_length <=', $yachtLength);
		}

		if ($guest) {
			$approvedYachts = $approvedYachts->where('guest <=', $guest);
		}

		if ($cabin) {
			$approvedYachts = $approvedYachts->where('cabin <=', $cabin);
		}

		if ($yachtPrice) {
			$approvedYachts = $approvedYachts->where('price', $yachtPrice);
		}

		if ($sortOrder == "lowToHigh") {
			$approvedYachts = $approvedYachts->orderBy('price', 'ASC');
		} elseif ($sortOrder == "highToLow") {
			$approvedYachts = $approvedYachts->orderBy('price', 'DESC');
		}

		$data = [
			'yachtList' => $approvedYachts->paginate(9),
			'pager' => $yachtModel->pager,
			'filter' => $filter
		];
		return view('yachtProject/us/yacht-list', $data);
	}

	public function filter($sortBy)
	{
		$productModel = new YachtModel();

		$approvedYachts = $productModel->where('status', 'Approve');

		switch ($sortBy) {
			case 'lowToHigh':
				$approvedYachts = $approvedYachts->orderBy('price', 'ASC')->paginate(9);
				break;
			case 'highToLow':
				$approvedYachts = $approvedYachts->orderBy('price', 'DESC')->paginate(9);
				break;
			case 'ascending':
				$approvedYachts = $approvedYachts->orderBy('yacht_type', 'ASC')->paginate(9);
				break;
			case 'descending':
				$approvedYachts = $approvedYachts->orderBy('yacht_type', 'DESC')->paginate(9);
				break;
			default:
				$approvedYachts = $approvedYachts->paginate(9);
		}

		$filter = [
			"booking_date" => 0,
			"location" => 0,
			"yacht_type" => "Motor Yachts",
			"yacht_length" => 0,
			"price" => 0,
			"cabin" => 0,
			"guest" => 0
		];

		$data = [
			'yachtList' => $approvedYachts,
			'pager' => $productModel->pager,
			'filter' => $filter
		];

		return view('yachtProject/us/yacht-list', $data);
	}


	public function yachtBookingPage()
	{
		$model = new YachtModel();
		$data['booking'] = $model->findAll();
		return view('yachtProject/us/yacht-booking', $data);
	}

	public function yachtBooking($id)
	{
		$model = new YachtModel();
		$data['record'] = $model->find($id);
		return view('yachtProject/us/yacht-booking', $data);
	}

	// new booking page working

	public function BookingForm()
	{
		$model = new YachtModel();
		$data['booking'] = $model->find();
		return view('yachtProject/us/booking-page', $data);
		// return view('yachtProject/us/booking-form',$data);
	}

	public function yachtBookingTest($id)
	{
		$model = new YachtModel();
		$data['record'] = $model->find($id);
		return view('yachtProject/us/booking-page', $data);
	}


	public function gotobooking()
	{
		// Initialize models
		$model = new YachtModel();
		$price = new PriceModel();

		// Get 'id' and 'price_id' from the URL parameters
		$id = $this->request->getGet('id');
		$price_id = $this->request->getGet('price_id');

		// Retrieve price details by price_id
		$data['price'] = $price->find($price_id);

		// Retrieve yacht details by id
		$data['record'] = $model->find($id);

		// Retrieve the 'hours' data from PriceModel
		$data['hours'] = $price->where('id', $price_id)->first(); // Assuming 'id' is the primary key for the PriceModel table

		// Return the view with the data
		return view('yachtProject/us/booking-page', $data);
	}


	public function yachtBook()
	{
		$bookingModel = new YachtBookingModel();
		$regervationModel = new ReservationModel();
		$session = session();

		date_default_timezone_set('Asia/Kolkata');

		$currentDate = new \DateTime('now', new \DateTimeZone('Asia/Kolkata'));

		$formattedDate = $currentDate->format('Y-m-d H:i');
		$amPm = ($currentDate->format('H') < 12) ? 'AM' : 'PM';
		$currentTimestamp = $formattedDate . ' ' . $amPm;

		$id = $this->request->getPost('id');
		$token = mt_rand(100000, 999999);

		$session->set([
			'username' => $this->request->getPost('username'),
		]);

		$data = [
			'yacht_id' => $this->request->getPost('yacht_id'),
			'token' => $this->request->getPost('username'),
			'yacht_type' => $this->request->getPost('yacht_type'),
			'hname' => $this->request->getPost('hname'),
			'username' => $this->request->getPost('username'),
			'customer_name' => $this->request->getPost('customer_name'),
			'ccount' => $this->request->getPost('ccount'),
			'phone' => $this->request->getPost('phone'),
			'email' => $this->request->getPost('email'),
			'address' => $this->request->getPost('address'),
			'booking_date' => $this->request->getPost('booking_date'),
			'booking_time' => $this->request->getPost('booking_time'),
			'price' => $this->request->getPost('price'),
			'plan_description' => $this->request->getPost('plan_description'),
			'status' => 'Pending',
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
		$model = new YachtModel();
		$dataa['record'] = $model->find($id);
		$dataa['customer'] = $data;

		return view('yachtProject/us/ticket', $dataa);
	}

	public function contact()
	{
		$data['title'] = "Contact";
		return view('yachtProject/us/contact', $data);
	}

	public function thankYou()
	{
		return view('thankyou');
	}

	public function userContact()
	{
		$name = $this->request->getPost('name');
		$mail = $this->request->getPost('email');
		$contact = $this->request->getPost('contact');
		$subject = $this->request->getPost('subject');
		$ownerCustomer = $this->request->getPost('ownerCustomer');
		$message = $this->request->getPost('message');

		$userContact = new UserContactModel();

		$data = [
			'name'     => $name,
			'email'    => $mail,
			'contact'    => $contact,
			'subject'  => $subject,
			'ownerCustomer'  => $ownerCustomer,
			'message' => $message
		];

		$userContact->insert($data);

		$config = [
			'protocol' => 'smtp',
			'SMTPHost' => 'smtp.titan.email',
			'SMTPAuth' => true,
			'SMTPPort' => 465,
			'SMTPUser' => 'web@bookmyyacht.us',
			'SMTPPass' => 'T_;$VrPN/;uJ#\M',
			'SMTPCrypto' => 'ssl',
			'mailType' => 'html',
			'charset' => 'utf-8'
		];

		$email = \Config\Services::email();
		$email->initialize($config);

		$email->setfrom('web@bookmyyacht.us', 'Book My Yacht');
		$email->setTo(['gatewayreplies@gmail.com', 'booking@bookmyyacht.us']);

		$email->setSubject('Website Inquiry | ' . $subject);

		$msg = "<!DOCTYPE html>
			<html>
			<head>
			<title></title>
			</head>
			<body style='border-top: 10px solid #3fa3df; color:#000 !important;'>
			
			<p>Hello, </p>
			<p>I hope this message finds you well. You have received an inquiry from your website.</p>
			<table >
			<tbody>
			<tr>
			<td>Name :-  $name</td>
			</tr>
			<tr>
			<td>Email :- $mail </td>
			</tr>
			<tr>
			<td>Phone :- $contact</td>
			</tr>
			<tr>
			<td>Message :- $message</td>
			</tr>
			</tbody>
			</table>
			<p style='text-align: center; color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
			</body>
			</html>";

		$email->setMessage($msg);

		if ($email->send()) {
			return redirect()->to(base_url("thank-you"))->with('success', 'Form submitted successfully');
		} else {
			return redirect()->to(site_url("us/contact"))->with('error', 'Error submitting form. Please try again later.');
		}
	}

	public function userSubscribe()
	{
		$model = new UserSubscribeModel();

		$data = [
			'name' => $this->request->getPost('name'),
			'email' => $this->request->getPost('email'),
		];

		$model->insert($data);
		return redirect()->to('us/contact');
	}

	public function aboutSubscribe()
	{
		$model = new AboutSubscribeModel();

		$data = [
			'name' => $this->request->getPost('name'),
			'email' => $this->request->getPost('email'),
		];

		$model->insert($data);
		return redirect()->to('us/about');
	}

	public function services()
	{
		$data = [
			'title' => 'Services',
		];
		return view('yachtProject/us/services', $data);
	}

	public function gallery()
	{
		$data = [
			'title' => 'Gallery',
		];
		return view('yachtProject/us/gallery', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About',
		];
		return view('yachtProject/us/about', $data);
	}

	public function terms()
	{
		$data = [
			'title' => 'Terms',
		];
		return view('yachtProject/terms', $data);
	}

	public function privacy()
	{
		$data = [
			'title' => 'Privacy',
		];

		return view('yachtProject/privacy', $data);
	}

	public function refund()
	{
		$data = [
			'title' => 'Refund',
		];
		return view('yachtProject/refund', $data);
	}

	public function support()
	{
		$data = [
			'title' => 'Support',
		];
		return view('yachtProject/support', $data);
	}

	public function footer()
	{
		return view('yachtProject/footer');
	}

	public function bookingTest()
	{
		return view('yachtProject/us/booking-test');
	}

	public function bookingConfirm()
	{
		$model = new YachtModel();
		$data['record'] = $model->findAll();
		// return view('yachtProject/us/ticket',$data);
		return view('yachtProject/us/booking-confirm', $data);
	}

	public function bookingPage()
	{
		return view('yachtProject/us/booking-page');
	}

	public function payment()
	{
		if (!session('email')) {
			return redirect()->to('admin');
		}
		return view('payment');
	}

	public function paymentRecord()
	{
		$PaymentModel = new PaymentModel();

		$data = [
			'username' => $this->request->getPost('username'),
			'bankName' => $this->request->getPost('bankName'),
			'bankAddress' => $this->request->getPost('bankAddress'),
			'ABA' => $this->request->getPost('ABA'),
			'swiftCode' => $this->request->getPost('swiftCode'),
			'IBAN' => $this->request->getPost('IBAN'),
			'accountNumber' => $this->request->getPost('accountNumber'),
			'accountType' => $this->request->getPost('accountType'),
			'beneficiaryName' => $this->request->getPost('beneficiaryName'),
		];

		$PaymentModel->insert($data);
		return redirect()->to('payment-detail');
	}

	public function paymentDetail()
	{
		$PaymentModel = new PaymentModel();
		if (!session('email')) {
			return redirect()->to('admin');
		}

		$data['payment'] = $PaymentModel->findAll();
		return view('payment-detail', $data);
	}

	public function paymentDelete($id)
	{
		$PaymentModel = new PaymentModel();

		$PaymentModel->delete($id);
		return redirect()->to('payment-detail');
	}

	public function paymentEdit($id)
	{
		$PaymentModel = new PaymentModel();

		$data['paymentEdit'] = $PaymentModel->find($id);
		return view('payment-edit', $data);
	}

	public function paymentUpdate($id)
	{
		$PaymentModel = new PaymentModel();

		$data = [
			'bankName' => $this->request->getPost('bankName'),
			'bankAddress' => $this->request->getPost('bankAddress'),
			'ABA' => $this->request->getPost('ABA'),
			'swiftCode' => $this->request->getPost('swiftCode'),
			'IBAN' => $this->request->getPost('IBAN'),
			'accountNumber' => $this->request->getPost('accountNumber'),
			'accountType' => $this->request->getPost('accountType'),
			'beneficiaryName' => $this->request->getPost('beneficiaryName'),
		];

		$PaymentModel->update($id, $data);
		return redirect()->to('payment-detail');
	}
}
