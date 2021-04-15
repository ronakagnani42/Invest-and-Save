<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;
use App\Models\Investment;

class SchemeController extends Controller
{
    public function show(Request $request)
    {
        $response = Http::get('https://www.assetplus.in/appserver/v1/user/info/schemeInfo?schemeCode='.$request->scheme);
        $schemeDetails = $response->json();
        return view('scheme', compact('schemeDetails'));
    }

    public function invest(Request $request)
    {
        if($request->schemeCode && $request->invest_amount){
            Investment::create([
                'scheme_code' => $request->schemeCode,
                'amount' => $request->invest_amount,
                'user_id' => Auth::user()->id
            ]);
        }
        $schemes = Investment::where('user_id', Auth::user()->id)->get();
        foreach($schemes as $scheme){
            $response = Http::get('https://www.assetplus.in/appserver/v1/user/info/schemeInfo?schemeCode='.$scheme->scheme_code);
            $schemeDetails = $response->json();
            $scheme->details = $schemeDetails;
        }
        return view('invest', compact('schemes'));
    }
}
