<?php

namespace App\Http\Controllers;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{


    public function pilihpembayaran()
    {
        return view('v4/pilihpembayaran'); 
    }

   
    public function save(Request $request)
    {
        $this->validate($request, [
            'pembayaran' => 'required',
            
        ]);
        $transactions = new Transaction();
        $transactions->pembayaran = $request->pembayaran;
        $transactions->save();
        //User::create($user);
        $request->session()->flash('Telah Pilih Pembayaran');
        return redirect('v4/pilihpembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
