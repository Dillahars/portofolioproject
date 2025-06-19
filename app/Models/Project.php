<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'proyek';

    protected $fillable = [
        'nama',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'image_path',
    ];

    // Accessors for public-facing properties
    public function getNameAttribute()
    {
        return $this->attributes['nama'];
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes['deskripsi'];
    }

    public function getImageUrlAttribute()
    {
        return $this->attributes['image_path'] ? asset($this->attributes['image_path']) : null;
    }

    public function getGithubUrlAttribute()
    {
        // Placeholder, update if you have github_url column
        return null;
    }

    public function getSkillsAttribute()
    {
        // Placeholder, update if you have skills relation or column
        return [];
    }
}
