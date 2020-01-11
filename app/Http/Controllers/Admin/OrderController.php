<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $orders = DB::select("select orders.id,
            CONCAT(orders.f_name, ' ', orders.l_name) AS customer,
            SUM(items.qty) AS total_items, SUM(items.price * items.qty) AS total_price, CONCAT (orders.state, ' ', orders.country) AS location, orders.payment_type, users.name AS created_by FROM orders
            INNER JOIN items ON orders.id = items.order_id
            INNER JOIN users ON orders.user_id = users.id
            GROUP BY orders.id");

        //return $orders;
        return view('admin/orders/all', ['user' => $user, 'orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $user = Auth::user();
        return view('admin/orders/create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userId = Auth::id();

        // Get data from post request
        $form = $request->input('form');
        $items = $request->input('allItems');

        //insert order with form data
        $order = DB::insert('INSERT INTO orders (
                f_name, 
                l_name, 
                address, 
                address_2, 
                city,
                state,
                zipcode,
                country, 
                payment_type, 
                user_id
              ) VALUES (
                  :f_name, 
                  :l_name, 
                  :address, 
                  :address_2, 
                  :city,
                  :state, 
                  :country, 
                  :payment_type, 
                  :user_id)', [

                $form['f_name'],
                $form['l_name'],
                $form['address'],
                $form['address_2'],
                $form['city'],
                $form['state'],
                $form['zipcode'],
                $form['country'],
                $form['payment_type'],
                $userId

            ]);

            // get the id of the last order inserted

            $lastOrderdId = DB::getPdo()->lastInsertId();

            // Insert items of the order
            foreach($items as $item) {
                DB::insert('INSERT INTO items ( title, sku, price, material, description, brand_id, qty, size, order_id, user_id)

                VALUES (:title, :sku, :material, :description, :brand_id, :qty, :size, :order_id, :user_id)', [
                    $item['productInfo']['title'],
                    $item['productInfo']['sku'],
                    $item['productInfo']['price'],
                    $item['productInfo']['material'],
                    $item['productInfo']['description'],
                    $item['productInfo']['brand_id'],
                    $item['qtyBuying'],
                    $item['productInfo']['size'],
                    $lastOrderId,
                    $userId
                    
                    ]);
            
                //update products quantity after saving an order
                DB::update('UPDATE products 
                    SET qty = qty - :qtyBuying 
                    WHERE id = :id
                ', [$item['qtyBuying'], $item['productInfo']['id']]);
            }

            //return  $lastInsertedId;

            return redirect('admin/orders');
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


        // obtener order 

        $order = DB::select('select orders.id,
            orders.f_name,
            orders.l_name,
            orders.address,
            orders.address_2,
            orders.city,
            orders.state,
            orders.zipcode,
            orders.country,
            orders.payment_type,
            users.name AS user,
            orders.created_at AS date,
            SUM(items.qty) AS total_items,
            SUM(items.qty * items.price) AS total_price
            FROM orders
            INNER JOIN users
            ON orders.user_id = users.id
            INNER JOIN items
            ON orders.id = items.order_id
            WHERE orders.id = :id
            GROUP BY orders.id
        ', ['id' => $id]);

        $items = DB::select('select * FROM items WHERE items.order_id = :id', ['id' => $id]);


        //return $order;
        return view('admin/orders/show', ['user' => $user, 'order' => $order, 'items' => $items ]);
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
