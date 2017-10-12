<?php
$name="Kamran";
$consumer_id=1243132128739;
$payment_id=123456789;
$month="jan_2014";
$amount=450;
?>
<html>
    <head>
        <title>Bill Payment Receipt</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body align=center>
        <h1>JKPDD Online Bill Payment</h1>
        <h2>Receipt</h2>
        Name: <?php echo $name; ?><br>
        Consumer ID: <?php echo $consumer_id; ?><br>
        Payment ID: <?php echo $payment_id; ?><br>
        <table align="center" border="1" cellspacing="1" cellpadding="10">
            <tr>
                <th>Particulars</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td rowspan="5">Bill Payment for the month: <?php echo $month; ?></td>
                <td rowspan="5"> Rs. <?php echo $amount; ?></td>
            </tr>
        </table>
    </body>
</html>
