<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurumsalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurumsals', function (Blueprint $table) {
            $table->id();
            $table->string('kurumsal_baslik');
            $table->longText('kurumsal_icerik');
            $table->string('kurumsal_resim');
            $table->string('kurumsal_selflink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurumsals');
    }
}
