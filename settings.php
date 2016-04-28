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
 * superiframe block caps.
 *
 * @package    block_superiframe
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$settings->add(new admin_setting_heading('sampleheader',
                                         get_string('headerconfig', 'block_superiframe'),
                                         get_string('descconfig', 'block_superiframe')));

$settings->add(new admin_setting_configcheckbox('superiframe/foo',
                                                get_string('labelfoo', 'block_superiframe'),
                                                get_string('descfoo', 'block_superiframe'),
                                                '0'));
												
$defaulturl='https://quizlet.com/132695231/scatter/embed';
$settings->add(new admin_setting_configtext('block_superiframe/url', get_string('url', 'block_superiframe'),
            get_string('url_details', 'block_superiframe'), $defaulturl, PARAM_RAW)); 


$settings->add(new admin_setting_configtext('block_superiframe/height', get_string('height', 'block_superiframe'),
            get_string('height_details', 'block_superiframe'), 200, PARAM_INT)); 


$settings->add(new admin_setting_configtext('block_superiframe/width', get_string('width', 'block_superiframe'),
            get_string('width_details', 'block_superiframe'), 500, PARAM_INT)); 


$myoptions = array();
$myoptions['course'] = get_string('course');
$myoptions['popup'] = get_string('popup');
$settings->add(new admin_setting_configselect('block_superiframe/layout', get_string('layout', 'block_superiframe'),
            get_string('layout_details', 'block_superiframe'), 'course', $myoptions)); 
			
