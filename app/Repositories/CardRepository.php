<?php

namespace App\Repositories;

use App\Models\Card;
use Illuminate\Support\Collection;


class CardRepository extends ResourceRepository {

    /**
     * @param Card $card
     */
    public function __construct(Card $card) {
        $this->model = $card;
    }

    public function getAll(){
        return $this->model->orderByDesc('amount')->get();
    }

}
