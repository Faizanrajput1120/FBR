<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseInvoiceFbr extends Model
{
    use HasFactory;

    protected $table = 'purchase_invoice_fbr';

    protected $fillable = [
        'user_id',
        'title',
        'notes',
        // Seller (Supplier)
        'seller_ntn_cnic',
        'seller_business_name',
        'seller_province',
        'seller_address',
        // Invoice
        'invoice_type',
        'invoice_date',
        'invoice_ref_no',
        // Buyer (Our Company)
        'buyer_ntn_cnic',
        'buyer_business_name',
        'buyer_province',
        'buyer_registration_type',
        'buyer_address',
        // Items stored as JSON
        'items',
        'expense_col',
        'cid',
    ];

    protected $casts = [
        'invoice_date' => 'date',
        'items'        => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function generateTitle()
    {
        return 'Purchase Invoice #' . ($this->id ?? 'New');
    }
}
