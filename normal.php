<?php require_once 'init.php'; ?>
<html>

<head>
<meta charset="UTF-8"/>
<meta name="theme-color" content="#CAE6D4"/>
<meta  name= "apple-mobile-web-app-capable"  content= "yes" > 
<meta  name= "apple-mobile-web-app-status-bar-style"  content= "black-translucent" >
<title>Diploma</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.css">

<style>

</style>
<script type="text/javascript" src="js/jquery-2.2.3.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</head>



<body id="size">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php include "components/navbar.php"; ?>
<br>
<br>
<br><br>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#1">Шум</a></li>
        <li><a data-toggle="tab" href="#2">Мікроклімат</a></li>
        <li><a data-toggle="tab" href="#3">Освітлення</a></li>
    </ul>
    <div class="text">
        <div class="tab-content">
            <div id="1" class="tab-pane fade in active">
                <h3>Призначення та галузь застосування</h3>
                <p>Санітарні норми поширюються на шум, інфра- та ультразвук, що передаються через повітря (газове середовище), рідке чи тверде середовище і впливають на людину в процесі трудової діяльності.</p>
        <br>
        <h3>Санітарні норми встановлюють:</h3>
         <p>- класифікацію виробничих акустичних коливань;</p>
         <p>- методи гігієнічної оцінки виробничого шуму, ультразвуку та інфразвуку
        - параметри, які нормуються, та їх допустимі величини;
        - вимоги до вимірювань на робочих місцях.</p>
        <br>
        <p>Санітарні норми є обов'язковими для всіх міністерств, відомств, підприємств, установ, незалежно від відомчої приналежності та форм власності, громадян, які проектують, виготовляють та експлуатують обладнання, механізми і інструменти, які є джерелами шуму, ультразвуку та інфразвуку; які розробляють та впроваджують заходи щодо зниження шкідливого впливу акустичних коливань на працюючих; які виконують державний санітарний нагляд за умовами праці.</p>
        <br>
        <p>Вимоги цих норм повинні бути враховані у нормативно-технічних документах: стандартах, будівельних нормах, технічних умовах, інструкціях, методичних вказівках та ін., які регламентують конструктивні та експлуатаційні вимоги до машин, устаткування, обладнання та інструменту, технологічних процесів і регламентів, зарубіжних виробів, що є джерелами шуму, ультра- та інфразвуку у виробничих умовах.</p>
        
        <p>Галузеві (відомчі) документи повинні бути приведені у відповідність до положень даних норм. Відповідальність за виконання даних норм покладається на керівників підприємств, установ, організацій незалежно від форм власності.</p>
        <p>З введенням в дію цих санітарних правил втрачають силу: Санитарные нормы шума на рабочих мостах N 3223-85, Санитарные нормы и правила при работе с оборудованием, создающим ультразвук, передаваемый контактным путем на руки работающих N 2282-80, Санитарные нормы и правила при работе на промышленных ультразвуковых установках N 1733-77, Гигиенические нормы ультразвука на рабочих местах N 2274-80, Санитарные нормы по ограничению шума на подвижном составе железнодорожного транспорта N 877-71, Санитарные нормы и правила по ограничению вибрации и шума на рабочих</p>


    <h3>Класифікація виробничих акустичних коливань</h3>
    
          <h3>Класифікація шумів:</h3>
          <br>
        <h4>За характером спектра шуми слід поділяти на:</h4>
      <p>- широкосмугові, з безперервним спектром шириною більш ніж одна октава;<br>
      - вузькосмужні або тональні, в спектрі яких є виражені дискретні тони. Тональний характер шуму встановлюється вимірюванням випромінювання у третинооктавних смугах частот по перевищенню рівня шуму в одній смузі над сусідніми не менш ніж на 10 дБ.</p>
      <br>
      <h4>За часовими характеристиками шуми слід поділяти на:</h4>
      <p>- постійні, рівень шуму яких за повний робочий день при роботі технологічного обладнання змінюється не більш ніж на 5 дБА при вимірюваннях на часовій характеристиці "повільно" шумоміра по шкалі "А";<br>
      - непостійні, рівень шуму яких за повний робочий день при роботі технологічного обладнання змінюється більш ніж на 5 дБА при вимірюваннях за часовою характеристикою "повільно" шумоміра по шкалі "А".</p>
      <br>
      <h4>Непостійні шуми поділяються на:</h4>
      <p>- мінливі, рівень яких безперервно змінюється у часі;
      - переривчасті, рівень шуму яких змінюється ступінчасто на 5 дБА і більше при вимірюваннях на часовій характеристиці "повільно" шумоміра по шкалі "А", при цьому довжина інтервалів, під час яких рівень залишається сталим, становить 1 с і більше;<br>
      - імпульсні, які складаються з одного або декількох звукових сигналів, кожен з яких довжиною менше 1 с, при цьому, рівні шуму у дБ(А1) і дБ(А), виміряні на часових характеристиках "імпульс" та "повільно" шумоміра, відрізняються не менш ніж на 7 дБ.</p>
      <br>
      <h3>Класифікація ультразвуку:</h3>
      <br>
      <h4>За способом передачі від джерела до людини ультразвук поділяють на:</h4>
      <p>- повітряний, що передається через повітряне середовище;
      - контактний, що передається на руки працюючої людини через тверде чи рідке середовище.</p>
      <h4>За спектром ультразвук поділяють на:</h4>
      <p>- низькочастотний, коливання якого передаються людині повітряним та контактним шляхом (від 1,2 х 104 до 1,0 х 105 Гц);<br>
      - високочастотний, коливання якого передаються людині тільки контактним шляхом (від 1,0 х 105 до 1,0 х 109 Гц).</p>
      <br>
      <h3>Класифікація інфразвуку:</h3>
      <br>
      <h4>За часовими характеристиками інфразвук поділяють на:</h4>
      <p>- постійний, рівень звукового тиску якого по шкалі "Лінійна" на характеристиці "повільно" змінюється не більш ніж на 10 дБ за 1 хв. спостереження;<br>
      - непостійний, рівень звукового тиску якого по шкалі "Лінійна" на характеристиці "повільно" змінюється більш ніж на 10 дБ за 1 хв. спостереження.</p>
            </div>
            
            <div id="2" class="tab-pane fade">
                <h3>Вимоги до приміщення</h3>
                <p>Площу приміщень, в яких розташовують персональні комп’ютери, визначають згідно з чинними нормативними документами з розрахунку на одне робоче місце, обладнане ПК:</p>
                <p>- площа - не менше 6,0 кв.м,</p>
                <p>- обсяг - не менше 20,0 куб.м, з урахуванням максимальної кількості осіб, які одночасно працюють у зміні.</p>
                <p>- робочі місця повинні бути розташовані на відстані не менше ніж 1 м. від стіни з вікном,</p>
                <p>- відстань між бічними поверхнями комп‘ютерів має бути не меншою за 1,2 м;</p>
                <p>- відстань між тильною поверхнею одного комп‘ютера та екраном іншого не повинна бути меншою 2,5 м;</p>
                <p>- прохід між рядами робочих місць має бути не меншим 1 м.</p>
                <p>Заземлені конструкції, що знаходяться в приміщеннях (батареї опалення, водопровідні труби, кабелі із заземленим відкритим екраном тощо), мають бути надійно захищені діелектричними щитками або сітками від випадкового дотику.
                </p>
                <p>У приміщеннях з персональними комп’ютерами слід щоденно проводити вологе прибирання.</p>
                <p>Також в цих приміщеннях повинні бути медичні аптечки першої допомоги та система автоматичної пожежної сигналізації з димовими пожежними сповіщувачами та переносними вуглекислотними вогнегасниками з розрахунку 2 шт. на кожні 20 кв.м площі приміщення.</p> 
                <p>Підходи до засобів пожежогасіння повинні бути вільними.</p>
            </div>
        </div>
    </div>
</div>





     </div>

</body>
</html>
