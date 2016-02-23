<?php
namespace App\Helpers;
/**
 * Created by PhpStorm.
 * User: nadim
 * Date: 2/23/16
 * Time: 4:42 PM
 */
use Monolog;
class LogFileHelper
{
    //log file create for user_module
    public function log_file($label_name = null,$file_name = 'user_module'){
        $log = new Monolog\Logger($label_name);
        $log->pushHandler(new Monolog\Handler\StreamHandler(app_path().'/modules/user/logs/'.$file_name.''.date('Y-m-d').'.log'));
        return $log;
    }


    public static function log_info($label_name, $message = 'change', $value = array('value' => 'message')){
        $file_create = LogFileHelper::log_file($label_name);
        if($file_create){
            $file_create->addInfo($message, $value);
        }
    }

    public function log_error($label_name, $value = array('value' => 'message')){
        $file_create = $this->log_file($label_name);
        if($file_create){
            $file_create->addInfo('Add Some Info message', $value);
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