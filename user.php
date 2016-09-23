<?php

/**
 *
 * Display the selected user activity
 */

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->dirroot . '/course/lib.php');

require_login();

$context = context_system::instance();
require_capability('report/graphic:view', $context);
$courseid = required_param('id', 'int');
if (!$course = get_course($courseid)) {
    print_error('nocourseid');
}