<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Transactions;
use Illuminate\Http\Request;

class clientController extends Controller
{
    function addClientForm()
    {
        return view('client/addClient');
    }
    function addClient(Request $request)
    {
        $client = new Clients();
        $client->clientName= $request->name;
        $client->clientPhone= $request->phone;
        $client->clientAddress= $request->address;
        $client->save();
        return redirect('/newClient');
    }
    function updateClientForm($id)
    {
        $client = Clients::where('clientName',$id)->get();
        return view('client/updateClient',compact('client'));
    }
    function updateClient($id,Request $request)
    {
       // dd($id);
        $client = Clients::where('clientName',$id)->update(['clientPhone' => $request->phone,'clientAddress' => $request->address,'clientName'=>$request->name]);
        //dd($client);
        
            //dd($request->name);
            //$client->clientName=$request->name;
          
          
        return redirect('/viewAllClients');
    }
    function deleteClient($id)
    {
        $client =Clients::where('clientName',$id)->delete();
        return redirect('/viewAllClients');

    }
    function clientTransactions()
    {

    }
    function allClients()
    {
        $clients = Clients::get();
        return view('client/viewClients',compact('clients'));
    }
    function transactions()
    {
        $transactions =Transactions::get();
        return view('client/viewTransactions',compact('transactions'));
    }
    function search(Request $request)
    { $clients = Clients::where('clientName','like',$request->name.'%')->get();
        return view('client/viewClients',compact('clients'));
    }
    function searchTransaction(Request $request)
    {
        $transactions =Transactions::whereBetween('date',[$request->start,$request->end])->get();
        return view('client/viewTransactions',compact('transactions'));
    }
}
