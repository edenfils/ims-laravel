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
        //
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

        $form = $request->input('form');
        //$items = $request->input('allItems');

        $order = DB::insert('INSERT INTO orders (
                f_name, 
                l_name, 
                address, 
                address_2, 
                city,
                state, 
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
                $form['country'],
                $form['payment_type'],
                $userId

            ]);

            $lastInsertedId = DB::getPdo()->lastInsertId();

            return  $lastInsertedId;
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
