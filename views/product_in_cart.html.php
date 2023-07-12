<?php
    $img_url = "data:image/png;base64,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";
    $img_alt = "image of the product";
    $product_name = "img-placeholder";
    $qty = 1;
    $price = 29;

?>

<div class="product-in-cart">
    <?php 
        echo '<img src="'. $img_url . '" alt="'. $img_alt . '" />';
        echo '<p>' . $product_name . '</p>';
    ?>
    <div class="spacer"></div>
    <div class="qty-box">
        <button>-</button>
        <?php echo '<p>' . $qty . '</p>';?>
        <button>+</button>
    </div>
    <?php
        echo '<p>' . $price . ' $</p>';
        echo '<button>x</button>';
    ?>
</div>
