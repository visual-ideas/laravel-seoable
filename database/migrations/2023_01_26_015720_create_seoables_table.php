<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seoables', function (Blueprint $table) {
            $table->id();

            $table->foreignId('seoable_id')->nullable();
            $table->string('seoable_type')->nullable();

            $table->string('route')->nullable()->unique();
            $table->string('url')->nullable()->unique();

            $table->string('title')->nullable();
            $table->string('description')->nullable();

            $table->string('breadcrumb')->nullable();

            $table->string('header')->nullable();
            $table->text('header_text')->nullable();

            $table->text('text')->nullable();

            $table->json('open_graph')->nullable();

            $table->timestamps();

            $table->unique(['seoable_id', 'seoable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seoables');
    }
};
