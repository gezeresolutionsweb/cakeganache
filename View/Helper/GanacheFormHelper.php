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

App::import('Helper', 'Form') ;

class GanacheFormHelper extends FormHelper
{
    // Current form type create.
    public $formType = null;

    public $buttonTypes = [
        GA_PRIMARY,
        GA_INFO,
        GA_SUCCESS,
        GA_WARNING,
        GA_DANGER,
        GA_INVERSE,
        GA_LINK
    ];

    public $buttonSizes = [
        GA_MINI,
        GA_SMALL,
        GA_LARGE
    ];

    public $formTypes = [
        GA_NAVBAR => GA_NAVBAR_FORM,
        GA_HORIZONTAL => GA_FORM_HORIZONTAL,
        GA_INLINE => GA_FORM_INLINE,
        GA_SEARCH => GA_FORM_SEARCH
    ];
    
    /**
     * Add classes to options according to values of bootstrap-type and bootstrap-size for button.
     * 
     * @param $options The initial options with bootstrap-type and/or bootstrat-size values
     * @return The new options with class values (btn, and btn-* according to initial options)
     *
     * Extra options:
     *   - bootstrap-type: string Type of the button. GA_PRIMARY|GA_INFO|GA_SUCCESS|GA_WARNING|GA_DANGER|GA_INVERSE|GA_LINK
     *   - bootstrap-size: string Size of the button. GA_MINI|GA_SMALL|GA_LARGE
     */
    public function addButtonClasses($options)
    {
        $options = $this->addClass($options, GA_BTN);

        if(isset($options['bootstrap-type'])) {
            if(in_array($options['bootstrap-type'], $this->buttonTypes)) {
                $options = $this->addClass($options, GA_BTN . '-' . $options['bootstrap-type']);
            }
            unset($options['bootstrap-type']);
        }

        if(isset($options['bootstrap-size'])) {
            if(in_array($options['bootstrap-size'], $this->buttonSizes)) {
                $options = $this->addClass($options, GA_BTN . '-' . $options['bootstrap-size']);
            }
            unset($options['bootstrap-size']);
        }

        return $options;
    }
	
    /**
     * Create a Twitter Bootstrap like form. 
     * 
     * @param $model The model corresponding to the form
     * @param $options Options to customize the form
     * @return The HTML tags corresponding to the openning of the form
     *
     * Extra options:
     *  - ga_type : string Form type GA_NAVBAR|GA_HORIZONTAL|GA_INLINE|GA_SEARCH
     */
    public function create($model = null, $options = []) {
        $this->formType = $this->_extractOption('ga_type', $options, null);
		unset($options['ga_type']);

        if(!empty($this->formType) && in_array($this->formType, array_keys($this->formTypes))) {
            $options = $this->addClass($options, $this->formTypes[$this->formType]);
        }

        $options['inputDefaults'] = $this->_extractOption('inputDefaults', $options, [
            'div' => ['class' => GA_CONTROL_GROUP]
        ]);

        if(in_array($this->formType, [GA_NAVBAR, GA_INLINE, GA_SEARCH])) {
            if(isset($options['inputDefaults']['div'])) {
                $options['inputDefaults']['div'] = false;
            }
        }

		return parent::create($model, $options) . PHP_EOL;
	}
    
    /**
     * Create & return a error message (Twitter Bootstrap like).
     * 
     * The error is wrapped in a <span> tag, with a class
     * according to the form type (help-inline or help-block).
     *
     * @param string $field Field name.
     * @param string $text Error message.
     * @param array $options Array of options to passed to parent::error().
     * @return string HTML string of the error message for the field.
     */
    public function error($field, $text = null, $options = []) {
        $this->setEntity($field);
        $optField = $this->_magicOptions([]);
        $options['wrap'] = $this->_extractOption('wrap', $options, 'span');
        $errorClass = GA_HELP_BLOCK;
        if($this->formType === GA_HORIZONTAL && $optField['type'] !== 'checkbox') {
            $errorClass = GA_HELP_INLINE;
        }
        $options = $this->addClass($options, $errorClass);
        return parent::error($field, $text, $options);
    }
    
    /**
     * Create & return a label message (Twitter Boostrap like).
     *
     * @param string Field name.
     * @param string $text Label name string.
     * @param array $options Array of options for the label.
     * @return string HTML string of the label.
     */
    public function label($fieldName = null, $text = null, $options = []) {
        $this->setEntity($fieldName);
        $optField = $this->_magicOptions([]);
        if ($optField['type'] !== 'checkbox') {
            $options = $this->addClass($options, GA_CONTROL_LABEL);
        }
        return parent::label($fieldName, $text, $options) ;
    }
	
