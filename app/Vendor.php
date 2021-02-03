<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function categories()
    {
        return $this->hasMany(VendorCategory::class);
    }
}
