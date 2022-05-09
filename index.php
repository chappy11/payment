<?php
require('config.php');
?>

<form action="submit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>"/>
        <input type="hidden" name="amount" value="<?php echo $_GET['amount']?>"/>
        <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $publishablekey?>"
        data-amount="<?php echo $_GET['amount'] * 100?>"
        data-currency="php"

        >
    </script>
</form>