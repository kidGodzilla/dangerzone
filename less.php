<?php include 'header.php' ?>
<section class="content-section">
  <h1>An Introduction To LESS CSS</h1>

  <div class="cover" style="background:url('http://designshack.net/wp-content/uploads/less-snippets-0.jpg') no-repeat center center;"></div>

  <p>LESS (Leaner CSS) is a dynamic stylesheet language designed by Alexis Sellier. It is influenced by Sass and has influenced the newer "SCSS" syntax of Sass, which adapted its CSS-like block formatting syntax. LESS is open-source. Its first version was written in Ruby, however in the later versions, use of Ruby has been deprecated and replaced by JavaScript. The indented syntax of LESS is a nested metalanguage, as valid CSS is valid LESS code with the same semantics. LESS provides the following mechanisms: variables, nesting, mixins, operators and functions; the main difference between LESS and other CSS precompilers being that LESS allows real-time compilation via LESS.js by the browser. LESS can run on the client-side and server-side, or can be compiled into plain CSS.</p>
  
  <h3>Why write LESS css?</h3>
  
  <p>
    <ul>
      <li>More organized code</li>
      <li>You get to write less css (to do more)</li>
      <li>Make changes quickly and easily</li>
    </ul>
  </p>

  <h3>Ways to use LESS css</h3>

  <p>
    <ul>
      <li>Compile to CSS on the fly (less.js)</li>
      <li>Compile client-side (npm less)</li>
      <li>Compile online (http://less2css.org/)</li>
    </ul>
  </p>

<h3>Getting started with LESS css</h3>

<p>All valid CSS is already valid LESS, so you can just import your existing css stylesheet by renaming it to a .less extension & changing your link[rel] as shown below:</p>

<pre><span class="code-title">HTML</span><code class="language-css language-markup">&lt;link rel="stylesheet/less" href="less/style.less"></code></pre>

<p>Now, to compile your less to css on the fly, simplly include the less.js file (locally or from the CDN).</p>

<pre><span class="code-title">HTML</span><code class="language-css language-markup">&lt;script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.7.3/less.min.js">&lt;/script></code></pre>
  
    <hr style="opacity:0.2;margin:50px;">
    <div class="author">
        <img class="face" src="http://res.cloudinary.com/hrscywv4p/image/upload/c_limit,h_540,w_720/eig9tzk9svfhr6tshsox.jpg">
        <div>
            <i><strong>Web Developer</strong></i>
            <h3>JAMES FUTHEY</h3>
            <a href="#">@dgamr</a>
        </div>
    </div>
    <p class="thanks">Thanks for reading!</p>
</section>
<?php include 'footer.php' ?>