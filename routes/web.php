<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\productController;
use App\Http\Controllers\excellController;
use App\Http\Middleware\CheckUser;



//product pages
Route::middleware([CheckUser::class])->group(function () {
    //Route::middleware([manager::class])->group(function () {
    Route::get('/newProduct', [productController::class,'addProductForm']);
    Route::get('/viewAll',[productController::class,'viewProducts']);
    Route::get('/viewAvailable',[productController::class,'viewAvailableProducts']);
    Route::get('/viewNotAvailable',[productController::class,'viewEmptyProducts']);
    Route::get('/viewAllTransactions',[productController::class,'viewTransactions']);
    
    Route::post('/addProduct',[productController::class,'addProduct']);
    Route::post('/updateProductForm/{id}',[productController::class,'updateProductForm']);
    Route::post('/updateProduct/{name}',[productController::class,'updateProduct']);
    Route::post('/deleteProduct/{id}',[productController::class,'deleteProduct']);
    Route::post('/sellProductForm/{id}',[productController::class,'sellProductForm']);
    Route::post('/sellProductForm/{id}/{mess}',[productController::class,'sellProductFormE']);
    Route::post('/sellProduct/{id}',[productController::class,'sellProduct']);
    Route::post('/searchProduct',[productController::class,'search']);
    
    
    // client pages
    
    Route::get('/newClient', [clientController::class,'addClientForm']);
    Route::get('/viewAllClients',[clientController::class,'allClients']);
    Route::get('/viewAllSellTransactions',[clientController::class,'transactions']);
    Route::get('/viewClientTransactions',[clientController::class,'viewTransactions']);
    
    Route::post('/addClient',[clientController::class,'addClient']);
    Route::post('/updateClientForm/{id}',[clientController::class,'updateClientForm']);
    Route::post('/updateClient/{id}',[clientController::class,'updateClient']);
    Route::post('/deleteClient/{id}',[clientController::class,'deleteClient']);
    Route::post('/searchClient',[clientController::class,'search']);
    Route::post('/searchClientTransaction',[clientController::class,'searchTransaction']);
    //supplier
    
    Route::get('/newSupplier',[supplierController::class,'addSupplierForm']);
    Route::get('/viewAllSuppliers',[supplierController::class,'allSuppliers']);
    Route::post('/searchSupplierTransaction',[supplierController::class,'searchTransaction']);
    Route::get('/viewAllBuyTransactions',[supplierController::class,'transactions']);
    Route::get('/viewSupplierTransactions',[supplierController::class,'viewTransactions']);
    Route::post('/searchSupplier',[supplierController::class,'search']);
    Route::post('/addSupplier',[supplierController::class,'addSupplier']);
    Route::post('/updateSupplierForm/{id}',[supplierController::class,'updateSupplierForm']);
    Route::post('/updateSupplier/{id}',[supplierController::class,'updateSupplier']);
    Route::post('/deleteSupplier/{id}',[supplierController::class,'deleteSupplier']);
 


    Route::get('/export', [excellController::class,'buyTransactions']);

    //employee
    Route::get('/newEmployee',[employeeController::class,'signUpForm']);
    Route::post('/addEmployee',[employeeController::class,'signup']);
    
    });
    Route::get('/',[employeeController::class,'loginForm']);
    Route::post('/login',[employeeController::class,'login']);
    Route::get('/signUpForm',[employeeController::class,'signUpForm']);
    Route::post('/signup',[employeeController::class,'signup']);
    Route::get('/logout',[employeeController::class,'logout']);

    /*
       Route::middleware([HR::class])->group(function () {
    });
    Route::middleware([sales::class])->group(function () {
        Route::get('/newProduct', [productController::class,'addProductForm']);
        Route::get('/viewAll',[productController::class,'viewProducts']);
        Route::get('/viewAvailable',[productController::class,'viewAvailableProducts']);
        Route::get('/viewNotAvailable',[productController::class,'viewEmptyProducts']);
        Route::get('/viewAllTransactions',[productController::class,'viewTransactions']);
        
        Route::post('/addProduct',[productController::class,'addProduct']);
        Route::post('/updateProductForm/{id}',[productController::class,'updateProductForm']);
        Route::post('/updateProduct/{name}',[productController::class,'updateProduct']);
        Route::post('/deleteProduct/{id}',[productController::class,'deleteProduct']);
        Route::post('/sellProductForm/{id}',[productController::class,'sellProductForm']);
        Route::post('/sellProduct/{id}',[productController::class,'sellProduct']);
        Route::post('/searchProduct',[productController::class,'search']);
    });
    Route::middleware([acountant::class])->group(function () {
        Route::get('/viewAllSellTransactions',[clientController::class,'transactions']);
        Route::get('/viewClientTransactions',[clientController::class,'viewTransactions']);
        Route::get('/viewAllBuyTransactions',[supplierController::class,'transactions']);
        Route::get('/viewSupplierTransactions',[supplierController::class,'viewTransactions']);
    });
    Route::middleware([customerService::class])->group(function () {
        Route::get('/newClient', [clientController::class,'addClientForm']);
        Route::get('/viewAllClients',[clientController::class,'allClients']);
        Route::get('/newSupplier',[supplierController::class,'addSupplierForm']);
        Route::get('/viewAllSuppliers',[supplierController::class,'allSuppliers']);
        Route::post('/addClient',[clientController::class,'addClient']);
        Route::post('/updateClientForm/{id}',[clientController::class,'updateClientForm']);
        Route::post('/updateClient/{id}',[clientController::class,'updateClient']);
        Route::post('/deleteClient/{id}',[clientController::class,'deleteClient']);
        Route::post('/addSupplier',[supplierController::class,'addSupplier']);
        Route::post('/updateSupplierForm/{id}',[supplierController::class,'updateSupplierForm']);
        Route::post('/updateSupplier/{id}',[supplierController::class,'updateSupplier']);
        Route::post('/deleteSupplier/{id}',[supplierController::class,'deleteSupplier']);
    });*/