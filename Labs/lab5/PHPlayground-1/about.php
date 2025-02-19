<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Logan Seabolt">
    <title>PHPlayground</title>
    <meta name="keywords" content="Contact, Contact me, Email, CSU, Colorado, State, University, Logan, Kane, Seabolt">
    <meta name="description" content="Ways to contact Logan Seabolt">
        <?php
        $flag = true;
        if ($flag)
            $file = fopen("SampleHtml.txt", "r");
        else{
            $file = fopen("../Lab3/recipe_page.html", "r");
            echo ("<style>");
            include '../Lab3/style.css';
            echo ("</style>");
        }
    ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
    <h1>Welcome to the PHPlayground</h1>
</header>
<div class="navbar">
    <?php
        $pages = array("index.php", "about.php", "contacts.php"," works.php");
        $ending = explode("/", $_SERVER['PHP_SELF']);
        $ending = $ending[count($ending)-1];

        foreach ($pages as $p){
            echo ('<a href="');
            if ($p == $ending){
                echo ("#");
            }
            else{
                echo $p;
            }
            if($p == "index.php"){
                $p = "Home.php";
            }
            echo '">'.substr(strtoupper($p),0,strlen($p)-4)."</a>\n";
        }
    ?>
</div>
<main>
    <h2>Hey Look here's some header text</h2>
    <div>
        Lookie here a DIV!
        <?php //EXAMPLE 1
            //Lets read some code why don't we?


            if(!$flag){
                for ($i = 0; $i < 9; $i++)
                    fgets($file);
            }

            while(!feof($file)){
                echo (fgets($file));
            }

        ?>
    </div>
</main>
</body>
</html>