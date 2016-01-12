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

App::import('Helper', 'Html') ;

class GanacheHtmlHelper extends HtmlHelper {
    /**
     * Library icon prefix use by icon().
     */
    protected $prefix = 'glyphicon';

    public function __construct(View $View, $settings = array()) {
        if( isset( $settings[ 'prefix' ] ) ) {
            $this->prefix = $settings[ 'prefix' ];
            unset( $settings[ 'prefix' ] );
        }

        parent::__construct($View, $settings);
    }


    private function _extractOption ($key, $options, $default = null) {
        if (isset($options[$key])) {
            return $options[$key] ;
        }
        return $default ;
    }

    /**
     * 
     * Check type values in $options, returning null if no option is found or if
     * option found is equal to $default or if otion is not in $avail.
     * 
     **/
    private function _extractType ($options, $key = 'type', $default = GA_INFO, $avail = array(GA_INFO, GA_SUCCESS, GA_WARNING, GA_ERROR)) {
            $type = $this->_extractOption($key, $options, $default) ;
            if ($type == $default) {
                return null ;
            }
            if (!in_array($type, $avail)) {
                return null ;
            }
            return $type ;
        }

    /**
     * Create an icon.
     * Compatible for Bootstrap 2.3.2 and 3.X glyphicons and FontAwesome by changin prefix for "fa"
     *
     * @access public
     * @author Sylvain Lévesque <slevesque@gezere.com>
     * @param string $icon label of the icon
     * @param array $options Options array.
     *
     * Extra options
     *   - ga_prefix : Library prefix. (default: "glyphicon")
     *   - ga_size   : Icon size. Add size to html class attribute. (default: GA_1X)
     *      values:
     *          GA_FW : Fixed with
     *          GA_LG : Large icon
     *          GA_1X : 1x size
     *          GA_2X : 2x size
     *          GA_3X : 3x size
     *          GA_4X : 4x size
     *          GA_5X : 5x size
     *   - ga_spin   : If this icon must spin. Add GA_SPIN to html class attribute. true|false (default: false)
     *
     * @return string Html element string.
     * @todo Try to implement stack icon in there.
     */
    public function icon($icon, $options = [])
    {
        $defaults = [
            'ga_prefix' => $this->prefix,
            'class' => [$this->prefix]
            ];


        // If class attribute is define we must force it as array.
        if(isset($options['class'])) {
            $classes = [];
            if(is_string($options['class'])) {
                $classes = explode(' ', $options['class']);
            } elseif(is_array($options['class'])) {
                $classes = $options['class'];
            }
            unset($options['class']);
        }

        $options = array_merge($defaults, $options);

        array_push($options['class'], $options['ga_prefix'] . '-' . $icon);

        // Merging regular classes.
        if(isset($classes)) {
            $options['class'] = array_merge($options['class'], $classes);
        }

        // If ga_size is defined
        if(isset($options['ga_size'])) {
            array_push($options['class'], $options['ga_prefix'] . '-' . $options['ga_size']);
            unset($options['ga_size']);
        }

        // If ga_spin is true
        if(isset($options['ga_spin']) && $options['ga_spin'] === true) {
            array_push($options['class'], $options['ga_prefix'] . '-' . GA_SPIN);
            unset($options['ga_spin']);
        }

        // Clean options before passing it to standard HtmlHelper::tag() function.
        unset($options['ga_prefix']);

        return $this->tag('i', '', $options);
    }

