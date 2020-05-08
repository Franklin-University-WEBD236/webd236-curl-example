<?php
function my_curl_query($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}
echo (my_curl_query("https://www.google.com/search?q=php+curl+example"));
?>