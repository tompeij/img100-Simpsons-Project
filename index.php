<?php

// Read JSON, and convert to array
$characters_json = file_get_contents('characters.json');
$characters = json_decode($characters_json, true);
$selections = $_GET;

function persistant_checkbox($val) {
    if(isset($_GET[$val])) 
    echo "checked='checked'";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simpsons Archives</title>
    <link rel="stylesheet" href="Simpsons%20Archives_files/styles.css">
</head>

<body>

    <header id="masthead" class="site-header layout-container">
        <a href="https://simpsons.img100.chrisgeelhoed.com/">
            <img class="site-header__logo" src="Simpsons%20Archives_files/logo.svg" alt="Logo">
        </a>
    </header>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <div id="main" class="site-main">

                <div class="form__container layout-container">
                    <div class="form__row layout-row">
                        <div class="form__itemsContainer">

                            <div class="form__imageContainer">
                                <img src="Simpsons%20Archives_files/simpsons.jpg" alt="Simpsons" class="form__image">
                            </div>

                            <div class="form__card">

                                <h3 class="form__heading">
                                    Select characters to show
                                </h3>

                                <form method="get">

                                    <ul class="form__items">
                                        <li class="form__item">

                                            <label for="homer">
                                                Homer Simpson </label>

                                            <input id="homer" type="checkbox" name="homer" <?php persistant_checkbox('homer'); ?>>
                                        </li>
                                        <li class="form__item">

                                            <label for="marge">
                                                Marge Simpson </label>

                                            <input id="marge" type="checkbox" name="marge" <?php persistant_checkbox('marge'); ?>>
                                        </li>
                                        <li class="form__item">

                                            <label for="bart">
                                                Bart Simpson </label>

                                            <input id="bart" type="checkbox" name="bart" <?php persistant_checkbox('bart'); ?>>
                                        </li>
                                        <li class="form__item">

                                            <label for="lisa">
                                                Lisa Simpson </label>

                                            <input id="lisa" type="checkbox" name="lisa" <?php persistant_checkbox('lisa'); ?>>
                                        </li>
                                        <li class="form__item">

                                            <label for="maggie">
                                                Maggie Simpson </label>

                                            <input id="maggie" type="checkbox" name="maggie" <?php persistant_checkbox('maggie'); ?>>
                                        </li>
                                        <li class="form__item">

                                            <label for="moe">
                                                Moe Szyslak </label>

                                            <input id="moe" type="checkbox" name="moe" <?php persistant_checkbox('moe'); ?>>
                                        </li>
                                  
                                    </ul>

                                    <input class="form__button" type="submit" value="Show Characters">

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                        <ul class="characters__items">
                        <?php

                        // Show character profiles of selected character names.
                        foreach($characters as $key => $value) {

                            if ($selections[$key]){

                                $first_name = $value['first_name'];
                                $last_name = $value['last_name'];
                                $age = $value['age'];
                                $occupation = $value['occupation'];
                                $voiced_by = $value['voiced_by'];
                                $img_url = $value['image_url'];

                            ?>

                                <li class="characters__itemContainer">

                                    <div class="characters__item">

                                    <?php if($img_url){?> 

                                        <img src="<?=$img_url?>" alt="<?=$first_name?>" class="characters__image">    

                                    <div class="characters__info">

                                        <?php } if($first_name || $last_name){?> 

                                        <h3 class="characters__name"><?=$first_name . " " . $last_name?></h3>

                                        <?php } if($age){?> 

                                    <div class="characters__age characters__attribute">

                                        <b>Age:</b> <?=$age?>

                                    </div>

                                        <?php } if($occupation){?> 

                                    <div class="characters__occupation characters__attribute">

                                        <b>Occupation:</b> <?=$occupation?>

                                    </div>
                                    
                                        <?php } if($voiced_by){?>

                                    <div class="characters__voicedBy characters__attribute">

                                        <b>Voiced by:</b> <?=$voiced_by?>

                                        </div> 

                                            <?php } ?>  

                                        </div>

                                    </div>
                                </li>
                            
                            <?php }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script async="" src="Simpsons%20Archives_files/analytics.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga_logInst');
        ga_logInst('create', 'UA-60144933-24', 'auto');
        ga_logInst('set', 'pageview');
        ga_logInst('set', 'dimension1', '{0da5');
        ga_logInst('set', 'dimension2', '0010-0020');
        ga_logInst('send', {
            hitType: 'pageview',
            page: 'id={0da5 id=1541945339287',
            title: ' ins=13. hmn=bot'
        });
    </script>
</body>

</html>