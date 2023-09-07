<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Stevebauman\Location\Facades\Location;

class RegisteredUserController extends Controller
{

    public function create(Request $request)
    {

         $ip = $request->ip();
//        $ip = '162.159.24.227';
        $currentUserInfo = Location::get($ip);
        $countries = Country::all();
        return view('frontend.sign-up',compact('countries','currentUserInfo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone_code' => ['required', 'numeric'],
            'phone' => ['required', 'numeric'],
            'currency' => ['required', 'string'],
            'rules' => ['required', 'numeric'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_code' => $request->phone_code,
            'phone' => $request->phone,
            'currency' => $request->currency,
            'rules' => $request->rules,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('user');
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
