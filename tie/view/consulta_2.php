<?php require_once '../config.php'; ?>
<?php include (CONNECTION);
    include (STRINGS_LIB);
    $nRow = 0;
    try {
      $array_result = select_convenio_total_pago_com_nome_parlamentar();
      $total_row = count($array_result);
      $rows_per_page = get_rows_per_page();
      $num_pages = ceil($total_row / $rows_per_page);
   } catch (Exception $ex) {
       echo $ex->getMessage();
   }
    // var_dump($array_result);
?>
<?php include (HEADER_TEMPLATE); ?>

<script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {
    var data = google.visualization.arrayToDataTable([
      ['Número Convênio', 'Diferença', 'Total Empenho', 'Total Pago'],
      <?php foreach ($array_result as $row) { ?>
      [<?=$row["nome_parlamentar"] == '' ? '"PARLAMENTAR NÃO ENCONTRADO"' : "'".$row['nome_parlamentar']." - ".$row['NR_convenio']."'" ?> , <?=$row["diferenca_raw"]*(-1)?>, <?=br_string_to_float($row["totalempenho"])?>, <?=br_string_to_float($row["totalpago"])?> ],
      <?php } ?>
    ]);

    var options = {
      title: 'Convênios com Pontos fora da Curva',
      titleTextStyle: {color: 'white'},
      chartArea: {width: '65%', height: '95%', backgroundColor: '#2C3034'},
      height: <?=$total_row*30?>,
      // width: '100%',
      bar: {groupWidth: "90%"},
      hAxis: {title: 'Valor em Reais', minValue: 0, titleTextStyle: {color: 'white'}, textStyle: {color: 'white', fontSize: 14}, gridlines:{count:21}},
      vAxis: {title: 'Parlamentar - Número do Convênio', titleTextStyle: {color: 'white'}, textStyle: {color: 'white', fontSize: 10}},
      legend: {textStyle:{color:'white', fontSize:18}},
      backgroundColor: '#212529',
      isStacked: 'percent'
      // colors: ['#785F81']
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

    chart.draw(data, options);
  }
</script>

<!-- Loop que gera as TABs. -->
<nav>
  <div class="nav nav-tabs bg-light" id="nav-tab" role="tablist">
    <?php for($i=1; $i <= $num_pages; $i++){?>
      <a class="nav-link  text-primary <?php if($i == 1){  echo 'active';} ?>" id="nav-tab-<?=$i?>" data-toggle="tab" href="#tab-<?=$i?>" aria-controls="nav-<?=$i?>" aria-selected="<?php if($i == 1){  echo 'true';}else{echo 'false';} ?>"><?=$i?></a>
    <?php }?>
    <a class="nav-link text-primary" id="nav-tab-grafico" data-toggle="tab" href="#tab-grafico" aria-controls="nav-grafico" aria-selected="false">Gráfico</a>
  </div>
</nav>

<!-- Divide a tabela pelas TABs -->
<div class="tab-content" id="nav-tabContent">
  <?php for($i=1; $i <= $num_pages; $i++){ ?>
    <div class="tab-pane fade <?php if($i == 1){  echo 'show active';} ?>" id="tab-<?=$i?>" role="tabpanel" aria-labelledby="nav-tab-<?=$i?>">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Número do Convênio</th>
            <th scope="col">Parlamentar</th>
            <th scope="col">Total Empenhado</th>
            <th scope="col">Total Pago</th>
            <th scope="col">Diferença</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if($array_result){
              for($j=1; $j <= $rows_per_page; $j++){
                $index = ((($i-1) * $rows_per_page) + $j) - 1;
                if($index < $total_row){ ?>
                  <tr>
                    <th scope="row"><?=($index+1)?></th>
                      <td><?=$array_result[$index]["NR_convenio"]?></td>
                      <td><?=$array_result[$index]["nome_parlamentar"] == '' ? "PARLAMENTAR NÃO ENCONTRADO" : $array_result[$index]["nome_parlamentar"] ?></td>
                      <td><?php echo 'R'.'&#36;'?> <?=$array_result[$index]["totalempenho"]?></td>
                      <td><?php echo 'R'.'&#36;'?> <?=$array_result[$index]["totalpago"]?></td>
                      <td><?php echo 'R'.'&#36;'?> <?=$array_result[$index]["diferenca"]?></td>
                  </tr>
                <?php
                }
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <div class="tab-pane fade" id="tab-grafico" role="tabpanel" aria-labelledby="nav-tab-grafico">
    <div id="chart_div"></div>
  </div>
</div>

<?php include (FOOTER_TEMPLATE);?>