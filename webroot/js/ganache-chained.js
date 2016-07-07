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
 * @since         CakeGanache v 0.0.0
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

    Chained.VERSION = '2.3.2';

    Chained.DEFAULTS = {
    };

    Chained.prototype.load = function(e) {
        e.preventDefault();

        var id = $(this.options.parent).val();
        
        if(id === 0 || id === '' || id === '0') {
            var firstOptionsText = '';
            if($(this.element).size() === 1 && parseInt($(this.element + ' option:first').val()) === 0) {
                firstOptionsText = $(this.element + ' option:first').text();
            }
            $(this.element).empty();
            if(firstOptionsText !== '') {
                $(this.element).append($('<option>', {value : 0}).text(firstOptionsText));
                $(this.element + ' option:first').attr('selected', 'selected');
            }

            $(this.element).attr('disabled', 'disabled');
            $(this.element).trigger('change');
        } else {
            $.post(this.options.url, {id: id}, $.proxy(this.loaded, this));
           $(this.element).attr('disabled', null);
        }
    };

    Chained.prototype.loaded = function(data) {
        var firstOptionsText = '';
        if($(this.element).size() === 1 && parseInt($(this.element + ' option:first').val()) === 0) {
            firstOptionsText = $(this.element + ' option:first').text();
        }

        $(this.element).empty(); 
        var mThis = this;
        if(firstOptionsText !== '') {
            $(this.element).append($('<option>', {value : 0}).text(firstOptionsText));
        }
        $.each(data.options, function(key, value) {
          // Little trick here to bypass v8 issue that automatically sort integer index and not having the result we expected. (SL)
          key.replace('cg_', '');
          $(mThis.element).append($('<option>', {value : key}).text(value)); 
        });

        var mOptions = $(mThis.element).find('option');

        $(mThis.element).empty().append(mOptions);

        // There is a weird bug in Chrome for Android where the very last item of the updated select will get selected even if we don't actually set it as selected
        $(mThis.element).find("option:selected").removeAttr("selected");
        $(mThis.element).find("option:first").attr('selected', true);

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
