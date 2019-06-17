<?php
namespace Views\Models;

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)). $ds;
require_once("{$base_dir}Printable.php");

class BaseElement implements Printable{
    protected $title;
    public $description;
    public $visible = true;
    public $months;
  
    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->description = $description;
    }
  
    // modifica el titulo
    public function setTitle($tlt) {
        if($tlt == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $tlt;
        }
    }
  
    public function getTitle() {
        return $this->title;
    }
  
    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        $cadena="";
  
        if($years > 0) $cadena="$years years ";
        if($months > 0) $cadena.="$months months";
        return $cadena;
    }

    public function getDescription() {
        return $this->descrition;
    }

  }
  