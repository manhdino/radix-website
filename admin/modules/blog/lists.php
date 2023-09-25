<?php
$data = [
  'pageTitle' => 'Danh sách  Blog'
];
layout('header','admin', $data);
layout('sidebar', 'admin',$data);
layout('breadcrumbs','admin' ,$data);

?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="5%">STT</th>
          <th>Tiêu đề</th>
          <th>Danh mục</th>
          <th>Thời gian</th>
          <th width="5%">Sửa</th>
          <th width="5%">Xóa</th>
        </tr>
      </thead>
      <tbody>
      <tr>
          <td width="5%">1</td>
          <td>Blog 1</td>
          <td>Blog 1 - 2</td>
          <td>2021</td>
          <td width="5%">1</td>
          <td width="5%">1</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


<?php
layout('footer');
?>