<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentController extends Controller
{
    public function home(){
        

        $content = "<p>A <b>programming language</b> is a formal language that specifies a set of instructions that can be used to produce various kinds of output. Programming languages generally consist of instructions for a computer. Programming languages can be used to create programs that implement specific algorithms..</p>
            <p>The earliest known programmable machine that preceded the invention of the digital computer was the automatic flute player described in the 9th century by the brothers Musa in Baghdad, during the Islamic Golden Age.[1] From the early 1800s, programs were used to direct the behavior of machines such as Jacquard looms and player pianos.[2] Thousands of different programming languages have been created, mainly in the computer field, and many more still are being created every year. Many programming languages require computation to be specified in an imperative form (i.e., as a sequence of operations to perform) while other languages use other forms of program specification such as the declarative form (i.e. the desired result is specified, not how to achieve it).</p>
            <p>The description of a programming language is usually split into the two components of syntax (form) and semantics (meaning). Some languages are defined by a specification document (for example, the C programming language is specified by an ISO Standard) while other languages (such as Perl) have a dominant implementation that is treated as a reference. Some languages have both, with the basic language defined by a standard and extensions taken from the dominant implementation being common.</p>";

        $data = array(
            'title' => "Programming language",
            'content' => $content
        );

        return view('home', $data);
    }

    public function language(){

        $content = "<p>A <b>programming language</b> is a formal language that specifies a set of instructions that can be used to produce various kinds of output. Programming languages generally consist of instructions for a computer. Programming languages can be used to create programs that implement specific algorithms..</p>
            <p>The earliest known programmable machine that preceded the invention of the digital computer was the automatic flute player described in the 9th century by the brothers Musa in Baghdad, during the Islamic Golden Age.[1] From the early 1800s, programs were used to direct the behavior of machines such as Jacquard looms and player pianos.[2] Thousands of different programming languages have been created, mainly in the computer field, and many more still are being created every year. Many programming languages require computation to be specified in an imperative form (i.e., as a sequence of operations to perform) while other languages use other forms of program specification such as the declarative form (i.e. the desired result is specified, not how to achieve it).</p>
            <p>The description of a programming language is usually split into the two components of syntax (form) and semantics (meaning). Some languages are defined by a specification document (for example, the C programming language is specified by an ISO Standard) while other languages (such as Perl) have a dominant implementation that is treated as a reference. Some languages have both, with the basic language defined by a standard and extensions taken from the dominant implementation being common.</p>";

        $data = array(
            'title' => "Programming language",
            'content' => $content
        );

       return view('information', $data);
    }
    
   
}
