<?
header("Content-Type: application/json");
require "index.php";
use Metowolf\Meting;
$query = $_GET["query"];
$api = new Meting("tencent");
$data = $api->format(true)->url($query);
echo $data;
?>