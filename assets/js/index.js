function reloadtable(pop){//LIMPAR A TABELA E PREENCHER COM OS NOVOS DADOS DAS CATEGORIAS
	$.ajax({
            url: 'assets/php/getdata.php',
            type: 'POST',
            data: { responsee: pop, task: 'tipo' },
            success: function(data) {
                //console.log(data);

                if(data == "falsecat")//categoria sem conteudo para apresentar
                {
					toastr["warning"]("A categoria selecionada ainda não tem conteudo!");
                	return 0;
                }

                var table = $('#dataTables-example').DataTable();

                table
	    			.clear()

                var str = data;
        		var res = str.split("/:/");

        		res.forEach(function(element) {
					//console.log(element);

				  	var str2 = element;
				  	var res2 = str2.split("**:**");
				  	//console.log(res2[0] + res2[1] + res2[2] + res2[3] + res2[4]);
					
				  	table
				    	.row.add( [ res2[0], res2[1], res2[2], res2[3], res2[4] ] )
				    	.draw();
				});

            },
		    error: function() 
		    {
		    	toastr["error"]("Algo de errado aconteceu, tente outravez.", "Error!");
		    }
        });
}

//Passar o tipo da linguagem para obter os dados para o utilizador
function getipo(tipo){
	//console.log(tipo);
	reloadtable(tipo);//reload na tabela com as mensagens da nova linguagem pedida
}

//Para passar o id da mensagem para o php para obter os dados para apresentar ao utilizador
function getmens(msgid){
		//console.log('wt');
	$.ajax({
		url: 'assets/php/getdata.php',
		type: 'POST',
		data: { responsee: msgid, task: 'msg' },
		success: function(data) {
			//console.log(data);

			if(data == "falsemsg"){
				toastr["warning"]("A mensagem selecionada já não existe!");
				return 0;
			}

			/*var str = data;
			var res = str.split("**:**");
			
			$('#titlemsg').html(res[0]);
			$('#bodymsg').html(res[1]);
			$('#cardmsg').show();*/


			//prettyPrint();
			
			$("#cardmsg").load( "index.php #cardmsg", function() {
				$("#cardmsg").show();
				var str = data;
				var res = str.split("**:**");//separar os dados que ve foram dados
				$("#hits"+res[0]).html(res[1]);//atualizar os hits
				$("#cardmsg").removeClass('card');
				prettyPrint();
			});

			

		},
		error: function() 
		{
			toastr["error"]("Algo de errado aconteceu, tente outravez.", "Error!");
		}
	});
}


//quando a pagina inicia
$("#cardmsg").hide();

$('#dataTables-example').ready(function() {//limpar a tabela
	setTimeout(function(){ 
		$('#dataTables-example').DataTable().clear().draw(); 
	}, 1);
});

toastr.options = {
	"closeButton": true,
	"debug": false,
	"newestOnTop": false,
	"progressBar": true,
	"positionClass": "toast-top-right",
	"preventDuplicates": false,
	"onclick": null,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "3000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
  }