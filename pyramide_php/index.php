<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class ="wrapper">
        <?php
            $nbBrik = 0;
            $element = "<div></div>";
            $colonne = "row";
            $brik ="<div class=block></div>";
            
            function brik()
            {
                global $nbBrik, $element, $colonne, $brik;
                
                if ($nbBrik == 0)
                {
                    $element = "<div class=$colonne>$brik</div>";
                }elseif($nbBrik == 1 )
                {
                    $element = "<div class=$colonne>$brik $brik</div>";
                }elseif($nbBrik == 2 )
                {
                    $element = "<div class=$colonne>$brik $brik $brik</div>";
                }elseif($nbBrik == 3 )
                {
                    $element = "<div class=$colonne>$brik $brik $brik $brik</div>";
                }elseif($nbBrik == 4 )
                {
                    $element = "<div class=$colonne>$brik $brik $brik $brik $brik</div>";
                }elseif($nbBrik == 5 )
                {
                    $element = "<div class=$colonne>$brik $brik $brik $brik $brik $brik</div>";
                }
                elseif($nbBrik == 6 )
                {
                    $element = "<div class=$colonne>$brik $brik $brik $brik $brik $brik $brik</div>";
                }
            }

            while($nbBrik <= 6)
            {  
                brik($nbBrik);
                echo"$element";
                ++$nbBrik;
            }

        ?>
    </div>
    
</body>
</html>