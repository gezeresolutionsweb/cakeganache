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
    public function testButtonTypesArray()
    {
        $result = $this->GanacheFormHelper->buttonTypes;
        $expected = ['primary', 'info', 'success', 'warning', 'danger', 'inverse', 'link'];
        $this->assertEquals($expected, $result);
    }
    public function testButtonSizesArray()
    {
        $result = $this->GanacheFormHelper->buttonSizes;
        $expected = ['mini', 'small', 'large'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->addButtonClasses([]);
        $expected = ['class' => 'btn'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapTypePrimary()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_PRIMARY]);
        $expected = ['class' => 'btn btn-primary'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapTypeInfo()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_INFO]);
        $expected = ['class' => 'btn btn-info'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapTypeSuccess()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_SUCCESS]);
        $expected = ['class' => 'btn btn-success'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapTypeWarning()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_WARNING]);
        $expected = ['class' => 'btn btn-warning'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapTypeDanger()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_DANGER]);
        $expected = ['class' => 'btn btn-danger'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapTypeInverse()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_INVERSE]);
        $expected = ['class' => 'btn btn-inverse'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapTypeLink()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_LINK]);
        $expected = ['class' => 'btn btn-link'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesWithInvalidBoostrapType()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => 'super-type']);
        $expected = ['class' => 'btn'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapSizeMini()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => GA_MINI]);
        $expected = ['class' => 'btn btn-mini'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapSizeSmall()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => GA_SMALL]);
        $expected = ['class' => 'btn btn-small'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesBoostrapSizeLarge()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => GA_LARGE]);
        $expected = ['class' => 'btn btn-large'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesWithInvalidBoostrapSize()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => 'super-size']);
        $expected = ['class' => 'btn'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesWithBoostrapSizeAndBootstrapTypeDefined()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => GA_MINI, 'bootstrap-type' => GA_PRIMARY]);
        $expected = ['class' => 'btn btn-primary btn-mini'];
        $this->assertEquals($expected, $result);
    }
    public function testAddButtonClassesWithExtraAttribute()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['id' => 'my-super-id']);
        $expected = ['id' => 'my-super-id', 'class' => 'btn'];
        $this->assertEquals($expected, $result);
    }
}

