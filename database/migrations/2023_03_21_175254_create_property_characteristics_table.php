<?php

use App\Enums\PropertyStatus;
use App\Enums\PropertyTypeEnum;
use App\Models\Property;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_characteristics', function (Blueprint $table) {

            $table->foreignIdFor(Property::class)->cascadeOnDelete();

            $table->float('price')->required();
            $table->tinyInteger('bedrooms')->required();
            $table->tinyInteger('bathrooms')->required();
            $table->float('sqft')->required();
            $table->float('price_sqft')->required();

            $table->enum('property_type', [
                PropertyTypeEnum::SINGLE->value,
                PropertyTypeEnum::TOWNHOUSE->value,
                PropertyTypeEnum::MULTIFAMILY->value,
                PropertyTypeEnum::BUNGALOW->value,
            ]);

            $table->enum('status', [
                PropertyStatus::SOLD->value,
                PropertyStatus::SALE->value,
                PropertyStatus::HOLD->value,
            ])->required();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_characteristics');
    }
};
