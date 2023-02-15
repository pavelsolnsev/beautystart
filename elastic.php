<?php

function getProducts($invoice)
{

  $cURLConnection = curl_init();
  $apiUrl = 'https://corp-search.synergy.ru/api/entity/invoice/';

  curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl . $invoice);
  curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

  $result = curl_exec($cURLConnection);
  curl_close($cURLConnection);

  $jsonArrayResponse = json_decode($result);

  return $jsonArrayResponse;
}

function getProduct($id)
{

  $cURLConnection = curl_init();
  $apiUrl = 'https://corp-search.synergy.ru/api/entity/product/';

  curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl . $id);
  curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

  $result = curl_exec($cURLConnection);
  curl_close($cURLConnection);

  $jsonArrayResponse = json_decode($result);

  return $jsonArrayResponse;
}

function priceFormat($price)
{
  return number_format($price, 0, '', ' ');
}

function dateFormat($date)
{
  $months = [
    "01" => "января",
    "02" => "февраля",
    "03" => "марта",
    "04" => "апреля",
    "05" => "мая",
    "06" => "июня",
    "07" => "июля",
    "08" => "августа",
    "09" => "сентября",
    "10" => "октября",
    "11" => "ноября",
    "12" => "декабря"
  ];
  $mouth = date("m", strtotime($date));

  return 'C ' . date("d", strtotime($date)) . ' ' . $months[$mouth];
}

function getCurrPrice($row)
{
  $n = -1;
  if (is_array($row)) {
    foreach ($row as $price) {

      if (time() >= strtotime($price->active_from)) {
        $n++;
      }
    }
  }
  return $n;
}
/*
    Запрос продуктов, переменные хранятся в config.php
*/
$invoice = getProducts($invoiceId);

try {

  if ($invoice && $invoice->products != null) {

    foreach ($invoice->products as $row) {

      switch ($row->id) {

        case $product_expert:
            $expert_isActive = $row->active;
            $expert_price    = $row->base_price->price;
        break;

        case $product_business:
            $business_isActive = $row->active;
            $business_price    = $row->base_price->price;
        break;

      }
    }
  }
} catch (Exception $e) {
}
