<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $orders = [
        [
            'fio' => 'asdad',
            'phone' => 'asdasd',
            'email' => 'asdasd@asdasd.we',
            'description' => 'asasdasddas',
        ],
        [
            'fio' => 'asdad2',
            'phone' => 'asdasd2',
            'email' => 'asdasd2@asdasd.we',
            'description' => 'sads22asasdasddas',
        ],
    ];


}
