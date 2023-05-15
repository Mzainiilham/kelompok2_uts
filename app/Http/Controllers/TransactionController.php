<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use App\Http\Controllers\Cart;
use Illuminate\Support\Facades\Auth;
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

        
       // dd($request->all());
       //memasukan data ke transaksi
        Transaction::create([
            
            'product_name' => $request->product_name,
            'price' => $request->price,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal,
            'users_id' => Auth::user()->id,
            
        ]);

        //menghapus data yang sudah terkirim
        //cari id yang sudah dibayar 
        //kemudian dihapus
        //$transaction=Transaction::where('cart_id',$request["cart_id"])->first();

        //pindah ke form transaksi
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
                'product_name' => 'required',
                'subtotal' => 'required',
            ]);
            Transaction::find($id)->update($validated);
            return redirect('transaction');
        }

        

        public function destroy($id)
    {
        $data = transaction::find($id); 
            $data->delete();
            
            return redirect('/dashboard/transaction');
    }
}
