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

// GRID
define('GA_CONTAINER', 'container');
define('GA_FLUID', 'fluid');
define('GA_CONTAINER_FLUID', 'container-fluid');
define('GA_ROW', 'row');
define('GA_ROW_FLUID', 'row-fluid'); // BS2 only
define('GA_1', 'span1'); // @test
define('GA_2', 'span2'); // @test
define('GA_3', 'span3'); // @test
define('GA_4', 'span4'); // @test
define('GA_5', 'span5'); // @test
define('GA_6', 'span6'); // @test
define('GA_7', 'span7'); // @test
define('GA_8', 'span8'); // @test
define('GA_9', 'span9'); // @test
define('GA_10', 'span10'); // @test
define('GA_11', 'span11'); // @test
define('GA_12', 'span12'); // @test
define('GA_XS1', 'col-xs-1'); // BS3 only @test
define('GA_XS2', 'col-xs-2'); // BS3 only @test
define('GA_XS3', 'col-xs-3'); // BS3 only @test
define('GA_XS4', 'col-xs-4'); // BS3 only @test
define('GA_XS5', 'col-xs-5'); // BS3 only @test
define('GA_XS6', 'col-xs-6'); // BS3 only @test
define('GA_XS7', 'col-xs-7'); // BS3 only @test
define('GA_XS8', 'col-xs-8'); // BS3 only @test
define('GA_XS9', 'col-xs-9'); // BS3 only @test
define('GA_XS10', 'col-xs-10'); // BS3 only @test
define('GA_XS11', 'col-xs-11'); // BS3 only @test
define('GA_XS12', 'col-xs-12'); // BS3 only @test
define('GA_SM1', 'col-sm-1'); // BS3 only @test
define('GA_SM2', 'col-sm-2'); // BS3 only @test
define('GA_SM3', 'col-sm-3'); // BS3 only @test
define('GA_SM4', 'col-sm-4'); // BS3 only @test
define('GA_SM5', 'col-sm-5'); // BS3 only @test
define('GA_SM6', 'col-sm-6'); // BS3 only @test
define('GA_SM7', 'col-sm-7'); // BS3 only @test
define('GA_SM8', 'col-sm-8'); // BS3 only @test
define('GA_SM9', 'col-sm-9'); // BS3 only @test
define('GA_SM10', 'col-sm-10'); // BS3 only @test
define('GA_SM11', 'col-sm-11'); // BS3 only @test
define('GA_SM12', 'col-sm-12'); // BS3 only @test
define('GA_MD1', 'col-md-1'); // BS3 only @test
define('GA_MD2', 'col-md-2'); // BS3 only @test
define('GA_MD3', 'col-md-3'); // BS3 only @test
define('GA_MD4', 'col-md-4'); // BS3 only @test
define('GA_MD5', 'col-md-5'); // BS3 only @test
define('GA_MD6', 'col-md-6'); // BS3 only @test
define('GA_MD7', 'col-md-7'); // BS3 only @test
define('GA_MD8', 'col-md-8'); // BS3 only @test
define('GA_MD9', 'col-md-9'); // BS3 only @test
define('GA_MD10', 'col-md-10'); // BS3 only @test
define('GA_MD11', 'col-md-11'); // BS3 only @test
define('GA_MD12', 'col-md-12'); // BS3 only @test
define('GA_LG1', 'col-lg-1'); // BS3 only @test
define('GA_LG2', 'col-lg-2'); // BS3 only @test
define('GA_LG3', 'col-lg-3'); // BS3 only @test
define('GA_LG4', 'col-lg-4'); // BS3 only @test
define('GA_LG5', 'col-lg-5'); // BS3 only @test
define('GA_LG6', 'col-lg-6'); // BS3 only @test
define('GA_LG7', 'col-lg-7'); // BS3 only @test
define('GA_LG8', 'col-lg-8'); // BS3 only @test
define('GA_LG9', 'col-lg-9'); // BS3 only @test
define('GA_LG10', 'col-lg-10'); // BS3 only @test
define('GA_LG11', 'col-lg-11'); // BS3 only @test
define('GA_LG12', 'col-lg-12'); // BS3 only @test
define('GA_OF1', 'offset-1'); // @test
define('GA_OF2', 'offset-2'); // @test
define('GA_OF3', 'offset-3'); // @test
define('GA_OF4', 'offset-4'); // @test
define('GA_OF5', 'offset-5'); // @test
define('GA_OF6', 'offset-6'); // @test
define('GA_OF7', 'offset-7'); // @test
define('GA_OF8', 'offset-8'); // @test
define('GA_OF9', 'offset-9'); // @test
define('GA_OF10', 'offset-10'); // @test
define('GA_OF11', 'offset-11'); // @test
define('GA_OF12', 'offset-12'); // @test
define('GA_XS_OF1', 'col-xs-offset-1'); // BS3 only @test
define('GA_XS_OF2', 'col-xs-offset-2'); // BS3 only @test
define('GA_XS_OF3', 'col-xs-offset-3'); // BS3 only @test
define('GA_XS_OF4', 'col-xs-offset-4'); // BS3 only @test
define('GA_XS_OF5', 'col-xs-offset-5'); // BS3 only @test
define('GA_XS_OF6', 'col-xs-offset-6'); // BS3 only @test
define('GA_XS_OF7', 'col-xs-offset-7'); // BS3 only @test
define('GA_XS_OF8', 'col-xs-offset-8'); // BS3 only @test
define('GA_XS_OF9', 'col-xs-offset-9'); // BS3 only @test
define('GA_XS_OF10', 'col-xs-offset-10'); // BS3 only @test
define('GA_XS_OF11', 'col-xs-offset-11'); // BS3 only @test
define('GA_XS_OF12', 'col-xs-offset-12'); // BS3 only @test
define('GA_SM_OF1', 'col-sm-offset-1'); // BS3 only @test
define('GA_SM_OF2', 'col-sm-offset-2'); // BS3 only @test
define('GA_SM_OF3', 'col-sm-offset-3'); // BS3 only @test
define('GA_SM_OF4', 'col-sm-offset-4'); // BS3 only @test
define('GA_SM_OF5', 'col-sm-offset-5'); // BS3 only @test
define('GA_SM_OF6', 'col-sm-offset-6'); // BS3 only @test
define('GA_SM_OF7', 'col-sm-offset-7'); // BS3 only @test
define('GA_SM_OF8', 'col-sm-offset-8'); // BS3 only @test
define('GA_SM_OF9', 'col-sm-offset-9'); // BS3 only @test
define('GA_SM_OF10', 'col-sm-offset-10'); // BS3 only @test
define('GA_SM_OF11', 'col-sm-offset-11'); // BS3 only @test
define('GA_SM_OF12', 'col-sm-offset-12'); // BS3 only @test
define('GA_MD_OF1', 'col-md-offset-1'); // BS3 only @test
define('GA_MD_OF2', 'col-md-offset-2'); // BS3 only @test
define('GA_MD_OF3', 'col-md-offset-3'); // BS3 only @test
define('GA_MD_OF4', 'col-md-offset-4'); // BS3 only @test
define('GA_MD_OF5', 'col-md-offset-5'); // BS3 only @test
define('GA_MD_OF6', 'col-md-offset-6'); // BS3 only @test
define('GA_MD_OF7', 'col-md-offset-7'); // BS3 only @test
define('GA_MD_OF8', 'col-md-offset-8'); // BS3 only @test
define('GA_MD_OF9', 'col-md-offset-9'); // BS3 only @test
define('GA_MD_OF10', 'col-md-offset-10'); // BS3 only @test
define('GA_MD_OF11', 'col-md-offset-11'); // BS3 only @test
define('GA_MD_OF12', 'col-md-offset-12'); // BS3 only @test
define('GA_LG_OF1', 'col-lg-offset-1'); // BS3 only @test
define('GA_LG_OF2', 'col-lg-offset-2'); // BS3 only @test
define('GA_LG_OF3', 'col-lg-offset-3'); // BS3 only @test
define('GA_LG_OF4', 'col-lg-offset-4'); // BS3 only @test
define('GA_LG_OF5', 'col-lg-offset-5'); // BS3 only @test
define('GA_LG_OF6', 'col-lg-offset-6'); // BS3 only @test
define('GA_LG_OF7', 'col-lg-offset-7'); // BS3 only @test
define('GA_LG_OF8', 'col-lg-offset-8'); // BS3 only @test
define('GA_LG_OF9', 'col-lg-offset-9'); // BS3 only @test
define('GA_LG_OF10', 'col-lg-offset-10'); // BS3 only @test
define('GA_LG_OF11', 'col-lg-offset-11'); // BS3 only @test
define('GA_LG_OF12', 'col-lg-offset-12'); // BS3 only @test

