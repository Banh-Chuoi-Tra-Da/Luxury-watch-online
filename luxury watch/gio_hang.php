<?php
// require('header.php');
session_start();
if (isset($_SESSION['login'])) {
    echo "Giỏ hàng của bạn: " . $_SESSION['ten_dang_nhap'];
} else {
    // echo "Tài khoản";
    echo "<script type='text/javascript'>
    window.alert('Bạn chưa đăng nhập');
    window.location.href='index.php';
</script>";
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
<style>
      form {
        width: 1300px;
        margin: 30px auto;
        border-radius: 5px;
        background-color: #003366;
        padding: 10px;
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.4);
    }

    label {
        /* color:#98B4D4; //023e8a */
        color: white;
        font-weight: 470;

    }
    .cart-total{
        /* background-color: antiquewhite; */
        margin-left: 310px;
    }
</style>

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


    <div class="cart-total">
        <strong class="cart-total-title">Tổng Cộng:VND</strong>
        <span id="span-total">
            <?php echo $total; ?></span>
        <br> <br>
    </div>
    <a href="don_hang.php">Lịch sử đơn hàng</a>


<?php
$tongtien_paypal=round($total/23000); // Lấy ra số tiền cần thanh toán, đổi qua USD
$id = $_SESSION['id'];
// echo $id;
require('connect.php');

$sql = "SELECT * FROM tbl_nguoi_dung WHERE id=" . $id;

$ketQuaTruyVan = $con->query($sql);
$each = mysqli_fetch_array($ketQuaTruyVan);
?>
<input type="hidden" name="" id="tongtien" value="<?php echo $tongtien_paypal; ?>">
<!-- <a class="btn btn-success" href="thanh_toan.php">Thanh toán</a> -->
<form method="post" action="thanh_toan.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên người nhận</label>
        <input type="text" name="ten_nguoi_nhan" class="form-control" id="exampleInputEmail1" value="<?php echo $each['names']; ?>">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Số điện thoại</label>
        <input type="text" name="phone_number" class="form-control" id="exampleInputPassword1" value="<?php echo $each['phone_number']; ?>">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Địa chỉ</label>
        <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Dia chi" value="<?php echo $each['address']; ?>">

    </div>

    <script src="https://www.paypal.com/sdk/js?client-id=AW5Xm-3NNFQenC9Pp0Tuwtz1EdNs45u11tzDNGK_4X-hp1Wf8wZzyGWcYGxkdSmos8cEfOB_pB7b8Y4d&currency=USD"></script>
    <!-- Set up a container element for the button -->
    <div class="wrap" style="display:flex; flex-direction:column; justify-content:center;align-items:center;margin-top:30px;">

        <div id="paypal-button-container" style="">
            <!-- <button class="btn btn-primary">Thanh toán qua visa</button> -->

        </div>
        <button type="submit" class="btn btn-primary" > Cập nhập thông tin
        </button>
    </div>

    <script>
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                var tongtien=document.getElementById('tongtien').value;
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: tongtien // Can also reference a variable or function
                        }
                    }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For dev/demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    const transaction = orderData.purchase_units[0].payments.captures[0];
                    alert(`Transaction ${transaction.status}: ${transaction.id}\n\nThanh toán thành công`);
                    // window.location.replace('http://localhost/Luxury-watch-online/luxury%20watch/index.php')
                    // When ready to go live, remove the alert and show a success message within this page. For example:
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }
            // onCancle: function(data) {
            //     window.location.replace('http://localhost/Luxury-watch-online/luxury%20watch/index.php');

            // }
        }).render('#paypal-button-container');
    </script>

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
<!-- // Thanh toán qua paypal -->

</body>

</html>
