<?php
function create_nav($pages_arr){
            $ending = explode("/", $_SERVER['PHP_SELF']);
            $ending = $ending[count($ending)-1];
            foreach ($pages_arr as $p){
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
        }
		
		?>