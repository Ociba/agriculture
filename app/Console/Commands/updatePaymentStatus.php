<?php

namespace App\Console\Commands;

use App\Payment;
use Illuminate\Console\Command;
use Carbon;

class updatePaymentStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updatepaymenttodelete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        /**
        *This function  changes payment status from active to delete whenever created_at is one from the time
        *payment was made. 
         */
         Payment::join('users','payments.user_id','users.id')
        ->whereDate('payments.created_at', '2020-08-23')->update(['payments.status'=>'deleted']);
        echo "You have updated status to deleted";
    }
}
