<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('transaction_id');
            // $table->integer('user_id');
            $table->integer('amount_paid');
            $table->integer('to_balance')->default(0);
            $table->string('payment_purpose');
            $table->unsignedBigInteger('payment_status_id');
            $table->timestamps();

            $table->foreign('payment_status_id')
                ->references('id')
                ->on('payment_statuses')
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
        Schema::dropIfExists('payments');
    }
}
