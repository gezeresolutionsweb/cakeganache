<?php
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('GanacheFormHelper', 'CakeGanache.View/Helper');

class GanacheFormHelperTest extends CakeTestCase
{
    public function setUp()
    {
        parent::setUp();
        $Controller = new Controller();
        $View = new View($Controller);
        $this->GanacheFormHelper = new GanacheFormHelper($View);
    }
/*
    public function testSimpleIcon()
    {
        $result = $this->GanacheFormHelper->icon('home');
        $expected = '<i class="glyphicon glyphicon-home"></i>';
        $this->assertEquals($expected, $result);
    }
 */
}

