<?php

use App\Models\Accommodation;
use App\Models\User;
use App\Models\Asset;
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
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->string('package_type');
            $table->string('highlight1');
            $table->string('highlight2');
            $table->string('highlight3');
            $table->string('highlight4');
            $table->string('day1');
            $table->string('day2');
            $table->string('day3');
            $table->string('package_inclusions');
            $table->string('package_exclusions');
            // $table->string('primary_photo')->nullable(true);
            // $table->string('secondary_photo')->nullable(true);
            // $table->string('secondary_photo2')->nullable(true);
            $table->string('currency');
            $table->integer('price');
            $table->date('from');
            $table->date('to');
            $table->string('description');   
            $table->timestamps();
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accommodations');       
        Schema::dropIfExists('styles');       
    }
};
 