<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsImageColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       //
       /*Alteramos la estructura de la tabla*/
       Schema::table('products', function (Blueprint $table) {
         $table->string('image')->nullable();
       });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       //}
       /*Si queremos deshacer el cambio que hicimos*/
       Schema::table('products', function (Blueprint $table) {
         $table->dropColumn('image');
       });

     }
   }
