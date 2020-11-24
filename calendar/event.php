<?php

/*
$connect = new PDO('mysql:host=sql308.epizy.com;dbname=epiz_26496412_w790', 'epiz_26496412', 'MAspVytRLHfONL5');

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_date"],
  'end'   => $row["end_date"]
 );
}

echo json_encode($data);

*/

    include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php';

global $wpdb;
$requete = "SELECT * FROM events ORDER BY id";

$conn = new PDO('mysql:host=localhost;dbname=sample','root','');
$calendar = array();
$query = "SELECT id, title, start_date, end_date FROM events LIMIT 20";
$statement = $connect->prepare($query);

$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row){
    $start = strtotime($rows['start_date']) * 1000;
    $end = strtotime($rows['end_date']) * 1000; 
    $calendar[] = array(
        'id' =>$rows['id'],
        'title' => $rows['title'],
        'url' => "#",
        "class" => 'event-important',
        'start' => "$start",
        'end' => "$end"
    );
}
$resultat = $wpdb->get_results($requete);

$calendarData = array(
	"success" => 1,	
    "result"=>$calendar);
echo json_encode($resultat);
exit;





?>