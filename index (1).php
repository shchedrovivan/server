 <!--этот шаблон лицензирован под GNU GENERAL PUBLIC LICENSE это означает что вы можете брать данный шаблон бесплатно без согласия и использовать -->
<!--чтобы использовать этот шаблон нужно самое главное писать pmccom.ru  !!! -->
<!--не забудьте прочитать это https://www.gnu.org/licenses/gpl-3.0.ru.html !!! -->
<html>
<!--тут meta теги -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- тут стили -->
<style>
.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #f1f1f1;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}
</style>
<?php
# запись в лог
# ip адрес 
$ip=$_SERVER['HTTPS_X_FORWARDED_FOR'];
#########################################
# дата
$date=date('Y-m-d');
#########################################
$file_data = "\n [$date] [Server thread/INFO] вход на сайт";
$file_data .= file_get_contents("log/$date.txt");
file_put_contents("log/$date.txt", $file_data);
#########################################
?>
<!--дизайн сайта -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">pmccom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">домой</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.php">магазин</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="ourscript.php">наши скрипты</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">халява (скоро)</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="forum.php">форум</a>
      </li>    
    </ul>
  </div>  
</nav>
 <div class="container">
  <div class="row">
    <div class="col-md-8">
      <table border="0" style="border-collapse: collapse; width: 96.9984%; height: 282px;" height="277">
<tbody>
<tr style="height: 262px;">
<td style="width: 100%; height: 262px;">
<h2>привет ,</h2>
<br />
<p>теперь этот хорошый сайт для программирование</p>
<p>тут будет блог , форум , магазин</p>
<p>блог : читайте интесные статьи + и бесплатные скрипты</p>
<p>форум : идет разработка , тут вы сможете общатся о программирование</p>
<p>магазин : мы сможете купить / продать скрипт все скрипты проверяются админа магазина</p>
</td>
</tr>
</tbody>
</table>
        <div class="col-md-4"><table border="0" style="height: 40px; width: 40px; border-collapse: collapse;">
<tbody>
<tr style="height: 17px;">
<td style="width: 50%; height: 17px; text-align: center;"><img src="https://firebasestorage.googleapis.com/v0/b/fir-12421.appspot.com/o/data%2Fvk.png?alt=media&token=8a83eed5-0c0c-44d1-8802-0fea6f09bde0" width="40" height="40" alt="" /></td>
<td style="width: 50%; height: 17px; text-align: center;"><img src="https://firebasestorage.googleapis.com/v0/b/fir-12421.appspot.com/o/data%2Ffacebook.png?alt=media&token=09dd98c8-751c-4e8f-bd4c-11679a6ef82e" alt="facebook" width="40" height="40" /></td>
</tr>
</tbody>
</table></div>
      <div class="row">
        <div class="col-md-6"><table border="0" style="width: 99.1554%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 131px;" height="298">
<tbody>
<tr style="height: 53px;">
<td style="width: 100%; height: 53px; text-align: center;">
<h1>статьи</h1>
</td>
</tr>
<tr style="height: 78px;">
<td style="width: 100%; text-align: left; height: 78px;"><!--тут статьи--> <?php
include("CuteNews/show_news.php");
?></td>
</tr>
</tbody>
</table></div>
        <div class="col-md-6"><table border="0" style="width: 99.1554%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 131px;" height="298">
<tbody>
<tr style="height: 53px;">
<td style="width: 100%; height: 53px; text-align: center;">
<h1>магазин</h1><p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAABo0lEQVRoge2ZwUrDQBCG/4mBiogPIO3FJ7BSUG+ehHpR8AkEyc0HKvTmWa/efABJziJSEJNrBRF6kCbjIbHsZje0KTTZhf1Os7Ob5P8zu0mWAA6Hw9EmpEs+HxxfEPEIQLdhPVUkhCw4m4RP5Q5PN9ow8QDQZXgjXYfWAMwS/09Pl6wyYA3KGni5vOkx+LMNMcvgLb938jhOxJxaAcpOG1NUE5rPFW2qgYyMNQDi5QaYYK4BqDdXMvA+vOsAOGxMT336hcYFkoGv7e8jANIAw+hM/Z++mJCnUOoZPH1yyJOnkWxAs0iMo6SxVIHsvFExa8BpOhTbvtiYvb7tNStnLXbFRvkxmsB8YrEhGSBkAcw2EQMciAntfiAMQ25GTz0Gg4Gi1/qvUesN+MuH5Nw+7IABgBgM5DEYXBSVwUV/Ht9f/VacQz4GAJjUWHe8Dusr4Ay0jTPQNs5A21hvYOUX2fh6tkkda2N9BZyBttGugSiKNnKx6cc+GASAAKIiBoAiJlrEUTRZ6ZzWV6DKgInbyliXrPhDQ6btjWNmeS/scDgcZvAHj81pm+ZP8RgAAAAASUVORK5CYII=" alt="" /></p>
</td>
</tr>
<tr style="height: 78px;">
<td style="width: 100%; text-align: left; height: 78px;"><!--тут магазин и вывод товаров --><?php
  $news = file_get_contents("shop/db/items.txt");
    $news = explode("\n", $news);
  for ($i = 0; $i < count($news); $i++) {
    $new = explode("||", $news[$i]);

    ?>
<h1><?=$new[0]?></h1>
<h4><?=$new[2]?></h4>
<h4><?=$new[1]?></h4>
<a href="<?=$new[3]?>"><?=$new[4]?></a>
  <?php } ?></td>
