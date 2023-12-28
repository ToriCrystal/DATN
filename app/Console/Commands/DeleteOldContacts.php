<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Contact;
use Carbon\Carbon;

class DeleteOldContacts extends Command
{
    protected $signature = 'contacts:delete-old';
    protected $description = 'Delete contacts older than 2 days';

    public function handle()
    {
        // Define the time threshold (2 days)
        $threshold = Carbon::now()->subDays(2);

        // Delete contacts that are older than the threshold
        Contact::whereNotNull('completed_at')
                ->where('completed_at', '<=', $threshold)
                ->delete();

        $this->info('Old contacts deleted successfully.');
    }
}
