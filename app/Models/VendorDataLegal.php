<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorDataLegal extends Model
{
    use HasFactory;
    protected $table='vendors_legal_data';
    public $fillable = [
        'vendor_id',
        'Commercial_Registration_No',
        'Trade_Name',
        'Brand_name',
        'Registry_specialty',
        'Record_owner_name',
        'store_name',
        'store_description',
        'Commissioner_name',
        'owner_civil_registry_number',
        'Freelance_document_number',
        'Document_Specialization',
        'authorized_civil_registry_number',
        'owner_name',
        'authorized_name',
        'Commercial_Register_image',
        'ID_image',
        'commissioner_image',
        'bank_account_image',
        'brand_store_image',
        'freelance_work_document_image',
        'type',

    ];
}
