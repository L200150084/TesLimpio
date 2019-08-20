<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
        $url = "http://recruitment.api.makekimia.network/api/product";
        $data = json_decode(file_get_contents($url), true);
        // echo (count($data['items']));
        // echo json_encode($data);
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Id Product</th>
            <th>Nama</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
    </thead>
    <?php
        for($i=0;$i<count($data['items']);$i++){
    ?>
    <tbody>
        <tr>
            <td><?=$data['items'][$i]['product_id'];?></td>
            <td><?=$data['items'][$i]['name'];?></td>
            <td><?=$data['items'][$i]['price'];?></td>
            <td><?=$data['items'][$i]['stock'];?></td>
        </tr>
    </tbody>
    <?php
        }        
?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rs