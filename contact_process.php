<?php

    $to = "rockybd1995@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $ques = $_REQUEST['ques'];
    $number = $_REQUEST['number'];
    $cexplain = $_REQUEST['explain'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $ques = "You have a Question from your Bitmap Photography.";

    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>ques:</strong> {$cques}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cexplain}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $ques, $body, $headers);

?>