<?php
/**
 * CakeGanache : (https://github.com/gezeresolutionsweb/cakeganache)
 * Copyright (c) Sylvain Lévesque (http://www.gezere.com)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Sylvain Lévesque (http://www.gezere.com)
 * @link          http://www.gezere.com
 * @package       CakeGanache.View.Helper
 * @since         CakeGanache v 0.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// @todo Missing carousel related constants.

/**
 * GRID
 */
define('GA_CONTAINER', 'container');
define('GA_FLUID', 'fluid');
define('GA_CONTAINER_FLUID', GA_CONTAINER . '-' . GA_FLUID);
define('GA_ROW', 'row');
define('GA_ROW_FLUID', GA_ROW . '-' . GA_FLUID);
define('GA_SPAN', 'span');
define('GA_SPAN1', GA_SPAN . '1');
define('GA_SPAN2', GA_SPAN . '2');
define('GA_SPAN3', GA_SPAN . '3');
define('GA_SPAN4', GA_SPAN . '4');
define('GA_SPAN5', GA_SPAN . '5');
define('GA_SPAN6', GA_SPAN . '6');
define('GA_SPAN7', GA_SPAN . '7');
define('GA_SPAN8', GA_SPAN . '8');
define('GA_SPAN9', GA_SPAN . '9');
define('GA_SPAN10', GA_SPAN . '10');
define('GA_SPAN11', GA_SPAN . '11');
define('GA_SPAN12', GA_SPAN . '12');

/**
 * Displays
 */
define('GA_BLOCK', 'block');
define('GA_INLINE', 'inline');
define('GA_HORIZONTAL', 'horizontal');
define('GA_FIXED', 'fixed');
define('GA_STATIC', 'static');
define('GA_DYNAMIC', 'dynamic');

/**
 * Sizes
 */
define('GA_MINI', 'mini');
define('GA_SMALL', 'small');
define('GA_MEDIUM', 'medium');
define('GA_LARGE', 'large');
define('GA_X', 'x');
define('GA_XLARGE', GA_X . GA_LARGE);
define('GA_XXLARGE', GA_X . GA_XLARGE);

/**
 * States
 */
define('GA_DEFAULT', 'default'); // Bs3
define('GA_PRIMARY' , 'primary');
define('GA_ERROR' , 'error');
define('GA_SUCCESS' , 'success');
define('GA_WARNING' , 'warning');
define('GA_IMPORTANT' , 'important');
define('GA_INFO' , 'info');
define('GA_INVERSE' , 'inverse');
define('GA_DANGER' , 'danger');
define('GA_LINK' , 'link');

/**
 * Directional
 */
define('GA_LEFT', 'left');
define('GA_RIGHT', 'right');
define('GA_CENTER', 'center');
define('GA_CENTERED', GA_CENTER . 'ed');
define('GA_TOP', 'top');
define('GA_BOTTOM', 'bottom');
define('GA_BELOW', 'below');

/**
 * Various
 */
define('GA_ICON', 'icon');
define('GA_BAR', 'bar');
define('GA_ACTIONS', 'actions');
define('GA_STRIPED', 'striped');
define('GA_DISABLED', 'disabled');
define('GA_ACTIVE', 'active');
define('GA_ICON_BAR', GA_ICON . '-' . GA_BAR);
define('GA_PULL', 'pull');
define('GA_PULL_LEFT', GA_PULL . '-' . GA_LEFT);
define('GA_PULL_RIGHT', GA_PULL . '-' . GA_RIGHT);
define('GA_MUTED', 'muted');
define('GA_CLEARFIX', 'clearfix');
define('GA_DL_HORIZONTAL', 'dl-' . GA_HORIZONTAL);
define('GA_LIST', 'list');
define('GA_DIVIDER', 'divider');
define('GA_CLEAR', 'clear');
define('GA_PRE_SCROLLABLE', 'pre-scrollable'); // @test


/**
 * Help
 */
define('GA_HELP', 'help');
define('GA_HELP_BLOCK', GA_HELP . '-' . GA_BLOCK);
define('GA_HELP_INLINE', GA_HELP . '-' . GA_INLINE);

/**
 * Constant to define a Bootstrap button
 */
