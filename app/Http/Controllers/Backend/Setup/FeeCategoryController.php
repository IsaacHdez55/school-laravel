<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;

class FeeCategoryController extends Controller
{
    public function ViewFeeCat(){

        $data['allData'] = FeeCategory::all();

        return view('backend.setup.fee_category.view_fee_cat', $data);

    }

    public function FeeCategoryAdd(){

        return view('backend.setup.fee_category.add_fee_cat');

    }

    public function FeeCategoryStore(Request $request){

        $validatedData = $request->validate([

            'name' => 'required|unique:student_years,name',

        ]);

        $data = new FeeCategory();
        $data->name = $request->name;
        $data->save();

        $notification = array(

            'message' => '¡La tarifa ha sido guardada correctamente!',
            'alert-type' => 'success',

        );

        return redirect()->route('fee.category.view')->with($notification);

    }

    public function FeeCategoryEdit($id){

        $editData = FeeCategory::find($id);

        return view('backend.setup.fee_category.edit_fee_cat', compact('editData'));

    }

    public function FeeCategoryUpdate(Request $request, $id){

        $data = FeeCategory::find($id);

        $validatedData = $request->validate([

            'name' => 'required|unique:fee_categories,name,'.$data->id,

        ]);

        $data->name = $request->name;
        $data->save();

        $notification = array(

            'message' => '¡La tarifa ha sido editada correctamente!',
            'alert-type' => 'success',

        );

        return redirect()->route('fee.category.view')->with($notification);

    }

    public function FeeCategoryDelete($id){

        $student = FeeCategory::find($id);
        $student->delete();

        $notification = array(

            'message' => '¡La tarifa ha sido elimianda correctamente!',
            'alert-type' => 'info',

        );

        return redirect()->route('fee.category.view')->with($notification);

    }
}


