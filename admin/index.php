<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>

<div class="col-md-10">
	<h1 style="text-align:center">TsA Finance</h1>
    <h3>Welcome to Our Page</h3>
    <b>Another day, Another dollar</b>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>