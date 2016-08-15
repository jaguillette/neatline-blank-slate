<?php

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   Original: 2014 Rector and Board of Visitors, University of Virginia
 * @copyright   Modified: 2016 President and Fellows of Harvard College
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 *
 * This template is the default Neatline item display, taken from
 * views/shared/exhibits/item.php in the Neatline plugin. This template can be
 * applied to groups of records in your Neatline exhibit that are all tagged
 * with the same tag. In this case, any Neatline record (not the Omeka Item it
 * links to) tagged 'custom' would have this template applied. You can rename
 * this file with your own tag, and duplicate it to apply multiple styles to
 * multiple record types.
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
