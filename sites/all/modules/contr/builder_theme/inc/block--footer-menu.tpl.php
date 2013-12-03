<?php
print '<div class="span6">';
print '            <!-- START FOOTER MENU-->';
print '                        <span class="copyright pull-right visible-desktop">';
print '                            <div class="menu-footer-menu-container">';
print '                                <ul class="unstyled footer_menu" id="menu-footer-menu">';
                                        foreach($links as $key => $link){
                                            print '<li><a href="'.$link['url'].'">'.$link['title'].'</a></li>';
                                        }
//print '                                    <li><a href="index.html">Home</a></li>';
//print '                                    <li><a href="about.html">About Us</a></li>';
//print '                                    <li><a href="big-image-right-sidebar.html">Blog</a></li>';
//print '                                    <li><a href="2-columns-portfolio.html">Portfolio</a></li>';
//print '                                    <li><a href="contacts.html">Contacts</a></li>';
print '                                </ul>';
print '                            </div>';
print '                        </span>';
print '            <!-- END FOOTER MENU-->';
print '        </div>';
?>