<?php require_once 'config.php'; ?>
<?php include (CONNECTION);
    $nRow = 0;
    try {
       $grupo = select_convenio_total_pago(); 
   } catch (Exception $ex) {
       echo $ex->getMessage();
   }
    // var_dump($grupo);
?>
<?php include (HEADER_TEMPLATE); ?>


<table class="table table-striped table-dark">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Número do Convênio</th>
      <th scope="col">Total Pago</th>
      <th scope="col">Total Empenhado</th>
      <th scope="col">Diferença</th>
    </tr>
  </thead>

  <tbody>
  	
  	<?php
    	if($grupo){
    		$number_row = 1;
    		foreach ($grupo as $row){?>
	    
	    <tr>
  	      <th scope="row"><?=$number_row++?></th>
  	      <td><?=$row["NR_convenio"]?></td>
          <td><?php echo 'R'.'&#36;'?> <?=$row["totalpago"]?></td>
          <td><?=$row["totalempenho"]?></td>
          <td><?=$row["difereca"]?></td>
	    </tr>

	<?php } } ?>

  </tbody>

</table>


<?php include (FOOTER_TEMPLATE);?>