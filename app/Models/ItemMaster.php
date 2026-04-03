<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMaster extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'item_code',
        'purchase',
        'sale_rate',
        'gramage','c_id','sale','unit','unit_value','sale_type','hscode',
    ];
    public function itemtypes()
    {
        return $this->belongsTo(ItemType::class, 'type_id');
    }
    public function deliverydetails()
    {
        return $this->hasMany(DeliveryDetail::class, 'item_code');
    }
    public function purchasereturns()
    {
        return $this->hasMany(PurchaseReturn::class, 'item_code');
    }
    public function purchasedetails()
    {
        return $this->hasMany(PurchaseDetail::class, 'item_code');
    }
    public function purchaseplates()
    {
        return $this->hasMany(PurchasePlate::class, 'item_code');
    }
}