    /**
     * Create a bootstrap link button.
     *
     * @access public
     * @author Sylvain Lévesque <slevesque@gezere.com>
     * @param string $title The content to be wrapped by <a> tags.
     * @param string|array $url Cake-relative URL or array of URL parameters, or external URL (starts with http://)
     * @param array $options Array of options and HTML attributes.
     * @return string An `<a />` element or bootstraped button link.
     * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/html.html#HtmlHelper::link
     *
     * Extra options
     * - ga_type         : string GA_DEFAULT|GA_PRIMARY|GA_INFO|GA_SUCCESS|GA_WARNING|GA_DANGER|GA_INVERSE|GA_LINK (default: GA_DEFAULT)
     * - ga_size         : string GA_MINI|GA_SMALL|GA_LARGE|GA_BLOCK
     * - ga_icon         : string GanacheHtml::icon() icon string result.
     * - ga_icon_options : array|string GanacheHtml::icon() icon options.
     *
     * @todo Escape title from to avoid html tags.
     * @todo Add ga_icon_after option to put icon after the label. There is one case.
     */
    public function linkButton($title, $url = NULL, $options = [])
    {
        $defaults = array(
            'ga_type' => GA_DEFAULT,
            'class' => [GA_BTN]
        );

        // If class attribute is define we must force it as array.
        if(isset($options['class'])) {
            $classes = [];
            if (is_string($options['class'])) {
                $classes = explode(' ', $options['class']);
            } elseif (is_array($options['class'])) {
                $classes = $options['class'];
            }
            unset($options['class']);
        }

        $options = array_merge($defaults, $options);

        // Is title attribute is not define, define it by default.
        if(!isset($options['title'])) {
            $options['title'] = $title;
        }

        array_push($options['class'], GA_BTN . '-' . $options['ga_type']);
        unset($options['ga_type']);

        // Merging regular classes.
        if(isset($classes)) {
            $options['class'] = array_merge($options['class'], $classes);
        }

        // Button size processing (GA_BTN_LARGE, GA_BTN_SMALL, etc.)
        if(isset($options['ga_size'])) {
            array_push($options['class'], GA_BTN . '-' . $options['ga_size']);
            unset($options['ga_size']);
        }

        // @todo We surely can generalize this in a function later.
        // Button icon
        if(isset($options['ga_icon'])) {
            $options['escape'] = false;

            // Icon options
            $iconOptions = [];
            if(isset($options['ga_icon_options'])) {
                $iconOptions = $options['ga_icon_options'];
                unset($options['ga_icon_options']);
            }
            $title = $this->icon($options['ga_icon'], $iconOptions) . ' ' . $title;
            unset($options['ga_icon']);
        }
        
        return parent::link($title, $url, $options);
    }

    /**
     * Create a Twitter Bootstrap span label.
     * 
     * @param text The label text
     * @param options Options for span
     *
     * Extra options
     * - ga_type         : The type of the label GA_DEFAULT|GA_SUCCESS|GA_WARNING|GA_INFO|GA_IMPORTANT|GA_INVERSE (default: GA_DEFAULT)
     * - ga_icon         : string GanacheHtml::icon() icon string result.
     * - ga_icon_options : array|string GanacheHtml::icon() icon options.
     *
     */
    public function label ($text, $options = [])
    {
        $types = [GA_DEFAULT, GA_SUCCESS, GA_WARNING, GA_INFO, GA_IMPORTANT, GA_INVERSE];

        $type = GA_DEFAULT;
        if(!empty($options['ga_type'])) {
            if(in_array($options['ga_type'], $types)) {
                $type = $options['ga_type'];
            }
            unset($options['ga_type']);
        }

        // @todo We surely can generalize this in a function later.
        // Button icon
        if(isset($options['ga_icon'])) {
            // Icon options
            $iconOptions = [];
            if(isset($options['ga_icon_options'])) {
                $iconOptions = $options['ga_icon_options'];
                unset($options['ga_icon_options']);
            }
            $text = $this->icon($options['ga_icon'], $iconOptions) . ' ' . $text;
            unset($options['ga_icon']);
        }

        $options = $this->addClass($options, GA_LABEL);
        $options = $this->addClass($options, GA_LABEL . '-' . $type) ;

        return $this->tag('span', $text, $options) ;
    }

    /**
     * Create a Twitter Bootstrap span badge.
     * 
     * @param text The badge text
     * @param options Options for span
     *
     * Extra options
     * - ga_type         : string The type of the label GA_DEFAULT|GA_SUCCESS|GA_WARNING|GA_INFO|GA_IMPORTANT|GA_INVERSE (default: GA_DEFAULT)
     * - ga_icon         : string GanacheHtml::icon() icon string result.
     * - ga_icon_options : array|string GanacheHtml::icon() icon options.
     *
     * @todo This function is almost the same as label(). Generalization.
     */
    public function badge ($text, $options = []) {
        $types = [GA_DEFAULT, GA_SUCCESS, GA_WARNING, GA_INFO, GA_IMPORTANT, GA_INVERSE];

        $type = GA_DEFAULT;
        if(!empty($options['ga_type'])) {
            if(in_array($options['ga_type'], $types)) {
                $type = $options['ga_type'];
            }
            unset($options['ga_type']);
        }

        // @todo We surely can generalize this in a function later.
        // Button icon
        if(isset($options['ga_icon'])) {
            // Icon options
            $iconOptions = [];
            if(isset($options['ga_icon_options'])) {
                $iconOptions = $options['ga_icon_options'];
                unset($options['ga_icon_options']);
            }
            $text = $this->icon($options['ga_icon'], $iconOptions) . ' ' . $text;
            unset($options['ga_icon']);
        }

        $options = $this->addClass($options, GA_BADGE);
        $options = $this->addClass($options, GA_BADGE . '-' . $type) ;

        return $this->tag('span', $text, $options) ;
    }