    /** 
     * 
     * Create & return an input block (Twitter Boostrap Like).
     * 
     * New options:
     * 	- prepend: 
     * 		-> string: Add <span class="add-on"> before the input
     * 		-> array: Add elements in array before inputs
     * 	- append: Same as prepend except it add elements after input
     *        
    **/
    public function input($fieldName, $options = array())
    {
        $prepend = $this->_extractOption('prepend', $options, null) ;
        unset ($options['prepend']) ;
        $append = $this->_extractOption('append', $options, null) ;
        unset ($options['append']) ;
        $before = $this->_extractOption('before', $options, '') ;
        $after = $this->_extractOption('after', $options, '') ;
        $between = $this->_extractOption('between', $options, '') ;
        $label = $this->_extractOption('label', $options, false) ;
        
        $this->setEntity($fieldName);
        $options = $this->_parseOptions($options) ;
        $options['format'] = array('label', 'before', 'input', 'between', 'error', 'after') ;

        $beforeClass = '' ;
                
        if ($options['type'] == 'checkbox') {
            $labelStart = '<label class="' . GA_CHECKBOX . '">';
            $labelEnd = '</label>';

            if( $label === false ) {
                $labelStart = '';
                $labelEnd = '';
            }

            $before = ($this->formType === GA_HORIZONTAL ? '<div class="' . GA_CONTROLS . '">' : '') . $labelStart . $before ;
            $between = $between . $labelEnd;
            $options['format'] = array('before', 'input', 'label', 'between', 'error', 'after') ;
            $after = $after.($this->formType === GA_HORIZONTAL ? '</div>' : '') ;
        } elseif ($options['type'] == 'radio') {
            $options['legend'] = false ;
            $before = (($label!=false)?$this->label($fieldName):'') . ($this->formType === GA_HORIZONTAL ? '<div class="' . GA_CONTROLS . '">' : '') . '<label class="' . GA_RADIO . '">' . $before;
            $between = $between . '</label>' ;
            $options['format'] = array('before', 'input', 'label', 'between', 'error', 'after') ;
            $after = $after.($this->formType === GA_HORIZONTAL ? '</div>' : '') ;
        } elseif ($this->formType === GA_HORIZONTAL) {
            $beforeClass .= ' ' . GA_CONTROLS;
        } elseif($this->formType === GA_INLINE && !$this->formType === GA_SEARCH && !$label) {
            $options['label'] = false ;
        }

        if ($prepend) {
            $beforeClass .= ' ' . GA_INPUT_PREPEND;
            if (is_string($prepend)) {
                $before .= '<span class="' . GA_ADD_ON . '">' . $prepend.'</span>';
            }
            if (is_array($prepend)) {
                foreach ($prepend as $pre) {
                    $before .= $pre ;
                }
            }
        }
        if ($append) {
            $beforeClass .= ' ' . GA_INPUT_APPEND;
            if (is_string($append)) {
                $between = '<span class="' . GA_ADD_ON . '">' . $append . '</span>' . $between;
            }
            if (is_array($append)) {
                foreach ($append as $apd) {
                    $between = $apd . $between ;
                }
            }
        }
        
        if ($beforeClass) {
            $before = '<div class="'.$beforeClass.'">'.$before ;
            $after = $after.'</div>' ;
        }
        
        $options['before'] = $before ; 
        $options['after'] = $after ;
        $options['between'] = $between ;
        
		return parent::input($fieldName, $options) ;
	}
    
    /**
     * 
     * Create & return a Twitter Like button.
     * 
     * New options:
     * 	- bootstrap-type: Twitter bootstrap button type (primary, danger, info, etc.)
     * 	- bootstrap-size: Twitter bootstrap button size (mini, small, large)
     * 
    **/
    public function button($title, $options = array()) {
        $options = $this->addButtonClasses($options) ;
        return parent::button($title, $options) ;
    }
    
    /**
     * 
     * Create & return a Twitter Like button group.
     * 
     * @param $buttons The buttons in the group
     * @param $options Options for div method
     *
     * Extra options:
     *  - vertical true/false
     * 
    **/
    public function buttonGroup ($buttons, $options = array()) {
        $vertical = $this->_extractOption('vertical', $options, false) ;
        unset($options['vertical']) ;
        $options = $this->addClass($options, GA_BTN_GROUP) ;
        if ($vertical) {
            $options = $this->addClass($options, GA_BTN_GROUP_VERTICAL) ;
        }
        return $this->Html->tag('div', implode('', $buttons), $options) ;
    }
    
    /**
     * 
     * Create & return a Twitter Like button toolbar.
     * 
     * @param $buttons The groups in the toolbar
     * @param $options Options for div method
     * 
    **/
    public function buttonToolbar ($buttonGroups, $options = array()) {
        $options = $this->addClass($options, GA_BTN_TOOLBAR);
        return $this->Html->tag('div', implode('', $buttonGroups), $options) ;
    }
    
