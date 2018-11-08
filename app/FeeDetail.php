<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeDetail extends Model
{
    protected $fillable = [
        'fee_id',
        'installment_no',
        'payment_date',
        'paid_date',
        'installment_amount',
        'amount_paid',
        'total_fee_paid',
        'balance'
    ];

    public function fee()
    {
        $this->belongTo('App\Fee');
    }
}
