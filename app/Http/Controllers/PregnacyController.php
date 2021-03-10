<?php

namespace App\Http\Controllers;

use App\Mother;
use App\Pregnacy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PregnacyController extends Controller
{
    public function getPregnacies()
    {

        $pregnacies = Pregnacy::all();

        return response()->json(['pregnacies' =>  $pregnacies], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getPregnacy($pregnacyId)
    {
        $pregnacy = Pregnacy::find($pregnacyId);

        if (!$pregnacy) return response()->json(['error' => 'Pregnacy Not Found'], 404);

        return response()->json(['pregnacy' => $pregnacy], 200);
    }

    public function postPregnacy(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'uid' => 'required',
            'first_day_of_your_last_period' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $mother = Mother::where('uid', $request->uid)->first();
        if (!$mother) return response()->json(['error' => 'Pregnacy Not Found'], 404, [], JSON_NUMERIC_CHECK);;



        $due_date = Carbon::parse($request->first_day_of_your_last_period)->addYears(1)->addDays(7)->subMonths(3);
        $conception_date = Carbon::parse($request->first_day_of_your_last_period)->addYears(1)->addDays(7)->subMonths(3)->subDays(266);
        

        $pregnacy = new   Pregnacy();

        $pregnacy->due_date =   $due_date;
        $pregnacy->conception_date =  $conception_date;

        $mother->pregnancies()->save($pregnacy);

        return response()->json(['pregnacy' => $pregnacy], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putPregnacy(Request $request, $pregnacyId)
    {
        $validator = Validator::make($request->all(), [
            'conception_date' => 'required',
            'due_date' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $pregnacy = Pregnacy::find($pregnacyId);

        if (!$pregnacy) return response()->json(['error' => 'Pregnacy Not Found'], 404);


        $pregnacy->update([
            'conception_date' =>  $request->conception_date,
            'due_date' =>  $request->due_date
        ]);

        return response()->json(['pregnacy' => $pregnacy], 201);
    }

    public function deletePregnacy($pregnacyId)
    {
        $pregnacy = Pregnacy::find($pregnacyId);

        if (!$pregnacy) return response()->json(['error' => 'Pregnacy Not Found'], 404);
        $pregnacy->delete();

        return response()->json(['pregnacy' => 'Pregnacy deleted successfully'], 201);
    }
}
