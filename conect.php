<?php
  $q = mysql_connect('localhost','user','') or die('Server die');
  $q = mysql_select_db('trip') or die('database is invalid');
  $wynik = mysql_query('select * from trip');
  while($txt = mysql_fetch_assoc($wynik)){
    echo($txt['country']).' '.$txt['city']
  }
?>
