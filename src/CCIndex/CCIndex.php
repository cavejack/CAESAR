<?php
/**
 * Standard controller layout.
 * 
 * @package CAESARCore
 */
class CCIndex implements IController {

  /**
    * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {  
    global $CAESAR;
    $CAESAR->data['title'] = "The Index Controller";
  }

} 