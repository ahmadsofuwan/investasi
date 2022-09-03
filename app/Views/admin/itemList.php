  <?= $this->extend('layout/page') ?>
  <?= $this->section('content') ?>
  <div class="flex flex-wrap mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="px-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex h-12">
          <div class="w-1/2 pt-5 ">
            <h6 class="font-semibold text-10xl">Item List</h6>
          </div>
          <div class="w-1/2 flex justify-end pr-5">
            <svg viewBox="0 0 24 24" class="stroke-2" onclick="location.replace('<?= base_url('admin/item') ?>')">
              <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
            </svg>
          </div>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center justify-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th class="head-table">Name</th>
                  <th class="head-table">Price</th>
                  <th class="head-table">Expired</th>
                  <th class="head-table">Profit</th>
                  <th class="head-table">Created</th>
                  <th class="head-table">Created Date</th>
                  <th class="head-table">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($dataList as $key => $value) { ?>
                  <tr pkey="<?= $value['pkey'] ?>">
                    <td class="td-card">
                      <?= $value['name'] ?>
                    </td>
                    <td class="td-card">
                      <?= number_format($value['price']) ?>
                    </td>
                    <td class="td-card">
                      <?= number_format($value['expired']) ?>
                    </td>
                    <td class="td-card">
                      <?= number_format($value['profit']) ?>%
                    </td>
                    <td class="td-card">
                      <?= $value['accountname'] ?>
                    </td>
                    <td class="td-card">
                      <?= date('d / m / Y h:i', $value['date_at']) ?>
                    </td>
                    <td class="td-card">
                      <div class="flex flex-wrap">
                        <div class="flex justify-center w-1/3 mx-1">
                          <button type="botton" class="btn-delete inline-block bg-danger text-white text-xs leading-tight capitalize rounded shadow-md  transition duration-150 ease-in-out w-fit p-1.5">
                            Delete
                          </button>
                        </div>
                        <div class="flex justify-center w-1/3 mx-1">
                          <button type="botton" class="btn-delete inline-block bg-success text-white text-xs leading-tight capitalize rounded shadow-md  transition duration-150 ease-in-out w-fit p-1.5">
                            Edit
                          </button>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('.btn-delete').click(function() {
        var obj = $(this);
        var pkey = $(obj).closest('tr').attr('pkey');
        Swal.fire({
          title: 'yakin?',
          text: "Data Akan Di Hapus Secara Permanen",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
                url: '<?= base_url('ajax') ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                  action: 'deleteItem',
                  pkey: pkey,
                },
              })
              .done(function(status) {
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Berhasil Di Deleted',
                  showConfirmButton: false,
                  timer: 1500
                })
                $(obj).closest('tr').remove();
              }).fail(function() {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Something went wrong!',
                })
              })

          }
        })




      })
    });
  </script>

  <?= $this->endSection() ?>