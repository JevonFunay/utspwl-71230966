<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    protected $primaryKey = 'purchase_number';

    public $timestamps = false;

    protected $fillable = [
        'date_of_purchase',
        'customer_id',
        'item_code',
    ];

    protected function casts(): array
    {
        return [
            'date_of_purchase' => 'date:Y-m-d',
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_code', 'item_code');
    }
}
