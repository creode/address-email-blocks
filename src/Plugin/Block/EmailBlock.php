<?php

namespace Drupal\address_email_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Email block.
 *
 * @Block(
 *   id = "address_email_blocks-email",
 *   admin_label = @Translation("Email Block"),
 * )
 */
class EmailBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'address_email_blocks-email',
    ];
  }

}
