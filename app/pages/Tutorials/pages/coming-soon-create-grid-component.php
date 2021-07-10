<h1>Create Grid Component</h1>

<h2>1. Create file app/components/grid/grid.php</h2>
<pre>
  <code class="language-php">
<?=doc('/pages/Tutorials/pages/coming-soon-create-grid-component/grid.php')?>
  </code>
</pre>

<h2>2. Create file app/components/grid/grid.scss</h2>
<pre>
  <code class="language-scss">
<?=doc('/pages/Tutorials/pages/coming-soon-create-grid-component/grid.scss')?>
  </code>
</pre>

<h2>3. Import grid.scss into app/src/styles.scss</h2>
<pre>
  <code class="language-scss">
...
@import "../components/grid/grid.scss";
...
  </code>
</pre>

<h2>4. Use grid component in app/pages/Main/index.php</h2>
<pre>
  <code class="language-php">
<?=doc('/pages/Tutorials/pages/coming-soon-create-grid-component/pages-main-index.php')?>
  </code>
</pre>

<h2>5. Add background image</h2>
<p>5.1. Download this image 
  <a href="https://tonephp.com/img/tutorials/coming-soon-bg.jpeg" target="_blank">
    https://tonephp.com/img/tutorials/coming-soon-bg.jpeg
  </a>
</p>
<p>5.2. Paste this image to folder /public/img</p>

<h2>6. See result</h2>
<p>Open this link - <a href="http://localhost:40001" target="_blank">http://localhost:40001</a></p>
<p>You should see the site like on the picture:</p>
<img src="/img/tutorials/coming-soon-step-1.jpg" alt="coming-soon-step-1" class="doc__image" />