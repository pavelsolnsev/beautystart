<?php
/* Defaults */
$GTM_ID = 'GTM-TTN54WK';
$Facebook_ID='';
// $Facebook_ID = '209676029541718'; добавлен гтм
$tiktok = 'C4F2REVM9G8R5RJ0F6B0';

$unit ='uncertain';
$type = 'beautystart';
$land = 'beautystart';
$link = 'thanks/';
$quote_id = '4583';

$title = 'Как открыть салон красоты';
$desc = 'Получите пошаговый план по запуску бизнеса с окупаемостью в 1 год!';

$phone = '+7 (495) 225-23-72';
$mail = 'info@sbs.edu.ru';

$date = '15 февраля';

$autofocus = 'data-options=\'{"autoFocus" : false}\'';

$partner_array = json_decode(file_get_contents("https://franch.sbs.edu.ru/global__FR-partners.json"), true);
if (isset($partner_array[$partner])) {
  $value  = $partner_array[$partner];
  $phone = $value["phone"];
  $email = $value["email"];
}


/* Postprocess */
$phone_link = 'tel:' . preg_replace('![^+0-9]+!', '', $phone);

$action = implode(array(
  'https://syn.su/lander.php?r=land/index',
  '&land=',  $land,
  '&unit=',  $unit,
  '&type=',  $type,
  '&version=',  $version,
  '&partner=',  $partner,
  '&link=',  $link,
  '&quote_id=',  $quote_id,
  '&ignore-thanksall=1'
));
