/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

jQuery(document).ready(function () {
    var url;

    url = jQuery('#create-url').attr('about');

    jQuery('body').midgardCreate({
        'url': url,
        'toolbar': 'minimized'
    });

    // Use Redactor for editing body areas
    jQuery('body').midgardCreate('configureEditor', 'redactor', 'redactorWidget', {});
    jQuery('body').midgardCreate('setEditorForProperty', 'default', 'redactor');

    // Use a simple editor for titles
    jQuery('body').midgardCreate('configureEditor', 'simple', 'editWidget', {});
    jQuery('body').midgardCreate('setEditorForProperty', 'title', 'simple');

    // Disable editing of author fields
    jQuery('body').midgardCreate('setEditorForProperty', 'dcterms:author', null);
});
