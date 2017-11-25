function enviaPagseguro(idGet,precoGet, nomeGet){

	var obj = {
            "id" = idGet,
            "nome" = nomeGet,
            "preco" = precoGet
            }.serialize();

	$.ajax({
    data: '',
    url: 'api/pagseguro/pagseguro.php',
    method: 'POST', // or GET
    success: function(data){
		$('#code').val(data);
		$('#comprar').submit();
	}
});

 // 	var obj = {
 //            "id" : idGet,
 //            "nome"  : nomeGet,
 //            "preco" : precoGet
 //            }

	// $.post('/trunk/code/api/pagseguro/pagseguro.php',obj,function(data){
	// 	$('#code').val(data);
	// 	$('#comprar').submit();
	// })
}