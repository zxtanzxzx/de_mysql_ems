<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('line_one');
            $table->string('postcode');
            $table->string('city');
            $table->set('state', [
                "Johor Darul Ta\'zim", 'Johor', 'Kedah Darul Aman',
                'Kedah', 'Kelantan Darul Naim', 'Kelantan', 'KL', 'Kuala Lumpur',
                'WP Kuala Lumpur',  'Labuan', 'Malacca', 'Melaka', 'Negeri Sembilan Darul Khusus',
                'Negeri Sembilan', 'Pahang Darul Makmur', 'Pahang', 'Penang', 'Pulau Pinang', 'Perak Darul Ridzuan', 'Perak',   'Perlis Indera Kayangan', 'Perlis', 'Putrajaya', 'Sabah', 'Sarawak', 'Selangor Darul Ehsan', 'Terengganu Darul Iman', 'Terengganu','Selangor'
            ]);
            $table->string('country');
            $table->boolean('is_shipping_address');
            $table->foreignIdFor('App\Models\User')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('user_addresses');
    }
}
