<?php

namespace App\Http\Controllers;

use App\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class TimelineController extends Controller
{
    public function getTimelines()
    {

        $timelines = Timeline::all();
        return response()->json(['timelines' =>  $timelines], 200, [], JSON_NUMERIC_CHECK);
    }

    public function getTimeline($timelineId)
    {
        $timeline = Timeline::find($timelineId);

        if (!$timeline) return response()->json(['error' => 'Timeline Not Found'], 404);

        $timeline->business;

        return response()->json(['timeline' => $timeline], 200);
    }

    public function postTimeline(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'time' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        if (!$request->hasFile('image')) {
            $this->path = null;
        } else {
            $this->path = $request->file('image')->store('timelines');
        }

        $timeline = new   Timeline();
        $timeline->time = $request->time;
        $timeline->body = $request->body;
        $timeline->image =  $this->path == null ? null :  URL::to('/storage/' . $this->path);

        $timeline->save();

        return response()->json(['timeline' => $timeline], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putTimeline(Request $request, $timelineId)
    {
        $timeline = Timeline::find($timelineId);

        if (!$timeline) return response()->json(['error' => 'Timeline Not Found'], 404);

        $timeline->update([
            'time' =>  $request->time,
            'body' =>  $request->body,
            'image' =>  $request->image
        ]);

        return response()->json(['timeline' => $timeline], 201);
    }

    public function deleteTimeline($timelineId)
    {
        $timeline = Timeline::find($timelineId);

        if (!$timeline) return response()->json(['error' => 'Timeline Not Found'], 404);
        $timeline->delete();

        return response()->json(['timeline' => 'Timeline deleted successfully'], 201);
    }
}
