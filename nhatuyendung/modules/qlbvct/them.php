<p>Thêm bài viết công ty</p>
<!-- dữ liệu được lấy phụ thuộc vào thuộc tính name và text -->

<table border="1" width="100%"  style="border-collapse: collapse;">
  <!-- Gửi dữ liệu  -->
  <!-- enctype="multipart/form-data để gửi file qua form bằng pt post -->
<form method="POST" action="modules/qlbvct/xuly.php"  enctype="multipart/form-data" >
<tr>
    <td>Tên công ty </td>
    <td><input type="text" name="tencongty"></td>
  </tr>

<tr>
    <td>Ngành nghề</td>
    <td>
      <select name ="nganhnghe">
      <?php
      $sql_nn="select *from nganhnghe order by id_nganhnghe asc";
      $query_nn=mysqli_query($mysqli,$sql_nn);
      while($row_nn=mysqli_fetch_array($query_nn)){
      ?>
      <option value="<?php echo $row_nn['id_nganhnghe'] ?>"><?php echo $row_nn['tennganhnghe'] ?></option>
      <?php
      }
      ?>
      </select>
    </td>
  </tr>
  
  <tr>
    <td>Địa điểm</td>
    <td>
      <select name ="diadiem">
      <?php
      $sql_dd="select *from diadiem order by id_diadiem asc";
      $query_dd=mysqli_query($mysqli,$sql_dd);
      while($row_dd=mysqli_fetch_array($query_dd)){
      ?>
      <option value="<?php echo $row_dd['id_diadiem'] ?>"><?php echo $row_dd['tendiadiem'] ?></option>
      <?php
      }
      ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>Tên bài viết </td>
    <td><input type="text" name="tenbaiviet"></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><textarea name="mota" rows="10" style="resize:none;"></textarea></td>
    <!-- style="resize: none; không được phép kéo -->
  </tr>

  <tr>
    <td>Nội dung</td>
    <td><textarea name="noidung" rows="10" style="resize:none;"></textarea></td>
    <!-- style="resize: none; không được phép kéo -->
  </tr>

  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Quy mô </td>
    <td><input type="text" name="quymo"></td>
  </tr>
  <tr>
    <td>Thành lập</td>
    <td><input type="text" name="thanhlap"></td>
  </tr>
  <tr>
    <td>Email </td>
    <td><input type="text" name="email"></td>
  </tr>
   
 
  <tr>
    <td>SĐT</td>
    <td><input type="text" name="sdt"></td>
  </tr>
  
  <tr>
    <td>Tình trạng</td>
    <td>
        <select name="tinhtrang">
            <option value="1">Kích hoạt</option>
            <option value="1">Ẩn</option>
        </select>

    </td>
</tr>
  
<tr>
    <td colspan="2"><input type="submit" name="thembv" value="Thêm bài viết"> </td>
  </tr>
  </form>
</table>

