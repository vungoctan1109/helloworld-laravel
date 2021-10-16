<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class AdminController extends Controller
{
    public function returnLayout()
    {
        return view('admin.template.layout');
    }

    public function returnForm()
    {
        return view('admin.template.form');
    }

    public function returnTable()
    {
        return view('admin.template.table');
    }


    public function storeEvent(StoreEventRequest $request)
    {
        $data = $request->all();
        Event::create($data);
        echo "Create event success";
    }

    public function edit($eventName)
    {
        $event = DB::table('events')->where('eventName', '=', $eventName)->first();
        return view('admin.template.edit-event', compact('event'));
    }

    public function update(Request $request, $eventName)
    {
        $data = $request->except(['_token']);
        $event = DB::table('events')->where('eventName', '=', $eventName)->update($data);
        echo "Success update event";
    }

    public function showAll()
    {
        $events = Event::where('status', '!=', '0') -> get();
        return view('admin.template.table', compact('events'));
    }

    public function delete($eventName)
    {
        $event = Event::where('eventName', $eventName);
        $event->update(['status' => '0']);
        echo "Success delete event";
    }

}
