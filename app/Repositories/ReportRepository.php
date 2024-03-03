<?php

namespace App\Repositories;

use App\Models\Report;
use Illuminate\Support\Collection;


class ReportRepository extends ResourceRepository {

    /**
     * @param Report $report
     */
    public function __construct(Report $report) {
        $this->model = $report;
    }

}
