<!DOCTYPE html>
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="da">
    <meta http-equiv="refresh" content="5;URL=../kontakt4.htm">
    <title>E-mail svar</title>
    <link rel="stylesheet" type="text/css" href="../css/oesterhoej-syd.css">
  </head>

  <body>
    <!--Header table start-->
    <table>
      <tr>
        <td width="150">
        </td>
        <td>
          <h1>Østerhøj Syd</h1>
        <td/>
        <td align="right">
          <!-- Start css3menu.com Header section id=1 -->
          <ul id="css3menu1" class="topmenu">
	        <li class="topfirst"><a href="/kontakt.htm" title="Kontakt grundejerforeningen" style="width:84px;height:26px;line-height:26px;"><img src="../css/billeder/blue-discuss.png" alt=""/>Kontakt</a></li>
	        <li class="toplast"><a href="/index.htm" title="Grundejerforeningen Østerhøj Syd" style="width:84px;height:26px;line-height:26px;"><img src="../css/billeder/blue-home2.png" alt=""/>Startside</a></li>
          </ul>
          <p style="display:none"><a href="http://css3menu.com/">CSS Hide Button Text Css3Menu.com</a></p>
          <!-- End css3menu.com Header section -->
        </td>
      </tr>    
    </table>
    <!--Header table end-->
    
    <!--Main table start-->
    <table>
      <tr>
        <td bgcolor="444444" valign="top" width="150"><!--Menu cell start-->
          <!-- Start css3menu.com BODY section id=1 -->
          <ul id="css3menu2" class="topmenu">
            <li class="topfirst"><a href="/velkommen.htm" title="Velkommen til grundejerforeningen Østerhøj Syd" style="width:122px;height:23px;line-height:23px;">Velkommen</a></li>
            <li class="topmenu"><a href="/nyheder.htm" title="Nyheder i grundejerforeningen" style="width:122px;height:23px;line-height:23px;">Nyheder</a></li>
            <li class="topmenu"><a href="/omraadet.htm" title="Information og historie om Østerhøj Syd" style="width:122px;height:22px;line-height:22px;">Området</a></li>
            <li class="topmenu"><a href="/bestyrelsen.htm" title="Information fra bestyrelsen" style="width:122px;height:23px;line-height:23px;"><span>Bestyrelsen</span></a>
              <ul>
                <li class="subfirst"><a href="/bestyrelsen.htm" title="Information fra bestyrelsen">Bestyrelsen</a></li>
                <li><a href="/bestyrelsen/faelleshusudvalg.htm" title="Fælleshusudvalget">Fælleshusudvalg</a></li>
                <li><a href="/bestyrelsen/vej-groentudvalg.htm" title="Vej &amp; grøntudvalget">Vej &amp; grøntudvalg</a></li>
              </ul></li>
            <li class="topmenu"><a href="/faelleshus.htm" title="Østerhøj Syd fælleshus" style="width:122px;height:22px;line-height:22px;"><span>Fælleshus</span></a>
              <ul>
                <li class="subfirst"><a href="/faelleshus.htm" title="Østerhøj Syd fælleshus">Fælleshus</a></li>
                <li><a href="/faelleshus/leje.htm" title="Hvem kan leje fælleshuset">Leje</a></li>
                <li><a href="/faelleshus/reservation.htm" title="Hvordan reserveres fælleshuset">Reservation</a></li>
                <li><a href="/faelleshus/benyttelse.htm" title="Regler for brug af fælleshuset">Benyttelse</a></li>
                <li><a href="/falleshus/aflevering.htm" title="Hvordan skal fælleshuset afleveres efter brug">Aflevering</a></li>
                <li><a href="/faelleshus/kontrakt.pdf" target="_blank" title="Kontrakt for lejeaftale af fælleshuset ">Kontrakt</a></li>
                <li><a href="/faelleshus/bilag.htm" title="Information om parkering og bordopstilling m.m.">Bilag</a></li>
                <li><a href="/faelleshus/kalender.htm" title="Kalender for fælleshuset">Kalender</a></li>
              </ul></li>
            <li class="topmenu"><a href="/fotogalleri" title="Fotogalleri for grundejerforeningen" style="width:122px;height:23px;line-height:23px;"><span>Fotogalleri</span></a>
              <ul>
                <li class="subfirst"><a href="/fotogalleri.htm" title="Fotogalleri for grundejerforeningen">Fotogalleri</a></li>
                <li><a href="/fotogalleri/kunst-1.htm" title="Kunst i Østerhøj Syd">Kunst</a></li>
                <li><a href="/fotogalleri/faelleshus-byggeri-1.htm" title="Opbygning af fælleshuset">Fælleshus byggeri</a></li>
                <li><a href="/fotogalleri/faelleshus-indvielse-1.htm" title="Indvielse af fælleshuset">Fælleshus Indvielse</a></li>
              </ul></li>
            <li class="toplast"><a href="/links.htm" title="Links til andelsforeninger m.m. i grundejerforeningen" style="width:122px;height:22px;line-height:22px;">Links</a></li>
          </ul>
          
          <p style="display:none"><a href="http://css3menu.com/">CSS Hide Button Text Css3Menu.com</a></p>
          <!-- End css3menu.com BODY section -->
         
        </td><!--Menu cell end-->
        <td width="12">
        </td>        
        <td valign="top"><!--Body cell start-->
	     
          <!--Body table start-->
          <table>
            <tr>    
              <td>
                <h2>E-mail svar</h2>
              </td>
            </tr>
            <tr>
              <td>
            
  
