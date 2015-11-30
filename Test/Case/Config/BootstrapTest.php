<?php
/**
 * This test class test that all constants exists
 * and their values are accurate.
 */
class BootstrapTest extends CakeTestCase
{
    public function testGaContainerExists()
    {
        $this->assertTrue(defined('GA_CONTAINER'));
    }

    public function testGaContainerValue()
    {
        $this->assertTrue(GA_CONTAINER === 'container');
    }

    public function testGaContainerFluidExists()
    {
        $this->assertTrue(defined('GA_CONTAINER_FLUID'));
    }

    public function testGaContainerFluidValue()
    {
        $this->assertTrue(GA_CONTAINER_FLUID === 'container-fluid');
    }

    public function testGaRowExists()
    {
        $this->assertTrue(defined('GA_ROW'));
    }

    public function testGaRowValue()
    {
        $this->assertTrue(GA_ROW === 'row');
    }

    public function testGaRowFluidExists()
    {
        $this->assertTrue(defined('GA_ROW_FLUID'));
    }

    public function testGaRowFluidValue()
    {
        $this->assertTrue(GA_ROW_FLUID === 'row-fluid');
    }

    public function testGaSpan1Exists()
    {
        $this->assertTrue(defined('GA_SPAN1'));
    }

    public function testGaSpan1Value()
    {
        $this->assertTrue(GA_SPAN1 === 'span1');
    }

    public function testGaSpan2Exists()
    {
        $this->assertTrue(defined('GA_SPAN2'));
    }

    public function testGaSpan2Value()
    {
        $this->assertTrue(GA_SPAN2 === 'span2');
    }

    public function testGaSpan3Exists()
    {
        $this->assertTrue(defined('GA_SPAN3'));
    }

    public function testGaSpan3Value()
    {
        $this->assertTrue(GA_SPAN3 === 'span3');
    }

    public function testGaSpan4Exists()
    {
        $this->assertTrue(defined('GA_SPAN4'));
    }

    public function testGaSpan4Value()
    {
        $this->assertTrue(GA_SPAN4 === 'span4');
    }

    public function testGaSpan5Exists()
    {
        $this->assertTrue(defined('GA_SPAN5'));
    }

    public function testGaSpan5Value()
    {
        $this->assertTrue(GA_SPAN5 === 'span5');
    }

    public function testGaSpan6Exists()
    {
        $this->assertTrue(defined('GA_SPAN6'));
    }

    public function testGaSpan6Value()
    {
        $this->assertTrue(GA_SPAN6 === 'span6');
    }

    public function testGaSpan7Exists()
    {
        $this->assertTrue(defined('GA_SPAN7'));
    }

    public function testGaSpan7Value()
    {
        $this->assertTrue(GA_SPAN7 === 'span7');
    }

    public function testGaSpan8Exists()
    {
        $this->assertTrue(defined('GA_SPAN8'));
    }

    public function testGaSpan8Value()
    {
        $this->assertTrue(GA_SPAN8 === 'span8');
    }

    public function testGaSpan9Exists()
    {
        $this->assertTrue(defined('GA_SPAN9'));
    }

    public function testGaSpan9Value()
    {
        $this->assertTrue(GA_SPAN9 === 'span9');
    }

    public function testGaSpan10Exists()
    {
        $this->assertTrue(defined('GA_SPAN10'));
    }

    public function testGaSpan10Value()
    {
        $this->assertTrue(GA_SPAN10 === 'span10');
    }

    public function testGaSpan11Exists()
    {
        $this->assertTrue(defined('GA_SPAN11'));
    }

    public function testGaSpan11Value()
    {
        $this->assertTrue(GA_SPAN11 === 'span11');
    }

    public function testGaSpan12Exists()
    {
        $this->assertTrue(defined('GA_SPAN12'));
    }

    public function testGaSpan12Value()
    {
        $this->assertTrue(GA_SPAN12 === 'span12');
    }

    public function testGaDlHorizontalExists()
    {
        $this->assertTrue(defined('GA_DL_HORIZONTAL'));
    }

    public function testGaDlHorizontalValue()
    {
        $this->assertTrue(GA_DL_HORIZONTAL === 'dl-horizontal');
    }

    public function testGaHelpBlockExists()
    {
        $this->assertTrue(defined('GA_HELP_BLOCK'));
    }

    public function testGaHelpBlockValue()
    {
        $this->assertTrue(GA_HELP_BLOCK === 'help-block');
    }

    public function testGaHelpInlineExists()
    {
        $this->assertTrue(defined('GA_HELP_INLINE'));
    }

    public function testGaHelpInlineValue()
    {
        $this->assertTrue(GA_HELP_INLINE === 'help-inline');
    }

    public function testGaCheckboxExists()
    {
        $this->assertTrue(defined('GA_CHECKBOX'));
    }

    public function testGaCheckboxValue()
    {
        $this->assertTrue(GA_CHECKBOX === 'checkbox');
    }

    public function testGaRadioExists()
    {
        $this->assertTrue(defined('GA_RADIO'));
    }

    public function testGaRadioValue()
    {
        $this->assertTrue(GA_RADIO === 'radio');
    }

    public function testGaFormSearchExists()
    {
        $this->assertTrue(defined('GA_FORM_SEARCH'));
    }

    public function testGaFormSearchValue()
    {
        $this->assertTrue(GA_FORM_SEARCH === 'form-search');
    }

