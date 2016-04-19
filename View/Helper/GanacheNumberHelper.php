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
 * @since         CakeGanache v 0.0.247
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::import('Helper', 'Number') ;

class GanacheNumberHelper extends NumberHelper
{
    /**
     * Override original precision function to better format decimal number that are not currency.
     * We use number_format() in replacement of sprintf() in the original one.
     *
     * @access public
     * @author Sylvain Lévesque <slevesque@gezere.com>
     * @param float $number Number to format.
     * @param int $precision Number of decimals.
     * @param string $decPoint Decimal separator sign.
     * @param string $thousandsSep Thousands separator sign.
     * @return string Formatted decimal number.
     */
    public function precision($number, $precision = 2, $decPoint = '.', $thousandsSep = ',')
    {
        return number_format($number, $precision, $decPoint, $thousandsSep);
    }
}

