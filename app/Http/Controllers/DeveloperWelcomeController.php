<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeDeveloper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DeveloperWelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        Mail::to('saufitrod@gmailcom')
            ->send(new WelcomeDeveloper());
        return 'okeeyy';
    }
}
