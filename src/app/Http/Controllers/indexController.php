<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use RealRashid\SweetAlert\Facades\Alert;



class indexController extends Controller
{
    public function index(){

        return view('index');
    } 

    public function sendMail(Request $request){

        // try{

            Mail::send(new sendMail($request));

            Alert::success('successfully send', 'Thank you for contacting us! You will be answered within 24 hours.');

            return redirect($_SERVER['HTTP_REFERER'].'#contact');
           

        // }catch(\Exception $e){

        // Alert::error('Error', 'Error during the creation!vtry agine');
        // return redirect($_SERVER['HTTP_REFERER'].'#contact');

        // }

    }
}
