<?php

if (isset($product)) {
?>

    <div class="product-in-cart">
        <?php
        echo '<img src="' . $product->image . '" alt="' . $product->name . '" />';
        echo '<p>' . $product->name . '</p>';
        ?>
        <div class="spacer"></div>
        <div class="qty-box">
            <button>-</button>
            <?php echo '<p>' . $product->stock . '</p>'; ?>
            <button>+</button>
        </div>
        <?php
        echo '<p>' . $product->price . ' $</p>';
        echo '<button>x</button>';
        ?>
    </div>

<?php
}