    public function testGaSearchQueryExists()
    {
        $this->assertTrue(defined('GA_SEARCH_QUERY'));
    }

    public function testGaSearchQueryValue()
    {
        $this->assertTrue(GA_SEARCH_QUERY === 'search-query');
    }

    public function testGaFormInlineExists()
    {
        $this->assertTrue(defined('GA_FORM_INLINE'));
    }

    public function testGaFormInlineValue()
    {
        $this->assertTrue(GA_FORM_INLINE === 'form-inline');
    }

    public function testGaFormHorizontalExists()
    {
        $this->assertTrue(defined('GA_FORM_HORIZONTAL'));
    }

    public function testGaFormHorizontalValue()
    {
        $this->assertTrue(GA_FORM_HORIZONTAL === 'form-horizontal');
    }

    public function testGaControlGroupExists()
    {
        $this->assertTrue(defined('GA_CONTROL_GROUP'));
    }

    public function testGaControlGroupValue()
    {
        $this->assertTrue(GA_CONTROL_GROUP === 'control-group');
    }

    public function testGaControlLabelExists()
    {
        $this->assertTrue(defined('GA_CONTROL_LABEL'));
    }

    public function testGaControlLabelValue()
    {
        $this->assertTrue(GA_CONTROL_LABEL === 'control-label');
    }

    public function testGaControlsExists()
    {
        $this->assertTrue(defined('GA_CONTROLS'));
    }

    public function testGaControlsValue()
    {
        $this->assertTrue(GA_CONTROLS === 'controls');
    }

    public function testGaControlsRowExists()
    {
        $this->assertTrue(defined('GA_CONTROLS_ROW'));
    }

    public function testGaControlsRowValue()
    {
        $this->assertTrue(GA_CONTROLS_ROW === 'controls-row');
    }

    public function testGaInputPrependExists()
    {
        $this->assertTrue(defined('GA_INPUT_PREPEND'));
    }

    public function testGaInputPrependValue()
    {
        $this->assertTrue(GA_INPUT_PREPEND === 'input-prepend');
    }

    public function testGaInputAppendExists()
    {
        $this->assertTrue(defined('GA_INPUT_APPEND'));
    }

    public function testGaInputAppenedValue()
    {
        $this->assertTrue(GA_INPUT_APPEND === 'input-append');
    }

    public function testGaAddOnExists()
    {
        $this->assertTrue(defined('GA_ADD_ON'));
    }

    public function testGaAddOnValue()
    {
        $this->assertTrue(GA_ADD_ON === 'add-on');
    }

    public function testGaInputMiniExists()
    {
        $this->assertTrue(defined('GA_INPUT_MINI'));
    }

    public function testGaInputMiniValue()
    {
        $this->assertTrue(GA_INPUT_MINI === 'input-mini');
    }

    public function testGaInputSmallExists()
    {
        $this->assertTrue(defined('GA_INPUT_SMALL'));
    }

    public function testGaInputSmallValue()
    {
        $this->assertTrue(GA_INPUT_SMALL === 'input-small');
    }

    public function testGaInputMediumExists()
    {
        $this->assertTrue(defined('GA_INPUT_MEDIUM'));
    }

    public function testGaInputMediumValue()
    {
        $this->assertTrue(GA_INPUT_MEDIUM === 'input-medium');
    }

    public function testGaInputLargeExists()
    {
        $this->assertTrue(defined('GA_INPUT_LARGE'));
    }

    public function testGaInputLargeValue()
    {
        $this->assertTrue(GA_INPUT_LARGE === 'input-large');
    }

    public function testGaInputXlargeExists()
    {
        $this->assertTrue(defined('GA_INPUT_XLARGE'));
    }

    public function testGaInputXlargeValue()
    {
        $this->assertTrue(GA_INPUT_XLARGE === 'input-xlarge');
    }

    public function testGaInputXxlargeExists()
    {
        $this->assertTrue(defined('GA_INPUT_XXLARGE'));
    }

    public function testGaInputXxlargeValue()
    {
        $this->assertTrue(GA_INPUT_XXLARGE === 'input-xxlarge');
    }

    public function testGaInputBlockLevelExists()
    {
        $this->assertTrue(defined('GA_INPUT_BLOCK_LEVEL'));
    }

    public function testGaInputBlockLevelValue()
    {
        $this->assertTrue(GA_INPUT_BLOCK_LEVEL === 'input-block-level');
    }

    public function testGaUneditableInputExists()
    {
        $this->assertTrue(defined('GA_UNEDITABLE_INPUT'));
    }

    public function testGaUneditableInputValue()
    {
        $this->assertTrue(GA_UNEDITABLE_INPUT === 'uneditable-input');
    }

    public function testGaFormActionsExists()
    {
        $this->assertTrue(defined('GA_FORM_ACTIONS'));
    }

    public function testGaFormActionsValue()
    {
        $this->assertTrue(GA_FORM_ACTIONS === 'form-actions');
    }

    public function testGaBtnGroupExists()
    {
        $this->assertTrue(defined('GA_BTN_GROUP'));
    }

    public function testGaBtnGroupValue()
    {
        $this->assertTrue(GA_BTN_GROUP === 'btn-group');
    }

    public function testGaDropdownToggleExists()
    {
        $this->assertTrue(defined('GA_DROPDOWN_TOGGLE'));
    }

