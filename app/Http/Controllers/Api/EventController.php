<?php

namespace App\Http\Controllers\Api;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::paginate(9);

        return view('event.index', ['events' => $event]);

        /*
        $events = Events::all();

        return response()->json($events);
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $event = Event::create($request->all());
        return view('event.show')->with('event', $event);
 
        /*return response()->json($event, 201);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('event.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit')->with('event', $event);
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
        $event = Event::findOrFail($id);
        $data = $request->all();
        if ($event->update($data)) {

            return view('event.show')->with('event', $event);
        }

        throw new Exception("Erro ao atualizar evento", 1);
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->destroy();
 
        return response()->json(null, 204);
    }

    public function search(Request $request)
    {
        $search = $request->content;

        $events = Event::where('title','LIKE',"%{$search}%")->orWhere('general_theme','LIKE',"%{$search}%")->orWhere('period','LIKE',"%{$search}%")->orWhere('place','LIKE',"%{$search}%")->orWhere('department','LIKE',"%{$search}%")->get();
        return view('event.search')->with('events', $events)->with('search', $search);
    }

    public function indexmy()
    {
        $event = Event::paginate(9);

        return view('event.index', ['events' => $event]);

        /*
        $events = Events::all();

        return response()->json($events);
        */
    }
}
