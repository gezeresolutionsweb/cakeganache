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
 * @since         CakeGanache v 0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::import('Helper', 'Paginator');

class GanachePaginatorHelper extends PaginatorHelper {
    public $uses = ['Html'];

    private function _extractOption ($key, $options, $default = null) {
        if (isset($options[$key])) {
            return $options[$key] ;
        }
        return $default ;
    }
    
    /**
     * 
     * Get link to the first pagination page.
     * 
     * @param $title The link text
     * @param $options Options for link
     * @param $disabledtitle Title when link is disabled
     * @param $disabledOptions Options for link when it's disabled
     * 
    **/
    public function first ($title = '<<', $options = array(), $disabledTitle = null, $disabledOptions = array()) {
        $options = array_merge(array('tag' => 'li'), $options) ;
        $disabledOptions = array_merge(array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'),
            $disabledOptions) ;
        return parent::first($title, $options, $disabledTitle, $disabledOptions) ;        
    }
    
    /**
     * 
     * Get link to the previous pagination page.
     * 
     * @param $title The link text
     * @param $options Options for link
     * @param $disabledtitle Title when link is disabled
     * @param $disabledOptions Options for link when it's disabled
     * 
    **/
    public function prev ($title = '<', $options = array(), $disabledTitle = null, $disabledOptions = array()) {
        $options = array_merge(array('tag' => 'li'), $options) ;
        $disabledOptions = array_merge(array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'),
            $disabledOptions) ;
        return parent::prev($title, $options, $disabledTitle, $disabledOptions);
    }
    
    /**
     * 
     * Get link to the next pagination page.
     * 
     * @param $title The link text
     * @param $options Options for link
     * @param $disabledtitle Title when link is disabled
     * @param $disabledOptions Options for link when it's disabled
     * 
    **/
    public function next ($title = '>', $options = array(), $disabledTitle = null, $disabledOptions = array()) {
        $options = array_merge(array('tag' => 'li'), $options) ;
        $disabledOptions = array_merge(array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'),
            $disabledOptions) ;
        return parent::next($title, $options, $disabledTitle, $disabledOptions) ;        
    }
    
    /**
     * 
     * Get link to the last pagination page.
     * 
     * @param $title The link text
     * @param $options Options for link
     * @param $disabledtitle Title when link is disabled
     * @param $disabledOptions Options for link when it's disabled
     * 
    **/
    public function last ($title = '>>', $options = array(), $disabledTitle = null, $disabledOptions = array()) {
        $options = array_merge(array('tag' => 'li'), $options) ;
        $disabledOptions = array_merge(array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'),
            $disabledOptions) ;
        return parent::last($title, $options, $disabledTitle, $disabledOptions) ;        
    }
    
    /**
     * 
     * Get pagination link list.
     * 
     * @param $options Options for link element
     *
     * Extra options:
     *  - alignment left/center/right (default center)
     *  - size mini/small/normal/large (default normal)
     *       
    **/
    public function numbers ($options = array()) {
    
        $default = array(
            'tag' => 'li',
            'currentTag' => 'a', 
            'separator' => '', 
            'currentClass' => 'active', 
            'disabledTag' => 'a',
            'size' => 'normal',
            'alignment' => 'center',
            'before' => '',
            'after' => ''
        );
        $options = array_merge($default, $options) ;
        
        $size = $options['size'] ; unset($options['size']) ;
        $alignment = $options['alignment'] ; unset($options['alignment']) ;
        
        $class = 'pagination' ;
        
        if ($size !== 'normal') {
            $class .= ' pagination-'.$size ;
        }
        
        if ($alignment !== 'left') {
            $class .= ' pagination-'.$alignment ;
            if ($alignment === 'center') {
                $class .= 'ed' ;
            }
        }
          
        return parent::numbers ($options) ;
    }

