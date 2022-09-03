  <?= $this->extend('layout/pageCustomer') ?>
  <?= $this->section('content') ?>
  <div class="w-full px-6 py-6 mx-auto">
      <!-- row 1 -->
      <div class="flex flex-wrap mx-3">
          <?php foreach ($item as $key => $value) { ?>

              <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                      <div class="flex-auto p-4">
                          <div class="flex flex-row -mx-3">
                              <div class="flex-none w-2/3 max-w-full px-3">
                                  <div class="text-center">
                                      <p class="mb-0 font-semibold text-lg text-center text-gray-800"><?= $value['name'] ?></p>
                                      <h5 class="mb-0 font-bold">
                                          $<?= number_format($value['price']) ?>
                                      </h5>
                                      <div class="text-sm">
                                          <span class="text-pink-500">Profit</span> <span class="leading-normal text-sm font-weight-bolder text-lime-500">55%</span>
                                      </div>

                                  </div>
                              </div>
                              <button class="btn-buy">
                                  <div class="px-3 text-right basis-1/3 w-12 h-12">
                                      <div class="inline-block w-12 h-12 hover:w-14 hover:h-14 hover:relative text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 hover:from-purple-800 hover:to-pink-600">
                                          <svg style="width:24px;height:24px" class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white" viewBox="0 0 24 24">
                                              <path fill="currentColor" d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />
                                          </svg>
                                      </div>
                                  </div>
                                  <span class="font-bold text-gray-500 text-xs relative">Buy</span>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>

          <?php } ?>

      </div>

  </div>

  <?= $this->endSection() ?>