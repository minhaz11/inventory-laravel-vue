<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Employee::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

       $val = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'email|required',
        'address' =>'required',
        'nid' => 'required'
       ]);

       if ($val->fails()) {
           return response()->json($val->errors());
       }

       if($request->image){
           $position = strpos($request->image,';');
           $sub = substr($request->image,0,$position);
           $ext = explode('/',$sub)[1];
           $image = time().'.'.$ext;
           $img = Image::make($request->image)->resize(300,300);
           $path =  public_path('/images/');
           $img->save( $path.$image);
       }

       Employee::create([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'nid' => $request->nid,
        'salary' => $request->salary,
        'join_date' => $request->join_date,
        'image' => $image
       ]);

       return response()->json(['success'=>'Uploaded']);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
