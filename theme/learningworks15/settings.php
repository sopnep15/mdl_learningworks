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
 * Theme Learningworks15 settings.
 *
 * Each setting that is defined in the parent theme Clean should be
 * defined here too, and use the exact same config name. The reason
 * is that theme_learningworks15 does not define any layout files to re-use the
 * ones from theme_clean. But as those layout files use the function
 * {@link theme_clean_get_html_for_settings} that belong to Clean,
 * we have to make sure it works as expected by having the same settings
 * in our theme.
 *
 * @see        theme_clean_get_html_for_settings
 * @package    theme_learningworks15
 * @copyright  2015 LearningWorks
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading(
        'theme_learningworks15/settings_main_colors',
        get_string('settings_main_colors', 'theme_learningworks15'),
        ''
    ));

    // @textColor setting.
    $name = 'theme_learningworks15/textcolor';
    $title = get_string('textcolor', 'theme_learningworks15');
    $description = get_string('textcolor_desc', 'theme_learningworks15');
    $default = '#333';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @linkColor setting.
    $name = 'theme_learningworks15/linkcolor';
    $title = get_string('linkcolor', 'theme_learningworks15');
    $description = get_string('linkcolor_desc', 'theme_learningworks15');
    $default = '#36F';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    $settings->add(new admin_setting_heading(
        'theme_learningworks15/settings_button_colors',
        get_string('settings_button_colors', 'theme_learningworks15'),
        ''
    ));

    // @btnprimarycolor setting.
    $name = 'theme_learningworks15/btnprimarycolor';
    $title = get_string('btnprimarycolor', 'theme_learningworks15');
    $description = get_string('btnprimarycolor_desc', 'theme_learningworks15');
    $default = '#95C11F';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @btnoverridecolor setting.
    $name = 'theme_learningworks15/btnoverridecolor';
    $title = get_string('btnoverridecolor', 'theme_learningworks15');
    $description = get_string('btnoverridecolor_desc', 'theme_learningworks15');
    $default = '#EF7D00';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @btntextcolor setting.
    $name = 'theme_learningworks15/btntextcolor';
    $title = get_string('btntextcolor', 'theme_learningworks15');
    $description = get_string('btntextcolor_desc', 'theme_learningworks15');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    $settings->add(new admin_setting_heading(
        'theme_learningworks15/settings_bar_settings',
        get_string('settings_bar_settings', 'theme_learningworks15'),
        ''
    ));

    // Logo file setting.
    $name = 'theme_learningworks15/logo';
    $title = get_string('logo','theme_learningworks15');
    $description = get_string('logodesc', 'theme_learningworks15');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @BarColor setting.
    $name = 'theme_learningworks15/barcolor';
    $title = get_string('barcolor', 'theme_learningworks15');
    $description = get_string('barcolor_desc', 'theme_learningworks15');
    $default = '#749719';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @BarTextColor setting.
    $name = 'theme_learningworks15/bartextcolor';
    $title = get_string('bartextcolor', 'theme_learningworks15');
    $description = get_string('bartextcolor_desc', 'theme_learningworks15');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @BarLinkColor setting.
    $name = 'theme_learningworks15/barlinkcolor';
    $title = get_string('barlinkcolor', 'theme_learningworks15');
    $description = get_string('barlinkcolor_desc', 'theme_learningworks15');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    $settings->add(new admin_setting_heading(
        'theme_learningworks15/settings_background',
        get_string('settings_background', 'theme_learningworks15'),
        ''
    ));

    // @bodyBackground setting.
    $name = 'theme_learningworks15/bodybackground';
    $title = get_string('bodybackground', 'theme_learningworks15');
    $description = get_string('bodybackground_desc', 'theme_learningworks15');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background image setting.
    $name = 'theme_learningworks15/backgroundimage';
    $title = get_string('backgroundimage', 'theme_learningworks15');
    $description = get_string('backgroundimage_desc', 'theme_learningworks15');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background repeat setting.
    $name = 'theme_learningworks15/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_learningworks15');
    $description = get_string('backgroundrepeat_desc', 'theme_learningworks15');;
    $default = 'repeat';
    $choices = array(
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_learningworks15'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_learningworks15'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_learningworks15'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_learningworks15'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background position setting.
    $name = 'theme_learningworks15/backgroundposition';
    $title = get_string('backgroundposition', 'theme_learningworks15');
    $description = get_string('backgroundposition_desc', 'theme_learningworks15');
    $default = '0';
    $choices = array(
        '0' => get_string('default'),
        'left_top' => get_string('backgroundpositionlefttop', 'theme_learningworks15'),
        'left_center' => get_string('backgroundpositionleftcenter', 'theme_learningworks15'),
        'left_bottom' => get_string('backgroundpositionleftbottom', 'theme_learningworks15'),
        'right_top' => get_string('backgroundpositionrighttop', 'theme_learningworks15'),
        'right_center' => get_string('backgroundpositionrightcenter', 'theme_learningworks15'),
        'right_bottom' => get_string('backgroundpositionrightbottom', 'theme_learningworks15'),
        'center_top' => get_string('backgroundpositioncentertop', 'theme_learningworks15'),
        'center_center' => get_string('backgroundpositioncentercenter', 'theme_learningworks15'),
        'center_bottom' => get_string('backgroundpositioncenterbottom', 'theme_learningworks15'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background fixed setting.
    $name = 'theme_learningworks15/backgroundfixed';
    $title = get_string('backgroundfixed', 'theme_learningworks15');
    $description = get_string('backgroundfixed_desc', 'theme_learningworks15');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main content background color.
    $name = 'theme_learningworks15/contentbackground';
    $title = get_string('contentbackground', 'theme_learningworks15');
    $description = get_string('contentbackground_desc', 'theme_learningworks15');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Secondary background color.
    $name = 'theme_learningworks15/secondarybackground';
    $title = get_string('secondarybackground', 'theme_learningworks15');
    $description = get_string('secondarybackground_desc', 'theme_learningworks15');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Block Header background color.
    $name = 'theme_learningworks15/blockheaderbackground';
    $title = get_string('blockheaderbackground', 'theme_learningworks15');
    $description = get_string('blockheaderbackground_desc', 'theme_learningworks15');
    $default = '#AAAAAA';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Block Header text color.
    $name = 'theme_learningworks15/blockheadertext';
    $title = get_string('blockheadertext', 'theme_learningworks15');
    $description = get_string('blockheadertext_desc', 'theme_learningworks15');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Invert Navbar to dark background.
    // $name = 'theme_learningworks15/invert';
    // $title = get_string('invert', 'theme_learningworks15');
    // $description = get_string('invertdesc', 'theme_learningworks15');
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $settings->add($setting);

    $settings->add(new admin_setting_heading(
        'theme_learningworks15/settings_soical_links',
        get_string('settings_soical_links', 'theme_learningworks15'),
        ''
    ));

    $setting = new admin_setting_configtext(
        'theme_learningworks15/theme_facebook_url',
        get_string('theme_facebook_url', 'theme_learningworks15'),
        get_string('theme_facebook_url_desc', 'theme_learningworks15'),
        ''
    );
    $settings->add($setting);
    $setting = new admin_setting_configtext(
        'theme_learningworks15/theme_twitter_url',
        get_string('theme_twitter_url', 'theme_learningworks15'),
        get_string('theme_twitter_url_desc', 'theme_learningworks15'),
        ''
    );
    $settings->add($setting);

    $settings->add(new admin_setting_heading(
        'theme_learningworks15/settings_other',
        get_string('settings_other', 'theme_learningworks15'),
        ''
    ));

    // Custom CSS file.
    $name = 'theme_learningworks15/customcss';
    $title = get_string('customcss', 'theme_learningworks15');
    $description = get_string('customcssdesc', 'theme_learningworks15');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    // $name = 'theme_learningworks15/footnote';
    // $title = get_string('footnote', 'theme_learningworks15');
    // $description = get_string('footnotedesc', 'theme_learningworks15');
    // $default = '';
    // $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $settings->add($setting);
}
