<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE orders (
            id INT UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
            f_name VARCHAR (200) NOT NULL,
            l_name VARCHAR(60) NOT NULL,
            address VARCHAR(100) NOT NULL,
            address_2 VARCHAR(100),
            city VARCHAR(100) NOT NULL,
            state VARCHAR(100) NOT NULL,
            country VARCHAR(3) NOT NULL DEFAULT 'USA',
            payment_type VARCHAR(60) NOT NULL DEFAULT 'paypal',
            user_id BIGINT(20) UNSIGNED NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(' DROP TABLE orders ');
    }
}
