<?php

namespace App\Http\Controllers;

use App\Http\Validation\DonationValidation;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Repositories\DonationRepository;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{
    private $donationRepository;

    public function __construct(DonationRepository $donationRepository){
        $this->donationRepository = $donationRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, DonationValidation $donationValidation)
    {
        $validator = Validator::make(
            $request->all(),
            $donationValidation->rules(),
            $donationValidation->message()
        );

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                'errors' => $validator->errors()
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