// Displays
define('GA_BLOCK', 'block');
define('GA_INLINE', 'inline');
define('GA_INLINE_BLOCK', 'inline-block'); // BS3 only @test
define('GA_HORIZONTAL', 'horizontal');
define('GA_FIXED', 'fixed');
define('GA_STATIC', 'static');
define('GA_DYNAMIC', 'dynamic');

// Sizes
define('GA_MINI', 'mini');
define('GA_SMALL', 'small');
define('GA_MEDIUM', 'medium');
define('GA_LARGE', 'large');
define('GA_XLARGE', 'xlarge');
define('GA_XXLARGE', 'xxlarge');

// States
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

// Directional
define('GA_LEFT', 'left');
define('GA_RIGHT', 'right');
define('GA_CENTER', 'center');
define('GA_CENTERED', 'centered');
define('GA_TOP', 'top');
define('GA_BOTTOM', 'bottom');
define('GA_BELOW', 'below');

// Various
define('GA_BAR', 'bar');
define('GA_ACTIONS', 'actions');
define('GA_STRIPED', 'striped');
define('GA_DISABLED', 'disabled');
define('GA_ACTIVE', 'active');
define('GA_ICON_BAR', 'icon-bar');
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


// Progress bar
define('GA_PROGRESS', 'progress');
define('GA_BAR_SUCCESS', 'bar-success');
define('GA_BAR_INFO', 'bar-info');
define('GA_BAR_WARNING', 'bar-warning');
define('GA_BAR_DANGER', 'bar-danger');
define('GA_PROGRESS_STRIPED', 'progress-striped');


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
 * Responsive utilities
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

