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
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('username')->unique();
        $table->string('password');
        $table->string('avatar')->nullable();
        $table->enum('role', ['owner', 'co-admin', 'member', 'unbreaking', 'loyalty', 'berry', 'salingkitkit'])->default('member');
        $table->enum('platform', ['java', 'bedrock'])->nullable();
        $table->string('favorite_color')->nullable();
        $table->text('bio')->nullable();
        $table->timestamp('joined_at')->nullable();
        $table->rememberToken();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    
    }
};
