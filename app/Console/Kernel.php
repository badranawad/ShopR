<?php

namespace App\Console;
use DB;
use App\Subject;
use App\User;
use Carbon\Carbon;
use App\Celebrity;
use FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use Illuminate\Console\Scheduling\Schedule;
use App\Http\Transformer\CelebritiesTransformer;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */ 
    protected function schedule(Schedule $schedule)
    {
         $schedule->call(function () {


            
            $subject = Subject::whereDate('start_date', Carbon::today())->where('status',1)->first();
             $body=$subject->title;

            $optionBuilder = new OptionsBuilder();
            $optionBuilder->setTimeToLive(60*60*24);
            $notificationBuilder = new PayloadNotificationBuilder('برجك اليوم');
            $notificationBuilder->setBody($body)
                                ->setSound('default');
            $dataBuilder = new PayloadDataBuilder();
            $option = $optionBuilder->build();
            $notification = $notificationBuilder->build();
            $data = $dataBuilder->build();
            $tokens  = User::whereNotNull('device_id')
                ->where('device_id','<>','')
                ->where('active_notif',1)
                ->pluck('device_id')
                ->toArray();
            // dd($tokens);
            $downstreamResponse = FCM::sendTo($tokens, $option, $notification, $data);
            $downstreamResponse->numberSuccess();
            $downstreamResponse->numberFailure();
            $downstreamResponse->numberModification();
            $downstreamResponse->tokensToDelete();
            
            $downstreamResponse->tokensToModify();
            $downstreamResponse->tokensToRetry();
            $downstreamResponse->tokensWithError();
  
            })->dailyAt('10:00');

       $schedule->call(function () {

        $celebrities = Celebrity::whereRaw("DATE_FORMAT( date_of_birth, '%m-%d') = ?",  Carbon::today()->format('m-d'))->where('status',1)->get();

            foreach ($celebrities as  $celebritiy) {
                $celebrity['data'] = api()->transformer(new CelebritiesTransformer(),$celebritiy)->one();
                 // dd($celebrity);
                $optionBuilder = new OptionsBuilder();
            
                $optionBuilder->setTimeToLive(60*60*24);
                $notificationBuilder = new PayloadNotificationBuilder('برجك اليوم');
                $notificationBuilder->setBody('ولد في مثل هاذا اليوم '.$celebritiy['title'])->setSound('default')->setClickAction('action');
                $dataBuilder = new PayloadDataBuilder();
                $dataBuilder->addData($celebrity);
                $option = $optionBuilder->build();
                $notification = $notificationBuilder->build();
                $data = $dataBuilder->build();
                $tokens  = User::whereNotNull('device_id')
                    ->where('device_id','<>','')
                    ->where('active_notif',1)
                    ->pluck('device_id')
                    ->toArray();
                $downstreamResponse = FCM::sendTo($tokens, $option, $notification, $data);
                $downstreamResponse->numberSuccess();
                $downstreamResponse->numberFailure();
                $downstreamResponse->numberModification();
                $downstreamResponse->tokensToDelete();   
                $downstreamResponse->tokensToModify();
                $downstreamResponse->tokensToRetry();
                $downstreamResponse->tokensWithError();
                 }
       })->dailyAt('11:00');


       $schedule->call(function () {
        
       $users = User::whereHas('orders',function($q){
            $q->where('expireta_date',Carbon::now()->addDays(1)->toDateString());
        })->where('device_id','<>','')
                    ->where('active_notif',1)
                    ->pluck('device_id')
                    ->toArray();

                $optionBuilder = new OptionsBuilder();
                $optionBuilder->setTimeToLive(60*60*24);
                $notificationBuilder = new PayloadNotificationBuilder('برجك اليوم');
                $notificationBuilder->setBody('الاشتراك الشهري لتطبيق برك اليوم سوف ينتهي غدا يرجي تجدديد الاشتراك')->setSound('default');
                $dataBuilder = new PayloadDataBuilder();
                $option = $optionBuilder->build();
                $notification = $notificationBuilder->build();
                $data = $dataBuilder->build();
                $tokens  = $users;
                $downstreamResponse = FCM::sendTo($tokens, $option, $notification, $data);
                $downstreamResponse->numberSuccess();
                $downstreamResponse->numberFailure();
                $downstreamResponse->numberModification();
                $downstreamResponse->tokensToDelete();   
                $downstreamResponse->tokensToModify();
                $downstreamResponse->tokensToRetry();
                $downstreamResponse->tokensWithError();



            })->dailyAt('10:00');

    }   

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
