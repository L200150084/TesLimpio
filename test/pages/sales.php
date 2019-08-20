<a href="index.php?p=insertSales" class="btn btn-success">+</a>
<form method="POST" action="" id="form1">
    <table style="margin:0px auto">
        <tr>
            <td>Signature Key</td>
            <td>:</td>
            <td><input type=" text" class="form-control" name="signature" id="user_mail"></td>
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
    

    $url = 'http://recruitment.api.makekimia.network/api/sales';
    $ch = curl_init($url);
    $jsonData = array(
    'signature_key' => $_POST['signature']
    );
    $jsonDataEncoded = json_encode($jsonData);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    $result = curl_exec($ch);
    }
?>