<?
        require_once "db/db.php"
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        include "head/head.php";
    ?>
</head>
<body>
    <div class="wrapper">
        
        <?php 
            include "head/header.php";
        ?>
        <article class="article">
            <div class="conteiner">
            <?php
                    $info = get_info_all();
                    foreach ($info as $info):  
                ?>
                <div class="article__main">
                
                <div class="body__border"><div class="dd">
                        <div class="body__img">
                       <? echo "<img src='b/be/bek/bekt/bektu/bektur/images/".$info["image"]."'class='img_info'>";?></div>
                        <div class="body__title">
                        <?php 
                            echo $info["title"];
                        ?>
                        </div>
                        <?php endforeach; ?>
                </div>
            </div></div>
            
            
            <?php
                include "display/send.php";
            ?>
            <?php
                include "display/sos.php";
            ?>
            <?php
                include "display/order.php";
            ?>
        </article>
        <?php
            include "footer/footer.php";
        ?>
    </div>
</body>
</html>