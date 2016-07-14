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

// COMMON DISPLAYS
define('GA_BLOCK', 'block');
define('GA_INLINE', 'inline');
define('GA_HORIZONTAL', 'horizontal');
define('GA_FIXED', 'fixed');
define('GA_STATIC', 'static');
define('GA_DYNAMIC', 'dynamic');
define('GA_INLINE_BLOCK', 'inline-block'); // BS3 only @test

// COMMON SIZES
define('GA_MINI', 'mini');
define('GA_SMALL', 'small');
define('GA_MEDIUM', 'medium');
define('GA_LARGE', 'large');
define('GA_XLARGE', 'xlarge');
define('GA_XXLARGE', 'xxlarge');

// COMMON STATES
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

// COMMON DIRECTIONNAL
define('GA_LEFT', 'left');
define('GA_RIGHT', 'right');
define('GA_CENTER', 'center');
define('GA_CENTERED', 'centered');
define('GA_TOP', 'top');
define('GA_BOTTOM', 'bottom');
define('GA_BELOW', 'below');

// COMMON IMAGE SIZE
define('GA_ROUNDED', 'img-rounded');
define('GA_POLAROID', 'img-polaroid');
define('GA_CIRCLE', 'img-circle');

// VARIABLES

// MIXINS

// RESET

// SCAFFOLDING

// GRID
define('GA_ROW', 'row');
define('GA_ROW_FLUID', 'row-fluid');
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

// LAYOUT
define('GA_CONTAINER', 'container');
define('GA_CONTAINER_FLUID', 'container-fluid');

// TYPE
define('GA_PAGE_HEADER', 'page-header');

// CODE

// FORMS
define('GA_FORM', 'form');
define('GA_CONTROL', 'control');
define('GA_GROUP', 'group');
define('GA_LABEL', 'label');
define('GA_CHECKBOX', 'checkbox');
define('GA_RADIO', 'radio');
define('GA_SEARCH', 'search');
define('GA_FORM_SEARCH', 'form-search');
define('GA_QUERY', 'query');
define('GA_SEARCH_QUERY', 'search-query');
define('GA_FORM_INLINE', 'form-inline');
define('GA_FORM_HORIZONTAL', 'form-horizontal');
define('GA_CONTROL_GROUP', 'control-group');
define('GA_CONTROL_LABEL', 'control-label');
define('GA_CONTROLS', 'controls');
define('GA_CONTROLS_ROW', 'controls-row');
define('GA_INPUT', 'input');
define('GA_PREPEND', 'prepend');
define('GA_APPEND', 'append');
define('GA_INPUT_PREPEND', 'input-prepend');
define('GA_INPUT_APPEND', 'input-append');
define('GA_ADD_ON', 'add-on');
define('GA_INPUT_MINI', 'input-mini');
define('GA_INPUT_SMALL', 'input-small');
define('GA_INPUT_MEDIUM', 'input-medium');
define('GA_INPUT_LARGE', 'input-large');
define('GA_INPUT_XLARGE', 'input-xlarge');
define('GA_INPUT_XXLARGE', 'input-xxlarge');
define('GA_LEVEL', 'level');
define('GA_INPUT_BLOCK_LEVEL', 'input-block-level');
define('GA_UNEDITABLE', 'uneditable');
define('GA_UNEDITABLE_INPUT', 'uneditable-input');
define('GA_FORM_ACTIONS', 'form-actions');
define('GA_HELP_BLOCK', 'help-block');
define('GA_HELP_INLINE', 'help-inline');

// TABLES
define('GA_TABLE', 'table');
define('GA_TABLE_STRIPED', 'table-striped');
define('GA_BORDERED', 'bordered');
define('GA_TABLE_BORDERED', 'table-bordered');
define('GA_HOVER', 'hover');
define('GA_TABLE_HOVER', 'table-hover');
define('GA_CONDENSED', 'condensed');
define('GA_TABLE_CONDENSED', 'table-condensed');

// SPRITES
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
define('GA_ROTATE_90', 'rotate-90'); // @test
define('GA_180', '180'); // @test
define('GA_ROTATE_180', 'rotate-180'); // @test
define('GA_270', '270'); // @test
define('GA_ROTATE_270', 'rotate-270'); // @test
define('GA_FLIP', 'flip'); // @test
define('GA_FLIP_HORIZONTAL', 'flip-horizontal'); // @test
define('GA_FLIP_VERTICAL', 'flip-vertical'); // @test
define('GA_STACK', 'stack'); // @test
define('GA_1X', '1x'); // @test
define('GA_STACK_1X', 'stack-1x'); // @test
define('GA_STACK_2X', 'stack-2x'); // @test

