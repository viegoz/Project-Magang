<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzinOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izin_operasi', function (Blueprint $table) {
            $table->id();
            $table->string('id_kantor');
            $table->string('nama_kantor');
            $table->string('jenis_kantor');
            $table->string('pso_non_pso');
            $table->string('kcu_kc');
            $table->string('nomor_nde');
            $table->string('tanggal_nde');
            $table->string('perihal');
            $table->string('pejabat_pengirim_nde');
            $table->string('regional');
            $table->string('jenis_pengajuan');
            $table->string('biaya_yang_diajukan');
            $table->string('masa_sewa');
            $table->string('tmt');
            $table->string('sd');
            $table->string('kinerja_2021');
            $table->string('kinerja_2022');
            $table->string('kinerja_2023');
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
        Schema::dropIfExists('izin_operasi');
    }
}
