<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Collection;


class UserRepository extends ResourceRepository {

    /**
     * @param User $user
     */
    public function __construct(User $user) {
        $this->model = $user;
    }

}
