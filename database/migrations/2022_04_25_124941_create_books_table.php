<?php

use App\Models\Data;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('nama_tamu');
            $table->foreignIdFor(Data::class)->constrained()->cascadeOnDelete();
            $table->datetime('time_from')->nullable();
            $table->datetime('time_to')->nullable();
            $table->integer('jum_kamar');
            $table->tinyInteger('status')->nullable();
            
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
