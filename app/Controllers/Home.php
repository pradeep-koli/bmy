<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\YachtModel;
use App\Models\HistoryModel;
use App\Models\FilesModel;
use App\Models\PriceModel;
use App\Models\ServiceModel;

use CodeIgniter\I18n\Time;
use CodeIgniter\Email\Email;

class Home extends BaseController
{
    public function index()
    {
        return view('auth-login');
    }


    public function abc()
    {
        $serviceModel = new ServiceModel();

        // Fetch all services from the database
        $data['services'] = $serviceModel->findAll();

        // Load the view and pass services data
        return view('service_view', $data);
    }

    public function addService()
    {
        if ($this->request->getMethod() === 'post') {
            // Get the comma-separated services from the textarea
            $services = $this->request->getPost('service_name');

            // Convert the string into an array, trim spaces and remove empty values
            $servicesArray = array_filter(array_map('trim', explode(',', $services)));

            if (!empty($servicesArray)) {
                $serviceModel = new ServiceModel();

                // Loop through each service and insert it into the database
                foreach ($servicesArray as $service) {
                    $serviceModel->save(['service_name' => $service]);
                }

                return redirect()->to('/service');
            }
        }
        return view('add_service');
    }
    // working code

    // public function addService()
    // {
    //     if ($this->request->getServer('REQUEST_METHOD') === 'POST') {
    //         $services = $this->request->getPost('service_name');

    //         $servicesArray = array_filter(array_map('trim', explode(',', $services)));

    //         if (!empty($servicesArray)) {
    //             $serviceModel = new ServiceModel();

    //             foreach ($servicesArray as $service) {
    //                 $serviceModel->save(['service_name' => $service]);
    //             }

    //             return redirect()->to('/service');
    //         }
    //     }
    //     return view('add_service');
    // }




    public function show404()
    {
        echo view('errors/404');
    }

    public function dashboardPage()
    {
        if (!session('email')) {
            return redirect()->to('admin');
        }
        return view('index');
        // return redirect()->to('dashboard');
    }

    public function userRegister()
    {
        return view('user-register');
    }

    public function managerRegister()
    {
        return view('manager-register');
    }

    public function managerLogin()
    {
        return view('manager-login');
    }

    public function resetPassword()
    {
        return view('reset-password');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function verifyViewOTP()
    {
        return view('verify-otp');
    }

    // working code start
    public function sendOtp()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->to('forgot-password')->with('error', 'Invalid email format. Please enter a valid email address.');
        }

        $otp = rand(100000, 999999);

        $user = $model->where('email', $email)->first();

        if (!$user) {
            return redirect()->to('forgot-password')->with('error', 'Email address not found. Please enter a registered email address.');
        }

        $model->where('email', $email)->set(['otp' => $otp])->update();

        $this->sendEmail($email, $otp);

