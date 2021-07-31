<h1>Custom RichText Component</h1>

<h2>1. Add link into the Game Development page</h2>
<img src="/img/tutorials/gatsby-prismic/custom-rich-text/1.png" alt="custom-rich-text" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/custom-rich-text/2.png" alt="custom-rich-text" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/custom-rich-text/3.png" alt="custom-rich-text" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/custom-rich-text/4.png" alt="custom-rich-text" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/custom-rich-text/5.png" alt="custom-rich-text" class="doc__image" />

<h2>2. Create file "/src/utils/linkResolver.js"</h2>
<pre>
  <code class="language-js">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/custom-rich-text/linkResolver.js')?>
  </code>
</pre>

<h2>3. Create file "/src/components/richText.js"</h2>
<pre>
  <code class="language-js">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/custom-rich-text/richText.js')?>
  </code>
</pre>

<h2>4. Edit file "/src/templates/page.js"</h2>

<img src="/img/tutorials/gatsby-prismic/custom-rich-text/rich-text-usage.png" alt="custom-rich-text" class="doc__image" />

<h2>5. See result</h2>
<p>
Go to <a href="http://localhost:8000/game-development" target="_blank">http://localhost:8000/game-development</a> and see result
</p>
<img src="/img/tutorials/gatsby-prismic/custom-rich-text/result.png" alt="custom-rich-text" class="doc__image" />


