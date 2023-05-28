<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;

class PhoneController extends Controller
{
    public function invoic(Request $request)
    {
        // inserting the data
        $row=[
            'Name'=> $request->fullname,
            'country'=> $request->country,
            'BirthDate'=> $request->date,
            'phone'=> $request->Phone,
            'Email'=> $request->email,
            'address'=> $request->Address,
            'ProductName'=> $request->Productname,
            'Total'=> $request->Total,

        ];
        DB::table('invoic')->insert($row);
        $Phone=DB::table('invoic')
        ->where('phone',"=",$request->Phone)
        ->first();
        return view('invoic',['inv'=>$Phone]);

    }
    public function CheckOut($id)
    {
        $phone=DB::table('products')
        ->where('id', '=', $id)
        ->first();
        
        return view('checkout',['phone'=>$phone]);

    }
    public function PhoneType()
    {
        $phone=DB::table('products')
        ->get();


        return view('phon',['phone'=>$phone]);

    }
}
