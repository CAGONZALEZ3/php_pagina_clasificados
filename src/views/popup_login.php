<!-- Popup login -->
<div class="popup" id="popup">
    <div class="popup-emergente">
        <span class="cerrar" id="cerrarPopup">&times;</span>
        <form action="../php/controllers/auth.php" method="POST" class="form-login">
            <h2>Login</h2>
            <img src ="../public/image/logo.jpg" class="Logo">
            <div class="form-group">
                <label for="login_email">Email</label>
                <input type="email" id="login_email" name="login_email" placeholder="Enter your email" required />
            </div>

            <div class="form-group">
                <label for="login_password">Password</label>
                <input type="password" id="login_password" name="login_password" placeholder="Enter your password" required />
            </div>

            <div class="button-group">
                <button type="submit" id="login" class="btn-primary">Login</button>
                <a href='../public/signup.php' id="signup" class="btn-secondary">Sign Up</a>
            </div>

            <div class="forgot-password">
                <a href='../public/lost.php' id="lost">Forgot Password?</a>
            </div>
        </form>
    </div>
</div>
<script type="module" src="../public/JS/login.js"></script>
