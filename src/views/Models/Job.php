<?php
namespace Views\Models;

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)). $ds;
require_once("{$base_dir}BaseElement.php");


class Job extends BaseElement {

    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        // parent::__construct($newTitle, $description);  // heredamos del padre
        $this->title = $newTitle;
    }

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        $cadena="";
  
        if($years > 0) $cadena="Job duration: $years years";
        if($months > 0) $cadena.="Job duration: $months months";
        return $cadena;
    }


}