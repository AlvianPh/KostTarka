<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function resetPasswordForm()
    {
        $data['title'] = "Reset Password";
        return view('reset_password', $data);
    }

    public function processResetPassword()
    {
        $email = $this->request->getPost('email');

        // Simulasi validasi dan proses reset password
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('success', 'Email sent to ' . $email);
        } else {
            return redirect()->back()->with('error', 'Invalid email address');
        }
    }
}
