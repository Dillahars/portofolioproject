<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'position',
        'image_url',
    ];

    // Accessor for full image path with storage handling and fallback
    public function getImagePathAttribute()
    {
        if ($this->image_url) {
            if (file_exists(public_path($this->image_url))) {
                return asset($this->image_url);
            } elseif (file_exists(public_path('storage/' . $this->image_url))) {
                return asset('storage/' . $this->image_url);
            }
        }
        return 'https://via.placeholder.com/400x160?text=No+Image';
    }
}
