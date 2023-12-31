<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    // Da mettere a seconda del nome della vostra tabella, per specificare da quale tabella state prendendo i dati
    protected $table = 'projects';

    protected $fillable = [
        'type_id',
        'title',
        'description',
        'buyer',
        'cover_image',
        'project_date',
        'link'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
}
