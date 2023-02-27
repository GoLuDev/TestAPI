<?php


namespace Client\API;


use Client\API\Interfaces\SaveResult;

class SaveResultToFile implements SaveResult
{
    /**
     * @param $result
     */
  public function saveResult($result)
  {
      $temp = tmpfile();
      fwrite($temp, $result);
      fseek($temp, 0);
      $filename = $_SERVER['DOCUMENT_ROOT'] . '/tmp/tmp_file.txt';
      $fh = fopen($filename, 'c');
      fseek($fh, 0, SEEK_END);
      fwrite($fh, PHP_EOL . $result);
      fclose($fh);
  }
}