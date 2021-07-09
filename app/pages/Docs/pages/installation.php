<h1>Install project</h1>

<h2>1. Clone repo. Run docker. Install composer</h2>
<pre>
  <code class="language-bash">
git clone https://github.com/tonephp/starter-kit.git

cd starter-kit

docker-compose up -d

composer install

cp .env.example .env
  </code>
</pre>

<h2>2. Install node_modules</h2>

<pre>
  <code class="language-bash">
yarn
# or
npm install
  </code>
</pre>

<h2>3. Run webpack</h2>

<pre>
  <code class="language-bash">
yarn start
# or
npm start
  </code>
</pre>

<h2>4. Import database</h2>

<p>4.1. Open phpmyadmin - <a href="http://localhost:40002" target="_blank">http://localhost:40002</a></p>
<p>4.2. Use this credentials to login:</p>
<p>username: <b>user</b></p>
<p>password: <b>password</b></p>
<p>4.3. Import database <b>starter_kit_db.sql</b>. You can find this file in root directory.</p>

<h2>5. Enjoy the site!</h2>
<p>Open this link - <a href="http://localhost:40001" target="_blank">http://localhost:40001</a></p>
<p>You should see the site like on the picture:</p>
<img src="/img/docs/starter-kit-main-page.png" alt="starter-kit-main-page" class="doc__image" />