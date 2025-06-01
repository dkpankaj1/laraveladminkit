<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // userAvatar::BEGIN
            $table->text('avatar')->nullable();
            // userAvatar::END
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop userThemes columns
            $table->dropColumn(['startbar', 'theme']);

            // Drop userAvatar column
            $table->dropColumn('avatar');
        });
    }
};
