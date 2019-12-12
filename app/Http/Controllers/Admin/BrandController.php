<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BrandStoreRequest;
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
    public function store(BrandStoreRequest $request)
    {

        $brand = $request->validated();
        
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

        $user = Auth::user();

        $brand = DB::select('select 
                brands.id, 
                brands.title,
                brands.img_url,
                brands.description,
                brands.user_id,
                users.name AS user
                FROM brands
                INNER JOIN users
                ON user_id = users.id
                WHERE brands.id = :id
                LIMIT 1', ['id' => $id]);

        

        

        return view('admin/brands/show', ['user' => $user, 'id' => $id, 'brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $brand = DB::select('select 
                brands.id, 
                brands.title,
                brands.img_url,
                brands.description,
                brands.user_id
                FROM brands
                INNER JOIN users
                ON user_id = users.id
                WHERE brands.id = :id
                LIMIT 1', ['id' => $id]);

        return view('admin/brands/edit', ['user' => $user, 'id' => $id, 'brand' => $brand]);
        
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
        DB::update('update brands SET
            title = :title,
            img_url = :img_url,
            description = :description

            WHERE id = :id' , [
            'title' => $request->input('title'),
            'img_url' => $request->input('img_url'),
            'description' => $request->input('description'),
            'id' => $id
            ]);
        
            return redirect()->route('brand.show', ['id' => $id]);
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
