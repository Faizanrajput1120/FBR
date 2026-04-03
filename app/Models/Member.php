<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'party';
    
    protected $fillable = [
        'buyer_name',
        'buyer_type',
        'cnic',
        'address',
        'province',
        'city',
        'NTN',
        'strn',
        'company_id','type'
    ];

    protected $casts = [
        'buyer_type' => 'string',
    ];

    

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    
}