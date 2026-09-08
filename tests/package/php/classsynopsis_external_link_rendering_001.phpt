--TEST--
Class synopsis external link rendering 001 - xlink:href on methodname and varname
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
  <p class="para">1. External links on methodname and varname in a class synopsis</p>
  <div class="classsynopsis"><div class="classsynopsisinfo">
   
    <span class="modifier">class</span> <strong class="classname"><strong class="classname">ClassName</strong></strong>
    {</div>

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