<?php

use Sendinblue\Mailin;

require_once dirname(__DIR__).'/../public/librerias/Sendinblue/Mailin.php';

/*
 * This will initiate the API with the endpoint and your access key.
 *
 */
// $mailin = new Mailin('masivos@grupolahe.com', 'KAIU4Sb1CfDyFMcm');
// $mailin = new Mailin('https://api.sendinblue.com/v2.0','KAIU4Sb1CfDyFMcm');
// $mailin = new Mailin('masivos@grupolahe.com','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');
$mailin = new Mailin('https://api.sendinblue.com/v3.0','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');

// $data = array("type" => "classic", "status" => "queued", "page" => 1, "page_limit" => 10);
// var_dump($mailin->get_campaigns_v2($data));


// var_dump($mailin);

/*
 * This will send a transactional email
 *
 */
/** Prepare variables for easy use **/ 

$data = array( "to" => array("darkrayshadow28@gmail.com"=>"to whom!"),
			"cc" => array("cc@example.net"=>"cc whom!"),
			"bcc" =>array("bcc@example.net"=>"bcc whom!"),
			"from" => array("grupolahe.play.s@gmail.com","from email!"),
			"replyto" => array("replyto@email.com","reply to!"),
			"subject" => "My subject",
			"text" => "This is the text",
			"html" => "This is the <h1>HTML</h1><br/>
					   This is inline image 1.<br/>
					   <img src=\"{myinlineimage1.png}\" alt=\"image1\" border=\"0\"><br/>
					   Some text<br/>
					   This is inline image 2.<br/>
					   <img src=\"{myinlineimage2.jpg}\" alt=\"image2\" border=\"0\"><br/>
					   Some more text<br/>
					   Re-used inline image 1.<br/>
					   <img src=\"{myinlineimage1.png}\" alt=\"image3\" border=\"0\">",
			"attachment" => array(),
			"headers" => array("Content-Type"=> "text/html; charset=iso-8859-1","X-param1"=> "value1", "X-param2"=> "value2","X-Mailin-custom"=>"my custom value", "X-Mailin-IP"=> "102.102.1.2", "X-Mailin-Tag" => "My tag"),
			"inline_image" => array('myinlineimage1.png' => "your_png_files_base64_encoded_chunk_data",'myinlineimage2.jpg' => "your_jpg_files_base64_encoded_chunk_data")
);

// var_dump($data);

var_dump($mailin->send_email($data));


?>