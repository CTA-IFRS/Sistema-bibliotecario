<?php

if (isset($_POST['table']))
{
    $mpdf = new mPDF();
    $table = preg_replace('/<(th|td).*id="ops".*(th|td)>/', '', $_POST['table']);
    $table = preg_replace('/<table/', '<table repeat_header="1"', $table);
    $mpdf->WriteHTML(file_get_contents('css/mpdfstyle.css'),1);
    $mpdf->WriteHTML($table,0);
    $mpdf->Output();
}