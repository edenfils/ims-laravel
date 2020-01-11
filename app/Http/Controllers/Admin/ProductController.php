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

        $brands = DB::select('select brands.id,
            brands.title FROM brands
        ');

        return view('admin/products/create', ['user' => $user, 'brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {

        $userId = Auth::id();
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
                $product['brand_id'] , 
                $product['qty'], 
                $product['size'], 
                $userId
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

        return view('admin/products/show', ['product'=> $product, 'user' => $user, 'id' => $id]);
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

        $brands = DB::select('select brands.id,
            brands.title FROM brands
        ');

        //return $product;

        return view('admin/products/edit', ['product'=> $product, 'user' => $user, 'brands' => $brands, 'id' => $id]);
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

        // actualizar producto 
        DB::update('update products SET  
            title = :title,
            sku = :sku,
            price = :price,
            img_url = :img_url,
            material = :material,
            description = :description,
            qty = :qty,
            size = :size,
            brand_id = :brand_id 
            WHERE id = :id', [
                'title' => $request->input('title'), 
                'sku' => $request->input('sku'), 
                'price' => $request->input('price'),
                'img_url' =>$request->input('img_url'),
                'material' => $request->input('material'),
                'description' => $request->input('description'),
                'qty' => $request->input('qty'),
                'size' => $request->input('size'),
                'brand_id' => $request->input('brand_id'),
                'id' => $id
            ]);

            return redirect()->route('product.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE from products WHERE id = :id', ['id' => $id]);

        return redirect()->route('products');
    }

    public function sendAllProducts() 
    {
        // buscando todos los productos
        $products = DB::select('select products.id,
            products.title,
            products.sku,
            products.price,
            products.img_url,
            products.description,
            products.material,
            products.qty,
            products.size,
            products.user_id,
            products.brand_id,
            brands.title AS brand,
            users.name AS user,
            products.created_at
            FROM products
            INNER JOIN brands
            ON products.brand_id = brands.id
            INNER JOIN users
            ON products.user_id = users.id
            ORDER BY  created_at ASC');

        return $products;
    }
}
