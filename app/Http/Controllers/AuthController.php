<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119111,
        'name' => 'Mohammad Bagus Prakoso',
        'gender' => 'Male',
        'phone' => '085803425046',
        'class' => 'XII RPL 4'];
  }
}