</tr>
</tbody>
</table></div>
      </div>
    </div>
    <div class="col-md-4"><table border="0" style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 233px;">
<tbody>
<tr style="height: 73px;">
<td style="width: 100%; text-align: center; height: 73px;">
<h1>pmccom</h1>
</td>
</tr>
<tr style="height: 160px;">
<td style="width: 100%; text-align: center; height: 160px;"><img src="http://pmccom.ru/files/logo.png" alt="" width="193" height="193" /></td>
</tr>
</tbody>
</table><!-- тут счетник --><table border="0" style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td style="width: 100%; text-align: center;"><h5><?php
//Установка счетчика - ставится в начале страницы
//Для настроек - указать путь, где будет создаваться файл счетчика
$files = "count.txt";
if ( !file_exists($files) ) {file_put_contents($files, date('d.m.Y').":0,0%%%0,0"); } //создаем и записываем данные по умолчанию, если файла нет
else {
$rez = file_get_contents($files);
$rez = explode("%%%", $rez);
//В массиве $rez[0]: 19.05.2014: 0, 0 - т.е. дата, кол просм, кол посет.
//В массиве $rez[1]: 0, 0 - кол просм, кол посет. за все время
$rezall = explode(",", $rez[1]);
//echo $rezall[0]; //Просмотры за все врем
//echo $rezall[1]; //Посетители за все время
$rezdata = preg_replace('/:.*/', '', $rez[0]); //В $rezdata только дата типа 19.05.2014
$rezpr = preg_replace('/.*:/', '', $rez[0]); //В $rezpr только данные типа 0,0
$rezpr = explode(",", $rezpr); //В $rezpr[0] - просмотры, $rezpr[1] - посетители
if (strtotime(date('d.m.Y')) == strtotime($rezdata)) {
$rezpr[0] = $rezpr[0] + 1; //просмотры +1
if (!isset($_COOKIE['visitors'])) {
setcookie("visitors", "yes", time()+3600*24); //уникальный посетитель на 24 часа
$rezpr[1] = $rezpr[1] + 1; } //посетитель +1
file_put_contents($files, date('d.m.Y').":".$rezpr[0].",".$rezpr[1]."%%%".$rezall[0].",".$rezall[1].""); //записываем результат в файл
}
else { //Дата устаревшая Обнуляем счетчик за сегодня, а старые данные добавляем к за все время
$rezall[0] = $rezpr[0] + $rezall[0]; //сохраняем все просмотры
$rezall[1] = $rezpr[1] + $rezall[1]; //сохраняем всех посетителей
if (!isset($_COOKIE['visitors'])) {
setcookie("visitors", "yes", time()+3600*24); //уникальный посетитель на 24 часа
$ynikuser = 1; } //посетитель +1
else $ynikuser = 0;
file_put_contents($files, date('d.m.Y').":1,".$ynikuser."%%%".$rezall[0].",".$rezall[1].""); //записываем результат в файл
}
}

//Вывод данных счетчика
$rezview = file_get_contents($files);
$rezview = explode("%%%", $rezview);
$rezview = preg_replace('/.*:/', '', $rezview[0]);
$rezview = explode(",", $rezview);
echo "Просмотров: ".$rezview[0];
echo " Посетителей: ".$rezview[1];
?></h5></td>
</tr>
</tbody>
</table><table border="0" style="width: 70.2247%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 161px;" height="102">
<tbody>
<tr style="height: 61px;">
<td style="width: 100%; text-align: center; height: 61px;">
<h2>меню</h2>
</td>
</tr>
<tr style="height: 100px;">
<td style="width: 100%; text-align: center; height: 100px;">
<ul>
<li><strong><a href="shop.php" title="магазин ссылка">магазин</a></strong></li>
<li><strong><a href="https://t.me/pmccom_ru" title="blog ">telegram</a></strong></li>
<li><strong><a href="https://vk.com/pmccom">вк</a></strong></li>
<li><strong><a href="https://www.facebook.com/groups/pmccom.ru" title="facebook группа ссылка">facebook</a></strong></li>
<li><strong><a href="blog.php" title="blog ">статьи (blog)</a></strong></li>
</ul>
</td>
</tr>
</tbody>
</table><table border="0" style="height: 207px; width: 69.4962%; border-collapse: collapse; margin-left: auto; margin-right: auto;">
<tbody>
<tr style="height: 18px;">
<td style="width: 100%; text-align: center; height: 18px;">
<h2>новости сайта</h2>
</td>
</tr>
<tr style="height: 18px;">
<td style="width: 100%; height: 18px; text-align: left;"><!--тут статьи--> <?php
include("news1.php");
?></td>
</tr>
</tbody>
</table><table style="height: 84px; margin-left: auto; margin-right: auto;" border="0" width="260">
<tbody>
<tr style="height: 87px;">
<td style="width: 250px; text-align: center; height: 87px;">
<p style="text-align: center;"><a title="Правила размещение рекламы" href="pmccom.ru/files/adsandpravila.html" target="_blank" rel="noopener"><img src="http://pmccom.ru/files/ad.gif" alt="Gif" width="250" height="" /></a></p>
</td>
</tr>
</tbody>
</table>
</div>
<footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020 pmccom.ru <a href="gdpr.html">GDPR</a> 
      </footer>
      </div>