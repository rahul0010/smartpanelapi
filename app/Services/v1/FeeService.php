<?php

namespace App\Services\v1;
use App\Fee;
use App\FeeDetail;

class FeeService
{
    public function getFees()
    {
        return $this->filterFees(Fee::all());
    }

    public function getFee($fee_id)
    {
        return $this->filterFee(FeeDetail::where('fee_id',$fee_id)->get());
    }

    protected function filterFees($fees)
    {
        $data = [];
        foreach($fees as $fee)
        {
            $entry = [
                'id' => $fee->id,
                'student_id' => $fee->student_id,
                'course_id' => $fee->course_id,
                'installment_amount' => $fee->installment_amount,
                'total_fee' => $fee->total_fee
            ];

            $data[] = $entry;
        }
        return $data;
    }

    protected function filterFee($fees)
    {
        $data = [];
        foreach($fees as $fee)
        {
            $entry = [
                'fee_id' => $fee->id,
                'installment_no' => $fee->installment_no,
                'payment_date' => $fee->payment_date,
                'paid_date' => $fee->paid_date,
                'installment_amount' => $fee->installment_amount,
                'amount_paid' => $fee->amount_paid,
                'balance' => $fee->balance,
                'total_fee_paid' => $fee->total_fee_paid
            ];

            $data[] = $entry;
        }
        return $data;
    }
}
