<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
Route::get('/viewAllApi',[apiController::class,'viewProducts']);
