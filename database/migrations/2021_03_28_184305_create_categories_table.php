<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id()->default(null);
            $table->string('name');
            $table->timestamps();
        });
        $categories = ['Sport', 'Dolomiti', 'Zoldo', 'Natura'];
        foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category;
            $c->save();
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
