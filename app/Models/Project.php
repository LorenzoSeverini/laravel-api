<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'description',
        'link',
        'image',
        'published_at',
        'updated_at'
    ];
    // aggiungere nei model Type e Project i metodi per definire la relazione one to many

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
