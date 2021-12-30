<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119044,
        'name' => 'Bima Adhi Nugraha',
        'gender' => 'Male',
        'phone' => '085747336294',
        'class' => 'XII RPL 2'];
  }
}
