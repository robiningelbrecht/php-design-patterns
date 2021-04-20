<?php


namespace App\Controller;

use App\Pattern\PatternHelper;
use Highlight\Highlighter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use function HighlightUtilities\getStyleSheet;

/**
 * Class PatternController.
 *
 * @package App\Controller
 */
class PatternController extends AbstractController {

  /**
   * @Route("/pattern/{pattern_type}/{pattern}", name="php_design_pattern")
   */
  public function build(string $pattern_type, string $pattern): Response {
    if (!PatternHelper::isValidPattern($pattern_type, $pattern)) {
      throw new NotFoundHttpException();
    }

    $hl = new Highlighter();
    $finder = new Finder();
    $highlights = [];

    foreach ($finder->in(__DIR__ . '/../Pattern/' . $pattern_type . '/' . $pattern)
               ->files()
               ->name('*.php') as $file) {
      $highlight = $hl->highlight('php', $file->getContents());

      $highlights[] = [
        'language' => $highlight->language,
        'value' => $highlight->value,
        'file_name' => $file->getFilename(),
      ];
    }

    return $this->render('patterns/pattern.html.twig', [
      'subtitle' => $pattern_type . ' - ' . $pattern,
      'highlights' => $highlights,
      'highlight_css' => getStyleSheet('github-gist')
    ]);
  }

}