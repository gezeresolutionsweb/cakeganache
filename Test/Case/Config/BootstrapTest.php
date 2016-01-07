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

    public function testGa1Exists()
    {
        $this->assertTrue(defined('GA_1'));
    }

    public function testGa1Value()
    {
        $this->assertTrue(GA_1 === 'span1');
    }

    public function testGa2Exists()
    {
        $this->assertTrue(defined('GA_2'));
    }

    public function testGa2Value()
    {
        $this->assertTrue(GA_2 === 'span2');
    }

    public function testGa3Exists()
    {
        $this->assertTrue(defined('GA_3'));
    }

    public function testGa3Value()
    {
        $this->assertTrue(GA_3 === 'span3');
    }

    public function testGa4Exists()
    {
        $this->assertTrue(defined('GA_4'));
    }

    public function testGa4Value()
    {
        $this->assertTrue(GA_4 === 'span4');
    }

    public function testGa5Exists()
    {
        $this->assertTrue(defined('GA_5'));
    }

    public function testGa5Value()
    {
        $this->assertTrue(GA_5 === 'span5');
    }

    public function testGa6Exists()
    {
        $this->assertTrue(defined('GA_6'));
    }

    public function testGa6Value()
    {
        $this->assertTrue(GA_6 === 'span6');
    }

    public function testGa7Exists()
    {
        $this->assertTrue(defined('GA_7'));
    }

    public function testGa7Value()
    {
        $this->assertTrue(GA_7 === 'span7');
    }

    public function testGa8Exists()
    {
        $this->assertTrue(defined('GA_8'));
    }

    public function testGa8Value()
    {
        $this->assertTrue(GA_8 === 'span8');
    }

    public function testGa9Exists()
    {
        $this->assertTrue(defined('GA_9'));
    }

    public function testGa9Value()
    {
        $this->assertTrue(GA_9 === 'span9');
    }

    public function testGa10Exists()
    {
        $this->assertTrue(defined('GA_10'));
    }

    public function testGa10Value()
    {
        $this->assertTrue(GA_10 === 'span10');
    }

    public function testGa11Exists()
    {
        $this->assertTrue(defined('GA_11'));
    }

    public function testGa11Value()
    {
        $this->assertTrue(GA_11 === 'span11');
    }

    public function testGa12Exists()
    {
        $this->assertTrue(defined('GA_12'));
    }

    public function testGa12Value()
    {
        $this->assertTrue(GA_12 === 'span12');
    }


    public function testGaBlockExists()
    {
        $this->assertTrue(defined('GA_BLOCK'));
    }

    public function testGaBlockValue()
    {
        $this->assertTrue(GA_BLOCK === 'block');
    }

    public function testGaInlineExists()
    {
        $this->assertTrue(defined('GA_INLINE'));
    }

    public function testGaInlineValue()
    {
        $this->assertTrue(GA_INLINE === 'inline');
    }

    public function testGaHorizontalExists()
    {
        $this->assertTrue(defined('GA_HORIZONTAL'));
    }

    public function testGaHorizontalValue()
    {
        $this->assertTrue(GA_HORIZONTAL === 'horizontal');
    }
    public function testGaFixedExists()
    {
        $this->assertTrue(defined('GA_FIXED'));
    }

    public function testGaFixedValue()
    {
        $this->assertTrue(GA_FIXED === 'fixed');
    }

    public function testGaStaticExists()
    {
        $this->assertTrue(defined('GA_STATIC'));
    }

    public function testGaStaticValue()
    {
        $this->assertTrue(GA_STATIC === 'static');
    }

    public function testGaDynamicExists()
    {
        $this->assertTrue(defined('GA_DYNAMIC'));
    }

    public function testGaDynamicValue()
    {
        $this->assertTrue(GA_DYNAMIC === 'dynamic');
    }


    public function testGaMiniExists()
    {
        $this->assertTrue(defined('GA_MINI'));
    }

    public function testGaMiniValue()
    {
        $this->assertTrue(GA_MINI === 'mini');
    }

    public function testGaSmallExists()
    {
        $this->assertTrue(defined('GA_SMALL'));
    }

    public function testGaSmallValue()
    {
        $this->assertTrue(GA_SMALL === 'small');
    }

    public function testGaMediumExists()
    {
        $this->assertTrue(defined('GA_MEDIUM'));
    }

    public function testGaMediumValue()
    {
        $this->assertTrue(GA_MEDIUM === 'medium');
    }

    public function testGaLargeExists()
    {
        $this->assertTrue(defined('GA_LARGE'));
    }

    public function testGaLargeValue()
    {
        $this->assertTrue(GA_LARGE === 'large');
    }

    public function testGaXlargeExists()
    {
        $this->assertTrue(defined('GA_XLARGE'));
    }

    public function testGaXlargeValue()
    {
        $this->assertTrue(GA_XLARGE === 'xlarge');
    }

    public function testGaXxlargeExists()
    {
        $this->assertTrue(defined('GA_XXLARGE'));
    }

    public function testGaXxlargeValue()
    {
        $this->assertTrue(GA_XXLARGE === 'xxlarge');
    }


    public function testGaDefaultExists()
    {
        $this->assertTrue(defined('GA_DEFAULT'));
    }

    public function testGaDefaultValue()
    {
        $this->assertTrue(GA_DEFAULT === 'default');
    }

    public function testGaPrimaryExists()
    {
        $this->assertTrue(defined('GA_PRIMARY'));
    }

    public function testGaPrimaryValue()
    {
        $this->assertTrue(GA_PRIMARY === 'primary');
    }

    public function testGaErrorExists()
    {
        $this->assertTrue(defined('GA_ERROR'));
    }

    public function testGaErrorValue()
    {
        $this->assertTrue(GA_ERROR === 'error');
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


    public function testGaLeftExists()
    {
        $this->assertTrue(defined('GA_LEFT'));
    }

    public function testGaLeftValue()
    {
        $this->assertTrue(GA_LEFT === 'left');
    }

    public function testGaRightExists()
    {
        $this->assertTrue(defined('GA_RIGHT'));
    }

    public function testGaRightValue()
    {
        $this->assertTrue(GA_RIGHT === 'right');
    }

    public function testGaCenterExists()
    {
        $this->assertTrue(defined('GA_CENTER'));
    }

    public function testGaCenterValue()
    {
        $this->assertTrue(GA_CENTER === 'center');
    }

    public function testGaCenteredExists()
    {
        $this->assertTrue(defined('GA_CENTERED'));
    }

    public function testGaCenteredValue()
    {
        $this->assertTrue(GA_CENTERED === 'centered');
    }

    public function testGaTopExists()
    {
        $this->assertTrue(defined('GA_TOP'));
    }

    public function testGaTopValue()
    {
        $this->assertTrue(GA_TOP === 'top');
    }

    public function testGaBottomExists()
    {
        $this->assertTrue(defined('GA_BOTTOM'));
    }

    public function testGaBottomValue()
    {
        $this->assertTrue(GA_BOTTOM === 'bottom');
    }

    public function testGaBelowExists()
    {
        $this->assertTrue(defined('GA_BELOW'));
    }

    public function testGaBelowValue()
    {
        $this->assertTrue(GA_BELOW === 'below');
    }



    public function testGaBarExists()
    {
        $this->assertTrue(defined('GA_BAR'));
    }

    public function testGaBarValue()
    {
        $this->assertTrue(GA_BAR === 'bar');
    }

    public function testGaActionsExists()
    {
        $this->assertTrue(defined('GA_ACTIONS'));
    }

    public function testGaActionsValue()
    {
        $this->assertTrue(GA_ACTIONS === 'actions');
    }

    public function testGaStripedExists()
    {
        $this->assertTrue(defined('GA_STRIPED'));
    }

    public function testGaStripedValue()
    {
        $this->assertTrue(GA_STRIPED === 'striped');
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

    public function testGaIconBarExists()
    {
        $this->assertTrue(defined('GA_ICON_BAR'));
    }

    public function testGaIconBarValue()
    {
        $this->assertTrue(GA_ICON_BAR === 'icon-bar');
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

    public function testGaDlHorizontalExists()
    {
        $this->assertTrue(defined('GA_DL_HORIZONTAL'));
    }

    public function testGaDlHorizontalValue()
    {
        $this->assertTrue(GA_DL_HORIZONTAL === 'dl-horizontal');
    }


    public function testGaListExists()
    {
        $this->assertTrue(defined('GA_LIST'));
    }

    public function testGaListValue()
    {
        $this->assertTrue(GA_LIST === 'list');
    }

    public function testGaDividerExists()
    {
        $this->assertTrue(defined('GA_DIVIDER'));
    }

    public function testGaDividerValue()
    {
        $this->assertTrue(GA_DIVIDER === 'divider');
    }

    public function testGaClearExists()
    {
        $this->assertTrue(defined('GA_CLEAR'));
    }

    public function testGaClearValue()
    {
        $this->assertTrue(GA_CLEAR === 'clear');
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



    public function testGaFormExists()
    {
        $this->assertTrue(defined('GA_FORM'));
    }

    public function testGaFormValue()
    {
        $this->assertTrue(GA_FORM === 'form');
    }

    public function testGaControlExists()
    {
        $this->assertTrue(defined('GA_CONTROL'));
    }

    public function testGaControlValue()
    {
        $this->assertTrue(GA_CONTROL === 'control');
    }

    public function testGaGroupExists()
    {
        $this->assertTrue(defined('GA_GROUP'));
    }

    public function testGaGroupValue()
    {
        $this->assertTrue(GA_GROUP === 'group');
    }

    public function testGaLabelExists()
    {
        $this->assertTrue(defined('GA_LABEL'));
    }

    public function testGaLabelValue()
    {
        $this->assertTrue(GA_LABEL === 'label');
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



    public function testGaSearchExists()
    {
        $this->assertTrue(defined('GA_SEARCH'));
    }

    public function testGaSearchValue()
    {
        $this->assertTrue(GA_SEARCH === 'search');
    }



    public function testGaFormSearchExists()
    {
        $this->assertTrue(defined('GA_FORM_SEARCH'));
    }

    public function testGaFormSearchValue()
    {
        $this->assertTrue(GA_FORM_SEARCH === 'form-search');
    }

    public function testGaQueryExists()
    {
        $this->assertTrue(defined('GA_QUERY'));
    }

    public function testGaQueryValue()
    {
        $this->assertTrue(GA_QUERY === 'query');
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

    public function testGaInputExists()
    {
        $this->assertTrue(defined('GA_INPUT'));
    }

    public function testGaInputValue()
    {
        $this->assertTrue(GA_INPUT === 'input');
    }
    public function testGaPrependExists()
    {
        $this->assertTrue(defined('GA_PREPEND'));
    }

    public function testGaPrependValue()
    {
        $this->assertTrue(GA_PREPEND === 'prepend');
    }
    public function testGaAppendExists()
    {
        $this->assertTrue(defined('GA_APPEND'));
    }

    public function testGaAppendValue()
    {
        $this->assertTrue(GA_APPEND === 'append');
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

    public function testGaLevelExists()
    {
        $this->assertTrue(defined('GA_LEVEL'));
    }

    public function testGaLevelValue()
    {
        $this->assertTrue(GA_LEVEL === 'level');
    }
    public function testGaInputBlockLevelExists()
    {
        $this->assertTrue(defined('GA_INPUT_BLOCK_LEVEL'));
    }

    public function testGaInputBlockLevelValue()
    {
        $this->assertTrue(GA_INPUT_BLOCK_LEVEL === 'input-block-level');
    }

    public function testGaUneditableExists()
    {
        $this->assertTrue(defined('GA_UNEDITABLE'));
    }

    public function testGaUneditableValue()
    {
        $this->assertTrue(GA_UNEDITABLE === 'uneditable');
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

    public function testGaDropdownExists()
    {
        $this->assertTrue(defined('GA_DROPDOWN'));
    }

    public function testGaDropdownValue()
    {
        $this->assertTrue(GA_DROPDOWN === 'dropdown');
    }
    public function testGaToggleExists()
    {
        $this->assertTrue(defined('GA_TOGGLE'));
    }

    public function testGaToggleValue()
    {
        $this->assertTrue(GA_TOGGLE === 'toggle');
    }
    public function testGaDropdownToggleExists()
    {
        $this->assertTrue(defined('GA_DROPDOWN_TOGGLE'));
    }

    public function testGaDropdownToggleValue()
    {
        $this->assertTrue(GA_DROPDOWN_TOGGLE === 'dropdown-toggle');
    }

    public function testGaMenuExists()
    {
        $this->assertTrue(defined('GA_MENU'));
    }

    public function testGaMenuValue()
    {
        $this->assertTrue(GA_MENU === 'menu');
    }
    public function testGaSubmenuExists()
    {
        $this->assertTrue(defined('GA_SUBMENU'));
    }

    public function testGaSubmenuValue()
    {
        $this->assertTrue(GA_SUBMENU === 'submenu');
    }
    public function testGaDropdownMenuExists()
    {
        $this->assertTrue(defined('GA_DROPDOWN_MENU'));
    }

    public function testGaDropdownMenuValue()
    {
        $this->assertTrue(GA_DROPDOWN_MENU === 'dropdown-menu');
    }

    public function testGaDropdownSubmenuExists()
    {
        $this->assertTrue(defined('GA_DROPDOWN_SUBMENU'));
    }

    public function testGaDropdownSubmenuValue()
    {
        $this->assertTrue(GA_DROPDOWN_SUBMENU === 'dropdown-submenu');
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

    public function testGaBorderedExists()
    {
        $this->assertTrue(defined('GA_BORDERED'));
    }

    public function testGaBorderedValue()
    {
        $this->assertTrue(GA_BORDERED === 'bordered');
    }
    public function testGaTableBorderedExists()
    {
        $this->assertTrue(defined('GA_TABLE_BORDERED'));
    }

    public function testGaTableBorderedValue()
    {
        $this->assertTrue(GA_TABLE_BORDERED === 'table-bordered');
    }

    public function testGaHoverExists()
    {
        $this->assertTrue(defined('GA_HOVER'));
    }

    public function testGaHoverValue()
    {
        $this->assertTrue(GA_HOVER === 'hover');
    }
    public function testGaTableHoverExists()
    {
        $this->assertTrue(defined('GA_TABLE_HOVER'));
    }

    public function testGaTableHoverValue()
    {
        $this->assertTrue(GA_TABLE_HOVER === 'table-hover');
    }

    public function testGaCondensedExists()
    {
        $this->assertTrue(defined('GA_CONDENSED'));
    }

    public function testGaCondensedValue()
    {
        $this->assertTrue(GA_CONDENSED === 'condensed');
    }
    public function testGaTableCondensedExists()
    {
        $this->assertTrue(defined('GA_TABLE_CONDENSED'));
    }

    public function testGaTableCondensedValue()
    {
        $this->assertTrue(GA_TABLE_CONDENSED === 'table-condensed');
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

    public function testGaTextExists()
    {
        $this->assertTrue(defined('GA_TEXT'));
    }

    public function testGaTextValue()
    {
        $this->assertTrue(GA_TEXT === 'text');
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

    public function testGaRoundedExists()
    {
        $this->assertTrue(defined('GA_ROUNDED'));
    }

    public function testGaRoundedValue()
    {
        $this->assertTrue(GA_ROUNDED === 'img-rounded');
    }
    public function testGaCircleExists()
    {
        $this->assertTrue(defined('GA_CIRCLE'));
    }

    public function testGaCircleValue()
    {
        $this->assertTrue(GA_CIRCLE === 'img-circle');
    }
    public function testGaPolaroidExists()
    {
        $this->assertTrue(defined('GA_POLAROID'));
    }

    public function testGaPolaroidValue()
    {
        $this->assertTrue(GA_POLAROID === 'img-polaroid');
    }
    public function testGaNavExists()
    {
        $this->assertTrue(defined('GA_NAV'));
    }

    public function testGaNavValue()
    {
        $this->assertTrue(GA_NAV === 'nav');
    }

    public function testGaTabsExists()
    {
        $this->assertTrue(defined('GA_TABS'));
    }

    public function testGaTabsValue()
    {
        $this->assertTrue(GA_TABS === 'tabs');
    }
    public function testGaNavTabsExists()
    {
        $this->assertTrue(defined('GA_NAV_TABS'));
    }

    public function testGaNavTabsValue()
    {
        $this->assertTrue(GA_NAV_TABS === 'nav-tabs');
    }

    public function testGaPillsExists()
    {
        $this->assertTrue(defined('GA_PILLS'));
    }

    public function testGaPillsValue()
    {
        $this->assertTrue(GA_PILLS === 'pills');
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

    public function testGaStackedExists()
    {
        $this->assertTrue(defined('GA_STACKED'));
    }

    public function testGaStackedValue()
    {
        $this->assertTrue(GA_STACKED === 'stacked');
    }
    public function testGaNavStackedExists()
    {
        $this->assertTrue(defined('GA_NAV_STACKED'));
    }

    public function testGaNavStackedValue()
    {
        $this->assertTrue(GA_NAV_STACKED === 'nav-stacked');
    }

    public function testGaHeaderExists()
    {
        $this->assertTrue(defined('GA_HEADER'));
    }

    public function testGaHeaderValue()
    {
        $this->assertTrue(GA_HEADER === 'header');
    }
    public function testGaNavHeaderExists()
    {
        $this->assertTrue(defined('GA_NAV_HEADER'));
    }

    public function testGaNavHeaderValue()
    {
        $this->assertTrue(GA_NAV_HEADER === 'nav-header');
    }

    public function testGaTabbableExists()
    {
        $this->assertTrue(defined('GA_TABBABLE'));
    }

    public function testGaTabbableValue()
    {
        $this->assertTrue(GA_TABBABLE === 'tabbable');
    }

    public function testGaTabExists()
    {
        $this->assertTrue(defined('GA_TAB'));
    }

    public function testGaTabValue()
    {
        $this->assertTrue(GA_TAB === 'tab');
    }
    public function testGaContentExists()
    {
        $this->assertTrue(defined('GA_CONTENT'));
    }

    public function testGaContentValue()
    {
        $this->assertTrue(GA_CONTENT === 'content');
    }
    public function testGaTabContentExists()
    {
        $this->assertTrue(defined('GA_TAB_CONTENT'));
    }

    public function testGaTabContentValue()
    {
        $this->assertTrue(GA_TAB_CONTENT === 'tab-content');
    }

    public function testGaPaneExists()
    {
       $this->assertTrue(defined('GA_PANE'));
    }

    public function testGaPaneValue()
    {
        $this->assertTrue(GA_PANE === 'pane');
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

    public function testGaInnerExists()
    {
        $this->assertTrue(defined('GA_INNER'));
    }

    public function testGaInnerValue()
    {
        $this->assertTrue(GA_INNER === 'inner');
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

    public function testGaVerticalExists()
    {
        $this->assertTrue(defined('GA_VERTICAL'));
    }

    public function testGaVerticalValue()
    {
        $this->assertTrue(GA_VERTICAL === 'vertical');
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

    public function testGaCollapseExists()
    {
        $this->assertTrue(defined('GA_COLLAPSE'));
    }

    public function testGaCollapseValue()
    {
        $this->assertTrue(GA_COLLAPSE === 'collapse');
    }
    public function testGaNavCollapseExists()
    {
        $this->assertTrue(defined('GA_NAV_COLLAPSE'));
    }

    public function testGaNavCollapseValue()
    {
        $this->assertTrue(GA_NAV_COLLAPSE === 'nav-collapse');
    }

    public function testGaNavbarInverseExists()
    {
        $this->assertTrue(defined('GA_NAVBAR_INVERSE'));
    }

    public function testGaNavbarInverseValue()
    {
        $this->assertTrue(GA_NAVBAR_INVERSE === 'navbar-inverse');
    }

    public function testGaBtnNavbarExists()
    {
        $this->assertTrue(defined('GA_BTN_NAVBAR'));
    }

    public function testGaBtnNavbarValue()
    {
        $this->assertTrue(GA_BTN_NAVBAR === 'btn-navbar');
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

    public function testGaObjectExists()
    {
        $this->assertTrue(defined('GA_OBJECT'));
    }

    public function testGaObjectValue()
    {
        $this->assertTrue(GA_OBJECT === 'object');
    }

    public function testGaMediaObjectExists()
    {
        $this->assertTrue(defined('GA_MEDIA_OBJECT'));
    }

    public function testGaMediaObjectValue()
    {
        $this->assertTrue(GA_MEDIA_OBJECT === 'media-object');
    }

    public function testGaBodyExists()
    {
        $this->assertTrue(defined('GA_BODY'));
    }

    public function testGaBodyValue()
    {
        $this->assertTrue(GA_BODY === 'body');
    }

    public function testGaMediaBodyExists()
    {
        $this->assertTrue(defined('GA_MEDIA_BODY'));
    }

    public function testGaMediaBodyValue()
    {
        $this->assertTrue(GA_MEDIA_BODY === 'media-body');
    }

    public function testGaHeadingExists()
    {
        $this->assertTrue(defined('GA_HEADING'));
    }

    public function testGaHeadingValue()
    {
        $this->assertTrue(GA_HEADING === 'heading');
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

    public function testGaTablenavbarSearchBtnExists()
    {
        $this->assertTrue(defined('GA_TABLENAVBAR_SEARCH_BTN'));
    }

    public function testGaTablenavbarSearchBtnValue()
    {
        $this->assertTrue(GA_TABLENAVBAR_SEARCH_BTN === 'tablenavbar-search-btn');
    }

    public function testGaTablenavbarClearBtnExists()
    {
        $this->assertTrue(defined('GA_TABLENAVBAR_CLEAR_BTN'));
    }

    public function testGaTablenavbarClearBtnValue()
    {
        $this->assertTrue(GA_TABLENAVBAR_CLEAR_BTN === 'tablenavbar-clear-btn');
    }
    public function testGaTablenavbarActionsExists()
    {
        $this->assertTrue(defined('GA_TABLENAVBAR_ACTIONS'));
    }

    public function testGaTablenavbarActionsValue()
    {
        $this->assertTrue(GA_TABLENAVBAR_ACTIONS === 'actions');
    }
    public function testGaSelectpickerExists()
    {
        $this->assertTrue(defined('GA_SELECTPICKER'));
    }

    public function testGaSelectpickerValue()
    {
        $this->assertTrue(GA_SELECTPICKER === 'selectpicker');
    }
    public function testGaShowTickExists()
    {
        $this->assertTrue(defined('GA_SHOW_TICK'));
    }

    public function testGaShowTickValue()
    {
        $this->assertTrue(GA_SHOW_TICK === 'show-tick');
    }

}

