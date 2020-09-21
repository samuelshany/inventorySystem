<?php

namespace App\Http\Controllers;

use App\Models\buyTransaction;
use App\Models\supplier;
;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    function addSupplierForm()
    {
        return view('supplier/addSupplier');
    }
    function addSupplier(Request $request)
    {
        $supplier =new supplier();
        $supplier->supplierName= $request->name;
        $supplier->supplierPhone= $request->phone;
        $supplier->supplierAddress= $request->address;
        $supplier->save();
        return redirect('/newSupplier');
    }
    function updateSupplierForm($id)
    {
        $supplier = supplier::where('id',$id)->get();
        return view('supplier/updateSupplier',compact('supplier'));
    }
    function updateSupplier($id,Request $request)
    {
       // dd($id);
        $supplier = supplier::where('id',$id)->update(['supplierPhone' => $request->phone,'supplierName'=>$request->name,'supplierAddress' => $request->address,'supplierName'=>$request->name]);
        //dd($supplier);
        
            //dd($request->name);
            //$supplier->supplierName=$request->name;
          
          
        return redirect('/viewAllSuppliers');
    }
    function deleteSupplier($id)
    {
        $supplier =supplier::where('id',$id)->delete();
        return redirect('/viewAllSuppliers');

    }
    function supplierTransactions()
    {

    }
    function allSuppliers()
    {
        $suppliers = supplier::get();
        return view('supplier/viewSuppliers',compact('suppliers'));
    }
    function transactions()
    {
        $transactions =buyTransaction::get();
        return view('supplier/viewBuyTransactions',compact('transactions'));
    }
}
