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

    public function seedUIDBagItems($uid)
    {
        $bagitems = BagItem::all();

        $filteredBagItems = $bagitems->reject(function ($bagitem, $index) use ($uid) {

            return $bagitem->uid != $uid;
        })->values();

        //add them to the server first...
        if ($filteredBagItems->isEmpty()) {
            $this->seedBagItems($uid);
            return response()->json(['message' => 'BagItems created successfully'], 201);
        }
        return response()->json(['message' => 'BagItems already created'], 201);
    }
    ///seed Bag Items for first time user..
    public function seedBagItems($uid)
    {

        //mothers  bag.......
        BagItem::create([
            'name' => 'Birth plan',
            'owner' => 'mother',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Book magazine',
            'owner' => 'mother',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
        BagItem::create([
            'name' => 'Breast pads',
            'owner' => 'mother',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
        BagItem::create([
            'name' => 'Camera and batteries',
            'owner' => 'mother',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
        BagItem::create([
            'name' => 'Dressing gown',
            'owner' => 'mother',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
        BagItem::create([
            'name' => 'Facecloth or fan',
            'owner' => 'mother',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
        BagItem::create([
            'name' => 'Gift for your older children',
            'owner' => 'mother',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
        BagItem::create([
            'name' => 'Glucose tablets',
            'owner' => 'mother',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
        BagItem::create([
            'name' => 'Going home outfit',
            'owner' => 'mother',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        ///partner ..... 
        BagItem::create([
            'name' => 'Birth plan',
            'owner' => 'partner',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Book magazine',
            'owner' => 'partner',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Camera and batteries',
            'owner' => 'partner',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
        BagItem::create([
            'name' => 'Earphones',
            'owner' => 'partner',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Wallet',
            'owner' => 'partner',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Doctors contact',
            'owner' => 'partner',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
        BagItem::create([
            'name' => 'Extra money',
            'owner' => 'partner',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Transport or car',
            'owner' => 'partner',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Day Schedule',
            'owner' => 'partner',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        ///baby items
        BagItem::create([
            'name' => 'Blancket',
            'owner' => 'baby',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Clothes',
            'owner' => 'baby',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Baby name',
            'owner' => 'baby',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Soap',
            'owner' => 'baby',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Baby oil',
            'owner' => 'baby',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);

        BagItem::create([
            'name' => 'Pampers',
            'owner' => 'baby',
            'type' => 'original',
            'is_packed' => false,
            'uid' => $uid,
        ]);
    }
}
