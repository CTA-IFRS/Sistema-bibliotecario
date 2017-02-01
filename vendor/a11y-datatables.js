function DataTableA11Y(tableId){
    var table = $(tableId).DataTable({
        keys: true,
        'language' : {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "Resultados por página: _MENU_",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },
    });

    $('.paginate_button').find('a:first').each(function () {
        if ($.isNumeric($(this)[0].innerHTML)){
            $(this).attr('aria-label', 'Página ' + $(this)[0].innerHTML);
        }
        else {
            $(this).attr('aria-label', $(this)[0].innerHTML);
        }
    });

    $('.active').find('a:first').each(function () {
        $(this).attr('aria-selected', 'true');
    })
}