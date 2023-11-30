<style>
    /* Common styles */
    .custom-form {
        max-width: 900px;
        margin: 10px auto;
        padding: 50px 68px 50px 50px;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .custom-span {
        display: block;
        margin-bottom: 5px;
        color: #495057;
    }

    .custom-input,
    .custom-textarea,
    .input {
        width: 100%;
        padding: 8px;
        outline: none;
        margin-bottom: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    .custom-button,
    .btn_inp {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .custom-button:hover,
    .btn_inp:hover {
        background-color: #0056b3;
    }

    /* Table styles */
    .table-container {
        margin-top: 20px;
    }

    .table-container table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .table-container th,
    .table-container td {
        border: 1px solid #dee2e6;
        padding: 8px;
        text-align: left;
    }

    .table-container th {
        background-color: #007bff;
        color: #fff;
    }

    .table-container img {
        max-width: 50px;
        max-height: 50px;
    }

    /* Additional styles for form layout */
    label {
        display: block;
        margin-bottom: 5px;
        color: #495057;
    }

    select,
    input[type="submit"] {
        padding: 8px;
        border-radius: 4px;
    }

    /* Adjustments for responsiveness */
    @media (max-width: 768px) {
        .custom-form {
            padding: 20px;
        }

        /* Add more responsive styles as needed */
    }
</style>

</head>

<body>
    <?php

    ?>
    <form class="custom-form" action="index.php?act=updateOrder" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idOrder" value="<?= $order['id'] ?>">

        <span class="custom-span">Tên khách hàng</span>
        <input class="custom-input" type="text" name="full_name" value="<?= $order['full_name'] ?>"><br>

        <label for=""> Phương thức thanh toán</label>
        <input type="text" name="price" class="input" value="<?= $order['payment_method'] ?>"><br>

        <label for="">Trạng Thái</label>
        <input type="text" name="trangthai" class="input" value="<?= $order['is_paid'] == 1 ? 'Đã thanh toán' : 'Chưa thanh toán' ?>"><br>


        <tr>
            <h3 style="padding-top:50px; padding-bottom:30px;">Thông tin đơn hàng</h3>
            <td>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                    </tr>
                    <?php
                    $total = 0;
                    if (isset($order_detail) && (count($order_detail) > 0)) {
                        foreach ($order_detail as $item) {
                            $total += $item['amount'];
                    ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><img src="../layout/img/<?= $item['image'] ?>" alt="" style="width:50px; height:50px;"></td>
                                <td><?= $item['amount'] ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                    <tr>
                        <th colspan="3">Tổng đơn hàng</th>
                        <th>
                            <div><?= $total ?></div>
                        </th>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>Thay đổi trạng thái</td>
            <td>
                <select required name="status" id="status">
                    <option value="1" <?= $order['is_paid'] == 1 ? 'selected' : '' ?>>Đã thanh toán</option>
                    <option value="0" <?= $order['is_paid'] == 0 ? 'selected' : '' ?>>Chưa thanh toán</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="thaydoi" value="Thay đổi trạng thái"></td>
        </tr>
        <input type="hidden" name="id" value="<?= $order['id'] ?>">
        </table>
    </form>