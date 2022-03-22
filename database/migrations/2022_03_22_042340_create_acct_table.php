<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcctTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acct', function (Blueprint $table) {
            $table->id();
            $table->double("acct_refirial")->default(0);
            $table->double("acct_invest")->default(0);
            $table->double("acct_bonus")->default(0);
            $table->double("acct_privod")->default(0);
            $table->foreignId("user_id")->constrained("users");
            $table->softDeletes();
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
        Schema::dropIfExists('acct');
    }
}
