function DataTableA11Y(tableId){
    $(tableId).DataTable({
        keys: true
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
