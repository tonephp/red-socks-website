<div class="footer">
  <div class="footer__cell">
    Copyright © <?=date("Y")?> TonePHP Framework
  </div>

  <div class="footer__cell">
    <div class="footer__links">
      <?php if ($this->isAuth()): ?>
        <a href="/logout">Logout</a>
      <?php else: ?>
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
        |
        <a href="/admin/user/login">Login as Admin</a>
      <?php endif; ?>
    </div>
  </div>
  
</div>