<?
if (!empty($_POST['subject'])) {
  header ("Location: blokeret.php");
 exit;
}
?>

<?php
if (isset($_POST['submit']))
{
 if (!empty($_POST['name']) && // tjek, at der er skrevet et navn
 !empty($_POST['email']) &&    // tjek, at der er skrevet en e-mail-adresse
 !empty($_POST['emne']) &&  // tjek, at der er skrevet et emne
 !empty($_POST['besked']) &&  // tjek, at der er skrevet en besked

// her følger sikringen mod spambotter
 !strpos($_POST['name'], "oesterhoej-syd.dk") &&  // tjek, at dit domæne ikke er skrevet i feltet "navn"
 !strpos($_POST['email'], "oesterhoej-syd.dk") && // tjek, at dit domæne ikke er skrevet i feltet "email"
 !strpos($_POST['name'], "@") && // tjek, at der ikke er et @ i "navn"
 !eregi("\r",$_POST['name']) &&  // tjek, at der ikke er "vogn-retur" i "navn"
 !eregi("\n",$_POST['name']) &&  // tjek, at der ikke er "linjeskift" i "navn"
 !eregi("\r",$_POST['email']) && // tjek, at der ikke er "vogn-retur" i "email"
 !eregi("\n",$_POST['email']))   // tjek, at der ikke er "linjeskift" i "email"

// er alt ok, fortsættes med afsendelse af mailen
 {
  $headers="From: ".$_POST['name']."<".$_POST['email'].">";
  if (@$_POST['customer_copy'])
  {
   $headers .= "\r\nBcc: ".$_POST['email'];
  }
  $body .= "Den " . date("d/m y") . " kl. " . date("G:i") . " skrev " . $_POST['name'] . ":\r\n\r\n" . $_POST['besked'];
  if (@mail("formand@oesterhoej-syd.dk", strip_tags($_POST['emne']),
  stripslashes(strip_tags($body)), $headers))
  {
   echo "<br><h3>Tak for din henvendelse. Vi svarer så hurtigt som muligt.</h3>";
  }
  else
  {
   echo "<br><h3>E-mailen blev ikke sendt. Der skete en fejl. Prøv igen!</h3>";
  }
 }
 else
 {
  echo "<br><h3>Mailen kunne ikke sendes, alle felter skal udfyldes korrekt!</h3>";
 }
}
?>
              </td>
            </tr>
          </table>
          <!--Body table end-->
          
        </td><!--Body cell end-->
      </tr>
    </table>
    <!--Main table end-->
    
    <!--Footer table start-->
    <table>
      <tr>
        <td colspan="2">
          <hr>
        </td>
      <tr>
        <td>
          <h6>Copyright &#169; 2008 Grundejerforeningen Østerhøj syd. Alle rettigheder forbeholdes.<br>
          Senest redigeret: 22. februar 2013. Paw Mohr.</h6>
        </td>
      </tr>
    </table>
    <!--Footer table end-->
    
  </body>
  
</html>
 