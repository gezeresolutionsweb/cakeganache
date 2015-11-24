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

class GanacheFormHelper extends FormHelper {
    public $navbar = false;
    public $horizontal = false;
    public $inline = false;
    public $search = false;
    
    private $buttonTypes = array('primary', 'info', 'success', 'warning', 'danger', 'inverse', 'link') ;
    private $buttonSizes = array('mini', 'small', 'large') ;
    
    /**
     * 
     * Add classes to options according to values of bootstrap-type and bootstrap-size for button.
     * 
     * @param $options The initial options with bootstrap-type and/or bootstrat-size values
     * 
     * @return The new options with class values (btn, and btn-* according to initial options)
     * 
    **/
    private function addButtonClasses ($options) {
        $options = $this->addClass($options, 'btn') ;
        foreach ($this->buttonTypes as $type) {
            if (isset($options['bootstrap-type']) && $options['bootstrap-type'] == $type) {
                $options = $this->addClass($options, 'btn-'.$type) ;
                break ;
            }
        }
        foreach ($this->buttonSizes as $size) {
            if (isset($options['bootstrap-size']) && $options['bootstrap-size'] == $size) {
                $options = $this->addClass($options, 'btn-'.$size) ;
                break ;
            }
        }
        unset($options['bootstrap-size']) ;
        unset($options['bootstrap-type']) ;
        return $options ;
    }
	
    /**
     * 
     * Create a Twitter Bootstrap like form. 
     * 
     * New options available:
     * 	- navbar: boolean, specify if the form is a navbar form
     * 	- horizontal: boolean, specify if the form is horizontal
     * 	- inline: boolean, specify if the form is inline
     * 	- search: boolean, specify if the form is a search form
     * 
     * @param $model The model corresponding to the form
     * @param $options Options to customize the form
     * 
     * @return The HTML tags corresponding to the openning of the form
     * 
    **/
    public function create($model = null, $options = array()) {
        $this->navbar = $this->_extractOption('navbar', $options, false);
		unset($options['navbar']);
        $this->horizontal = $this->_extractOption('horizontal', $options, false);
		unset($options['horizontal']);
        $this->search = $this->_extractOption('search', $options, false) ;
        unset($options['search']) ;
        $this->inline = $this->_extractOption('inline', $options, false) ;
        unset($options['inline']) ;
        if( $this->navbar ) {
            $options = $this->addClass( $options, 'navbar-form' );
        }
        else if ($this->horizontal) {
			$options = $this->addClass($options, 'form-horizontal') ;
		}
        else if ($this->inline) {
            $options = $this->addClass($options, 'form-inline') ;
        }
        if ($this->search) {
            $options = $this->addClass($options, 'form-search') ;
        }

        $options[ 'inputDefaults' ] = $this->_extractOption( 'inputDefaults', $options, array(
            'div' => ( $this->inline || $this->navbar ) ? false : array(
                'class' => 'control-group'
            )
        ) );

        // If inputDefault is defined but not div and this is a navbar or inline form.
        if( !isset( $options[ 'inputDefaults' ][ 'div' ] ) && ( $this->navbar || $this->inline ) ) {
            $options[ 'inputDefaults' ][ 'div' ] = false;
        }

		return parent::create($model, $options) ;
	}
    
    /**
     * 
     * Create & return a error message (Twitter Bootstrap like).
     * 
     * The error is wrapped in a <span> tag, with a class
     * according to the form type (help-inline or help-block).
     * 
    **/
    public function error($field, $text = null, $options = array()) {
        $this->setEntity($field);
        $optField = $this->_magicOptions(array()) ;
        $options['wrap'] = $this->_extractOption('wrap', $options, 'span') ;
        $errorClass = 'help-block' ;
        if ($this->horizontal && $optField['type'] != 'checkbox') {
            $errorClass = 'help-inline' ;
        }
        $options = $this->addClass($options, $errorClass) ;
        return parent::error($field, $text, $options) ;
    }
    
