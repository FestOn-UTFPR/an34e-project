function enviaPagseguro(idGet,precoGet, nomeGet){
	// $.ajax({
 //      type: 'POST',
 //      url: '/Projeto%20FestOn/trunk/code/api/pagseguro/pagseguro.php',
 //      data: "id=idGet&preco=precoGet&nome=nomeGet",
 //      success: function(data) {
 //      	 $('#code').val(data);
	// 	$('#comprar').submit();
 //      }
 //    });

	$.post('/Projeto%20FestOn/trunk/code/api/pagseguro/pagseguro.php','id=idGet&preco=precoGet&nome=nomeGet',function(data){
		// print("O preco é "+preco+" fo evento "+ nome);
		$('#code').val(data);
		$('#comprar').submit();
	})
}