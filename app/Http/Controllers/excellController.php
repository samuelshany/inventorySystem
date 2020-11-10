<?php

namespace App\Http\Controllers;

use App\models\buyTransaction;
use App\Exports\DataExport;
use Excel;
class excellController extends Controller
{
    function buyTransactions()
    {
        $transactions = buyTransaction::get()->toArray();
        //dd($transactions);
       /* $data[]=array('supplier Name','product Name','amount','price','total Payment','date');
        foreach($transactions as $transaction)
        {
           //dd($transaction->sName); 
            $data[]=array(
                'supplier Name'=>1,
                'product Name'=>2,
                'amount'=>3,
                'price'=>4,
                'total Payment'=>5,
                'data'=>6
            );
        }
        Excel::create('transcations',function($excel) use($data)
        {
            $excel->setTitle('transactions');
            $excel->sheet('transactions',function ($sheet)
            use($data){
                $sheet->fromArray($data,null,'A1',false,false);
            });
        })->download('xlsx');
        //return view('supplier/viewBuyTransactions',compact('transactions'));*/
        return Excel::download(new DataExport, 'users.xlsx');
    }
}
