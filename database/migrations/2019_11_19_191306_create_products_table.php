<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE products(
            id INT UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(200) NOT NULL,
            sku VARCHAR(60) NOT NULL,
            material VARCHAR(60) NOT NULL UNIQUE,
            description TEXT NOT NULL,
            brand_id INT UNSIGNED,
            qty INT UNSIGNED,
            size FLOAT UNSIGNED,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
            CURRENT_TIMESTAMP)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE products');
    }
}
