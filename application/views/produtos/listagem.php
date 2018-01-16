<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <!-- <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        
        <meta name="viewport" content="width=device-width">

    	<title>Controle de Estoque Purchase Store</title>
</head>
<body>

	<div class="container">
	  <h2>Produtos</h2>
	  
	  <ul>
	    <li><a href="">Cadastrar Produto</a></li>
	  </ul>
	    

	  <table id="" class="table table-bordered">
	    <thead>
	      <tr>
	        <th>Código Produto</th>
	        <th>Descrição</th>
	        <th>Valor</th>
	        <th>Entrada</th>
	        <th>Saída</th>
	        <th>Saldo</th>
	        <th>Total</th>
	        <th>Editar</th>
	        <th>Excluir</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php foreach($produtos as $p) : ?>
			    <tr>
			        <td><?=$p["id_produto"] ?></td>
			        <td><?=$p["descricao"] ?></td>
			        <td><?=$p["valor"] ?></td>
			        <td><?=$p["quantidadeEntrada"] ? $p["quantidadeEntrada"] : 0 ?></td>
			        <td><?=$p["quantidadeSaida"] ? $p["quantidadeSaida"] : 0  ?></td>
			        <td><?=$total = $p["quantidadeEntrada"] - $p["quantidadeSaida"]  ?></td>
			        <td>R$ <?=$p["valor"] * $total  ?></td>
			        <td><a href="/Produtos/mostrar/<?=$p["id_produto"]?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
          			<td><a href="/Produtos/remove/<?=$p["id_produto"]?>"><span class="glyphicon glyphicon-trash"></span></a></td>
			    </tr>
			<?php endforeach ?>      
	    </tbody>
	  </table>
	</div>

</body>
</html>