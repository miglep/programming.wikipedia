<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class languageController extends Controller
{
    public function getLanguage($slug){

        $languages = [
            'java' => [
                'title'     =>  'Java',
                'paradigm'   =>  'Multi-paradigm: Object-oriented (class-based), structured, imperative, generic, reflective, concurrent',
                'designedBy' =>  'James Gosling',
                'firstAppeared' =>  'May 23, 1995',
                'typingDiscipline' => 'Static, strong, safe, nominative, manifest',
                'description' => '<p><b>Java</b> is a general-purpose computer programming language that is concurrent, class-based, object-oriented,[15] and specifically designed to have as few implementation dependencies as possible. It is intended to let application developers<em> "write once, run anywhere" (WORA)</em>,[16] meaning that compiled Java code can run on all platforms that support Java without the need for recompilation.</p> <p>Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of computer architecture. As of 2016, Java is one of the most popular programming languages in use,[18][19][20][21] particularly for client-server web applications, with a reported 9 million developers.[22] Java was originally developed by <b>James Gosling </b>at Sun Microsystems (which has since been acquired by Oracle Corporation) and released in 1995 as a core component of Sun Microsystems Java platform.<p> The language derives much of its syntax from C and C++, but it has fewer low-level facilities than either of them.The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licenses. As of May 2007, in compliance with the specifications of the Java Community Process, Sun relicensed most of its Java technologies under the GNU General Public License. Others have also developed alternative implementations of these Sun technologies, such as the GNU Compiler for Java (bytecode compiler), GNU Classpath (standard libraries), and IcedTea-Web (browser plugin for applets).</p>'
            ],
            
            'c' => [
                'title'           =>  'C',
                'paradigm'        =>  'Imperative (procedural), structured',
                'designedBy'      =>  'Dennis Ritchie',
                'firstAppeared'   =>  '1972',
                'typingDiscipline'=> 'Static, weak, manifest, nominal',
                'description'     => "<p><b>C,</b>  as in the letter c) is a general-purpose, imperative computer programming language, supporting structured programming, lexical variable scope and recursion, while a static type system prevents many unintended operations. By design, C provides constructs that map efficiently to typical machine instructions, and therefore it has found lasting use in applications that had formerly been coded in assembly language, including operating systems, as well as various application software for computers ranging from supercomputers to embedded systems.C was originally <b>developed by Dennis Ritchie </b>between 1969 and 1973 at Bell Labs,[5] and used to re-implement the Unix operating system.[6] It has since become one of the most widely used programming languages of all time,[7][8] with C compilers from various vendors available for the majority of existing computer architectures and operating systems. </p><p>C has been standardized by the American National Standards Institute (ANSI) since 1989 (see ANSI C) and subsequently by the International Organization for Standardization (ISO).C is an imperative procedural language. It was designed to be compiled using a relatively straightforward compiler, to provide low-level access to memory, to provide language constructs that map efficiently to machine instructions, and to require minimal run-time support. Despite its low-level capabilities, the language was designed to encourage cross-platform programming. A standards-compliant and portably written C program can be compiled for a very wide variety of computer platforms and operating systems with few changes to its source code. The language has become available on a very wide range of platforms, from embedded microcontrollers to supercomputers.</p>"
            ],
            'python' => [
                'title'            =>  'Python',
                'paradigm'         =>  'multi-paradigm: object-oriented, imperative, functional, procedural, reflective',
                'designedBy'       =>  'Guido van Rossum',
                'firstAppeared'    =>  '20 February 1991',
                'typingDiscipline' =>  'duck, dynamic, strong',
                'description'      => '<p><b>Python</b> is a widely used high-level programming language for general-purpose programming, <b>created by Guido van Rossum </b>and first released in 1991. An interpreted language, Python has a design philosophy that emphasizes code readability (notably using whitespace indentation to delimit code blocks rather than curly brackets or keywords), and a syntax that allows programmers to express concepts in fewer lines of code than might be used in languages such as C++ or Java.</p><p> It provides constructs that enable clear programming on both small and large scales.[25]<em>Python features a dynamic type system and automatic memory management</em>. It supports multiple programming paradigms, including object-oriented, imperative, functional and procedural, and has a large and comprehensive standard library.[26]Python interpreters are available for many operating systems. Python, the reference implementation of Python, is open source software[27] and has a community-based development model, as do nearly all of its variant implementations. CPython is managed by the non-profit Python Software Foundation.</p>'
            ],
            'c++' => [
                'title'            =>  'C++',
                'paradigm'         =>  'Multi-paradigm: procedural, functional, object-oriented, generic',
                'designedBy'       => 'Bjarne Stroustrup',
                'firstAppeared'    =>  '1983',
                'typingDiscipline' => 'Static, nominative, partially inferred',
                'description'      => '<p><b>C++</b>  is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation.It was designed with a bias toward system programming and embedded, resource-constrained and large systems, with performance, efficiency and flexibility of use as its design highlights.</p><p> C++ has also been found useful in many other contexts, with key strengths being software infrastructure and resource-constrained applications, including desktop applications, servers (e.g. e-commerce, web search or SQL servers), and performance-critical applications (e.g. telephone switches or space probes).[8] C++ is a compiled language, with implementations of it available on many platforms. Many vendors provide C++ compilers, including the Free Software Foundation, Microsoft, Intel, and IBM.</p>C++ is standardized by the International Organization for Standardization (ISO), with the latest standard version ratified and published by ISO in December 2014 as ISO/IEC 14882:2014 (informally known as C++14).[9] The C++ programming language was initially standardized in 1998 as ISO/IEC 14882:1998, which was then amended by the C++03, ISO/IEC 14882:2003, standard. The current C++14 standard supersedes these and C++11, with new features and an enlarged standard library. Before the initial standardization in 1998, C++ was developed by <b>Bjarne Stroustrup</b> at Bell Labs since 1979, as an extension of the C language as he wanted an efficient and flexible language similar to C, which also provided high-level features for program organization. The C++17 standard is due in July 2017, with the draft largely implemented by some compilers already, and C++20 is the next planned standard thereafter.Many other programming languages have been influenced by C++, including C#, D, Java, and newer versions of C.</p>'
            ],
            
            'javascript' => [
                'title'           =>  'JavaScript',
                'paradigm'        =>  'Multi-paradigm: object-oriented (prototype-based), imperative, functional, event-driven',
                'designedBy'      =>  'Brendan Eich',
                'firstAppeared'   =>  'December 4, 1995',
                'typingDiscipline'=> 'Dynamic, duck',
                'description' => '<p><b>JavaScript</b>, often abbreviated as JS, is a <em>high-level</em>, dynamic, weakly typed, prototype-based, multi-paradigm, and interpreted programming language. Alongside HTML and CSS, JavaScript is one of the three core technologies of World Wide Web content production. It is used to make webpages interactive and provide online programs, including video games. The majority of websites employ it, and all modern web browsers support it without the need for plug-ins by means of a built-in JavaScript engine. Each of the many JavaScript engines represent a different implementation of JavaScript, all based on the ECMAScript specification, with some engines not supporting the spec fully, and with many engines supporting additional features beyond ECMA.</p><p>As a multi-paradigm language, JavaScript supports event-driven, functional, and imperative (including object-oriented and prototype-based) programming styles. It has an API for working with text, arrays, dates, regular expressions, and basic manipulation of the DOM, but the language itself does not include any I/O, such as networking, storage, or graphics facilities, relying for these upon the host environment in which it is embedded.</p>'
            ]
        ];

        $data = [
            'slug'             => $slug,
            'title'            => $languages[$slug]['title'],
            'description'      => $languages[$slug]['description'],
            'paradigm'         => $languages[$slug]['paradigm'],
            'designedBy'       => $languages[$slug]['designedBy'],
            'firstAppeared'    => $languages[$slug]['firstAppeared'],
            'typingDiscipline' => $languages[$slug]['typingDiscipline']
            
        ];

        return view('languages', $data);
    }
}
