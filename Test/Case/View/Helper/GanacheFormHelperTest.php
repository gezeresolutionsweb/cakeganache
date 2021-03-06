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
        $expected = [GA_DEFAULT, GA_PRIMARY, GA_INFO, GA_SUCCESS, GA_WARNING, GA_DANGER, GA_INVERSE, GA_LINK];
        $this->assertEquals($result, $expected);
    }
    public function testButtonSizesArray()
    {
        $result = $this->GanacheFormHelper->buttonSizes;
        $expected = [GA_MINI, GA_SMALL, GA_LARGE];
        $this->assertEquals($result, $expected);
    }
    public function testFormTypesArray()
    {
        $result = $this->GanacheFormHelper->formTypes;
        $expected = [GA_NAVBAR => GA_NAVBAR_FORM, GA_HORIZONTAL => GA_FORM_HORIZONTAL, GA_INLINE => GA_FORM_INLINE, GA_SEARCH => GA_FORM_SEARCH];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->addButtonClasses([]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeDefault()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_type' => GA_DEFAULT]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypePrimary()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_type' => GA_PRIMARY]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeInfo()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_type' => GA_INFO]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_INFO])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeSuccess()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_type' => GA_SUCCESS]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_SUCCESS])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeWarning()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_type' => GA_WARNING]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_WARNING])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeDanger()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_type' => GA_DANGER]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_DANGER])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeInverse()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_type' => GA_INVERSE]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_INVERSE])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapTypeLink()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_type' => GA_LINK]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_LINK])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithInvalidBoostrapType()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_type' => 'super-type']);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapSizeMini()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_size' => GA_MINI]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT,  GA_BTN_MINI])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapSizeSmall()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_size' => GA_SMALL]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT, GA_BTN_SMALL])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesBoostrapSizeLarge()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_size' => GA_LARGE]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT, GA_BTN_LARGE])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithInvalidBoostrapSize()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_size' => 'super-size']);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithBoostrapSizeAndBootstrapTypeDefined()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['ga_size' => GA_MINI, 'ga_type' => GA_PRIMARY]);
        $expected = ['class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY, GA_BTN_MINI])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithExtraAttribute()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['id' => 'my-super-id']);
        $expected = ['id' => 'my-super-id', 'class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT])];
        $this->assertEquals($result, $expected);
    }
    public function testAddButtonClassesWithExtraClass()
    {
        $result = $this->GanacheFormHelper->addButtonClasses(['class' => 'my-super-class']);
        $expected = ['class' => implode(' ', ['my-super-class', GA_BTN, GA_BTN_DEFAULT])];
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
            'span' => ['class' => GA_HELP_BLOCK],
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
            'span' => ['class' => GA_HELP_INLINE],
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
    public function testInputWithoutAnyOptionsFormTypeNavbar()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->input('Contact.name');
        $expected = [
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
        ];
        $this->assertTags($result, $expected);
    }
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
    public function testInputWithoutAnyOptionsFormTypeSearch()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->input('Contact.name');
        $expected = [
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName', 'class' => GA_SEARCH_QUERY],
        ];
        $this->assertTags($result, $expected);
    }
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
    public function testInputWithHelpTextFormTypeHorizontal()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.name', ['ga_help' => 'This is a help text.']);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            'label' => ['for' => 'ContactName', 'class' => GA_CONTROL_LABEL],
            'Name',
            '/label',
            ['div' => ['class' => GA_CONTROLS]],
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            'span' => ['class' => GA_HELP_BLOCK],
            'This is a help text.',
            '/span',
            '/div',
            '/div'
        ];
        $this->assertTags($result, $expected);
    }
    public function testInputWithPrepend()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.name', ['prepend' => 'name']);
        $expected = [
            'div' => ['class' => 'input text'],
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label',
            ['div' => ['class' => GA_INPUT_PREPEND]],
            ['span' => ['class' => GA_ADD_ON]],
            'name',
            '/span',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputWithPrependFormTypeHorizontal()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.name', ['prepend' => 'name']);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            'label' => ['for' => 'ContactName', 'class' => GA_CONTROL_LABEL],
            'Name',
            '/label',
            ['div' => ['class' => GA_CONTROLS]],
            ['div' => ['class' => GA_INPUT_PREPEND]],
            ['span' => ['class' => GA_ADD_ON]],
            'name',
            '/span',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            '/div',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputWithAppend()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.name', ['append' => 'name']);
        $expected = [
            'div' => ['class' => 'input text'],
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label',
            ['div' => ['class' => GA_INPUT_APPEND]],
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            ['span' => ['class' => GA_ADD_ON]],
            'name',
            '/span',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputWithAppendFormTypeHorizontal()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.name', ['append' => 'name']);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            'label' => ['for' => 'ContactName', 'class' => GA_CONTROL_LABEL],
            'Name',
            '/label',
            ['div' => ['class' => GA_CONTROLS]],
            ['div' => ['class' => GA_INPUT_APPEND]],
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            ['span' => ['class' => GA_ADD_ON]],
            'name',
            '/span',
            '/div',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputWithPrependAndAppend()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.name', ['append' => 'name', 'prepend' => 'namep']);
        $expected = [
            'div' => ['class' => 'input text'],
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label',
            ['div' => ['class' => implode(' ', [GA_INPUT_PREPEND, GA_INPUT_APPEND])]],
            ['span' => ['class' => GA_ADD_ON]],
            'namep',
            '/span',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            ['span' => ['class' => GA_ADD_ON]],
            'name',
            '/span',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputWithAppendAndPrependFormTypeHorizontal()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.name', ['append' => 'name', 'prepend' => 'namep']);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            'label' => ['for' => 'ContactName', 'class' => GA_CONTROL_LABEL],
            'Name',
            '/label',
            ['div' => ['class' => GA_CONTROLS]],
            ['div' => ['class' => implode(' ', [GA_INPUT_PREPEND, GA_INPUT_APPEND])]],
            ['span' => ['class' => GA_ADD_ON]],
            'namep',
            '/span',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            ['span' => ['class' => GA_ADD_ON]],
            'name',
            '/span',
            '/div',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputWithIcon()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.name', ['ga_icon' => 'home']);
        $expected = [
            'div' => ['class' => 'input text'],
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label',
            ['div' => ['class' => GA_INPUT_PREPEND]],
            ['span' => ['class' => GA_ADD_ON]],
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i',
            '/span',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputWithIconFormTypeHorizontal()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.name', ['ga_icon' => 'home']);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            'label' => ['for' => 'ContactName', 'class' => GA_CONTROL_LABEL],
            'Name',
            '/label',
            ['div' => ['class' => GA_CONTROLS]],
            ['div' => ['class' => GA_INPUT_PREPEND]],
            ['span' => ['class' => GA_ADD_ON]],
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i',
            '/span',
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            '/div',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputWithIconAfter()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.name', ['ga_icon' => 'home', 'ga_icon_after' => true]);
        $expected = [
            'div' => ['class' => 'input text'],
            'label' => ['for' => 'ContactName'],
            'Name',
            '/label',
            ['div' => ['class' => GA_INPUT_APPEND]],
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            ['span' => ['class' => GA_ADD_ON]],
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i',
            '/span',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputWithIconAfterFormTypeHorizontal()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.name', ['ga_icon' => 'home', 'ga_icon_after' => true]);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            'label' => ['for' => 'ContactName', 'class' => GA_CONTROL_LABEL],
            'Name',
            '/label',
            ['div' => ['class' => GA_CONTROLS]],
            ['div' => ['class' => GA_INPUT_APPEND]],
            'input' => ['name' => 'data[Contact][name]', 'maxlength' => 255, 'type' => 'text', 'id' => 'ContactName'],
            ['span' => ['class' => GA_ADD_ON]],
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i',
            '/span',
            '/div',
            '/div',
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
    public function testInputCheckboxWithLabelFalse()
    {
        $this->GanacheFormHelper->create('Contact');
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => false]);
        $expected = [
            'div' => ['class' => 'input checkbox'],
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            '/label',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithNavbarFormType()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->input('Contact.is_active');
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'Is Active',
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithNavbarFormTypeAndLabelAsString()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => 'My custom label']);
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'My custom label',
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithNavbarFormTypeAndLabelAsArrayWithTextKeyDefined()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => ['text' => 'My new label']]);
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'My new label',
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithNavbarFormTypeAndLabelFalse()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => false]);
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithHorizontalFormType()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.is_active');
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            ['div' => ['class' => GA_CONTROLS]],
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'Is Active',
            '/label',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithHorizontalFormTypeAndLabelAsString()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => 'My super label']);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            ['div' => ['class' => GA_CONTROLS]],
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'My super label',
            '/label',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithHorizontalFormTypeAndLabelAsArrayWithTextKeyDefined()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => ['text' => 'My super label']]);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            ['div' => ['class' => GA_CONTROLS]],
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'My super label',
            '/label',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithHorizontalFormTypeAndLabelFalse()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => false]);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            ['div' => ['class' => GA_CONTROLS]],
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            '/label',
            '/div',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithSearchFormType()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->input('Contact.is_active');
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'Is Active',
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithSearchFormTypeAndLabelAsString()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => 'My custom label']);
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'My custom label',
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithSearchFormTypeAndLabelAsArrayTextKeyDefined()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => ['text' => 'My custom label']]);
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'My custom label',
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithSearchFormTypeAndLabelFalse()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => false]);
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithInlineFormType()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_INLINE]);
        $result = $this->GanacheFormHelper->input('Contact.is_active');
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'Is Active',
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithInlineFormTypeAndLabelAsString()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_INLINE]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => 'My custom label']);
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'My custom label',
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithInlineFormTypeAndLabelAsArrayTextKeyDefined()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_INLINE]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => ['text' => 'My custom label']]);
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            'My custom label',
            '/label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testInputCheckboxWithInlineFormTypeAndLabelFalse()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_INLINE]);
        $result = $this->GanacheFormHelper->input('Contact.is_active', ['label' => false]);
        $expected = [
            'label' => ['for' => 'ContactIsActive', 'class' => 'checkbox'],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'hidden', 'id' => 'ContactIsActive_', 'value' => 0]],
            ['input' => ['name' => 'data[Contact][is_active]', 'type' => 'checkbox', 'id' => 'ContactIsActive', 'value' => 1]],
            '/label',
        ];

        $this->assertTags($result, $expected);
    }



    // @todo testing with radio input type. We don't use it a lot right now so we push the testing later on (SL)
    public function testGenerateButtonTitleWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->generateButtonTitle('My label');
        $expected = [
            'My label',
        ];

        $this->assertTags($result, $expected);
    }
    
    public function testGenerateButtonTitleWithIcon()
    {
        $result = $this->GanacheFormHelper->generateButtonTitle('My label', ['ga_icon' => 'home']);
        $expected = [
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i',
            ' ',
            'My label',
        ];

        $this->assertTags($result, $expected);
    }
    public function testGenerateButtonTitleWithIconAfter()
    {
        $result = $this->GanacheFormHelper->generateButtonTitle('My label', ['ga_icon' => 'home', 'ga_icon_after' => true]);
        $expected = [
            'My label',
            ' ',
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i',
        ];

        $this->assertTags($result, $expected);
    }
    public function testGenerateButtonTitleWithEmptyTitle()
    {
        $result = $this->GanacheFormHelper->generateButtonTitle('');
        $expected = [
        ];

        $this->assertTags($result, $expected);
    }
    public function testGenerateButtonTitleWithEmptyTitleAndIcon()
    {
        $result = $this->GanacheFormHelper->generateButtonTitle('', ['ga_icon' => 'home']);
        $expected = [
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i'
        ];

        $this->assertTags($result, $expected);
    }
    public function testGenerateButtonTitleWithEmptyTitleAndIconAfter()
    {
        $result = $this->GanacheFormHelper->generateButtonTitle('', ['ga_icon' => 'home', 'ga_icon_after' => true]);
        $expected = [
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i'
        ];

        $this->assertTags($result, $expected);
    }

    public function testButtonWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->button('My label');
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonTypeDefault()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_type' => GA_DEFAULT]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonTypePrimary()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_type' => GA_PRIMARY]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonTypeInfo()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_type' => GA_INFO]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_INFO]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonTypeSuccess()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_type' => GA_SUCCESS]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_SUCCESS]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonTypeWarning()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_type' => GA_WARNING]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_WARNING]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonTypeDanger()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_type' => GA_DANGER]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DANGER]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonTypeInverse()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_type' => GA_INVERSE]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_INVERSE]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonTypeLink()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_type' => GA_LINK]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_LINK]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }

    public function testButtonWithInvalidBoostrapType()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_type' => 'super-type']);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit'],
            'My label',
            '/button'
        ];
        $this->assertTags($result, $expected);
    }
    public function testButtonBoostrapSizeMini()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_size' => GA_MINI]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT, GA_BTN_MINI]), 'type' => 'submit'],
            'My label',
            '/button'
        ];
        $this->assertTags($result, $expected);
    }
    public function testButtonBoostrapSizeSmall()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_size' => GA_SMALL]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT, GA_BTN_SMALL]), 'type' => 'submit'],
            'My label',
            '/button'
        ];
        $this->assertTags($result, $expected);
    }
    public function testButtonBoostrapSizeLarge()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_size' => GA_LARGE]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT, GA_BTN_LARGE]), 'type' => 'submit'],
            'My label',
            '/button'
        ];
        $this->assertTags($result, $expected);
    }
    public function testButtonWithInvalidBoostrapSize()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_size' => 'super-size']);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit'],
            'My label',
            '/button'
        ];
        $this->assertTags($result, $expected);
    }
    public function testButtonWithBoostrapSizeAndBootstrapTypeDefined()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_size' => GA_MINI, 'ga_type' => GA_PRIMARY]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY, GA_BTN_MINI]), 'type' => 'submit'],
            'My label',
            '/button'
        ];
        $this->assertTags($result, $expected);
    }

    public function testButtonWithExtraClass()
    {
        $result = $this->GanacheFormHelper->button('My label', ['class' => 'my-custom-class']);
        $expected = [
            'button' => ['class' => implode(' ', ['my-custom-class', GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonWithExtraAttribute()
    {
        $result = $this->GanacheFormHelper->button('My label', ['id' => 'my-custom-id']);
        $expected = [
            'button' => ['id' => 'my-custom-id', 'class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonWithTypeButton()
    {
        $result = $this->GanacheFormHelper->button('My label', ['type' => 'button']);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'button'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonWithTypeReset()
    {
        $result = $this->GanacheFormHelper->button('My label', ['type' => 'reset']);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'reset'],
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }

    public function testButtonGroupWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->buttonGroup([]);
        $expected = [
            'div' => ['class' => GA_BTN_GROUP],
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonGroupWithOneButton()
    {
        $result = $this->GanacheFormHelper->buttonGroup([$this->GanacheFormHelper->button('Save')]);
        $expected = [
            'div' => ['class' => GA_BTN_GROUP],
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit'],
            'Save',
            '/button',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonGroupWithTwoButtons()
    {
        $result = $this->GanacheFormHelper->buttonGroup([
            $this->GanacheFormHelper->button('Save', ['ga_type' => GA_PRIMARY]),
            $this->GanacheFormHelper->button('Clear', ['type' => 'reset'])
        ]);
        $expected = [
            'div' => ['class' => GA_BTN_GROUP],
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY]), 'type' => 'submit'],
            'Save',
            '/button',
            ['button' => ['type' => 'reset', 'class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT])]],
            'Clear',
            '/button',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonGroupVertical()
    {
        $result = $this->GanacheFormHelper->buttonGroup([
            $this->GanacheFormHelper->button('Save', ['ga_type' => GA_PRIMARY]),
            $this->GanacheFormHelper->button('Clear', ['type' => 'reset'])
        ], ['ga_vertical' => true]);
        $expected = [
            'div' => ['class' => implode(' ', [GA_BTN_GROUP, GA_BTN_GROUP_VERTICAL])],
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY]), 'type' => 'submit'],
            'Save',
            '/button',
            ['button' => ['type' => 'reset', 'class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT])]],
            'Clear',
            '/button',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }

    public function testButtonToolbarWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->buttonToolbar([]);
        $expected = [
            'div' => ['class' => GA_BTN_TOOLBAR],
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonToolbarWithOneButton()
    {
        $result = $this->GanacheFormHelper->buttonToolbar([
            $this->GanacheFormHelper->button('Copy', ['type' => 'button', 'ga_type' => GA_PRIMARY])
        ]);
        $expected = [
            'div' => ['class' => GA_BTN_TOOLBAR],
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY]), 'type' => 'button'],
            'Copy',
            '/button',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonToolbarWithTwoButton()
    {
        $result = $this->GanacheFormHelper->buttonToolbar([
            $this->GanacheFormHelper->button('Copy', ['type' => 'button', 'ga_type' => GA_PRIMARY]),
            $this->GanacheFormHelper->button('Edit', ['type' => 'button'])
        ]);
        $expected = [
            'div' => ['class' => GA_BTN_TOOLBAR],
            'button' => ['type' => 'button', 'class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY])],
            'Copy',
            '/button',
            ['button' => ['type' => 'button', 'class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT])]],
            'Edit',
            '/button',
            '/div'
        ];

        $this->assertTags($result, $expected);
    }

    public function testButtonWithIcon()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_icon' => 'home']);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit'],
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i',
            ' ',
            'My label',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }
    public function testButtonWithIconAfter()
    {
        $result = $this->GanacheFormHelper->button('My label', ['ga_icon' => 'home', 'ga_icon_after' => true]);
        $expected = [
            'button' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit'],
            'My label',
            ' ',
            'i' => ['class' => 'glyphicon glyphicon-home'],
            '/i',
            '/button'
        ];

        $this->assertTags($result, $expected);
    }

    // @todo testing with dropdown button. We don't use it a lot right now so we push the testing later on (SL)

    public function testSubmitWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->submit('Submit', []);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapTypeDefault()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_type' => GA_DEFAULT]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapTypePrimary()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_type' => GA_PRIMARY]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapTypeInfo()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_type' => GA_INFO]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_INFO]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapTypeSuccess()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_type' => GA_SUCCESS]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_SUCCESS]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapTypeWarning()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_type' => GA_WARNING]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_WARNING]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapTypeDanger()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_type' => GA_DANGER]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_DANGER]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapTypeInverse()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_type' => GA_INVERSE]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_INVERSE]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapTypeLink()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_type' => GA_LINK]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_LINK]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitWithInvalidBoostrapType()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_type' => 'super-type']);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapSizeMini()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_size' => GA_MINI]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT, GA_BTN_MINI]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapSizeSmall()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_size' => GA_SMALL]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT, GA_BTN_SMALL]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitBoostrapSizeLarge()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_size' => GA_LARGE]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT, GA_BTN_LARGE]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitWithInvalidBoostrapSize()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_size' => 'super-size']);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitWithBoostrapSizeAndBootstrapTypeDefined()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['ga_size' => GA_MINI, 'ga_type' => GA_PRIMARY]);
        $expected = [
            'input' => ['class' => implode(' ', [GA_BTN, GA_BTN_PRIMARY, GA_BTN_MINI]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitWithExtraAttribute()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['id' => 'my-super-id']);
        $expected = [
            'input' => ['id' => 'my-super-id', 'class' => implode(' ', [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }
    public function testSubmitWithExtraClass()
    {
        $result = $this->GanacheFormHelper->submit('Submit', ['class' => 'my-super-class']);
        $expected = [
            'input' => ['class' => implode(' ', ['my-super-class', GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Submit']
        ];
        $this->assertTags($result, $expected);
    }





    public function testEndWithoutAnyOptions()
    {
        $result = $this->GanacheFormHelper->end();
        $expected = [
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithLabelAsString()
    {
        $result = $this->GanacheFormHelper->end('Save');
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Save'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithLabelAsStringFormInline()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_INLINE]);
        $result = $this->GanacheFormHelper->end('Save');
        $expected = [
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Save'],
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithLabelAsStringFormSearch()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_SEARCH]);
        $result = $this->GanacheFormHelper->end('Save');
        $expected = [
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Save'],
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithLabelAsStringFormNavbar()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_NAVBAR]);
        $result = $this->GanacheFormHelper->end('Save');
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Save'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithLabelAsStringFormhorizontal()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->end('Save');
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            ['div' => ['class' => GA_CONTROLS]],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Save'],
            '/div',
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithArrayLabelKeyDefinedAsString()
    {
        $result = $this->GanacheFormHelper->end(['label' => 'Save it']);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Save it'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithArrayLabelKeyDefinedAsStringFormHorizontal()
    {
        $this->GanacheFormHelper->create('Contact', ['ga_type' => GA_HORIZONTAL]);
        $result = $this->GanacheFormHelper->end(['label' => 'Save it']);
        $expected = [
            'div' => ['class' => GA_CONTROL_GROUP],
            ['div' => ['class' => GA_CONTROLS]],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Save it'],
            '/div',
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithTypeDefault()
    {
        $result = $this->GanacheFormHelper->end(['ga_type' => GA_DEFAULT]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithTypePrimary()
    {
        $result = $this->GanacheFormHelper->end(['ga_type' => GA_PRIMARY]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_PRIMARY]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithTypeInfo()
    {
        $result = $this->GanacheFormHelper->end(['ga_type' => GA_INFO]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_INFO]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithTypeSuccess()
    {
        $result = $this->GanacheFormHelper->end(['ga_type' => GA_SUCCESS]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_SUCCESS]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithTypeWarning()
    {
        $result = $this->GanacheFormHelper->end(['ga_type' => GA_WARNING]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_WARNING]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithTypeDanger()
    {
        $result = $this->GanacheFormHelper->end(['ga_type' => GA_DANGER]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DANGER]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithTypeInverse()
    {
        $result = $this->GanacheFormHelper->end(['ga_type' => GA_INVERSE]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_INVERSE]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithTypeLink()
    {
        $result = $this->GanacheFormHelper->end(['ga_type' => GA_LINK]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_LINK]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithInvalidType()
    {
        $result = $this->GanacheFormHelper->end(['ga_type' => 'invalid type']);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithSizeMini()
    {
        $result = $this->GanacheFormHelper->end(['ga_size' => GA_MINI]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT, GA_BTN_MINI]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithSizeSmall()
    {
        $result = $this->GanacheFormHelper->end(['ga_size' => GA_SMALL]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT, GA_BTN_SMALL]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithSizeLarge()
    {
        $result = $this->GanacheFormHelper->end(['ga_size' => GA_LARGE]);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT, GA_BTN_LARGE]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
    public function testEndWithInvalidSize()
    {
        $result = $this->GanacheFormHelper->end(['ga_size' => 'invalid size']);
        $expected = [
            'div' => ['class' => GA_FORM_ACTIONS],
            'input' => ['class' => implode(' ',  [GA_BTN, GA_BTN_DEFAULT]), 'type' => 'submit', 'value' => 'Submit'],
            '/div',
            '/form'
        ];
        $this->assertTags($result, $expected);
    }
}