define('GA_BTN' , 'btn');
define('GA_BTN_DEFAULT', GA_BTN . '-' . GA_DEFAULT); // BS3
define('GA_BTN_PRIMARY', GA_BTN . '-' . GA_PRIMARY);
define('GA_BTN_INFO', GA_BTN . '-' . GA_INFO);
define('GA_BTN_SUCCESS', GA_BTN . '-' . GA_SUCCESS);
define('GA_BTN_WARNING', GA_BTN . '-' . GA_WARNING);
define('GA_BTN_DANGER', GA_BTN . '-' . GA_DANGER);
define('GA_BTN_INVERSE', GA_BTN . '-' . GA_INVERSE);
define('GA_BTN_LINK', GA_BTN . '-' . GA_LINK);


/**
 * Forms
 */
define('GA_FORM', 'form');
define('GA_CONTROL', 'control');
define('GA_GROUP', 'group');
define('GA_LABEL', 'label');
define('GA_CHECKBOX', 'checkbox');
define('GA_RADIO', 'radio');
define('GA_SEARCH', 'search');
define('GA_FORM_SEARCH', GA_FORM . '-' . GA_SEARCH);
define('GA_QUERY', 'query');
define('GA_SEARCH_QUERY', GA_SEARCH . '-' . GA_QUERY);
define('GA_FORM_INLINE', GA_FORM . '-' . GA_INLINE);
define('GA_FORM_HORIZONTAL', GA_FORM . '-' . GA_HORIZONTAL);
define('GA_CONTROL_GROUP', GA_CONTROL . '-' . GA_GROUP);
define('GA_CONTROL_LABEL', GA_CONTROL . '-' . GA_LABEL);
define('GA_CONTROLS', 'controls');
define('GA_CONTROLS_ROW', GA_CONTROLS . '-' . GA_ROW);
define('GA_INPUT', 'input');
define('GA_PREPEND', 'prepend');
define('GA_APPEND', 'append');
define('GA_INPUT_PREPEND', GA_INPUT . '-' . GA_PREPEND);
define('GA_INPUT_APPEND', GA_INPUT . '-' . GA_APPEND);
define('GA_ADD_ON', 'add-on');
define('GA_INPUT_MINI', GA_INPUT . '-' . GA_MINI);
define('GA_INPUT_SMALL', GA_INPUT . '-' . GA_SMALL);
define('GA_INPUT_MEDIUM', GA_INPUT . '-' . GA_MEDIUM);
define('GA_INPUT_LARGE', GA_INPUT . '-' . GA_LARGE);
define('GA_INPUT_XLARGE', GA_INPUT . '-' . GA_XLARGE);
define('GA_INPUT_XXLARGE', GA_INPUT . '-' . GA_XXLARGE);
define('GA_LEVEL', 'level');
define('GA_INPUT_BLOCK_LEVEL', GA_INPUT . '-' . GA_BLOCK . '-' . GA_LEVEL);
define('GA_UNEDITABLE', 'uneditable');
define('GA_UNEDITABLE_INPUT', GA_UNEDITABLE . '-' . GA_INPUT);
define('GA_FORM_ACTIONS', GA_FORM . '-' . GA_ACTIONS);

define('GA_BTN_GROUP', GA_BTN . '-' . GA_GROUP);
define('GA_DROPDOWN', 'dropdown');
define('GA_TOGGLE', 'toggle');
define('GA_DROPDOWN_TOGGLE', GA_DROPDOWN . '-' . GA_TOGGLE);
define('GA_MENU', 'menu');
define('GA_SUBMENU', 'submenu');
define('GA_DROPDOWN_MENU', GA_DROPDOWN . '-' . GA_MENU);
define('GA_DROPDOWN_SUBMENU', GA_DROPDOWN . '-' . GA_SUBMENU);
define('GA_CARET', 'caret');

/**
 * Table related constants
 */
define('GA_TABLE', 'table');
define('GA_TABLE_STRIPED', GA_TABLE . '-' . GA_STRIPED);
define('GA_BORDERED', 'bordered');
define('GA_TABLE_BORDERED', GA_TABLE . '-' . GA_BORDERED);
define('GA_HOVER', 'hover');
define('GA_TABLE_HOVER', GA_TABLE . '-' . GA_HOVER);
define('GA_CONDENSED', 'condensed');
define('GA_TABLE_CONDENSED', GA_TABLE . '-' . GA_CONDENSED);



