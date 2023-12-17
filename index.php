<?php include('inc_header.php') ?>
<h3>LOGIN KE HALAMAN ADMIN</h3>
<?php
$email      = '';
$password   = '';
$err        = '';

if(isset($_POST['login'])){
    $email      =$_POST['email'];
    $password   =$_POST['password'];

    if($email == 'admin' or $password == 'admin'){
        echo "sukses";
        header("location: halaman.php");
    }else{
        echo "gagal";
        header("location: index.php");
    }
    exit();
}
?>
<?php if($err){
    echo "<div class='error'><ul class='pesan'>$err</ul></div>";
}?>
<form action="" method="POST"></form>
<style>
    table{
        width: 600px;
    }

    @media screen and(max-width: 700px){
        table{
            width: 90%;
        }
    }
    table td{
        padding: 50px;
    }
    td.label {width: 40%;}
    .input {
        border: 1px solid #CCCCCC;
        background-color: #dfdfdf;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
    }
    input.tbl-bitu {
        border: none;
        background-color: #3f72af;
        border-radius: 20px;
        margin-top: 20px;
        padding: 15px 20px 15px 20px;
        color: #FFFFFF;
        cursor:pointer;
        font-weight: bold;
    }
    input.tbl-biru:hover{
        background-color: #fc5185;
        text-decoration: none;
    }
    .error{
        padding: 20px;
        background-color: #f44336;
        color: white;
        margin-bottom: 15px;
    }
    .sukses{
        padding: 20px;
        background-color: #2196F3;
        color: white;
        margin-bottom: 15px;
    }
</style>
<form action="" method="POST">
    <tabel>
        <tr>
            <td class ="label">Email</td>
            <td><input type="text" name="email" class="input" placeholder="admin" required></td>
        </tr>
        <td class ="label">Password</td>
            <td><input type="password" name="password" class="input" placeholder="admin" required /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="login" value="Login" class="tbl-biru"></td>
        </tr>
    </tabel>
</form>

<?php include('inc_footer.php') ?>