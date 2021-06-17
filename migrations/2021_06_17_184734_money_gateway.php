<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoneyGateway extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('gateways')) {
            \DB::table('gateways')->insert([
                'code' => 'money-gateway',
                'label' => 'Money',
                'enabled' => 0,
                'settings' => '',
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('gateways')) {
            \DB::table('gateways')
                ->where('code', 'money-gateway')
                ->delete();
        }
    }
}