/**
 * Constants to define button size
 */
define('GA_BTN_MINI', GA_BTN . '-' . GA_MINI);
define('GA_BTN_SMALL', GA_BTN . '-' . GA_SMALL);
define('GA_BTN_LARGE', GA_BTN . '-' . GA_LARGE);
define('GA_BTN_BLOCK', GA_BTN . '-' . GA_BLOCK);

/**
 * Constants to define text alignment
 */
define('GA_TEXT', 'text');
define('GA_TEXT_LEFT', GA_TEXT . '-' . GA_LEFT);
define('GA_TEXT_CENTER', GA_TEXT . '-' . GA_CENTER);
define('GA_TEXT_RIGHT', GA_TEXT . '-' . GA_RIGHT);

/**
 * Constants to define text emphasis
 */
define('GA_TEXT_WARNING', GA_TEXT . '-' . GA_WARNING);
define('GA_TEXT_ERROR', GA_TEXT . '-' . GA_ERROR);
define('GA_TEXT_INFO', GA_TEXT . '-' . GA_INFO);
define('GA_TEXT_SUCCESS', GA_TEXT . '-' . GA_SUCCESS);

/**
 * Constant to define image styles
 */
define('GA_IMG', 'img');
define('GA_RESPONSIVE', 'responsive');
define('GA_IMG_RESPONSIVE', GA_IMG . '-' . GA_RESPONSIVE); // Bs3
define('GA_ROUNDED', 'rounded');
define('GA_IMG_ROUNDED', GA_IMG . '-' . GA_ROUNDED);
define('GA_CIRCLE', 'circle');
define('GA_IMG_CIRCLE', GA_IMG . '-' . GA_CIRCLE);
define('GA_POLAROID', 'polaroid');
define('GA_IMG_POLAROID', GA_IMG . '-' . GA_POLAROID);

/**
 * Constant related to nav
 */
define('GA_NAV', 'nav');
define('GA_TABS', 'tabs');
define('GA_NAV_TABS', GA_NAV . '-' . GA_TABS);
define('GA_PILLS', 'pills');
define('GA_NAV_PILLS', GA_NAV . '-' . GA_PILLS);
define('GA_NAV_LIST', GA_NAV . '-' . GA_LIST);
define('GA_STACKED', 'stacked');
define('GA_NAV_STACKED', GA_NAV . '-' . GA_STACKED);
define('GA_HEADER', 'header');
define('GA_NAV_HEADER', GA_NAV . '-' . GA_HEADER);
define('GA_TABBABLE', 'tabbable');
define('GA_TAB', 'tab');
define('GA_CONTENT', 'content');
define('GA_TAB_CONTENT', GA_TAB . '-' . GA_CONTENT);
define('GA_PANE', 'pane');
define('GA_TAB_PANE', GA_TAB . '-' . GA_PANE);
define('GA_FADE', 'fade');
define('GA_TABS_BELOW', GA_TABS . '-' . GA_BELOW);
define('GA_TABS_LEFT', GA_TABS . '-' . GA_LEFT);
define('GA_TABS_RIGHT', GA_TABS . '-' . GA_RIGHT);
define('GA_TABS_TOP', GA_TABS . '-' . GA_TOP);


define('GA_DROPUP', 'dropup');
define('GA_TOOLBAR', 'toolbar');
define('GA_BTN_TOOLBAR', GA_BTN . '-' . GA_TOOLBAR);

/**
 * navbar
 */
