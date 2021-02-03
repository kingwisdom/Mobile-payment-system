<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorCategory extends Model
{
    //

    protected $fillable = [
        'name', 'vendor_id','category_name', 'price'
    ];

    public function vendors()
    {
        return $this->belongsTo(Vendor::class);
    }
}
