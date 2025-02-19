<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Logan Seabolt">
    <title>PHPlayground</title>
    <meta name="keywords" content="Contact, Contact me, Email, CSU, Colorado, State, University, Logan, Kane, Seabolt">
    <meta name="description" content="Ways to contact Logan Seabolt">
        <?php
        $flag = rand(0,1);
        //$flag = true;
        if ($flag){
            $file = fopen("SampleHtml.txt", "r");
            $style = fopen("core_css.txt","r");
        }
        else{
            //$file = fopen("../Lab3/recipe_page.html", "r");
            //$style = fopen('../Lab3/style.css',"r");
            $file = fopen("SampleHtml.txt", "r");
            $style = fopen("core_css.txt","r");
			//Replace this section with your own other pages
        }
        $css = fopen("style.css", "w");
        while (!feof($style)){
            fwrite($css,fgets($style));
        }
        fclose($css);
        fclose($style);
    ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
    <h1>Welcome to the PHPlayground</h1>
</header>
<div class="navbar">
    <?php
        include 'navcode.php';
        $pages = array("index.php", "about.php", "contacts.php","works.php");
        create_nav($pages);

    ?>
</div>
<main>
    <h2>Hey Look here's some header text</h2>
    <div>
        Lookie here a DIV!
        <?php //EXAMPLE 1
            //Lets read some code why don't we?

			//This is a clugey way of skiping the header file. You will need to adapt it to fit your code.
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