    public function testGaDropdownToggleValue()
    {
        $this->assertTrue(GA_DROPDOWN_TOGGLE === 'dropdown-toggle');
    }

    public function testGaDropdownMenuExists()
    {
        $this->assertTrue(defined('GA_DROPDOWN_MENU'));
    }

    public function testGaDropdownMenuValue()
    {
        $this->assertTrue(GA_DROPDOWN_MENU === 'dropdown-menu');
    }

    public function testGaCaretExists()
    {
        $this->assertTrue(defined('GA_CARET'));
    }

    public function testGaCaretValue()
    {
        $this->assertTrue(GA_CARET === 'caret');
    }

    public function testGaTableExists()
    {
        $this->assertTrue(defined('GA_TABLE'));
    }

    public function testGaTableValue()
    {
        $this->assertTrue(GA_TABLE === 'table');
    }

    public function testGaTableStripedExists()
    {
        $this->assertTrue(defined('GA_TABLE_STRIPED'));
    }

    public function testGaTableStripedValue()
    {
        $this->assertTrue(GA_TABLE_STRIPED === 'table-striped');
    }

    public function testGaTableBorderedExists()
    {
        $this->assertTrue(defined('GA_TABLE_BORDERED'));
    }

    public function testGaTableBorderedValue()
    {
        $this->assertTrue(GA_TABLE_BORDERED === 'table-bordered');
    }

    public function testGaTableHoverExists()
    {
        $this->assertTrue(defined('GA_TABLE_HOVER'));
    }

    public function testGaTableHoverValue()
    {
        $this->assertTrue(GA_TABLE_HOVER === 'table-hover');
    }

    public function testGaTableCondensedExists()
    {
        $this->assertTrue(defined('GA_TABLE_CONDENSED'));
    }

    public function testGaTableCondensedValue()
    {
        $this->assertTrue(GA_TABLE_CONDENSED === 'table-condensed');
    }

    public function testGaBtnExists()
    {
        $this->assertTrue(defined('GA_BTN'));
    }

    public function testGaBtnValue()
    {
        $this->assertTrue(GA_BTN === 'btn');
    }

    public function testGaBtnDefaultExists()
    {
        $this->assertTrue(defined('GA_BTN_DEFAULT'));
    }

    public function testGaBtnDefaultValue()
    {
        $this->assertTrue(GA_BTN_DEFAULT === 'btn-default');
    }

    public function testGaBtnPrimaryExists()
    {
        $this->assertTrue(defined('GA_BTN_PRIMARY'));
    }

    public function testGaBtnPrimaryValue()
    {
        $this->assertTrue(GA_BTN_PRIMARY === 'btn-primary');
    }

    public function testGaBtnInfoExists()
    {
        $this->assertTrue(defined('GA_BTN_INFO'));
    }

    public function testGaBtnInfoValue()
    {
        $this->assertTrue(GA_BTN_INFO === 'btn-info');
    }

    public function testGaBtnSuccessExists()
    {
        $this->assertTrue(defined('GA_BTN_SUCCESS'));
    }

    public function testGaBtnSuccessValue()
    {
        $this->assertTrue(GA_BTN_SUCCESS === 'btn-success');
    }

    public function testGaBtnWarningExists()
    {
        $this->assertTrue(defined('GA_BTN_WARNING'));
    }

    public function testGaBtnWarningValue()
    {
        $this->assertTrue(GA_BTN_WARNING === 'btn-warning');
    }

    public function testGaBtnDangerExists()
    {
        $this->assertTrue(defined('GA_BTN_DANGER'));
    }

    public function testGaBtnDangerValue()
    {
        $this->assertTrue(GA_BTN_DANGER === 'btn-danger');
    }

    public function testGaBtnInverseExists()
    {
        $this->assertTrue(defined('GA_BTN_INVERSE'));
    }

    public function testGaBtnInverseValue()
    {
        $this->assertTrue(GA_BTN_INVERSE === 'btn-inverse');
    }

    public function testGaBtnLinkExists()
    {
        $this->assertTrue(defined('GA_BTN_LINK'));
    }

    public function testGaBtnLinkValue()
    {
        $this->assertTrue(GA_BTN_LINK === 'btn-link');
    }

    public function testGaBtnMiniExists()
    {
        $this->assertTrue(defined('GA_BTN_MINI'));
    }

    public function testGaBtnMiniValue()
    {
        $this->assertTrue(GA_BTN_MINI === 'btn-mini');
    }

    public function testGaBtnSmallExists()
    {
        $this->assertTrue(defined('GA_BTN_SMALL'));
    }

    public function testGaBtnSmallValue()
    {
        $this->assertTrue(GA_BTN_SMALL === 'btn-small');
    }

    public function testGaBtnLargeExists()
    {
        $this->assertTrue(defined('GA_BTN_LARGE'));
    }

    public function testGaBtnLargeValue()
    {
        $this->assertTrue(GA_BTN_LARGE === 'btn-large');
    }

    public function testGaBtnBlockExists()
    {
        $this->assertTrue(defined('GA_BTN_BLOCK'));
    }

    public function testGaBtnBlockValue()
    {
        $this->assertTrue(GA_BTN_BLOCK === 'btn-block');
    }

    public function testGaDisabledExists()
    {
        $this->assertTrue(defined('GA_DISABLED'));
    }

