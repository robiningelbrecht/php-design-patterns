<?php


namespace App\Pattern;

use Symfony\Component\Finder\Finder;

/**
 * Class PatternHelper.
 *
 * @package App\Pattern
 */
class PatternHelper {

  /**
   * @param string $pattern_type
   * @param string $pattern
   * @return bool
   */
  public static function isValidPattern(string $pattern_type, string $pattern): bool {
    $pattern_list = self::getValidPatternList();

    if (!isset($pattern_list[$pattern_type])) {
      return FALSE;
    }

    return in_array($pattern, $pattern_list[$pattern_type]);
  }

  /**
   * @return array
   */
  public static function getValidPatternList(): array {
    $finder = new Finder();
    $pattern_list = [];

    $pattern_types = $finder->in(__DIR__ . '/../Pattern')
      ->directories()
      ->depth(0)
      ->sortByName();

    foreach ($pattern_types as $pattern_type) {
      $pattern_list[$pattern_type->getFilename()] = [];

      $finder = new Finder();
      $patterns = $finder->in(__DIR__ . '/../Pattern/' . $pattern_type->getFilename())
        ->directories()
        ->depth(0)
        ->sortByName();

      foreach ($patterns as $pattern) {
        $pattern_list[$pattern_type->getFilename()][] = $pattern->getFilename();
      }
    }

    return $pattern_list;
  }

}