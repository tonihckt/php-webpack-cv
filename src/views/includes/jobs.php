<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}Models{$ds}Job.php");

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}Models{$ds}Project.php");

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}Models{$ds}Printable.php");


//NameSpaces
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}lib1{$ds}Project.php");


use Views\Models\{Job, Project, Printable};



$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Developer', 'This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Devops', 'This is an awesome job!!!');
$job3->months = 32;

$project1 = new Project('Project 1', 'Description 1');


// Implementando libreia externa
$projectLib = new Lib1\Project();

$jobs = [
  $job1,
  $job2,
  $job3
    // [
    //   'title' => 'PHP Developer',
    //   'description' => 'This is an awesome job!!!',
    //   'visible' => true,
    //   'months' => 16
    // ],
    // [
    //   'title' => 'Python Dev',
    //   'visible' => false,
    //   'months' => 14
    // ],
    // [
    //   'title' => 'Devops',
    //   'visible' => true,
    //   'months' => 5
    // ],
    // [
    //   'title' => 'Node Dev',
    //   'visible' => true,
    //   'months' => 24
    // ],
    // [
    //   'title' => 'Frontend Dev',
    //   'visible' => true,
    //   'months' => 3
    // ]
];

$projects = [
  $project1
];

// FUNCTIONS
// function getDuration($months) {
//   $years = floor($months / 12);
//   $extraMonths = $months % 12;
//   $cadena="";

//   if($years > 0) $cadena="$years years ";
//   if($months > 0) $cadena.="$months months";
//   return $cadena;

// };

// especificamos el tipo de dato
function printElement(Printable $job) {
  // if($job['visible'] == false) {
    if($job->visible == false) {
    return;
  }

  echo '<li class="work-position">';
  // echo '<h5>' . $job['title'] . '</h5>';
  echo '<h5>' . $job->getTitle() . '</h5>';
  echo '<p>' . $job->getDescription . '</p>';
  // echo '<p>' . getDuration($job['months']) . '</p>';
  echo '<p>' . $job->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}
