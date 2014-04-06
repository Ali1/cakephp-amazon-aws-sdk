<?php

use Aws\Common\Aws;

/**
 * AmazonComponent
 *
 * Provides an entry point into the Amazon SDK.
 */
class AmazonComponent extends Component {

  /**
   * Constructor
   * saves the controller reference for later use
   * @param ComponentCollection $collection A ComponentCollection this component can use to lazy load its components
   * @param array $settings Array of configuration settings.
   */
  public function __construct(ComponentCollection $collection, $settings = array()) {
    $this->_controller = $collection->getController();
    parent::__construct($collection, $settings);
  }

  /**
   * Initialization method. Triggered before the controller's `beforeFilfer`
   * method but after the model instantiation.
   *
   * @param Controller $controller
   * @param array $settings
   * @return null
   * @access public
   */
  public function initialize(Controller $controller) {
    // Handle loading our library firstly...
	  $this->Aws = Aws::factory(Configure::read('Amazonsdk.credentials'));
  }

  /**
   * PHP magic method for satisfying requests for undefined variables. We
   * will attempt to determine the service that the user is requesting and
   * start it up for them.
   *
   * @var string $variable
   * @return mixed
   * @access public
   */
  public function __get($variable) {
    $this->$variable = $this->Aws->get($variable);
    return $this->$variable;
  }
}