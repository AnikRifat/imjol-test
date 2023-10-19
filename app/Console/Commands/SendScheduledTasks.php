<?php

namespace App\Console\Commands;

use App\Mail\TaskEmail;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendScheduledTasks extends Command
{
    protected $signature = 'tasks:send';
    protected $description = 'Send scheduled tasks';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {


        $currentTime = Carbon::now();
        $currentTimeFormatted = $currentTime->format('H:i');
        $tasks = Task::whereRaw("LEFT(send_at, 5) = ?", [$currentTimeFormatted])
            ->get();
        // Loop through each task to process
        foreach ($tasks as $task) {
            Mail::to($task->recipients)->send(new TaskEmail($task));
        }

        $this->info('Scheduled tasks sent successfully.');
    }






}
