<?php

namespace App\Console\Commands;

use App\Models\Announce;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DelOldAnnounces extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'announces:delete-old';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Announces Older than 1 month';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $oldAnnounces = Announce::where('created_at', '<', Carbon::now()->subMonth())->where('isFeatured', '0')->get();

        foreach ($oldAnnounces as $announce) {
            $announce->delete();
        }
    }
}