    /**
     * Create & return a twitter bootstrap dropdown button.
     * 
     * @param $title The text in the button
     * @param $menu HTML tags corresponding to menu options (which will be wrapped into <li> tag). To add separator, pass 'divider'.
     * @param $options Options for button
     *   wrap: Wrap or not with a btn-group div. Default: true.
     * 
    **/
    public function dropdownButton ($title, $menu = array(), $options = array()) {
        $wrap = $this->_extractOption( 'wrap', $options, true );
        unset( $options[ 'wrap' ] );

        $options['type'] = false ;
        $options['data-toggle'] = GA_DROPDOWN;
        $options = $this->addClass($options, GA_DROPDOWN_TOGGLE);

        $outPut = '';

        if( $wrap ) {
            $outPut = '<div class="' . GA_BTN_GROUP . '">';
        }
        $outPut = $this->button($title.'<span class="' . GA_CARET . '"></span>', $options) ;
        $outPut .= '<ul class="' . GA_DROPDOWN_MENU . '">' ;
        foreach ($menu as $action) {
            if ($action === 'divider') {
                $outPut .= '<li class="' . GA_DIVIDER . '"></li>' ;
            } else {
                if( is_array( $action ) ) {
                    $outPut .= '<li';
                    if( !empty( $action[ 'class' ] ) ) {
                        $outPut .= ' class="' . $action[ 'class' ] . '"';
                    }
                    $outPut .= '>';
                    
                    $title = '';
                    if( !empty( $action[ 'title' ] ) ) {
                        $title = $action[ 'title' ];
                    }
                    $outPut .= $action[ 'title' ] . '</li>';
                } else {
                    $outPut .= '<li>'.$action.'</li>' ;
                }
            }
        }
        $outPut .= '</ul>';
        if( $wrap ) {
            $outPut .= '</div>';
        }
        return $outPut ;
    }
    
    /**
     * 
     * Create & return a Twitter Like submit input.
     * 
     * New options:
     * 	- bootstrap-type: Twitter bootstrap button type (primary, danger, info, etc.)
     * 	- bootstrap-size: Twitter bootstrap button size (mini, small, large)
     * 
     * Unusable options: div
     * 
    **/    
    public function submit($caption = null, $options = array()) {
        if (!isset($options['div'])) {
            $options['div'] = false ;
        }
        $options = $this->addButtonClasses($options) ;
        return parent::submit($caption, $options) ;
    }
	
    /**
     * 
     * End a form, Twitter Bootstrap like.
     * 
     * New options:
     * 	- bootstrap-type: Twitter bootstrap button type (primary, danger, info, etc.)
     * 	- bootstrap-size: Twitter bootstrap button size (mini, small, large)
     * 
    **/
    public function end ($options = NULL, $secureAttributes = Array()) {
	if ($options == null) {
		return parent::end($options, $secureAttributes) ;
	}
	if (is_string($options)) {
		$options = array('label' => $options) ;
	}
        if (!$this->formType === GA_INLINE) {
            if (!array_key_exists('div', $options)) {
                $options['div'] = array() ;
            }
            $options['div']['class'] = GA_FORM_ACTIONS;
        }
		return parent::end($options,$secureAttributes);
    }
    
    /** SPECIAL FORM **/

    // WIP EXPERIMENTAL
    // bootstrap-data-from
    // bootstrap-data-to
    // bootstrap-data-label
    // class
/*
    public function dateRange() {
        $class = 'input-datarange'

        return '<div class="input-daterange">
                <input type="text" class="input-small" value="2012-04-05" />
                    <span class="add-on">to</span>
                        <input type="text" class="input-small" value="2012-04-19" />
                        </div>';
    }
 */


    /**
     * 
     * Create a basic bootstrap search form.
     * 
     * @param $model The model of the form
     * @param $options The options that will be pass to the BootstrapForm::create method
     * 
     * Extra options:
     * 	- label: The input label (default false)
     * 	- placeholder: The input placeholder (default "Search... ")
     * 	- button: The search button text (default: "Search")
     *     
    **/
    public function searchForm ($model = null, $options = array()) {
        
        $label = $this->_extractOption('label', $options, false) ;
        unset($options['label']) ;
        $placeholder = $this->_extractOption('placeholder', $options, 'Search... ') ;
        unset($options['placeholder']) ;
        $button = $this->_extractOption('button', $options, 'Search') ;
        unset($options['button']) ;
        
        $output = '' ;
        
        $output .= $this->create($model, array_merge(array('search' => true, 'inline' => (bool)$label), $options)) ;
        $output .= $this->input('search', array(
            'label' => $label,
            'placeholder' => $placeholder,
            'append' => array(
                $this->button($button, array('style' => 'vertical-align: middle'))
            )
        )) ;
        $output .= $this->end() ;
    
        return $output ;
    }


