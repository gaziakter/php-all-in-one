<?php

/**
 * List of Magic Constants
 * =========================
 * __CLASS__            If used inside a class, the class name is returned.	
 * __DIR__              The directory of the file.	
 * __FILE__             The file name including the full path.
 * __FUNCTION__         If inside a function, the function name is returned.
 * __LINE__             The current line number.	
 * __METHOD__           If used inside a function that belongs to a class, both class and function name is returned.
 * __NAMESPACE__        If used inside a namespace, the name of the namespace is returned.	
 * __TRAIT__            If used inside a trait, the trait name is returned.
 * ClassName::class     Returns the name of the specified class and the name of the namespace, if any.
 */

/**
 * __CLASS__ 
 * If used inside a class, the class name is returned.	
 */
 class Fruits {
    public function myValue(){
      return __CLASS__;
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();


/**
 * __DIR__              
 * The directory of the file.	
 */
  echo __DIR__;


/**
 * __DIR__              
 * The directory of the file.	
 */

  echo __FILE__;


/**
 * __FUNCTION__         
 * If inside a function, the function name is returned.	
 */
  function myValue(){
    return __FUNCTION__;
  }
  echo myValue();


/**
 * __LINE__             
 * The current line number.
 */
  echo __LINE__;


/**
 * __METHOD__           
 * If used inside a function that belongs to a class, both class and function name is returned.
 */
  class Fruits {
    public function myValue(){
      return __METHOD__;
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();


  
/**
 * __NAMESPACE__        
 * If used inside a namespace, the name of the namespace is returned.	
 */
  namespace myArea;
function myValue(){
  return __NAMESPACE__;
}
echo myValue();


/**
 * __TRAIT__            
 * If used inside a trait, the trait name is returned.
 */
trait message1 {
    public function msg1() {
      echo __TRAIT__; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();


/**
 * ClassName::class     
 * Returns the name of the specified class and the name of the namespace, if any.
 */
namespace myArea;

class Fruits {
  public function myValue(){
    return Fruits::class;
  }
}

$kiwi = new Fruits();
echo $kiwi->myValue();