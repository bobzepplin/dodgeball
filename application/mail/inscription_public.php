<?php
defined('C5_EXECUTE') or die("Access Denied.");
$dh = Core::make('helper/date');

//$ThemePath = $this->getThemePath();

$formDisplayUrl=BASE_URL.'/' . DISPATCHER_FILENAME . '/dashboard/reports/forms/?qsid='.$questionSetId;


$teamName = $questionAnswerPairs[1]['answer'];
$teamSlogan = $questionAnswerPairs[2]['answer'];
$teamType = $questionAnswerPairs[3]['answer'];

$leader = $questionAnswerPairs[4]['answer'];
$leaderPhone = $questionAnswerPairs[5]['answer'];
$leaderEmail = $questionAnswerPairs[6]['answer'];
$leaderAdress = $questionAnswerPairs[9]['answer'];
$leaderCity = $questionAnswerPairs[10]['answer'];

$souperdusoir = $questionAnswerPairs[12]['answer'];

$teamImage = $questionAnswerPairs[8]['answer'];


$bodyHTML = "";
$bodyHTML .= '<html><body><table border="0" width="480" align="center" cellspacing="0" cellpadding="0" style="font-size:12px; font-family: Arial, Helvetica, sans-serif; color:#485863;">'."\n";
$bodyHTML .= '<tr><td bgcolor="#222222"><a href="http://www.denismartin.ch"><img src="'.BASE_URL.'/application/themes/afdbba/dist/img/mail/header.jpg" width="480" height="297" alt="Dodgeball Beach Tournament" border="0" style="display:block"/></a></td></tr>'."\n";
$bodyHTML .= '<tr><td>&nbsp;</td></tr><tr><td colspan="2">'."\n";
$bodyHTML .= '<tr><td>'."\n";


$bodyHTML .= '<tr><td width="300"><h1 style="font-weight: lighter;">Merci '.$leader.'! L\'inscription de l\'équipe "'.$teamName.'" est (presque) un succès.</h1></td></tr>'."\n";
$bodyHTML .= '<tr><td>&nbsp;</td></tr>'."\n";
$bodyHTML .= '<tr><td colspan="2">
              <p>(afin de finaliser votre inscription, merci de procéder au virement via <b>e-banking</b> des frais d\'inscription qui se montent à <b>35CHF</b> sur notre compte: <br /><b>CH61 8012 3000 0031 8536 8</b><br>Route des Caudrettes 67<br>1564 Domdidier<br>
              </p>
              <p>Toute l\'équipe se réjouit de vous accueillir pour cette nouvelle édition qui s\'annonce autant déjantée (si ce n\'est plus) que celle des années précédentes. Et ce bien sûr, grâce à vous!</p>
              <p>N\'oubliez pas de <b>liker notre page <a href="https://www.facebook.com/dodgeballbeachtournament">facebook</a></b> pour rester au courant des petites infos croustillantes que nous distillerons au fur et à mesure des jours à venir. N\'hésitez d\'ailleurs pas à partager la page de notre Evénement sur vos réseaux sociaux, plus on est de fous, plus il y a de balles à jeter!</p>
              <p>Toutes les autres informations pratiques, telles que votre horoscope aztec et les horaires des matchs vous seront fournies par e-mail quelques temps avant le jour j.</p>
              <p style="font-size: 10px">En attendant, voici déjà de quoi ronger votre frein avec le <a href="http://www.dodgeball.ch/download_file/63/1">réglement officiel</a>, que nous vous invitons chaudement à parcourir ou au moins à transmettre à vos cohéquipiers afin de préserver la santé mentale de vos miséricordieux arbitres.</p>
              </td></tr>'."\n";

$bodyHTML .= '<tr><td>&nbsp;</td></tr>'."\n";

$bodyHTML .= '<tr><td>&nbsp;</td></tr>'."\n";

$bodyHTML .= '<tr><td>&nbsp;</td></tr><tr><td style="font-size:1px"><hr align="center" width="100%" size="1" noshade color="#eeeeee"></td></tr>'."\n";

$bodyHTML .= '<tr><td>&nbsp;</td></tr>'."\n";
$bodyHTML .= '</tr><tr><td >&nbsp;</td></tr><tr><td style="font-size:1px"><hr align="center" width="100%" size="3" noshade color="#222222"></td></tr><tr><td >&nbsp;</td></tr>'."\n";
$bodyHTML .= '<tr><td align="center"><strong style="color:#d97c0a">AFDBBA</strong></td></tr>' ."\n";
$bodyHTML .= '<tr><td align="center">'."\n";
$bodyHTML .= '<strong><a href="mailto:info@dodgeball.ch" style="color:#D97C0A; text-decoration:none">info@dodgeball.ch</a></strong></td></tr>'."\n";
$bodyHTML .= '</table></body></html>'."\n";