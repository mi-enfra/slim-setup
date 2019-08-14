<?php
    namespace App\Shared\Models;

    use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $fillable = [
        'entity_name',
    ];
    protected $table = 'entities';
}
