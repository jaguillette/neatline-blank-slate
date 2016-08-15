<?php

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   Original: 2014 Rector and Board of Visitors, University of Virginia
 * @copyright   Modified: 2016 President and Fellows of Harvard College
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 *
 * This template is the default Neatline item display, taken from
 * views/shared/exhibits/item.php in the Neatline plugin. You can modify this
 * template to display all items in the Neatline exhibit in a consistent way.
 */

?>

<!-- Texts. -->
<?php echo all_element_texts('item'); ?>

<!-- Files. -->
<?php if (metadata('item', 'has files')): ?>
  <h3><?php echo __('Files'); ?></h3>
  <?php echo files_for_item(); ?>
<?php endif; ?>

<hr />

<!-- Link. -->
<?php echo link_to(
  get_current_record('item'), 'show', 'View the item in Omeka'
); ?>
