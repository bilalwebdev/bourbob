<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BourbonMashbills extends Model
{
    use HasFactory;

    protected $fillable = [
        'bourbon_id',
        'mashbill_id',
        'amount',
    ];

    /**
     * Get the bourbon that owns the BourbonMashbills
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bourbon(): BelongsTo
    {
        return $this->belongsTo(Bourbon::class, 'bourbon_id');
    }

    /**
     * Get the mashbill that owns the BourbonMashbills
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mashbill(): BelongsTo
    {
        return $this->belongsTo(MashBill::class, 'mashbill_id');
    }
}
