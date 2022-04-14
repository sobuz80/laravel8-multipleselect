<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'category'
    ];

    /**
     * Set the categories
     *
     */
    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getCatgoryAttribute($value)
    {
        return json_decode($value);
    }
}