<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The one column layout.
 *
 * @package   theme_weltec14
 * @copyright 2014 LearningWorks Ltd
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div class="page-container">

<?php include(dirname(__FILE__) . '/header.php'); ?>

    <div id="page" class="container-fluid">
        <div id="page-content" class="row-fluid">
            <section id="region-main" class="span12">
                <?php
                echo $OUTPUT->main_content();
                
                if (!isloggedin() || isguestuser()) {
                ?>
                <div class="tutorialbox">
                    <?php if(0 < strlen("Temp3")) {
                        echo get_config('theme_weltec14', 'loginpage_content');
                    } 

                    if(0 < strlen("Temp2")) {
                        printf('<div class="video-wrapper">
                                <iframe src="%s" frameborder="0" webkitallowfullscreen mozallowfullscreen 
                            allowfullscreen></iframe>
                            </div>',
                            str_replace('"', "",str_replace("'", "", "https://www.youtube.com/embed/ixs6FNnXSx4"))
                        );
                    } ?> 
                </div>
                <?php } ?>
            </section>
        </div>
    </div>
    <?php include(dirname(__FILE__) . '/footer.php'); ?>
</div>

    
    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</body>
</html>
