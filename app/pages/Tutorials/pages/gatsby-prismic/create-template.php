<h1>Create template</h1>

<h2>Install dependency</h2>
<pre>
  <code class="language-bash">
npm i prismic-reactjs
  </code>
</pre>

<h2>Create file "/src/templates/page.js"</h2>

<pre>
  <code class="language-js">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/create-template/page.js')?>
  </code>
</pre>

<h2>Edit file "/gatsby-config.js"</h2>

<pre>
  <code class="language-js">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/create-template/gatsby-config.js')?>
  </code>
</pre>

<p>Paste code after repositoryName property in plugins section:</p>
<img src="/img/tutorials/gatsby-prismic/create-template/gatsby-config.png" alt="gatsby-config" class="doc__image" />

<h2>Edit page custom type</h2>
<img src="/img/tutorials/gatsby-prismic/create-template/1.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/create-template/2.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/create-template/3.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/create-template/4.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/create-template/5.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/create-template/6.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/create-template/7.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/create-template/8.png" alt="prismic-step" class="doc__image" />

<pre>
  <code class="language-bash">
yarn clean
yarn start
  </code>
</pre>

<p>
Go to <a href="http://localhost:8000/game-development" target="_blank">http://localhost:8000/game-development</a> and see result
</p>

<img src="/img/tutorials/gatsby-prismic/create-template/result.png" alt="prismic-step-result" class="doc__image" />