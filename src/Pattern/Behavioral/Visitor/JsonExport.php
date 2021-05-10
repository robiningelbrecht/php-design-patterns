<?php


namespace App\Pattern\Behavioral\Visitor;

/**
 * Class JsonExport.
 *
 * @package App\Pattern\Behavioral\Visitor
 */
class JsonExport implements CarElementVisitor {

  /**
   * {@inheritdoc}
   */
  public function visitBody(Body $body): string {
    return $body->getName();
  }

  /**
   * {@inheritdoc}
   */
  public function visitEngine(Engine $engine): string {
    return $engine->getName();
  }

  /**
   * {@inheritdoc}
   */
  public function visitWheel(Wheel $wheel): string {
    return $wheel->getName();
  }

  /**
   * {@inheritdoc}
   */
  public function visitCar(CarWithElements $car): string {
    $elements = [];
    foreach ($car->getElements() as $element) {
      $elements[] = $element->accept($this);
    }

    return json_encode([
      'elements' => $elements,
      'brand' => $car->getBrand()->label,
    ]);
  }


}