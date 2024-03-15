<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Text;

class TaiController extends Controller
{
    public function viewtextadder()
    {
        return view('tai.textadder');
    }
    
    public function viewimageadder()
    {
        return view('tai.imageadder');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg',
            'cost' => 'required|numeric|regex:/^\d*\.\d{1}[0-9]?$/',
            'product' => 'required',
            'description' => 'required',
        ]);
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $path = $file->store('public/asset/images');
                $name = $file->getClientOriginalName();
                $product = $request->product;
                $description = $request->description;
                $cost = $request->cost;
                $insert[$key]['title'] = $name;
                $insert[$key]['path'] = $path;
                $insert[$key]['product'] = $product;
                $insert[$key]['description'] = $description;
                $insert[$key]['cost'] = $cost;
            }
        }
        Image::insert($insert);
        return back()->with('status', 'All Images has been uploaded successfully');
    }
    
    public function text_store(Request $request)
    {
        $request->validate([
            'addMoreInputFields.*.animal' => 'required'
        ]);
        foreach ($request->addMoreInputFields as $key => $value) {
            Text::create($value);
        }
        return back()->with('success', 'New Animal has been added.');
    }
}
