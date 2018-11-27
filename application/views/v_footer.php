<!-- footer -->
      <script src="<?php echo base_url('assets') ?>/js/custom.js"></script>
      <link rel="stylesheet" type="text/js" href="<?php echo base_url('assets') ?>/js/bootstrap.min.js">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/sweetalert2@7.15.1/dist/sweetalert2.all.js"></script>

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
            $('.add_cart').click(function(){
              var barang_id = $(this).data("barang_id");
              var nama_barang= $(this).data("nama_barang");
              var harga = $(this).data("harga");
              var quantity     = $('#' + produk_id).val();
              $.ajax({
                url : "<?php echo base_url('');?>dashboard/addToCart",
                method : "POST",
                data : {barang_id: barang_id, nama_barang: nama_barang, harga: harga, quantity: quantity},
                success: function(data) {
                  alert(data);
                }
              });
            });
            $('#detail_cart').load("<?php echo base_url();?>cart/load_cart");
            $(document).on('click','.hapus_cart',function(){
              var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
              $.ajax({
                url : "<?php echo base_url();?>cart/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                  $('#detail_cart').html(data);
                }
              });
            });
        } );
      </script>
</body>
</html>
