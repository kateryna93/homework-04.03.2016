<?php

$s = 2;

switch($s) {
    case 1:
        print ("Валера");
        break;
    case 2:
        print ("Павлик");
        break;
    case 3:
        print ("youtube");
    default:
        print ("По умолчанию");
}

/* Выведется "Павлик", PHP доходит до оператора case со значением 1 и не исполняет его, так как значение переменной s
2 и будет исполняться case со значением 2. Оператор break останавливает дальнейшее исполнение PHP. Но если бы
переменной было присвоено значенрие 3, вывелось бы "youtubeПо умолчанию" */