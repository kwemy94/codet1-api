<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Repositories\CardRepository;
use Illuminate\Http\Request;

class CardController extends Controller
{

    private $cardRepository;

    public function __construct(CardRepository $cardRepository){
        $this->cardRepository = $cardRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartes = $this->cardRepository->getAll();

        return response()->json([
            "success" => true,
            "data" => [
                "cartes" => $cartes
            ]
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        //
    }
}
