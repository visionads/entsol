<?php
namespace App\Helpers;
/**
 * Created by PhpStorm.
 * User: nadim
 * Date: 2/23/16
 * Time: 4:42 PM
 */
use Monolog;
class LogFileHelperAcc
{
    //log file create for user_module
    private static function log_file($label_name = null,$file_name = 'accounting_module'){
        $log = new Monolog\Logger($label_name);
        $log->pushHandler(new Monolog\Handler\StreamHandler(app_path().'/modules/accounts/logs/'.$file_name.''.date('Y-m-d').'.log'));
        chmod(app_path().'/modules/accounts/logs/'.$file_name.''.date('Y-m-d').'.log', 777);
        return $log;
    }


    public static function log_info($label_name, $message = 'change', $value = array('value' => 'message')){
        $file_create = LogFileHelperAcc::log_file($label_name);
        if($file_create){
            $file_create->addInfo($message, $value);
        }
    }

    public static function log_error($label_name, $message, $value = array('value' => 'message')){
        $file_create = LogFileHelperAcc::log_file($label_name);
        if($file_create){
            $file_create->addError($message, $value);
        }
    }

    public function log_alert($label_name, $value = array('value' => 'message')){
        $file_create = $this->log_file($label_name);
        if($file_create){
            $file_create->addInfo('Add Some Info message', $value);
        }
    }

    public function log_notice($label_name, $value = array('value' => 'message')){
        $file_create = $this->log_file($label_name);
        if($file_create){
            $file_create->addInfo('Add Some Info message', $value);
        }
    }
}