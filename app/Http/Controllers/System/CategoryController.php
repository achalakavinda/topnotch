<?php

namespace App\Http\Controllers\System;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Categories = Category::paginate(10);

       return view('admin.category.category',compact(['Categories']));
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

        if(empty($request->disable)){
            $request['disable'] = 1;
        }else{
            $request['disable'] = 0;
        }

        if($request['image-selector']==0){
            if(!$this->checkUrlImage($request->url)){
                return redirect()->back();
            }
            $push = [
                'code'=>$request->code,
                'name'=>$request->name,
                'desc'=>$request->desc,
                'url'=>$request->url,
                'use_url'=>true,
                'min_price'=>500,
                'disabled'=>$request->disable
            ];
        }else {
            $push = [
                'code'=>$request->code,
                'name'=>$request->name,
                'desc'=>$request->desc,
                'url'=>null,
                'use_url'=>false,
                'path'=>'img/product-img/pro-big-1.jpg',
                'min_price'=>500,
                'disabled'=> $request->disable
            ];
        }

//        dd($push);

       Category::create($push);

       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

    function checkUrlImage($external_link){
        if (@getimagesize($external_link)) {
            return true;
            } else {
              return false;
            }
    }
}
