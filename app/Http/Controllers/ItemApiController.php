<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ItemApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $category = Category::find($request->category_id);
        if($category){
            $item = new Item();

            $image = $request->image;
            $newName = "gallery_".uniqid().".".$image->extension();
            $image->storeAs("public/gallery",$newName);

            $item->name= $request->name;
            $item->price= $request->price;
            $item->expired_date= $request->expired_date;
            $item->category_id = $request->category_id;
            $item->image = $newName;
            $item->save();
            return response()->json("New Item is created successfully");
        }
        return response()->json("Category Id is not found");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        if($item){
            return response()->json($item);
        }
           return response()->json('Item Not Found');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        if($item){
            return response()->json($item);
        }
           return response()->json('Item Not Found');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($request->category_id);
        if($category){
            $item = Item::find($id);
            if($item){
 
                $image = $request->image;
                $newName = "gallery_".uniqid().".".$image->extension();
                $image -> storeAs("public/gallery",$newName);
 
                $item->name = $request->name;
                $item->price = $request->price;
                $item->category_id = $request->category_id;
                $item->image = $newName;
                $item->expired_date = $request->expired_date;
                $item->update();
                return response()->json("Item is Updated Succesfully");
            }
        }
 
        return response()->json('Category Id is not found'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        if($item){
            $item->delete();
            return response()->json("Item is deleted successfully");
        }
            return response()->json("Item not found");

    }
}
