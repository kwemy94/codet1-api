<?php

namespace App\Repositories;

use App\Models\Association;
use Illuminate\Support\Collection;


class AssociationRepository extends ResourceRepository {

    /**
     * @param Association $association
     */
    public function __construct(Association $association) {
        $this->model = $association;
    }

}
