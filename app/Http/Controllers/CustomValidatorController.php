<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomValidatorController extends Controller
{
    public function getCustomValidation() {
        return view('customvalidation');
    }
    public function postCustomValidation(Request $request) {
        $this->validate($request, [
            'phone' => 'required|in_phone',
        ]);
        return 'successfully';
    }
}
