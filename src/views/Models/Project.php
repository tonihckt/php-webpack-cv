<?php
namespace Views\Models;

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)). $ds;
require_once("{$base_dir}BaseElement.php");

class Project extends BaseElement {
}