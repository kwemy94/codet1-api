<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

if (!function_exists('saveErrorManager')) {
    function errorManager($action,$message)
    {
        DB::table('error_managers')->insert(['id'=>Str::random(30),'action' => $action, 'message' => $message,'created_at'=>now()]);
    }
}