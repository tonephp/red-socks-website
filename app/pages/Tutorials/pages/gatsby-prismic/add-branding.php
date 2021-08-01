<h1>Add branding</h1>

<h2>1. Add new field to navigation</h2>
<img src="/img/tutorials/gatsby-prismic/add-branding/1.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-branding/2.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-branding/3.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-branding/4.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-branding/5.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-branding/6.png" alt="prismic-step" class="doc__image" />

<h2>2. Fill the field</h2>
<img src="/img/tutorials/gatsby-prismic/add-branding/7.png" alt="prismic-step" class="doc__image" />
<img src="/img/tutorials/gatsby-prismic/add-branding/8.png" alt="prismic-step" class="doc__image" />

<h2>3. Edit file "/src/components/layout.js"</h2>
<img src="/img/tutorials/gatsby-prismic/add-branding/branding-styled.png" alt="branding-styled" class="doc__image" />
<p>
!!! Don't forget to add "branding" field to navigationQuery
</p>

<pre>
  <code class="language-scss">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/add-branding/branding-styled.js')?>
  </code>
</pre>



<img src="/img/tutorials/gatsby-prismic/add-branding/return-part.png" alt="return-part" class="doc__image" />

<pre>
  <code class="language-scss">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/add-branding/return-part.js')?>
  </code>
</pre>