    public function testGaDisabledValue()
    {
        $this->assertTrue(GA_DISABLED === 'disabled');
    }

    public function testGaActiveExists()
    {
        $this->assertTrue(defined('GA_ACTIVE'));
    }

    public function testGaActiveValue()
    {
        $this->assertTrue(GA_ACTIVE === 'active');
    }

    public function testGaInlineExists()
    {
        $this->assertTrue(defined('GA_INLINE'));
    }

    public function testGaInlineValue()
    {
        $this->assertTrue(GA_INLINE === 'inline');
    }

    public function testGaPullLeftExists()
    {
        $this->assertTrue(defined('GA_PULL_LEFT'));
    }

    public function testGaPullLeftValue()
    {
        $this->assertTrue(GA_PULL_LEFT === 'pull-left');
    }

    public function testGaPullRightExists()
    {
        $this->assertTrue(defined('GA_PULL_RIGHT'));
    }

    public function testGaPullRightValue()
    {
        $this->assertTrue(GA_PULL_RIGHT === 'pull-right');
    }

    public function testGaMutedExists()
    {
        $this->assertTrue(defined('GA_MUTED'));
    }

    public function testGaMutedValue()
    {
        $this->assertTrue(GA_MUTED === 'muted');
    }

    public function testGaClearfixExists()
    {
        $this->assertTrue(defined('GA_CLEARFIX'));
    }

    public function testGaClearfixValue()
    {
        $this->assertTrue(GA_CLEARFIX === 'clearfix');
    }

    public function testGaSuccessExists()
    {
        $this->assertTrue(defined('GA_SUCCESS'));
    }

    public function testGaSuccessValue()
    {
        $this->assertTrue(GA_SUCCESS === 'success');
    }

    public function testGaWarningExists()
    {
        $this->assertTrue(defined('GA_WARNING'));
    }

    public function testGaWarningValue()
    {
        $this->assertTrue(GA_WARNING === 'warning');
    }

    public function testGaImportantExists()
    {
        $this->assertTrue(defined('GA_IMPORTANT'));
    }

    public function testGaImportantValue()
    {
        $this->assertTrue(GA_IMPORTANT === 'important');
    }

    public function testGaInfoExists()
    {
        $this->assertTrue(defined('GA_INFO'));
    }

    public function testGaInfoValue()
    {
        $this->assertTrue(GA_INFO === 'info');
    }

    public function testGaInverseExists()
    {
        $this->assertTrue(defined('GA_INVERSE'));
    }

    public function testGaInverseValue()
    {
        $this->assertTrue(GA_INVERSE === 'inverse');
    }

    public function testGaDangerExists()
    {
        $this->assertTrue(defined('GA_DANGER'));
    }

    public function testGaDangerValue()
    {
        $this->assertTrue(GA_DANGER === 'danger');
    }

    public function testGaLinkExists()
    {
        $this->assertTrue(defined('GA_LINK'));
    }

    public function testGaLinkValue()
    {
        $this->assertTrue(GA_LINK === 'link');
    }

    public function testGaXsExists()
    {
        $this->assertTrue(defined('GA_XS'));
    }

    public function testGaXsValue()
    {
        $this->assertTrue(GA_XS === 'mini');
    }

    public function testGaSExists()
    {
        $this->assertTrue(defined('GA_S'));
    }

    public function testGaSValue()
    {
        $this->assertTrue(GA_S === 'small');
    }

    public function testGaLExists()
    {
        $this->assertTrue(defined('GA_L'));
    }

    public function testGaLValue()
    {
        $this->assertTrue(GA_L === 'large');
    }

    public function testGaTextLeftExists()
    {
        $this->assertTrue(defined('GA_TEXT_LEFT'));
    }

    public function testGaTextLeftValue()
    {
        $this->assertTrue(GA_TEXT_LEFT === 'text-left');
    }

    public function testGaTextCenterExists()
    {
        $this->assertTrue(defined('GA_TEXT_CENTER'));
    }

    public function testGaTextCenterValue()
    {
        $this->assertTrue(GA_TEXT_CENTER === 'text-center');
    }

    public function testGaTextRightExists()
    {
        $this->assertTrue(defined('GA_TEXT_RIGHT'));
    }

    public function testGaTextRightValue()
    {
        $this->assertTrue(GA_TEXT_RIGHT === 'text-right');
    }

    public function testGaTextWarningExists()
    {
        $this->assertTrue(defined('GA_TEXT_WARNING'));
    }

    public function testGaTextWarningValue()
    {
        $this->assertTrue(GA_TEXT_WARNING === 'text-warning');
    }

    public function testGaTextErrorExists()
    {
        $this->assertTrue(defined('GA_TEXT_ERROR'));
    }

    public function testGaTextErrorValue()
    {
        $this->assertTrue(GA_TEXT_ERROR === 'text-error');
    }

    public function testGaTextInfoExists()
    {
        $this->assertTrue(defined('GA_TEXT_INFO'));
    }

    public function testGaTextInfoValue()
    {
        $this->assertTrue(GA_TEXT_INFO === 'text-info');
    }

    public function testGaTextSuccessExists()
    {
        $this->assertTrue(defined('GA_TEXT_SUCCESS'));
    }

    public function testGaTextSuccessValue()
    {
        $this->assertTrue(GA_TEXT_SUCCESS === 'text-success');
    }

