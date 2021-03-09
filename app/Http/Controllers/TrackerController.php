<?php

namespace App\Http\Controllers;

use App\Mother;
use App\Tracker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class TrackerController extends Controller
{
    public function getTrackers(Request $request)
    {

        $mother = Mother::where('uid', $request->uid)->first();
        if (!$mother) return response()->json([
            'trackers' =>  [],
            'tag' => 'NO_CONCEPTION_DATE'
        ], 200, [], JSON_NUMERIC_CHECK);;

        $key = 0;
        $conception_date = Carbon::parse($mother->conception_date);
        $weeks =  $conception_date->diffInWeeks(Carbon::now());
        $days =  $conception_date->diffInDays(Carbon::now());
        
        $trackers = Tracker::orderBy('id', 'DESC')->get();


        $filteredTrackers = $trackers->reject(function ($tracker, $index) use ($days) {

            return $tracker->days > $days;
        })->values();

        foreach ($filteredTrackers  as $tracker) {
            if ($tracker->type != "checkpoint") {
                $tracker->time = Carbon::now()->subDays($key);
                $tracker->media = URL::to('/') . $tracker->media;
                $key++;
            } else {
            }
            $tracker->time = Carbon::now()->subDays($key);
        }
        return response()->json(['trackers' =>  $filteredTrackers], 200, [], JSON_NUMERIC_CHECK);
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

            return response()->json(['errors' => $validator->errors()]);
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
