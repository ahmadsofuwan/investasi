<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('asset/soft-ui/build/assets') ?>/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="<?= base_url('asset/soft-ui/build/assets') ?>/img/favicon.png" />
  <title>SignUp</title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="<?= base_url('asset/soft-ui/build/assets') ?>/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url('asset/soft-ui/build/assets') ?>/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Main Styling -->
  <link href="<?= base_url('asset/soft-ui/build/assets') ?>/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />

  <script src="<?= base_url('asset/tailwind/node_modules/sweetalert2/dist') ?>/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('asset/tailwind/node_modules/sweetalert2/dist') ?>/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url('asset/tailwind/') ?>/output.css">

</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">

  <!-- Navbar -->
  <nav class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
    <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
      <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-white lg:ml-0" href="<?= base_url() ?>"> Investasi </a>
      <button navbar-trigger class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden" type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
          <span bar1 class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
          <span bar2 class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
          <span bar3 class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
        </span>
      </button>
    </div>
  </nav>

  <main class="mt-0 transition-all duration-200 ease-soft-in-out">
    <section class="min-h-screen mb-32">
      <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl" style="background-image: url('<?= base_url('asset/soft-ui/build/assets') ?>/img/curved-images/curved14.jpg')">
        <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
        <div class="container z-10">
          <div class="flex flex-wrap justify-center -mx-3">
            <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
              <h1 class="mt-12 mb-2 text-white">Selemat Datang!</h1>
              <p class="text-white">Silahkan isi form di bawah ini dan inverstasi dengan senang </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
          <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
            <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">

              <div class="flex-auto p-6">
                <form role="form text-left" method="POST">
                  <div class="mb-4">
                    <input type="text" name="name" value="<?= old('name') ?>" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Name" aria-label="Name" />
                  </div>
                  <div class="mb-4">
                    <input type="text" name="username" value="<?= old('username') ?>" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="username" aria-label="username" />
                  </div>
                  <div class="mb-4">
                    <input type="email" name="email" value="<?= old('email') ?>" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                  </div>
                  <div class="mb-4">
                    <input type="number" name="wa" value="<?= old('wa') ?>" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="WhatsApp Number" />
                  </div>
                  <div class="mb-4">
                    <input type="password" name="password" value="<?= old('password') ?>" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                  </div>
                  <div class="mb-4">
                    <input type="text" name="reff" value="<?= old('reff') ?>" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Referral" aria-label="referral" />
                  </div>



                  <div class="border-t-2 border-gray-500 my-3 text-center">Optional</div>

                  <div class="mb-4">
                    <input type="text" name="rek" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Rekening" aria-label="referral" />
                  </div>
                  <div class="mb-4">
                    <input type="text" name="bankName" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Bank Name" aria-label="referral" />
                  </div>
                  <div class="mb-4">
                    <input type="text" name="bankAccout" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Bank Accout" aria-label="referral" />
                  </div>

                  <div class="min-h-6 pl-6.92 mb-0.5 block mt-3">
                    <input id="terms" class="w-4.92 h-4.92 ease-soft -ml-6.92 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" value="" checked />
                    <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700" for="terms"> I agree the <a href="javascript:;" class="font-bold text-slate-700">Terms and Conditions</a> </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Sign up</button>
                  </div>
                  <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a href="<?= base_url('login') ?>" class="font-bold text-slate-700">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

<?php if (!empty(session()->getFlashData('error'))) { ?>
  <script>
    Swal.fire({
      title: 'Error!',
      text: '<?= session()->getFlashData('error') ?>',
      icon: 'error',
      confirmButtonText: 'Ok'
    })
  </script>
<?php } ?>
<!-- plugin for scrollbar  -->
<script src="<?= base_url('asset/soft-ui/build/assets') ?>/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="<?= base_url('asset/soft-ui/build/assets') ?>/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>

</html>