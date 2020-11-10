<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class apiController extends Controller
{
    function viewProducts()
    {
        $produts = products::get();
        return response()->json($produts);
    }
}
