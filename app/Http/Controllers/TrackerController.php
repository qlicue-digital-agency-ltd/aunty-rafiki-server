<?php

namespace App\Http\Controllers;

use App\Tracker;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class TrackerController extends Controller
{
    public function getTrackers()
    {
        $trackers = Tracker::all();
        foreach ($trackers as $tracker) {
            $tracker->business;
        }
        return response()->json(['trackers' => $trackers]);
    }


    public function getTracker($trackerId)
    {
        $tracker = Tracker::find($trackerId);

        if (!$tracker) return response()->json(['error' => 'Tracker Not Found'], 404);

        $tracker->business;

        return response()->json(['tracker' => $tracker], 200);
    }

    public function postTracker(Request $request)
    {

        
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'week' => 'required',
            'type' => 'required',

        ]);

        if ($validator->fails()) {
            $msgs = $validator->errors()->all();
            $message = '';
            foreach ($msgs as $msg) {
                $message .= $msg;
            }
            return back()->with(['error' => $message, 'errors' => $validator->errors()]);
        }

        if (!$request->hasFile('media')) {
            $this->path = null;
        } else {
            $this->path = $request->file('media')->store('trackers');
        }
        $tracker = new   Tracker();

        $tracker->title = $request->title;
        $tracker->subtitle = $request->subtitle;
        $tracker->body = $request->body;
        $tracker->media =  $this->path == null ? null :  URL::to('/storage/' . $this->path);
        $tracker->type = $request->type;
        $tracker->day = $request->day;
        $tracker->week = $request->week;

        $tracker->save();

        return response()->json(['tracker' => $tracker], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putTracker(Request $request, $trackerId)
    {
        $tracker = Tracker::find($trackerId);

        if (!$tracker) return response()->json(['error' => 'Tracker Not Found'], 404);


        $tracker->update([
            'title' =>  $request->title,
            'subtitle' =>  $request->subtitle,
            'body' =>  $request->body,
            'type' =>  $request->type,
            'day' =>  $request->day,
            'week' =>  $request->week,
        ]);

        return response()->json(['tracker' => $tracker], 201);
    }

    public function deleteTracker($trackerId)
    {
        $tracker = Tracker::find($trackerId);

        if (!$tracker) return response()->json(['error' => 'Tracker Not Found'], 404);
        $tracker->delete();

        return response()->json(['tracker' => 'Tracker deleted successfully'], 201);
    }
}
