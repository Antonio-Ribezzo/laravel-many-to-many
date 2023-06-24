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
        'programming_languages',
        'link'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
