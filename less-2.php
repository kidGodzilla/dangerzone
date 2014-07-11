<?php include 'header.php' ?>
<section class="content-section">
  <h1>LESS Variables, Mixins, & Nesting</h1>

  <div class="cover" style="background:url('http://designshack.net/wp-content/uploads/less-snippets-0.jpg') no-repeat center center;"></div>

  <h3>LESS Variables</h3>
  
  <p>
    Less variables allow us to avoid writing duplicate code, and to make "global" changes quick & effortless. The most common use of LESS variables is for color theming.
  </p>
  <p>
    Imagine your typical HTML5 webpage. Usually, you'll reuse a palette of 3-5 colors in a design, maybe with a few tints and shades of those base colors. But what happens if, for example, you want to change your maincolor? You could search and replace all occurences of that color, and then recalculate your tints and shades & varients of that color. Alternatively, using LESS, you could change them on the fly using variables.
  </p>
  <p>
    Typically, variables are located at the beginning of the document (so that future changes are quick and easy), but this is not a restriction of the LESS syntax. The syntax for creating a LESS variable is as follows:
  </p>
  
  <pre><span class="code-title">LESS</span><code class="language-css language-markup">@variable-name: #fff;</code></pre>
  
  <p>Now, for example, you could replace all occurences of #fff in your code with @variable-name, and when you changed the variable at the top of your document, the changes would occur in multiple places.</p>
  
  <pre><span class="code-title">LESS</span><code class="language-css language-markup">@variable-name: #fff;
  
body {
    background-color: @variable-name;
}
a:hover {
    color: @variable-name;
}</code></pre>
  
  <h3>LESS Mixins</h3>
  
  <p>
    Mixins are sets of properties which can be "mixed in" to other blocks of CSS (based on the DRY principal; Don't Repeat Yourself). If you've worked with classes and inheritance in other languages this will seem familiar.
  </p>
  <p>
    In LESS, all we need to do to include one class (using the dot syntax) in another block of CSS is to reference it.</p>
  <p>For Example:
  </p>
  
  <pre><span class="code-title">LESS</span><code class="language-css language-markup">.global-padding {
  padding: 10px;
}
#my-div {
  .global-padding;
}
.footer-div {
  .global-padding;
}</code></pre>
  
  <p>In this example, we created a css class 'global-padding'. Then, we included it's as a default inside of two other DOM elements using straightforward syntax.</p><p>Note: It does not matter if the DOM element exists or not, but beware that if the class was referenced in the DOM you would be making changes to the DOM itself.</p>
  
  <h3>LESS Nesting</h3>
  
  <p>
    Another timesaving feature of LESS that will help you write less code is nesting. In the following example, you'll see that we repeat <strong>#header</strong> several times:
  </p>
  
  <pre><span class="code-title">LESS</span><code class="language-css language-markup">#header {
  color: black;
}
#header .navigation {
  font-size: 12px;
}
#header .logo {
  width: 300px;
}</code></pre>  
  
  <p>One way we could refactor this code is through nesting. LESS by default assumes all nested elements are child elements. See the example below:</p>

  <pre><span class="code-title">LESS</span><code class="language-css language-markup">#header {
  color: black;
  .navigation {
    font-size: 12px;
  }
  .logo {
    width: 300px;
  }
}</code></pre>  
  
  <p>This LESS would compile to the same CSS, but the LESS file is much easier to work with.</p>

  <p>That's 90% of what you need to know to make your lives more productive and make your CSS more efficient with LESS! Enjoy!</p>
  
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