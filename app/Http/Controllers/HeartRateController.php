<?php

namespace App\Http\Controllers;

use App\HeartRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeartRateController extends Controller
{
    public function getHeartRates($uid)
    {

        $heartRates = HeartRate::all();

        $filteredHeartRates = $heartRates->reject(function ($heartRate, $index) use ($uid) {

            return $heartRate->uid != $uid;
        })->values();

        return response()->json(['heartRates' =>  $filteredHeartRates], 200, [], JSON_NUMERIC_CHECK);
    }

    public function getBlood()
    {

        $heartRates = HeartRate::all();



        return response()->json(['heartRates' =>  $heartRates], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getHeartRate($heartRateId)
    {
        $heartRate = HeartRate::find($heartRateId);

        if (!$heartRate) return response()->json(['error' => 'HeartRate Not Found'], 404);

        return response()->json(['heartRate' => $heartRate], 200);
    }

    public function postHeartRate(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'uid' => 'required',
            'reading' => 'required',
            'date' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $heartRate = new   HeartRate();
        $heartRate->date = $request->date;
        $heartRate->reading = $request->reading;
        $heartRate->uid = $request->uid;

        $heartRate->save();

        return response()->json(['heartRate' => $heartRate], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putHeartRate(Request $request, $heartRateId)
    {
        $validator = Validator::make($request->all(), [

            'reading' => 'required',

        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $heartRate = HeartRate::find($heartRateId);

        if (!$heartRate) return response()->json(['error' => 'HeartRate Not Found'], 404);


        $heartRate->update([

            'reading' =>  $request->reading,

        ]);

        return response()->json(['heartRate' => $heartRate], 201);
    }

    public function deleteHeartRate($heartRateId)
    {
        $heartRate = HeartRate::find($heartRateId);

        if (!$heartRate) return response()->json(['error' => 'HeartRate Not Found'], 404);
        $heartRate->delete();

        return response()->json(['heartRate' => 'HeartRate deleted successfully'], 201);
    }
}
