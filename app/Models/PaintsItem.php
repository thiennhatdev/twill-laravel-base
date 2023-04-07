<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class PaintsItem extends Model implements Sortable
{
    use HasPosition;

    protected $fillable = [
        'published',
        'specifications',
        'color',
        'origin_price',
        'sell_price',
        'paint_id'
    ];
    
}
