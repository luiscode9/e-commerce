<?php require('./layout/Header.php') ?>

<nav>
    <ul class="menu">
        <li><a class="btnMenu btn-category" href="./index.php"><i class="ri-arrow-left-wide-line"></i>Seguir comprando</a></li>
        <li><a class="btnMenu active" href="#"><i class="ri-shopping-cart-2-fill"></i>Carrito</a></li>
    </ul>
</nav>
    <?php include './layout/Footer.php'; ?> 
</aside>
<main>
    <div class="main-header">
        <h2 class="cart-main-title">Carrito</h2>
    </div>
    <div class="container-cart">
        <p id="empty-comment" class="empty-comment">El carrito esta vacío. <i class="far fa-frown-open"></i></p>

        <div id="cart-products" class="cart-products disabled">
            <!-- JS -->
        </div>

        <div id="cart-actions" class="cart-actions disabled">
            <div class="cart-actions-left">
                <button id="btn-cart-empty" class="btn btn-cart-empty">Vaciar carrito</button>
            </div>
            <div class="cart-actions-right">
                <div class="cart-total">
                    <p>Total:</p>
                    <p id="total">₡ 0</p>
                </div>
                <button id="btn-cart-buy" class="btn btn-cart-buy">Comprar ahora</button>
            </div>
        </div>

        <p id="bought-cart" class="bought-cart disabled">Muchas gracias por su compra. <i class="far fa-laugh-beam"></i></p>

    </div>
</main>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/cart.js"></script>
</body>

</html>