<div class="container">
	<section id="typography">
  <div class="page-header">
    <h1>Typography <small>Headings, paragraphs, lists, and other inline type elements</small></h1>
  </div>

  <h2>Headings &amp; body copy</h2>

  <!-- Headings & Paragraph Copy -->
  <div class="row">
    <div class="span4">
      <h3>Typographic scale</h3>
      <p>The entire typographic grid is based on two Less variables in our variables.less file: <code>@baseFontSize</code> and <code>@baseLineHeight</code>. The first is the base font-size used throughout and the second is the base line-height.</p>
      <p>We use those variables, and some math, to create the margins, paddings, and line-heights of all our type and more.</p>
    </div>
    <div class="span4">
      <h3>Example body text</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
    </div>
    <div class="span4">
      <div class="well">
        <h1>h1. Heading 1</h1>
        <h2>h2. Heading 2</h2>
        <h3>h3. Heading 3</h3>
        <h4>h4. Heading 4</h4>
        <h5>h5. Heading 5</h5>
        <h6>h6. Heading 6</h6>
      </div>
    </div>
  </div>

  <!-- Misc Elements -->
  <h2>Emphasis, address, and abbreviation</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Element</th>
        <th>Usage</th>
        <th>Optional</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <code>&lt;strong&gt;</code>
        </td>
        <td>
          For emphasizing a snippet of text with <strong>important</strong>
        </td>
        <td>
          <span class="muted">None</span>
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;em&gt;</code>
        </td>
        <td>
          For emphasizing a snippet of text with <em>stress</em>
        </td>
        <td>
          <span class="muted">None</span>
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;abbr&gt;</code>
        </td>
        <td>
          Wraps abbreviations and acronyms to show the expanded version on hover
        </td>
        <td>
          <p>Include optional <code>title</code> attribute for expanded text</p>
          Use <code>.initialism</code> class for uppercase abbreviations.
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;address&gt;</code>
        </td>
        <td>
          For contact information for its nearest ancestor or the entire body of work
        </td>
        <td>
          Preserve formatting by ending all lines with <code>&lt;br&gt;</code>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="row">
    <div class="span4">
      <h3>Using emphasis</h3>
      <p><a href="#">Fusce dapibus</a>, <strong>tellus ac cursus commodo</strong>, <em>tortor mauris condimentum nibh</em>, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>
      <p><strong>Note:</strong> Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5, but their usage has changed a bit. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
    </div>
    <div class="span4">
      <h3>Example addresses</h3>
      <p>Here are two examples of how the <code>&lt;address&gt;</code> tag can be used:</p>
      <address>
        <strong>Twitter, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">first.last@gmail.com</a>
      </address>
    </div>
    <div class="span4">
      <h3>Example abbreviations</h3>
      <p>Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover. This gives users extra indication something will be shown on hover.</p>
      <p>Add the <code>initialism</code> class to an abbreviation to increase typographic harmony by giving it a slightly smaller text size.</p>
      <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
      <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
    </div>
  </div>


  <!-- Blockquotes -->
  <h2>Blockquotes</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Element</th>
        <th>Usage</th>
        <th>Optional</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <code>&lt;blockquote&gt;</code>
        </td>
        <td>
          Block-level element for quoting content from another source
        </td>
        <td>
          <p>Add <code>cite</code> attribute for source URL</p>
          Use <code>.pull-left</code> and <code>.pull-right</code> classes for floated options
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;small&gt;</code>
        </td>
        <td>
          Optional element for adding a user-facing citation, typically an author with title of work
        </td>
        <td>
          Place the <code>&lt;cite&gt;</code> around the title or name of source
        </td>
      </tr>
    </tbody>
  </table>
  <div class="row">
    <div class="span4">
      <p>To include a blockquote, wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes we recommend a <code>&lt;p&gt;</code>.</p>
      <p>Include an optional <code>&lt;small&gt;</code> element to cite your source and you'll get an em dash <code>&amp;mdash;</code> before it for styling purposes.</p>
    </div>
    <div class="span8">
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;blockquote&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;p&gt;</span><span class="pln">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</span><span class="tag">&lt;/p&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;small&gt;</span><span class="pln">Someone famous</span><span class="tag">&lt;/small&gt;</span></li><li class="L3"><span class="tag">&lt;/blockquote&gt;</span></li></ol></pre>
    </div>
  </div><!--/row-->

  <h3>Example blockquotes</h3>
  <div class="row">
    <div class="span6">
      <p>Default blockquotes are styled as such:</p>
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
        <small>Someone famous in <cite title="">Body of work</cite></small>
      </blockquote>
    </div>
    <div class="span6">
      <p>To float your blockquote to the right, add <code>class="pull-right"</code>:</p>
      <blockquote class="pull-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
        <small>Someone famous in <cite title="">Body of work</cite></small>
      </blockquote>
    </div>
  </div>


  <!-- Lists -->
  <h2>Lists</h2>
  <div class="row">
    <div class="span4">
      <h3>Unordered</h3>
      <p><code>&lt;ul&gt;</code></p>
      <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span4">
      <h3>Unstyled</h3>
      <p><code>&lt;ul class="unstyled"&gt;</code></p>
      <ul class="unstyled">
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span4">
      <h3>Ordered</h3>
      <p><code>&lt;ol&gt;</code></p>
      <ol>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit</li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ol>
    </div>
  </div><!-- /row -->
  <br>
  <div class="row">
    <div class="span4">
      <h3>Description</h3>
      <p><code>&lt;dl&gt;</code></p>
      <dl>
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      </dl>
    </div>
    <div class="span8">
      <h3>Horizontal description</h3>
      <p><code>&lt;dl class="dl-horizontal"&gt;</code></p>
      <dl class="dl-horizontal">
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      </dl>
    </div>
  </div><!-- /row -->
</section>
</div>

