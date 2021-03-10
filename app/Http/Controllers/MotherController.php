<?php

namespace App\Http\Controllers;

use App\Mother;
use App\Pregnacy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MotherController extends Controller
{
    public function getMothers()
    {

        $mothers = Mother::all();
        foreach ($mothers as $mother) $mother->pregnancies;

        return response()->json(['mothers' =>  $mothers], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getMother($motherId)
    {
        $mother = Mother::find($motherId);

        if (!$mother) return response()->json(['error' => 'Mother Not Found'], 404);

        return response()->json(['mother' => $mother], 200);
    }

    public function postMother(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'uid' => 'required|unique:mothers',
            'first_day_of_your_last_period' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $mother = new   Mother();

        $mother->uid = $request->uid;
        $mother->save();


        
        $due_date = Carbon::parse($request->first_day_of_your_last_period)->addYears(1)->addDays(7)->subMonths(3);
        $conception_date = Carbon::parse($request->first_day_of_your_last_period)->addYears(1)->addDays(7)->subMonths(3)->subDays(266);
        $pregnacy = new   Pregnacy();

        $pregnacy->due_date =   $due_date;
        $pregnacy->conception_date =  $conception_date;

        $mother->pregnancies()->save($pregnacy);

        $mother->pregnancies;

        return response()->json(['mother' => $mother], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putMother(Request $request, $motherId)
    {
        $validator = Validator::make($request->all(), [

            'conception_date' => 'required',

        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $mother = Mother::find($motherId);

        if (!$mother) return response()->json(['error' => 'Mother Not Found'], 404);


        $mother->update([
            'conception_date' =>  $request->conception_date
        ]);

        return response()->json(['mother' => $mother], 201);
    }

    public function deleteMother($motherId)
    {
        $mother = Mother::find($motherId);

        if (!$mother) return response()->json(['error' => 'Mother Not Found'], 404);
        $mother->delete();

        return response()->json(['mother' => 'Mother deleted successfully'], 201);
    }
}