define('GA_NAVBAR', 'navbar');
define('GA_INNER', 'inner');
define('GA_NAVBAR_INNER', GA_NAVBAR . '-' . GA_INNER);
define('GA_BRAND', 'brand');
define('GA_VERTICAL', 'vertical');
define('GA_DIVIDER_VERTICAL', GA_DIVIDER . '-' . GA_VERTICAL);
define('GA_NAVBAR_FORM', GA_NAVBAR . '-' . GA_FORM);
define('GA_NAVBAR_SEARCH', GA_NAVBAR . '-' . GA_SEARCH);
define('GA_NAVBAR_TEXT', GA_NAVBAR . '-' . GA_TEXT);
define('GA_NAVBAR_FIXED_TOP', GA_NAVBAR . '-' . GA_FIXED . '-' . GA_TOP);
define('GA_NAVBAR_FIXED_BOTTOM', GA_NAVBAR . '-' . GA_FIXED . '-' . GA_BOTTOM);
define('GA_NAVBAR_STATIC_TOP', GA_NAVBAR . '-' . GA_STATIC . '-' . GA_TOP);
define('GA_COLLAPSE', 'collapse');
define('GA_NAV_COLLAPSE', GA_NAV . '-' . GA_COLLAPSE);
define('GA_NAVBAR_INVERSE', GA_NAVBAR .'-' . GA_INVERSE);
define('GA_BTN_NAVBAR', GA_BTN . '-' . GA_NAVBAR); // Bs3

/**
 * Breadcrumbs
 */
define('GA_BREADCRUMB', 'breadcrumb');

/**
 * Pagination
 */
define('GA_PAGINATION', 'pagination');
define('GA_PAGINATION_MINI', GA_PAGINATION . '-' . GA_MINI);
define('GA_PAGINATION_SMALL', GA_PAGINATION . '-' . GA_SMALL);
define('GA_PAGINATION_LARGE', GA_PAGINATION . '-' . GA_LARGE);
define('GA_PAGINATION_CENTERED', GA_PAGINATION . '-' . GA_CENTERED);
define('GA_PAGINATION_RIGHT', GA_PAGINATION . '-' . GA_RIGHT);

/**
 * Pager
 */
define('GA_PAGER', 'pager');
define('GA_PREVIOUS', 'previous');
define('GA_NEXT', 'next');

/**
 * Labels
 */
define('GA_LABEL_SUCCESS', GA_LABEL . '-' . GA_SUCCESS);
define('GA_LABEL_WARNING', GA_LABEL . '-' . GA_WARNING);
define('GA_LABEL_IMPORTANT', GA_LABEL . '-' . GA_IMPORTANT);
define('GA_LABEL_INFO', GA_LABEL . '-' . GA_INFO);
define('GA_LABEL_INVERSE', GA_LABEL . '-' . GA_INVERSE);


/**
 * Badges
 */
define('GA_BADGE', 'badge');
define('GA_BADGE_DEFAULT', GA_BADGE . '-' . GA_DEFAULT); // Bs3
define('GA_BADGE_SUCCESS', GA_BADGE . '-' . GA_SUCCESS);
define('GA_BADGE_WARNING', GA_BADGE . '-' . GA_WARNING);
define('GA_BADGE_IMPORTANT', GA_BADGE . '-' . GA_IMPORTANT);
define('GA_BADGE_INFO', GA_BADGE . '-' . GA_INFO);
define('GA_BADGE_INVERSE', GA_BADGE . '-' . GA_INVERSE);

/**
 * Hero unit
 */
define('GA_HERO_UNIT', 'hero-unit');

/**
 * Page header
 */
define('GA_PAGE_HEADER', 'page-header');

/**
 * Thumbnails
 */
define('GA_THUMBNAILS', 'thumbnails');
define('GA_THUMBNAIL', 'thumbnail');

/**
 * Alert
 */
define('GA_ALERT', 'alert');
define('GA_CLOSE', 'close');
define('GA_ALERT_BLOCK', GA_ALERT . '-' . GA_BLOCK);
define('GA_ALERT_ERROR', GA_ALERT . '-' . GA_ERROR);
define('GA_ALERT_SUCCESS', GA_ALERT . '-' . GA_SUCCESS);
define('GA_ALERT_INFO', GA_ALERT . '-' . GA_INFO);


/**
 * Progress bar
 */
define('GA_PROGRESS', 'progress');
define('GA_BAR_SUCCESS', GA_BAR . '-' . GA_SUCCESS);
define('GA_BAR_INFO', GA_BAR . '-' . GA_INFO);
define('GA_BAR_WARNING', GA_BAR . '-' . GA_WARNING);
define('GA_BAR_DANGER', GA_BAR . '-' . GA_DANGER);
define('GA_PROGRESS_STRIPED', GA_PROGRESS . '-' . GA_STRIPED);


