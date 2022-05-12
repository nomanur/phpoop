<?php


require 'function.php';
require 'vendor/autoload.php';


use Dompdf\Dompdf;
// try {
//     $pdo = new PDO('mysql:host=127.0.0.1;dbname=ourtodo;', 'root', '123');
// } catch (Exception $e) {
//     var_dump($e->getMessage());
// }

$pdo = connection();
$tasks = selectAll($pdo);

// $statement = $pdo->prepare("select * from todos");

// $statement->execute();

//$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';
$dompdf = new Dompdf();

$html = 'hello world';
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
ob_end_clean();
$dompdf->stream("codexworld", array("Attachment" => 0));
exit;
