<?php

namespace App\Services\v1;
use App\Batch;

class BatchService
{
    public function getBatches()
    {
        return Batch::all();
    }
}
