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
 * Defines the version and other meta-info about the plugin
 *
 * @package     local_sign
 * @author      Valentino
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once("$CFG->libdir/formslib.php");

class add extends moodleform
{
    //Add elements to form
    public function definition()
    {
        global $CFG;

        $mform = $this->_form; // Don't forget the underscore! 

        $mform->addElement('text', 'url', 'Video URL', array('placeholder' => 'Enter video URL')); // Add elements to your form.
        $mform->setType('url', PARAM_NOTAGS); // Set type of element.

        $mform->addElement('textarea', 'subtitle', 'Subtitle', array('placeholder' => 'Insert subtitle', 'rows' => '10'));
        
        $this->add_action_buttons();
    }
    //Custom validation should be added here
    function validation($data, $files)
    {
        return array();
    }
}