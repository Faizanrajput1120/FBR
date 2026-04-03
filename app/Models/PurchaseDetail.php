<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_code',
        'qty',
        'rate',
        'vorcher_no',	
        'c_id',
        'stax_per',
        'stax_amount',
        'bill_no',
        	'fk_parties_id','bill_no'

    ];
    public function trndtls()
    {
        return $this->hasMany(TRNDTL::class, 'r_id');
    }
    public function items()
    {
        return $this->belongsTo(ItemMaster::class, 'item_code');
    }
     public function company()
    {
        return $this->belongsTo(Company::class, 'c_id');
    }
     public function parties()
    {
        return $this->belongsTo(Member::class, 'fk_parties_id');
    }
    
}