    /**
     * 
     * Create & return a label message (Twitter Boostrap like).
     * 
    **/
    public function label($fieldName = null, $text = null, $options = array()) {
        $this->setEntity($fieldName);
        $optField = $this->_magicOptions(array()) ;
        if ($optField['type'] != 'checkbox') {
            $options = $this->addClass($options, 'control-label') ;
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
    public function input($fieldName, $options = array()) {
    
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
            $labelStart = '<label class="checkbox">';
            $labelEnd = '</label>';

            if( $label === false ) {
                $labelStart = '';
                $labelEnd = '';
            }

            $before = ($this->horizontal ? '<div class="controls">' : '') . $labelStart . $before ;
            $between = $between . $labelEnd;
            $options['format'] = array('before', 'input', 'label', 'between', 'error', 'after') ;
            $after = $after.($this->horizontal ? '</div>' : '') ;
        }
        else if ($options['type'] == 'radio') {
            $options['legend'] = false ;
            $before = (($label!=false)?$this->label($fieldName):'')
                .($this->horizontal ? '<div class="controls">' : '').'<label class="radio">'.$before ;
            $between = $between.'</label>' ;
            $options['format'] = array('before', 'input', 'label', 'between', 'error', 'after') ;
            $after = $after.($this->horizontal ? '</div>' : '') ;
        }
        else if ($this->horizontal) {
            $beforeClass .= ' controls' ;
        }
        else if ($this->inline && !$this->search && !$label) {
            $options['label'] = false ;
        }
        if ($prepend) {
            $beforeClass .= ' input-prepend' ;
            if (is_string($prepend)) {
                $before .= '<span class="add-on">'.$prepend.'</span>' ;
            }
            if (is_array($prepend)) {
                foreach ($prepend as $pre) {
                    $before .= $pre ;
                }
            }
        }
        if ($append) {
            $beforeClass .= ' input-append' ;
            if (is_string($append)) {
                $between = '<span class="add-on">'.$append.'</span>'.$between ;
            }
            if (is_array($append)) {
                foreach ($append as $apd) {
                    $between = $apd.$between ;
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
        $options = $this->addClass($options, 'btn-group') ;
        if ($vertical) {
            $options = $this->addClass($options, 'btn-group-vertical') ;
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
        $options = $this->addClass($options, 'btn-toolbar') ;
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
        $options['data-toggle'] = 'dropdown' ;
        $options = $this->addClass($options, "dropdown-toggle") ;

        $outPut = '';

        if( $wrap ) {
            $outPut = '<div class="btn-group">';
        }
        $outPut = $this->button($title.'<span class="caret"></span>', $options) ;
        $outPut .= '<ul class="dropdown-menu">' ;
        foreach ($menu as $action) {
            if ($action === 'divider') {
                $outPut .= '<li class="divider"></li>' ;
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
        if (!$this->inline) {
            if (!array_key_exists('div', $options)) {
                $options['div'] = array() ;
            }
            $options['div']['class'] = 'form-actions';
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

        $html = '<div class="control-group">';

        // Generate label.

        $html .= $this->_getLabel( $fieldName, $options );


        $html .= '<div class="controls">';


        $html .= '<div role="tabpanel">';
        $html .= '<ul class="nav nav-tabs" role="tablist">';
        $isFirst = true;
        foreach( $languages as $language ) {
            $classActive = '';
            if( $isFirst === true ) {
                $isFirst = false;
                $classActive = ' class="active"';
            }

            $this->setEntity( 'tab' . $fieldName . '.' . $language );
            $aria = $this->domId(); // Inflector to slugify;
            $href = '#' . $aria;
            $html .= '<li role="presentation"' . $classActive . '><a href="' . $href . '" aria-controls="' . $aria . '" role="tab" data-toggle="tab">' . $language . '</a></li>';
        }
        $html .= '</ul> <!-- .nav -->';

        $html .= '<div class="tab-content">';
        $isFirst = true;
        foreach( $languages as $language ) {
            $classActive = '';
            if( $isFirst === true ) {
                $isFirst = false;
                $classActive = ' active';
            }
            $this->setEntity( 'tab' . $fieldName . '.' . $language );
            $aria = $this->domId(); // Inflector to slugify;
            $html .= '<div role="tabpanel" class="tab-pane' . $classActive . '" id="' . $aria . '">';
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
            throw new InvalidArgumentException(__d('cakephp_bootstrap_helpers', 'Fieldname argument is mandatory !'));
        }
        
        if (!isset($args['label']) && empty($args['label'])) {
            throw new InvalidArgumentException(__d('cakephp_bootstrap_helpers', 'Label argument is mandatory !'));
        }
        
        if (!isset($args['adjustedFieldname']) && empty($args['adjustedFieldname'])) {
            throw new InvalidArgumentException(__d('cakephp_bootstrap_helpers', 'Adjusted fieldname argument is mandatory !'));
        }
        $helptext = '';
        
        if (isset($args['helptext']) && !empty($args['helptext'])) {
            $helptext = '<span class="help-block">' . $args['helptext'] . '</span>';
        }
        $type = 'text';
        
        if (isset($args['type']) && !empty($args['type'])) {
            $type = $args['type'];
        }
        $class = 'input-block-level';
        
        if (isset($args['class']) && !empty($args['class'])) {
            $class = $args['class'] . ' input-block-level';
        }
        return $this->input($args['fieldname'], array(
            'label' => array(
                'text' => $args['label']
            ) ,
            'class' => $class,
            'before' => '',
            'type' => $type,
            'between' => '<div class="controls"><div class="row-fluid"><div class="span3">',
            'after' => '</div><div class="span3">' . $this->input($args['adjustedFieldname'], array(
                'class' => $class,
                'div' => false,
                'type' => $type,
                'label' => false,
                'placeholder' => __d('cakephp_bootstrap_helpers', 'Adjusted value') ,
                'between' => '',
                'after' => '</div></div>'
            )) . '</div>' . $helptext
        ));
    }
}
