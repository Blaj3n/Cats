<?php

use App\Models\Cat;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string("tipus");
            $table->string("nev");
            $table->integer("suly");
            $table->timestamps();
            
        });

        Cat::create(['tipus'=>'Brit rövidszőrű','nev'=>'Tom','suly'=>10]);
        Cat::create(['tipus'=>'Abesszin','nev'=>'Szilveszter','suly'=>13]);
        Cat::create(['tipus'=>'Bengáli','nev'=>'SziaMiau','suly'=>8]);
        Cat::create(['tipus'=>'Devon rex','nev'=>'Garfield','suly'=>20]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
};