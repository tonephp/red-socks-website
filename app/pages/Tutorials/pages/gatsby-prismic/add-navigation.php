<h1>Add navigation</h1>

<img src="/img/tutorials/gatsby-prismic/add-navigation/1.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/2.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/3.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/4.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/5.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/6.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/7.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/8.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/9.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/10.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/11.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/12.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/13.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-navigation/14.png" alt="prismic-step" class="doc__image" />

<h2>Install dependency</h2>
<pre>
  <code class="language-bash">
npm i gatsby-plugin-styled-components styled-components babel-plugin-styled-components
  </code>
</pre>

<h2>Add plugin to "/gatsby-config.js"</h2>
<img src="/img/tutorials/gatsby-prismic/add-navigation/gatsby-config.png" alt="prismic-step" class="doc__image" />

<h2>Edit file "/src/components/layout.js"</h2>
<pre>
  <code class="language-js">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/add-navigation/layout.js')?>
  </code>
</pre>

<h2>Edit file "/src/components/layout.css"</h2>
<pre>
  <code class="language-scss">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/add-navigation/layout.css')?>
  </code>
</pre>

<h2>Edit file "/src/templates/page.js"</h2>
<img src="/img/tutorials/gatsby-prismic/add-navigation/page.png" alt="prismic-step" class="doc__image" />

<p>
Go to <a href="http://localhost:8000" target="_blank">http://localhost:8000</a> and see result
</p>