    /**
     * Get a complete pagination with counter, all navigation button and number.
     * This is a wrapper around all other individual option with some defaults params.
     * Inspired by Paginator::counter() function.
     *
     * @param $options Options for pagination.
     *
     * Extra options:
     *  - counterOptions: Counter options array to override defaults one. (default: empty array)
     *  - firstTitle: First button title. (default: "<<")
     *  - firstOptions: First button options array to override defaults one.
     *  - prevTitle: Prev button title. (default: "<")
     *  - prevOptions: Prev button options array to override defaults one.
     *  - numbersOptions: Numbers buttons options array to override defaults one.
     *  - nextTitle: Next button title. (default: ">")
     *  - nextOptions: Next button options array to override defaults one.
     *  - lastTitle: Last button title. (default: ">>")
     *  - lastOptions: Last button options array to override defaults one.
     *  - wrapOpen: Wrapper opening tag. (default: "<div class="pagination">")
     *  - wrapClose: Wrapper closing tag. (default: "</div>")
     *  - type: How we display buttons. In list or plain. values: list, plain  (default: list). This options has precedent on format option.
     *  - format: String that give control on what to display and the order to display element.
     *      Default: "{:wrapOpen} {:counter} {:ulOpen} {:first} {:prev} {:numbers} {:next} {:last} {:ulClose} {:wrapClose}"
     *      Options:
     *       - {:wrapOpen} Display wrap open tag. Use with {:wrapClose}.
     *       - {:counter} Display counter.
     *       - {:ulOpen} Display ul open tag. Use with {:ulClose}.
     *       - {:first} Display first button.
     *       - {:prev} Display prev button.
     *       - {:numbers} Display numbers button.
     *       - {:next} Display next button.
     *       - {:last} Display last button.
     *       - {:ulClose} Display ul close tag. User with {:ulOpen}.
     *       - {:wrapClose} Display wrap close tag. Use with {:wrapOpen}.
     *
     */
    public function pagination( $options = array() ) {
        $default = [
            'counterOptions' => [],
            'firstTitle' => '<<',
            'firstOptions' => [],
            'prevTitle' => '<',
            'prevOptions' => [],
            'prevDisabledTitle' => '<',
            'prevDisabledOptions' => [],
            'numbersOptions' => [],
            'nextTitle' => '>',
            'nextOptions' => [],
            'nextDisabledTitle' => '>',
            'nextDisabledOptions' => [],
            'lastTitle' => '>>',
            'lastOptions' => [],
            'wrapOpen' => '<div class="pagination">',
            'wrapClose' => '</div>',
            'type' => 'list', // plain, list
            'format' => '{:wrapOpen} {:counter} {:ulOpen} {:first} {:prev} {:numbers} {:next} {:last} {:ulClose} {:wrapClose}'
        ];
        $options = array_merge( $default, $options );

        if( $options[ 'type' ] === 'plain' ) {
            $substitutions = array(
                '{:ulOpen}' => '',
                '{:ulClose}' => ''
            );
            $options[ 'format' ] = str_replace( array_keys( $substitutions ), array_values( $substitutions ), $options[ 'format' ] );
            $options[ 'numbersOptions' ][ 'tag' ] = '';
            $options[ 'firstOptions' ][ 'tag' ] = '';
            $options[ 'prevOptions' ][ 'tag' ] = '';
            $options[ 'nextOptions' ][ 'tag' ] = '';
            $options[ 'lastOptions' ][ 'tag' ] = '';
        }

        extract( $options );

        $map = array(
            '{:wrapOpen}' => $options[ 'wrapOpen' ],
            '{:counter}' => parent::counter( $counterOptions ),
            '{:ulOpen}' => $this->Html->tag( 'ul' ),
            '{:first}' => $this->first( $firstTitle, $firstOptions ),
            '{:prev}' => $this->prev( $prevTitle, $prevOptions, $prevDisabledTitle, $prevDisabledOptions ),
            '{:numbers}' => $this->numbers( $numbersOptions ),
            '{:next}' => $this->next( $nextTitle, $nextOptions, $nextDisabledTitle, $nextDisabledOptions ),
            '{:last}' => $this->last( $lastTitle, $lastOptions ),
            '{:ulClose}' => $this->Html->useTag( 'tagend', 'ul' ),
            '{:wrapClose}' => $options[ 'wrapClose' ]
        );
        return str_replace( array_keys( $map ), array_values( $map ), $options[ 'format' ] );
    }
}
