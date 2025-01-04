<?php

namespace App\Http\Controllers;

use App\Models\donation_shelter;
use App\Http\Requests\Storedonation_shelterRequest;
use App\Http\Requests\Updatedonation_shelterRequest;
use App\Models\Donation;
use App\Models\Shelter;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;

class DonationShelterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('make');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HttpRequest $request)
    {
        $shelters = Shelter::create([
            'name' => $request['name'],

            'email' => $request['email'],
            'phone' => $request['phone'],
        ]);
        return redirect()->route('addshelter');
    }
    public function store2(HttpRequest $request, $shelter)
    {
        $donations = Donation::create([

            'amounet' => $request->input('amount'),
            'user_id' => auth()->user()->id,
            'shelter_id' => $shelter,
        ]);


        return redirect()->route('donate');
    }


    /**
     * Display the specified resource.
     */
    public function show(donation_shelter $donation_shelter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(donation_shelter $donation_shelter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedonation_shelterRequest $request, donation_shelter $donation_shelter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(donation_shelter $donation_shelter)
    {
        //
    }
}
