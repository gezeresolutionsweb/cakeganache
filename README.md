CakeGanache 0.0.1-alpha
=======================

What about a good cake ganache ?

This is a CakePHP 2.x plugin that overload core helpers to support Twitter Bootstrap 2.x + extras

* Bootstrap 2.x Helpers
  * GanacheHtmlHelper
  * GanacheFormHelper
  * GanacheNavbarHelper
  * GanachePaginationHelper
  * GanacheCalendarHelper
  * GanacheTablenavbarHelper
* FontAwesome 4.x Helpers
* Javascript goddies
  * ganache-tablenavbar.js
  * ganache-chained.js

Installation
------------

### Composer

```bash
composer require gezeresolutionsweb/cakeganache:*
```

### Manual

Extract the plugin in the app/Plugin folder and load the plugin in your bootstrap.php file.

```php
CakePlugin::load('CakeGanache');
```


How to use?
-----------


Helpers are developpe with respect of core helper in mind. So load the helpers in your controller.

```php
public $helpers = array(
    'Html' => 'Cakeganache.GanacheHtml', 
    'Form' => 'Cakeganache.GanacheForm', 
    'Paginator' => 'Cakeganache.GanachePaginator',
    'Navbar' => 'Cakeganacge.GanacheNavbar'
    'TableNavbar' => 'Cakeganache.GanacheTableNavbar'
    'Calendar' => 'Cakeganache.GanacheCalendar'
) ;
```

Related and inspirated projects
-------------------------------

* http://mikael-capelle.fr CakeHelpers
* WebAndCow Cakephp Bootstrap Helpers


