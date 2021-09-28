<?php

namespace App\Http\Controllers;

use App\Temperature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TemperatureController extends Controller
{
    public function getTemperatures($uid)
    {

        $temperatures = Temperature::all();

        $filteredTemperatures = $temperatures->reject(function ($temperature, $index) use ($uid) {

            return $temperature->uid != $uid;
        })->values();

        return response()->json(['temperatures' =>  $filteredTemperatures], 200, [], JSON_NUMERIC_CHECK);
    }

    public function getBlood()
    {

        $temperatures = Temperature::all();



        return response()->json(['temperatures' =>  $temperatures], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getTemperature($temperatureId)
    {
        $temperature = Temperature::find($temperatureId);

        if (!$temperature) return response()->json(['error' => 'Temperature Not Found'], 404);

        return response()->json(['temperature' => $temperature], 200);
    }

    public function postTemperature(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'uid' => 'required',
            'reading' => 'required',
            'date' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $temperature = new   Temperature();
        $temperature->date = $request->date;
        $temperature->reading = $request->reading;
        $temperature->uid = $request->uid;

        $temperature->save();

        return response()->json(['temperature' => $temperature], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putTemperature(Request $request, $temperatureId)
    {
        $validator = Validator::make($request->all(), [

            'reading' => 'required',

        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $temperature = Temperature::find($temperatureId);

        if (!$temperature) return response()->json(['error' => 'Temperature Not Found'], 404);


        $temperature->update([

            'reading' =>  $request->reading,

        ]);

        return response()->json(['temperature' => $temperature], 201);
    }

    public function deleteTemperature($temperatureId)
    {
        $temperature = Temperature::find($temperatureId);

        if (!$temperature) return response()->json(['error' => 'Temperature Not Found'], 404);
        $temperature->delete();

        return response()->json(['temperature' => 'Temperature deleted successfully'], 201);
    }
}
