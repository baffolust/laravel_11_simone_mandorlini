<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceiptRequest;
use App\Models\Receipt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



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
        $newReceipt = $request->only('title', 'type', 'short_description', 'description');

        if ($request->hasFile('img')) {
            $newReceipt['img'] = $request->file('img')->store('media/img', 'public');
        }

        $newReceipt['author'] = Auth::user()->name;

        Receipt::create($newReceipt);

        return back()->with('message', 'Ricetta inserita correttamente');
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
        return view('receipt.edit', compact('receipt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReceiptRequest $request, Receipt $receipt)
    {
        $updateReceipt = $request->only('type', 'short_description', 'description');

        if ($request->hasFile('img')) {
            $updateReceipt['img'] = $request->file('img')->store('media/img', 'public');
        }

        $receipt->update($updateReceipt);

        $receipts = Receipt::all();
        return redirect()->route('receipt.index', compact('receipts'))->with('message', "Ricetta aggiornata");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receipt $receipt)
    {
        if ($receipt->img) {
            Storage::disk('public')->delete($receipt->img); 
            //Il metodo disk() accetta il nome del del disk - vedi config/filesystems.php
        }

        $receipt->delete();
        $receipts = Receipt::all();
        return redirect()->route('receipt.index', compact('receipts'))->with('message', "Ricetta Eliminata");
    }
}
