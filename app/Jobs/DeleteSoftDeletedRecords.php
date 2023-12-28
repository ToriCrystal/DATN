<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteSoftDeletedRecords implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $modelNames;
    protected $after;

    public function __construct($modelName, $after = 30)
    {
        $this->modelNames = $modelName;
        $this->after = $after;
    }


    public function handle(): void
    {
        foreach ($this->modelNames as $modelName) {
            $model = "App\\Models\\" . $modelName;
            if (class_exists($model)) {
                $query = $model::onlyTrashed()
                    ->whereDate('deleted_at', '<=', now()->subSeconds($this->after));

                if ($query->exists()) {
                    $deletedRecords = $query->forceDelete();
                }
            }
        }
    }
}
