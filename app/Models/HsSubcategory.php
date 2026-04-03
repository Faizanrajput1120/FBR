<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HsSubcategory extends Model
{
    use HasFactory;

    protected $table = 'hs_subcategories';

    protected $fillable = [
        'main_category_id',
        'code',
        'description',
    ];

    // Each subcategory belongs to one main category (heading)
    public function mainCategory()
    {
        return $this->belongsTo(HsMainCode::class, 'main_category_id');
    }
}
