<?php

namespace Drupal\twig_markdown;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller routines for Twig extension test routes.
 */
class TwigMarkdownController implements ContainerInjectionInterface {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static();
  }

  /**
   * Menu callback for testing Twig filters in a Twig template.
   */
  public function testFilterRender() {
    $text = file_get_contents(drupal_get_path('module', 'twig_markdown').'/php-markdown/License.md');

    return array(
      '#theme' => 'twig_extension_markdown',
      '#message' => $text,
    );
  }

}
