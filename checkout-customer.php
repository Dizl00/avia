<<<<<<< HEAD

<section class="checkout-section-demo">
    <div class="container">
        <div class="row">
<!--             <div class="col-lg-12">
                <div class="checkout-page__top">
                    <div class="title">
                        <h1 class="text-uppercase">КОРЗИНА</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="checkout-page__sidebar">
                    <ul>
                        <li class="current"><a href="index.php?page=scheme">Выбор места</a></li>
                        <li><a href="index.php?page=checkcustomer">Информация и оплата</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="col-lg-9">
                <div class="checkout-page__content">
                    <div class="customer-content">

                        <div class="woocommerce-billing-fields">
                            <h3>Личная информация</h3>
                            <div class="form-row" name="first_name" id="billing_first_name_field">
                                <label>Имя</label>
                                <input type="text" value="<?php echo $_SESSION['user']['first_name'] ?>">
                            </div>
                            <div class="form-row" name="last_name" id="billing_last_name_field">
                                <label>Фамилия</label>
                                <input type="text" value="<?php echo $_SESSION['user']['last_name'] ?>">
                            </div>
                            <div class="form-row" name="email" id="billing_email">
                                <label>Электронная почта</label>
                                <input type="email" value="<?php echo $_SESSION['user']['email'] ?>">
                            </div>
                            <div class="form-row" name="family_name" id="billing_company_field">
                                <label>Отчество</label>
                                <input type="text">
                            </div>
                            <div class="form-row" name="Citizenship_pass" id="billing_country_field">
                                <label>Гражданство</label>
                                <input type="text" value="<?php echo $_SESSION['user']['Citizenship_pass'] ?>">
                            </div>
                            <div class="form-row" name="Validity_pass" id="billing_city_field">
                                <label>Cрок действия*</label>
                                <input type="text">
                            </div>
                            <div class="form-row" name="Country_pass" id="billing_state_field">
                                <label>Страна выдачи*</label>
                                <input type="text" value="<?php echo $_SESSION['user']['Country_pass'] ?>">
                            </div>
                            <div class="form-row" name="Birthday" id="billing_address_1_field">
                                <label>Дата рождения</label>
                                <input type="text" value="<?php echo date_format(date_create($_SESSION['user']['Birthday']), 'd-m-Y'); ?>">
                            </div>

                            <div class="form-row" name="Ser_num" id="billing_postcode_field">
                                <label>Серия и номер</label>
                                <input type="text" value="<?php echo $_SESSION['user']['Ser_num_pass'] ?>">
                            </div>
                            <div class="form-row" name="Phone" id="billing_phone_field">
                                <label>Номер телефона</label>
                                <input type="text" value="<?php echo $_SESSION['user']['Phone'] ?>">
                            </div>
                            
                            <div class="form-row form-row-wide create-account">
                                <p>* заполнять только с загранпаспортом</p>
                                <input id="createaccount" type="checkbox"> <label for="createaccount">Create an account?</label>
                            </div>
                        </div>

                        
                        <div id="payment">
                            <h3>Payment method</h3>
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" name="payment_method">
                                    <label for="payment_method_bacs">Direct Bank Transfer </label>
                                    <div class="payment_box payment_method_bacs"><p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </li>
                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" name="payment_method">
                                    <label for="payment_method_cheque">Cheque Payment </label>
                                    <div class="payment_box payment_method_cheque"><p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </li>
                                <li class="payment_method_paypal">
                                    <input id="payment_method_paypal" type="radio" name="payment_method">
                                    <label for="payment_method_paypal">
                                        PayPal 
                                        <img src="images/paypal.png" alt="">
                                        <a href="#" class="about_paypal">What is PayPal?</a>
                                    </label>
                                    <div class="payment_box payment_method_paypal"><p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-row place-order">
                                <input type="submit" class="button alt" id="place_order" value="Place order">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

=======

<section class="checkout-section-demo">
    <div class="container">
        <div class="row">
<!--             <div class="col-lg-12">
                <div class="checkout-page__top">
                    <div class="title">
                        <h1 class="text-uppercase">КОРЗИНА</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="checkout-page__sidebar">
                    <ul>
                        <li class="current"><a href="index.php?page=scheme">Выбор места</a></li>
                        <li><a href="index.php?page=checkcustomer">Информация и оплата</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="col-lg-9">
                <div class="checkout-page__content">
                    <div class="customer-content">

                        <div class="woocommerce-billing-fields">
                            <h3>Личная информация</h3>
                            <div class="form-row" name="first_name" id="billing_first_name_field">
                                <label>Имя</label>
                                <input type="text" value="<?php echo $_SESSION['user']['first_name'] ?>">
                            </div>
                            <div class="form-row" name="last_name" id="billing_last_name_field">
                                <label>Фамилия</label>
                                <input type="text" value="<?php echo $_SESSION['user']['last_name'] ?>">
                            </div>
                            <div class="form-row" name="email" id="billing_email">
                                <label>Электронная почта</label>
                                <input type="email" value="<?php echo $_SESSION['user']['email'] ?>">
                            </div>
                            <div class="form-row" name="family_name" id="billing_company_field">
                                <label>Отчество</label>
                                <input type="text">
                            </div>
                            <div class="form-row" name="Citizenship_pass" id="billing_country_field">
                                <label>Гражданство</label>
                                <input type="text" value="<?php echo $_SESSION['user']['Citizenship_pass'] ?>">
                            </div>
                            <div class="form-row" name="Validity_pass" id="billing_city_field">
                                <label>Cрок действия*</label>
                                <input type="text">
                            </div>
                            <div class="form-row" name="Country_pass" id="billing_state_field">
                                <label>Страна выдачи*</label>
                                <input type="text" value="<?php echo $_SESSION['user']['Country_pass'] ?>">
                            </div>
                            <div class="form-row" name="Birthday" id="billing_address_1_field">
                                <label>Дата рождения</label>
                                <input type="text" value="<?php echo date_format(date_create($_SESSION['user']['Birthday']), 'd-m-Y'); ?>">
                            </div>

                            <div class="form-row" name="Ser_num" id="billing_postcode_field">
                                <label>Серия и номер</label>
                                <input type="text" value="<?php echo $_SESSION['user']['Ser_num_pass'] ?>">
                            </div>
                            <div class="form-row" name="Phone" id="billing_phone_field">
                                <label>Номер телефона</label>
                                <input type="text" value="<?php echo $_SESSION['user']['Phone'] ?>">
                            </div>
                            
                            <div class="form-row form-row-wide create-account">
                                <p>* заполнять только с загранпаспортом</p>
                                <input id="createaccount" type="checkbox"> <label for="createaccount">Create an account?</label>
                            </div>
                        </div>

                        
                        <div id="payment">
                            <h3>Payment method</h3>
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" name="payment_method">
                                    <label for="payment_method_bacs">Direct Bank Transfer </label>
                                    <div class="payment_box payment_method_bacs"><p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </li>
                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" name="payment_method">
                                    <label for="payment_method_cheque">Cheque Payment </label>
                                    <div class="payment_box payment_method_cheque"><p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </li>
                                <li class="payment_method_paypal">
                                    <input id="payment_method_paypal" type="radio" name="payment_method">
                                    <label for="payment_method_paypal">
                                        PayPal 
                                        <img src="images/paypal.png" alt="">
                                        <a href="#" class="about_paypal">What is PayPal?</a>
                                    </label>
                                    <div class="payment_box payment_method_paypal"><p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-row place-order">
                                <input type="submit" class="button alt" id="place_order" value="Place order">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
