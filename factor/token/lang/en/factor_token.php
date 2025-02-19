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
 * Language strings.
 *
 * @package     factor_token
 * @author      Peter Burnett <peterburnett@catalyst-au.net>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Trust this device';

$string['event:token_created'] = 'MFA token created.';
$string['form:trust'] = 'Trust this device for {$a}.';
$string['privacy:metadata'] = 'The token factor plugin does not store any personal data.';
$string['settings:expiry'] = 'Trust duration';
$string['settings:expiry_help'] = 'The duration a device is trusted before requiring a new MFA authentication.';
$string['settings:expireovernight'] = 'Expire trust overnight';
$string['settings:expireovernight_help'] = 'This forces tokens to expire overnight, preventing mid-day interruptions for users. Instead they will be asked to MFA authenticate at the start of a day after expiry.';
$string['summarycondition'] = 'the user has previously trusted this device';
