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

     toastr["info"]("Fazendo Conexão!!", "BaseDados");
    
    setTimeout(function(){
        $.ajax({
            url: '../assets/php/insertmsg.php',
            type: 'POST',
            data: { title: tit, mens: msg, catg: cat, hash: has, task: task },
            success: function(data) {
                //console.log(data);
                //toastr["warning"]("A mensagem selecionada já não existe!");
                //toastr['info'](data);
                //console.log(data);
                if(data == 1){
                    toastr['success']('Publicação criada com Sucesso.','Mensagem');
                }
                else{
                    toastr['error']('Tente novamente!!');
                }

            },
            error: function() 
            {
                toastr["error"]("Algo de errado aconteceu, tente outravez.", "Error!");
            }
        });
    }, 500);
}

//toastr so para inserir
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

