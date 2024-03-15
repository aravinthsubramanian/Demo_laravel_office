<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MainCatagory;
use App\Models\SubCatagory;
use Illuminate\Http\Request;
use DB;

class CatagoryController extends Controller
{
    public function viewcatagory()
    {
        return view('catagory.addcatagory');
    }

    public function viewsubcatagory()
    {
        $catagory = MainCatagory::all();
        return view('catagory.addsubcatagory', compact('catagory'));
    }

    public function editcatagory($id)
    {
        $catagory = MainCatagory::find($id);
        // dd($catagory);
        return view('catagory.editcatagory',compact('catagory'));
    }

    public function editsubcatagory($id)
    {
        $catagory = MainCatagory::all();
        $subcatagory = SubCatagory::find($id);
        return view('catagory.editsubcatagory', compact('catagory','subcatagory'));
    }

    public function showcatagory()
    {
        $catagory = MainCatagory::all();
        return view('catagory.showcatagory', compact('catagory'));
    }

    public function showsubcatagory()
    {
        $subcatagory = SubCatagory::all();
        return view('catagory.showsubcatagory', compact('subcatagory'));
    }

    public function addcatagory(Request $request)
    {
        $request->validate([
            'catagory_name' => 'required|max:64|unique:main_catagories,catagory|alpha_num',
            'catagory_status' => 'required',
        ]);
        // dd($request->all());
        $catagory = new MainCatagory();
        $catagory->catagory = $request->catagory_name;
        $catagory->catagory_status = $request->catagory_status;
        $catagory->save();
        return back()->with("success", "Registerd Successfully...");
    }

    public function addsubcatagory(Request $request)
    {
        $request->validate([
            'catagory_name' => 'required',
            'subcatagory_name' => 'required|max:64|unique:sub_catagories,subcatagory|alpha_num',
            'subcatagory_status' => 'required',
        ]);
        // dd($request->all());
        $subcatagory = new SubCatagory();
        $subcatagory->catagory = $request->catagory_name;
        $subcatagory->subcatagory = $request->subcatagory_name;
        $subcatagory->subcatagory_status = $request->subcatagory_status;
        $subcatagory->save();
        return back()->with("success", "Registerd Successfully...");
    }

    public function delete_catagory($id)
    {
        $record = MainCatagory::find($id); // Replace $id with the ID of the record you want to delete
        dd($id);
        // if ($record) {
        //     // Delete the record
        //     $record->delete();
        // }
        // return back()->with("success", "deleted Successfully...");
    }
    public function delete_subcatagory($id)
    {
        $record = SubCatagory::find($id);
        dd($id);
        // if ($record) {
        //     // Delete the record
        //     $record->delete();
        // }
        // return back()->with("success", "deleted Successfully...");
    }

    public function updatecatagory(Request $request, $id)
    {
        $record = MainCatagory::find($id);
        // dd($id);
        if ($record) {
            $record->catagory = $request->catagory_name;
            $record->catagory_status = $request->catagory_status;
            $record->update();
        }
        return back()->with("success", "updated Successfully...");
    }
    public function updatesubcatagory(Request $request, $id)
    {
        $record = SubCatagory::find($id);
        // dd($request);
        if ($record) {
            $record->catagory = $request->catagory_name;
            $record->subcatagory = $request->subcatagory_name;
            $record->subcatagory_status = $request->subcatagory_status;
            $record->update();
        }
        return back()->with("success", "updated Successfully...");
    }

}
