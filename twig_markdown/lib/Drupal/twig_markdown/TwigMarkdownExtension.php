<?php

namespace Drupal\twig_markdown;

use Drupal\Core\Template\TwigExtension;
use Drupal\Core\Template\TwigReferenceFunction;

class TwigMarkdownExtension extends TwigExtension {

  // public function getFunctions() {
  //   return array(
  //     'test_markdown' => new \Twig_Function_Function(array('Drupal\twig_markdown\TwigMarkdownExtension', 'test_markdown')),
  //   );
  // }

  public function getFilters() {
    return array(
      'markdown' => new \Twig_Filter_Function(array('Drupal\twig_markdown\TwigMarkdownExtension', 'markdown')),
    );
  }

  public function getName() {
    return 'twig_markdown.markdown_extension';
  }

  // public static function test_markdown($string) {
  //   module_load_include('php', 'twig_markdown', 'php-markdown/Michelf/Markdown');

  //   return Markdown::defaultTransform($string);
  // }

  public static function markdown($string) {

    return Markdown::defaultTransform($string);
  }

}
