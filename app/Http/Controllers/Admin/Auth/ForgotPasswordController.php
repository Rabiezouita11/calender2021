<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
 
    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('admin.passwords.email');
    }
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function broker()
    {
        return Password::broker('admins');
    }
    }