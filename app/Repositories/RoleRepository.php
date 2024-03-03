<?php

namespace App\Repositories;

use App\Models\Role;
use Illuminate\Support\Collection;


class RoleRepository extends ResourceRepository {

    /**
     * @param Role $role
     */
    public function __construct(Role $role) {
        $this->model = $role;
    }

}
