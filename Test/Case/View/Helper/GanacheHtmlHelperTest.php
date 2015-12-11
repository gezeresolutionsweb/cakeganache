<?php
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('GanacheHtmlHelper', 'CakeGanache.View/Helper');


class GanacheHtmlHelperTest extends CakeTestCase
{
    public function setUp()
    {
        parent::setUp();
        $Controller = new Controller();
        $View = new View($Controller);
        $this->GanacheHtmlHelper = new GanacheHtmlHelper($View);
    }

    public function testSimpleIconWithCustomPrefix()
    {
        $Controller = new Controller();
        $View = new View($Controller);
        $ganacheHtmlHelper = new GanacheHtmlHelper($View, ['prefix' => 'fa']);
        $result = $ganacheHtmlHelper->icon('home');
        $expected = '<i class="fa fa-home"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testSimpleIconSizeLgWithCustomPrefix()
    {
        $Controller = new Controller();
        $View = new View($Controller);
        $ganacheHtmlHelper = new GanacheHtmlHelper($View, ['prefix' => 'fa']);
        $result = $ganacheHtmlHelper->icon('home', ['ga_size' => GA_LG]);
        $expected = '<i class="fa fa-home fa-lg"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testSimpleIcon()
    {
        $result = $this->GanacheHtmlHelper->icon('home');
        $expected = '<i class="glyphicon glyphicon-home"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testIconSizeLg()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_LG]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-lg"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testIconSize1x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_1X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-1x"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testIconSize2x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_2X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-2x"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testIconSize3x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_3X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-3x"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testIconSize4x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_4X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-4x"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testIconSize5x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_5X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-5x"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testIconSpin()
    {
        $result = $this->GanacheHtmlHelper->icon('spinner', ['ga_spin' => true]);
        $expected = '<i class="glyphicon glyphicon-spinner glyphicon-spin"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testIconWithClassAttributeAsString()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['class' => 'spinorama']);
        $expected = '<i class="glyphicon glyphicon-home spinorama"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testIconWithClassAttributeAsArray()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['class' => ['spinorama', 'spinoranissima']]);
        $expected = '<i class="glyphicon glyphicon-home spinorama spinoranissima"></i>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/');
        $expected = '<a href="/" class="btn btn-default" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonWithUrlAsArray()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', ['plugin' => 'admin', 'controller' => 'admin', 'action' => 'manage']);
        $expected = '<a href="/admin/admin/manage" class="btn btn-default" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonWithTitleAttribute()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['title' => 'My super home']);
        $expected = '<a href="/" class="btn btn-default" title="My super home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonTypeDefault()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_DEFAULT]);
        $expected = '<a href="/" class="btn btn-default" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonTypePrimary()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_PRIMARY]);
        $expected = '<a href="/" class="btn btn-primary" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_INFO]);
        $expected = '<a href="/" class="btn btn-info" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_SUCCESS]);
        $expected = '<a href="/" class="btn btn-success" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_WARNING]);
        $expected = '<a href="/" class="btn btn-warning" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonTypeDanger()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_DANGER]);
        $expected = '<a href="/" class="btn btn-danger" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonTypeInverse()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_INVERSE]);
        $expected = '<a href="/" class="btn btn-inverse" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonTypeLink()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_LINK]);
        $expected = '<a href="/" class="btn btn-link" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonSizeMini()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_size' => GA_MINI]);
        $expected = '<a href="/" class="btn btn-default btn-mini" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonSizeSmall()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_size' => GA_SMALL]);
        $expected = '<a href="/" class="btn btn-default btn-small" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonLarge()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_size' => GA_LARGE]);
        $expected = '<a href="/" class="btn btn-default btn-large" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonSizeBlock()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_size' => GA_BLOCK]);
        $expected = '<a href="/" class="btn btn-default btn-block" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }
    
    public function testLinkButtonWithCustomClassAsString()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['class' => 'special-button']);
        $expected = '<a href="/" class="btn btn-default special-button" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonWithTwoCustomClassAsString()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['class' => 'special-button special-button-order']);
        $expected = '<a href="/" class="btn btn-default special-button special-button-order" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonWithCustomClassAsArray()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['class' => ['special-button']]);
        $expected = '<a href="/" class="btn btn-default special-button" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonWithTwoCustomClassAsArray()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['class' => ['special-button', 'special-button-order']]);
        $expected = '<a href="/" class="btn btn-default special-button special-button-order" title="home">home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonWithIcon()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_icon' => 'home']);
        $expected = '<a href="/" class="btn btn-default" title="home"><i class="glyphicon glyphicon-home"></i> home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonWithIconAndSpinOption()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_icon' => 'home', 'ga_icon_options' => ['ga_spin' => true]]);
        $expected = '<a href="/" class="btn btn-default" title="home"><i class="glyphicon glyphicon-home glyphicon-spin"></i> home</a>';
        $this->assertEquals($expected, $result);
    }

    public function testLinkButtonWithIconAndSize1x()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_icon' => 'home', 'ga_icon_options' => ['ga_size' => GA_1X]]);
        $expected = '<a href="/" class="btn btn-default" title="home"><i class="glyphicon glyphicon-home glyphicon-1x"></i> home</a>';
        $this->assertEquals($expected, $result);
    }
    public function testLinkButtonWithConfirmMessage()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['confirm' => 'Really wanna do this ?']);
        $expected = '<a href="/" class="btn btn-default" title="home" onclick="if (confirm(&quot;Really wanna do this ?&quot;)) { return true; } return false;">home</a>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->label('Home');
        $expected = '<span class="label label-default">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelTypeDefault()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_DEFAULT]);
        $expected = '<span class="label label-default">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_SUCCESS]);
        $expected = '<span class="label label-success">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_WARNING]);
        $expected = '<span class="label label-warning">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_INFO]);
        $expected = '<span class="label label-info">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelTypeImportant()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_IMPORTANT]);
        $expected = '<span class="label label-important">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelTypeInverse()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_INVERSE]);
        $expected = '<span class="label label-inverse">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelWithInvalidType()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => 'invalid_type']);
        $expected = '<span class="label label-default">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelWithIcon()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_icon' => 'home']);
        $expected = '<span class="label label-default"><i class="glyphicon glyphicon-home"></i> Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelWithIconAndIconOptions()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_icon' => 'home', 'ga_icon_options' => ['ga_size' => GA_LG]]);
        $expected = '<span class="label label-default"><i class="glyphicon glyphicon-home glyphicon-lg"></i> Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testLabelWithCustomClassAsString()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['class' => 'custom-class']);
        $expected = '<span class="custom-class label label-default">Home</span>';
        $this->assertEquals($expected, $result);
    }
}

