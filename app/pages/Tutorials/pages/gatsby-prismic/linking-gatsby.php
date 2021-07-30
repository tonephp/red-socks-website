<h1>Linking gatsby</h1>

<h2>Install dependency</h2>
<pre>
  <code class="language-bash">
npm i @prismicio/gatsby-source-prismic-graphql
  </code>
</pre>

<h2>Edit file "/gatsby-config.js"</h2>

<pre>
  <code class="language-js">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/linking-gatsby/gatsby-config.js')?>
  </code>
</pre>
<p>Paste code in plugins array:</p>
<img src="/img/tutorials/gatsby-prismic/linking-gatsby/gatsby-config.png" alt="gatsby-config" class="doc__image" />

<p>repositoryName should be the same as subdomain on prismic site</p>
<img src="/img/tutorials/gatsby-prismic/linking-gatsby/repository-name-source.png" alt="repository-name-source" class="doc__image" />

<h2>Edit file "/gatsby-node.js"</h2>
<p>Paste this code into the file.</p>
<pre>
  <code class="language-js">
<?=doc('/pages/Tutorials/pages/gatsby-prismic/files/linking-gatsby/gatsby-node.js')?>
  </code>
</pre>

<h2>Querying Prismic data using the GraphiQL tool</h2>
<p>
Go to <a href="http://localhost:8000/___graphql" target="_blank">http://localhost:8000/___graphql</a> and paste this code to query field
</p>

<pre>
  <code>
query MyQuery {
  prismic {
    allPages {
      edges {
        node {
          page_title
        }
      }
    }
  }
}
  </code>
</pre>
