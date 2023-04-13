<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    //
    public function index()
    {
        $table = Transaction::get();
        return view('dashboard.transaction.index',[
            'dataTransaction' => $table
        ]);
    }
    public function create()
    {
        return view('dashboard.transaction.create');
    }
    public function store(Request $request)
    {
        
        // dd($request);
        Transaction::create([
            'customer_name' => $request->customer_name,
            'total' => $request->total,
            
        ]);

        return redirect('/dashboard/transaction');
}

    public function edit($id)
        {
            $data = Transaction::find($id);
            return view('dashboard.transaction.edit', ['dataTransaction'=>$data]);
            
        }

    public function update(Request $request, $id)
        {
            $validated = $request->validate([
                'customer_name' => 'required',
                'total' => 'required',
            ]);
            Transaction::find($id)->update($validated);
            return redirect('/dashboard/transaction');
        }

        public function destroy($id)
    {
        $data = transaction::find($id); 
            $data->delete();
            
            return redirect('/dashboard/transaction');
    }
}