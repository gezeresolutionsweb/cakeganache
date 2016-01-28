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
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>' . PHP_EOL;
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
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>' . PHP_EOL;
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
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>' . PHP_EOL;
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
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>' . PHP_EOL;
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
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>' . PHP_EOL;
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
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>' . PHP_EOL;
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
        $expected .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>' . PHP_EOL;
        $expected .= '<meta name="description" content="This is my description"/>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testH1WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h1('Header 1');
        $expected = '<h1>Header 1</h1>';
        $this->assertEquals($expected, $result);
    }
    public function testH1WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h1('Header 1', ['class' => 'my-class']);
        $expected = '<h1 class="my-class">Header 1</h1>';
        $this->assertEquals($expected, $result);
    }
    public function testH2WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h2('Header 2');
        $expected = '<h2>Header 2</h2>';
        $this->assertEquals($expected, $result);
    }
    public function testH2WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h2('Header 2', ['class' => 'my-class']);
        $expected = '<h2 class="my-class">Header 2</h2>';
        $this->assertEquals($expected, $result);
    }
    public function testH3WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h3('Header 3');
        $expected = '<h3>Header 3</h3>';
        $this->assertEquals($expected, $result);
    }
    public function testH3WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h3('Header 3', ['class' => 'my-class']);
        $expected = '<h3 class="my-class">Header 3</h3>';
        $this->assertEquals($expected, $result);
    }
    public function testH4WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h4('Header 4');
        $expected = '<h4>Header 4</h4>';
        $this->assertEquals($expected, $result);
    }
    public function testH4WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h4('Header 4', ['class' => 'my-class']);
        $expected = '<h4 class="my-class">Header 4</h4>';
        $this->assertEquals($expected, $result);
    }
    public function testH5WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h5('Header 5');
        $expected = '<h5>Header 5</h5>';
        $this->assertEquals($expected, $result);
    }
    public function testH5WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h5('Header 5', ['class' => 'my-class']);
        $expected = '<h5 class="my-class">Header 5</h5>';
        $this->assertEquals($expected, $result);
    }
    public function testH6WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h6('Header 6');
        $expected = '<h6>Header 6</h6>';
        $this->assertEquals($expected, $result);
    }
    public function testH6WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h6('Header 6', ['class' => 'my-class']);
        $expected = '<h6 class="my-class">Header 6</h6>';
        $this->assertEquals($expected, $result);
    }
    public function testBody()
    {
        $result = $this->GanacheHtmlHelper->body();
        $expected = '</head>' . PHP_EOL;
        $expected .= '<body>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testEnd()
    {
        $result = $this->GanacheHtmlHelper->end();
        $expected = '</body>' . PHP_EOL;
        $expected .= '</html>';
        $this->assertEquals($expected, $result);
    }
    public function testContainerWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->container();
        $expected = '<div class="container">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testContainerWithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->container(['class' => 'my-class']);
        $expected = '<div class="container my-class">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testContainerWithIdOptions()
    {
        $result = $this->GanacheHtmlHelper->container(['id' => 'my-id']);
        $expected = '<div id="my-id" class="container">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testContainerFluidTrue()
    {
        $result = $this->GanacheHtmlHelper->container(['ga_fluid' => true]);
        $expected = '<div class="container-fluid">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testContainerFluidFalse()
    {
        $result = $this->GanacheHtmlHelper->container(['ga_fluid' => false]);
        $expected = '<div class="container">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testContainerFluidInvalidValue()
    {
        $result = $this->GanacheHtmlHelper->container(['ga_fluid' => 'my-id']);
        $expected = '<div class="container">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testRowWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->row();
        $expected = '<div class="row-fluid">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testRowWithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->row(['class' => 'my-class']);
        $expected = '<div class="row-fluid my-class">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testRowWithIdOptions()
    {
        $result = $this->GanacheHtmlHelper->row(['id' => 'my-id']);
        $expected = '<div id="my-id" class="row-fluid">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testRowFluidTrue()
    {
        $result = $this->GanacheHtmlHelper->row(['ga_fluid' => true]);
        $expected = '<div class="row-fluid">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testRowFluidFalse()
    {
        $result = $this->GanacheHtmlHelper->row(['ga_fluid' => false]);
        $expected = '<div class="row">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testRowFluidWithUnknownValue()
    {
        $result = $this->GanacheHtmlHelper->row(['ga_fluid' => 'my-id']);
        $expected = '<div class="row-fluid">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCloseWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->close();
        $expected = '</div>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCloseWithTwo()
    {
        $result = $this->GanacheHtmlHelper->close(2);
        $expected = '</div>' . PHP_EOL . '</div>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testHeaderWithOptions()
    {
        $result = $this->GanacheHtmlHelper->header();
        $expected = '<header>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testHeaderWithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->header(['class' => 'my-class']);
        $expected = '<header class="my-class">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCloseHeader()
    {
        $result = $this->GanacheHtmlHelper->closeHeader();
        $expected = '</header>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testImageWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png');
        $expected = '<img src="/img/logo.png" alt=""/>';
        $this->assertEquals($expected, $result);
    }
    public function testImageShapeRounded()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png', ['ga_shape' => GA_ROUNDED]);
        $expected = '<img src="/img/logo.png" class="img-rounded" alt=""/>';
        $this->assertEquals($expected, $result);
    }
    public function testImageShapeCircle()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png', ['ga_shape' => GA_CIRCLE]);
        $expected = '<img src="/img/logo.png" class="img-circle" alt=""/>';
        $this->assertEquals($expected, $result);
    }
    public function testImageShapePolaroid()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png', ['ga_shape' => GA_POLAROID]);
        $expected = '<img src="/img/logo.png" class="img-polaroid" alt=""/>';
        $this->assertEquals($expected, $result);
    }
    public function testImageShapeUnknown()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png', ['ga_shape' => 'triangle']);
        $expected = '<img src="/img/logo.png" alt=""/>';
        $this->assertEquals($expected, $result);
    }
    public function testCol1()
    {
        $result = $this->GanacheHtmlHelper->col([GA_1]);
        $expected = '<div class="span1">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol2()
    {
        $result = $this->GanacheHtmlHelper->col([GA_2]);
        $expected = '<div class="span2">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol3()
    {
        $result = $this->GanacheHtmlHelper->col([GA_3]);
        $expected = '<div class="span3">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol4()
    {
        $result = $this->GanacheHtmlHelper->col([GA_4]);
        $expected = '<div class="span4">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol5()
    {
        $result = $this->GanacheHtmlHelper->col([GA_5]);
        $expected = '<div class="span5">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol6()
    {
        $result = $this->GanacheHtmlHelper->col([GA_6]);
        $expected = '<div class="span6">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol7()
    {
        $result = $this->GanacheHtmlHelper->col([GA_7]);
        $expected = '<div class="span7">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol8()
    {
        $result = $this->GanacheHtmlHelper->col([GA_8]);
        $expected = '<div class="span8">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol9()
    {
        $result = $this->GanacheHtmlHelper->col([GA_9]);
        $expected = '<div class="span9">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol10()
    {
        $result = $this->GanacheHtmlHelper->col([GA_10]);
        $expected = '<div class="span10">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol11()
    {
        $result = $this->GanacheHtmlHelper->col([GA_11]);
        $expected = '<div class="span11">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol12()
    {
        $result = $this->GanacheHtmlHelper->col([GA_12]);
        $expected = '<div class="span12">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf1()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF1]);
        $expected = '<div class="offset1">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf2()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF2]);
        $expected = '<div class="offset2">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf3()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF3]);
        $expected = '<div class="offset3">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf4()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF4]);
        $expected = '<div class="offset4">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf5()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF5]);
        $expected = '<div class="offset5">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf6()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF6]);
        $expected = '<div class="offset6">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf7()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF7]);
        $expected = '<div class="offset7">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf8()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF8]);
        $expected = '<div class="offset8">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf9()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF9]);
        $expected = '<div class="offset9">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf10()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF10]);
        $expected = '<div class="offset10">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf11()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF11]);
        $expected = '<div class="offset11">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testColOf12()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF12]);
        $expected = '<div class="offset12">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol6AndOf3()
    {
        $result = $this->GanacheHtmlHelper->col([GA_6, GA_OF3]);
        $expected = '<div class="span6 offset3">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol1WithIdHtmlAttribute()
    {
        $result = $this->GanacheHtmlHelper->col([GA_1], ['id' => 'my-id']);
        $expected = '<div id="my-id" class="span1">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testCol1WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->col([GA_1], ['class' => 'my-class']);
        $expected = '<div class="span1 my-class">' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithoutAnyData()
    {
        $result = $this->GanacheHtmlHelper->table([]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithSimpleIndexedArrayOfStrings()
    {
        $result = $this->GanacheHtmlHelper->table([
            'Buzz Aldrin',
            'Dean Martin',
            'Jimmy Page'
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>Buzz Aldrin</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Dean Martin</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Jimmy Page</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithSimpleDataIndexedArray()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['Buzz', 'Aldrin'],
            ['Dean', 'Martin'],
            ['Jimmy', 'Page']
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>Buzz</td> <td>Aldrin</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Dean</td> <td>Martin</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Jimmy</td> <td>Page</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithCakeLikeArrayWithRelations()
    {
        $result = $this->GanacheHtmlHelper->table([
            [
                'User' => ['firstname' => 'Buzz', 'lastname' => 'Aldrin'],
                'City' => ['id' => 203, 'name' => 'Miami']
            ],
            [
                'User' => ['firstname' => 'Dean', 'lastname' => 'Martin'],
                'City' => ['id' => 209, 'name' => 'Los Angeles']
            ],
            [
                'User' => ['firstname' => 'Jimmy', 'lastname' => 'Page'],
                'City' => ['id' => 256, 'name' => 'London']
            ],
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>User.firstname</th> <th>User.lastname</th> <th>City.id</th> <th>City.name</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>Buzz</td> <td>Aldrin</td> <td>203</td> <td>Miami</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Dean</td> <td>Martin</td> <td>209</td> <td>Los Angeles</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Jimmy</td> <td>Page</td> <td>256</td> <td>London</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithCakeLikeArrayDisplayingOnlySomeFields()
    {
        $result = $this->GanacheHtmlHelper->table([
            [
                'User' => ['firstname' => 'Buzz', 'lastname' => 'Aldrin'],
                'City' => ['id' => 203, 'name' => 'Miami']
            ],
            [
                'User' => ['firstname' => 'Dean', 'lastname' => 'Martin'],
                'City' => ['id' => 209, 'name' => 'Los Angeles']
            ],
            [
                'User' => ['firstname' => 'Jimmy', 'lastname' => 'Page'],
                'City' => ['id' => 256, 'name' => 'London']
            ],
        ], [
            'ga_headers' => [
                'User.firstname' => 'Firstname',
                'User.lastname' => 'Lastname'
            ]
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>Firstname</th> <th>Lastname</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>Buzz</td> <td>Aldrin</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Dean</td> <td>Martin</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Jimmy</td> <td>Page</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithCakeLikeSimpleArray()
    {
        $result = $this->GanacheHtmlHelper->table([
            [
                'User' => [
                    'firstname' => 'Gino',
                    'lastname' => 'Vanelli'
                ]
            ]
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>User.firstname</th> <th>User.lastname</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>Gino</td> <td>Vanelli</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithDataIndexedArrayAndIndexedArrayOfHeaders()
    {
        $result = $this->GanacheHtmlHelper->table([['Brenda', 'Lee'], ['Michael', 'Buble']], ['ga_headers' => ['Firstname', 'Lastname']]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>Firstname</th> <th>Lastname</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>Brenda</td> <td>Lee</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Michael</td> <td>Buble</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithDataCakeLikeArrayAndIndexedArrayOfHeaders()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['User' => ['firstname' => 'Brenda', 'lastname' => 'Lee']],
            ['User' => ['firstname' => 'Michael', 'lastname' => 'Buble']],
        ], ['ga_headers' => ['Firstname', 'Lastname']]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>Firstname</th> <th>Lastname</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>Brenda</td> <td>Lee</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Michael</td> <td>Buble</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithDataCakeLikeArrayAndArrayOfHeadersWithFields()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['User' => ['firstname' => 'Bret', 'lastname' => 'Michael']],
            ['User' => ['firstname' => 'Boy', 'lastname' => 'George']],
        ], ['ga_headers' => ['User.firstname' => 'First', 'User.lastname' => 'Last']]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>First</th> <th>Last</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>Bret</td> <td>Michael</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Boy</td> <td>George</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithOneLineTwoCellAndAction()
    {
        $result = $this->GanacheHtmlHelper->table([
            'First line',
            'Second line'
        ],[
            'ga_actions' => [
                ['title' => 'Add', 'url' => '#', 'options' => ['title' => 'Add a new item']]
            ]
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>First line</td> <td><span class="pull-right"><a href="#" title="Add a new item">Add</a></span></td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Second line</td> <td><span class="pull-right"><a href="#" title="Add a new item">Add</a></span></td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableWithOneLineTwoCellAndTwoActions()
    {
        $result = $this->GanacheHtmlHelper->table([
            'First line',
            'Second line'
        ],[
            'ga_actions' => [
                ['title' => 'Add', 'url' => '#', 'options' => ['title' => 'Add a new item']],
                ['title' => 'Edit', 'action' => '/', 'options' => ['title' => 'Edit item']]
            ]
        ]);

        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>First line</td> <td><span class="pull-right"><a href="#" title="Add a new item">Add</a><a href="#" title="Edit item">Edit</a></span></td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Second line</td> <td><span class="pull-right"><a href="#" title="Add a new item">Add</a><a href="#" title="Edit item">Edit</a></span></td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableOddTrOptions()
    {
        $result = $this->GanacheHtmlHelper->table([['First line'], ['Second line'], ['Third line']], ['ga_odd_tr_options' => ['class' => 'odd-line']]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr class="odd-line"><td>First line</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Second line</td></tr>' . PHP_EOL;
        $expected .= '<tr class="odd-line"><td>Third line</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableEvenTrOptions()
    {
        $result = $this->GanacheHtmlHelper->table([['First line'], ['Second line'], ['Third line']], ['ga_even_tr_options' => ['class' => 'even-line']]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>First line</td></tr>' . PHP_EOL;
        $expected .= '<tr class="even-line"><td>Second line</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Third line</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableUseCount()
    {
        $result = $this->GanacheHtmlHelper->table([['First line', 'Second line', 'Third line']], ['ga_use_count' => true]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td class="column-1">First line</td> <td class="column-2">Second line</td> <td class="column-3">Third line</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableHeaders()
    {
        $result = $this->GanacheHtmlHelper->table([['First', 'Second']], ['ga_headers' => ['First', 'Second']]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>First</th> <th>Second</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>First</td> <td>Second</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableHeadersTrOptions()
    {
        $result = $this->GanacheHtmlHelper->table([['First line', 'Second line']], ['ga_headers' => ['First header', 'Second header'], 'ga_headers_tr_options' => ['class' => 'tr-header-class']]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr class="tr-header-class"><th>First header</th> <th>Second header</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>First line</td> <td>Second line</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableHeadersThOptions()
    {
        $result = $this->GanacheHtmlHelper->table([['First line', 'Second line']], ['ga_headers' => ['First header', 'Second header'], 'ga_headers_th_options' => ['class' => 'th-header-class']]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th class="th-header-class">First header</th> <th class="th-header-class">Second header</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>First line</td> <td>Second line</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableActionsWithCustomArguments()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['id' => 1,'title' => 'First line'],
            ['id' => 2,'title' => 'Second line']
        ],
        [
            'ga_actions' => [
                ['title' => 'Edit', 'url' => ['action' => 'edit', ':id']]
            ],
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>id</th> <th>title</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>1</td> <td>First line</td> <td><span class="pull-right"><a href="/edit/1">Edit</a></span></td></tr>' . PHP_EOL;
        $expected .= '<tr><td>2</td> <td>Second line</td> <td><span class="pull-right"><a href="/edit/2">Edit</a></span></td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableActionsWithCustomArgumentsAndUrlAsString()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['id' => 1,'title' => 'First line'],
            ['id' => 2,'title' => 'Second line']
        ],
        [
            'ga_actions' => [
                ['title' => 'Edit', 'url' => '/edit/:id']
            ],
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>id</th> <th>title</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>1</td> <td>First line</td> <td><span class="pull-right"><a href="/edit/1">Edit</a></span></td></tr>' . PHP_EOL;
        $expected .= '<tr><td>2</td> <td>Second line</td> <td><span class="pull-right"><a href="/edit/2">Edit</a></span></td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableActionsWithCustomArgumentsException()
    {
        $this->setExpectedException('RuntimeException', 'Cannot find key in data array.');
        $this->GanacheHtmlHelper->table([
            ['id' => 1,'title' => 'First line'],
        ],
        [
            'ga_actions' => [
                ['title' => 'Edit', 'url' => '/edit/:unknown_id']
            ],
        ]);
    }
    public function testTableHiddenFields()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['id' => 1,'title' => 'First line', 'customer_id' => 9],
            ['id' => 2,'title' => 'Second line', 'customer_id' => 14]
        ],
        [
            'ga_hidden_fields' => [
                'customer_id'
            ],
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>id</th> <th>title</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>1</td> <td>First line</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>2</td> <td>Second line</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableCondensed()
    {
        $result = $this->GanacheHtmlHelper->table([], ['ga_condensed' => true]);
        $expected = '<table class="table table-condensed">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableStriped()
    {
        $result = $this->GanacheHtmlHelper->table([], ['ga_striped' => true]);
        $expected = '<table class="table table-striped">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableBordered()
    {
        $result = $this->GanacheHtmlHelper->table([], ['ga_bordered' => true]);
        $expected = '<table class="table table-bordered">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableHover()
    {
        $result = $this->GanacheHtmlHelper->table([], ['ga_hover' => true]);
        $expected = '<table class="table table-hover">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableActionsPullRight()
    {
        $result = $this->GanacheHtmlHelper->table([
            'First line',
        ],[
            'ga_actions' => [
                ['title' => 'Add', 'url' => '#', 'options' => ['title' => 'Add a new item']]
            ]
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>First line</td> <td><span class="pull-right"><a href="#" title="Add a new item">Add</a></span></td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableActionsPullRightFalse()
    {
        $result = $this->GanacheHtmlHelper->table([
            'First line',
        ],[
            'ga_actions' => [
                ['title' => 'Add', 'url' => '#', 'options' => ['title' => 'Add a new item']]
            ],
            'ga_actions_pull_right' => false
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>First line</td> <td><a href="#" title="Add a new item">Add</a></td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableHeadersWithValuesAsArray()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['Deborah', 'Presley'],
            ['Elvis', 'Costello']
        ],[
            'ga_headers' => [
                ['label' => 'Firstname'],
                ['label' => 'Lastname']
            ]
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>Firstname</th> <th>Lastname</th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>Deborah</td> <td>Presley</td></tr>' . PHP_EOL;
        $expected .= '<tr><td>Elvis</td> <td>Costello</td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableHeadersWithValuesAsArrayAndSomeAlignement()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['January', 234.56],
            ['February', 125.95]
        ],[
            'ga_headers' => [
                ['label' => 'Month'],
                ['label' => 'Total', 'ga_pull_right' => true]
            ]
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>Month</th> <th><span class="pull-right">Total</span></th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>January</td> <td><span class="pull-right">234.56</span></td></tr>' . PHP_EOL;
        $expected .= '<tr><td>February</td> <td><span class="pull-right">125.95</span></td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableHeadersWithValuesAsArrayAndSomeAlignementWithKeyDefined()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['month' => 'January', 'total' => 234.56],
            ['month' => 'February', 'total' => 125.95]
        ],[
            'ga_headers' => [
                'month' => ['label' => 'Month'],
                'total' => ['label' => 'Total', 'ga_pull_right' => true]
            ]
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>Month</th> <th><span class="pull-right">Total</span></th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>January</td> <td><span class="pull-right">234.56</span></td></tr>' . PHP_EOL;
        $expected .= '<tr><td>February</td> <td><span class="pull-right">125.95</span></td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableHeadersWithValuesAsArrayAndMultipleColumnAlignementWithKeyDefined()
    {
        $result = $this->GanacheHtmlHelper->table([
            ['month' => 'January', 'subtotal' => 200.11, 'total' => 234.56],
            ['month' => 'February', 'subtotal' => 100.22, 'total' => 125.95]
        ],[
            'ga_headers' => [
                'month' => ['label' => 'Month'],
                'subtotal' => ['label' => 'Subtotal', 'ga_pull_right' => true],
                'total' => ['label' => 'Total', 'ga_pull_right' => true]
            ]
        ]);
        $expected = '<table class="table">' . PHP_EOL;
        $expected .= '<thead>' . PHP_EOL;
        $expected .= '<tr><th>Month</th> <th><span class="pull-right">Subtotal</span></th> <th><span class="pull-right">Total</span></th></tr>' . PHP_EOL;
        $expected .= '</thead>' . PHP_EOL;
        $expected .= '<tbody>' . PHP_EOL;
        $expected .= '<tr><td>January</td> <td><span class="pull-right">200.11</span></td> <td><span class="pull-right">234.56</span></td></tr>' . PHP_EOL;
        $expected .= '<tr><td>February</td> <td><span class="pull-right">100.22</span></td> <td><span class="pull-right">125.95</span></td></tr>';
        $expected .= PHP_EOL . '</tbody>' . PHP_EOL;
        $expected .= '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
    public function testTableClose()
    {
        $result = $this->GanacheHtmlHelper->tableClose();
        $expected = '</table>' . PHP_EOL;
        $this->assertEquals($expected, $result);
    }
}

