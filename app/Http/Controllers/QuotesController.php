<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Quote;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view_index()
    {
        $quotes = Quote::orderBy('created_at', 'desc')->paginate(3);
        return $quotes;
    }

    /**
     * Display a listing of the resource.
     * For the edit page only.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $quotes = Quote::orderBy('created_at', 'desc')->paginate(3);
            return view('quotes.quotes')->with('quotes', $quotes);
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()) {
            return view('quotes.create');
        }else{
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create Quote
        $quote = new Quote;
        $quote->season = $request->input('season');
        $quote->episode = $request->input('episode');
        $quote->quote = $request->input('quote');
        $quote->save();

        return redirect('/quotes')->with('success', 'Quote Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()) {
            $quote = Quote::find($id);
            return view('quotes.edit')->with('quote', $quote);
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()) {
            $quote = Quote::find($id);
            return view('quotes.edit')->with('quote', $quote);
        }else{
            return redirect('/');
        }
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
        $quote = Quote::find($id);
        $quote->season = $request->input('season');
        $quote->episode = $request->input('episode');
        $quote->quote = $request->input('quote');
        $quote->save();

        return redirect('/quotes')->with('success', 'Quote Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quote = Quote::find($id);
        $quote->delete();
        return redirect('/quotes')->with('success', 'Quote Deleted!');
    }
}
