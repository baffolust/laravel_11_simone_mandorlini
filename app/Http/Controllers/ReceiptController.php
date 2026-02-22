<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceiptRequest;
use App\Models\Receipt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receipts = Receipt::all();
        return view('receipt.index', compact('receipts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('receipt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReceiptRequest $request)
    {
        $receipt = $request->only('title', 'type', 'short_description', 'description');

        if($request->hasFile('img')){
            $receipt['img']=$request->file('img')->store('media/img', 'public');
        }

        $receipt['author']=Auth::user()->name;

        Receipt::create($receipt);

        return back()->with('receipt_success', 'Ricetta inserita correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Receipt $receipt)
    {
        return view('receipt.show', compact('receipt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receipt $receipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receipt $receipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receipt $receipt)
    {
        //
    }
}
