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
$bodyHTML .= '<tr><td bgcolor="#222222"><a href="http://www.denismartin.ch"><img src="'.BASE_URL.'/application/themes/afdbba/dist/img/mail/header.jpg" width="480" height="200" alt="Dodgeball Beach Tournament" border="0" style="display:block"/></a></td></tr>'."\n";
$bodyHTML .= '<tr><td>&nbsp;</td></tr><tr><td colspan="2">'."\n";
$bodyHTML .= '<tr><td>'."\n";


$bodyHTML .= '<tr><td width="300"><h1 style="font-weight: lighter;">Votre Inscription au tournoi</h1></td></tr>'."\n";
$bodyHTML .= '<tr><td>&nbsp;</td></tr>'."\n";
$bodyHTML .= '<tr><td colspan="2">&nbsp;</td></tr>'."\n";

$bodyHTML .= '<tr><td width="300"><strong>Nom de l\'équipe</strong><br/>'.$teamName.'</td></tr>'."\n";
$bodyHTML .= '<tr><td width="300"><strong>Type d\'équipe</strong><br/>'.$teamType.'</td></tr>'."\n";
$bodyHTML .= '<tr><td width="300"><strong>Responsable</strong><br/>'.$leader.'</td></tr>'."\n";
$bodyHTML .= '<tr><td width="300"><strong>Téléphone</strong><br/>'.$leaderPhone.'</td></tr>'."\n";
$bodyHTML .= '<tr><td width="300"><strong>Email</strong><br/><a href="mailto:'.$leaderEmail.'">'.$leaderEmail.'</a></td></tr>'."\n";
$bodyHTML .= '<tr><td width="300"><strong>Adressse</strong><br/>'.$leaderAdress.'</td></tr>'."\n";
$bodyHTML .= '<tr><td width="300"><strong>Ville</strong><br/>'.$leaderCity.'</td></tr>'."\n";
$bodyHTML .= '<tr><td width="300"><strong>Souper du soir</strong><br/>'.$souperdusoir.'</td></tr>'."\n";


$bodyHTML .= '<tr><td>&nbsp;</td></tr>'."\n";

$bodyHTML .= '<tr><td>&nbsp;</td></tr><tr><td style="font-size:1px"><hr align="center" width="100%" size="1" noshade color="#eeeeee"></td></tr>'."\n";

$bodyHTML .= '<tr><td>&nbsp;</td></tr>'."\n";
$bodyHTML .= '</tr><tr><td >&nbsp;</td></tr><tr><td style="font-size:1px"><hr align="center" width="100%" size="3" noshade color="#222222"></td></tr><tr><td >&nbsp;</td></tr>'."\n";
$bodyHTML .= '<tr><td align="center"><strong style="color:#d97c0a">AFDBBA</strong></td></tr>' ."\n";
$bodyHTML .= '<tr><td align="center">'."\n";
$bodyHTML .= '<strong><a href="mailto:info@dodgeball.ch" style="color:#D97C0A; text-decoration:none">info@dodgeball.ch</a></strong></td></tr>'."\n";
$bodyHTML .= '</table></body></html>'."\n";