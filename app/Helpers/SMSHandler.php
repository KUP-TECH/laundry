<?php
    
namespace App\Helpers;


class SMSHandler {

    public function sendSMS($phone, $msg) {
        if(!config('sms.enabled')) {
            return [
                'status'    => false,
                'reason'    => 'SMS Service Disabled',
            ];
        }


        $server_ip      = config('sms.ip');
        $server_port    = config('sms.port');

        $data  = [
             'number'   => $phone,
             'msg'      => $msg,
        ];
         $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
         if (!$socket) {
            return [
                'status'    => false,
                'reason'    => socket_strerror(socket_last_error()),
            ];
            
         }
         $result = socket_connect($socket, $server_ip, $server_port);
         if (!$result) {
            return [
                'status'    => false,
                'reason'    => socket_strerror(socket_last_error($socket)),
            ];
         }
         $jsonified = json_encode($data);
         socket_write($socket, $jsonified, strlen($jsonified));
         socket_close($socket);
         return [
            'status'    => true,
            'reason'    => 'SMS Send Success',
        ];
         
    }
}