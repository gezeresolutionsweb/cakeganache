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
     * 
     * Create a Twitter Bootstrap style progress bar.
     * 
     * @param $widths 
     * 	- The width (in %) of the bar
     * 	- An array of bar, with width and type (info, danger, success, warning) specified for each bar
     * @param $options Options that will be passed to Html::div method (only for main div)
     *  
     * Available BootstrapHtml options:
     * 	- striped: boolean, specify if progress bar should be striped
     * 	- active: boolean, specify if progress bar should be active
     *     
     **/
    public function progress ($widths, $options = array()) {
        $striped = $this->_extractOption('striped', $options, false) ;
        unset($options['striped']) ;
        $active = $this->_extractOption('active', $options, false) ;
        unset($options['active']) ;
        $bars = '' ;
        if (is_array($widths)) {
            foreach ($widths as $w) {
                $class = GA_BAR;
                $type = $this->_extractType($w, 'type', GA_INFO, array(GA_INFO, GA_SUCCESS, GA_WARNING, GA_DANGER)) ;
                if ($type) {
                    $class .= ' bar-'.$type ;
                }
                $bars .= $this->div($class, '', array('style' => 'width: '.$w['width'].'%;')) ;
            }
        } else {
            $bars = $this->div('bar', '', array('style' => 'width: '.$widths.'%;')) ;
        }
        $options = $this->addClass($options, GA_PROGRESS);

        if ($active) {
            $options = $this->addClass($options, GA_ACTIVE) ;
        }
        if ($striped) {
            $options = $this->addClass($options, GA_PROGRESS_STRIPED) ;
        }
        $classes = $options['class'];
        unset($options['class']) ;
        return $this->div($classes, $bars, $options) ;
    }

    public function closeIcon( $asLink = false ) {
        $button = '<button class="'. GA_CLOSE . '">&times;</button>';
        if( $asLink === true ) {
            // iOS devices require an href="#" for click events if you would rather use an anchor. @see http://getbootstrap.com/2.3.2/components.html#misc
            $button = '<a class="' . GA_CLOSE . '" href="#">&times;</a>';
        }
        return $button;
    }


    /**
     * Initialize an HTML document and the head
     *
     * @param string $titre The name of the current page
     * @param string $description The description of the current page
     * @param string $lang The language of the current page. By default 'fr' because we are french
     * @return string
     */
    public function html($titre = '' , $description = '' , $lang = 'fr')
    {
        $out = '<!DOCTYPE html>' . PHP_EOL;
        $out .= '<html lang="'.$lang.'">' . PHP_EOL;
        $out .= '<head>' . PHP_EOL;
        $out .= '<meta charset="utf-8">' . PHP_EOL;
        $out .= '<title>'.$titre.'</title>' . PHP_EOL;
        $out .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . PHP_EOL;
        $out .= '<meta name="description" content="'.$description.'">' . PHP_EOL;

        return $out;
    }

    public function h1($title, $options = array())
    {
        return $this->tag('h1', $title, $options);
    }

    public function h2($title, $options = array())
    {
        return $this->tag('h2', $title, $options);
    }

    public function h3($title, $options = array())
    {
        return $this->tag('h3', $title, $options);
    }

    public function h4($title, $options = array())
    {
        return $this->tag('h4', $title, $options);
    }

    public function h5($title, $options = array())
    {
        return $this->tag('h5', $title, $options);
    }

    public function h6($title, $options = array())
    {
        return $this->tag('h6', $title, $options);
    }

    /**
     * Initialize an HTML 5 document and the head
     *
     * @param string $titre The name of the current page
     * @param string $description The description of the current page
     * @param string $lang The language of the current page. By default 'fr' because we are french
     * @return string
     */
    public function html5($titre = '' , $description = '' , $lang = 'fr')
    {
        $out = $this->html($titre , $description , $lang);

        // Script JS for IE and HTML 5
        $out .= '<!--[if lt IE 9]>' . PHP_EOL;
        $out .= '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>' . PHP_EOL;
        $out .= '<![endif]-->' . PHP_EOL;

        return $out;
    }

    /**
     * Close the head element and initialize the body element
     *
     * @return string
     */
    public function body()
    {
        $out =  '</head>' . PHP_EOL;
        $out .= '<body>' . PHP_EOL;

        return $out;
    }

    /**
     * Close the body element and the html element
     *
     * @return string
     */
    public function end()
    {
        $out =  '</body>' . PHP_EOL;
        $out .= '</html>';

        return $out;
    }



    /**
     * Open a Bootstrap container
     *
     * @param array $options Options of the div element
     * @return string Div element with the class 'container'
     */
    public function container($options = array()) {
        $out = '';
        $class = GA_CONTAINER;
        if (isset($options['class'])) {
            $class .= ' ' . $options['class'];
        }
        $out .= parent::div($class, null, $options);
        return $out;
    }

    /**
     * Open a Bootstrap container fluid
     *
     * @param array $options Options of the div element
     * @return string Div element with the class 'container'
     */
    public function containerFluid($options = array()) {
        $out = '';
        $class = GA_CONTAINER_FLUID;
        if (isset($options['class'])) {
            $class .= ' ' . $options['class'];
        }
        $out .= parent::div($class, null, $options);
        return $out;
    }

    /**
     * Open a Bootstrap row
     *
     * @param array $options Options of the div element
     * @return string Div element with the class 'row'
     */
    public function row($options = array())
    {
        $out = '';
        $class = GA_ROW;
        if (isset($options['class'])) {
            $class .= ' ' . $options['class'];
        }
        $out .= parent::div($class, null, $options);
        return $out;
    }

    /**
     * Open a Bootstrap row fluid
     *
     * @param array $options Options of the div element
     * @return string Div element with the class 'row'
     */
    public function rowFluid($options = array())
    {
        $out = '';
        $class = GA_ROW_FLUID;
        if (isset($options['class'])) {
            $class .= ' ' . $options['class'];
        }
        $out .= parent::div($class, null, $options);
        return $out;
    }

    public function span($width = 1, $options = [])
    {
        if(!is_int($width)) {
            throw new InvalidArgumentException('Width argument must be an integer');
        }

        if((int)$width < 1 || (int) $width > 12) {
            $width = 1;
        }

        $classes = array(
            1 => GA_SPAN1,
            2 => GA_SPAN2,
            3 => GA_SPAN3,
            4 => GA_SPAN4,
            5 => GA_SPAN5,
            6 => GA_SPAN6,
            7 => GA_SPAN7,
            8 => GA_SPAN8,
            9 => GA_SPAN9,
            10 => GA_SPAN10,
            11 => GA_SPAN11,
            12 => GA_SPAN12
        );

        $class = $classes[$width];
        if(isset($options['class'])) {
            $class .= ' ' . $options['class'];
        }

        return parent::div($classes[$width], null, $options);
    }


    /**
     * Close div elements
     *
     * @param int $nb Number of div you want to close
     * @return string End tags div
     */
    public function close($nb = 1)
    {
        return str_repeat($this->useTag('tagend', 'div'), $nb);
    }




    /**
     * Open a header element
     *
     * @param array $options Options of the header element
     * @return string Tag header
     */
    public function header($options = array())
    {
        $out = parent::tag('header', null, $options). PHP_EOL;
        return $out;
    }

    /**
     * Close the header element
     *
     * @return string End tag header
     */
    public function closeHeader()
    {
        return '</header>' . PHP_EOL;
    }


    /**
     * Picture responsive
     *
     * Extends from HtmlHelper:image()
     *    
     * @param string $path Path to the image file, relative to the app/webroot/img/ directory.
     * @param array $options Array of HTML attributes. See above for special options.
     * @return string End tag header
     */
    public function image($path, $options = array()) {
        if(isset($options['class'])){
            $options['class'] = GA_IMG_RESPONSIVE . $options['class'];
        }else{
            $options['class'] = GA_IMG_RESPONSIVE;
        }
        return parent::image($path, $options);
    }


    /**
     * IMPORTANT: Bootstrap 3 related function. Not use right now.
     *
     * Create a <div class="col"> element.
     * 
     * Differents layouts with options.
     *
     * ### Construction
     *
     * $this->Bs->col('xs3 of1 ph9', 'md3');
     *
     * It means : - For XS layout, a column size of 3, offset of 1 and push of 9.
     *             - For MD layout, a column size of 3.
     *
     * You can give all parameters you want before $attributes. The rule of params is :
     *
     * 'LAYOUT+SIZE OPTIONS+SIZE'
     *
     * LAYOUT -> not obligatory for the first param ('xs' by default).
     * SIZE -> size of the column in a grid of 12 columns.
     * OPTIONS -> Not obligatory. Offset, push or pull. Called like this : 'of', 'ph' or 'pl'.
     * SIZE -> size of the option.
     *
     *
     * ### Attributes
     *
     * Same options that HtmlHelper::div();
     *
     * @param string layout, size and options (offset, push and/or pull)
     * @param array $attributes Options of the div element
     * @return string DIV tag element 
     */
    public function col() {
        $class = '';
        $devices = array();
        $attributes = array();
        $args = func_get_args();
        foreach ($args as $arg) {
            if (!is_array($arg)) {
                $devices[] = $arg;
            } else {
                $attributes = $arg;
            }
        }
        $arrayDevice = array('xs' , 'sm' , 'md' , 'lg');
        $arrayOptions = array('of' , 'ph' , 'pl');
        foreach ($devices as $device) {
            $ecran = null;
            $taille = null;
            $opt = null;
            $replace = array('(', ')', '-', '_', '/', '\\', ';', ',', ':', ' ');
            $device = str_replace($replace, '.', $device);
            $device = explode('.', $device);
            // On doit obligatoirement définir un écran en premier sinon ça ne marche pas
            foreach ($device as $elem) {
                if (!$ecran) {
                    $nom = substr($elem, 0, 2);
                    if(in_array($nom , $arrayDevice)) {
                        $ecran = $nom;
                        $taille = substr($elem, 2);
                    }
                }else{
                    if ($opt) {
                        $opt .= ' '.$this->optCol($elem, $ecran);
                    }
                    else{
                        $opt = $this->optCol($elem, $ecran);
                    }
                }
            }
            if (isset($ecran) && $taille) {
                if ($opt) {
                    $class .= 'col-'.$ecran.'-'.$taille.' '.$opt.' ';
                }else{
                    $class .= 'col-'.$ecran.'-'.$taille.' ';
                }
            }
        }
        $class = substr($class,0,-1);
        if(isset($attributes['class']))
            $class .= SP . $attributes['class'];
        $out = parent::div($class , null, $attributes). BL;
        return $out;
    }
    /**
     * IMPORTANT: Bootstrap 3 related function. Not use right now.
     *
     * Complementary function with BsHelper::col()
     *
     * Add the correct class for the option in parameter
     *
     * @param array $elem // classe appliquée sur l'élément col {PARAMETRE OBLIGATOIRE}
     * @param string $ecran // layout concerné {PARAMETRE OBLIGATOIRE}
     * @return string The class corresponding to the option
     */
    private function optCol($elem, $ecran){
        $attr = substr($elem, 0, 2);
        $taille = substr($elem, 2);
        if (is_integer($taille) || !($taille == 0 && $ecran == 'sm'))  {
            switch ($attr) {
            case 'pl':
                return 'col-'.$ecran.'-pull-'.$taille;
                break;
            case 'ph':
                return 'col-'.$ecran.'-push-'.$taille;
                break;

            case 'of':
                return 'col-'.$ecran.'-offset-'.$taille;
                break;
            default:
                return null;
                break;
            }
        }
    }




}

