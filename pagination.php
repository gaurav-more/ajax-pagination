<?php
include('db.php');

$limit = 100;

if (isset($_GET["page"])) {
	$page  = $_GET["page"];
} else {
	$page=1;
};

$start_from = ($page-1) * $limit;  

echo $sql        = "SELECT * FROM tblmembers ORDER BY insert_date ASC LIMIT $start_from, $limit";  
$rs_result  = mysql_query ($sql);  
?>
<table class="table table-bordered table-striped">  
	<thead>  
		<tr>  
			<th>title</th>  
			<th>body</th>  
		</tr>  
	</thead>  
	<tbody>  
		<?php  
		while ($row = mysql_fetch_assoc($rs_result)) {  
			?>  
			<tr>  
				<td><?= $row["member_id"]; ?></td>  
				<td><?= $row["profile_id"]; ?></td>  
			</tr>  
			<?php  
		};  
		?>  
	</tbody>  
</table>    