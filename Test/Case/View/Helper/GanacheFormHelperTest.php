<?php
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('GanacheFormHelper', 'CakeGanache.View/Helper');
App::uses('ClassRegistry', 'Utility');

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
        $this->FormHelper = new FormHelper($View);

        ClassRegistry::addObject('Contact', new Contact());
    }
    public function testButtonTypesArray()
    {
        $result = $this->GanacheFormHelper->buttonTypes;
        $expected = ['primary', 'info', 'success', 'warning', 'danger', 'inverse', 'link'];
        $this->assertEquals($result, $expected);
    }
    public function testButtonSizesArray()
    {
        $result = $this->GanacheFormHelper->buttonSizes;
        $expected = ['mini', 'small', 'large'];
        $this->assertEquals($result, $expected);
    }
    public function testFormTypesArray()
    {
        $result = $this->GanacheFormHelper->formTypes;
        $expected = ['navbar' => 'navbar-form', 'horizontal' => 'form-horizontal', 'inline' => 'form-inline', 'search' => 'form-search'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->addButtonClasses([]);
        $expected = ['class' => 'btn'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypePrimary()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_PRIMARY]);
        $expected = ['class' => 'btn btn-primary'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeInfo()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_INFO]);
        $expected = ['class' => 'btn btn-info'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeSuccess()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_SUCCESS]);
        $expected = ['class' => 'btn btn-success'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeWarning()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_WARNING]);
        $expected = ['class' => 'btn btn-warning'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeDanger()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_DANGER]);
        $expected = ['class' => 'btn btn-danger'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeInverse()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_INVERSE]);
        $expected = ['class' => 'btn btn-inverse'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeLink()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => GA_LINK]);
        $expected = ['class' => 'btn btn-link'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithInvalidBoostrapType()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-type' => 'super-type']);
        $expected = ['class' => 'btn'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapSizeMini()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => GA_MINI]);
        $expected = ['class' => 'btn btn-mini'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapSizeSmall()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => GA_SMALL]);
        $expected = ['class' => 'btn btn-small'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapSizeLarge()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => GA_LARGE]);
        $expected = ['class' => 'btn btn-large'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithInvalidBoostrapSize()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => 'super-size']);
        $expected = ['class' => 'btn'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithBoostrapSizeAndBootstrapTypeDefined()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['bootstrap-size' => GA_MINI, 'bootstrap-type' => GA_PRIMARY]);
        $expected = ['class' => 'btn btn-primary btn-mini'];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithExtraAttribute()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['id' => 'my-super-id']);
        $expected = ['id' => 'my-super-id', 'class' => 'btn'];
        $this->assertEquals($result, $expected);
    }
    public function testCreateWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->create('User');
        $expected = '<form action="/" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCreateNavbarForm()
    {
        $result = $this->GanacheFormHelper->create('User', ['ga_type' => GA_NAVBAR]);
        $expected = '<form action="/" class="navbar-form" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCreateHorizontalForm()
    {
        $result = $this->GanacheFormHelper->create('User', ['ga_type' => GA_HORIZONTAL]);
        $expected = '<form action="/" class="form-horizontal" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCreateInlineForm()
    {
        $result = $this->GanacheFormHelper->create('User', ['ga_type' => GA_INLINE]);
        $expected = '<form action="/" class="form-inline" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCreateSearchForm()
    {
        $result = $this->GanacheFormHelper->create('User', ['ga_type' => GA_SEARCH]);
        $expected = '<form action="/" class="form-search" id="UserForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithoutPassingOverrides()
    {
        $this->GanacheFormHelper->create('User');
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = [];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithNavbarFormType()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = [];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithHorizontalFormType()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => ['class' => GA_CONTROL_GROUP]];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithSearchFormType()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = [];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithInlineFormType()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_INLINE]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = [];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithoutFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => ['class' => 'my-custom-class']];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithNavbarFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_NAVBAR, 'inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => false];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithHorizontalFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_HORIZONTAL, 'inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => ['class' => 'my-custom-class']];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithSearchFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_SEARCH, 'inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => false];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithInlineFormTypeAndInputDefaultsWithDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_INLINE, 'inputDefaults' => ['div' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['div' => false];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithoutFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithNavbarFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_NAVBAR, 'inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithHorizontalFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_HORIZONTAL, 'inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithSearchFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_SEARCH, 'inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($result, $expected);
    }
    public function testCreateTestInputDefaultsWithInlineFormTypeAndInputDefaultsWithoutDiv()
    {
        $this->GanacheFormHelper->create('User', ['ga_type' => GA_INLINE, 'inputDefaults' => ['label' => ['class' => 'my-custom-class']]]);
        $result = $this->GanacheFormHelper->inputDefaults();
        $expected = ['label' => ['class' => 'my-custom-class']];
        $this->assertEquals($result, $expected);
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
    public function testLabelWithRegularField()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->label('Contact.name');
        $expected = [
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label'
        ];
        $this->assertTags($result, $expected);
    }
    public function testLabelWithCheckboxField()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->label('Contact.is_active');
        $expected = [
            'label' => ['for' => 'ContactIsActive'],
            'Is Active',
            '/label'
        ];
        $this->assertTags($result, $expected);
    }

    // @todo testLabelWithOtherFormType... (SL)


    // Plain regular input without any options.
    public function testInputWithoutAnyOptions()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.name');
        $expected = [
            'div' => ['class' => 'input text'],
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            '/div'
        ];
        $this->assertTags($result, $expected);
    }
    // Plain regular input without any options and form type navbar.
    public function testInputWithoutAnyOptionsFormTypeNavbar()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->input('Contact.name');
        $expected = [
            'div' => ['class' => 'input text'],
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            '/div'
        ];
        $this->assertTags($result, $expected);
    }
    // Plain regular input without any options and form type horizontal.
    public function testInputWithoutAnyOptionsFormTypeHorizontal()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.name');
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            'label' => ['for' => 'ContactName', 'class' => GA_CONTROL_LABEL],
            'Name',
            '/label',
            ['div' => ['class' => 'controls']],
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            '/div',
            '/div'
        ];
        $this->assertTags($result, $expected);
    }
    // Plain regular input without any options and form type search.
    public function testInputWithoutAnyOptionsFormTypeSearch()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->input('Contact.name');
        $expected = [
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName', 'class' => GA_SEARCH_QUERY],
        ];
        $this->assertTags($result, $expected);
    }
    // Plain regular input without any options and form type inline.
    public function testInputWithoutAnyOptionsFormTypeInline()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_INLINE]);
        $result = $this->GanacheFormHelper->input('Contact.name');
        $expected = [
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
        ];
        $this->assertTags($result, $expected);
    }

    // Plain regular input without help string.
    public function testInputWithHelpText()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.name', ['ga_help' => 'This is a help text.']);
        $expected = [
            'div' => ['class' => 'input text'],
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            'span' => ['class' => GA_HELP_BLOCK],
            'This is a help text.',
            '/span',
            '/div'
        ];
        $this->assertTags($result, $expected);
    }
    public function testInputCheckbox()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.is_active');
        $expected = [
            'div' => ['class' => 'input checkbox'],
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'Is Active',
            '/label',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithLabelAsString()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => 'This is the label']);
        $expected = [
            'div' => ['class' => 'input checkbox'],
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'This is the label',
            '/label',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithLabelAsArrayWithTextKeyDefined()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => ['text' => 'This is my option']]);
        $expected = [
            'div' => ['class' => 'input checkbox'],
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'This is my option',
            '/label',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
}

