  <?php
  // Wraca do zaznaczonej strony
  //header("Location: http://goornam.ayz.pl/");

  // Tworzymy zmienną dla imienia i nazwiska
  $name = $_POST['name'];

  // Tworzymy zmienną dla adresu email
  $email = $_POST['email'];

  // Tworzymy zmienną dla wiadomości
  $phone = $_POST['phone'];

  // Tworzymy zmienną dla wiadomości
  $message = $_POST['info'];

  // Podajesz adres email z którego ma być wysłana wiadomość
  $from = 'From:'.$_POST['email'].'Content-type: text/html; charset=utf-8';

  // Podajesz adres email na który chcesz otrzymać wiadomość
  $to = "magdalena.goorna@gmail.com";

  // Podajesz tytuł jaki ma mieć ta wiadomość email
  $title = "Formularz kontaktowy z MagicWebsites";

  // Przygotowujesz treść wiadomości
  $wiadomosc = "";
  $wiadomosc .= "Imie i nazwisko: " . $name . "\n";
  $wiadomosc .= "Email: " . $email . "\n";
  $wiadomosc .= "Phone: " . $phone . "\n";
  $wiadomosc .= "Wiadomość: " . $message . "\n";

  // Wysyłamy wiadomość
  $sukces = mail($to, $title, $wiadomosc, $phone, $from);

  // Przekierowywujemy na potwierdzenie
  if ($sukces){
    //print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
    echo"Your message was send";
  }
  else{
    echo"Unknown error! Your message was not send";
  }
?>