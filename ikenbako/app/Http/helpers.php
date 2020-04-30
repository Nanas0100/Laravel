<?php
/**
 * リクエストされたURLから、サブドメイン部分のみを取得して返す。
 */
if (!function_exists('insertStr4'))
{
    function insertStr4($text, $insert, $num)
    {
      $returnText = $text;
      $text_len = mb_strlen($text, "utf-8");
      $insert_len = mb_strlen($insert, "utf-8");
      for($i=0; ($i+1)*$num<$text_len; $i++) {
          $current_num = $num+$i*($insert_len+$num);
          $returnText = preg_replace("/^.{0,$current_num}+\K/us", $insert, $returnText);
      }
      return $returnText;
    }
}