    public function testGaImgRoundedExists()
    {
        $this->assertTrue(defined('GA_IMG_ROUNDED'));
    }

    public function testGaImgRoundedValue()
    {
        $this->assertTrue(GA_IMG_ROUNDED === 'img-rounded');
    }

    public function testGaImgCircleExists()
    {
        $this->assertTrue(defined('GA_IMG_CIRCLE'));
    }

    public function testGaImgCircleValue()
    {
        $this->assertTrue(GA_IMG_CIRCLE === 'img-circle');
    }

    public function testGaImgPolaroidExists()
    {
        $this->assertTrue(defined('GA_IMG_POLAROID'));
    }

    public function testGaImgPolaroidValue()
    {
        $this->assertTrue(GA_IMG_POLAROID === 'img-polaroid');
    }

    public function testGaNavExists()
    {
        $this->assertTrue(defined('GA_NAV'));
    }

    public function testGaNavValue()
    {
        $this->assertTrue(GA_NAV === 'nav');
    }

    public function testGaNavTabsExists()
    {
        $this->assertTrue(defined('GA_NAV_TABS'));
    }

    public function testGaNavTabsValue()
    {
        $this->assertTrue(GA_NAV_TABS === 'nav-tabs');
    }

    public function testGaNavPillsExists()
    {
        $this->assertTrue(defined('GA_NAV_PILLS'));
    }

    public function testGaNavPillsValue()
    {
        $this->assertTrue(GA_NAV_PILLS === 'nav-pills');
    }

    public function testGaNavListExists()
    {
        $this->assertTrue(defined('GA_NAV_LIST'));
    }

    public function testGaNavListValue()
    {
        $this->assertTrue(GA_NAV_LIST === 'nav-list');
    }

    public function testGaNavStackedExists()
    {
        $this->assertTrue(defined('GA_NAV_STACKED'));
    }

    public function testGaNavStackedValue()
    {
        $this->assertTrue(GA_NAV_STACKED === 'nav-stacked');
    }

    public function testGaNavHeaderExists()
    {
        $this->assertTrue(defined('GA_NAV_HEADER'));
    }

    public function testGaNavHeaderValue()
    {
        $this->assertTrue(GA_NAV_HEADER === 'nav-header');
    }

    public function testGaDividerExists()
    {
        $this->assertTrue(defined('GA_DIVIDER'));
    }

    public function testGaDividerValue()
    {
        $this->assertTrue(GA_DIVIDER === 'divider');
    }

    public function testGaTabbableExists()
    {
        $this->assertTrue(defined('GA_TABBABLE'));
    }

    public function testGaTabbableValue()
    {
        $this->assertTrue(GA_TABBABLE === 'tabbable');
    }

    public function testGaTabContentExists()
    {
        $this->assertTrue(defined('GA_TAB_CONTENT'));
    }

    public function testGaTabContentValue()
    {
        $this->assertTrue(GA_TAB_CONTENT === 'tab-content');
    }

    public function testGaTabPaneExists()
    {
        $this->assertTrue(defined('GA_TAB_PANE'));
    }

    public function testGaTabPaneValue()
    {
        $this->assertTrue(GA_TAB_PANE === 'tab-pane');
    }

    public function testGaFadeExists()
    {
        $this->assertTrue(defined('GA_FADE'));
    }

    public function testGaFadeValue()
    {
        $this->assertTrue(GA_FADE === 'fade');
    }

    public function testGaTabsBelowExists()
    {
        $this->assertTrue(defined('GA_TABS_BELOW'));
    }

    public function testGaTabsBelowValue()
    {
        $this->assertTrue(GA_TABS_BELOW === 'tabs-below');
    }

    public function testGaTabsLeftExists()
    {
        $this->assertTrue(defined('GA_TABS_LEFT'));
    }

    public function testGaTabsLeftValue()
    {
        $this->assertTrue(GA_TABS_LEFT === 'tabs-left');
    }

    public function testGaTabsRightExists()
    {
        $this->assertTrue(defined('GA_TABS_RIGHT'));
    }

    public function testGaTabsRightValue()
    {
        $this->assertTrue(GA_TABS_RIGHT === 'tabs-right');
    }

    public function testGaTabsTopExists()
    {
        $this->assertTrue(defined('GA_TABS_TOP'));
    }

    public function testGaTabsTopValue()
    {
        $this->assertTrue(GA_TABS_TOP === 'tabs-top');
    }

    public function testGaDropupExists()
    {
        $this->assertTrue(defined('GA_DROPUP'));
    }

    public function testGaDropupValue()
    {
        $this->assertTrue(GA_DROPUP === 'dropup');
    }

    public function testGaBtnToolbarExists()
    {
        $this->assertTrue(defined('GA_BTN_TOOLBAR'));
    }

    public function testGaBtnToolbarValue()
    {
        $this->assertTrue(GA_BTN_TOOLBAR === 'btn-toolbar');
    }

    public function testGaNavbarExists()
    {
        $this->assertTrue(defined('GA_NAVBAR'));
    }

    public function testGaNavbarValue()
    {
        $this->assertTrue(GA_NAVBAR === 'navbar');
    }

    public function testGaNavbarInnerExists()
    {
        $this->assertTrue(defined('GA_NAVBAR_INNER'));
    }

    public function testGaNavbarInnerValue()
    {
        $this->assertTrue(GA_NAVBAR_INNER === 'navbar-inner');
    }

