<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateManufacturerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturer_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('line_one');
            $table->string('postcode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->foreignIdFor('App\Models\Manufacturer')->nullable()->references('id')->on('manufacturers')->onDelete('set null');
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
        Schema::dropIfExists('manufacturer_addresses');
    }
}
