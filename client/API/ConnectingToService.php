<?php


namespace Client\API;


class ConnectingToService
{

    private static $instance = null;
    private $url;

    private function __construct(){
        $this->url = 'https://fakerapi.it/api/v1/';
    }


    private function __clone(){}

    public function __wakeup(){}


    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * @param $params
     * @param $get
     * @return bool|string
     */
    public function connectToService($params, $get)
    {
        $validator = new Validator();
        $validator->isParams($get);
        $validator->isCat($get);

        $ch = curl_init($this->url . $params . $get );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        $html = curl_exec($ch);
        curl_close($ch);

        return $html;
    }
}