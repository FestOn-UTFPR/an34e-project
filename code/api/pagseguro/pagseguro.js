function enviaPagseguro(){

	$.post('/Projeto%20FestOn/trunk/code/api/pagseguro/pagseguro.php','',function(data){
		// print("O preco é "+preco+" fo evento "+ nome);
		$('#code').val(data);
		$('#comprar').submit();
	})
}