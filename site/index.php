<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Правила спорта</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href= "img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
</head>
<body>
  <div id="page-wrap">
   <header>
      <a href="index.php" title="На главную" id="logo">Правила спорта</a><span id="contact"><a href="about.html">О нас</a></span><input type="text"
      class="field" placeholder="Найти"/><!--<span class="right"><span id="contact"><a href="reg.html">Регистрация</a></span><span id="contact"><a href="auth.html">Вход</a></span></span>-->
   </header>
   <div class="clear"><br /></div>
   <?php include("function.php") ?>
   <center>
       <div id="menu">Разделы<hr /></div>
       <div id="menuHrefs">
           <a href="index.php">Летние виды спорта</a>
           <a href="winter.php">Зимние виды спорта</a>
       </div>
   </center>
   <div id="wrapper">
       <div id="articles">
            <?php
			    
    			    $li = getSport();
    				for ($i = 0; $i < count($li); $i++){
    					echo '
    						<article>
                                         <img src="img/'.$li[$i]["ref"].'.jpg" alt="" title=""/>
                                           <h2>'.$li[$i]["name"].'</h2>
                                           <p>'.$li[$i]["title"].'</p>
                                           <a href="'.$li[$i]["ref"].'.php" title="">Читать Правила</a>
    						</article>
    						';
    				}
    			
    		?>
       </div>
      
   </div>
   </div>   
   <footer>
    <span class="left">  Все права защищены &copy; 2018</span>
   <span class="right">Мы ВКонтакте <a href="http://vk.com"><img src="img/vk.jpg" alt="Мы вконтакте"/></a></span>
   </footer>
</body>
</html>