// DROPDOWN
define('GA_BTN_GROUP', 'btn-group');
define('GA_BTN_GROUP_VERTICAL', 'btn-group-vertical'); // @test
define('GA_DROPDOWN', 'dropdown');
define('GA_TOGGLE', 'toggle');
define('GA_DROPDOWN_TOGGLE', 'dropdown-toggle');
define('GA_MENU', 'menu');
define('GA_SUBMENU', 'submenu');
define('GA_DROPDOWN_MENU', 'dropdown-menu');
define('GA_DROPDOWN_SUBMENU', 'dropdown-submenu');
define('GA_CARET', 'caret');

// WELLS
define('GA_WELL', 'well');
define('GA_WELL_LARGE', 'well-large');

// COMPONENT ANIMATIONS

// CLOSE

// BUTTONS
define('GA_BTN' , 'btn');
define('GA_BTN_DEFAULT', 'btn-default'); // BS3
define('GA_BTN_PRIMARY', 'btn-primary');
define('GA_BTN_INFO', 'btn-info');
define('GA_BTN_SUCCESS', 'btn-success');
define('GA_BTN_WARNING', 'btn-warning');
define('GA_BTN_DANGER', 'btn-danger');
define('GA_BTN_INVERSE', 'btn-inverse');
define('GA_BTN_LINK', 'btn-link');
define('GA_BTN_MINI', 'btn-mini');
define('GA_BTN_SMALL', 'btn-small');
define('GA_BTN_LARGE', 'btn-large');
define('GA_BTN_BLOCK', 'btn-block');

// BUTTON GROUPS
define('GA_DROPUP', 'dropup');
define('GA_TOOLBAR', 'toolbar');
define('GA_BTN_TOOLBAR', 'btn-toolbar');

// ALERTS
define('GA_ALERT', 'alert');
define('GA_CLOSE', 'close');
define('GA_ALERT_BLOCK', 'alert-block');
define('GA_ALERT_ERROR', 'alert-error');
define('GA_ALERT_SUCCESS', 'alert-success');
define('GA_ALERT_INFO', 'alert-info');

// NAVS
define('GA_NAV', 'nav');
define('GA_TABS', 'tabs');
define('GA_NAV_TABS', 'nav-tabs');
define('GA_PILLS', 'pills');
define('GA_NAV_PILLS', 'nav-pills');
define('GA_NAV_LIST', 'nav-list');
define('GA_STACKED', 'stacked');
define('GA_NAV_STACKED', 'nav-stacked');
define('GA_HEADER', 'header');
define('GA_NAV_HEADER', 'nav-header');
define('GA_TABBABLE', 'tabbable');
define('GA_TAB', 'tab');
define('GA_CONTENT', 'content');
define('GA_TAB_CONTENT', 'tab-content');
define('GA_PANE', 'pane');
define('GA_TAB_PANE', 'tab-pane');
define('GA_FADE', 'fade');
define('GA_TABS_BELOW', 'tabs-below');
define('GA_TABS_LEFT', 'tabs-left');
define('GA_TABS_RIGHT', 'tabs-right');
define('GA_TABS_TOP', 'tabs-top');

// NAVBAR
define('GA_NAVBAR', 'navbar');
define('GA_INNER', 'inner');
define('GA_NAVBAR_INNER', 'navbar-inner');
define('GA_BRAND', 'brand');
define('GA_VERTICAL', 'vertical');
define('GA_DIVIDER_VERTICAL', 'divider-vertical');
define('GA_NAVBAR_FORM', 'navbar-form');
define('GA_NAVBAR_SEARCH', 'navbar-search');
define('GA_NAVBAR_TEXT', 'navbar-text');
define('GA_NAVBAR_FIXED_TOP', 'navbar-fixed-top');
define('GA_NAVBAR_FIXED_BOTTOM', 'navbar-fixed-bottom');
define('GA_NAVBAR_STATIC_TOP', 'navbar-static-top');
define('GA_COLLAPSE', 'collapse');
define('GA_NAV_COLLAPSE', 'nav-collapse');
define('GA_NAVBAR_INVERSE', 'navbar-inverse');
define('GA_BTN_NAVBAR', 'btn-navbar'); // Bs3

// BREADCRUMBS
define('GA_BREADCRUMB', 'breadcrumb');

// PAGINATION
define('GA_PAGINATION', 'pagination');
define('GA_PAGINATION_MINI', 'pagination-mini');
define('GA_PAGINATION_SMALL', 'pagination-small');
define('GA_PAGINATION_LARGE', 'pagination-large');
define('GA_PAGINATION_CENTERED', 'pagination-centered');
define('GA_PAGINATION_RIGHT', 'pagination-right');

// PAGER
define('GA_PAGER', 'pager');
define('GA_PREVIOUS', 'previous');
define('GA_NEXT', 'next');

// MODALS

// TOOLTIP

// POPOVERS

