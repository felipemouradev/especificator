<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecTcUnits extends Model
{
    //
    protected $guarded = ['id'];

    public function spec()
    {
        return $this->belongsTo('App\Spec', 'spec_id', 'id');
    }
}