    /**
     * Get crumb lists in a HTML list, with bootstrap like style.
     *
     * @param $options Options for list
     * @param $startText Text to insert before list
     * 
     * Extra options:
     * 	- ga_separator : string Crumb separator character.
     */
    public function getCrumbList($options = [], $startText = null) {
        $separator = '/';
        if(!empty($options['ga_separator'])) {
            $separator = $options['ga_separator'];
            unset($options['ga_separator']);
        }
        $options['separator'] = $this->tag('span', $separator, ['class' => GA_DIVIDER]);

        $options = $this->addClass($options, GA_BREADCRUMB) ;

        return parent::getCrumbList ($options, $startText) ;
    }

    /**
     * Create a Twitter Bootstrap style alert block, containing text.
     *  
     * @param $text The alert text
     * @param $options Options that will be passed to Html::div method
     * 
     * 
     * Extra options
     * - ga_block : boolean specify if alert should have 'alert-block' class (default: false)
     * - ga_type  : string The type of the alert GA_DEFAULT|GA_SUCCESS|GA_WARNING|GA_ERROR|GA_INFO|GA_IMPORTANT|GA_INVERSE (default: GA_WARNING)
     */
    public function alert($text, $options = [])
    {
        $button = $this->tag('button', '&times;', ['class' => GA_CLOSE, 'data-dismiss' => GA_ALERT]);

        $types = [GA_DEFAULT, GA_SUCCESS, GA_WARNING, GA_ERROR, GA_INFO, GA_IMPORTANT, GA_INVERSE];

        $type = GA_WARNING;
        if(!empty($options['ga_type'])) {
            if(in_array($type, $types)) {
                $type = $options['ga_type'];
            }
            unset($options['ga_type']);
        }

        $block = false;
        if(!empty($options['ga_block'])) {
            $block = true;
            unset($options['ga_block']);
        }

        $options = $this->addClass($options, GA_ALERT) ;
        if ($block) {
            $options = $this->addClass($options, GA_ALERT_BLOCK);
        }

        $options = $this->addClass($options, GA_ALERT . '-' . $type) ;

        $class = '';
        if(!empty($options['class'])) {
            $class = $options['class'] ;
            unset($options['class']);
        }

        return $this->div($class, $button.$text, $options);
    }

