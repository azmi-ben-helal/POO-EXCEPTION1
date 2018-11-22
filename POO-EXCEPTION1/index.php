<?php

function divide($a,$b)
{

    if($b==0){
        throw new Exception('b doit etre different de zero');
    }

    return $a / $b;

}

try
{
    echo divide(41, 0), '<br />';
    echo divide(19, 1), '<br />';
    echo divide(8, 2);
}
catch (Exception $e)
{
    echo 'Une exception a été lancée. Message d\'erreur : ', $e->getMessage().'<br>';
    echo "Previous : " ,$e->getPrevious(),"<br>";
    echo "Code : " ,$e->getCode() ,"<br>";
    echo "File : " ,$e->getFile() ,"<br>";
    echo "Line : " ,$e->getLine() ,"<br>";
    echo "trace : ";print_r ($e->getTrace()) ; echo "<br>";
    echo "trace As String : ",$e->getTraceAsString() ,"<br>";
    $str= $e->__toString() ; echo "toString : $str <br>";
}





