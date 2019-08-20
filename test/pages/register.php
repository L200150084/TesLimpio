<form method="POST" action="" id="form1">
    <table style="margin:0px auto">
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="user_name" id="user_name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type=" text" class="form-control" name="user_email" id="user_mail"></td>
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
    

    $url = 'http://recruitment.api.makekimia.network/api/register';
    $ch = curl_init($url);
    $jsonData = array(
    'user_name' => $_POST['user_name'],
    'user_email' => $_POST['user_email']
    );
    $jsonDataEncoded = json_encode($jsonData);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    $result = curl_exec($ch);
    }
?>