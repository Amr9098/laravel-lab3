<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class phoneController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $phones=phone::all()->where('users_id',Auth::id());
        // return $phones ;
        return view('phones.index',compact("phones"));

        // return view('phones.index');x
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $phone=new Phone();
        // $phone->users_id= Auth::id();
        // $phone->phone =$request->phone;
        // $phone->save();
            Phone::updateOrCreate([
                "phone" =>$request->phone,
                "users_id"=> Auth::id()
            ]);

            // return "amrrrrrr";
            // return view('phones.index');
            return redirect()->route("phones.index");

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($phone)
    {
        $phone=phone::where('phone',$phone)->first();

        return view('phones.edit', compact("phone"));
            return $phone ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $phone)
    {
        // $phones=phone::where('phone',$phone)->first();

        // $phones->update([
        //     "phone" =>$request->phone,
        //     // "users_id"=> Auth::id()
        // ]);
        phone::where('phone',$phone)->update(['phone'=>$request->phone]);
     return redirect()->route("phones.index");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($phone)
    {
        phone::where('phone',$phone)->delete();
        return redirect()->route("phones.index");

    }
}
