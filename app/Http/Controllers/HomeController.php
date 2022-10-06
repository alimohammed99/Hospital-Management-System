<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctors;

use App\Models\Appointment;


class HomeController extends Controller
{
    public function redirect(){

        if(Auth::id()){
            if(Auth::user()->usertype == '0'){
                $doctor = doctors::all();
                return view('user.home', compact('doctor'));
            }else{
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }

    }


    public function index(){
        if(Auth::id()){
            return redirect('home');
        }else{
        $doctor = doctors::all();
        return view('user.home', compact('doctor'));
        }
    }










    public function aboutus(){

        if(Auth::id()){
            return redirect('/aboutus');
        }else{
        $doctor = doctors::all();
        return view('user.aboutus', compact('doctor'));
        }
         
    }


    public function news(){

        if(Auth::id()){
            return redirect('home');
        }else{
        return view('user.blog');
        }
         
    }

    public function contactus(){

        if(Auth::id()){
            return redirect('home');
        }else{
        return view('user.contactus');
        }
         
    }


    public function ourdoctors(){

        if(Auth::id()){
            return redirect('home');
        }else{
            $doctor = doctors::all();
            return view('user.ourdoctors', compact('doctor'));
            }
         
    }


















    public function appointment(Request $request){

        if(Auth::id())
        {

        $data = new appointment;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->date = $request->date;

        $data->phone = $request->phone;

        $data->message = $request->message;

        $data->doctor = $request->doctor;

        $data->status = 'In Progress';

      
        $data->user_id = Auth::user()->id;
    

        $data->save();

    

        return redirect()->back()->with('message', 'You have successfully booked an appointment. We will get back to you soon.');

        }else{
            return redirect('login');
        }

        

    }


    public function myappointments(){

        if(Auth::id()){

            $user_id = Auth::user()->id;

            $appoint = appointment::where('user_id', $user_id)->get();

        return view('user.my_appointments', compact('appoint'));

        }else{
            return redirect()->back()->with('message', 'You have to login first');
        }

    }


    public function cancel_appointment($id){

        $data = appointment::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'OOPSYou just canceled an appointment');

    }
}
