<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')
                ->comment('slug tipo "nombre-proyecto"')
                ->nullable();
            $table->string('featured_image')
                ->comment('ruta completa a la featured image')
                ->nullable();
            $table->string('title')
                ->comment('Título del proyecto')
                ->nullable();
            $table->string('url')
                ->comment('link al proyecto real')
                ->nullable();
            $table->longText('detail_one')
                ->nullable();
            $table->longText('detail_two')
                ->nullable();
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
        Schema::dropIfExists('projects');
    }
}
