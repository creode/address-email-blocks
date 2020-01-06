<?php

namespace Drupal\address_email_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Address block.
 *
 * @Block(
 *   id = "address_email_blocks-address",
 *   admin_label = @Translation("Address Block"),
 * )
 */
class AddressBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'address_email_blocks-address',
    ];
  }

}
