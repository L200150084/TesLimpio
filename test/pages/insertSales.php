<form method="POST" action="" id="form1">
    <table style="margin:0px auto">
        <tr>
            <td>Item ID</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="item_id" id="item_id"></td>
        </tr>
        <tr>
            <td>QTY</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="qty" id="qty"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="price" id="price"></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><input type=" text" class="form-control" name="total" id="total" readonly></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="sub" class="btn btn-primary" value="Submit"></td>
        </tr>
    </table>
</form>

<?php
if(isset($_POST['sub'])){
    $url = 'http://recruitment.api.makekimia.network/api/sales/insert';
    $ch = curl_init($url);
    $jsonData = array(
    'item_id'=>$_POST['item_id'],
    'qty'=>$_POST['qty'],
    'price'=>$_POST['price'],
    'total'=>$_POST['total'],
    );
    $jsonDataEncoded = json_encode($jsonData);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    $result = curl_exec($ch);
    }
?>