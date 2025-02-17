<?php

use App\Models\Accommodation;
use App\Models\Amenitie;
use App\Models\Asset;
use App\Models\Deal;
use App\Models\Hotelclass;
use App\Models\Hotelrank;
use App\Models\Popular;
use App\Models\Property;
use App\Models\Style;
use App\Models\User;
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
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->integer('cost');
            // $table->string('photo');
            $table->foreignIdFor(User::class);
            $table->timestamps();
        }); 

        //tag
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        //pivot
        Schema::create('accommodation_deal', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Accommodation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Deal::class)->constrained()->cascadeOnDelete();
            $table->timestamps();

        });

        //tag
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->timestamps();
        });
        //pivot
        Schema::create('accommodation_asset', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Accommodation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Asset::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        //tag
        Schema::create('amenities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();           
        });
        //pivot
        Schema::create('accommodation_amenitie', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Accommodation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Amenitie::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
         
        //tag
        Schema::create('populars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
         //pivot
        Schema::create('accommodation_popular', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Accommodation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Popular::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    
        //tag
        Schema::create('hotelranks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
         //pivot
         Schema::create('accommodation_hotelrank', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Accommodation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Hotelrank::class)->constrained()->cascadeOnDelete();
            $table->timestamps();

        });
    
        //tag
        Schema::create('styles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
         //pivot
         Schema::create('accommodation_style', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Accommodation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Style::class)->constrained()->cascadeOnDelete();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accommodations');       
        Schema::dropIfExists('accommodation_deal');              
        Schema::dropIfExists('accommodation_asset');       
        Schema::dropIfExists('accommodation_amenitie');       
        Schema::dropIfExists('accommodation_popular');       
        Schema::dropIfExists('accommodation_hotelrank');       
        Schema::dropIfExists('accommodation_style');       
        Schema::dropIfExists('deals');             
        Schema::dropIfExists('assets');       
        Schema::dropIfExists('amenities');       
        Schema::dropIfExists('populars');       
        Schema::dropIfExists('hotelranks');       
        Schema::dropIfExists('styles');       
    }
};
 