<?php

namespace App\Repositories;

use App\Models\Project;
use Illuminate\Support\Collection;


class ProjectRepository extends ResourceRepository {

    /**
     * @param Project $project
     */
    public function __construct(Project $project) {
        $this->model = $project;
    }

}
