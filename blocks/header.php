<!DOCTYPE html>
<html lang="<?=$lng?>">
<head>
    <title><?=$title?></title>

    <meta charset="UTF-8">
    <meta name="description" content="<?=$description?>">
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="author" content="<?=$author?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
</head>

<body>

<?php
    if ($lng == "ru"){
        $department = "Динамика космических систем";
        $department_slogan = "Динамика и управление орбитальным и угловым движением";
        $about_text = "О нас";
        $pojects_text = "Проекты и исследования";
        $study_text = "Учебные материалы";
        $contacts_text = "Контакты";
    } else {
        $department = "Space system dynamics";
        $department_slogan = "Orbital and attitude dynamics and control";
        $about_text = "About us";
        $pojects_text = "Projects & research";
        $study_text = "Education";
        $contacts_text = "Contacts";
    }
?>
<!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
         <div class="container">

             <div class="navbar-header">
                 <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="icon icon-bar"></span>
                     <span class="icon icon-bar"></span>
                     <span class="icon icon-bar"></span>
                 </button>

                 <!-- LOGO TEXT HERE -->
                 <a href="" class="navbar-brand" style="padding-left: 2vw"><?=$department?></a>
             </div>

             <!-- MENU LINKS -->
             <div class="collapse navbar-collapse">
                 <ul class="nav navbar-nav navbar-nav-first">
                     <!--<li><a href="#top" class="smoothScroll">Главная</a></li>-->
                     <li><a href="#about" class="smoothScroll"><?=$about_text?></a></li>
                     <li><a href="#lectures" class="smoothScroll"><?=$pojects_text?></a></li>
                     <li><a href="#register" class="smoothScroll"><?=$study_text?></a></li>
                     <li><a href="#problem" class="smoothScroll">Конкурсная задача</a></li>
                     <li><a href="#contact" class="smoothScroll"><?=$contacts_text?></a></li>
                 </ul>
             </div>

         </div>
     </section>

