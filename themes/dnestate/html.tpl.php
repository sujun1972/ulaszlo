<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
        "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="<?php print $language->language; ?>"
      version="XHTML+RDFa 1.0"
      dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

<head profile="<?php print $grddl_profile; ?>">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://www.ulaszlo.hu/sites/ulaszlo.hu/themes/dnestate/dist/css/style.css" rel="stylesheet">
    <link href="http://www.ulaszlo.hu/sites/ulaszlo.hu/themes/dnestate/assets/font/fontello/css/fontello.css" rel="stylesheet">

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

<div id="mobile-menu-overlay" style="display: none;">
    <div>a</div>
    <div>b</div>
    <div>c</div>
</div>

<script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

<?php print $scripts; ?>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

<script>
    function responsiveMenuToggle() {
        console.log('asdfasdfdasf');
        if($('#mainmenu:visible').length)
            $('#mainmenu').slideUp(400);
        else
            $('#mainmenu').slideDown(400);
    }

    function convertTable($regularTable) {
        $headers = $($regularTable).find('thead th')
        $rows = $($regularTable).find('tbody tr');
        $newTables = '';

        for  (var i = 0; i < $rows.length; i++) {
            $data = $($rows[i]).find('td');
            $newTables += '<table class="mb-2 pb-2" style="width: 100%"><tbody>';

            for  (var j = 0; j < $headers.length; j++) {
                $newTables += '<tr><td>';
                $newTables += $($headers[j]).html();
                $newTables += '</td>';
                $newTables += '<td>';
                $newTables += $($data[j]).html();
                $newTables += '</td>';
                $newTables += '</tr>';
            }
            $newTables += '</tbody></table>';
        }
        return $newTables;
    }

    function responsiveTable() {
        $responsiveTables = $('.responsive-table');
        for (var i = 0; i < $responsiveTables.length; i++) {
            $tables = convertTable($responsiveTables[i]);
            $($responsiveTables[i]).parent().replaceWith($tables);
        }
    }

    $( document ).ready(function() {
        if ($(window).width() < 769) {
            responsiveTable();    
        }
    });
</script>
</body>
</html>