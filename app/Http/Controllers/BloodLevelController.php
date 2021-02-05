<?php

namespace App\Http\Controllers;

use App\BloodLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BloodLevelController extends Controller
{
    public function getBloodLevels($uid)
    {

        $bloodlevels = BloodLevel::all();

        $filteredBloodLevels = $bloodlevels->reject(function ($bloodlevel, $index) use ($uid) {

            return $bloodlevel->uid != $uid;
        })->values();

        return response()->json(['bloodlevels' =>  $filteredBloodLevels], 200, [], JSON_NUMERIC_CHECK);
    }

    public function getBlood()
    {

        $bloodlevels = BloodLevel::all();

       

        return response()->json(['bloodlevels' =>  $bloodlevels], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getBloodLevel($bloodlevelId)
    {
        $bloodlevel = BloodLevel::find($bloodlevelId);

        if (!$bloodlevel) return response()->json(['error' => 'BloodLevel Not Found'], 404);

        return response()->json(['bloodlevel' => $bloodlevel], 200);
    }

    public function postBloodLevel(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'level' => 'required',
            'status' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'uid' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $bloodlevel = new   BloodLevel();

        $bloodlevel->level = $request->level;
        $bloodlevel->status = $request->status;
        $bloodlevel->title = $request->title;
        $bloodlevel->date = $request->date;
        $bloodlevel->subtitle = $request->subtitle;
        $bloodlevel->quantity = $request->quantity;
        $bloodlevel->uid = $request->uid;

        $bloodlevel->save();

        return response()->json(['bloodlevel' => $bloodlevel], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putBloodLevel(Request $request, $bloodlevelId)
    {
        $validator = Validator::make($request->all(), [
            'level' => 'required',
            'status' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $bloodlevel = BloodLevel::find($bloodlevelId);

        if (!$bloodlevel) return response()->json(['error' => 'BloodLevel Not Found'], 404);


        $bloodlevel->update([
            'level' =>  $request->level,
            'status' =>  $request->status,
            'title' =>  $request->title,
            'subtitle' =>  $request->subtitle,
            'quantity' =>  $request->quantity,
            'date' =>  $request->date
        ]);

        return response()->json(['bloodlevel' => $bloodlevel], 201);
    }

    public function deleteBloodLevel($bloodlevelId)
    {
        $bloodlevel = BloodLevel::find($bloodlevelId);

        if (!$bloodlevel) return response()->json(['error' => 'BloodLevel Not Found'], 404);
        $bloodlevel->delete();

        return response()->json(['bloodlevel' => 'BloodLevel deleted successfully'], 201);
    }
}
