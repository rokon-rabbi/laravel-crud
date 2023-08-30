<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create( 'students', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name', 100 )->nullable;
            $table->string( 'gender', 20 )->nullable;
            $table->string( 'address', 100 )->nullable;
            $table->string( 'phone', 50 )->nullable;
            $table->date( 'dob' )->nullable;
            $table->timestamps();
        } );
    }

    public function down(): void {
        Schema::dropIfExists( 'students' );
    }
};
