<?php

namespace App\Services\v1;
use App\Batch;

class BatchService
{
    public function getBatches()
    {
        return $this->filterBatches(Batch::all());
    }

    public function getBatch($batch_id)
    {
        return $this->filterBatches(Batch::where('id',$batch_id)->get());
    }

    protected function filterBatches($batches)
    {
        $data = [];
        foreach($batches as $batch)
        {
            $entry = [
                'id' => $batch->id,
                'timing' => $batch->timing,
            ];

            $data[] = $entry;
        }
        return $data;
    }
}
