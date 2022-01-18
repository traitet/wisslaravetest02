<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
// ========================================================================
// IMPORT FOR CONSUME DATA FROM WEB API
// ========================================================================
use GuzzleHttp\Client;

use function GuzzleHttp\Promise\each;

class EventController extends Controller
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

        // =================================================================
        // GET DATA FROM MYSQL
        // =================================================================
        // $events = Event::all();
        // return view('events.index', compact('events'));

        // =================================================================
        // GET DATA FROM WEB API
        // =================================================================
        $client = new Client();
        $response = $client->request('GET', 'http://10.100.1.94/WISS-API/EventLog/1S%20SRCTBS1A4046');
        $body = $response->getBody()->getContents();
        $events = json_decode($body);

        // =================================================================
        // ECHO DATA FOR CHECKING
        // =================================================================
        // foreach ($events as $event)
        // {
        //     echo $event->rowid;
        //     echo $event->functionName;
        //     echo $event->description;
        //     echo  nl2br("\n");
        // }
        // echo $events[0]->rowid;
        // echo $events[0]->functionName;

        // =================================================================
        // RETURN VIEW TO SHOW DATA IN VIEW
        // =================================================================
        return view('events.index',compact('events'));
    }





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
        return view('events.create');
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

        $event = new Event([
            'functionName' => $request->get('functionName'),
            'message' => $request->get('message'),
            'createdBy' => $request->get('createdBy'),
        ]);
        $event->save();
        return redirect('/events')->with('success', 'Event saved!');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */

// ========================================================================
// EDIT
// ========================================================================
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */

// ========================================================================
// DELETE
// ========================================================================
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('/events')->with('success', 'Event deleted!');
    }
}
