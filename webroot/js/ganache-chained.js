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
 * @package       CakeGanache
 * @since         CakeGanache v 0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

!function ($) {
    // CHAINED CLASS DEFINITION
    var Chained = function (element, options) {
        this.element = '#' + $(element).attr('id');
        this.options = $.extend({}, Chained.DEFAULTS, options);

        this.load = this.options.load || this.load;
        this.loaded = this.options.loaded || this.loaded;

        // bind action.
        $(document).on('change.chained-data-api', this.options.parent, $.proxy(this.load, this));
    };

    Chained.VERSION = '0.0.1';

    Chained.DEFAULTS = {
    };

    Chained.prototype.load = function(e) {
        e.preventDefault();

        var id = $(this.options.parent).val();
        
        if(id === 0 || id === '' || id === '0') {
            $(this.element + ' option:first').attr('selected', 'selected');
            $(this.element).trigger('change');
            $(this.element).attr('disabled', 'disabled');
        } else {
            $.post(this.options.url, {id: id}, $.proxy(this.loaded, this));
        }
    };

    Chained.prototype.loaded = function(data) {
        $(this.element).replaceWith(data);
    };

    // CHAINED PLUGIN DEFINITION

    function Plugin(option) {
        return this.each(function() {
            var $this = $(this);
            var data = $this.data('chained');
            var options = typeof option === 'object' && option || {};

            if(!data) {
                $this.data('chained', (data = new Chained(this, options)));
            }
        });
    };

    var old = $.fn.chained;

    $.fn.chained = Plugin;
    $.fn.chained.Constructor = Chained;

    // CHAINED NO CONFLICT
    $.fn.chained.noConflict = function() {
        $.fn.chained = old;
        return this;
    };

    // CHAINED DATA-API
    $(window).on('load', function() {
        $('[data-provide=chained]').each(function() {
            var $chained = $(this);
            Plugin.call($chained, $chained.data());
        });
    });
}(jQuery);
