<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddForeignKeyToProductsSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        DB::statement('ALTER TABLE products
            ADD CONSTRAINT fk_brand_id_products 
            FOREIGN KEY (brand_id) REFERENCES brands(id)');

        DB::statement('ALTER TABLE products
            ADD CONSTRAINT fk_user_id_products
            FOREIGN KEY (user_id) REFERENCES users(id)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE products
            DROP FOREIGN KEY fk_brand_id_products');

        DB::statement('ALTER TABLE products
            DROP FOREIGN KEY fk_user_id_products');
    }
}
