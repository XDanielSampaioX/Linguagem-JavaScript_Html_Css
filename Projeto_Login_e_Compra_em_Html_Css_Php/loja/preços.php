<?php
    $cpu=  $_POST ['computador-opcoes-cpu'];
    $monitor= $_POST['computador-opcoes-monitor'];
    $memoria= $_POST['computador-opcoes-mem'];
    $amazenamento= $_POST ['computador-opcoes-hd/ssd'];
    $so= $_POST ['computador-opcoes-so'];

    $text1 = "";
    $text2 = "";
    $text3 = "";
    $text4 = "";

    switch ($cpu) {
        case '1':
            $text1= "\nProcessado i3 custa: R$ 200";
            $valor_cpu= 200;
            break;
        case '2':
            $text1= "\nProcessado i5 custa: R$ 300";
            $valor_cpu= 300;
            break;
        case '3':
            $text1= "\nProcessado i7 custa: R$ 400";
            $valor_cpu= 400;
            break;
        case '4':
            $text1= "\nProcessado i9 custa: R$ 600";
            $valor_cpu= 600;
            break;
    }

    switch ($monitor){
        case '1':
            $text2 = "\nNoc 12' custa: R$ 1000";
            $valor_monitor = 1000;
            break;
        case '2':
            $text2 = "\nSamsung 16' custa: R$ 1200";
            $valor_monitor = 1200;
            break;
        case '3':
            $text2 = "\nLG 25' custa: R$ 1400";
            $valor_monitor = 1400;
            break;
        case '4':
            $text2 = "\nDELL 10' custa: R$ 1000";
            $valor_monitor = 1000;
            break;
                
    }

    switch($memoria)
    {
        case '1':
            $text2 = "\n4gb-ddr3' custa: R$ 1000";
            $valor_monitor = 1000;
            break;
        case '2':
            $text2 = "\n4gb-ddr4' custa: R$ 1200";
            $valor_monitor = 1200;
            break;
        case '3':
            $text2 = "\n8gb-ddr4' custa: R$ 1400";
            $valor_monitor = 1400;
            break;
        case '4':
            $text2 = "\n12gb-ddr4' custa: R$ 1600";
            $valor_monitor = 1000;
            break;
   
    }

    switch($amazenamento)
    {
        case '1':
            $text3 = "\nHD-200GB memoria custa: R$ 1000";
            $valor_amazenamento = 1000;
            break;
        case '2':
            $text3 = "\nSSD-1TB' custa: R$ 1200";
            $valor_amazenamento = 1200;
            break;
        case '3':
            $text3 = "\nSSD-256GB' custa: R$ 1400";
            $valor_amazenamento = 1400;
            break;
        case '4':
            $text3 = "\nHB-1TB' custa: R$ 2000";
            $valor_amazenamento = 2000;
            break;
    }

    switch($so)
    {
        case '1':
            $text4 = "\nSistema operacional Windows";
            break;
        case '2':
            $text4 = "\nSistema operacional Linux";
            break;
    }

    echo nl2br("$text1 $text2 $text3 $text4");

    $total= $valor_cpu;

?>