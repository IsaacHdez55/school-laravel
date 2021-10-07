<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentShift;

class StudentShiftController extends Controller
{
    public function ViewShift(){

        $data['allData'] = StudentShift::all();

        return view('backend.setup.shift.view_shift', $data);

    }

    public function StudentShiftAdd(){

        return view('backend.setup.shift.add_shift');

    }

    public function StudentShiftStore(Request $request){

        $validatedData = $request->validate([

            'name' => 'required|unique:student_shifts,name',

        ]);

        $data = new StudentShift();
        $data->name = $request->name;
        $data->save();

        $notification = array(

            'message' => '¡El turno ha sido guardado correctamente!',
            'alert-type' => 'success',

        );

        return redirect()->route('student.shift.view')->with($notification);

    }

    public function StudentShiftEdit($id){

        $editData = StudentShift::find($id);

        return view('backend.setup.shift.edit_shift', compact('editData'));

    }

    public function StudentShiftUpdate(Request $request, $id){

        $data = StudentShift::find($id);

        $validatedData = $request->validate([

            'name' => 'required|unique:student_shifts,name,'.$data->id,

        ]);

        $data->name = $request->name;
        $data->save();

        $notification = array(

            'message' => '¡El turno ha sido editado correctamente!',
            'alert-type' => 'success',

        );

        return redirect()->route('student.shift.view')->with($notification);

    }

    public function StudentShiftDelete($id){

        $student = StudentShift::find($id);
        $student->delete();

        $notification = array(

            'message' => '¡El turno académico ha sido elimiando correctamente!',
            'alert-type' => 'info',

        );

        return redirect()->route('student.shift.view')->with($notification);

    }
}
