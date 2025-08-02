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
        'link_github',
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
        return $this->attributes['link_github'];
    }

}
