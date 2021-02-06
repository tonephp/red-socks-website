<form method="post" action="/login">
  <div>
    <label for="login">Login</label>
    <input 
      id="login"
      type="text" 
      name="login" 
      placeholder="login"
    >
  </div>
  <div>
    <label for="password">Password</label>
    <input 
      id="password"
      type="password" 
      name="password" 
      placeholder="password"
    >
  </div>
  <div>
    <?=$this->component('button', ['title' => 'Login'])?>
  </div>
</form>