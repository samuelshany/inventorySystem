<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use App\Models\buyTransaction;
use Maatwebsite\Excel\Concerns\FromView;

class DataExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('supplier/viewBuyTransactions',[
            'transactions'=>buyTransaction::all()
        ]);
        //return buyTransaction::all();
    }
}
