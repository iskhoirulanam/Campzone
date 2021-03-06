<?php

use Illuminate\Database\Migrations\Migration;

class CreateTriggerUpdateStokBeforeUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER update_stok_before_update BEFORE UPDATE ON `pesanan_detail` FOR EACH ROW
        BEGIN
            UPDATE produk SET stok = stok + old.jumlah
            WHERE id = old.produk_id;
        END

        ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `update_stok_before_update`');
    }
}
