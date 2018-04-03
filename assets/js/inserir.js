$( "#catg" ).change(function() {
    //alert($(this).val());
});

function gupufe(task){
    //Verificar se os campos necessarios foram preenchidos
    if($('#title').val() == ""){
        $('#title').focus();
        toastr["warning"]("O titulo é obrigatorio ser preenchido!!");
        return 0;
    }
    else if($('#summernote').val() == ""){
        $('#summernote').focus();
        toastr['warning']('A mensagem tem de ter conteudo para ser publicada!');
        return 0;
    }
    else if($('#catg').val() == null){
        $('#catg').focus();
        toastr['warning']('Tem de escolher uma categoria!!');
        return 0;
    }
    
    var tit = $('#title').val();//value do titulo
    var msg = $('#summernote').val();//value da mensagem
    var cat = $('#catg').val();//value da categoria
    var has = $('#hashs').val();//value das tags

    $.ajax({
		url: '../assets/php/insertmsg.php',
		type: 'POST',
        data: { title: tit, mens: msg, catg: cat, hash: has, task: task },
		success: function(data) {
			//console.log(data);
		    //toastr["warning"]("A mensagem selecionada já não existe!");
            //toastr['info'](data);
            console.log(data);

		},
		error: function() 
		{
			toastr["error"]("Algo de errado aconteceu, tente outravez.", "Error!");
		}
	});
}