    public function testGaBrandExists()
    {
        $this->assertTrue(defined('GA_BRAND'));
    }

    public function testGaBrandValue()
    {
        $this->assertTrue(GA_BRAND === 'brand');
    }

    public function testGaDividerVerticalExists()
    {
        $this->assertTrue(defined('GA_DIVIDER_VERTICAL'));
    }

    public function testGaDividerVerticalValue()
    {
        $this->assertTrue(GA_DIVIDER_VERTICAL === 'divider-vertical');
    }

    public function testGaNavbarFormExists()
    {
        $this->assertTrue(defined('GA_NAVBAR_FORM'));
    }

    public function testGaNavbarFormValue()
    {
        $this->assertTrue(GA_NAVBAR_FORM === 'navbar-form');
    }

    public function testGaNavbarSearchExists()
    {
        $this->assertTrue(defined('GA_NAVBAR_SEARCH'));
    }

    public function testGaNavbarSearchValue()
    {
        $this->assertTrue(GA_NAVBAR_SEARCH === 'navbar-search');
    }

    public function testGaNavbarTextExists()
    {
        $this->assertTrue(defined('GA_NAVBAR_TEXT'));
    }

    public function testGaNavbarTextValue()
    {
        $this->assertTrue(GA_NAVBAR_TEXT === 'navbar-text');
    }

    public function testGaNavbarFixedTopExists()
    {
        $this->assertTrue(defined('GA_NAVBAR_FIXED_TOP'));
    }

    public function testGaNavbarFixedTopValue()
    {
        $this->assertTrue(GA_NAVBAR_FIXED_TOP === 'navbar-fixed-top');
    }

    public function testGaNavbarFixedBottomExists()
    {
        $this->assertTrue(defined('GA_NAVBAR_FIXED_BOTTOM'));
    }

    public function testGaNavbarFixedBottomValue()
    {
        $this->assertTrue(GA_NAVBAR_FIXED_BOTTOM === 'navbar-fixed-bottom');
    }

    public function testGaNavbarStaticTopExists()
    {
        $this->assertTrue(defined('GA_NAVBAR_STATIC_TOP'));
    }

    public function testGaNavbarStaticTopValue()
    {
        $this->assertTrue(GA_NAVBAR_STATIC_TOP === 'navbar-static-top');
    }

    public function testGaNavCollapseExists()
    {
        $this->assertTrue(defined('GA_NAV_COLLAPSE'));
    }

    public function testGaNavCollapseValue()
    {
        $this->assertTrue(GA_NAV_COLLAPSE === 'nav-collapse');
    }

    public function testGaCollapseExists()
    {
        $this->assertTrue(defined('GA_COLLAPSE'));
    }

    public function testGaCollapseValue()
    {
        $this->assertTrue(GA_COLLAPSE === 'collapse');
    }

    public function testGaNavbarInverseExists()
    {
        $this->assertTrue(defined('GA_NAVBAR_INVERSE'));
    }

    public function testGaNavbarInverseValue()
    {
        $this->assertTrue(GA_NAVBAR_INVERSE === 'navbar-inverse');
    }

    public function testGaBreadcrumbExists()
    {
        $this->assertTrue(defined('GA_BREADCRUMB'));
    }

    public function testGaBreadcrumValue()
    {
        $this->assertTrue(GA_BREADCRUMB === 'breadcrumb');
    }

    public function testGaPaginationExists()
    {
        $this->assertTrue(defined('GA_PAGINATION'));
    }

    public function testGaPaginationValue()
    {
        $this->assertTrue(GA_PAGINATION === 'pagination');
    }

    public function testGaPaginationMiniExists()
    {
        $this->assertTrue(defined('GA_PAGINATION_MINI'));
    }

    public function testGaPaginationMiniValue()
    {
        $this->assertTrue(GA_PAGINATION_MINI === 'pagination-mini');
    }

    public function testGaPaginationSmallExists()
    {
        $this->assertTrue(defined('GA_PAGINATION_SMALL'));
    }

    public function testGaPaginationSmallValue()
    {
        $this->assertTrue(GA_PAGINATION_SMALL === 'pagination-small');
    }

    public function testGaPaginationLargeExists()
    {
        $this->assertTrue(defined('GA_PAGINATION_LARGE'));
    }

    public function testGaPaginationLargeValue()
    {
        $this->assertTrue(GA_PAGINATION_LARGE === 'pagination-large');
    }

    public function testGaPaginationCenteredExists()
    {
        $this->assertTrue(defined('GA_PAGINATION_CENTERED'));
    }

    public function testGaPaginationCenteredValue()
    {
        $this->assertTrue(GA_PAGINATION_CENTERED === 'pagination-centered');
    }

    public function testGaPaginationRightExists()
    {
        $this->assertTrue(defined('GA_PAGINATION_RIGHT'));
    }

    public function testGaPaginationRightValue()
    {
        $this->assertTrue(GA_PAGINATION_RIGHT === 'pagination-right');
    }

    public function testGaPagerExists()
    {
        $this->assertTrue(defined('GA_PAGER'));
    }

    public function testGaPagerValue()
    {
        $this->assertTrue(GA_PAGER === 'pager');
    }

    public function testGaPreviousExists()
    {
        $this->assertTrue(defined('GA_PREVIOUS'));
    }

