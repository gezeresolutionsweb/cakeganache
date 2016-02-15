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
    public $helpers = [
        'Html' => ['className' => 'CakeGanache.GanacheHtml']
    ];

    // Current form type create.
    public $formType = null;

    public $buttonTypes = [
        GA_DEFAULT,
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
     *   - ga_type: string Type of the button. GA_DEFAULT|GA_PRIMARY|GA_INFO|GA_SUCCESS|GA_WARNING|GA_DANGER|GA_INVERSE|GA_LINK default: GA_DEFAULT
     *   - ga_size: string Size of the button. GA_MINI|GA_SMALL|GA_LARGE
     */
    public function addButtonClasses($options)
    {
        $options = $this->addClass($options, GA_BTN);

        if(isset($options['ga_type'])) {
            if(in_array($options['ga_type'], $this->buttonTypes)) {
                $options = $this->addClass($options, GA_BTN . '-' . $options['ga_type']);
            } else {
                $options = $this->addClass($options, GA_BTN_DEFAULT);
            }
            unset($options['ga_type']);
        } else {
            $options = $this->addClass($options, GA_BTN_DEFAULT);
        }

        if(isset($options['ga_size'])) {
            if(in_array($options['ga_size'], $this->buttonSizes)) {
                $options = $this->addClass($options, GA_BTN . '-' . $options['ga_size']);
            }
            unset($options['ga_size']);
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
    public function create($model = null, $options = [])
    {
        $this->formType = $this->_extractOption('ga_type', $options, null);
		unset($options['ga_type']);

        if(!empty($this->formType) && in_array($this->formType, array_keys($this->formTypes))) {
            $options = $this->addClass($options, $this->formTypes[$this->formType]);
        }

        $inputDefaults = null;
        if($this->formType === GA_HORIZONTAL) {
            $inputDefaults = ['div' => ['class' => GA_CONTROL_GROUP]];
        }

        $options['inputDefaults'] = $this->_extractOption('inputDefaults', $options, $inputDefaults);

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
    public function error($field, $text = null, $options = [])
    {
        $this->setEntity($field);
        $optField = $this->_magicOptions([]);
        $options['wrap'] = $this->_extractOption('wrap', $options, 'span');
        $errorClass = GA_HELP_BLOCK;
        if($this->formType === GA_INLINE) {
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
    public function label($fieldName = null, $text = null, $options = [])
    {
        $this->setEntity($fieldName);
        $optField = $this->_magicOptions([]);
        if ($this->formType === GA_HORIZONTAL && $optField['type'] !== 'checkbox') {
            $options = $this->addClass($options, GA_CONTROL_LABEL);
        }
        return parent::label($fieldName, $text, $options) ;
    }
	
    /** 
     * Create & return an input block (Twitter Boostrap Like).
     * 
     * @param string $fieldName Field name.
     * @param array $options Array of options including extra options.
     * @return string HTML string representing the form input.
     * @todo Rename extra options append for ga_append.
     * @todo Rename extra options prepend for ga_prepend.
     * 
     * Extra options:
     *  - ga_help       - string Help string.
     *  - ga_icon       - string Icon string.
     *  - ga_icon_after - bool Append icon to input. true|false Default: false
     *  - append        - string Append a string to input.
     *  - prepend       - string Prepend a string to input.
     */
    public function input($fieldName, $options = [])
    {
        $gaHelp = $this->_extractOption('ga_help', $options, null);
        $gaIcon = $this->_extractOption('ga_icon', $options, null);
        $gaIconAfter = $this->_extractOption('ga_icon_after', $options, false);
        $prepend = $this->_extractOption('prepend', $options, null);
        $append = $this->_extractOption('append', $options, null);
        $before = $this->_extractOption('before', $options, '');
        $after = $this->_extractOption('after', $options, '') ;
        $between = $this->_extractOption('between', $options, '');
        $label = $this->_extractOption('label', $options, null);
        unset ($options['ga_help'], $options['ga_icon'], $options['ga_icon_after'], $options['prepend'], $options['append']);
        
        $this->setEntity($fieldName);
        $options = $this->_parseOptions($options);

        $beforeClass = [];
                
        if ($options['type'] === 'checkbox') {
            $text = '';
            if(is_null($label)) {
                if (strpos($fieldName, '.') !== false) {
                    $fieldElements = explode('.', $fieldName);
                    $text = array_pop($fieldElements);
                } else {
                    $text = $fieldName;
                }
                if (substr($text, -3) === '_id') {
                    $text = substr($text, 0, -3);
                }
                $text = __(Inflector::humanize(Inflector::underscore($text)));
            } elseif(is_string($label)) {
                $text = $label;
            } elseif(is_array($label) && isset($label['text'])) {
                $text = $label['text'];
            }

            // If label is false we want to keep the label around the checkbox to keep the styling but we don't want to
            // have the label text visible.
            if ($label === false) {
                $text = '';
            }

            if(in_array($this->formType, [GA_NAVBAR, GA_SEARCH, GA_INLINE])) {
                $options['div'] = false;
            }

            $labelStart = $this->Html->tag('label', null, ['for' => $this->domId($fieldName), 'class' => GA_CHECKBOX]);
            $labelEnd = $text . $this->Html->tag('/label');

            // We don't want display the regular label.
            $options['label'] = false;
            $before = ($this->formType === GA_HORIZONTAL ? $this->Html->div(GA_CONTROLS) : '') . $labelStart . $before;
            $between = $between . $labelEnd;
            $options['format'] = ['before', 'input', 'label', 'between', 'error', 'after'];
            $after = $after . ($this->formType === GA_HORIZONTAL ? '</div>' : '');
        } elseif ($options['type'] === 'radio') {
            $options['legend'] = false ;
            $before = (($label !== false) ? $this->label($fieldName) :'' ) . ($this->formType === GA_HORIZONTAL ? '<div class="' . GA_CONTROLS . '">' : '') . '<label class="' . GA_RADIO . '">' . $before;
            $between = $between . '</label>';
            $options['format'] = ['before', 'input', 'label', 'between', 'error', 'after'];
            $after = $after . ($this->formType === GA_HORIZONTAL ? '</div>' : '') ;
        } else {
            // regular text input field.
            switch($this->formType) {
            case GA_NAVBAR:
                $options['div'] = false;
                $options['label'] = false;
                break;
            case GA_HORIZONTAL:
                $options['format'] = ['before', 'label', 'between', 'input', 'error', 'after'];
                break;
            case GA_SEARCH:
                $options['div'] = false;
                $options['label'] = false;
                $options = $this->addClass($options, GA_SEARCH_QUERY);
                break;
            case GA_INLINE:
                $options['div'] = false;
                break;
            }
        }

        if(!empty($gaIcon)) {
            if($gaIconAfter === true) {
                $append = $this->Html->icon($gaIcon);
            } else {
                $prepend = $this->Html->icon($gaIcon);
            }
        }

        // Generate help string
        if(!empty($gaHelp)) {
            $after .= $this->Html->tag('span', $gaHelp, ['class' => GA_HELP_BLOCK]);
        }

        $prependContent = $appendContent = '';
        $divAppendPrependClasses = [];
        if ($prepend) {
            $divAppendPrependClasses[] = GA_INPUT_PREPEND;
            if (is_string($prepend)) {
                $prependContent = $this->Html->tag('span', $prepend, ['class' => GA_ADD_ON]);
            }
/*            if (is_array($prepend)) {
                foreach ($prepend as $pre) {
                    $before .= $pre ;
                }
            }*/
        }
        if ($append) {
            $divAppendPrependClasses[] = GA_INPUT_APPEND;
            if (is_string($append)) {
                $appendContent = $this->Html->tag('span', $append, ['class' => GA_ADD_ON]);
            }
/*            if (is_array($append)) {
                foreach ($append as $apd) {
                    $between = $apd . $between;
                }
            }*/
        }

        if(!empty($append) || !empty($prepend)) {
            if($this->formType === GA_HORIZONTAL) {
                $between = $this->Html->tag('div', null, ['class' => GA_CONTROLS]) . $this->Html->tag('div', null, ['class' => implode(' ', $divAppendPrependClasses)]) . $prependContent . $between;
                $after = $after . $appendContent . $this->Html->tag('/div') . $this->Html->tag('/div');
            } else {
                $between = $this->Html->tag('div', null, ['class' => implode(' ', $divAppendPrependClasses)]) . $prependContent . $between;
                $after = $after . $appendContent . $this->Html->tag('/div');
            }
        } else {
            if($this->formType === GA_HORIZONTAL && !in_array($options['type'], ['checkbox'])) {
                $between = $this->Html->tag('div', null, ['class' => GA_CONTROLS]) . $between;
                $after = $after . $this->Html->tag('/div');
            }
        }

        $options['before'] = $before;
        $options['after'] = $after;
        $options['between'] = $between;

		return parent::input($fieldName, $options);
	}
    

    /**
     * Generate the button title.
     *
     * This will take into count if there is an icon to add before
     * or after the title.
     *
     * @param string $title button title.
     * @param string $options button options array.
     * @return string Button title including the icon if there is one setted.
     */
    public function generateButtonTitle($title, $options = [])
    {
        $icon = $this->_extractOption('ga_icon', $options, null);
        $iconAfter = $this->_extractOption('ga_icon_after', $options, false);

        if(!empty($icon)) {
            if(empty($title)) {
                $title = $this->Html->icon($icon);
            } else {
                $items = [$this->Html->icon($icon), $title];
                if($iconAfter) {
                    $items = [$title, $this->Html->icon($icon)];
                }
                $title = implode(' ', $items);
            }
        }

        return $title;
    }

    /**
     * Create & return a Twitter Like button.
     * 
     * Extra options:
     * 	- ga_type       : string Button type GA_PRIMARY|GA_INFO|GA_SUCCESS|GA_WARNING|GA_DANGER|GA_INVERSE|GA_LINK
     * 	- ga_size       : string Button size GA_MINI|GA_SMALL|GA_LARGE
     * 	- ga_icon       : string Icon name.
     * 	- ga_icon_after : bool true|false Default: false
     */
    public function button($title, $options = [])
    {
        $title = $this->generateButtonTitle($title, $options);
        unset($options['ga_icon'], $options['ga_icon_after']);

        $options = $this->addButtonClasses($options);
        return parent::button($title, $options);
    }
    
    /**
     * Create & return a Twitter Like button group.
     * 
     * @param array $buttons The buttons in the group
     * @param array $options Options for div method
     *
     * Extra options:
     *  - ga_vertical : bool Vertical button group ? true|false default: false
     */
    public function buttonGroup (Array $buttons, $options = [])
    {
        $vertical = $this->_extractOption('ga_vertical', $options, false) ;
        unset($options['ga_vertical']) ;
        $options = $this->addClass($options, GA_BTN_GROUP) ;
        if ($vertical) {
            $options = $this->addClass($options, GA_BTN_GROUP_VERTICAL) ;
        }
        return $this->Html->tag('div', implode('', $buttons), $options);
    }
    
    /**
     * Create & return a Twitter Like button toolbar.
     * 
     * @param array $buttons individual buttons of button groups.
     * @param array $options Options for div method
     */
    public function buttonToolbar ($buttonGroups, $options = [])
    {
        $options = $this->addClass($options, GA_BTN_TOOLBAR);
        return $this->Html->tag('div', implode('', $buttonGroups), $options) ;
    }
    
    /**
     * Create & return a twitter bootstrap dropdown button.
     * 
     * @param string $title The text in the button
     * @param array $menu HTML tags corresponding to menu options (which will be wrapped into <li> tag). To add separator, pass 'divider'.
     * @param array $options Options for button
     *
     * Extra options
     *   - ga_wrap : bool Wrap or not with a btn-group div. true|false Default: true.
     */
    public function dropdownButton ($title, $menu = [], $options = [])
    {
        $wrap = $this->_extractOption('ga_wrap', $options, true);
        unset($options['ga_wrap' ]);

        $options['type'] = false ;
        $options['data-toggle'] = GA_DROPDOWN;
        $options = $this->addClass($options, GA_DROPDOWN_TOGGLE);

        $outPut = '';

        $outPut = $this->button($title . $this->Html->tag('span', '', ['class' => GA_CARET]), $options);
        $outPut .= $this->Html->tag('ul', null, ['class' => GA_DROPDOWN_MENU]);
        foreach ($menu as $action) {
            if ($action === GA_DIVIDER) {
                $outPut .= $this->Html->tag('li', '', ['class' => GA_DIVIDER]);
            } else {
                if (is_array($action)) {
                    $title = '';
                    if( !empty( $action[ 'title' ] ) ) {
                        $title = $action[ 'title' ];
                    }

                    $outPut .= $this->Html->tag('li', $title, ['class' => (!empty($action['class'])) ? $action['class'] : null]);
                } else {
                    $outPut .= $this->Html->tag('li', $action);
                }
            }
        }
        $outPut .= $this->Html->tag('/ul');

        if ($wrap) {
            $outPut .= $this->Html->tag('div', $outPut, ['class' => GA_BTN_GROUP]);
        }
        return $outPut ;
    }
    
    /*
     * Create & return a Twitter Like submit input.
     *
     * @param string $title Button title.
     * @param array $options Button options.
     * @return string HTML submit button.
     *
     * Extra options:
     * 	- ga_type : string Button type GA_PRIMARY|GA_INFO|GA_SUCCESS|GA_WARNING|GA_DANGER|GA_INVERSE|GA_LINK
     * 	- ga_size : string Button size GA_MINI|GA_SMALL|GA_LARGE
     * 	- ga_icon       : string Icon name.
     * 	- ga_icon_after : bool true|false Default: false
     */    
    public function submit($title = null, $options = [])
    {
        $title = $this->generateButtonTitle($title, $options);
        unset($options['ga_icon'], $options['ga_icon_after']);

        if (!isset($options['div'])) {
            $options['div'] = false;
        }
        $options = $this->addButtonClasses($options);
        return parent::submit($title, $options);
    }
	
    /**
     * End a form, Twitter Bootstrap like.
     * 
     * @param string|array $options Label for the submit button as string ou array with label key and other options.
     * @param array $secureAttributes To add secure attributes.
     *
     * Extra options:
     * 	- ga_type       : string Button type GA_PRIMARY|GA_INFO|GA_SUCCESS|GA_WARNING|GA_DANGER|GA_INVERSE|GA_LINK
     * 	- ga_size       : string Button size GA_MINI|GA_SMALL|GA_LARGE
     */
    public function end($options = null, $secureAttributes = [])
    {
        if ($options === null) {
            return parent::end($options, $secureAttributes);
        }

        if (is_string($options)) {
            $options = ['label' => $options];
        }

        if (!in_array($this->formType, [GA_INLINE, GA_SEARCH, GA_HORIZONTAL])) {
            if (!array_key_exists('div', $options)) {
                $options['div'] = [];
            }
            $options['div']['class'] = GA_FORM_ACTIONS;
        }

        if($this->formType === GA_HORIZONTAL) {
            if (!array_key_exists('div', $options)) {
                $options['div'] = [];
            }
            $options['div']['class'] = GA_CONTROL_GROUP;
            $before = $this->Html->tag('div', null, ['class' => GA_CONTROLS]);
            if(!empty($options['before'])) {
                $before = $options['before'] . $before;
            }
            $options['before'] = $before;

            $after = $this->Html->tag('/div');
            if(!empty($options['after'])) {
                $after = $after . $options['after'];
            }
            $options['after'] = $after;
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
     * Create a basic bootstrap search form.
     * 
     * @param $model The model of the form
     * @param $options The options that will be pass to the BootstrapForm::create method
     * 
     * Extra options:
     * 	- label: The input label (default false)
     * 	- placeholder: The input placeholder (default "Search... ")
     * 	- button: The search button text (default: "Search")
     */
    public function searchForm ($model = null, $options = [])
    {
        $label = $this->_extractOption('label', $options, false);
        unset($options['label']);
        $placeholder = $this->_extractOption('placeholder', $options, 'Search... ');
        unset($options['placeholder']);
        $button = $this->_extractOption('button', $options, 'Search');
        unset($options['button']);
        
        $output = '' ;
        
        $output .= $this->create($model, array_merge(['search' => true, 'inline' => (bool)$label], $options));
        $output .= $this->input('search', [
            'label' => $label,
            'placeholder' => $placeholder,
            'append' => [
                $this->button($button, ['style' => 'vertical-align: middle'])
            ]
        ]);
        $output .= $this->end() ;
    
        return $output ;
    }

    /** Special elements to be refactorize a better way later **/
    public function translateInput( $fieldName, $options, $languages = [])
    {
        $options = $this->_parseOptions($options);

        // If no translations passed, not require to do translations so we return standard input.
        if (empty($languages)) {
            return $this->input($fieldName, $options);
        }

        $html = '<div class="' . GA_CONTROL_GROUP . '">';

        // Generate label.
        $html .= $this->_getLabel( $fieldName, $options );

        $html .= '<div class="' . GA_CONTROLS . '">';

        $html .= '<div role="tabpanel">';
        $html .= '<ul class="' . GA_NAV . ' ' . GA_TABS . '" role="tablist">';
        $isFirst = true;
        foreach($languages as $language) {
            $classActive = '';
            if($isFirst === true) {
                $isFirst = false;
                $classActive = ' class="' . GA_ACTIVE . '"';
            }

            $this->setEntity('tab' . $fieldName . '.' . $language);
            $aria = $this->domId(); // Inflector to slugify;
            $href = '#' . $aria;
            $html .= '<li role="presentation"' . $classActive . '><a href="' . $href . '" aria-controls="' . $aria . '" role="tab" data-toggle="tab">' . $language . '</a></li>';
        }
        $html .= '</ul> <!-- .nav -->';

        $html .= '<div class="' . GA_TAB_CONTENT . '">';
        $isFirst = true;
        foreach($languages as $language) {
            $classActive = '';
            if($isFirst === true) {
                $isFirst = false;
                $classActive = ' active';
            }
            $this->setEntity('tab' . $fieldName . '.' . $language);
            $aria = $this->domId(); // Inflector to slugify;
            $html .= '<div role="tabpanel" class="' . GA_TAB_PANE . $classActive . '" id="' . $aria . '">';
            $options['label'] = false;
            $html .= $this->input($fieldName . '.' . $language, $options);
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
        $defaultValues = [
            'fieldname' => '',
            'label' => '',
            'adjustedFieldname' => '',
            'helptext' => ''
        ];
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

        return $this->input($args['fieldname'], [
            'label' => [
                'text' => $args['label']
            ],
            'class' => $class,
            'before' => '',
            'type' => $type,
            'between' => '<div class="' . GA_CONTROLS . '"><div class="' . GA_ROW_FLUID . '"><div class="' . GA_3 . '">',
            'after' => '</div><div class="' . GA_3 . '">' . $this->input($args['adjustedFieldname'], [
                'class' => $class,
                'div' => false,
                'type' => $type,
                'label' => false,
                'placeholder' => __d('cakeganache', 'Adjusted value') ,
                'between' => '',
                'after' => '</div></div>'
            ]) . '</div>' . $helptext
        ]);
    }
}

