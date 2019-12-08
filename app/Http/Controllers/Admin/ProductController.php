<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        // buscando todos los productos
        $products = DB::select('select products.id,
            products.title,
            products.sku,
            products.price,
            products.material,
            products.qty,
            products.size,
            products.user_id,
            brands.title AS brand,
            users.name AS user,
            products.created_at
            FROM products
            INNER JOIN brands
            ON products.brand_id = brands.id
            INNER JOIN users
            ON products.user_id = users.id
            ORDER BY  created_at ASC');

        return view('admin/products/all', ['user' => $user, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user = Auth::user();



        return view('admin/products/create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {

        // obteniendo todos los datos del formulario
        /*$product = $request->all();*/

        // obteniendo todos los datos del formulario validados   
        $product = $request->validated();

        // insertando los datos en la tabla
        DB::insert('insert into products (
                title, 
                sku, 
                price, 
                img_url, 
                material,
                description, 
                brand_id, 
                qty, 
                size, 
                user_id) 
                values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [
                $product['title'], 
                $product['sku'], 
                $product['price'], 
                $product['img_url'], 
                $product['material'], 
                $product['description'], 
                1 , $product['qty'], 
                $product['size'], 
                1 
            ]);
        

        

        //redireccionando
        return redirect('admin/products');
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

        // obteniendo el producto especifico
        $product  =  DB::select('select products.id,
        products.title,
        products.sku,
        products.price,
        products.img_url,
        products.material,
        products.description,
        products.qty,
        products.size,
        products.user_id,
        brands.title AS brand,
        users.name AS user,
        products.created_at
        FROM products
        INNER JOIN brands
        ON products.brand_id = brands.id
        INNER JOIN users
        ON products.user_id = users.id
        WHERE products.id = ?
        ORDER BY  created_at ASC', [$id]);

        //return $product;

        return view('admin/products/show', ['product'=> $product, 'user' => $user]);
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