    public function testGaPreviousValue()
    {
        $this->assertTrue(GA_PREVIOUS === 'previous');
    }

    public function testGaNextExists()
    {
        $this->assertTrue(defined('GA_NEXT'));
    }

    public function testGaNextValue()
    {
        $this->assertTrue(GA_NEXT === 'next');
    }

    public function testGaLabelExists()
    {
        $this->assertTrue(defined('GA_LABEL'));
    }

    public function testGaLabelValue()
    {
        $this->assertTrue(GA_LABEL === 'label');
    }

    public function testGaLabelSuccessExists()
    {
        $this->assertTrue(defined('GA_LABEL_SUCCESS'));
    }

    public function testGaLabelSuccessValue()
    {
        $this->assertTrue(GA_LABEL_SUCCESS === 'label-success');
    }

    public function testGaLabelWarningExists()
    {
        $this->assertTrue(defined('GA_LABEL_WARNING'));
    }

    public function testGaLabelWarningValue()
    {
        $this->assertTrue(GA_LABEL_WARNING === 'label-warning');
    }

    public function testGaLabelImportantExists()
    {
        $this->assertTrue(defined('GA_LABEL_IMPORTANT'));
    }

    public function testGaLabelImportantValue()
    {
        $this->assertTrue(GA_LABEL_IMPORTANT === 'label-important');
    }

    public function testGaLabelInfoExists()
    {
        $this->assertTrue(defined('GA_LABEL_INFO'));
    }

    public function testGaLabelInfoValue()
    {
        $this->assertTrue(GA_LABEL_INFO === 'label-info');
    }

    public function testGaLabelInverseExists()
    {
        $this->assertTrue(defined('GA_LABEL_INVERSE'));
    }

    public function testGaLabelInverseValue()
    {
        $this->assertTrue(GA_LABEL_INVERSE === 'label-inverse');
    }

    public function testGaBadgeExists()
    {
        $this->assertTrue(defined('GA_BADGE'));
    }

    public function testGaBadgeValue()
    {
        $this->assertTrue(GA_BADGE === 'badge');
    }

    public function testGaBadgeSuccessExists()
    {
        $this->assertTrue(defined('GA_BADGE_SUCCESS'));
    }

    public function testGaBadgeSuccessValue()
    {
        $this->assertTrue(GA_BADGE_SUCCESS === 'badge-success');
    }

    public function testGaBadgeWarningExists()
    {
        $this->assertTrue(defined('GA_BADGE_WARNING'));
    }

    public function testGaBadgeWarningValue()
    {
        $this->assertTrue(GA_BADGE_WARNING === 'badge-warning');
    }

    public function testGaBadgeImportantExists()
    {
        $this->assertTrue(defined('GA_BADGE_IMPORTANT'));
    }

    public function testGaBadgeImportantValue()
    {
        $this->assertTrue(GA_BADGE_IMPORTANT === 'badge-important');
    }

    public function testGaBadgeInfoExists()
    {
        $this->assertTrue(defined('GA_BADGE_INFO'));
    }

    public function testGaBadgeInfoValue()
    {
        $this->assertTrue(GA_BADGE_INFO === 'badge-info');
    }

    public function testGaBadgeInverseExists()
    {
        $this->assertTrue(defined('GA_BADGE_INVERSE'));
    }

    public function testGaBadgeInverseValue()
    {
        $this->assertTrue(GA_BADGE_INVERSE === 'badge-inverse');
    }

    public function testGaHeroUnitExists()
    {
        $this->assertTrue(defined('GA_HERO_UNIT'));
    }

    public function testGaHeroUnitValue()
    {
        $this->assertTrue(GA_HERO_UNIT === 'hero-unit');
    }

    public function testGaPageHeaderExists()
    {
        $this->assertTrue(defined('GA_PAGE_HEADER'));
    }

    public function testGaPageHeaderValue()
    {
        $this->assertTrue(GA_PAGE_HEADER === 'page-header');
    }

    public function testGaThumbnailsExists()
    {
        $this->assertTrue(defined('GA_THUMBNAILS'));
    }

    public function testGaThumbnailsValue()
    {
        $this->assertTrue(GA_THUMBNAILS === 'thumbnails');
    }

    public function testGaThumbnailExists()
    {
        $this->assertTrue(defined('GA_THUMBNAIL'));
    }

    public function testGaThumbnailValue()
    {
        $this->assertTrue(GA_THUMBNAIL === 'thumbnail');
    }

    public function testGaAlertExists()
    {
        $this->assertTrue(defined('GA_ALERT'));
    }

    public function testGaAlertValue()
    {
        $this->assertTrue(GA_ALERT === 'alert');
    }

    public function testGaCloseExists()
    {
        $this->assertTrue(defined('GA_CLOSE'));
    }

    public function testGaCloseValue()
    {
        $this->assertTrue(GA_CLOSE === 'close');
    }

    public function testGaAlertBlockExists()
    {
        $this->assertTrue(defined('GA_ALERT_BLOCK'));
    }

    public function testGaAlertBlockValue()
    {
        $this->assertTrue(GA_ALERT_BLOCK === 'alert-block');
    }

    public function testGaAlertErrorExists()
    {
        $this->assertTrue(defined('GA_ALERT_ERROR'));
    }

    public function testGaAlertErrorValue()
    {
        $this->assertTrue(GA_ALERT_ERROR === 'alert-error');
    }

