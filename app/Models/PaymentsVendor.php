<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsVendor extends Model
{
    use HasFactory;
    protected $table='payments_vendors';
    protected $fillable = [ 
        'amount',
        'date',
        'store_id',
        'branche_id',
        'vendor_id',
        'invoice_id',
        'notes',
        'type',
    ];

    public function stores(){
        return $this->belongsTo(Store::class,'store_id','id');
    }
}
