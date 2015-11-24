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
  'use strict';

 // TABLENAVBAR CLASS DEFINITION
  
    var Tablenavbar = function (element, options) {
        this.$element = $(element);
        this.$searchForm = this.$element.find('form');
        this.options = $.extend({}, Tablenavbar.DEFAULTS, options);

        this.search = this.options.search || this.search;
        this.searched = this.options.searched || this.searched;
        this.clear = this.options.clear || this.clear;
        this.cleared = this.options.cleared || this.cleared;

        // bind action button.
        this.$element.on('click.tablenavbar-data-api.tablenavbar-search-button', '[data-toggle=tablenavbar-search-button]', $.proxy(this.search, this));
        this.$element.on('click.tablenavbar-data-api.tablenavbar-clear-button', '[data-toggle=tablenavbar-clear-button]', $.proxy(this.clear, this));
    };

    Tablenavbar.VERSION = '2.3.2';

    Tablenavbar.DEFAULTS = {
        container: '.tablenavbar-dynamic-content'
    };

    Tablenavbar.prototype.search = function(e) {
        e.preventDefault();

        var url = this.$searchForm.attr( 'action' );
        var postData = this.$searchForm.serializeArray();

        $.post( url, postData, $.proxy(this.searched, this) );
    };

    Tablenavbar.prototype.searched = function(data) {
        $( this.options.container ).html( data );
    };

    Tablenavbar.prototype.clear = function(e) {
        e.preventDefault();

        this.$searchForm
            .find(':radio, :checkbox').removeAttr('checked').end()
            .find('textarea, :text').val('').end()
            .find('select').find('option:first').attr('selected', 'selected').trigger('change');

        this.cleared();
    };

    Tablenavbar.prototype.cleared = function() {
        //$( this.options.container ).html( '' ); // Should we do this by default ?
    };

    function Plugin(option) {
        return this.each(function(){
            var $this = $(this);
            var data = $this.data('tablenavbar');
            var options = typeof option === 'object' && option || {};

            if(!data) {
                $this.data('tablenavbar', (data = new Tablenavbar(this, options)));
            }
        });
    };


    // TABLENAVBAR PLUGIN DEFINITION
  
    var old = $.fn.tablenavbar;

    $.fn.tablenavbar = Plugin;
    $.fn.tablenavbar.Constructor = Tablenavbar;

    // TABLENAVBAR NO CONFLICT
    $.fn.tablenavbar.noConflict = function () {
        $.fn.tablenavbar = old;
        return this;
    };

    // TABLENAVBAR DATA-API
    $(window).on( 'load', function(e) {
        var $this = $('[data-provide=tablenavbar]');
        var options = $.extend({}, $this.data());
        $this.tablenavbar(options);
        e.preventDefault();
    });
}(window.jQuery);
