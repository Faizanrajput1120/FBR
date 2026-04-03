<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HsMainCode extends Model
{
    use HasFactory;

    protected $table = 'hs_main_categories';

    protected $fillable = [
        'code',
        'description',
    ];

    // One main category (heading) has many subcategories (detailed codes)
    public function subcategories()
    {
        return $this->hasMany(HsSubcategory::class, 'main_category_id');
    }
}
