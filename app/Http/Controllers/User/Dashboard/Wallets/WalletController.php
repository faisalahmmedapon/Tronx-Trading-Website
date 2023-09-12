<?php

namespace App\Http\Controllers\User\Dashboard\Wallets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        return view('frontend.auth.wallets');
    }
}
