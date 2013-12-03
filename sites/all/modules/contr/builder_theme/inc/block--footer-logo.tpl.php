<?php

print '                <div class="span3 soc_icons">';
print '                     <div>';
print '                         <img alt="" src="'.$logo_url.'"><br>';
foreach($social_links as $key => $social){
    print ' <a href="'.$social['url'].'" target="_blank">'.$social['icon'].'</a>';
}
print ' </div>';
print ' </div>';

?>