<footer class="global-footer">
    <div class="container-fluid">
        <p class="copyright"><?php echo format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID))); ?> <i class="fa fa-copyright"></i> <?php echo date('Y', time()); ?> | <a class="learningworks" href="http://learningworks.co.nz">Powered by <span>Learning</span>Works</a></p>
        <ul class="icon-wrapper">
            <?php
            $theme = theme_config::load('learningworks15');
            if ($theme->settings->theme_twitter_url != ""){
                echo '<li> <a href="'.$theme->settings->theme_twitter_url.'" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>';
            }
            if ($theme->settings->theme_facebook_url != ""){
                echo '<li> <a href="'.$theme->settings->theme_facebook_url.'" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li> ';
            }
            
            ?>
            <li class="button-top"> <a href="#top"><i class="fa fa-angle-up fa-3x"></i></a> </li>
        </ul>
    </div>
</footer>