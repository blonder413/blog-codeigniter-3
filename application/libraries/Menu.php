<?php
class Menu{
  private $arr_menu;

  public function __construct($arr)
  {
    $this->arr_menu = $arr;
  }

  public function contruirMenu()
  {
    $ret_menu = "<nav><ul>";
    foreach ($this->arr_menu as $key => $value) {
      $ret_menu .= "<li>$value</li>";
    }
    $ret_menu = "</ul></nav>";

    return $ret_menu;
  }
}
?>
