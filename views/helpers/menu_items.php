<?php
$string = file_get_contents("./views/layout/menu.json");
$json_a = json_decode($string, true);

foreach ($json_a as $v) {?>
    <li>
        <a href=<?php echo $v["link"] ?>><?php echo $v["name"] ?></a>

        <?if ($v["subitems"]) {?>
            <ul class="fh5co-sub-menu">

                <?foreach ($v["subitems"] as $vs) {?>
                    <li>
                        <a href=<?php echo $vs["link"] ?>><?php echo $vs["name"] ?></a>
                    </li>
                <?}?>
            </ul>
        <?}?>

    </li>
<?}?>