    public function testGaAlertSuccessExists()
    {
        $this->assertTrue(defined('GA_ALERT_SUCCESS'));
    }

    public function testGaAlertSuccessValue()
    {
        $this->assertTrue(GA_ALERT_SUCCESS === 'alert-success');
    }

    public function testGaAlertInfoExists()
    {
        $this->assertTrue(defined('GA_ALERT_INFO'));
    }

    public function testGaAlertInfoValue()
    {
        $this->assertTrue(GA_ALERT_INFO === 'alert-info');
    }

    public function testGaProcessExists()
    {
        $this->assertTrue(defined('GA_PROGRESS'));
    }

    public function testGaProgressValue()
    {
        $this->assertTrue(GA_PROGRESS === 'progress');
    }

    public function testGaBarExists()
    {
        $this->assertTrue(defined('GA_BAR'));
    }

    public function testGaBarValue()
    {
        $this->assertTrue(GA_BAR === 'bar');
    }

    public function testGaBarSuccessExists()
    {
        $this->assertTrue(defined('GA_BAR_SUCCESS'));
    }

    public function testGaBarSuccessValue()
    {
        $this->assertTrue(GA_BAR_SUCCESS === 'bar-success');
    }

    public function testGaBarInfoExists()
    {
        $this->assertTrue(defined('GA_BAR_INFO'));
    }

    public function testGaBarInfoValue()
    {
        $this->assertTrue(GA_BAR_INFO === 'bar-info');
    }

    public function testGaBarWarningExists()
    {
        $this->assertTrue(defined('GA_BAR_WARNING'));
    }

    public function testGaBarWarningValue()
    {
        $this->assertTrue(GA_BAR_WARNING === 'bar-warning');
    }

    public function testGaBarDangerExists()
    {
        $this->assertTrue(defined('GA_BAR_DANGER'));
    }

    public function testGaBarDangerValue()
    {
        $this->assertTrue(GA_BAR_DANGER === 'bar-danger');
    }

    public function testGaProgressStripedExists()
    {
        $this->assertTrue(defined('GA_BADGE_IMPORTANT'));
    }

    public function testGaProgressStripedValue()
    {
        $this->assertTrue(GA_PROGRESS_STRIPED === 'progress-striped');
    }

    public function testGaMediaExists()
    {
        $this->assertTrue(defined('GA_MEDIA'));
    }

    public function testGaMediaValue()
    {
        $this->assertTrue(GA_MEDIA === 'media');
    }

    public function testGaMediaObjectExists()
    {
        $this->assertTrue(defined('GA_MEDIA_OBJECT'));
    }

    public function testGaMediaObjectValue()
    {
        $this->assertTrue(GA_MEDIA_OBJECT === 'media-object');
    }

    public function testGaMediaBodyExists()
    {
        $this->assertTrue(defined('GA_MEDIA_BODY'));
    }

    public function testGaMediaBodyValue()
    {
        $this->assertTrue(GA_MEDIA_BODY === 'media-body');
    }

    public function testGaMediaHeadingExists()
    {
        $this->assertTrue(defined('GA_MEDIA_HEADING'));
    }

    public function testGaMediaHeadingValue()
    {
        $this->assertTrue(GA_MEDIA_HEADING === 'media-heading');
    }

    public function testGaMediaListExists()
    {
        $this->assertTrue(defined('GA_MEDIA_LIST'));
    }

    public function testGaMediaListValue()
    {
        $this->assertTrue(GA_MEDIA_LIST === 'media-list');
    }

    public function testGaWellExists()
    {
        $this->assertTrue(defined('GA_WELL'));
    }

    public function testGaWellValue()
    {
        $this->assertTrue(GA_WELL === 'well');
    }

    public function testGaWellLargeExists()
    {
        $this->assertTrue(defined('GA_WELL_LARGE'));
    }

    public function testGaWellLargeValue()
    {
        $this->assertTrue(GA_WELL_LARGE === 'well-large');
    }

    public function testGaTablenavbarExists()
    {
        $this->assertTrue(defined('GA_TABLENAVBAR'));
    }

    public function testGaTablenavbarValue()
    {
        $this->assertTrue(GA_TABLENAVBAR === 'tablenavbar');
    }

    public function testGaTablenavbarDynamicContentExists()
    {
        $this->assertTrue(defined('GA_TABLENAVBAR_DYNAMIC_CONTENT'));
    }

    public function testGaTablenavbarDynamicContentValue()
    {
        $this->assertTrue(GA_TABLENAVBAR_DYNAMIC_CONTENT === 'tablenavbar-dynamic-content');
    }

    public function testGaTablenavbarSearchButtonExists()
    {
        $this->assertTrue(defined('GA_TABLENAVBAR_SEARCH_BUTTON'));
    }

    public function testGaTablenavbarSearchButtonValue()
    {
        $this->assertTrue(GA_TABLENAVBAR_SEARCH_BUTTON === 'tablenavbar-search-button');
    }

    public function testGaTablenavbarClearButtonExists()
    {
        $this->assertTrue(defined('GA_TABLENAVBAR_CLEAR_BUTTON'));
    }

    public function testGaTablenavbarClearButtonValue()
    {
        $this->assertTrue(GA_TABLENAVBAR_CLEAR_BUTTON === 'tablenavbar-clear-button');
    }
}

