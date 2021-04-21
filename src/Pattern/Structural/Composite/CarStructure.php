<?php


namespace App\Pattern\Structural\Composite;

/**
 * Class CarStructure.
 *
 * @package App\Pattern\Structural\Composite
 */
class CarStructure implements PartInterface {

  /**
   * @var \App\Pattern\Structural\Composite\PartInterface[]
   */
  protected array $parts;

  /**
   * @var string
   */
  protected string $name;

  /**
   * CarStructure constructor.
   * @param string $name
   */
  public function __construct(string $name) {
    $this->name = $name;
    $this->parts = [];
  }

  /**
   * @param \App\Pattern\Structural\Composite\PartInterface $part
   * @return \App\Pattern\Structural\Composite\CarStructure
   */
  public function addPart(PartInterface $part): CarStructure {
    $this->parts[] = $part;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function assemble(): string {
    $assembled = array_map(function (PartInterface $part) {
      return $part->assemble();
    }, $this->parts);

    $assembled[] = 'assembled ' . $this->name;

    return implode(',', $assembled);
  }


}