<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftInvoice extends Model
{
    use HasFactory;

    protected $table = 'draft_invoices';

    protected $fillable = [
        'cid',
        'user_id',
        'title',
        'notes',
        // Seller
        'seller_ntn_cnic',
        'seller_business_name',
        'seller_province',
        'seller_address',
        // Invoice
        'invoice_type',
        'invoice_date',
        'invoice_ref_no',
        'scenario_id',
        // Buyer
        'buyer_ntn_cnic',
        'buyer_business_name',
        'buyer_province',
        'buyer_registration_type',
        'buyer_address','expense_col',
        // Items will be handled via relationship or JSON
        'items', // If you store as JSON, otherwise use a separate table
    ];

    protected $casts = [
        'invoice_date' => 'date',
        'items' => 'array', // If items are stored as JSON
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // If you use a separate table for items:
    // public function items()
    // {
    //     return $this->hasMany(DraftInvoiceItem::class);
    // }

    // Helper to generate a default title
    public function generateTitle()
    {
        return 'Draft Invoice #' . ($this->id ?? 'New');
    }
}