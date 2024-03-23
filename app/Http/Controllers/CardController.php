<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Repositories\CardRepository;
use App\Http\Validation\CardValidation;

use Illuminate\Support\Facades\Validator;

use function App\Helpers\errorManager;
use function App\Helpers\mysaveErrorManager;

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
        $cards = $this->cardRepository->getAll();

        // return response()->json($cartes);
        return response()->json([
            "success" => true,
            "cards" =>$cards,
            "message" => ""
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CardValidation $cardValidation)
    {
        $validator = Validator::make($request->all(), $cardValidation->rules(), $cardValidation->message());

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                'errors' => $validator->errors(),
                'message' => "Validation error"
            ], 422);
        }

        $inputs = $request->all();
        try {
            $this->cardRepository->store($inputs);
            $cards = $this->cardRepository->getAll();

        } catch (\Throwable $th) {
            errorManager("STORE CARD : ", $th);
            return response()->json([
                "success" => false,
                'errors' => $th->getMessage(),
                'message' => 'Une erreur survenue. Contacter l\'administrateur'
            ], 500);
        }

        return response()->json([
            "success" => true,
            'cards'=> $cards,
            "message" => "Carte crée avec succès !"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $card = $this->cardRepository->getById($id);

        if (!$card) {
            return response()->json([
                "success" => false,
                "message" => "Carte non trouvée"
            ]);
        }

        return response()->json([
            "success" => true,
            "data" => [
                "card" => $card
            ],
            "message" => ""
        ]);
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
    public function update(Request $request, $id)
    {
        $inputs = $request->all();
        try {
            $this->cardRepository->update($id, $inputs);
            $cards = $this->cardRepository->getAll();

        } catch (\Throwable $th) {
            errorManager("UPDAT CARD : ", $th);
            return response()->json([
                "success" => false,
                'errors' => $th->getMessage(),
                "message" => ""
            ], 500);
        }

        return response()->json([
            "success" => true,
            'data' => [
                'cards'=> $cards
            ],
            'message' => "Carte mise à jour avec succès !"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $card = $this->cardRepository->getById($id);

        if (!$card) {
            return response()->json([
                "success" => false,
                'message' => "Card not found"
            ], 400);
        }

        try {
            $this->cardRepository->destroy($id);
            $cards = $this->cardRepository->getAll();

        } catch (\Throwable $th) {
            errorManager("DELET CARD : ", $th);
            return response()->json([
                "success" => false,
                'errors' => $th->getMessage(),
                "message" => "Une erreur est survenue"
            ], 500);
        }

        return response()->json([
            "success" => true,
            'cards'=> $cards,
            'message' => "Carte supprimée avec succès !"
        ], 200);
    }
}
