<?php
	error_reporting(0);
	$c = $_GET['c'];

/*
	$data = array(
		0 => array(
			'year' => '1936',
			'value' => 'The Great Ziegfeld',
			'tokens' => array(
				'The', 'Great', 'Ziegfeld',
			),
		),
		1 => array(
			'year' => '1937',
			'value' => 'The Life of Emile Zola',

			'tokens' => array(
				'The', 'Life', 'of', 'Emile', 'Zola', 
			),
		),
	);
*/

include("connect/connect.php"); 
	
	$sql= "SELECT * FROM costs WHERE CONCAT(CS_COST) like '%$c%' LIMIT 10 ";
	$result = mysql_query($sql) or die(mysql_error());

	for ($i = 0 ; $row = mysql_fetch_assoc($result) ; $i++) {
		$data[$i] = array(
			'Cid' => $row['CS_ID'],
			'value' => $row['CS_COST'],
			'tokens' => array($row['CS_COST']),
		);
	}

	echo json_encode($data);

	