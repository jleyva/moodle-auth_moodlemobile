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
 * Moodle Mobile auth plugin configuratin page..
 *
 * @package    auth_moodlemobile
 * @copyright  2014 Juan Leyva <juanleyvadelgado@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $options = array(
        1 => get_string('loginintheapp', 'auth_moodlemobile'),
        2 => get_string('logininthebrowser', 'auth_moodlemobile'),
        3 => get_string('loginfirstappthenbrowser', 'auth_moodlemobile')
    );

    $settings->add(new admin_setting_configselect('auth_moodlemobile/typeoflogin',
                        get_string('auth_moodlemobiletypeoflogin_key', 'auth_moodlemobile'),
                        get_string('auth_moodlemobiletypeoflogin', 'auth_moodlemobile'), 1, $options));
}