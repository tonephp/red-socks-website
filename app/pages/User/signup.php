<form method="post" action="/signup">
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
    <label for="name">Name</label>
    <input 
      id="name"
      type="text" 
      name="name" 
      placeholder="name"
    >
  </div>
  <div>
    <label for="email">Email</label>
    <input 
      id="email"
      type="email" 
      name="email" 
      placeholder="email"
    >
  </div>
  <div>
    <?=$this->component('button', ['title' => 'Register'])?>
  </div>
</form>