<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE brands
            ADD CONSTRAINT fk_user_id_brands
            FOREIGN KEY (user_id) REFERENCES users(id)');

        DB::statement('ALTER TABLE orders
        ADD CONSTRAINT fk_user_id_orders
        FOREIGN KEY (user_id) REFERENCES users(id)');   

        DB::statement('ALTER TABLE items
        ADD CONSTRAINT fk_user_id_items
        FOREIGN KEY (user_id) REFERENCES users(id)'); 

        
        DB::statement('ALTER TABLE items
        ADD CONSTRAINT fk_brand_id_items
        FOREIGN KEY (brand_id) REFERENCES brands(id)');

        DB::statement('ALTER TABLE items
        ADD CONSTRAINT fk_order_id_items
        FOREIGN KEY (order_id) REFERENCES orders(id)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE brands
            DROP FOREIGN KEY fk_user_id_brands');

        DB::statement('ALTER TABLE orders
            DROP FOREIGN KEY fk_user_id_orders');

        DB::statement('ALTER TABLE items
            DROP FOREIGN KEY fk_user_id_items');

        DB::statement('ALTER TABLE items
            DROP FOREIGN KEY fk_brand_id_items');

        DB::statement('ALTER TABLE items
            DROP FOREIGN KEY fk_order_id_items');
    }
}
