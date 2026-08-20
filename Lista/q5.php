<?php 
$numero = 15;
if($numero%3 == 0){
    echo "divisível por 3";
}
elseif($numero%5== 0){
    echo "divisível por 5";
}
elseif($numero%3==0 && $numero%5==0){
    echo "divisível por 3 e por 5";
}
else{
    echo "divisível por nenhum";
}    

?>