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

App::import('CakeGanache.Helper', 'GanacheHtml');
App::import('CakeGanache.Helper', 'GanacheForm');
App::import('Routing', 'Router');

class GanacheTablenavbarHelper extends AppHelper {
    public $helpers = array(
        'Html' => array( 'className' => 'CakeGanache.GanacheHtml', 'prefix' => 'fa', 'iconPrefix' => ' fa-' ),
        'Form' => 'CakeGanache.GanacheForm',
    );

    /**
     * 
     * Extract options from $options, returning $default if $key is not found.
     * 
     */
    protected function _extractOption ($key, $options, $default = null) {
        if (isset($options[$key])) {
            return $options[$key] ;
        }
        return $default ;
    }

    /**
     * Show a new table navbar.
     * 
     * @param options Options passed to tag method for outer navbar div
     * 
     * Extra options:
     *  - actions: Actions buttons.
     *  - buttonFilterTitle: Button filter title.
     *  - buttonClearFiltersTitle: Button clear filters title.
     *  - filters: Filter form input elements.
     *  - search: false, true
     *  - searchAction: Routing::array
     *  - searchFormModel: Search form model name. Default: Filter
     *  - searchFormOptions: Search form options.
     *  - searchPlaceholder: Search placeholder string.
     *  - searchFieldPrepend: Search field prepend.
     *  - searchFieldname: Search field name.
     *  - showSearchField: true, false
     *  - showFilterButton: true, false
     *  - showClearFiltersButton: true, false
     *  - responsive: false, true
     */
    public function show($options = array()) {
        // Extract options.
        $actions = $this->_extractOption( 'actions', $options, array() );
        $buttonFilterTitle = $this->_extractOption( 'buttonFilterTitle', $options, '' );
        $buttonClearFiltersTitle = $this->_extractOption( 'buttonClearFiltersTitle', $options, '' );
        $filters = $this->_extractOption( 'filters', $options, array() );
        $search = $this->_extractOption( 'search', $options, false );
        $searchAction = $this->_extractOption( 'searchAction', $options, array(
            'plugin' => $this->request->plugin,
            'controller' => $this->request->controller,
            'action' => $this->request->action
        ) );

        $searchFormModel = $this->_extractOption( 'searchFormModel', $options, 'Filter' );
        $searchFormOptions = $this->_extractOption( 'searchFormOptions', $options, array() );
        $searchPlaceholder = $this->_extractOption( 'searchPlaceholder', $options, '' );
        $showSearchField = $this->_extractOption( 'showSearchField', $options, true );
        $searchFieldPrepend = $this->_extractOption( 'searchFieldPrepend', $options, $this->Html->icon( 'search' ) );
        $searchFieldname = $this->_extractOption( 'searchFieldname', $options, $searchFormModel . '.search' );
        $showFilterButton = $this->_extractOption( 'showFilterButton', $options, true );
        $showClearFilterButton = $this->_extractOption( 'showClearFilterButton', $options, true );
        $responsive = $this->_extractOption( 'responsive', $options, false );

        $formOptions = array(
            'class' => GA_FORM_INLINE,
            'type' => 'get',
        );

        if( $search === true ) {
            $form = $this->Form->create($searchFormModel, array_merge($formOptions, $searchFormOptions));

            // Treat filters if any.
            foreach($filters as $fieldname => $options) {
                if(is_int($fieldname)) {
                    if(is_array($options)) {
                        $fieldname = 'field' . $fieldname;
                    } else {
                        $fieldname = $options;
                        $options = array();
                    }
                }

                // If no model name defined
                if(mb_strpos('.', $fieldname) === false) {
                    $fieldname = $searchFormModel . '.' . $fieldname;
                }

                $form .= $this->_generateFilterInput($fieldname, $options);
            }

            if( $showSearchField === true ) {
                $form .= $this->Form->input( $searchFieldname, array(
                    'type' => 'text',
                    'placeholder' => $searchPlaceholder,
                    'label' => false,
                    'action' => $searchAction,
                    'div' => false,
                    'prepend' => $searchFieldPrepend
                ) );
            }

            if( $showFilterButton === true ) {
                $form .= PHP_EOL;
                $form .= $this->Form->button( $this->Html->icon( 'filter' ), array(
                    'bootstrap-type' => 'primary',
                    'title' => $buttonFilterTitle,
                    'data-toggle' => GA_TABLENAVBAR_SEARCH_BTN
                ) );
            }

            if( $showClearFilterButton === true ) {
                $form .= PHP_EOL;
                $form .= $this->Form->button( $this->Html->icon( 'times' ), array(
                    'title' => $buttonClearFiltersTitle,
                    'data-toggle' => GA_TABLENAVBAR_CLEAR_BTN
                ) );
            }

            $form .= $this->Form->end();
        } else {
            $form = '';
        }


        // Treat actions if some.
        $actionContainer = '';
        if( !empty( $actions ) ) {
            $allAction = '';
            foreach( $actions as $action ) {
                $allAction .= $action;
            }
            $buttonToolbar = $this->Html->tag( 'div', $allAction, array( 'class' => GA_BTN_TOOLBAR ) );
            $actionContainer = $this->Html->tag( 'div', $buttonToolbar, array( 'class' => GA_PULL_RIGHT . ' ' . GA_TABLENAVBAR_ACTIONS ) );
        }

        $inner = $actionContainer . $form;

        $inner = $this->Html->tag( 'div', $inner, array( 'class' => GA_NAVBAR_INNER ) );

        return $this->Html->tag( 'div', $inner, array( 'class' => GA_NAVBAR . ' ' . GA_TABLENAVBAR, 'data-provide' => GA_TABLENAVBAR ) );
    }

    private function _generateFilterInput($fieldname, $options = array()) {
        $defaultOptions = array(
            'div' => false,
            'label' => false,
        );

        $options = array_merge( $defaultOptions, $options );


        if(!empty($options['type']) && $options['type'] === GA_SELECTPICKER) {
            $options += array('class' => GA_SELECTPICKER . ' ' . GA_SHOW_TICK);
        }

        return $this->Form->input( $fieldname, $options );
    }
}
