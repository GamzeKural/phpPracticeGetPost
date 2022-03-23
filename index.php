<?php
$num = $_POST['number'];

if(!is_numeric($num)){
    echo "Sayı girmeniz zorunludur.";
    echo " Lütfen bekleyiniz...";
    header("Refresh: 1; url=index.html");
}else{
    function divide3($num){
        if($num%3==0){
            echo "Girdiğiniz sayı 3 ile kalansız bölünebilmektedir.";
        }else{
            $remainder=$num%3;
            $result=$num-$remainder+3;
            echo "Girdiğiniz sayı 3 ile kalansız bölünememektedir. 3'e bölünebilen bir sonraki değer : ".$result;
        }
    }
    divide3($num);
    
}

// 'Location: index.html'