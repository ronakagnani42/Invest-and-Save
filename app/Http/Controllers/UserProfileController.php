<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    public function index(Request $request){
        $id = auth()->id();
        // $paytm = DB::select('select * from paytm where user_id = {{ $id}}');
        //$paytm = DB::select('select * from paytm')->where('user_id','=',$id)->get();
        $paytm = DB::table('paytm')->where('user_id',$id)->get();
        return view('user-profile',['paytm'=>$paytm]);
        //return view('user-profile');
        }
}
