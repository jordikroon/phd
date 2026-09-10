--TEST--
Class synopsis external link rendering 001 - xlink:href on classname, interfacename, type, methodname and varname
--FILE--
<?php
namespace phpdotnet\phd;

require_once __DIR__ . "/../../setup.php";

$config->xmlFile = __DIR__ . "/data/classsynopsis_external_link_rendering_001.xml";

$format = new TestPHPChunkedXHTML($config, $outputHandler);
$render = new TestRender(new Reader($outputHandler), $config, $format);

$render->run();
?>
--EXPECT--
Filename: classsynopsis_external_link_rendering.html
Content:
<div id="classsynopsis_external_link_rendering" class="chapter">

 <div class="section">
  <p class="para">1. External links on classname, interfacename, type, methodname and varname in a class synopsis</p>
  <div class="classsynopsis"><div class="classsynopsisinfo">
   
    <span class="modifier">class</span> <strong class="classname"><strong class="classname">ClassName</strong></strong>
   

   
    <span class="modifier">extends</span>
     <a href="https://example.com/parent" class="classname external">ParentClass</a>
   

   
     <a href="https://example.com/interface" class="interfacename external">LinkedInterface</a>,

    <strong class="interfacename">PlainInterface</strong> {</div>

   <div class="fieldsynopsis">
    <span class="modifier">public</span>
    <span class="type">?</span><span class="type"><span class="type"><a href="https://example.com/type" class="type LinkedType external">LinkedType</a></span><span class="type"></span></span>
     <var class="varname">$<var class="varname">typedProperty</var></var>;</div>


   <div class="methodsynopsis dc-description">
    <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname"><strong>typedMethod</strong></span>(<span class="methodparam"><span class="type"><a href="https://example.com/type" class="type LinkedType external">LinkedType</a></span> <code class="parameter">$linked</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="https://example.com/type" class="type LinkedType external">LinkedType</a></span>|<span class="type"><a href="language.types.integer.html" class="type int">int</a></span></span> <code class="parameter">$union</code></span>): <span class="type"><span class="type"><a href="language.types.null.html" class="type null">?</a></span><span class="type"><a href="https://example.com/type" class="type LinkedType external">LinkedType</a></span></span></div>


   <div class="fieldsynopsis">
    <span class="modifier">public</span>
    <span class="type"><a href="language.types.integer.html" class="type int">int</a></span>
     <var class="varname"><a href="https://example.com/property" class="external">$<var class="varname">linkedProperty</var></a></var>;</div>


   <div class="fieldsynopsis"><span class="modifier">public</span>
    <span class="type"><a href="language.types.integer.html" class="type int">int</a></span>
     <var class="varname">$<var class="varname">plainProperty</var></var>;</div>


   <div class="methodsynopsis dc-description">
    <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname"><a href="https://example.com/method" class="methodname external">linkedMethod</a></span>(): <span class="type"><a href="language.types.void.html" class="type void">void</a></span></div>


   <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname"><a href="https://example.com/inherited" class="methodname external">OtherClass::inheritedMethod</a></span>(): <span class="type"><a href="language.types.void.html" class="type void">void</a></span></div>


   <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname"><strong>plainMethod</strong></span>(): <span class="type"><a href="language.types.void.html" class="type void">void</a></span></div>

  }</div>
 </div>

</div>