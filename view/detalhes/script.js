var textCep = document.querySelector("#textCep")

$(document).ready(function () {
    $(document).on('click', '#button', function (event) {
        var formCep = document.querySelector("#floatingPassword").value;
        $.ajax({
            url: "/usuario/lucas_oliveira/projetos/projeto-loja-de-games-mvc/controller/detalhes/action.php",
            type: "post",
            dataType: "",
            data: { cep: formCep, acao: 'consulta-cep' },
            success: function (retorno) {
                $("#textCep").html(retorno)
            }
        })
    });
});