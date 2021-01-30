<?php

namespace App\Http\Controllers;

use App\BagItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BagItemController extends Controller
{
    public function getBagItems($uid)
    {

        $bagitems = BagItem::all();

        $filteredBagItems = $bagitems->reject(function ($bagitem, $index) use ($uid) {

            return $bagitem->uid != $uid;
        })->values();

        return response()->json(['bagItems' =>  $filteredBagItems], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getBagItem($bagitemId)
    {
        $bagitem = BagItem::find($bagitemId);

        if (!$bagitem) return response()->json(['error' => 'BagItem Not Found'], 404);

        return response()->json(['bagItem' => $bagitem], 200);
    }

    public function postBagItem(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'owner' => 'required',
            'type' => 'required',
            'is_packed' => 'required',
            'uid' => 'required',
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $bagitem = new   BagItem();

        $bagitem->name = $request->name;
        $bagitem->owner = $request->owner;
        $bagitem->type = $request->type;
        $bagitem->is_packed = $request->is_packed;
        $bagitem->uid = $request->uid;

        $bagitem->save();

        return response()->json(['bagItem' => $bagitem], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putBagItem(Request $request, $bagitemId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'owner' => 'required',
            'type' => 'required',
            'is_packed' => 'required',
            'uid' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $bagitem = BagItem::find($bagitemId);

        if (!$bagitem) return response()->json(['error' => 'BagItem Not Found'], 404);


        $bagitem->update([
            'name' =>  $request->name,
            'owner' =>  $request->owner,
            'type' =>  $request->type,
            'is_packed' =>  $request->is_packed,
            'uid' =>  $request->uid
        ]);

        return response()->json(['bagItem' => $bagitem], 201);
    }

    public function deleteBagItem($bagitemId)
    {
        $bagitem = BagItem::find($bagitemId);

        if (!$bagitem) return response()->json(['error' => 'BagItem Not Found'], 404);
        $bagitem->delete();

        return response()->json(['bagItem' => 'BagItem deleted successfully'], 201);
    }
}