    /** Special elements to be refactorize a better way later **/
    public function translateInput( $fieldName, $options, $languages = array() ) {
        $options = $this->_parseOptions( $options );

        // If no translations passed, not require to do translations so we return standard input.
        if( empty( $languages ) ) {
            return $this->input( $fieldName, $options );
        }

        $html = '<div class="' . GS_CONTROL_GROUP . '">';

        // Generate label.

        $html .= $this->_getLabel( $fieldName, $options );


        $html .= '<div class="' . GA_CONTROLS . '">';


        $html .= '<div role="tabpanel">';
        $html .= '<ul class="' . GA_NAV . ' ' . GA_TABS . '" role="tablist">';
        $isFirst = true;
        foreach( $languages as $language ) {
            $classActive = '';
            if( $isFirst === true ) {
                $isFirst = false;
                $classActive = ' class="' . GA_ACTIVE . '"';
            }

            $this->setEntity( 'tab' . $fieldName . '.' . $language );
            $aria = $this->domId(); // Inflector to slugify;
            $href = '#' . $aria;
            $html .= '<li role="presentation"' . $classActive . '><a href="' . $href . '" aria-controls="' . $aria . '" role="tab" data-toggle="tab">' . $language . '</a></li>';
        }
        $html .= '</ul> <!-- .nav -->';

        $html .= '<div class="' . GA_TAB_CONTENT . '">';
        $isFirst = true;
        foreach( $languages as $language ) {
            $classActive = '';
            if( $isFirst === true ) {
                $isFirst = false;
                $classActive = ' active';
            }
            $this->setEntity( 'tab' . $fieldName . '.' . $language );
            $aria = $this->domId(); // Inflector to slugify;
            $html .= '<div role="tabpanel" class="' . GA_TAB_PANE . $classActive . '" id="' . $aria . '">';
            $options[ 'label' ] = false;
            $html .= $this->input( $fieldName . '.' . $language, $options );
            $html .= '</div> <!-- .tab-pane -->';
        }
        $html .= '</div> <!-- .tab-content -->';


        $html .= '</div> <!-- tabpanel -->';

        $html .= '</div> <!-- .controls -->';
        $html .= '</div> <!-- .control-group -->';


        return $html;



    }

    /**
     * Is that a doublon of translateInput ? (SL)
     * This function come from the old BootstrapHelper use in Energy plugin in EnergyNoramlization add and edit.
     */
    public function inputWithLocalModificationField($args) {
        $defaultValues = array(
            'fieldname' => '',
            'label' => '',
            'adjustedFieldname' => '',
            'helptext' => ''
        );
        $args = array_merge($defaultValues, $args);

        // Verify everything is there
        
        if (!isset($args['fieldname']) && empty($args['fieldname'])) {
            throw new InvalidArgumentException(__d('cakeganache', 'Fieldname argument is mandatory !'));
        }
        
        if (!isset($args['label']) && empty($args['label'])) {
            throw new InvalidArgumentException(__d('cakeganache', 'Label argument is mandatory !'));
        }
        
        if (!isset($args['adjustedFieldname']) && empty($args['adjustedFieldname'])) {
            throw new InvalidArgumentException(__d('cakeganache', 'Adjusted fieldname argument is mandatory !'));
        }
        $helptext = '';
        
        if (isset($args['helptext']) && !empty($args['helptext'])) {
            $helptext = '<span class="' . GA_HELP_BLOCK . '">' . $args['helptext'] . '</span>';
        }
        $type = 'text';
        
        if (isset($args['type']) && !empty($args['type'])) {
            $type = $args['type'];
        }
        $class = GA_INPUT_BLOCK_LEVEL;
        
        if (isset($args['class']) && !empty($args['class'])) {
            $class = $args['class'] . ' ' . GA_INPUT_BLOCK_LEVEL;
        }
        return $this->input($args['fieldname'], array(
            'label' => array(
                'text' => $args['label']
            ) ,
            'class' => $class,
            'before' => '',
            'type' => $type,
            'between' => '<div class="' . GA_CONTROLS . '"><div class="' . GA_ROW_FLUID . '"><div class="' . GA_3 . '">',
            'after' => '</div><div class="' . GA_3 . '">' . $this->input($args['adjustedFieldname'], array(
                'class' => $class,
                'div' => false,
                'type' => $type,
                'label' => false,
                'placeholder' => __d('cakeganache', 'Adjusted value') ,
                'between' => '',
                'after' => '</div></div>'
            )) . '</div>' . $helptext
        ));
    }
}

