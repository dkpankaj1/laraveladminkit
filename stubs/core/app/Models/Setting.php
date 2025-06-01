<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'brand_name',
        'logo',
        'favicon',
        'contact_email',
        'contact_phone',
        'contact_address',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'linkedin_link',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];
}
