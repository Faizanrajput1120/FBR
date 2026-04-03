<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;

    protected $table = 'sale_detail'; // Specify table if not plural

    protected $fillable = [
        'prod_id',
        'c_id',
        'rate',
        'qty',
        'stax_per',
        'stax_Amount',
        'v_no','fk_parties_id','bill_no'
    ];

    // Relationship with ProductMaster (assuming model name ProductMaster)
    public function item()
    {
        return $this->belongsTo(ItemMaster::class, 'prod_id');
    }
    // Relationship with ProductMaster (assuming model name ProductMaster)
     public function parties()
    {
        return $this->belongsTo(Member::class, 'fk_parties_id');
    }

    // Relationship with Company (assuming model name Company)
    public function company()
    {
        return $this->belongsTo(Company::class, 'c_id');
    }
    public function trndtl()
{
    return $this->belongsTo(TRNDTL::class, 'id', 'r_id');
}
    
}
