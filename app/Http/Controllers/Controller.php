<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function users()
    {
        return  Inertia::render('Users', [
            'users' => $this->data()
        ]);
    }

    public function user($id)
    {
        return Inertia::render('User', [
            'user' => $this->data()[$id - 1],
        ]);
    }

    public function data(){
       return [
            [
                'id'   => 1,
                'name' => 'Adam',
            ],
            [
                'id'   => 2,
                'name' => 'Oleg',
            ],
            [
                'id'   => 3,
                'name' => 'Ivan',
            ],
            [
                'id'   => 4,
                'name' => 'Alex',
            ]
        ];
    }
}
