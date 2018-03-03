<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title', 150);
            $table->string('slug', 150)->unique();
            $table->string('subtitle', 100)->nullable();
            $table->string('image')->nullable()->default('no-image.jpg');
            $table->string('image_alt')->nullable();
            $table->text('content');
            $table->boolean('active')->nullable()->default(0);

            // SEO
            $table->string('seo_title', 70)->nullable();
            $table->string('seo_description', 165)->nullable();

            // Robots
            $table->enum('meta_robots', [
                'index, follow',
                'noindex, follow',
                'index, nofollow',
                'noindex, nofollow',
            ])->default('noindex, nofollow');

            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
