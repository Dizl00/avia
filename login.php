<<<<<<< HEAD
        <section class="awe-parallax login-page-demo">
            <div class="container">
                <div class="login-register-page__content">
                    <div class="content-title">
                        <span>Добро пожаловать</span>
                        <h2>ПАССАЖИР!</h2>
                    </div>
                    <form action="handler_form/signin.php" method="post">
                        <div class="form-item">
                                                    <h6 style="color: #ff2222;"><?php echo $_SESSION['message']; ?></h6>

                            <label>Логин</label>
                            <input type="text" name="login">
                        </div>
                        <div class="form-item">
                            <label>Пароль</label>
                            <input type="password" name="password">
                        </div>
                        <div class="form-actions">
                            <input type="submit" value="Войти">
                        </div>
                        <?php echo $_SESSION['message']; ?> 
                    </form>
                    <div class="login-register-link">
                        Ещё нет аккаунта? <a href="index.php?page=register">Зарегестрируйтесь ТУТ!</a>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <!-- END / PAGE WRAP -->
</body>
=======
        <section class="awe-parallax login-page-demo">
            <div class="container">
                <div class="login-register-page__content">
                    <div class="content-title">
                        <span>Добро пожаловать</span>
                        <h2>ПАССАЖИР!</h2>
                    </div>
                    <form action="handler_form/signin.php" method="post">
                        <div class="form-item">
                                                    <h6 style="color: #ff2222;"><?php echo $_SESSION['message']; ?></h6>

                            <label>Логин</label>
                            <input type="text" name="login">
                        </div>
                        <div class="form-item">
                            <label>Пароль</label>
                            <input type="password" name="password">
                        </div>
                        <div class="form-actions">
                            <input type="submit" value="Войти">
                        </div>
                        <?php echo $_SESSION['message']; ?> 
                    </form>
                    <div class="login-register-link">
                        Ещё нет аккаунта? <a href="index.php?page=register">Зарегестрируйтесь ТУТ!</a>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <!-- END / PAGE WRAP -->
</body>
>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
</html>