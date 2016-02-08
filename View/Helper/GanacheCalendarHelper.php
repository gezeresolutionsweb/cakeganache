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
App::import('Routing', 'Router') ;

class GanacheCalendarHelper extends AppHelper
{
    public $helpers = ['Html'];

    public function getHeader()
    {
        $html = '<thead>';
        $html .= '<tr>';
        $html .= '<td>' . __d('cakeganache', 'Monday') . '</td>';
        $html .= '<td>' . __d('cakeganache', 'Tuesday') . '</td>';
        $html .= '<td>' . __d('cakeganache', 'Wednesday') . '</td>';
        $html .= '<td>' . __d('cakeganache', 'Thursday') . '</td>';
        $html .= '<td>' . __d('cakeganache', 'Friday') . '</td>';
        $html .= '<td>' . __d('cakeganache', 'Saturday') . '</td>';
        $html .= '<td>' . __d('cakeganache', 'Sunday') . '</td>';
        $html .= '</tr>';
        $html .= '</thead>';

        return $html;
    }

    public function getBody($elements, $year = null, $month = null)
    {
        if(is_null($month)) {
            $month = date('m');
        }

        if(is_null($year)) {
            $year = date('Y');
        }

        $time = strtotime($year . '-' . $month . '-01');
        $nbEmpty = (int) date('w', $time) - 1;
        $numberOfDays = date('t', $time);
        if($nbEmpty < 0) {
            $nbEmpty = 6;
        }

        $html = '<tbody>';
        $html .= '<tr>';


        $html .= str_repeat('<td>&nbsp;</td>', $nbEmpty);

        $ct = 0;
        $ctWeek = $nbEmpty + 1;
        while($ct < $numberOfDays) {
            if($ctWeek > 7) {
                $html .= '</tr>';
                $html .= '<tr>';
                $ctWeek = 1;
            }

            $html .= '<td>';

            $day = $ct + 1;
            if($day < 10) {
                $day = '0' . $day;
            }


            $html .= '<strong>' . $day . '</strong>';

            if(!empty($elements[$year . '-' . $month . '-' . $day])) {
                $html .= '<br />';
                foreach($elements[$year . '-' . $month . '-' . $day] as $event) {
                    $html .= $event . '<br />';
                }
            }

            $html .= '</td>';

            $ct++;
            $ctWeek++;
            $day++;
            // Create a new row.
        }

        // Generate trailing empty cell.
        $html .= str_repeat('<td>&nbsp;</td>', 7 - $ctWeek + 1);

        $html .= '</tr>';
        $html .= '<tbody>';

        return $html;

    }

    /**
     * Show full calendar with elements
     * @return The full calendar (HTML string)
     **/
    public function showFullCalendar($elements = [], $year = null, $month = null)
    {
        // @todo need to refacto with GanacheHtml::tag() function.

        $html = '<table class="calendar ' . GA_TABLE . ' ' . GA_TABLE_BORDERED . '">';
        $html .= $this->getHeader();
        $html .= $this->getBody($elements, $year, $month);
        $html .= '</table>';

        return $html;
    }
}

