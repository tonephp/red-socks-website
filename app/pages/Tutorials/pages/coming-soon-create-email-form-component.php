<h1>Create email-form Component</h1>

<h2>1. Create file app/components/email-form/email-form.php</h2>
<pre>
  <code class="language-php">
<?=doc('/pages/Tutorials/pages/coming-soon-create-email-form-component/email-form.php')?>
  </code>
</pre>

<h2>2. Create file app/components/email-form/email-form.scss</h2>
<pre>
  <code class="language-scss">
<?=doc('/pages/Tutorials/pages/coming-soon-create-email-form-component/email-form.scss')?>
  </code>
</pre>

<h2>3. Import email-form.scss into app/src/styles.scss</h2>
<pre>
  <code class="language-scss">
...
@import "../components/email-form/email-form.scss";
...
  </code>
</pre>

<h2>4. Use email-form component in app/components/coming-soon/coming-soon.php</h2>
<p>Replace FORM text with this code</p>
<pre>
  <code class="language-php">
<?=doc('/pages/Tutorials/pages/coming-soon-create-email-form-component/coming-soon.php')?>
  </code>
</pre>
<p>coming-soon.php should looks like on the picture:</p>
<img src="/img/tutorials/coming-soon-create-email-form-component-coming-soon.png" alt="coming-soon-create-email-form-component-coming-soon" class="doc__image" />

<h2>5. Create file app/components/email-form/email-form.js</h2>
<pre>
  <code class="language-javascript">
<?=doc('/pages/Tutorials/pages/coming-soon-create-email-form-component/email-form.js')?>
  </code>
</pre>

<h2>6. Import email-form.js into app/src/app.js</h2>
<pre>
  <code class="language-javascript">
...
import '../components/email-form/email-form';
  </code>
</pre>

<h2>7. Create file app/src/axios.js</h2>
<pre>
  <code class="language-js">
<?=doc('/pages/Tutorials/pages/coming-soon-create-email-form-component/axios.js')?>
  </code>
</pre>

<h2>8. Install axios. Run webpack</h2>
<pre>
  <code class="language-bash">
yarn add -D axios
yarn start
  </code>
</pre>

<h2>9. See result</h2>
<p>Open this link - <a href="http://localhost:40001" target="_blank">http://localhost:40001</a></p>
<p>You should see the site like on the picture:</p>
<img src="/img/tutorials/coming-soon-create-email-form-component-final.jpg" alt="coming-soon-create-email-form-component-final" class="doc__image" />