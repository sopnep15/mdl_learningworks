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
 * @package   theme_learningworks15
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php include(dirname(__FILE__) . '/header.php'); ?>

<div id="page-content" class="row-fluid">
        <section>
        	<div class="hero-slider">
	        	<div class="display">
	        	<div class="image-wrapper">
					<img class='photo'  src="<?php echo $OUTPUT->pix_url('slider04', 'theme'); ?>" alt="" />
					<img class='photo'  src="<?php echo $OUTPUT->pix_url('slider03', 'theme'); ?>" alt="" />
					<img class='photo'  src="<?php echo $OUTPUT->pix_url('slider02', 'theme'); ?>" alt="" />
		        	<img class='photo'  src="<?php echo $OUTPUT->pix_url('slider01', 'theme'); ?>" alt="" />
		        	<img class='photo'  src="<?php echo $OUTPUT->pix_url('slider02', 'theme'); ?>" alt="" />
					<div class="base">
						<span class="left-overlay"></span>
		        		<span class="triangle"></span>
		        		<span class="right-overlay"></span>
		        	</div>
				</div>
	        	<div class="hero-slider-message">
	        		<span class="message-logo"></span>
	        		<span class="text">Growing outstanding people</span>
	        	</div>
	        	</div>

	        	<div class="controller">
	        		<div class="prev chevron chevron-left">
	        		</div>
	        		<div class="next chevron chevron-right">
	        		</div>
	        	</div>
        	</div>
        	<div class="hero-message">
        		<div class="message-wrapper">
	        		<h1>LEARNINGWORKS TRAINING</h1>
					<p class="medium">As a category <a href="http://www.nzqa.govt.nz/providers/details.do?providerId=765761001&site=1" title="NZQA link">One Private Training Establishment (PTE)</a>, our training team provide qualification (NZQA)
					and non-qualification specific training including Business Management, Leadership, Adult Education, Project Management, Train the Trainer and Continuous Professional Development.</p>
	        		<p class="medium">LearningWorks provides a range of services to our business partners focused on the development and delivery of learning and training solutions.</p>
	        		<p>Our experienced team use sound educational principles, technology, business awareness and modern design to plan, implement and evaluate a solution that works for learners and organisations.</p>
	        		<p>Whether it is upskilling customers through flexible accredited qualification-based courses, creating educational resources for businesses, or providing online platforms that drive success within organisation, we ensure our clients are part of the journey from first inception to the end result.</p>
	        		<p>A hub of innovative thinkers, our experienced team are dedicated to exploring new ideas, pushing boundaries and improving the way our clients learn.</p>
	        	</div>
        	</div>
        	<div class="columns">
				<div class="span6">
					<div class="card">
						<div>
							<div class="image-container image-phone"></div>
							<h2>LEARNER SUPPORT</h2>
							<p>Your friendly and informative point of contact to support you in your study.</p>
							<p>Email: <a href="mailto:learnersupport@learningworks.co.nz?Subject=Request%20for%20Support">learnersupport@learningworks.co.nz</a></p>
							<p>Phone: <a href="tel:+6478387493">(07) 838 7493</a></p>
						</div>
					</div>
        		</div>
				<div class="span6">
					<div class="card">
        			<div>
        				<div class="image-container image-info"></div>
	        			<h2>PROGRAMME INFORMATION</h2>
						<p>Our training team provides qualification (NZQA) and non-qualification training including Adult Education, Business Management & Leadership, Project Management and Business Administration.
	        			</p>
	        			<p>For more information email: <a href="mailto:sales@learningworks.co.nz?Subject=Training%20Enquiry">sales@learningworks.co.nz</a></p>
	        		</div>
        		</div>
				</div>
        	</div>
        	<div class="two-minute-moodle">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ixs6FNnXSx4" frameborder="0" allowfullscreen></iframe>
        	</div>





            <div style="display:none;">
            <?php echo $OUTPUT->main_content(); ?>
            </div>
        </section>
    </div>

<?php include(dirname(__FILE__) . '/footer.php'); ?>
<?php echo $OUTPUT->standard_end_of_body_html() ?>

</body>
</html>
