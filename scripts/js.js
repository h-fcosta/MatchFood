function VerificaTecla(event) {
    var query = "";
    if (event.keyCode === 13) {
        query = $('input[name=s]').val();

        pesquisaTags(query);
    }
}

function pesquisaTags(query) {
    var itens = "";
    jQuery.ajax({
        type: 'get',
        url: 'pesquisa.php?s=' + query,
        cache: false,
        dataType: "json",
        contentType: 'utf-8',
        success: function (retorno) {
            if (retorno[0].erro) {
                $("h2").html(retorno[0].erro);
            } else {
                for (var i = 0; i < retorno.length; i++) {
                    var id = retorno[i].idReceitas;
                    itens += "<tr>";
                    itens += '<td><a href="receita.php?id=' + id + '" class="redirect">' + retorno[i].NomeRec + "</td>";
                    itens += "<td>" + retorno[i].Tipo + "</td>";
                    itens += "<td>" + retorno[i].Origem + "</td>";
                    itens += "</tr>";

                }
                console.log(query)
                receita(id);
                $(".resultado").html(itens);
            }
        }
    });
}

/*function receita(id) {
    var itens = "";
    jQuery.ajax({
        type: 'get',
        url: "dados.php?q=receita&id=" + id,
        cache: false,
        dataType: "json",
        contentType: 'utf-8',
        success: function (retorno) {
            if (retorno[0].erro) {
                $("h2").html(retorno[0].erro);
            } else {
                for (var i = 0; i < retorno.length; i++) {
                    itens += "<tr>";
                    itens += "<td>" + retorno[i].Foto + "</td>";
                    itens += "<td>" + retorno[i].NomeRec + "</td>";
                    itens += "<td>" + retorno[i].Tipo + "</td>";
                    itens += "<td>" + retorno[i].Origem + "</td>";
                    itens += "<td>" + retorno[i].Ingredientes + "</td>";
                    itens += "<td>" + retorno[i].Modo + "</td>";
                    itens += "</tr>";
                }
                $(".receita").html(itens);
                $("h2").html("Carregado");
            }
        }
    });
}*/