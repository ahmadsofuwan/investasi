  <?= $this->extend('layout/page') ?>
  <?= $this->section('content') ?>
  <div class="flex flex-wrap mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="px-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent h-12 flex justify-center">
          <div class="pt-5 flex justify-center ">
            <h6 class="font-semibold text-2xl">Item Form</h6>
          </div>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <form method="POST" action="<?= base_url('admin/item') ?>" class="justify-center p-5 lg:p-10">
              <input type="hidden" name="action" value="<?= isset($data) ? 'update' : 'insert' ?>">
              <input type="hidden" name="pkey" value="<?= isset($data) ? $data['pkey'] : '' ?>">

              <div class="flex flex-wrap w-full my-3 ">
                <label class="label-input">name</label>
                <input type="text" name="name" value="<?= old('name') ?><?= isset($data) ? $data['name'] : '' ?>" class="rounded-xl w-1/2 mr-auto">
              </div>
              <div class="flex flex-wrap w-full my-3 ">
                <label class="label-input">price</label>
                <input type="number" name="price" value="<?= old('price') ?><?= isset($data) ? $data['price'] : '' ?>" class="rounded-xl w-1/2 mr-auto">
              </div>

              <div class="flex flex-wrap w-full my-3">
                <label class="label-input">expired time</label>
                <input type="number" name="expired" value="<?= old('expired') ?><?= isset($data) ? $data['expired'] : '' ?>" class="rounded-xl w-1/2 mr-auto">
              </div>

              <div class="flex flex-wrap w-full my-3">
                <label class="label-input">percentage profit</label>
                <input type="number" name="profit" value="<?= old('profit') ?><?= isset($data) ? $data['profit'] : '' ?>" class="rounded-xl w-1/2 mr-auto">
              </div>

              <div class="flex flex-wrap justify-center w-full my-5 ">
                <div class="flex justify-center w-1/3 mx-2">
                  <button type="submit" class="inline-block px-6 py-2.5 bg-primary text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full">Submit</button>
                </div>
                <div class="flex justify-center w-1/3 mx-2">
                  <a href="<?= base_url('admin/itemList') ?>" class="text-center inline-block px-6 py-2.5 bg-warning text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full">Cancel</a>
                </div>
              </div>

            </form>



          </div>
        </div>
      </div>
    </div>
  </div>
  <?= $this->endSection() ?>