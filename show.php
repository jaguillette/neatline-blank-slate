<?php

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   Original: 2014 Rector and Board of Visitors, University of Virginia
 * @copyright   Modified: 2016 President and Fellows of Harvard College
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 *
 * This template replaces the default views/exhibits/show.php from the Neatline
 * plugin defualt, or the show.php from your theme. Restyle this however you
 * like to modify the display of exhibits that use this theme.
 */

?>

<?php echo head(array(
  'title' => nl_getExhibitField('title'),
  'bodyclass' => 'neatline show'
)); ?>

<!-- Exhibit title: -->
<h1><?php echo nl_getExhibitField('title'); ?></h1>

<!-- "View Fullscreen" link: -->
<?php echo nl_getExhibitLink(
  null, 'fullscreen', __('View Fullscreen'), array('class' => 'nl-fullscreen')
); ?>

<!-- Exhibit and description : -->
<?php echo nl_getExhibitMarkup(); ?>
<?php echo nl_getNarrativeMarkup(); ?>

<?php echo foot(); ?>
