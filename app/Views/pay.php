<?= $this->extend('welcome_message')?>


<?= $this->section('content')?>
<form action="/pay" method="post">

    <label for="name">Amount: </label><br>
    <input type="text" id="name" name="amount"  class="form-control" ><br>
<br>
    <label for="drop">Payment Type:</label>
    <br>

    <select name="payment_id" id="drop" class="form-control">
        <?php foreach ($payments as $payment): ?>
        <option value="<?= $payment['id']?>"><?= $payment['payment']; ?></option>
       <?php endforeach;?>
    </select>
    <br>

    <label for="drop">Payment Type:</label>
    <br>

    <select name="currency_id" id="drop"  class="form-control">
        <?php foreach ($currencies as $currency): ?>
            <option value="<?= $currency['id']?>"><?= $currency['name']; ?></option>
        <?php endforeach;?>
    </select>
    <br>
    <label for="name">Feedback: </label><br>
    <input type="text" id="name" name="feedback"  class="form-control" ><br>
    <br>
    <label for="name">Income: </label><br>
    <input type="text" id="name" name="income"  class="form-control" ><br>
    <br>
    <label for="name">Expense: </label><br>
    <input type="text" id="name" name="expense"  class="form-control" ><br>
    <br>

    <input type="submit" value="Submit">
</form>
<?= $this->endSection()?>