// THUMBNAILS
define('GA_THUMBNAILS', 'thumbnails');
define('GA_THUMBNAIL', 'thumbnail');

// MEDIA
define('GA_MEDIA', 'media');
define('GA_OBJECT', 'object');
define('GA_MEDIA_OBJECT', 'media-object');
define('GA_BODY', 'body');
define('GA_MEDIA_BODY', 'media-body');
define('GA_HEADING', 'heading');
define('GA_MEDIA_HEADING', 'media-heading');
define('GA_MEDIA_LIST', 'media-list');

// LABELS BADGES
define('GA_LABEL_SUCCESS', 'label-success');
define('GA_LABEL_WARNING', 'label-warning');
define('GA_LABEL_IMPORTANT', 'label-important');
define('GA_LABEL_INFO', 'label-info');
define('GA_LABEL_INVERSE', 'label-inverse');
define('GA_BADGE', 'badge');
define('GA_BADGE_DEFAULT', 'badge-default'); // Bs3
define('GA_BADGE_SUCCESS', 'badge-success');
define('GA_BADGE_WARNING', 'badge-warning');
define('GA_BADGE_IMPORTANT', 'badge-important');
define('GA_BADGE_INFO', 'badge-info');
define('GA_BADGE_INVERSE', 'badge-inverse');

// PROGRESS BARS
define('GA_PROGRESS', 'progress');
define('GA_BAR_SUCCESS', 'bar-success');
define('GA_BAR_INFO', 'bar-info');
define('GA_BAR_WARNING', 'bar-warning');
define('GA_BAR_DANGER', 'bar-danger');
define('GA_PROGRESS_STRIPED', 'progress-striped');

// ACCORDION
define('GA_ACCORDION', 'accordion'); // @test
define('GA_ACCORDION_GROUP', 'accordion-group'); // @test
define('GA_ACCORDION_HEADING', 'accordion-heading'); // @test
define('GA_ACCORDION_TOGGLE', 'accordion-toggle'); // @test
define('GA_ACCORDION_INNER', 'accordion-inner'); // @test

// CAROUSEL

// HERO-UNIT
define('GA_HERO_UNIT', 'hero-unit');

// UTILITY CLASSES
define('GA_BAR', 'bar');
define('GA_ACTIONS', 'actions');
define('GA_STRIPED', 'striped');
define('GA_DISABLED', 'disabled');
define('GA_ACTIVE', 'active');
define('GA_ICON_BAR', 'icon-bar');
define('GA_PULL_LEFT', 'pull-left');
define('GA_PULL_RIGHT', 'pull-right');
define('GA_MUTED', 'muted');
define('GA_CLEARFIX', 'clearfix');
define('GA_DL_HORIZONTAL', 'dl-horizontal');
define('GA_LIST', 'list');
define('GA_DIVIDER', 'divider');
define('GA_CLEAR', 'clear');
define('GA_PRE_SCROLLABLE', 'pre-scrollable'); // @test
define('GA_VISIBLE', 'visible'); // @test
define('GA_PHONE', 'phone'); // @test
define('GA_TABLET', 'tablet'); // @test
define('GA_DESKTOP', 'desktop'); // @test
define('GA_VISIBLE_PHONE', 'visible-phone'); // @test
define('GA_VISIBLE_TABLET', 'visible-tablet'); // @test
define('GA_VISIBLE_DESKTOP', 'visible-desktop'); // @test
define('GA_HIDDEN', 'hidden'); // @test
define('GA_HIDDEN_PHONE', 'hidden-phone'); // @test
define('GA_HIDDEN_TABLET', 'hidden-tablet'); // @test
define('GA_HIDDEN_DESKTOP', 'hidden-desktop'); // @test
define('GA_TEXT', 'text');
define('GA_TEXT_LEFT', 'text-left');
define('GA_TEXT_CENTER', 'text-center');
define('GA_TEXT_RIGHT', 'text-right');
define('GA_TEXT_WARNING', 'text-warning');
define('GA_TEXT_ERROR', 'text-error');
define('GA_TEXT_INFO', 'text-info');
define('GA_TEXT_SUCCESS', 'text-success');

// TABLENAVBAR
define('GA_TABLENAVBAR', 'tablenavbar');
define('GA_TABLENAVBAR_DYNAMIC_CONTENT', 'tablenavbar-dynamic-content');
define('GA_TABLENAVBAR_SEARCH_BTN', 'tablenavbar-search-btn');
define('GA_TABLENAVBAR_CLEAR_BTN', 'tablenavbar-clear-btn');
define('GA_TABLENAVBAR_ACTIONS', 'actions');

// SELECT PICKER
define('GA_SELECTPICKER', 'selectpicker');
define('GA_SHOW_TICK', 'show-tick');

// RESPONSIVE UTILITIES
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

