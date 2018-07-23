<?php

namespace App\Http\Controllers\System;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Brands = Brand::paginate(10);

        return view('admin.brand.brand',compact(['Brands']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.404');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);

        Brand::create([
            'name'=>$request->name,
            'description'=>$request->desc
        ]);

        return Redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.brand.show',compact(['id']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.404');
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

        $this->validate($request,[
            'name'=>'required'
        ]);

        if(empty($request->disabled)){
            $request['disabled'] = 0;
        }else{
            $request['disabled'] = 1;
        }



        $brand = Brand::findOrFail($id);


        // if model instance is empty
        if ($brand == null)
        {
//            flash()->error("brand not found. Please try again");
        }
        else
        {
            // if update was successful
            if($brand->update($request->all()))
            {
//                flash()->success("brand updated successfully");
            }
            else
            {
//                flash()->error("brand update failed. Please try again");
            }
        }
        // return the user to the view page.
        return redirect()->back();
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
