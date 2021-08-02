<h1>Hero Slice</h1>

<h2>1. Go to prismic</h2>
<img src="/img/tutorials/gatsby-prismic/hero-slice/1.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/2.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/3.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/4.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/5.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/6.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/7.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/8.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/9.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/10.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/11.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/12.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/13.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/14.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/15.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/16.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/17.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/18.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/19.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/20.png" alt="prismic-step" class="doc__image" />


<h2>2. Run in console</h2>
<pre>
  <code class="language-bash">
yarn clean
yarn start
  </code>
</pre>


<h2>3. Create file "src/components/hero.js"</h2>

<pre>
  <code class="language-scss">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/hero-slice/hero.js')?>
  </code>
</pre>


<h2>4. Create file "src/components/sliceZone.js"</h2>

<pre>
  <code class="language-scss">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/hero-slice/sliceZone.js')?>
  </code>
</pre>


<h2>5. Edit file "src/components/layout.js"</h2>

<img src="/img/tutorials/gatsby-prismic/hero-slice/layout-js.png" alt="layout-js" class="doc__image" />


<h2>6. Edit file "src/pages/index.js"</h2>

<img src="/img/tutorials/gatsby-prismic/hero-slice/pages_index-js-1.png" alt="pages_index-js" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/hero-slice/pages_index-js-2.png" alt="pages_index-js" class="doc__image" />
<p>query code for copy/paste</p>

<pre>
  <code class="language-scss">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/hero-slice/query.js')?>
  </code>
</pre>