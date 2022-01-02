<?php

/**
 * Undocumented class
 */
class Home extends Controller
{
  protected $property;

  /**
   * Undocumented function
   *
   * @param [type] $property
   */
  public function __construct($property)
  {
    $this->property = $property;
  }

  protected function Index()
  {
    $viewModel = new HomeModel();
    $this->returnView($viewModel->Index(), true);
  }
}
