  <!-- Phần chính -->
  <div class="container_table">

      <table class="table_form">
          <tr>
              <th class="thead">#</th>
              <th class="thead">Khách Hàng</th>
              <th class="thead">Trạng Thái</th>
              <th class="thead">Phương Thức Thanh Toán</th>
              <th class="thead order-k">Hành Động</th>
          </tr>
          <?php
            if (isset($orders)) {
                foreach ($orders as $order) {
            ?>
                  <tr>
                      <td class="tbody"><?= $order['id'] ?></td>
                      <td class="tbody"><?= $order['full_name'] ?></td>
                      <td class="tbody"><?= $order['is_paid'] == 1 ? 'Đã thanh toán' : 'Chưa thanh toán' ?></td>
                      <td class="tbody"><?= $order['payment_method'] ?></td>
                      <td class="tbody order-k"><a href="index.php?act=updateOrder&id=<?= $order['id'] ?>"> Xem</a></td>
                  </tr>

          <?php
                }
            }
            ?>
      </table>
      <div class="clearfix"></div>
  </div>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <script>
      $(".nav").click(function() {
          $("#mySidenav").css('width', '70px');
          $("#main").css('margin-left', '70px');
          $(".logo").css('visibility', 'hidden');
          $(".logo span").css('visibility', 'visible');
          $(".logo span").css('margin-left', '-10px');
          $(".icon-a").css('visibility', 'hidden');
          $(".icons").css('visibility', 'visible');
          $(".icons").css('margin-left', '-8px');
          $(".nav").css('display', 'none');
          $(".nav2").css('display', 'block');
      });

      $(".nav2").click(function() {
          $("#mySidenav").css('width', '300px');
          $("#main").css('margin-left', '300px');
          $(".logo").css('visibility', 'visible');
          $(".icon-a").css('visibility', 'visible');
          $(".icons").css('visibility', 'visible');
          $(".nav").css('display', 'block');
          $(".nav2").css('display', 'none');
      });
  </script>


  </body>

  </body>

  </html>