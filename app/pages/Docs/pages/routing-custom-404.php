<h1>Custom 404 Page</h1>

<h2>1. Create file app/controllers/ErrorController.php</h2>
<pre>
  <code class="language-php">
<?=doc('/pages/Docs/pages/routing-custom-404/ErrorController.php')?>
  </code>
</pre>

<h2>2. Create file app/components/not-found/not-found.php</h2>

<pre>
  <code class="language-php">
<?=doc('/pages/Docs/pages/routing-custom-404/not-found.php')?>
  </code>
</pre>

<h2>3. Create file app/components/not-found/not-found.scss</h2>

<pre>
  <code class="language-scss">
<?=doc('/pages/Docs/pages/routing-custom-404/not-found.scss')?>
  </code>
</pre>

<h2>4. Import not-found.scss into app/src/styles.scss</h2>

<pre>
  <code class="language-scss">
...
@import "../components/not-found/not-found.scss";
...
  </code>
</pre>

<h2>5. Create file app/pages/Error/index.php</h2>

<pre>
  <code class="language-php">
<?=doc('/pages/Docs/pages/routing-custom-404/error-index.php')?>
  </code>
</pre>
