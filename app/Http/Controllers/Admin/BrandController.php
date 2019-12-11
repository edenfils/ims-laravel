<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $brands = DB::select('select brands.id,
           brands.title,
           brands.img_url,
           brands.user_id,
           users.name AS user
           FROM brands
           INNER JOIN users
           ON brands.user_id = users.id
           ORDER BY  brands.created_at ASC;

        ');


        return view('admin/brands/all', ['user' => $user, 'brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        
        return view('admin/brands/create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $brand = $request->all();
        
        DB::insert('INSERT INTO brands (
            title,
            img_url,
            description,
            user_id
            )
            
            VALUES (
              :title,
              :img_url,
              :description,
              :user_id)', 
              [
                 'title' => $brand['title'],
                 'img_url' => $brand['img_url'],
                 'description' => $brand['description'],
                 'user_id' => 1
              ]);

              return redirect()->route('brands');
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
