<?php
phpinfo();
$servers = array(array('localhost', 11212));
$memcache = new Memcache;
$memcacheD = new Memcached;
$memcache->addServer('localserv', 11211);
$memcacheD->addServers($servers);
$memcacheD->setOption(Memcached::OPT_BINARY_PROTOCOL, true);

$checks = array(
    123,
    4542.32,
    'a string',
    true,
    array(123, 'string'),
    (object)array('key1' => 'value1'),
);
foreach ($checks as $i => $value) {
    print "Checking WRITE with Memcache\n";
    $key = 'cachetest' . $i;
    $memcache->set($key, $value);
    usleep(100);
    $val = $memcache->get($key);
    $valD = $memcacheD->get($key);
    if ($val !== $valD) {
        print "Not compatible!";
        var_dump(compact('val', 'valD'));
    } else {
        print "WAS COMPAT\n";
    }

    print "Checking WRITE with MemcacheD\n";
    $key = 'cachetest' . $i;
    $memcacheD->set($key, $value);
    usleep(100);
    $val = $memcache->get($key);
    $valD = $memcacheD->get($key);
    if ($val !== $valD) {
        print "Not compatible!";
        var_dump(compact('val', 'valD'));
    } else {
        print "WAS COMPAT\n";
    }
}