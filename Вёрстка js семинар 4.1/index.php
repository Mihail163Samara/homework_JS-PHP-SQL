<?php
$name = 'Владимир';
$profession = 'дизайнер сайта';
$city = 'Самара';
$email = 'user@mail.ru';
$phone = '+79321845471';
$skills = [
    [
        'name' => 'Фотошоп',
        'percent' => 50,
    ],
    [
        'name' => 'Иллюстратор',
        'percent' => 70,
    ],
    [
        'name' => 'Медиа',
        'percent' => 35,
    ],
    [
        'name' => 'Рисование',
        'percent' => 57,
    ],
];

$workexperience = [
    [
      "name" => "Разработчик-Android приложений",
      "dateStart" => "Январь 2024",
      "dateEnd" => "Текущее время",
      "description" => "Android-разработчик создает приложения для устройств на операционной 
      системе Android. Он пишет код, работает над интерфейсом и дизайном, тестирует приложение и 
      исправляет баги, а также адаптирует его под разные модели устройств 
      (которых у Android великое множество)."],
    [
      "name" => "Тестировщик приложений",
      "dateStart" => "Ноябрь 2023",
      "dateEnd" => "Январь 2024",
      "description" => "Тестировщик – это специалист, который занимается проверкой программы и выявляет 
      ошибки в ее работе. Для этого он придумывает и проводит тесты, ищет уязвимые места, 
      находит ошибки и сообщает об этом разработчикам, чтобы они успели устранить 
      все недостатки до выхода продукта на рынок."],
   
    [
      "name" => "Бизнес-аналитик",
      "dateStart" => "Октябрь 2015",
      "dateEnd" => "Текущее время",
      "description" => "Бизнес-аналитик изучает бизнес-процессы организации, выявляет возможные проблемы и находит 
      эффективные решения. Он использует свои знания и опыт, чтобы помочь компаниям оптимизировать свои бизнес-процессы, 
      что в свою очередь увеличивает эффективность работы, снижает издержки и повышает конкурентоспособность компании."],
    
    ];
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://avatars.mds.yandex.net/i?id=b67f01b1014f526e73d76b756bac94120ed074e0-8177770-images-thumbs&n=13"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2 style = "color: #9AE7C2";><?=$name?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profession?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$city?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$email?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$phone?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            
            <?php for($i = 0; $i < count($skills); $i++): ?>
                <p><?=$skills[$i]['name']?></p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                  <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?=$skills[$i]['percent']?>%"><?=$skills[$i]['percent']?>%</div>
                </div>
            <?php endfor ?>
           
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
              <?php for ($i = 0; $i < count($workexperience); $i++): ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b> <?php echo $workexperience[$i]["name"]; ?> </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $workexperience[$i]["dateStart"]; ?> - 
            <?php if ($i == 0||$i==2): ?>
            <span class="w3-tag w3-teal w3-round"><?php echo $workexperience[$i]["dateEnd"]; ?></span>
            <?php else: ?>
            <?php echo $workexperience[$i]["dateEnd"]; ?>
            <?php endif;?>
            </h6>
            <p><?php echo $workexperience[$i]["description"]; ?></p>
            <hr>
          </div>
          <?php endfor; ?>
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>


