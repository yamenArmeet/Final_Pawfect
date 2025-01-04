<?php

namespace App\Http\Controllers;

use App\Models\Shelter;
use Illuminate\Http\Request;

class TheMainController extends Controller
{
    public function aboutUs()
    {
        return view('abuot.about');
    }
    public function Adoption()
    {
        return view('Adoption.Adoption');
    }
    public function index()
    {
        $shelters = Shelter::all();
        return view('donation.donation', compact('shelters'));
    }

    public function DonateInfo()
    {
        return view('donation.donationInfo');
    }


    public function DonatePayment($shelter)
    {
        return view('donation.donationPayment', compact('shelter'));
    }

    public function store()
    {
        return view('store.storePayment');
    }

    public function storecard()
    {
        return view('store.store');
    }
    public function SingUp()
    {
        return view('login.SingUp');
    }
}
