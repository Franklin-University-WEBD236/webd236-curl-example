<?php
function my_curl_query($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}
$result = my_curl_query("https://www.google.com/search?q=php+curl+example");
preg_match_all("/(?<=url\?q=).*?(?=&amp;)/", $result, $arr);
print_r($arr);
?>