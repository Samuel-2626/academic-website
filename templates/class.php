<?php

 $title = "Dixon Olutade Torimiro | Professor of Agricultural Extension and Rural Sociology";

 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
 {
     $url = "https://";
 }
 else
 {
     $url = "http://";
 }

 $url.=$_SERVER['HTTP_HOST'];

 $url.=$_SERVER['REQUEST_URI'];

 if ($url == "https://professortorimiro.info/index.php" || $url == "http://localhost/professortorimiro.info/index.php")
 {
     $title = "HOME | Professor Torimiro";
 }
 elseif ($url == "https://professortorimiro.info/aboutme.php" || $url == "http://localhost/professortorimiro.info/aboutme.php")
 {
     $title = "ABOUT ME | Professor Torimiro";
 }
 elseif ($url == "https://professortorimrio.info/career.php" || $url == "http://localhost/professortorimiro.info/career.php")
 {
     $title = "CAREER | Professor Torimiro";
 }
 elseif ($url == "https://professortorimrio.info/publications.php" || $url == "http://localhost/professortorimiro.info/publications.php")
 {
     $title = "PUBLICATIONS | Professor Torimiro";
 }
 elseif ($url == "https://professortorimrio.info/resources.php" || $url == "http://localhost/professortorimiro.info/resources.php")
 {
     $title = "RESOURCES | Professor Torimiro";
 }
 elseif ($url == "https://professortorimrio.info/awards.php" || $url == "http://localhost/professortorimiro.info/awards.php")
 {
     $title = "AWARDS | Professor Torimiro";
 }
 elseif ($url == "https://professortorimrio.info/grants.php" || $url == "http://localhost/professortorimiro.info/grants.php")
 {
     $title = "GRANTS | Professor Torimiro";
 }
 elseif ($url == "https://professortorimrio.info/conferences.php" || $url == "http://localhost/professortorimiro.info/conferences.php")
 {
     $title = "CONFERENCES | Professor Torimiro";
 }
 elseif ($url == "https://professortorimrio.info/contact.php" || $url == "http://localhost/professortorimiro.info/contact.php")
 {
     $title = "CONTACT ME | Professor Torimiro";
 }
 else {
    $title = "Dixon Olutade Torimiro | Professor of Agricultural Extension and Rural Sociology";
 }




?>