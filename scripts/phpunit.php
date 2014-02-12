<?php

$row = array('date' => '"'.date('Y-m-d H:i:s').'"', 'id' => 'NULL');

$begin = microtime(true);
shell_exec('cd tests/analyzer; phpunit alltests.php > phpunit.txt');
$end = microtime(true);

$row['duration'] = ($end - $begin);

$results = file_get_contents('tests/analyzer/phpunit.txt');
if (preg_match('/Tests: (\d+), Assertions: (\d+), Failures: (\d+)\./is', $results, $R)) {
    $row['tests'] = $R[1];
    $row['assertions'] = $R[2];
    $row['fails'] = $R[3];
} elseif (preg_match('/OK \((\d+) tests?, (\d+) assertions?\)/is', $results, $R)) {
    $row['tests'] = $R[1];
    $row['assertions'] = $R[2];
    $row['fails'] = 0;
} else {
    var_dump($results);
}

$mysql = new mysqli('localhost', 'root', '', 'exakat');
$query = "INSERT INTO unittests (`".join("`, `", array_keys($row))."`) VALUES (".join(", ", array_values($row)).")";
$mysql->query($query);
    
print "OK\n";

?>