<ul class="pagination pagination-sm">
    <?php
    /* include_once '../DB/db_con.php';

      $table_page = "cr_product";
      $fields_page = "*";
      $where_page = "id_product>='" . 1 . "'";
      $order_page = "id_product";
      $limit_page = "0,1000000";
      $products_page = $dbclass->select($table_page, $fields_page, $where_page, $order_page, $limit_page); */
    $tedad = $_POST["tedad"];
    $products_page = $_POST["row"];
    //echo $products_page;
    //$pager = intval((count($products_page) / 12)) + 1;
    if ($_POST["tedad"] == 0) {
        $tedad = 12;
    }
    if ($products_page % $tedad == 0) {
        $pager = intval(($products_page / $tedad));
    } else {
        $pager = intval(($products_page / $tedad)) + 1;
    }

    if (isset($_POST["page"])) {
        $pager_select = $_POST["page"]; //9;
    } else {
        $pager_select = 1;
    }
    //if(1<$pager_select){
    ?>

    <li class="preview" name="<?php echo ($pager_select - 1); ?>" onclick="<?php
    if (1 < $pager_select) {
        echo "pager_action('" . ($pager_select - 1) . "')";
    } 
    else {
        echo '';
    }
    ?>" disabled="disabled"><a style="opacity: <?php
        if (1 < $pager_select) {
            echo "1";
        } 
        else {
            echo '0.4';
        }
        ?>">قبلی</a></li>
        <?php
        //}
        if ($pager > 5) {
            if ($pager_select != 1 && $pager_select != 2) {
                //echo "1 - ";
                echo '<li id="1" name="1" onclick="pager_action(\'1\')"><a>1</a></li>';
            }
            if ($pager_select > 3) {
                //echo '... - ';
                echo '<li><a>...</a></li>';
            }
            if (($pager_select == $pager - 2 || $pager_select == $pager - 1 ||
                    $pager_select == $pager)) {
                //echo '... - ';
                echo '<li><a href="#" onclick="pager_action()">...</a></li>';
            }

            if ($pager_select == $pager - 1) {
                echo '<li id="' . ($pager_select - 2) . '" name="' . ($pager_select - 2) . '" onclick="pager_action(\'' . ($pager_select - 2) . '\')"><a>' . ($pager_select - 2) . '</a></li>';
            }
            if ($pager_select == $pager) {
                echo '<li id="' . ($pager_select - 3) . '" name="' . ($pager_select - 3) . '" onclick="pager_action(\'' . ($pager_select - 3) . '\')"><a>' . ($pager_select - 3) . '</a></li>';
                echo '<li id="' . ($pager_select - 2) . '" name="' . ($pager_select - 2) . '" onclick="pager_action(\'' . ($pager_select - 2) . '\')"><a>' . ($pager_select - 2) . '</a></li>';
            }
            if ($pager_select != 1) {
                //echo ($pager_select - 1) . " - ";
                echo '<li id="' . ($pager_select - 1) . '" name="' . ($pager_select - 1) . '" onclick="pager_action(\'' . ($pager_select - 1) . '\')"><a>' . ($pager_select - 1) . '</a></li>';
            }
            //echo $pager_select . " - ";
            echo '<li class="active" id="' . $pager_select . '" name="' . $pager_select . '" onclick="pager_action(\'' . $pager_select . '\')"><a>' . $pager_select . '</a></li>';
            if ($pager_select != $pager) {
                //echo ($pager_select + 1) . " - ";
                echo '<li id="' . ($pager_select + 1) . '" name="' . ($pager_select + 1) . '" onclick="pager_action(\'' . ($pager_select + 1) . '\')"><a>' . ($pager_select + 1) . '</a></li>';
            }
            if ($pager_select == 1) {
                echo '<li id="' . ($pager_select + 2) . '" name="' . ($pager_select + 2) . '" onclick="pager_action(\'' . ($pager_select + 2) . '\')"><a>' . ($pager_select + 2) . '</a></li>';
                echo '<li id="' . ($pager_select + 3) . '" name="' . ($pager_select + 3) . '" onclick="pager_action(\'' . ($pager_select + 3) . '\')"><a>' . ($pager_select + 3) . '</a></li>';
            }
            if ($pager_select == 2) {
                echo '<li id="' . ($pager_select + 2) . '" name="' . ($pager_select + 2) . '" onclick="pager_action(\'' . ($pager_select + 2) . '\')"><a>' . ($pager_select + 2) . '</a></li>';
            }


            if (($pager_select == 1 || $pager_select == 2 || $pager_select == 3)) {
                //echo '... - ';
                echo '<li><a>...</a></li>';
            }
            if ($pager_select < $pager - 2) {
                //echo '... - ';
                echo '<li><a>...</a></li>';
            }
            if ($pager_select != $pager && $pager_select != $pager - 1) {
                //echo $pager;
                echo '<li id="' . $pager . '" name="' . $pager . '" onclick="pager_action(\'' . $pager . '\')"><a>' . $pager . '</a></li>';
            }
        } 
        else {
            for ($j = 1; $j <= $pager; $j++) {
                if ($pager_select == $j) {
                    echo '<li class="active" id="' . $j . '" name="' . $j . '" onclick="pager_action(\'' . $j . '\')"><a>' . $j . '</a></li>';
                } else {
                    echo '<li id="' . $j . '" name="1" onclick="pager_action(\'' . $j . '\')"><a>' . $j . '</a></li>';
                }
            }
        }
        ?>
    <li disabled="<?php
    if ($pager_select < $pager) {
        echo 'false';
    }
    else {
        echo 'true';
    }
    ?>" class="next" name="<?php echo ($pager_select + 1); ?>" onclick="<?php
        if ($pager_select < $pager) {
            echo "pager_action('" . ($pager_select + 1) . "')";
        } 
        else {
            echo '';
        }
        ?>"><a style="opacity: <?php
        if ($pager_select < $pager) {
            echo "1";
        } 
        else {
            echo '0.4';
        }
        ?>">بعدی</a></li>

</ul>
