<?php require('./layout/Header.php') ?>

<nav>
    <ul class="menu" id="menu">
        <div class="search_wrap search_wrap_aside">
            <input type="text" class="input" placeholder="Buscar.." id="input_aside" />
        </div>
        <li>
            <button id="all" class="btnMenu btn-category active">
                <i class="ri-arrow-up-wide-line"></i>Productos varios
            </button>
        </li>
        <li>
            <button id="shirts" class="btnMenu btn-category">
                <i class="ri-arrow-up-wide-line"></i>Camisetas
            </button>
        </li>
        <li>
            <button id="coats" class="btnMenu btn-category">
                <i class="ri-arrow-up-wide-line"></i>Abrigos
            </button>
        </li>
        <li>
            <button id="pants" class="btnMenu btn-category">
                <i class="ri-arrow-up-wide-line"></i>Pantalones
            </button>
        </li>
        <li>
            <button id="shoes" class="btnMenu btn-category">
                <i class="ri-arrow-up-wide-line"></i>Zapatos
            </button>
        </li>
        <li>
            <a class="btnMenu btn-cart" href="cart.php"><i class="ri-shopping-cart-2-fill"></i>Carrito
                <span id="number" class="number">0</span></a>
        </li>
    </ul>
</nav>
    <?php include './layout/Footer.php'; ?>
</aside>
<main>
    <div class="main-header">
        <h2 class="main-title" id="main-title">Productos varios</h2>
        <div class="search_wrap">
            <input type="text" class="input" placeholder="Buscar.." id="input" />
        </div>
    </div>
    <p id="empty-ccomment" class="empty-comment disabled">No se encontró ningun producto.</p>
    <button class="go-top-btn">
        <i class="ri-arrow-up-line"></i>
    </button>
    <div class="productContainer" id="productContainer">
        <!-- JS -->
    </div>
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal-content" id="modal-content">
            <!-- JS -->
        </div>
    </div>
</main>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="./js/menu.js"></script>
<script src="./js/main.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/search.js"></script>
</body>

</html>