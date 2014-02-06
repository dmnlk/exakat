<?php

$projects = glob('projects/*');
$projects = array_map('basename', $projects);

unlink('mergedReport.sqlite');
$db = new SQLite3('mergedReport.sqlite');

$results = $db->query('CREATE TABLE reports (id INTEGER PRIMARY KEY AUTOINCREMENT, project TEXT, analyzer TEXT, value TEXT, count INT)');
print $db->lastErrorMsg();

foreach($projects as $project) {
    print "$project\n";
    
    if ($project == 'default') { continue; }
    if ($project == 'tests') { continue; }
    if ($project == 'progress.log') { continue; }
    $path = dirname(__DIR__)."/projects/$project/report.sqlite";
    if (!file_exists($path)) {
        print "No report for '$project'\n";
        continue;
    }

    $results = $db->query("ATTACH '$path' AS toMerge;");

    $results = $db->query("INSERT INTO reports SELECT null, '$project', analyzer, value, count FROM toMerge.reports; ");

    $results = $db->query("DETACH toMerge;");
}

$results = $db->query('CREATE TABLE stats (id INTEGER PRIMARY KEY AUTOINCREMENT, analyzer TEXT, total INT, count INT)');
print $db->lastErrorMsg();

$exts = array('mcrypt', 'kdm5', 'bzip2', 'bcmath', 'pcre', 'mysqli', 'calendar', 'ctype', 'curl', 'dom', 'ssh2', 
              'ereg', 'ftp', 'fileinfo', 'filter', 'exif', 'pgsql', 'enchant', 'sqlite3', 'gd', 'gmp', 'hash', 
              'iconv', 'json', 'ldap', 'libxml', 'mysql', 'odbc', 'openssl', 'sqlite', 'xdebug',);
foreach($exts as $ext) {
    $results = $db->query('INSERT INTO stats SELECT NULL, "'.$ext.'", COUNT(*), SUM(CASE count WHEN "Yes" THEN 1 ELSE 0 END) FROM reports WHERE analyzer="Appinfo" AND value="ext/'.$ext.'" ');
}


?>