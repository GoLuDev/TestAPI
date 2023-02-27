<?php


namespace Client\API;

use Exception;


class Validator
{

    /**
     * @param $params
     * @return bool
     */
  public function isParams($params){
      try {
          if(is_int($params)){
              return true;
          }
          throw new Exception("Значение параметра не является строкой");
      } catch(Exception $e) {
          echo $e->getMessage();
      }
  }

    /**
     * @param $cat
     * @return bool
     */
  public function isCat($cat){

      try {
          if(is_int($cat)){
              return true;
          }
          throw new Exception("Значение категории не является числом");
      } catch(Exception $e) {
          echo $e->getMessage();
      }


  }
}