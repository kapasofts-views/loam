<?php echo '<h3 style="text-align: left;">'.$title.'</h3>';?>
<p>
    <?php echo '<a href="'.$page_url.'">';?>
    <?php echo '<img class="alignleft" title="'.$photo['title'].'" src="'.$photo['url'].'" alt="'.$photo['alt'].'" width="87" height="91"/>';?>
    </a>
    <?php print $pars[0];?>
</p>
<?php
for($i=1;$i<count($pars);$i++){
    print '<p>';
    print $pars[$i];
    print '</p>';
}
?>

<?php print '<a class="btn mrgbtm35" href="'.$brochure_url.'" download="'.$brochure_url.'">'.$brochure_txt.'</a>';?>
