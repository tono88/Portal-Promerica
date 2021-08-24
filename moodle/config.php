<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'rdbms.strato.de';
$CFG->dbname    = 'DB4358276';
$CFG->dbuser    = 'U4358276';
$CFG->dbpass    = '5718strato5718';
$CFG->prefix    = 'pmr_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'http://promerica.kawarna.com';
$CFG->dataroot  = '/home/strato/www/ka/www.kawarna.com/htdocs/promerica/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
