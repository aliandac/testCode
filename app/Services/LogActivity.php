<?php


namespace App\Services;

use App\Models\LogActivity as LogActivityModel;
use Illuminate\Support\Facades\Request;


class LogActivity
{


    public static function addToLog($subject, $page = 'default', $id = 1)
    {

        $log = [];
        $log['subject'] = $subject;
        $log['url'] = Request::fullUrl();
        $log['method'] = Request::method();
        $log['ip'] = Request::ip();
        $log['page'] = $page ? $page : null;
        $log['log_id'] = $id ? $id : null;
        $log['agent'] = Request::header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : null;
        LogActivityModel::create($log);
    }


    public static function logActivityLists()
    {
        return LogActivityModel::latest()->get();
    }


}
