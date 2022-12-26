<?php	
session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "final";
            
            $my_user = array();

            $conn = mysqli_connect($servername, $username, $password, $dbname);
           
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            
            try { 
                $sql = "SELECT users.first_name, 
                users.last_name,
                users.card_account
                FROM users
                INNER JOIN my_user
                ON my_user.user_id = users.id AND my_user.id = 1";
               $result = mysqli_query($conn, $sql); 
            } catch (mysqli_sql_exception $e) { 
               var_dump($e);
               exit; 
            } 
            
            while ($row = mysqli_fetch_array($result)) {
                $my_user['card_account'] = $row['card_account'];
                $my_user['first_name'] = $row['first_name'];
                $my_user['last_name'] = $row['last_name'];
             }
             $account_number=$_POST['account_number'];
             $subcategory_id=$_SESSION['subcategory_id'];
             $sql=mysqli_query($conn, "SELECT  title, img, id, total_cost FROM subcategories WHERE id='$subcategory_id'");
$subcategories=array();

while($row=mysqli_fetch_array($sql)){
    $subcategories['title']=$row['title'];
    $subcategories['total_cost']=$row['total_cost'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Anel & Manshuk/confirm.css">
    <title>Подтверждение</title>
</head>

<body>
    <div id="head">
        Каспи Платежи
    </div>
    <div id="main">
        <span id="title">Платеж</span>
        <hr> Вы оплачиваете:
        <table>
            <tr>
                <td class="gray">Наименование</td>
                <td><?php echo $subcategories['title']?></td>
            </tr>
            <tr>
                <td class="gray">Номер лицевого счета</td>
                <td><?php echo $account_number?></td>
            </tr>
            <tr>
                <td class="gray">Сумма платежа</td>
                <td><?php echo $subcategories['total_cost']?> ₸</td>

            </tr>
            <tr>
                <td class="gray">Комиссия</td>
                <td>0 ₸</td>
            </tr>
        </table>

        <hr> К оплате: <span id="right"><?php echo $subcategories['total_cost']?> ₸</span>
        <hr>
        <br>
        <hr>
        <div class="card">
            <img src="./image/gold.png" align="left">
            <span class="top-text">Kaspi Gold</span>
            <span class="sum"><?php echo $my_user['card_account']?> ₸</span>
        </div>
        <hr>
        <p align="center" class="gray">Комиссия 0 ₸</p>

        <div id="button">Подтвердить и оплатить <?php echo $subcategories['total_cost']?> ₸</div>
    </div>
</body>

</html>