    /**
     * Create a Twitter Bootstrap style progress bar.
     * 
     * @param $widths 
     * 	- The width (in %) of the bar
     * 	- An array of bar, with ga_width and ga_type (GA_INFO|GA_DANGER|GA_SUCCESS|GA_WARNING) specified for each bar. (default: GA_INFO)
     * 	examples:
     * 	    [10,45] or
     * 	    [10,['ga_width' => 56]] or
     * 	    [['ga_width' => 10], ['ga_width' => 56]] or
     * 	    [90,['ga_width' => 10, 'ga_type' => GA_DANGER]]
     * @param $options Options that will be passed to Html::div method (only for main div)
     *  
     * Extra options
     * - ga_type    : string, Type of the progress bar. GA_INFO|GA_SUCCESS|GA_WARNING|GA_DANGER (default: GA_INFO)
     * - ga_striped : boolean, specify if progress bar should be striped
     * - ga_active  : boolean, specify if progress bar should be active
     *
     * @todo Should we verify that we are not busting 100%.
     * @todo Should we recompute the percentage to attribute ?
     */
    public function progress($widths, $options = []) {
        $types = [GA_INFO, GA_SUCCESS, GA_WARNING, GA_DANGER];

        $type = GA_INFO;
        if(!empty($options['ga_type'])) {
            if(in_array($options['ga_type'], $types)) {
                $type = $options['ga_type'];
            }
            unset($options['ga_type']);
        }

        $striped = false;
        if(!empty($options['ga_striped'])) {
            $striped = true;
            unset($options['ga_striped']);
        }

        $active = false;
        if(!empty($options['ga_active'])) {
            $active = true;
            unset($options['ga_active']);
        }

        $bars = '' ;
        if (is_array($widths)) {
            foreach ($widths as $w) {
                $class = GA_BAR;
                $type = GA_INFO;
                if(!empty($w['ga_type'])) {
                    if(in_array($w['ga_type'], $types)) {
                        $type = $w['ga_type'];
                    }
                }

                $width = 0;
                if(!empty($w)) {
                    if(is_array($w)) {
                        if(!empty($w['ga_width'])) {
                            $width = $w['ga_width'];
                        }
                    } else {
                        $width = (int) $w;
                    }
                }

                $class .= ' ' . GA_BAR . '-' . $type;
                $bars .= $this->div($class, '', ['style' => 'width: ' . $width . '%;']);
            }
        } else {
            $bars = $this->div(GA_BAR, '', ['style' => 'width: ' . $widths . '%;']);
        }
        $options = $this->addClass($options, GA_PROGRESS);

        if (!is_array($widths)) {
            $options = $this->addClass($options, GA_PROGRESS . '-' . $type);
        }

        if ($striped) {
            $options = $this->addClass($options, GA_PROGRESS_STRIPED);
        }

        if ($active) {
            $options = $this->addClass($options, GA_ACTIVE);
        }

        $classes = $options['class'];
        unset($options['class']);
        return $this->div($classes, $bars, $options) ;
    }

    /**
     * Create a Bootstrap close icon button.
     * As button by default or as a link.
     *
     * @param boolean $asLink Generate close icon as link. (default: false)
     * @param array $options Array of attributes to pass to HtmlHelper::tag() function.
     * @return string
     *
     * @todo Can we only always generate it as link to support iOS events ? @see http://getbootstrap.com/2.3.2/components.html#misc
     */
    public function closeIcon($asLink = false, $options = [])
    {
        $defaultOptions = [
            'class' => GA_CLOSE
        ];

        $currentOptions = array_merge($defaultOptions, $options);

        if(!empty($options['class'])) {
            if(is_array($options['class'])) {
                $currentOptions['class'] .= ' ' . implode(' ', $options['class']);
            } else {
                $currentOptions['class'] .= ' ' . $options['class'];
            }
        }

        $button = $this->tag('button', '&times;', $currentOptions);
        if ($asLink === true) {
            $currentOptions['escape'] = false;
            $button = $this->link('&times;', '#', $currentOptions);
        }
        return $button;
    }


