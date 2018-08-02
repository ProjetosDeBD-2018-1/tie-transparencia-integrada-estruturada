<?php require_once 'config.php'; ?>
<?php include (CONNECTION);
    $nRow = 0;
    try {
       $grupo = select_quantidade_proposta_emenda(); 
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
      <th scope="col">Quantidade de Propostas</th>
      <th scope="col">Número da Proposta</th>
      <th scope="col">Número da Emenda</th>
      <th scope="col">Nome parlamentar</th>
      <th scope="col">Nome do Proponente</th>
    </tr>
  </thead>

  <tbody>
  	
  	<?php
    	if($grupo){
    		$number_row = 1;
    		foreach ($grupo as $row){?>
	    
	    <tr>
	     	<th scope="row"><?=$number_row++?></th>
	    	<td><?=$row["qtdProposta"]?></td>
        	<td><?=$row["id_proposta"]?></td>
        	<td><?=$row["NR_emenda"]?></td>
        	<td><?=$row["nome_parlamentar"]?></td>
        	<td><?=$row["nm_proponente"]?></td>
	    </tr>

	<?php } } ?>

  </tbody>

</table>


<?php include (FOOTER_TEMPLATE);?>