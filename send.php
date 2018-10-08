<?
if((isset($_POST['to'])&&$_POST['to']!="")&&
(isset($_POST['subj'])&&$_POST['subj']!="")&&
(isset($_POST['key'])&&$_POST['key']!="")&&
(isset($_POST['msg'])&&$_POST['msg']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
    include 'adds.php';
        $to = $_POST['to']; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = $_POST['subj']; //Загаловок сообщения
        $message = $_POST['msg']; //Текст нащего сообщения можно использовать HTML теги        
        $headers = "MIME-Version: 1.0";
        $headers .= "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "Content-Transfer-Encoding: 8bit\r\n"; 
        //Кодировка письма
        $headers .= "Date: ".date("D, d M Y H:i:s") . " UT\r\n";
        $headers .= "From: \"=?litrebe@yandex.ru?B?".base64_encode("litrebe@yandex.ru")."=?=\" <litrebe@yandex.ru>\r\n";
        $headers .= "X-Priority: 3\r\n\r\n";
        $headers .= "User-Agent: Roundcube Webmail/1.3.3";
        MailSmtp($to, $subject, $message, $headers); //Отправка письма с помощью функции mail        
}
?>