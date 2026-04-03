<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceMaster extends Model
{
    use HasFactory;

    protected $table = 'invoice_master';

    protected $fillable = [
        'invoice_type',
        'invoice_date',
        'invoice_ref_no',
        'scenario_id',
        'seller_ntn_cnic',
        'seller_business_name',
        'seller_province',
        'seller_address',
        'buyer_ntn_cnic',
        'buyer_business_name',
        'buyer_province',
        'buyer_registration_type',
        'buyer_address',
        'total_amount',
        'total_sales_tax',
    ];
}
