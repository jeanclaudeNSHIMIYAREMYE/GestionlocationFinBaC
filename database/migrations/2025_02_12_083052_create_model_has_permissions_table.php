<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('model_has_permissions', function (Blueprint $table) {
        $table->unsignedBigInteger('permission_id');
        $table->unsignedBigInteger('model_id');
        $table->string('model_type'); // Pour le polymorphisme

        $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
        $table->index(['model_id', 'model_type']); // Index pour les requêtes

        $table->primary(['permission_id', 'model_id', 'model_type']);
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_has_permissions');
    }
};
