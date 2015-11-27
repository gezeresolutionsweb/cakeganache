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
}
