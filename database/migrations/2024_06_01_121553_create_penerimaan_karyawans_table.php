<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaanKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan_karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('Nama', 100);
            $table->date('TanggalLamar');
            $table->date('TanggalPenerimaan');
            $table->string('Jabatan', 100);
            $table->decimal('Gaji', 10, 2);
            $table->string('Departemen', 100);
            $table->string('LokasiKerja', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerimaan_karyawans');
    }
}
