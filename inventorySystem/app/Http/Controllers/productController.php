<?php

namespace App\Http\Controllers;

use App\Models\buyTransaction;
use App\Models\Clients;
use App\Models\products;
use App\Models\supplier;
use App\Models\Transactions;
use Illuminate\Http\Request;

class productController extends Controller
{
    
    function addProductForm()
    {
        $suppliers = supplier::get();
        return view('product/addProduct',compact('suppliers'));
    }
    function addProduct(Request $request)
    {
        $supplier = supplier::where('supplierName',$request->supplier)->get('id');
       // dd($supplier);
        $profit=0;
        $product = new products();
        $transaction= new buyTransaction();
        foreach($supplier as $sup)
        {
        $product->supplier_id=$sup->id;
        $product->productName=$request->name;
        $product->productCat=$request->category;
        $product->buyPrice=$request->buyprice;
        $product->sellPrice=$request->sellprice;
        $product->productDesc=$request->desc;
        $product->productAmount=$request->amount;
        $profit=($request->sellprice - $request->buyprice)*$request->amount;
        $product->profit=$profit;
        $transaction->sName=$request->supplier;
        $transaction->pNAme=$request->name;
        $transaction->amount=$request->amount;
        $transaction->price=$request->buyprice;
        $transaction->totalPayment=$request->amount * $request->buyprice;
        $transaction->date=$request->date;
        $transaction->save();
        $product->save();
        return redirect('/newProduct');
        }

    }
    function viewProducts()
    {
        $products=products::get();
       
        return view('product/viewAllProducts',compact('products'));
    }
    function updateProductForm($id)
    {
        $product= products::where('id',$id)->get();
        return view('product/updateProduct',compact('product'));
    }
    function updateProduct($id,Request $request)
    {
        $product= products::where('id',$id)->get();
        //return $product;
        foreach($product as $pro)
        {
            $pro->productName=$request->name;
            $pro->productCat=$request->category;
            $pro->buyPrice=$request->buyprice;
            $pro->sellPrice=$request->sellprice;
            $pro->productDesc=$request->desc;
            $pro->productAmount=$request->amount;
            $profit=($request->sellprice - $request->buyprice)*$request->amount;
            $pro->profit=$profit;
            $pro->save();
        }   
        return redirect('/viewAll');
    }
    function deleteProduct($id)
    {
        $product= products::where('id',$id)->delete();   
        return redirect('/viewAll');
    }
    function sellProductForm($id)
    {
        $product= products::where('id',$id)->get();
        $clients = Clients::get();
        return view('product/sellProduct',compact('product','clients'));
    }
    function sellProduct($id,Request $request)
    {
        
        $products= products::where('id',$id)->get();
       
        foreach($products as $product)
        {
        if($product->productAmount < $request->sellamount)
        { $mess="enter lower amount";
            return $this->sellProductForm($id);
        }
        else
        {
            $amount=$product->productAmount - $request->sellamount;
            $product2= products::where('id',$id)->update(['productAmount'=>$amount]);
          $client = Clients::where('clientName',$request->client)->get('id');
          
           //dd($product->productName);
           foreach($client as $cl)
           {$transaction = new Transactions();
            $transaction->client_id=$cl->id;
            $transaction->pName=$product->productName;
            $transaction->amount=$request->sellamount;
            $transaction->price=$product->sellPrice;
            $transaction->profit=$request->sellamount * $product->sellPrice;
            $transaction->date=$request->date;
            $transaction->save();
            
            return redirect('/viewAll');}
            
        }}
        
    }
    function viewAvailableProducts()
    {
        $products=products::where('productAmount','>',0)->get();
       
        return view('product/viewAllProducts',compact('products'));
    }
    function viewEmptyProducts()
    {
        $products=products::where('productAmount','=',0)->get();
       
        return view('product/viewAllProducts',compact('products'));
    }
}
