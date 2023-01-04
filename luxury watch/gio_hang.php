<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "Xin chào " . $_SESSION['ten_dang_nhap'];
} else {
    echo "Tài khoản";
}
if (empty($_SESSION['ten_dang_nhap'])) {
    header('location:dang_nhap.php');
}
if (empty($_SESSION['gio_hang'])) {
    echo "<script type='text/javascript'>
            window.alert('Bạn chưa thêm sản phẩm nào vào giỏ hàng. Điều hướng về trang chủ');
            window.location.href='index.php';
        </script>";
}
$gio_hang = $_SESSION['gio_hang'];
$sum = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <table class="table table-striped table-bordered">
            <tr>
                <th>STT</th>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
                <th>Xóa</th>

            </tr>
            <?php $i = 1;
            $total = 0;
            $totalFull = 0; ?>
            <?php foreach ($gio_hang as $id => $row) : ?>
                <tr>

                    <td><?php echo (int)$i++; ?></td>

                    <td><img src="images/<?php echo $row['anh']; ?>" alt="" height="150px"></a></td>
                    <td><?php echo $row['tensanpham']; ?></a></td>
                    <!-- <td></a></td> -->
                    <td>
                        <!-- <a href="update_quantity_in_cart.php?id=<?php echo $id; ?>&type=decre">
                            - </a> -->
                        <button class="btn-update-quantity" data-id="<?php echo $id; ?>" data-type="0">-
                        </button>
                        <span class="span-quantity">
                            <?php echo $row['soluongmua']; ?>

                        </span>

                        <button class="btn-update-quantity" data-id="<?php echo $id; ?>" data-type="1">+
                        </button>

                    </td>
                    <td>
                        <span class="span-price"><?php echo $row['gia_ban']; ?></span>

                    <td>
                        <span class="span-sum">
                            <?php
                            $sum = $row['soluongmua'] * $row['gia_ban'];

                            $total += $sum;
                            echo $sum;
                            ?>
                        </span>

                    </td>
                    <td>
                        <button class="btn-delete" data-id="<?php echo $id; ?>">
                            X
                        </button>
                    </td>

                </tr>

    </div>

<?php endforeach ?>
</table>
</div>

<div class="cart-table-button m-t-10">
    <div class="cart-table-button--left"> </div>
    <div class="cart-total">
        <strong class="cart-total-title">Tổng Cộng:$</strong>
        <span id="span-total">
            <?php echo $total; ?></span>
        <br> <br>
    </div>
</div>
<?php
$id = $_SESSION['id'];
// echo $id;
require('connect.php');

$sql = "SELECT * FROM tbl_nguoi_dung WHERE id=" . $id;

$ketQuaTruyVan = $con->query($sql);
$each = mysqli_fetch_array($ketQuaTruyVan);
?>
<!-- <a class="btn btn-success" href="thanh_toan.php">Thanh toán</a> -->
<form method="post" action="thanh_toan.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên người nhận</label>
        <input type="text" name="ten_nguoi_nhan" class="form-control" id="exampleInputEmail1" value="<?php echo $each['names']; ?>">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">SDT</label>
        <input type="text" name="phone_number" class="form-control" id="exampleInputPassword1" value="<?php echo $each['phone_number']; ?>">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Dia chi</label>
        <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Dia chi" value="<?php echo $each['address']; ?>">

    </div>

    <button type="submit" class="btn btn-primary">Thanh toán</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(".btn-update-quantity").click(function() {
            // alert("Nút đã bấm");
            let btn = $(this);
            let id = btn.data('id');
            let type = parseInt(btn.data('type'));
            $.ajax({
                type: "GET",
                url: "update_quantity_in_cart.php",
                data: {
                    id,
                    type
                },
                // dataType: "dataType",
                success: function() {
                    // alert("Sucess");
                    let parent_tr = btn.parents('tr');
                    let price = parent_tr.find('.span-price').text();
                    let quantity = parent_tr.find('.span-quantity').text();
                    if (type == 1) {
                        quantity++;

                    } else {
                        quantity--;

                    }
                    if (quantity == 0) {

                        parent_tr.remove();
                    } else {
                        parent_tr.find('.span-quantity').text(quantity);
                        let sum = price * quantity;
                        parent_tr.find('.span-sum').text(sum);

                    }
                    getTotal();

                }
            });
            $(".btn-delete").click(function() {
                let btn = $(this);
                let id = parseInt(btn.data('id'));
                $.ajax({
                    type: "GET",
                    url: "delete_from_cart.php",
                    data: {
                        id
                    },
                    // dataType: "dataType",
                    success: function(data) {
                        btn.parents('tr').remove();
                        getTotal();

                    }
                });

            })

            function getTotal() {
                let total = 0;
                $(".span-sum").each(function() {
                    total += parseFloat($(this).text());
                });
                $("#span-total").text(total);

            }
       
        });
    });
</script>
</body>

</html>