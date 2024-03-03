<?php

namespace App\Repositories;

use App\Models\Setting;
use Illuminate\Support\Collection;


class SettingRepository extends ResourceRepository {

    /**
     * @param Setting $setting
     */
    public function __construct(Setting $setting) {
        $this->model = $setting;
    }

}
