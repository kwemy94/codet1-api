<?php

namespace App\Repositories;

use App\Models\Payment;
use Illuminate\Support\Collection;


class PaymentRepository extends ResourceRepository {

    /**
     * @param Payment $payment
     */
    public function __construct(Payment $payment) {
        $this->model = $payment;
    }

}
