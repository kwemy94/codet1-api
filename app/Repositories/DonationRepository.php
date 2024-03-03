<?php

namespace App\Repositories;

use App\Models\Donation;
use Illuminate\Support\Collection;


class DonationRepository extends ResourceRepository {

    /**
     * @param Donation $donation
     */
    public function __construct(Donation $donation) {
        $this->model = $donation;
    }

}