        return redirect()->to('verify-otp');
    }


    private function sendEmail($email, $otp)
    {
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

        $emailService = \Config\Services::email();
        $emailService->initialize($config);

        $emailService->setfrom('web@bookmyyacht.us', 'Book My Yacht');

        $emailService->setto($email);
        $emailService->setSubject('Password Reset Request ');
        $emailService->setMessage('Your OTP code is: ' . $otp);

        if (!$emailService->send()) {
            log_message('error', 'Email not sent: ' . $emailService->printDebugger());
        } else {
            log_message('info', 'OTP email sent to: ' . $email);
        }
    }

    public function verifyOtp()
    {
        $model = new UserModel();
        $otp = trim($this->request->getPost('otp'));

        if (!empty($otp)) {
            log_message('debug', 'Verifying OTP: ' . $otp);
            $user = $model->where('otp', $otp)->first();

            if ($user) {
                session()->set(['id' => $user['id']]);
                return redirect()->to('reset-password');
            } else {
                log_message('error', 'Invalid OTP provided: ' . $otp);
                return redirect()->back()->with('error', 'Invalid OTP. Please try again.');
            }
        }
        return view('verify_otp');
    }


    public function resetPasswordInsert()
    {
        $validationRules = [
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]'
        ];

        if (!$this->validate($validationRules)) {
            $data['validation'] = $this->validator;
            return view('reset-password', $data);
        }

        $model = new UserModel();
        $userId = session()->get('id');

        $newPassword = $this->request->getVar('password');

        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT); 

        $model->update($userId, [
            'password' => $hashedPassword, 
            'otp' => null
        ]);

        $user = $model->find($userId);

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

        $emailService = \Config\Services::email();
        $emailService->initialize($config);

        $emailService->setFrom('web@bookmyyacht.us', 'Book My Yacht');
        $emailService->setTo($user['email']);
        $emailService->setSubject('Password Updated');
        $emailService->setMessage('Your password has been updated successfully.');

        if (!$emailService->send()) {
            $data['error'] = $emailService->printDebugger(['headers']);
            return view('reset-password', $data);
        }

        return redirect()->to('admin');
    }




    public function loginInsert()
    {
        $model = new UserModel();
        $user = $model->where('email', $this->request->getVar('email'))->first();

        if ($user && password_verify($this->request->getVar('password'), $user['password'])) {
            $this->setUserSession($user);
            return redirect()->to('calendar');
        }
        return view('admin');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }
    // working code end

    public function registerPage()
    {
        // if(!session('email') ){
        //     return redirect()->to('admin');
        // }
        return view('auth-register');
    }

    public function do_register()
    {
        $userModel = new UserModel();
        $userHistory = new HistoryModel();

        $resetCode = mt_rand(100000, 999999);
        $mail = $this->request->getPost('email');

        $userData = [
            'name' => $this->request->getPost('name'),
            'email' => $mail,
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'phone' => $this->request->getPost('phone'),
            'gender' => $this->request->getPost('gender'),
            'address' => $this->request->getPost('address'),
            'country' => $this->request->getPost('country'),
            'role' => $this->request->getPost('role'),
            'reset_code' => $resetCode,
        ];

        $userModel->insert($userData);

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
        // $email->setto('kolipradeep15@gmail.com');
        $email->setto($mail);

        // $email->setSubject($subject);
        $email->setSubject('Account Creation ');

        $msg = "<!DOCTYPE html>
        <html>
        <head>
        <title></title>
        </head>
        <body style='border-top: 10px solid #3fa3df; color:#000 !important;'>
        <div style='padding: 10px; background-color:white;'>
        
        </div>
        <h2>Welcome to Our Platform</h2>
        <p>Your account has been successfully created. Enjoy our services!</p>
        <table >
        <tbody>
        
        <tr>
        <td>Email :- $mail </td>
        </tr>
        
        </tbody>
        </table>
        <p style='text-align: center; color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
        </body>
        </html>";

        $email->setMessage($msg);

        $email->send();

        $currentDateTime = date('Y-m-d H:i:s');

        $agent = $this->request->getUserAgent();

        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->getRobot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }

        $logsData = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'status' => 'register',
            'data_time' => $currentDateTime,
            'IP' => $this->request->getIPAddress(),
            'browser' => $this->request->getUserAgent()->getBrowser(),
            'os' => $agent->getPlatform(),
        ];

        $userHistory->insert($logsData);
        return redirect()->to('admin');
    }

    public function do_login()
    {
        $userModel = new UserModel();
        $userHistory = new HistoryModel();

        $session = session();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();
        $currentDateTime = date('Y-m-d H:i:s');

        $agent = $this->request->getUserAgent();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'email' => $user['email'],
                'name' => $user['name'],
                'id' => $user['id'],
                'role' => $user['role'],
                'isLoggedIn' => true,
            ]);

            $logsData = [
                'name' => $user['name'],
                'email' => $email,
                'status' => 'login',
                'data_time' => $currentDateTime,
                'IP' => $this->request->getIPAddress(),
                'browser' => $this->request->getUserAgent()->getBrowser(),
                'os' => $agent->getPlatform(),
            ];

            $userHistory->insert($logsData);

            if ($user['role'] === 'admin' || $user['role'] === 'manager') {
                return redirect()->to('calendar');
            } elseif ($user['role'] === 'user') {
                return redirect()->to('admin-yacht-booking');
            }
        } else {
            // return redirect()->to('admin');
            return redirect()->to('admin')->with('error', 'Email or password does not match, please try again.');
        }
    }



    public function logout()
    {
        $userModel = new UserModel();
        $userHistory = new HistoryModel();
        $session = session();

        $currentDateTime = date('Y-m-d H:i:s');

        $agent = $this->request->getUserAgent();

        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->getRobot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }

        $session->set([
            // 'email' => 'email',
            // 'name' => 'name',
            'data_time' => $currentDateTime,
            'os' => $agent->getPlatform()

        ]);

        $userHistory->save([
            'name' => session('name'),
            'email' => session('email'),
            'status' => 'logout',
            'data_time' => session('data_time'),
            'IP' =>  $this->request->getIPAddress(),
            'browser' => $this->request->getUserAgent()->getBrowser(),
            'os' => $agent->getPlatform()
        ]);

        $session = session();
        $session->destroy();
        return redirect()->to('admin');
    }

    // yacht crud operation start


    public function yachtRecordInsert()
    {
        $userModel = new YachtModel();
        $filesModel = new FilesModel();
        $priceModel = new PriceModel();
        $serviceModel = new ServiceModel();

        $session = session();

        // Handle file upload for thumbnail image
        $file = $this->request->getFile('thumb-img');
        if ($file->isValid() && !$file->hasMoved()) {
            $imgName = $file->getClientName();
            $file->move('uploads/thumbnail/', $imgName);
        }

        $session->set([
            'username' => $this->request->getPost('username'),
        ]);

        // Get and format start and end time
        $start_time = $this->request->getPost('start_time');
        $end_time = $this->request->getPost('end_time');

        $StartTime = date('h:i A', strtotime($start_time));
        $EndTime = date('h:i A', strtotime($end_time));

        // Prepare yacht data
        $data = [
            'id' => $this->request->getPost('id'),
            'days' => implode(',', $this->request->getVar('days')),
            'start_time' => $StartTime,
            'end_time' => $EndTime,
            'username' => $this->request->getPost('username'),
            'status' => 'Pending',
            'build_name' => $this->request->getPost('build_name'),
            'about' => $this->request->getPost('about'),
            'yacht_length' => $this->request->getPost('yacht_length'),
            'size' => $this->request->getPost('size'),
            'hname' => $this->request->getPost('hname'),
            'location' => $this->request->getPost('location'),
            'address' => $this->request->getPost('address'),
            'yacht_type' => $this->request->getPost('yacht_type'),
            'engine' => $this->request->getPost('engine'),
            'max_speed' => $this->request->getPost('max_speed'),
            'builder' => $this->request->getPost('builder'),
            'year_of_build' => $this->request->getPost('year_of_build'),
            'guest' => $this->request->getPost('guest'),
            'cabin' => $this->request->getPost('cabin'),
            'thumb-img' => $imgName,
            'other' => $this->request->getPost('other'),
        ];

        // Insert yacht data and get the inserted ID
        $postId = $userModel->insert($data);

        // Ensure the yacht was inserted successfully
        if ($postId) {
            // Upload additional images
            $uploadedFiles = $this->request->getFiles();
            foreach ($uploadedFiles['images'] as $image) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $newImg = $image->getClientName();
                    $image->move('uploads/mainContent/', $newImg);

                    $imageData = [
                        'yacht_id' => $postId,
                        'images' => $newImg,
                    ];
                    $filesModel->insert($imageData);
                }
            }

            // Handle pricing data for different hours and days
            $hours = $this->request->getPost('hours');
            $prices = $this->request->getPost('rent');
            $mrp_price = $this->request->getPost('mrp_price');
            $days = $this->request->getPost('day');
            $packs = $this->request->getPost('packs');

            foreach ($hours as $key => $hour) {
                $rentDetailData = [
                    'yacht_id' => $postId,
                    'hours' => $hour,
                    'rent' => $prices[$key],
                    'mrp_price' => $mrp_price[$key],
                    'day' => $days[$key],
                    'packs' => $packs[$key],
                ];

                $priceModel->insert($rentDetailData);
            }

            // Update the price in the yacht record
            if (!empty($prices)) {
                $recordData = [
                    'price' => $prices[0], // Update with the first price
                ];

                $userModel->where('id', $postId)->set($recordData)->update();
            }

            $services = $this->request->getPost('service_name');
            $servicesArray = array_filter(array_map('trim', explode(',', $services)));

            if (!empty($servicesArray)) {
                if ($postId && $userModel->find($postId)) {
                    foreach ($servicesArray as $service) {
                        $serviceModel->save([
                            'service_name' => $service,
                            'service_id' => $postId,
                        ]);
                    }
                } else {
                    return redirect()->to('yacht-record')->with('error', 'Yacht record not found or could not be inserted.');
                }
            }

            return redirect()->to('yacht-record');
        } else {
            return redirect()->to('yacht-record')->with('error', 'Failed to insert yacht record.');
        }
    }



    public function yachtRecord()
    {
        $recordModel = new YachtModel();
        $PriceModel = new PriceModel();

        if (!session('email')) {
            return redirect()->to('admin');
        }

        $data['yacht'] = $recordModel->findAll();

        return view('yacht-record', $data);
    }



    public function yachtRecordEdit($id)
    {
        $yachtModel = new YachtModel();
        $priceModel = new PriceModel();
        $ServiceModel = new ServiceModel();
        $FilesModel = new FilesModel();

        $data['record'] = $yachtModel->find($id);
        $data['price'] = $priceModel->where('yacht_id', $id)->findAll();

        $files = $FilesModel->where('yacht_id', $id)->findAll();

        foreach ($files as &$file) {
            $file['image_url'] = base_url('uploads/mainContent/' . $file['images']);
        }

        $data['file'] = $files;

        $services = $ServiceModel->where('service_id', $id)->findAll();

        $serviceNames = array_column($services, 'service_name');
        $data['serviceNames'] = implode(', ', $serviceNames);

        return view('yacht-record-edit', $data);
    }


    public function updateStatus()
    {
        $model = new YachtModel();

        $id = $this->request->getPost('id');
        $status = $this->request->getPost('status');

        $model->where('id', $id)->set('status', $status)->update();
        return redirect()->to('yacht-record');
    }


    public function yachtRecordDelete($id)
    {
        $model = new YachtModel();
        $FilesModel = new FilesModel();
        $PriceModel = new PriceModel();
        $ServiceModel = new ServiceModel();
        $yacht = $model->find($id);

        if ($yacht) {
            $thumbnailPath = FCPATH . 'uploads/thumbnail/' . $yacht['thumb-img'];
            if (file_exists($thumbnailPath)) {
                unlink($thumbnailPath);
            }

            $files = $FilesModel->where('yacht_id', $id)->findAll();

            foreach ($files as $file) {
                $imagePath = FCPATH . 'uploads/mainContent/' . $file['images'];
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $FilesModel->where('yacht_id', $id)->delete();

            $PriceModel->where('yacht_id', $id)->delete();

            $ServiceModel->where('service_id', $id)->delete();

            $model->delete($id);
        }

        return redirect()->to('yacht-record');
    }

    // 
    public function deleteImage()
    {
        $imageId = $this->request->getPost('image_id');

        $FilesModel = new FilesModel();
        $image = $FilesModel->find($imageId);

        if ($image) {
            $imagePath = 'uploads/mainContent/' . $image->images;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $FilesModel->delete($imageId);

            return $this->response->setJSON(['success' => true]);
        }

        return $this->response->setJSON(['success' => false, 'error' => 'Image not found']);
    }

    // 


    public function yachtRecordUpdate($id)
    {
        $model = new YachtModel();
        $priceModel = new PriceModel();
        $serviceModel = new ServiceModel();
        $FilesModel = new FilesModel();

        $prod_item = $model->find($id);
        $old_img_name = $prod_item['thumb-img'];

        $image = $this->request->getFile('thumb-img');

        if ($image->isValid() && !$image->hasMoved()) {
            if (file_exists('uploads/thumbnail/' . $old_img_name)) {
                unlink('uploads/thumbnail/' . $old_img_name);
            }
            $newName = $image->getClientName();
            $image->move('uploads/thumbnail/', $newName);
        } else {
            $newName = $old_img_name;
        }

        $start_time = $this->request->getPost('start_time');
        $end_time = $this->request->getPost('end_time');

        $StartTime = date('h:i A', strtotime($start_time));
        $EndTime = date('h:i A', strtotime($end_time));

        $data = [
            'days' => implode(',', $this->request->getVar('days')),
            'start_time' => $StartTime,
            'end_time' => $EndTime,
            'build_name' => $this->request->getPost('build_name'),
            'yacht_length' => $this->request->getPost('yacht_length'),
            'size' => $this->request->getPost('size'),
            'hname' => $this->request->getPost('hname'),
            'location' => $this->request->getPost('location'),
            'address' => $this->request->getPost('address'),
            'yacht_type' => $this->request->getPost('yacht_type'),
            'engine' => $this->request->getPost('engine'),
            'max_speed' => $this->request->getPost('max_speed'),
            'builder' => $this->request->getPost('builder'),
            'year_of_build' => $this->request->getPost('year_of_build'),
            'guest' => $this->request->getPost('guest'),
            'cabin' => $this->request->getPost('cabin'),
            'price' => $this->request->getPost('price'),
            'about' => $this->request->getPost('about'),
            'other' => $this->request->getPost('other'),
            'thumb-img' => $newName
        ];

        $model->update($id, $data);

        // Delete old pricing records
        $priceModel->where('yacht_id', $id)->delete();

        // Insert new pricing records
        $hours = $this->request->getPost('hours');
        $prices = $this->request->getPost('rent');
        $mrp_price = $this->request->getPost('mrp_price');
        $days = $this->request->getPost('day');
        $packs = $this->request->getPost('packs');

        foreach ($hours as $key => $hour) {
            $rentDetailData = [
                'yacht_id' => $id,
                'hours' => $hour,
                'rent' => $prices[$key],
                'mrp_price' => $mrp_price[$key],
                'day' => $days[$key],
                'packs' => $packs[$key],
            ];

            $priceModel->insert($rentDetailData);
        }

        if (!empty($prices)) {
            $recordData = [
                'price' => $prices[0], // Update with the first price
            ];
        }

        $model->where('id', $id)->set($recordData)->update();

        // Update or insert service data
        $services = $this->request->getPost('service_name');
        $servicesArray = array_filter(array_map('trim', explode(',', $services)));

        if (!empty($servicesArray)) {
            if ($id && $model->find($id)) {
                // First delete existing services for this yacht
                $serviceModel->where('service_id', $id)->delete();

                // Then insert new services
                foreach ($servicesArray as $service) {
                    $serviceModel->save([
                        'service_name' => $service,
                        'service_id' => $id,
                    ]);
                }
            } else {
                return redirect()->to('yacht-record')->with('error', 'Yacht record not found or could not be updated.');
            }
        }

        return redirect()->to('yacht-record');
    }




    public function ImagesRecord()
    {

        if (!session('email')) {
            return redirect()->to('admin');
        }

        $imageModel = new FilesModel();
        $images = $imageModel->findAll();
        return view('images-records', ['images' => $images]);
    }

    public function ImagesEdit($id)
    {
        $imageModel = new FilesModel();
        $data['images'] = $imageModel->find($id);
        return view('images-edit', $data);
    }
    // yacht crud operation end

    // user crud operation start
    public function do_userData()
    {

        if (!session('email')) {
            return redirect()->to('admin');
        }

        $UserTable = new UserModel();
        $data['users'] = $UserTable->findAll();
        return view('user-records', $data);
    }

    public function deleteData($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('user-records');
    }

    public function editData($id)
    {

        $model = new UserModel();

        $data['users'] = $model->find($id);
        return view('formEdit', $data);
    }

    public function updateUser($id)
    {
        $userModel = new UserModel();

        $userData = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'phone' => $this->request->getPost('phone'),
            'gender' => $this->request->getPost('gender'),
            'address' => $this->request->getPost('address'),
            'country' => $this->request->getPost('country'),
        ];

        $userModel->update($id, $userData);

        return redirect()->to('user-records');
    }

    public function userAllRecord()
    {

        if (!session('email')) {
            return redirect()->to('admin');
        }

        $HistoryModel = new HistoryModel();
        $data['users'] = $HistoryModel->findAll(); // Fetch data from the database
        return view('user-history', $data);
    }

    // User Crud Operation End

    // Extra Images Add Record
    public function img()
    {
        $filesModel = new FilesModel();

        $files = $this->request->getFiles();

        foreach ($files['images'] as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newImg = $file->getClientName();
                $file->move('uploads/mainContent', $newImg);

                $imageData = [
                    'yacht_id' => $this->request->getPost('id'),
                    'images' => $newImg,
                ];
                $filesModel->insert($imageData);
            }
        }

        return redirect()->to('yacht-record');
    }
}