/**
 * Media object
 */
define('GA_MEDIA', 'media');
define('GA_OBJECT', 'object');
define('GA_MEDIA_OBJECT', GA_MEDIA . '-' . GA_OBJECT);
define('GA_BODY', 'body');
define('GA_MEDIA_BODY', GA_MEDIA . '-' . GA_BODY);
define('GA_HEADING', 'heading');
define('GA_MEDIA_HEADING', GA_MEDIA . '-' . GA_HEADING);
define('GA_MEDIA_LIST', GA_MEDIA . '-' . GA_LIST);

/**
 * Well
 */
define('GA_WELL', 'well');
define('GA_WELL_LARGE', GA_WELL . '-' . GA_LARGE);

/**
 * Extended Bootstrap 2.3.2 components
 */
define('GA_TABLENAVBAR', 'tablenavbar');
define('GA_TABLENAVBAR_DYNAMIC_CONTENT', GA_TABLENAVBAR . '-' . GA_DYNAMIC . '-' . GA_CONTENT);
define('GA_TABLENAVBAR_SEARCH_BTN', GA_TABLENAVBAR . '-' . GA_SEARCH . '-' . GA_BTN);
define('GA_TABLENAVBAR_CLEAR_BTN', GA_TABLENAVBAR . '-' . GA_CLEAR . '-' . GA_BTN);
define('GA_TABLENAVBAR_ACTIONS', GA_ACTIONS);

/**
 * Select picker
 */
define('GA_SELECTPICKER', 'selectpicker');
define('GA_SHOW_TICK', 'show-tick');

/**
 * Responsive
 */
define('GA_VISIBLE', 'visible'); // @test
define('GA_PHONE', 'phone'); // @test
define('GA_TABLET', 'tablet'); // @test
define('GA_DESKTOP', 'desktop'); // @test
define('GA_VISIBLE_PHONE', GA_VISIBLE . '-' . GA_PHONE); // @test
define('GA_VISIBLE_TABLET', GA_VISIBLE . '-' . GA_TABLET); // @test
define('GA_VISIBLE_DESKTOP', GA_VISIBLE . '-' . GA_DESKTOP); // @test
define('GA_HIDDEN', 'hidden'); // @test
define('GA_HIDDEN_PHONE', GA_HIDDEN . '-' . GA_PHONE); // @test
define('GA_HIDDEN_TABLET', GA_HIDDEN . '-' . GA_TABLET); // @test
define('GA_HIDDEN_DESKTOP', GA_HIDDEN . '-' . GA_DESKTOP); // @test

/**
 * Icons
 */
define('GA_WHITE', 'white'); // @test
define('GA_ICON_WHITE', GA_ICON . '-' . GA_WHITE); // @test
define('GA_LG', 'lg'); // @test
define('GA_2X', '2x'); // @test
define('GA_3X', '3x'); // @test
define('GA_4X', '4x'); // @test
define('GA_5X', '5x'); // @test
define('GA_FW', 'fw'); // @test
define('GA_SPINNER', 'spinner'); // @test
define('GA_SPIN', 'spin'); // @test
define('GA_PULSE', 'pulse'); // @test
define('GA_BORDER', 'border'); // @test
define('GA_ROTATE', 'rotate'); // @test
define('GA_90', '90'); // @test
define('GA_ROTATE_90', GA_ROTATE . '-' . GA_90); // @test
define('GA_180', '180'); // @test
define('GA_ROTATE_180', GA_ROTATE . '-' . GA_180); // @test
define('GA_270', '270'); // @test
define('GA_ROTATE_270', GA_ROTATE . '-' . GA_270); // @test
define('GA_FLIP', 'flip'); // @test
define('GA_FLIP_HORIZONTAL', GA_FLIP . '-' . GA_HORIZONTAL); // @test
define('GA_FLIP_VERTICAL', GA_FLIP . '-' . GA_VERTICAL); // @test
define('GA_STACK', 'stack'); // @test
define('GA_1X', '1x'); // @test
define('GA_STACK_1X', GA_STACK . '-' . GA_1X); // @test
define('GA_STACK_2X', GA_STACK . '-' . GA_2X); // @test
