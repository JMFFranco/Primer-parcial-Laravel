<?php

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
        Schema::table('computers', function (Blueprint $table) {
            $table->string('computer_barcode')->nullable();
            $table->foreignId("fk_category_computer")->nullable()->constrained("categories", "id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('computers', function (Blueprint $table) {
            $table->dropForeign(["fk_category_computer"]);
            $table->dropColumn("fk_category_computer");
        });
    }
};
