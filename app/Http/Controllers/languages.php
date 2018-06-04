<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

 
 class languages extends Controller
{
  public function java()  {
      $java=
      "<p><b>Java</b> – is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible. It is intended to let application developers (WORA), meaning that compiled Java code can run on all platforms that support Java without the need for recompilation.</p>"."<br/>"."<br/>";
       return view('languages', array('tekstJava' => $java));
  }
     public function c(){
         $c="<p><b>C</b>  is a general-purpose, imperative computer programming language, supporting structured programming, lexical variable scope and recursion, while a static type system prevents many unintended operations. By design, C provides constructs that map efficiently to typical machine instructions, and therefore it has found lasting use in applications that had formerly been coded in assembly language, including operating systems, as well as various application software for computers ranging from supercomputers to embedded systems.</p>"."<br/>"."<br/>";
         return view('languages', array('tekstC' => $c));
     }
     public function python(){
         $python="<p><b>Python</b> is a widely used high-level programming language for general-purpose programming, created by Guido van Rossum and first released in 1991. An interpreted language, Python has a design philosophy that emphasizes code readability (notably using whitespace indentation to delimit code blocks rather than curly brackets or keywords), and a syntax that allows programmers to express concepts in fewer lines of code than might be used in languages such as C++ or Java. It provides constructs that enable clear programming on both small and large scales.</p>"."<br/>"."<br/>";
         return view('languages', array('tekstPython' => $python));
     }
     
     public function all($java, $c, $python){
          $data=array(
        'java'=>$java,
        'c'=>$c,
        'python'=>$python   
    );
    return view('languages', $data);
    
   
     }
     
     }
     

?>