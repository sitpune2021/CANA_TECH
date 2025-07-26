<?php
 
namespace App\Controllers;
 use App\Controllers\BaseController;

class Admin extends BaseController
{
    protected $helpers = ["form","url"];

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function ContactUs()
    {
        return view('ContactUs');
    }
 
    public function SendContact()
    {
 
        $validation = \Config\Services::validation();
        $validationRules =
        [
            'name'   => 'required',
            'lastname'   => 'required',
            'email'   => 'required|valid_email',
            'phone'   => 'required|exact_length[10]',
            'message'   => 'required'
           
        ];
     
        $validationMessages = 
        [
            'name'    => [
                'required' => 'Please enter name.'
            ],
            'lastname'    => [
                'required' => 'Please enter last name.'
            ],
             'phone'    => [
                'required' => 'Please enter mobile number.',
                'exact_length' => 'Mobile number should be 10 digits.'
             ],
              'email'    => [
                'required' => 'Please enter email.',
                'valid_email' => 'Please enter valid email.',
              ],
               'message'    => [
                'required' => 'Please enter message.'
            ]
        ];
 
        if ($this->validate($validationRules,$validationMessages))
        {
            $name     = $_POST['name'];        
            $lastname = $_POST['lastname'];        
            $email    = $_POST['email'];
            $phone    = $_POST['phone'];
            $message  = $_POST['message'];
 
            $emailService = \Config\Services::email();
           
 
            $emailService->setFrom($email, 'Canatech Contact Form');
            $emailService->setTo('dattatrayshembade2001@gmail.com ');
            $emailService->setSubject('New Contact Form Submission');
 
            $emailContent = "
                <h2>New Contact Form Submission</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Message:</strong> $message</p>
            ";
         
 
            $emailService->setMessage($emailContent);
 
            if ($emailService->send()) {
                return redirect()->to('/admin/ContactUs')->with('success', 'Your message has been sent successfully!');
            } else {
                return redirect()->to('/admin/ContactUs')->with('error', 'Failed to send message. Please try again.');
            }
        }else
        {
            return view('ContactUs', ['validation' => $validation]);
        }
       
       
    }
 
 
 
}
 