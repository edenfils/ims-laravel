<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE items(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(200) NOT NULL,
            sku VARCHAR(60) NOT NULL,
            material VARCHAR(60) NOT NULL UNIQUE,
            description TEXT NOT NULL, 
            brand_id INT UNSIGNED,
            size FLOAT UNSIGNED,
            order_id INT UNSIGNED NOT NULL,
            create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            CONSTRAINT order_id FOREIGN KEY (order_id)
            REFERENCES orders(id))');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE items');
    }
}
