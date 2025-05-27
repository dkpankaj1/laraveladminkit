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
            // userThemes::BEGIN
            $table->string('startbar')->default('dark')->nullable();
            $table->string('theme')->default('light')->nullable();
            // userThemes::END

            // userAvatar::BEGIN
            $table->text('avatar')->nullable()->default('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLCAMAAAAPkIrYAAAAM1BMVEVHcEyloqioqKympKminqSnpauhnKKloaanpaqloaeloqeop6yopquZkpiemJ6MfYWoqa09qYCIAAAAEHRSTlMAd/WIJcEWR6lYa+XUBQ0CNzbx4QAAAeRJREFUWMPtV9tuwzAILcb3S+z//9o13bLWOLFxG02alPOYSIA5cIDb7cKFC/8FizQeV3gjl08MaYMqiPINERQa/aYlCWqzs0EokPOGsoZY9hBhNrbkVDmCcmkqUSjKMQROhCZt6UJYbtayVGUExTTGMMU0lrUtHFhG5SZsqsCCB9tUCA7ZzI4wGFDmx8sxEALMMFnEf3D51wsxpgaVkckLhX/56UnIMAgrdDK8EFZin0salqv+upnANM2W7EbdzRh1HHVdenGCSlpbxDG1VbAjyLR7Bm8samGzOMo99fUKI7pdtzSd2kmYa5XKdWq1ifuVJ9/KQXh6pj20wh/GBTvaEn5mhYYdU8fVmmB/8qAzDvenEszEJaJF75wDtFHM2GryFazRm+Qlbazg54vyqEylnTkZxeWR1Fc7BnMmg7NTX1XdC9gR9LyA4ClY1Y/7syFXs8Umlk4capNWPDF8JiwcZ8IEln49fXaiT5YhOS/V2vX4Kz2eNR6jZkyFwRzaAusRlLdH+tEWpxhjFFlze6Oy79IPmK73HOtXwH3BqeDh8f3xRsiMXfW8/evMvZBnTLFPhtEeXezE9dHf7wNOXVndu8NM3R2n3kOrHh/dafn2Ds67H7e79j4bEcF9eNdeuHDhT/EFAI9ZIs8lpM8AAAAASUVORK5CYII=');
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
