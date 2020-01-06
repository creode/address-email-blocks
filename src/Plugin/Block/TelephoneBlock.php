<?php

namespace Drupal\address_email_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Email block.
 *
 * @Block(
 *   id = "address_email_blocks-telephone",
 *   admin_label = @Translation("Telephone Block"),
 * )
 */
class TelephoneBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'address_email_blocks-telephone',
    ];
  }

}
