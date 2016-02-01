<?php
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('GanacheFormHelper', 'CakeGanache.View/Helper');
App::uses('ClassRegistry', 'Utility');

//App::uses('Controller', 'Controller');
//App::uses('View', 'View');
//App::uses('Model', 'Model');
//App::uses('Security', 'Utility');
//App::uses('CakeRequest', 'Network');
//App::uses('HtmlHelper', 'View/Helper');
//App::uses('FormHelper', 'View/Helper');
//App::uses('Router', 'Routing');


/**
 * Contact class
 *
 * @package CakeGanache.Test.Case.View.Helper
 */ 
class Contact extends CakeTestModel
{ 
    /**
     * useTable property
     *
     * @var bool
     */
    public $useTable = false;

    /**
     * Default schema
     *
     * @var array
     */
    protected $_schema = [
        'id' => ['type' => 'integer', 'null' => '', 'default' => '', 'length' => '8'],
        'name' => ['type' => 'string', 'null' => '', 'default' => '', 'length' => '255'],
        'email' => ['type' => 'string', 'null' => '', 'default' => '', 'length' => '255'],
        'phone' => ['type' => 'string', 'null' => '', 'default' => '', 'length' => '255'],
        'password' => ['type' => 'string', 'null' => '', 'default' => '', 'length' => '255'],
        'published' => ['type' => 'date', 'null' => true, 'default' => null, 'length' => null],
        'created' => ['type' => 'date', 'null' => '1', 'default' => '', 'length' => ''],
        'updated' => ['type' => 'datetime', 'null' => '1', 'default' => '', 'length' => null],
        'age' => ['type' => 'integer', 'null' => '', 'default' => '', 'length' => null],
        'is_active' => ['type' => 'boolean', 'default' => 0]
    ];

    /**
     * validate property
     *
     * @var array
     */
    public $validate = [
    ];
}



class GanacheFormHelperTest extends CakeTestCase
{
    public function setUp()
    {
        parent::setUp();
        $Controller = new Controller();
        $View = new View($Controller);
        $this->GanacheFormHelper = new GanacheFormHelper($View);

        ClassRegistry::addObject('Contact', new Contact());
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
    public function testFormTypesArray()
    {
        $result = $this->GanacheFormHelper->formTypes;
        $expected = ['navbar' => 'navbar-form', 'horizontal' => 'form-horizontal', 'inline' => 'form-inline', 'search' => 'form-search'];
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
    public function testCreateWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->create('User');
        $expected = '<form action="/" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCreateNavbarForm()
    {
        $result = $this->GanacheFormHelper->create('User', ['ga_type' => GA_NAVBAR]);
        $expected = '<form action="/" class="navbar-form" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCreateHorizontalForm()
    {
        $result = $this->GanacheFormHelper->create('User', ['ga_type' => GA_HORIZONTAL]);
        $expected = '<form action="/" class="form-horizontal" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCreateInlineForm()
    {
        $result = $this->GanacheFormHelper->create('User', ['ga_type' => GA_INLINE]);
        $expected = '<form action="/" class="form-inline" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCreateSearchForm()
    {
        $result = $this->GanacheFormHelper->create('User', ['ga_type' => GA_SEARCH]);
        $expected = '<form action="/" class="form-search" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithoutPassingOverrides()
    {
        $this->GanacheFormHelper->create('User');
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => ['class' => GA_CONTROL_GROUP]];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithNavbarFormType()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => false];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithHorizontalFormType()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => ['class' => GA_CONTROL_GROUP]];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithSearchFormType()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => false];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithInlineFormType()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_INLINE]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => false];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithoutFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => ['class' => 'my-custom-class']];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithNavbarFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_NAVBAR, 'inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => false];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithHorizontalFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_HORIZONTAL, 'inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => ['class' => 'my-custom-class']];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithSearchFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_SEARCH, 'inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => false];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithInlineFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_INLINE, 'inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => false];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithoutFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithNavbarFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_NAVBAR, 'inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithHorizontalFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_HORIZONTAL, 'inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithSearchFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_SEARCH, 'inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($expected, $result);
    }
    public function testCreateTestInputDefaultsWithInlineFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_INLINE, 'inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($expected, $result);
    }
    public function testErrorWithUndefinedFormType()
    {
        $contact = ClassRegistry::getObject('Contact');
        $contact->validationErrors['name'] = ['Please provide a contact name.'];
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->error('name');
        $expected = [
            'span' => ['class' => GA_HELP_BLOCK],
            'Please provide a contact name.',
            '/span'
        ];
        $this->assertTags($result, $expected);
    }
    public function testErrorWithNavbarFormType()
    {
        $contact = ClassRegistry::getObject('Contact');
        $contact->validationErrors['name'] = ['Please provide a contact name.'];
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->error('name');
        $expected = [
            'span' => ['class' => GA_HELP_BLOCK],
            'Please provide a contact name.',
            '/span'
        ];
        $this->assertTags($result, $expected);
    }
    public function testErrorWithHorizontalFormType()
    {
        $contact = ClassRegistry::getObject('Contact');
        $contact->validationErrors['name'] = ['Please provide a contact name.'];
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->error('name');
        $expected = [
            'span' => ['class' => GA_HELP_INLINE],
            'Please provide a contact name.',
            '/span'
        ];
        $this->assertTags($result, $expected);
    }
    public function testErrorWithInlineFormType()
    {
        $contact = ClassRegistry::getObject('Contact');
        $contact->validationErrors['name'] = ['Please provide a contact name.'];
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_INLINE]);
        $result = $this->GanacheFormHelper->error('name');
        $expected = [
            'span' => ['class' => GA_HELP_BLOCK],
            'Please provide a contact name.',
            '/span'
        ];
        $this->assertTags($result, $expected);
    }
    public function testErrorWithSearchFormType()
    {
        $contact = ClassRegistry::getObject('Contact');
        $contact->validationErrors['name'] = ['Please provide a contact name.'];
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->error('name');
        $expected = [
            'span' => ['class' => GA_HELP_BLOCK],
            'Please provide a contact name.',
            '/span'
        ];
        $this->assertTags($result, $expected);
    }
    public function testErrorWithHorizontalAndFieldTypeCheckbox()
    {
        $contact = ClassRegistry::getObject('Contact');
        $contact->validationErrors['is_active'] = ['Please provide a contact name.'];
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->error('Contact.is_active');
        $expected = [
            'span' => ['class' => GA_HELP_BLOCK],
            'Please provide a contact name.',
            '/span'
        ];
        $this->assertTags($result, $expected);
    }
}

