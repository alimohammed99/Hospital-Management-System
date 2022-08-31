<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Doctors;

use App\Models\Appointment;

class AdminController extends Controller
{
    public function doctor(){

        if(Auth::id()){

            if(Auth::user()->usertype==1){
                return view("admin.add_doctor");
            }else{
                return redirect()->back()->with('message', 'Oops...Only Admins have access to this. Keep off please.');
            }

        }


        
    }


    public function upload_doctor(Request $request){

        $doctor = new Doctors;

        
        $image = $request->file;

        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $doctor->image = $imagename;

        $doctor->name = $request->name;

        $doctor->phone = $request->phone;

        $doctor->room = $request->room;

        $doctor->specialty = $request->specialty;


        $doctor->save();

        return redirect()->back()->with('message', 'Doctor added successfully');
    }


    public function showappointments(){

        $data = appointment::all();

        return view('admin.showappointments', compact('data'));

    }


    public function approveappointment($id){

        $data = appointment::find($id);

        $data->status = 'Approved';

        $data->save();

        return redirect()->back()->with('message', 'Appointment has been approved :)');

    }


    public function unapproveappointment($id){

        $data = appointment::find($id);

        $data->status = 'Unapproved';

        $data->save();

        return redirect()->back()->with('message', 'Appointment has been unapproved!');

    }




    public function view_doctors(){
        $data = doctors::all();
        return view("admin.view_doctors", compact('data'));
    }



    public function editdoctor($id){

        $data = doctors::find($id);

    return view("admin.editdoctor", compact('data'));


    }


    public function deletedoctor($id){

        $data = doctors::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'You have deleted a Doctor.');

    }



    public function updatedoctor(Request $request, $id){
        $doctor = doctors::find($id);

        $doctor->name = $request->name;

        $doctor->phone = $request->phone;

        $doctor->specialty = $request->specialty;

        $doctor->room = $request->room;


        $image = $request->file;


        if($image){

        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $doctor->image = $imagename;

        }

        $doctor->save();

        return redirect()->back()->with('message', "Doctor's data has been modified and saved");
    }



    public function emailview($id){
        return view("admin.email_view");
    }

}
