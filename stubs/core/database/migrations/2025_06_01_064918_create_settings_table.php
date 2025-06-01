<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

            // Contact Information
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->text('contact_address')->nullable();

            // Social Media Links
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linkedin_link')->nullable();

            // SEO Settings
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();


            $table->timestamps();
        });


        $defaultSettings = [
            // Brand Settings
            'brand_name' => 'SmartEducationPRO',

            // Contact Information
            'contact_email' => 'info@kadso.com',
            'contact_phone' => '+91 9876543210',
            'contact_address' => '123, Main Street, Anytown, India',

            // Social Media Links
            'facebook_link' => 'https://www.facebook.com/#',
            'twitter_link' => 'https://www.twitter.com/#',
            'instagram_link' => 'https://www.instagram.com/#',
            'linkedin_link' => 'https://www.linkedin.com/company/#',

            // SEO Settings
            'meta_title' => 'Smart Education Web - Your Gateway to Quality Education',
            'meta_description' => 'Smart Education Web provides quality education and learning resources for students and educators.',
            'meta_keywords' => 'education, learning, online education, smart education, quality education',


            // Timestamps
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('settings')->insert($defaultSettings);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
