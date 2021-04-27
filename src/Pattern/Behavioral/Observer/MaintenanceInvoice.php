<?php


namespace App\Pattern\Behavioral\Observer;

/**
 * Class MaintenanceInvoice.
 *
 * @package App\Pattern\Behavioral\Observer
 */
class MaintenanceInvoice implements \SplObserver {

  /**
   * @var array
   */
  protected array $lineItems;

  /**
   * MaintenanceInvoice constructor.
   */
  public function __construct() {
    $this->lineItems = [];
  }

  /**
   * {@inheritdoc}
   */
  public function update(\SplSubject $subject, string $event = NULL, $data = NULL): void {
    // Add line item on maintenance invoice.
    print 'Adding new line to invoice: ' . $event;
    $this->lineItems[] = $event;
  }

}