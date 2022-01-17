<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Error;

class ErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
// ========================================================================
// SEARCH
// ========================================================================
    public function index()
    {
        $errors = Error::all();
        return view('errors.index', compact('errors'));}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
// ========================================================================
// CREATE
// ========================================================================
    public function create()
    {
        return view('errors.create');
    }

// ========================================================================
// STORE = SAVE (CREATE/UPDATE)
// ========================================================================
    public function store(Request $request)
    {
        $request->validate([
            'functionName'=>'required',
            'message'=>'required',
            'createdBy'=>'required',
        ]);

        $contact = new Error([
            'functionName' => $request->get('functionName'),
            'message' => $request->get('message'),
            'createdBy' => $request->get('createdBy'),
        ]);
        $contact->save();
        return redirect('/errors')->with('success', 'Contact saved!');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreErrorRequest  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function show(Error $error)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */

// ========================================================================
// EDIT
// ========================================================================
    public function edit($id)
    {
        $error = Error::find($id);
        return view('errors.edit', compact('error'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateErrorRequest  $request
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */

// ========================================================================
// DELETE
// ========================================================================
    public function destroy($id)
    {
        $contact = Error::find($id);
        $contact->delete();

        return redirect('/errors')->with('success', 'Data deleted!');
    }
}
