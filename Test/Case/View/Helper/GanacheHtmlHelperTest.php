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

    public function testBadgeTypeDefault()

    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_DEFAULT]);
        $expected = '<span class="badge badge-default">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testBadgeTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_SUCCESS]);
        $expected = '<span class="badge badge-success">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testBadgeTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_WARNING]);
        $expected = '<span class="badge badge-warning">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testBadgeTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_INFO]);
        $expected = '<span class="badge badge-info">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testBadgeTypeImportant()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_IMPORTANT]);
        $expected = '<span class="badge badge-important">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testBadgeTypeInverse()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_INVERSE]);
        $expected = '<span class="badge badge-inverse">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testBadgeWithInvalidType()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => 'invalid_type']);
        $expected = '<span class="badge badge-default">Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testBadgeWithIcon()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_icon' => 'home']);
        $expected = '<span class="badge badge-default"><i class="glyphicon glyphicon-home"></i> Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testBadgeWithIconAndIconOptions()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_icon' => 'home', 'ga_icon_options' => ['ga_size' => GA_LG]]);
        $expected = '<span class="badge badge-default"><i class="glyphicon glyphicon-home glyphicon-lg"></i> Home</span>';
        $this->assertEquals($expected, $result);
    }
    public function testBadgeWithCustomClassAsString()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['class' => 'custom-class']);
        $expected = '<span class="custom-class badge badge-default">Home</span>';
        $this->assertEquals($expected, $result);
    }

    public function testGetCrumbListWithoutOptionsAndNoCrumb()
    {
        $result = $this->GanacheHtmlHelper->getCrumbList();
        $this->assertNull($result);
    }
    public function testGetCrumbListWithCustomStartText()
    {
        $result = $this->GanacheHtmlHelper->getCrumbList([], 'Home');
        $expected = '<ul class="breadcrumb"><li class="first"><a href="/">Home</a></li></ul>';
        $this->assertEquals($expected, $result);
    }
    public function testGetCrumbListWithOneCrumb()
    {
        $this->GanacheHtmlHelper->addCrumb('Home');
        $result = $this->GanacheHtmlHelper->getCrumbList();
        $expected = '<ul class="breadcrumb"><li class="first">Home</li></ul>';
        $this->assertEquals($expected, $result);
    }
    public function testGetCrumbListWithTwoCrumbs()
    {
        $this->GanacheHtmlHelper->addCrumb('Home')->addCrumb('Dashboard');
        $result = $this->GanacheHtmlHelper->getCrumbList();
        $expected = '<ul class="breadcrumb"><li class="first">Home<span class="divider">/</span></li><li class="last">Dashboard</li></ul>';
        $this->assertEquals($expected, $result);
    }
    public function testGetCrumbListWithThreeCrumbs()
    {
        $this->GanacheHtmlHelper->addCrumb('Home')->addCrumb('Dashboard')->addCrumb('Access');
        $result = $this->GanacheHtmlHelper->getCrumbList();
        $expected = '<ul class="breadcrumb"><li class="first">Home<span class="divider">/</span></li><li>Dashboard<span class="divider">/</span></li><li class="last">Access</li></ul>';
        $this->assertEquals($expected, $result);
    }
    public function testGetCrumbListWithCustomSeparator()
    {
        $this->GanacheHtmlHelper->addCrumb('Home')->addCrumb('Dashboard');
        $result = $this->GanacheHtmlHelper->getCrumbList(['ga_separator' => '#']);
        $expected = '<ul class="breadcrumb"><li class="first">Home<span class="divider">#</span></li><li class="last">Dashboard</li></ul>';
        $this->assertEquals($expected, $result);
    }
    public function testGetCrumbListWithStartTextAndThreeCrumbAndCustomSeparator()
    {
        $this->GanacheHtmlHelper->addCrumb('Dashboard')->addCrumb('Access')->addCrumb('Logs');
        $result = $this->GanacheHtmlHelper->getCrumbList(['ga_separator' => '#'], 'Home');
        $expected = '<ul class="breadcrumb"><li class="first"><a href="/">Home</a><span class="divider">#</span></li><li>Dashboard<span class="divider">#</span></li><li>Access<span class="divider">#</span></li><li class="last">Logs</li></ul>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !');
        $expected = '<div class="alert alert-warning"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertWithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['class' => 'custom-class']);
        $expected = '<div class="custom-class alert alert-warning"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertBlock()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_block' => true]);
        $expected = '<div class="alert alert-block alert-warning"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertTypeDefault()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_DEFAULT]);
        $expected = '<div class="alert alert-default"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_SUCCESS]);
        $expected = '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertTypeError()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_ERROR]);
        $expected = '<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_WARNING]);
        $expected = '<div class="alert alert-warning"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_INFO]);
        $expected = '<div class="alert alert-info"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertTypeImportant()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_IMPORTANT]);
        $expected = '<div class="alert alert-important"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testAlertTypeInverse()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_INVERSE]);
        $expected = '<div class="alert alert-inverse"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithoutBasicPercentage()
    {
        $result = $this->GanacheHtmlHelper->progress(10);
        $expected = '<div class="progress progress-info"><div style="width: 10%;" class="bar"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithStriped()
    {
        $result = $this->GanacheHtmlHelper->progress(10, ['ga_striped' => true]);
        $expected = '<div class="progress progress-info progress-striped"><div style="width: 10%;" class="bar"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithActive()
    {
        $result = $this->GanacheHtmlHelper->progress(10, ['ga_active' => true]);
        $expected = '<div class="progress progress-info active"><div style="width: 10%;" class="bar"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithStripedAndActive()
    {
        $result = $this->GanacheHtmlHelper->progress(10, ['ga_striped' => true, 'ga_active' => true]);
        $expected = '<div class="progress progress-info progress-striped active"><div style="width: 10%;" class="bar"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->progress(20, ['ga_type' => GA_INFO]);
        $expected = '<div class="progress progress-info"><div style="width: 20%;" class="bar"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->progress(20, ['ga_type' => GA_SUCCESS]);
        $expected = '<div class="progress progress-success"><div style="width: 20%;" class="bar"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->progress(20, ['ga_type' => GA_WARNING]);
        $expected = '<div class="progress progress-warning"><div style="width: 20%;" class="bar"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressTypeDanger()
    {
        $result = $this->GanacheHtmlHelper->progress(20, ['ga_type' => GA_DANGER]);
        $expected = '<div class="progress progress-danger"><div style="width: 20%;" class="bar"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithTwoBasicBarBothAsString()
    {
        $result = $this->GanacheHtmlHelper->progress([10,35]);
        $expected = '<div class="progress"><div style="width: 10%;" class="bar bar-info"></div><div style="width: 35%;" class="bar bar-info"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithTwoBasicBarFirstAsStringSecondAsArray()
    {
        $result = $this->GanacheHtmlHelper->progress([20,['ga_width' => 40]]);
        $expected = '<div class="progress"><div style="width: 20%;" class="bar bar-info"></div><div style="width: 40%;" class="bar bar-info"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithTwoBasicBarBothAsArray()
    {
        $result = $this->GanacheHtmlHelper->progress([['ga_width' => 25],['ga_width' => 45]]);
        $expected = '<div class="progress"><div style="width: 25%;" class="bar bar-info"></div><div style="width: 45%;" class="bar bar-info"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithTwoBarsFirstTypeInfoAndSecondTypeDefault()
    {
        $result = $this->GanacheHtmlHelper->progress([['ga_width' => 15, 'ga_type' => GA_DANGER],['ga_width' => 65]]);
        $expected = '<div class="progress"><div style="width: 15%;" class="bar bar-danger"></div><div style="width: 65%;" class="bar bar-info"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithTwoBarsFirstTypeSuccessAndSecondTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->progress([['ga_width' => 10, 'ga_type' => GA_SUCCESS],['ga_width' => 90, 'ga_type' => GA_WARNING]]);
        $expected = '<div class="progress"><div style="width: 10%;" class="bar bar-success"></div><div style="width: 90%;" class="bar bar-warning"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithThreeBars()
    {
        $result = $this->GanacheHtmlHelper->progress([['ga_width' => 12, 'ga_type' => GA_SUCCESS],['ga_width' => 40, 'ga_type' => GA_WARNING], ['ga_width' => 48, 'ga_type' => GA_DANGER]]);
        $expected = '<div class="progress"><div style="width: 12%;" class="bar bar-success"></div><div style="width: 40%;" class="bar bar-warning"></div><div style="width: 48%;" class="bar bar-danger"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithTwoBasicBarAndStriped()
    {
        $result = $this->GanacheHtmlHelper->progress([23,47], ['ga_striped' => true]);
        $expected = '<div class="progress progress-striped"><div style="width: 23%;" class="bar bar-info"></div><div style="width: 47%;" class="bar bar-info"></div></div>';
        $this->assertEquals($expected, $result);
    }

    public function testProgressWithTwoBasicBarAndActive()
    {
        $result = $this->GanacheHtmlHelper->progress([23,47], ['ga_active' => true]);
        $expected = '<div class="progress active"><div style="width: 23%;" class="bar bar-info"></div><div style="width: 47%;" class="bar bar-info"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testProgressWithTwoBasicBarAndStripedAndActive()
    {
        $result = $this->GanacheHtmlHelper->progress([23,47], ['ga_striped' => true, 'ga_active' => true]);
        $expected = '<div class="progress progress-striped active"><div style="width: 23%;" class="bar bar-info"></div><div style="width: 47%;" class="bar bar-info"></div></div>';
        $this->assertEquals($expected, $result);
    }
    public function testCloseIconAsButton()
    {
        $result = $this->GanacheHtmlHelper->closeIcon();
        $expected = '<button class="close">&times;</button>';
        $this->assertEquals($expected, $result);
    }
    public function testCloseIconAsLink()
    {
        $result = $this->GanacheHtmlHelper->closeIcon(true);
        $expected = '<a href="#" class="close">&times;</a>';
        $this->assertEquals($expected, $result);
    }
    public function testCloseIconWithOptions()
    {
        $result = $this->GanacheHtmlHelper->closeIcon(true, ['data-dismiss' => 'modal', 'aria-hidden' => 'true']);
        $expected = '<a href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>';
        $this->assertEquals($expected, $result);
    }
    public function testHtmlWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->html();
        $expected = '<!DOCTYPE html>' . PHP_EOL;
        $expected .= '<html lang="en">' . PHP_EOL;
        $expected .= '<head>' . PHP_EOL;
        $expected .= '<meta charset="utf-8"/>' . PHP_EOL;
        $expected .= '<title></title>' . PHP_EOL;
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>' . PHP_EOL;
        $expected .= '<meta name="description" content=""/>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testHtmlWithTitle()
    {
        $result = $this->GanacheHtmlHelper->html('My title');
        $expected = '<!DOCTYPE html>' . PHP_EOL;
        $expected .= '<html lang="en">' . PHP_EOL;
        $expected .= '<head>' . PHP_EOL;
        $expected .= '<meta charset="utf-8"/>' . PHP_EOL;
        $expected .= '<title>My title</title>' . PHP_EOL;
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>' . PHP_EOL;
        $expected .= '<meta name="description" content=""/>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testHtmlWithDescription()
    {
        $result = $this->GanacheHtmlHelper->html('My title', 'This is my description');
        $expected = '<!DOCTYPE html>' . PHP_EOL;
        $expected .= '<html lang="en">' . PHP_EOL;
        $expected .= '<head>' . PHP_EOL;
        $expected .= '<meta charset="utf-8"/>' . PHP_EOL;
        $expected .= '<title>My title</title>' . PHP_EOL;
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>' . PHP_EOL;
        $expected .= '<meta name="description" content="This is my description"/>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testHtmlWithLanguage()
    {
        $result = $this->GanacheHtmlHelper->html('My title', 'This is my description', 'fr');
        $expected = '<!DOCTYPE html>' . PHP_EOL;
        $expected .= '<html lang="fr">' . PHP_EOL;
        $expected .= '<head>' . PHP_EOL;
        $expected .= '<meta charset="utf-8"/>' . PHP_EOL;
        $expected .= '<title>My title</title>' . PHP_EOL;
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>' . PHP_EOL;
        $expected .= '<meta name="description" content="This is my description"/>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testHtmlWithCharset()
    {
        $result = $this->GanacheHtmlHelper->html('My title', 'This is my description', 'fr', 'iso-8859-1');
        $expected = '<!DOCTYPE html>' . PHP_EOL;
        $expected .= '<html lang="fr">' . PHP_EOL;
        $expected .= '<head>' . PHP_EOL;
        $expected .= '<meta charset="iso-8859-1"/>' . PHP_EOL;
        $expected .= '<title>My title</title>' . PHP_EOL;
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>' . PHP_EOL;
        $expected .= '<meta name="description" content="This is my description"/>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testHtmlWithDoctypeHtml5()
    {
        $result = $this->GanacheHtmlHelper->html('My title', 'This is my description', 'fr', 'iso-8859-1', 'html5');
        $expected = '<!DOCTYPE html>' . PHP_EOL;
        $expected .= '<html lang="fr">' . PHP_EOL;
        $expected .= '<head>' . PHP_EOL;
        $expected .= '<meta charset="iso-8859-1"/>' . PHP_EOL;
        $expected .= '<title>My title</title>' . PHP_EOL;
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>' . PHP_EOL;
        $expected .= '<meta name="description" content="This is my description"/>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testHtmlWithDoctypeHtml4Trans()
    {
        $result = $this->GanacheHtmlHelper->html('My title', 'This is my description', 'fr', 'iso-8859-1', 'html4-trans');
        $expected = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">' . PHP_EOL;
        $expected .= '<html lang="fr">' . PHP_EOL;
        $expected .= '<head>' . PHP_EOL;
        $expected .= '<meta charset="iso-8859-1"/>' . PHP_EOL;
        $expected .= '<title>My title</title>' . PHP_EOL;
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>' . PHP_EOL;
        $expected .= '<meta name="description" content="This is my description"/>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
}

