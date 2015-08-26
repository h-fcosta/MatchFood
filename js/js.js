function listRec (id){
    jQuery.ajax({
        type:"GET",
        url:"./js/action.php?act=listRec&id=" + id,
        cache: false,
        dataType: "json",
        contentType:"utf-8",
        success: function (dt){
        }
    });
}



function listarAlunos(idCampo) {
    jQuery.ajax({
        type: "GET",
        url: "./js/action.php?act=listarAlunos&id=" + idCampo,
        cache: false,
        dataType: "json",
        contentType: 'utf-8',
        success: function (dt) {
            var htmlTrsArqs = '';
            if (dt.status === 'true') {
                htmlTrsArqs += '<tr>';
                $.each(dt, function (index, value) {
                    if (index !== 'status') {
                        if ((index % 5 === 0) && (index > 0)) {
                            htmlTrsArqs += '</tr><tr>';
                        }
                        var id = encode64(value.id);
                        var foto = value.foto;
                        var nome = value.nome;
                        var sigla = value.sigla;
                        var campo = value.campo;
                        var chamado = value.chamado;
                        var cham = '';

                        if (chamado == '1') {
                            cham = 'chamado';
                        } else {
                            cham = 'naoChamado';
                        }

                        htmlTrsArqs += '<td><a href = "por_aluno.php?id=' + id + '"><img src="admin/' + foto + '" class="img-circle"><br><h4 class = ' + cham + '><b>' + nome + '</b><br>' + sigla + ' - ' + campo + '</h4></a>';
                    } else
                    if (dt.status === 'false') {
                        htmlTrsArqs += 'Associação Inválida';
                    }
                });
                htmlTrsArqs += '</tr>';
            } else {
                htmlTrsArqs += '<tr><td><h2>Associação sem formandos</h2></td></tr>';
            }
            $('.listarAlunos').html(htmlTrsArqs);
        },
        beforeSend: function () {
            //$('.listarAlunos').html("<h2>Carregando...</h2>");
            //$('.listarAlunos').slideDown();
        },
        complete: function () {
            $('.listarAlunos').slideDown();

        },
        error: function () {
            $('.listarAlunos').html("Erro de comunicação com o servidor");
            $('.listarAlunos').slideDown();
        }
    });
}