<?
header("Content-Type: application/json");
require "index.php";
use Metowolf\Meting;
$query = $_GET["query"];
$page = $_GET["page"];
$api = new Meting("tencent");
$data = $api->format(true)->search($query,$page,"20");
echo $data;
?>