    /**
     * Initialize an HTML document and the head
     *
     * @param string $titre The name of the current page
     * @param string $description The description of the current page
     * @param string $lang The language of the current page. (default: 'en')
     * @param string $charset Charset of the page. (default: 'utf-8')
     * @param string $doctype The page doctype (default: 'html5')
     * @return string
     *
     * @todo Add doctype constants.
     */
    public function html($titre = '' , $description = '' , $lang = 'en', $charset = 'utf-8', $doctype = 'html5')
    {
        $out = $this->doctype($doctype) . PHP_EOL;
        $out .= $this->tag('html', null, ['lang' => $lang]) . PHP_EOL;
        $out .= $this->tag('head', null) . PHP_EOL;
        $out .= $this->meta('', null, ['charset' => $charset]) . PHP_EOL;
        $out .= $this->tag('title', $titre) . PHP_EOL;
        $out .= $this->meta('', null, ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no']) . PHP_EOL;
        $out .= $this->meta('description', $description) . PHP_EOL;

        return $out;
    }

    public function h1($title, $options = [])
    {
        return $this->tag('h1', $title, $options);
    }

    public function h2($title, $options = [])
    {
        return $this->tag('h2', $title, $options);
    }

    public function h3($title, $options = [])
    {
        return $this->tag('h3', $title, $options);
    }

    public function h4($title, $options = [])
    {
        return $this->tag('h4', $title, $options);
    }

    public function h5($title, $options = [])
    {
        return $this->tag('h5', $title, $options);
    }

    public function h6($title, $options = [])
    {
        return $this->tag('h6', $title, $options);
    }


    /**
     * Close the head element and initialize the body element
     *
     * @return string
     */
    public function body()
    {
        $out =  $this->tag('/head', null) . PHP_EOL;
        $out .= $this->tag('body', null) . PHP_EOL;

        return $out;
    }

    /**
     * Close the body element and the html element
     *
     * @return string
     */
    public function end()
    {
        $out =  $this->tag('/body', null) . PHP_EOL;
        $out .= $this->tag('/html', null);

        return $out;
    }

    /**
     * Open a Bootstrap container
     *
     * @param array $options Options of the div element
     * @return string Div element with the class 'container'
     *
     * Extra options
     * - ga_fluid : boolean To switch to fluid layout (default: false)
     */
    public function container($options = [])
    {
        $class = GA_CONTAINER;
        if(isset($options['ga_fluid']) && $options['ga_fluid'] === true) {
            $class = GA_CONTAINER_FLUID;
        }
        unset($options['ga_fluid']);
        if (isset($options['class'])) {
            $class .= ' ' . $options['class'];
        }
        return $this->div($class, null, $options) . PHP_EOL;
    }

    /**
     * Open a Bootstrap row
     *
     * @param array $options Options of the div element
     * @return string Div element with the class 'row'
     *
     * Extra options
     * - ga_fluid : boolean Set row fluid (default: true)
     */
    public function row($options = [])
    {
        $class = GA_ROW_FLUID;
        if(isset($options['ga_fluid']) && $options['ga_fluid'] === false) {
            $class = GA_ROW;
        }
        unset($options['ga_fluid']);

        if (isset($options['class'])) {
            $class .= ' ' . $options['class'];
        }
        return $this->div($class, null, $options) . PHP_EOL;
    }

    /**
     * Create a column element.
     * 
     * Use example:
     * <code>
     * <?php
     *   // Tell to create a 6 size column with offset of 1.
     *   $this->Bs->col([GA_6, GA_OF1]);
     * ?>
     * </code>
     *
     * @param array $classes Size and offset classes.
     * @param array $options Options of the div element
     * @return string DIV tag element 
     */
    public function col(Array $classes, Array $options = []) {
        $validClasses = [
            GA_1, GA_2, GA_3, GA_4, GA_5, GA_6, GA_7, GA_8, GA_9, GA_10, GA_11, GA_12,
            GA_OF1, GA_OF2, GA_OF3, GA_OF4, GA_OF5, GA_OF6, GA_OF7, GA_OF8, GA_OF9, GA_OF10, GA_OF11, GA_OF12,
        ];
        $class = array_intersect($classes, $validClasses);
        $class = implode(' ', $class);

        if(isset($options['class'])) {
            $class .= ' ' . $options['class'];
            unset($options['class']);
        }

        return parent::div($class , null, $options) . PHP_EOL;
    }
    /**
     * Close div elements
     *
     * @param int $nb Number of div you want to close
     * @return string End tags div
     */
    public function close($nb = 1)
    {
        return str_repeat($this->tag('/div', null) . PHP_EOL, $nb);
    }

    /**
     * Open a header element
     *
     * @param array $options Options of the header element
     * @return string Tag header
     */
    public function header($options = [])
    {
        return $this->tag('header', null, $options). PHP_EOL;
    }

    /**
     * Close the header element
     *
     * @return string End tag header
     */
    public function closeHeader()
    {
        return $this->tag('/header', null) . PHP_EOL;
    }

    /**
     * Picture
     *
     * Extends from HtmlHelper:image()
     *    
     * @param string $path Path to the image file, relative to the app/webroot/img/ directory.
     * @param array $options Array of HTML attributes. See above for special options.
     * @return string End tag header
     *
     * Extra options
     * - ga_shape : string Shape of the images GA_ROUNDED|GA_CIRCLE|GA_POLAROID
     */
    public function image($path, $options = [])
    {
        $shapes = [GA_ROUNDED, GA_CIRCLE, GA_POLAROID];

        if(!empty($options['ga_shape'])) {
            if(in_array($options['ga_shape'], $shapes)) {
                $options = $this->addClass($options, $options['ga_shape']);
            }
            unset($options['ga_shape']);
        }

        return parent::image($path, $options);
    }

    /**
     * Table
     *
     * Create a full HTML table in one call.
     *    
     * @param array $data Array of table data to be pass to HtmlHelper::tableCells().
     * @param array $options Array of options.
     * @return string Full HTML table string.
     *
     * Extra options
     * - ga_condensed          : bool Get a condensed table. (Default: false)
     * - ga_striped            : bool Get a striped table. (Default: false)
     * - ga_bordered           : bool Get a bordered table. (Default: false)
     * - ga_hover              : bool Get a hovered table. (Default: false)
     * - ga_odd_tr_options     : array Array of data odd tr options. to be pass to HtmlHelper::tableCells().
     * - ga_even_tr_options    : array Array of data even tr options. to be pass to HtmlHelper::tableCells().
     * - ga_use_count          : bool adds class "column-$i". (Default: false)
     * - ga_headers            : array Array of headers. to be pass to Html::tableHeaders().
     * - ga_headers_tr_options : array Array of headers tr options. to be pass to HtmlHelper::tableHeaders().
     * - ga_headers_th_options : array Array of headers th options. to be pass to HtmlHelper::tableHeaders().
     * - ga_actions            : array Array of row actions. Will generate a series of HtmlHelper::link().
     * - ga_actions_pull_right : bool Pull right actions links. (default: true)
     * - ga_hidden_fields      : array Array of hidden fields from data contained in $data array.
     */
    public function table(Array $data, Array $options = [])
    {
        $data = $this->toTableArray($data);

        $tableClasses = [GA_TABLE];

        if(isset($options['ga_condensed'])) {
            $tableClasses[] = GA_TABLE_CONDENSED;
            unset($options['ga_condensed']);
        }

        if(isset($options['ga_striped'])) {
            $tableClasses[] = GA_TABLE_STRIPED;
            unset($options['ga_stiped']);
        }

        if(isset($options['ga_bordered'])) {
            $tableClasses[] = GA_TABLE_BORDERED;
            unset($options['ga_bordered']);
        }

        if(isset($options['ga_hover'])) {
            $tableClasses[] = GA_TABLE_HOVER;
            unset($options['ga_hover']);
        }

        $actions = [];
        if(isset($options['ga_actions'])) {
            $actions = $options['ga_actions'];
            unset($options['ga_actions']);
        }

        $oddTrOptions = null;
        if(isset($options['ga_odd_tr_options'])) {
            $oddTrOptions = $options['ga_odd_tr_options'];
            unset($options['ga_odd_tr_options']);
        }

        $evenTrOptions = null;
        if(isset($options['ga_even_tr_options'])) {
            $evenTrOptions = $options['ga_even_tr_options'];
            unset($options['ga_even_tr_options']);
        }

        $useCount = false;
        if(isset($options['ga_use_count'])) {
            $useCount = true;
            unset($options['ga_use_count']);
        }

        $hiddenFields = [];
        if(isset($options['ga_hidden_fields'])) {
            $hiddenFields = $options['ga_hidden_fields'];
            unset($options['ga_hidden_fields']);
        }

        $headers = [];
        if(isset($options['ga_headers'])) {
            $headers = $options['ga_headers'];
            unset($options['ga_headers']);

            // If there is some headers we must rebuild $data to keep only fields that we want.
            $data = $this->rebuildData($data, $headers);

            // If there is some row actions we add an empty headers col.
            if(!empty($actions)) {
                $headers[] = '';
            }
        } else {
            if(!empty($data)) { 
                $keys = array_keys($data[0]);

                // If there is no headers explicitly defined we set headers only if keys are not all numeric.
                if(!is_numeric(implode('', $keys))) {
                    $headers = $keys;
                }
            }
        }

        $headersTrOptions = [];
        if(isset($options['ga_headers_tr_options'])) {
            $headersTrOptions = $options['ga_headers_tr_options'];
            unset($options['ga_headers_tr_options']);
        }

        $headersThOptions = [];
        if(isset($options['ga_headers_th_options'])) {
            $headersThOptions = $options['ga_headers_th_options'];
            unset($options['ga_headers_th_options']);
        }

        $actionsPullRight = true;
        if(isset($options['ga_actions_pull_right'])) {
            $actionsPullRight = (bool) $options['ga_actions_pull_right'];
            unset($options['ga_actions_pull_right']);
        }

        // Bind actions on each row.
        if(!empty($data) && !empty($actions)) {
            foreach($data as $k => $d) {
                // If the row is a string we transform it into array.
                if(is_string($data[$k])) {
                    $data[$k] = [$d];
                }

                // Bind extract url actions parameters for each row.
                $data[$k][] = $this->tableActions($actions, $d, $actionsPullRight);
            }
        }

        // Process hidden fields.
        if(!empty($hiddenFields)) {
            $headers = array_flip($headers);
            foreach($hiddenFields as $field) {
                $data = Hash::remove($data, '{n}.' . $field);
                $headers = hash::remove($headers, $field);
            }
            $headers = array_flip($headers);
        }

        // Process headers defined as array before generating them.
        $columnsPullRight = [];
        foreach($headers as $k => $v) {
            if(is_array($v)) {
                $label = '';
                if(isset($v['label'])) {
                    $label = $v['label'];
                }

                $headerPullRight = false;
                if(isset($v['ga_pull_right'])) {
                    $headerPullRight = $v['ga_pull_right'];
                }

                if($headerPullRight === true) {
                    $label = $this->tag('span', $v['label'], ['class' => GA_PULL_RIGHT]);
                    $columnsPullRight[] = $k;
                }

                $headers[$k] = $label;
            }
        }

        // Process data for columns alignment.
        if(!empty($columnsPullRight)) {
            foreach($columnsPullRight as $column) {
                $data = array_map(function($v) use ($data, $column) {
                    if(isset($v[$column])) {
                        $v[$column] = $this->tag('span', $v[$column], ['class' => GA_PULL_RIGHT]);
                    }
                    return $v;
                }, $data);
            }
        }

        $table = $this->tag('table', null, ['class' => $tableClasses]) . PHP_EOL;
        if(!empty($headers)) {
            $table .= $this->tag('thead', null) . PHP_EOL;
            $table .= $this->tableHeaders($headers, $headersTrOptions, $headersThOptions);
            $table .= PHP_EOL . $this->tag('/thead') . PHP_EOL;
        }
        $table .= $this->tag('tbody', null) . PHP_EOL;
        $table .= $this->tableCells($data, $oddTrOptions, $evenTrOptions, $useCount, false);
        $table .= PHP_EOL . $this->tag('/tbody') . PHP_EOL;
        $table .= $this->tag('/table') . PHP_EOL;

        return $table;
    }

    private function rebuildData($data, $headers) {
        $fields = array_keys($headers);


        $newData = [];
        foreach($data as $k => $v) {
            // If headers are all numeric.. so we need an index array of values.
            if(is_numeric(implode('', $fields))) {
                $v = array_values($v);
            }

            $item = [];
            foreach($fields as $field) {
                $value = '';
                if(isset($v[$field])) {
                    $value = $v[$field];
                }
                $item[$field] = $value;
            }
            $newData[$k] = $item;
        }
        return $newData;
    }

    private function toTableArray($data) {
        foreach($data as $k => $v) {
            // If the element is a string we transform it into an array with it as first element.
            if(is_string($v)) {
                $v = [$v];
            }

            $data[$k] = Hash::flatten($v);
        }
        return $data;
    }

    /**
     * Table actions
     *
     * Transform an array of table row action into HTML.Create
     *    
     * @param array $actionsdata Array of actions. An array of array of elements to be past to HtmlHelper::link().
     * @param array $data Array of data for custom arguments in url. Example for an edit link that we need to pass the id.
     * @param bool $pullRight Pull right link actions.
     * @return string HTML string of row link actions.
     */
    private function tableActions($actions, $data, $pullRight = true) {
        $out = '';
        foreach($actions as $action) {
            $title = '';
            if(isset($action['title'])) {
                $title = $action['title'];
            } else {
                // If there is no title in the array we simply ignore the link.
                continue;
            }

            $url = '#';
            if(isset($action['url'])) {
                $url = $action['url'];

                $isString = false;
                
                if(is_string($url)) {
                    $url = explode('/', $url);
                    $isString = true;
                }

                foreach($url as $k => $f) {
                    if(preg_match('/^:/', $f)) {
                        $field = str_replace(':', '', $f);
                        if(isset($data[$field])) {
                            $url[$k] = $data[$field];
                        } else {
                            throw new RuntimeException('Cannot find key in data array.');
                        }
                    }
                }

                if($isString === true) {
                    $url = implode('/', $url);
                }
            }

            $options = [];
            if(isset($action['options'])) {
                $options = $action['options'];
            }

            $out .= $this->link($title, $url, $options);
        }

        if($pullRight === true) {
            $out = $this->tag('span', $out, ['class' => GA_PULL_RIGHT]);
        }

        return $out;
    }
}

