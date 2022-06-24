<?php

namespace App\Http\Controllers;

use App\Services\Newslatter as ServicesNewslatter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Newslatter extends Controller
{
    public function __invoke(ServicesNewslatter $newslatter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newslatter->subscribe(request('email'));
        } catch (\Throwable $th) {
            throw ValidationException::withMessages([
                'email' => 'this email could not be added to our newslatter list.'
            ]);
        }

        return redirect('/')->with('success', 'You are now signed up for our newsletter');
    }
}
