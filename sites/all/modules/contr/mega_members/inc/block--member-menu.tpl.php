<?php

echo '<ul class="unstyled">';
foreach($menu_items as $key => $value){
    echo '    <li><a href="'.$value['url'].'">'.$value['title'].'</a></li>';
}
echo '</ul>';