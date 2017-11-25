function enviaPagseguro(idGet,precoGet, nomeGet){

	$.ajax({
    data: {'id':idGet, 'preco': (precoGet).toFixed(2), 'nome': nomeGet},
    url: 'api/pagseguro/pagseguro.php',
    method: 'POST', // or GET
    success: function(data){
		$('#code').val(data);
		$('#comprar').submit();
	}
});
}