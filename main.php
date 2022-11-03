<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice from Polina </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/1.jpg" alt="you" width="500", height="700">'; ?>
                </div>

                <div class="fullname">
                    <p> Позвольте представиться, меня зовут
                    <?php echo $name, ' ', $surname . '<br>'; ?>
                        Я из города
                        <?php echo $city; ?>
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    годиков </p>
                    <p> Мы еле научились создавать переменные </p>
                    <p> и с трудом изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a,' '; ?> <br>
                    <?php   echo $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $month = 4;
                        $day = 30;
                        $sumDays = $day * $month;
                        echo $sumDays;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    «Донни был хорошим котелок и хороший человек. Он был… он был одним из нас.
                    Он был человеком, который любил природу, боулинг и серфер он исследовал пляжи южной
                    Калифорнии от Ла-Хойи до Лео Карилло и до Писмо. Он умер ... он умер,
                    как и многие молодые люди его поколения до своего времени, и по Твоей мудрости,
                    Господь, Ты взял его. Так же, как вы взяли так много ярких цветущих молодых людей в
                    Кхесане, Лан Доке и на холме 364. Эти молодые люди отдали свои жизни, и Донни тоже.
                    Донни, который любил боулинг. Итак, Теодор Дональд Каработсос ...
                    в соответствии с тем, что, по нашему мнению, могло быть вашим предсмертным желанием.
                    Мы отдаем ваши последние смертные останки на лоно Тихого океана, который вы так любили.
                    Спокойной ночи, милый принц.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
