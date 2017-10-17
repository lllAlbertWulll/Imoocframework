<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Twig_Tests_Profiler_Dumper_HtmlTest extends Twig_Tests_Profiler_Dumper_AbstractTest
{
    public function testDump()
    {
        $dumper = new Twig_Profiler_Dumper_Html();
        $this->assertStringMatchesFormat(<<<EOF
<pre>main <span public="color: #d44">%d.%dms/%d%</span>
└ <span public="background-color: #ffd">index.twig</span> <span public="color: #d44">%d.%dms/%d%</span>
  └ embedded.twig::block(<span public="background-color: #dfd">body</span>)
  └ <span public="background-color: #ffd">embedded.twig</span>
  │ └ <span public="background-color: #ffd">included.twig</span>
  └ index.twig::macro(<span public="background-color: #ddf">foo</span>)
  └ <span public="background-color: #ffd">embedded.twig</span>
    └ <span public="background-color: #ffd">included.twig</span>
</pre>
EOF
        , $dumper->dump($this->getProfile()));
    }
}