define('GA_VISIBLE_XS_BLOCK', 'visible-xs-block'); // BS3 only @test
define('GA_VISIBLE_XS_INLINE', 'visible-xs-inline'); // BS3 only @test
define('GA_VISIBLE_XS_INLINE_BLOCK', 'visible-xs-inline-block'); // BS3 only @test
define('GA_VISIBLE_SM_BLOCK', 'visible-sm-block'); // BS3 only @test
define('GA_VISIBLE_SM_INLINE', 'visible-sm-inline'); // BS3 only @test
define('GA_VISIBLE_SM_INLINE_BLOCK', 'visible-sm-inline-block'); // BS3 only @test
define('GA_VISIBLE_MD_BLOCK', 'visible-md-block'); // BS3 only @test
define('GA_VISIBLE_MD_INLINE', 'visible-md-inline'); // BS3 only @test
define('GA_VISIBLE_MD_INLINE_BLOCK', 'visible-md-inline-block'); // BS3 only @test
define('GA_VISIBLE_LG_BLOCK', 'visible-lg-block'); // BS3 only @test
define('GA_VISIBLE_LG_INLINE', 'visible-lg-inline'); // BS3 only @test
define('GA_VISIBLE_LG_INLINE_BLOCK', 'visible-lg-inline-block'); // BS3 only @test
define('GA_HIDDEN_XS', 'hidden-xs'); // BS3 only @test
define('GA_HIDDEN_SM', 'hidden-sm'); // BS3 only @test
define('GA_HIDDEN_MD', 'hidden-md'); // BS3 only @test
define('GA_HIDDEN_LG', 'hidden-lg'); // BS3 only @test
define('GA_VISIBLE_PRINT_BLOCK', 'visible-print-block'); // BS3 only @test
define('GA_VISIBLE_PRINT_INLINE', 'visible-print-inline'); // BS3 only @test
define('GA_VISIBLE_PRINT_INLINE_BLOCK', 'visible-print-inline-block'); // BS3 only @test
define('GA_HIDDEN_PRINT', 'hidden-print'); // BS3 only @test

// Icons
define('GA_WHITE', 'white'); // @test
define('GA_ICON_WHITE', 'icon-white'); // @test
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
