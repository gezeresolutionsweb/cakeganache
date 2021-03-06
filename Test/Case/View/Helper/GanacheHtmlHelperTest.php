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
        $this->assertEquals($result, $expected);
    }

    public function testSimpleIconSizeLgWithCustomPrefix()
    {
        $Controller = new Controller();
        $View = new View($Controller);
        $ganacheHtmlHelper = new GanacheHtmlHelper($View, ['prefix' => 'fa']);
        $result = $ganacheHtmlHelper->icon('home', ['ga_size' => GA_LG]);
        $expected = '<i class="fa fa-home fa-lg"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testSimpleIcon()
    {
        $result = $this->GanacheHtmlHelper->icon('home');
        $expected = '<i class="glyphicon glyphicon-home"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testIconSizeLg()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_LG]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-lg"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testIconSize1x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_1X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-1x"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testIconSize2x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_2X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-2x"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testIconSize3x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_3X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-3x"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testIconSize4x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_4X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-4x"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testIconSize5x()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['ga_size' => GA_5X]);
        $expected = '<i class="glyphicon glyphicon-home glyphicon-5x"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testIconSpin()
    {
        $result = $this->GanacheHtmlHelper->icon('spinner', ['ga_spin' => true]);
        $expected = '<i class="glyphicon glyphicon-spinner glyphicon-spin"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testIconWithClassAttributeAsString()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['class' => 'spinorama']);
        $expected = '<i class="glyphicon glyphicon-home spinorama"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testIconWithClassAttributeAsArray()
    {
        $result = $this->GanacheHtmlHelper->icon('home', ['class' => ['spinorama', 'spinoranissima']]);
        $expected = '<i class="glyphicon glyphicon-home spinorama spinoranissima"></i>';
        $this->assertEquals($result, $expected);
    }

    public function testSimpleIconLink()
    {
        $result = $this->GanacheHtmlHelper->iconLink('home');
        $expected = '<a href="#" title="home"><i class="glyphicon glyphicon-home"></i></a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/');
        $expected = '<a href="/" class="btn btn-default" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonWithUrlAsArray()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', ['plugin' => 'admin', 'controller' => 'admin', 'action' => 'manage']);
        $expected = '<a href="/admin/admin/manage" class="btn btn-default" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonWithTitleAttribute()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['title' => 'My super home']);
        $expected = '<a href="/" class="btn btn-default" title="My super home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonTypeDefault()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_DEFAULT]);
        $expected = '<a href="/" class="btn btn-default" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonTypePrimary()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_PRIMARY]);
        $expected = '<a href="/" class="btn btn-primary" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_INFO]);
        $expected = '<a href="/" class="btn btn-info" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_SUCCESS]);
        $expected = '<a href="/" class="btn btn-success" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_WARNING]);
        $expected = '<a href="/" class="btn btn-warning" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonTypeDanger()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_DANGER]);
        $expected = '<a href="/" class="btn btn-danger" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonTypeInverse()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_INVERSE]);
        $expected = '<a href="/" class="btn btn-inverse" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonTypeLink()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_type' => GA_LINK]);
        $expected = '<a href="/" class="btn btn-link" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonSizeMini()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_size' => GA_MINI]);
        $expected = '<a href="/" class="btn btn-default btn-mini" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonSizeSmall()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_size' => GA_SMALL]);
        $expected = '<a href="/" class="btn btn-default btn-small" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonLarge()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_size' => GA_LARGE]);
        $expected = '<a href="/" class="btn btn-default btn-large" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonSizeBlock()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_size' => GA_BLOCK]);
        $expected = '<a href="/" class="btn btn-default btn-block" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }
    
    public function testLinkButtonWithCustomClassAsString()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['class' => 'special-button']);
        $expected = '<a href="/" class="btn btn-default special-button" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonWithTwoCustomClassAsString()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['class' => 'special-button special-button-order']);
        $expected = '<a href="/" class="btn btn-default special-button special-button-order" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonWithCustomClassAsArray()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['class' => ['special-button']]);
        $expected = '<a href="/" class="btn btn-default special-button" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonWithTwoCustomClassAsArray()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['class' => ['special-button', 'special-button-order']]);
        $expected = '<a href="/" class="btn btn-default special-button special-button-order" title="home">home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonWithIcon()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_icon' => 'home']);
        $expected = '<a href="/" class="btn btn-default" title="home"><i class="glyphicon glyphicon-home"></i> home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonWithIconAndSpinOption()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_icon' => 'home', 'ga_icon_options' => ['ga_spin' => true]]);
        $expected = '<a href="/" class="btn btn-default" title="home"><i class="glyphicon glyphicon-home glyphicon-spin"></i> home</a>';
        $this->assertEquals($result, $expected);
    }

    public function testLinkButtonWithIconAndSize1x()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['ga_icon' => 'home', 'ga_icon_options' => ['ga_size' => GA_1X]]);
        $expected = '<a href="/" class="btn btn-default" title="home"><i class="glyphicon glyphicon-home glyphicon-1x"></i> home</a>';
        $this->assertEquals($result, $expected);
    }
    public function testLinkButtonWithConfirmMessage()
    {
        $result = $this->GanacheHtmlHelper->linkButton('home', '/', ['confirm' => 'Really wanna do this ?']);
        $expected = '<a href="/" class="btn btn-default" title="home" onclick="if (confirm(&quot;Really wanna do this ?&quot;)) { return true; } return false;">home</a>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->label('Home');
        $expected = '<span class="label label-default">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelTypeDefault()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_DEFAULT]);
        $expected = '<span class="label label-default">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_SUCCESS]);
        $expected = '<span class="label label-success">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_WARNING]);
        $expected = '<span class="label label-warning">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_INFO]);
        $expected = '<span class="label label-info">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelTypeImportant()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_IMPORTANT]);
        $expected = '<span class="label label-important">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelTypeInverse()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => GA_INVERSE]);
        $expected = '<span class="label label-inverse">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelWithInvalidType()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_type' => 'invalid_type']);
        $expected = '<span class="label label-default">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelWithIcon()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_icon' => 'home']);
        $expected = '<span class="label label-default"><i class="glyphicon glyphicon-home"></i> Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelWithIconAndIconOptions()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['ga_icon' => 'home', 'ga_icon_options' => ['ga_size' => GA_LG]]);
        $expected = '<span class="label label-default"><i class="glyphicon glyphicon-home glyphicon-lg"></i> Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testLabelWithCustomClassAsString()
    {
        $result = $this->GanacheHtmlHelper->label('Home', ['class' => 'custom-class']);
        $expected = '<span class="custom-class label label-default">Home</span>';
        $this->assertEquals($result, $expected);
    }

    public function testBadgeTypeDefault()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_DEFAULT]);
        $expected = '<span class="badge badge-default">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testBadgeTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_SUCCESS]);
        $expected = '<span class="badge badge-success">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testBadgeTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_WARNING]);
        $expected = '<span class="badge badge-warning">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testBadgeTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_INFO]);
        $expected = '<span class="badge badge-info">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testBadgeTypeImportant()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_IMPORTANT]);
        $expected = '<span class="badge badge-important">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testBadgeTypeInverse()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => GA_INVERSE]);
        $expected = '<span class="badge badge-inverse">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testBadgeWithInvalidType()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_type' => 'invalid_type']);
        $expected = '<span class="badge badge-default">Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testBadgeWithIcon()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_icon' => 'home']);
        $expected = '<span class="badge badge-default"><i class="glyphicon glyphicon-home"></i> Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testBadgeWithIconAndIconOptions()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['ga_icon' => 'home', 'ga_icon_options' => ['ga_size' => GA_LG]]);
        $expected = '<span class="badge badge-default"><i class="glyphicon glyphicon-home glyphicon-lg"></i> Home</span>';
        $this->assertEquals($result, $expected);
    }
    public function testBadgeWithCustomClassAsString()
    {
        $result = $this->GanacheHtmlHelper->badge('Home', ['class' => 'custom-class']);
        $expected = '<span class="custom-class badge badge-default">Home</span>';
        $this->assertEquals($result, $expected);
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
        $this->assertEquals($result, $expected);
    }
    public function testGetCrumbListWithOneCrumb()
    {
        $this->GanacheHtmlHelper->addCrumb('Home');
        $result = $this->GanacheHtmlHelper->getCrumbList();
        $expected = '<ul class="breadcrumb"><li class="first">Home</li></ul>';
        $this->assertEquals($result, $expected);
    }
    public function testGetCrumbListWithTwoCrumbs()
    {
        $this->GanacheHtmlHelper->addCrumb('Home')->addCrumb('Dashboard');
        $result = $this->GanacheHtmlHelper->getCrumbList();
        $expected = '<ul class="breadcrumb"><li class="first">Home<span class="divider">/</span></li><li class="last">Dashboard</li></ul>';
        $this->assertEquals($result, $expected);
    }
    public function testGetCrumbListWithThreeCrumbs()
    {
        $this->GanacheHtmlHelper->addCrumb('Home')->addCrumb('Dashboard')->addCrumb('Access');
        $result = $this->GanacheHtmlHelper->getCrumbList();
        $expected = '<ul class="breadcrumb"><li class="first">Home<span class="divider">/</span></li><li>Dashboard<span class="divider">/</span></li><li class="last">Access</li></ul>';
        $this->assertEquals($result, $expected);
    }
    public function testGetCrumbListWithCustomSeparator()
    {
        $this->GanacheHtmlHelper->addCrumb('Home')->addCrumb('Dashboard');
        $result = $this->GanacheHtmlHelper->getCrumbList(['ga_separator' => '#']);
        $expected = '<ul class="breadcrumb"><li class="first">Home<span class="divider">#</span></li><li class="last">Dashboard</li></ul>';
        $this->assertEquals($result, $expected);
    }
    public function testGetCrumbListWithStartTextAndThreeCrumbAndCustomSeparator()
    {
        $this->GanacheHtmlHelper->addCrumb('Dashboard')->addCrumb('Access')->addCrumb('Logs');
        $result = $this->GanacheHtmlHelper->getCrumbList(['ga_separator' => '#'], 'Home');
        $expected = '<ul class="breadcrumb"><li class="first"><a href="/">Home</a><span class="divider">#</span></li><li>Dashboard<span class="divider">#</span></li><li>Access<span class="divider">#</span></li><li class="last">Logs</li></ul>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !');
        $expected = '<div class="alert alert-warning"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertWithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['class' => 'custom-class']);
        $expected = '<div class="custom-class alert alert-warning"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertBlock()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_block' => true]);
        $expected = '<div class="alert alert-block alert-warning"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertTypeDefault()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_DEFAULT]);
        $expected = '<div class="alert alert-default"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_SUCCESS]);
        $expected = '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertTypeError()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_ERROR]);
        $expected = '<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_WARNING]);
        $expected = '<div class="alert alert-warning"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_INFO]);
        $expected = '<div class="alert alert-info"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertTypeImportant()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_IMPORTANT]);
        $expected = '<div class="alert alert-important"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testAlertTypeInverse()
    {
        $result = $this->GanacheHtmlHelper->alert('This is an alert !', ['ga_type' => GA_INVERSE]);
        $expected = '<div class="alert alert-inverse"><button class="close" data-dismiss="alert">&times;</button>This is an alert !</div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithoutBasicPercentage()
    {
        $result = $this->GanacheHtmlHelper->progress(10);
        $expected = '<div class="progress progress-info"><div style="width: 10%;" class="bar"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithStriped()
    {
        $result = $this->GanacheHtmlHelper->progress(10, ['ga_striped' => true]);
        $expected = '<div class="progress progress-info progress-striped"><div style="width: 10%;" class="bar"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithActive()
    {
        $result = $this->GanacheHtmlHelper->progress(10, ['ga_active' => true]);
        $expected = '<div class="progress progress-info active"><div style="width: 10%;" class="bar"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithStripedAndActive()
    {
        $result = $this->GanacheHtmlHelper->progress(10, ['ga_striped' => true, 'ga_active' => true]);
        $expected = '<div class="progress progress-info progress-striped active"><div style="width: 10%;" class="bar"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressTypeInfo()
    {
        $result = $this->GanacheHtmlHelper->progress(20, ['ga_type' => GA_INFO]);
        $expected = '<div class="progress progress-info"><div style="width: 20%;" class="bar"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressTypeSuccess()
    {
        $result = $this->GanacheHtmlHelper->progress(20, ['ga_type' => GA_SUCCESS]);
        $expected = '<div class="progress progress-success"><div style="width: 20%;" class="bar"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->progress(20, ['ga_type' => GA_WARNING]);
        $expected = '<div class="progress progress-warning"><div style="width: 20%;" class="bar"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressTypeDanger()
    {
        $result = $this->GanacheHtmlHelper->progress(20, ['ga_type' => GA_DANGER]);
        $expected = '<div class="progress progress-danger"><div style="width: 20%;" class="bar"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithTwoBasicBarBothAsString()
    {
        $result = $this->GanacheHtmlHelper->progress([10,35]);
        $expected = '<div class="progress"><div style="width: 10%;" class="bar bar-info"></div><div style="width: 35%;" class="bar bar-info"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithTwoBasicBarFirstAsStringSecondAsArray()
    {
        $result = $this->GanacheHtmlHelper->progress([20,['ga_width' => 40]]);
        $expected = '<div class="progress"><div style="width: 20%;" class="bar bar-info"></div><div style="width: 40%;" class="bar bar-info"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithTwoBasicBarBothAsArray()
    {
        $result = $this->GanacheHtmlHelper->progress([['ga_width' => 25],['ga_width' => 45]]);
        $expected = '<div class="progress"><div style="width: 25%;" class="bar bar-info"></div><div style="width: 45%;" class="bar bar-info"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithTwoBarsFirstTypeInfoAndSecondTypeDefault()
    {
        $result = $this->GanacheHtmlHelper->progress([['ga_width' => 15, 'ga_type' => GA_DANGER],['ga_width' => 65]]);
        $expected = '<div class="progress"><div style="width: 15%;" class="bar bar-danger"></div><div style="width: 65%;" class="bar bar-info"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithTwoBarsFirstTypeSuccessAndSecondTypeWarning()
    {
        $result = $this->GanacheHtmlHelper->progress([['ga_width' => 10, 'ga_type' => GA_SUCCESS],['ga_width' => 90, 'ga_type' => GA_WARNING]]);
        $expected = '<div class="progress"><div style="width: 10%;" class="bar bar-success"></div><div style="width: 90%;" class="bar bar-warning"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithThreeBars()
    {
        $result = $this->GanacheHtmlHelper->progress([['ga_width' => 12, 'ga_type' => GA_SUCCESS],['ga_width' => 40, 'ga_type' => GA_WARNING], ['ga_width' => 48, 'ga_type' => GA_DANGER]]);
        $expected = '<div class="progress"><div style="width: 12%;" class="bar bar-success"></div><div style="width: 40%;" class="bar bar-warning"></div><div style="width: 48%;" class="bar bar-danger"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithTwoBasicBarAndStriped()
    {
        $result = $this->GanacheHtmlHelper->progress([23,47], ['ga_striped' => true]);
        $expected = '<div class="progress progress-striped"><div style="width: 23%;" class="bar bar-info"></div><div style="width: 47%;" class="bar bar-info"></div></div>';
        $this->assertEquals($result, $expected);
    }

    public function testProgressWithTwoBasicBarAndActive()
    {
        $result = $this->GanacheHtmlHelper->progress([23,47], ['ga_active' => true]);
        $expected = '<div class="progress active"><div style="width: 23%;" class="bar bar-info"></div><div style="width: 47%;" class="bar bar-info"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testProgressWithTwoBasicBarAndStripedAndActive()
    {
        $result = $this->GanacheHtmlHelper->progress([23,47], ['ga_striped' => true, 'ga_active' => true]);
        $expected = '<div class="progress progress-striped active"><div style="width: 23%;" class="bar bar-info"></div><div style="width: 47%;" class="bar bar-info"></div></div>';
        $this->assertEquals($result, $expected);
    }
    public function testCloseIconAsButton()
    {
        $result = $this->GanacheHtmlHelper->closeIcon();
        $expected = '<button class="close">&times;</button>';
        $this->assertEquals($result, $expected);
    }
    public function testCloseIconAsLink()
    {
        $result = $this->GanacheHtmlHelper->closeIcon(true);
        $expected = '<a href="#" class="close">&times;</a>';
        $this->assertEquals($result, $expected);
    }
    public function testCloseIconWithOptions()
    {
        $result = $this->GanacheHtmlHelper->closeIcon(true, ['data-dismiss' => 'modal', 'aria-hidden' => 'true']);
        $expected = '<a href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>';
        $this->assertEquals($result, $expected);
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
        $this->assertEquals($result, $expected);
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
        $this->assertEquals($result, $expected);
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
        $this->assertEquals($result, $expected);
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
        $this->assertEquals($result, $expected);
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
        $this->assertEquals($result, $expected);
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
        $this->assertEquals($result, $expected);
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
        $this->assertEquals($result, $expected);
    }
    public function testH1WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h1('Header 1');
        $expected = '<h1>Header 1</h1>';
        $this->assertEquals($result, $expected);
    }
    public function testH1WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h1('Header 1', ['class' => 'my-class']);
        $expected = '<h1 class="my-class">Header 1</h1>';
        $this->assertEquals($result, $expected);
    }
    public function testH2WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h2('Header 2');
        $expected = '<h2>Header 2</h2>';
        $this->assertEquals($result, $expected);
    }
    public function testH2WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h2('Header 2', ['class' => 'my-class']);
        $expected = '<h2 class="my-class">Header 2</h2>';
        $this->assertEquals($result, $expected);
    }
    public function testH3WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h3('Header 3');
        $expected = '<h3>Header 3</h3>';
        $this->assertEquals($result, $expected);
    }
    public function testH3WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h3('Header 3', ['class' => 'my-class']);
        $expected = '<h3 class="my-class">Header 3</h3>';
        $this->assertEquals($result, $expected);
    }
    public function testH4WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h4('Header 4');
        $expected = '<h4>Header 4</h4>';
        $this->assertEquals($result, $expected);
    }
    public function testH4WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h4('Header 4', ['class' => 'my-class']);
        $expected = '<h4 class="my-class">Header 4</h4>';
        $this->assertEquals($result, $expected);
    }
    public function testH5WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h5('Header 5');
        $expected = '<h5>Header 5</h5>';
        $this->assertEquals($result, $expected);
    }
    public function testH5WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h5('Header 5', ['class' => 'my-class']);
        $expected = '<h5 class="my-class">Header 5</h5>';
        $this->assertEquals($result, $expected);
    }
    public function testH6WithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->h6('Header 6');
        $expected = '<h6>Header 6</h6>';
        $this->assertEquals($result, $expected);
    }
    public function testH6WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->h6('Header 6', ['class' => 'my-class']);
        $expected = '<h6 class="my-class">Header 6</h6>';
        $this->assertEquals($result, $expected);
    }
    public function testBody()
    {
        $result = $this->GanacheHtmlHelper->body();
        $expected = '</head>' . PHP_EOL;
        $expected .= '<body>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testEnd()
    {
        $result = $this->GanacheHtmlHelper->end();
        $expected = '</body>' . PHP_EOL;
        $expected .= '</html>';
        $this->assertEquals($result, $expected);
    }
    public function testContainerWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->container();
        $expected = '<div class="container">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testContainerWithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->container(['class' => 'my-class']);
        $expected = '<div class="container my-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testContainerWithIdOptions()
    {
        $result = $this->GanacheHtmlHelper->container(['id' => 'my-id']);
        $expected = '<div id="my-id" class="container">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testContainerFluidTrue()
    {
        $result = $this->GanacheHtmlHelper->container(['ga_fluid' => true]);
        $expected = '<div class="container-fluid">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testContainerFluidFalse()
    {
        $result = $this->GanacheHtmlHelper->container(['ga_fluid' => false]);
        $expected = '<div class="container">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testContainerFluidInvalidValue()
    {
        $result = $this->GanacheHtmlHelper->container(['ga_fluid' => 'my-id']);
        $expected = '<div class="container">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testRowWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->row();
        $expected = '<div class="row-fluid">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testRowWithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->row(['class' => 'my-class']);
        $expected = '<div class="row-fluid my-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testRowWithIdOptions()
    {
        $result = $this->GanacheHtmlHelper->row(['id' => 'my-id']);
        $expected = '<div id="my-id" class="row-fluid">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testRowFluidTrue()
    {
        $result = $this->GanacheHtmlHelper->row(['ga_fluid' => true]);
        $expected = '<div class="row-fluid">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testRowFluidFalse()
    {
        $result = $this->GanacheHtmlHelper->row(['ga_fluid' => false]);
        $expected = '<div class="row">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testRowFluidWithUnknownValue()
    {
        $result = $this->GanacheHtmlHelper->row(['ga_fluid' => 'my-id']);
        $expected = '<div class="row-fluid">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testClose()
    {
        $result = $this->GanacheHtmlHelper->close();
        $expected = '</div>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testHeaderWithOptions()
    {
        $result = $this->GanacheHtmlHelper->header();
        $expected = '<header>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testHeaderWithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->header(['class' => 'my-class']);
        $expected = '<header class="my-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCloseHeader()
    {
        $result = $this->GanacheHtmlHelper->closeHeader();
        $expected = '</header>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testImageWithoutOptions()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png');
        $expected = '<img src="/img/logo.png" alt=""/>';
        $this->assertEquals($result, $expected);
    }
    public function testImageShapeRounded()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png', ['ga_shape' => GA_ROUNDED]);
        $expected = '<img src="/img/logo.png" class="img-rounded" alt=""/>';
        $this->assertEquals($result, $expected);
    }
    public function testImageShapeCircle()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png', ['ga_shape' => GA_CIRCLE]);
        $expected = '<img src="/img/logo.png" class="img-circle" alt=""/>';
        $this->assertEquals($result, $expected);
    }
    public function testImageShapePolaroid()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png', ['ga_shape' => GA_POLAROID]);
        $expected = '<img src="/img/logo.png" class="img-polaroid" alt=""/>';
        $this->assertEquals($result, $expected);
    }
    public function testImageShapeUnknown()
    {
        $result = $this->GanacheHtmlHelper->image('logo.png', ['ga_shape' => 'triangle']);
        $expected = '<img src="/img/logo.png" alt=""/>';
        $this->assertEquals($result, $expected);
    }
    public function testCol1()
    {
        $result = $this->GanacheHtmlHelper->col([GA_1]);
        $expected = '<div class="span1">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol2()
    {
        $result = $this->GanacheHtmlHelper->col([GA_2]);
        $expected = '<div class="span2">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol3()
    {
        $result = $this->GanacheHtmlHelper->col([GA_3]);
        $expected = '<div class="span3">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol4()
    {
        $result = $this->GanacheHtmlHelper->col([GA_4]);
        $expected = '<div class="span4">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol5()
    {
        $result = $this->GanacheHtmlHelper->col([GA_5]);
        $expected = '<div class="span5">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol6()
    {
        $result = $this->GanacheHtmlHelper->col([GA_6]);
        $expected = '<div class="span6">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol7()
    {
        $result = $this->GanacheHtmlHelper->col([GA_7]);
        $expected = '<div class="span7">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol8()
    {
        $result = $this->GanacheHtmlHelper->col([GA_8]);
        $expected = '<div class="span8">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol9()
    {
        $result = $this->GanacheHtmlHelper->col([GA_9]);
        $expected = '<div class="span9">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol10()
    {
        $result = $this->GanacheHtmlHelper->col([GA_10]);
        $expected = '<div class="span10">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol11()
    {
        $result = $this->GanacheHtmlHelper->col([GA_11]);
        $expected = '<div class="span11">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol12()
    {
        $result = $this->GanacheHtmlHelper->col([GA_12]);
        $expected = '<div class="span12">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf1()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF1]);
        $expected = '<div class="offset1">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf2()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF2]);
        $expected = '<div class="offset2">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf3()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF3]);
        $expected = '<div class="offset3">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf4()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF4]);
        $expected = '<div class="offset4">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf5()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF5]);
        $expected = '<div class="offset5">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf6()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF6]);
        $expected = '<div class="offset6">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf7()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF7]);
        $expected = '<div class="offset7">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf8()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF8]);
        $expected = '<div class="offset8">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf9()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF9]);
        $expected = '<div class="offset9">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf10()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF10]);
        $expected = '<div class="offset10">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf11()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF11]);
        $expected = '<div class="offset11">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testColOf12()
    {
        $result = $this->GanacheHtmlHelper->col([GA_OF12]);
        $expected = '<div class="offset12">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol6AndOf3()
    {
        $result = $this->GanacheHtmlHelper->col([GA_6, GA_OF3]);
        $expected = '<div class="span6 offset3">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol1WithIdHtmlAttribute()
    {
        $result = $this->GanacheHtmlHelper->col([GA_1], ['id' => 'my-id']);
        $expected = '<div id="my-id" class="span1">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testCol1WithCustomClass()
    {
        $result = $this->GanacheHtmlHelper->col([GA_1], ['class' => 'my-class']);
        $expected = '<div class="span1 my-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithoutAnyOptions()
    {
        $result = $this->GanacheHtmlHelper->tableOpen();
        $expected = '<table class="table">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenGaCondensed()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'ga_condensed' => true
        ]);
        $expected = '<table class="table table-condensed">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenGaStriped()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'ga_striped' => true
        ]);
        $expected = '<table class="table table-striped">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenGaBordered()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'ga_bordered' => true
        ]);
        $expected = '<table class="table table-bordered">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenGaHover()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'ga_hover' => true
        ]);
        $expected = '<table class="table table-hover">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithAllOptions()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'ga_condensed' => true,
            'ga_striped' => true,
            'ga_bordered' => true,
            'ga_hover' => true
        ]);
        $expected = '<table class="table table-condensed table-striped table-bordered table-hover">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithCustomSingleClassAsString()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'class' => 'my-custom-class',
        ]);
        $expected = '<table class="table my-custom-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithCustomSingleClassAsStringAndOneOption()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'ga_condensed' => true,
            'class' => 'my-custom-class'
        ]);
        $expected = '<table class="table table-condensed my-custom-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithCustomMultipleClassesAsString()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'class' => 'my-custom-class my-second'
        ]);
        $expected = '<table class="table my-custom-class my-second">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithCustomMultipleClassesAsStringAndOneOption()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'ga_condensed' => true,
            'class' => 'my-custom-class my-second'
        ]);
        $expected = '<table class="table table-condensed my-custom-class my-second">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithCustomSingleClassAsArray()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'class' => ['my-custom-class']
        ]);
        $expected = '<table class="table my-custom-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithCustomSingleClassAsArrayAnOneOption()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'ga_hover' => true,
            'class' => ['my-custom-class']
        ]);
        $expected = '<table class="table table-hover my-custom-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithCustomMultipleClassesAsArray()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'class' => ['my-custom-class', 'second-class']
        ]);
        $expected = '<table class="table my-custom-class second-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithCustomMultipleClassesAsArrayAnOneOption()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'ga_hover' => true,
            'class' => ['my-custom-class', 'second-class']
        ]);
        $expected = '<table class="table table-hover my-custom-class second-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableOpenWithCustomAttribute()
    {
        $result = $this->GanacheHtmlHelper->tableOpen([
            'id' => 'this-is-my-id',
            'ga_hover' => true,
            'class' => ['my-custom-class', 'second-class']
        ]);
        $expected = '<table id="this-is-my-id" class="table table-hover my-custom-class second-class">' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
    public function testTableClose()
    {
        $result = $this->GanacheHtmlHelper->tableClose();
        $expected = '</table>' . PHP_EOL;
        $this->assertEquals($result, $expected);
    }
}

