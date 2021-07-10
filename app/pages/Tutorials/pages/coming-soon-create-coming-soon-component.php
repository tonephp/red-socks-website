<h1>Create Coming Soon Component</h1>

<h2>1. Create file app/components/coming-soon/coming-soon.php</h2>
<pre>
  <code class="language-php">
<?=doc('/pages/Tutorials/pages/coming-soon-create-coming-soon-component/coming-soon.php')?>
  </code>
</pre>

<h2>2. Create file app/components/coming-soon/coming-soon.scss</h2>
<pre>
  <code class="language-scss">
<?=doc('/pages/Tutorials/pages/coming-soon-create-coming-soon-component/coming-soon.scss')?>
  </code>
</pre>

<h2>3. Import coming-soon.scss into app/src/scss/styles.scss</h2>
<pre>
  <code class="language-scss">
...
@import "../components/coming-soon/coming-soon.scss";
...
  </code>
</pre>

<h2>4. Use coming-soon component in app/components/grid/grid.php</h2>
<p>Paste this code in the block with class "grid__main"</p>
<pre>
  <code class="language-php">
<?=doc('/pages/Tutorials/pages/coming-soon-create-coming-soon-component/grid.php')?>
  </code>
</pre>
<p>grid.php should looks like on the picture:</p>
<img src="/img/tutorials/coming-soon-create-coming-soon-component-grid.png" alt="coming-soon-create-coming-soon-component-grid" class="doc__image" />

<h2>5. See result</h2>
<p>Open this link - <a href="http://localhost:40001" target="_blank">http://localhost:40001</a></p>
<p>You should see the site like on the picture:</p>
<img src="/img/tutorials/coming-soon-create-coming-soon-component-final.jpg" alt="coming-soon-create-coming-soon-component-final" class="doc__image" />