<?php

class AllTest extends CakeTestSuite {
    public static function suite() {
        $suite = new CakeTestSuite('All CakeGanache tests');
        $suite->addTestDirectoryRecursive(__DIR__ . DS . 'Config');
        $suite->addTestDirectoryRecursive(__DIR__ . DS . 'View');
        return $suite;
    }
}
