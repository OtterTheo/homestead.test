<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $attributes = [
        'status' => 0
    ];
    protected $guarded = [];

    public function scopeStatus($query)
    {
        return $query->where('status', true)->get();
    }

    public function entreprise()
    {

        return $this->belongsTo('App\Entreprise');
    }

    public function getStatusAttribute($attributes)
    {
        return $this->getStatusOptions()[$attributes];
    }

    public function getStatusOptions()
    {
        return [
            '0' => 'Inactif',
            '1' => 'Actif',
            '2' => 'En attente'
        ];
    }
}
