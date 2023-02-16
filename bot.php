<?php 
$textList = array("5246 3900 8178 4389", "4361 5100 6072 4336", "5397 0200 6021 3517", "5246 3900 7005 8977", "4361 5100 6114 6059");
showRandomText($textList);

function showRandomText($textList) {
    // Выбираем случайный элемент из списка
    $randomIndex = array_rand($textList);
    $randomText = $textList[$randomIndex];
    
    // Выводим случайный текст на экран
  
  
// Задаем параметры бота и сообщения


// Создаем объект cURL
$ch = curl_init();

// Устанавливаем URL и другие параметры запроса
curl_setopt($ch, CURLOPT_URL, 'https://apirone.com/api/v2/wallets/ltc-9a066a17bf70ec03e085cb335192afa3/balance');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Отправляем запрос и получаем ответ
$response = curl_exec($ch);

curl_close($ch);
$prostabalans = json_decode($response, true);
$moibalans = $prostabalans['total'];
$balance_in_ltc = $moibalans / 100000000;


$nasumu = rand(20, 30);
$zaiavka = rand(100000, 999999);
$sendtoltc = file_get_contents("https://apirone.com/api/v1/toltc?currency=MDL&value=$nasumu");
$botToken = '6092150677:AAGHwPD_tOiBujRgLGXQu3-Gfh-BAQK6eVw';
$chatId = '745916894';
$messageText = "🚶🏻Клиент : @i_Skill | ID: <b>745916894</b> 💡Заявка <b>$zaiavka</b>, на сумму <b>$nasumu MDL</b> , на карту <b>$randomText</b>, отдаете <b>$sendtoltc</b>LTC\nВаш баланс сейчас : $balance_in_ltc\nПополнить тут : <code>LVVAcQzEMeobo3vvaedCqcfGw6v1M9jPBs</code>";
        

$buttonUrl = 'http://impflori.ru/api/send.php?get='.$moibalans; // URL для GET-запроса

// Создаем кнопку, которая отправляет GET-запрос
$button = array(
    'inline_keyboard' => array(
        array(
            array(
                'text' => '✅ Отпустить монеты',
                'callback_data' => $buttonUrl
            )
        )
    )
);

// Кодируем кнопку в JSON
$encodedButton = json_encode($button);

// Отправляем сообщение с кнопкой в Телеграм
$sendMessageUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";
$sendMessageData = array(
    'chat_id' => $chatId,
    'text' => $messageText,
    'parse_mode' => 'HTML',
    'reply_markup' => $encodedButton
);
$ch = curl_init($sendMessageUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $sendMessageData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
}
