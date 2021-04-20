<?php

namespace App\Controller;

use App\Pattern\PatternHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PatternsOverviewController.
 *
 * @package App\Controller
 */
class PatternsOverviewController extends AbstractController {

  /**
   * @Route("/", name="php_design_patterns_overview")
   */
  public function build(): Response {
    return $this->render('patterns/overview.html.twig', [
      'pattern_list' => PatternHelper::getValidPatternList(),
    ]);
  }

}