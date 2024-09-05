<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas Mandiri</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
  <body>
    {{-- Navbar Start --}}
    <nav class="bg-[#A4CAFE] border-gray-200 dark:bg-gray-900">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          {{-- Logo Brand --}}
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="img/Logo Panjang Putih.png" class="h-8" alt="Flowbite Logo" />
        </a>
        {{-- Hamburger Menu --}}
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        {{-- List Menu --}}
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Help</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Icons">
                      <path id="Vector" d="M12.5922 23.6998L12.5922 23.6997C12.5608 23.6486 12.557 23.6123 12.5585 23.5886C12.5602 23.5622 12.5705 23.5278 12.599 23.489C12.6591 23.4073 12.7858 23.3296 12.9509 23.3296C13.1448 23.3296 13.361 23.462 13.675 23.7374L13.6751 23.7374C14.0286 24.0474 14.4929 24.2358 15.0001 24.2358C15.5071 24.2358 15.9715 24.0475 16.325 23.7375C16.6393 23.462 16.8553 23.3296 17.0493 23.3296C17.2144 23.3296 17.3411 23.4073 17.4012 23.489C17.4297 23.5278 17.44 23.5622 17.4417 23.5886C17.4433 23.6123 17.4394 23.6486 17.408 23.6997C16.9107 24.5099 16.018 25.0483 15.0001 25.0483C13.9821 25.0483 13.0894 24.5098 12.5922 23.6998Z" fill="white" stroke="white"/>
                      <mask id="mask0_440_5547" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="2" width="22" height="20">
                       <g id="path-3-inside-1_73_564">
                      <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M24.0625 13.2666C24.0625 9.65573 22.2702 6.28029 19.2788 4.25772L17.7073 3.19509C16.0718 2.08927 13.9282 2.08927 12.2927 3.19509L10.7211 4.25771C7.72981 6.28029 5.93749 9.65572 5.93749 13.2666V15.5793C5.19588 16.243 4.72916 17.2076 4.72916 18.2812C4.72916 20.2833 6.35213 21.9062 8.35416 21.9062H21.6458C23.6479 21.9062 25.2708 20.2833 25.2708 18.2812C25.2708 17.2076 24.804 16.243 24.0625 15.5793V13.2666Z" fill="white"/>
                       </g>
                      </mask>
                       <g mask="url(#mask0_440_5547)">
                      <path id="Vector_3" d="M4.81896 15.0793H4.62499V15.0451C4.65178 15.0143 4.67894 14.9838 4.70647 14.9536L4.81896 15.0793ZM5.10128 13.8953L4.98616 13.7666H5.93749H7.24999V15.0793H6.161L5.10128 13.8953ZM5.93749 12.7666H4.63522C4.7864 9.07618 6.60495 5.65133 9.57749 3.45896L10.3069 4.53777L11.0494 5.63587C8.79695 7.33663 7.41031 9.94806 7.26304 12.7666H5.93749ZM11.1353 3.97764L10.4002 2.89036L11.1433 2.38786L11.8785 3.47514L12.6137 4.56243L11.8705 5.06494L11.1353 3.97764ZM13.462 4.03176L11.9831 1.84454C13.8544 0.789452 16.1456 0.789451 18.0169 1.84453L17.2931 2.91502L16.538 4.03176C15.5679 3.56038 14.4321 3.56038 13.462 4.03176ZM18.1215 3.47515L18.8566 2.38786L19.5998 2.89035L18.8646 3.97765L18.1294 5.06493L17.3863 4.56244L18.1215 3.47515ZM19.693 4.53778L20.4225 3.45896C23.395 5.65133 25.2136 9.07617 25.3648 12.7666H24.0625H22.7369C22.5897 9.94806 21.203 7.33663 18.9505 5.63587L19.693 4.53778ZM24.0625 13.7666H25.0139L24.8987 13.8953L23.839 15.0793H22.75V13.7666H24.0625ZM22.75 16.0793H22.9439L22.8146 16.2238L22.75 16.166V16.0793ZM23.5236 16.931L24.286 16.0793H25.875H26.066C26.3262 16.6007 26.4972 17.1749 26.5583 17.7812H23.9043C23.8358 17.4698 23.7045 17.1819 23.5236 16.931ZM22.1458 20.5395C23.0216 20.3465 23.7111 19.657 23.9041 18.7812H26.5583C26.3242 21.1089 24.4735 22.9596 22.1458 23.1937V20.5395ZM25.375 15.0793H25.181L25.2935 14.9536C25.3211 14.9837 25.3482 15.0143 25.375 15.0451V15.0793ZM21.1458 20.5937V23.2187H8.85416V20.5937H21.1458ZM7.85416 20.5395V23.1937C5.52649 22.9596 3.67574 21.1089 3.44166 18.7812H6.09585C6.28889 19.657 6.97837 20.3465 7.85416 20.5395ZM6.09567 17.7812H3.44171C3.5028 17.1749 3.67374 16.6007 3.93398 16.0793H4.12499H5.71398L6.47633 16.931C6.29545 17.1819 6.16415 17.4698 6.09567 17.7812ZM7.18537 16.2238L7.05602 16.0793H7.24999V16.166L7.18537 16.2238Z" fill="white" stroke="white"/>
                       </g>
                     </g>
                   </svg>
                 </a>
              </li>
            <li>
              <button type="button" class="flex text-sm bg-transparent rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                  <span class="sr-only">Open user menu</span>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="1" y="0.65625" width="30" height="30" rx="15" stroke="white" stroke-linecap="round"/>
                       <path d="M19.9271 8.40609C19.9271 10.575 18.1688 12.3332 16 12.3332C13.8312 12.3332 12.0729 10.575 12.0729 8.40609C12.0729 6.23721 13.8312 4.479 16 4.479C18.1688 4.479 19.9271 6.23721 19.9271 8.40609Z" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                     <path d="M23.5521 21.6979C23.5521 22.9976 22.8161 24.2598 21.4542 25.2325C20.0941 26.2042 18.1686 26.8333 16 26.8333C13.8314 26.8333 11.9059 26.2042 10.5458 25.2325C9.18391 24.2598 8.44791 22.9976 8.44791 21.6979C8.44791 20.3982 9.18391 19.136 10.5458 18.1633C11.9059 17.1917 13.8314 16.5625 16 16.5625C18.1686 16.5625 20.0941 17.1917 21.4542 18.1633C22.8161 19.136 23.5521 20.3982 23.5521 21.6979Z" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-gray-200 divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                      <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                      <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Pengaturan Akun</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Pesanan Saya</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
                    </li>
                  </ul>
                </div>
             </li>
           </ul>
         </div>
       </div>
     </nav>

    {{--Artikel Start --}}
    <div class="bg-[#E1EFFE] grid grid-cols-3 gap-4 px-4 py-8">
        <div class=""></div>
            <div class="bg-white p-5 rounded-xl shadow-lg shadow-gray-500" >
                <div class="grid grid-cols-1">
                    <div class="flex justify-between text-base">
                        <div class="flex w-64 text-bold font-bold">Bayar Dalam</div>
                        <div class="text-bold text-bold text-red-400 gap-5">23 jam 59 menit 29 detik</div>
                    </div>
                    <div class="text-bold text-right gap-5 text-[#D1D5DB] text-base">Jatuh tempo 05 okt 2024,13.26</div>
                    <div class="flex justify-start text-xs mt-2">
                        <div class="h-10 w-10">
                            <img src="img/Foto Konten.png" alt="">
                        </div>
                        <div class="content-center font-bold ml-2 text-base">Bank BRI</div>
                    </div>
                    <div class="mt-1">
                      <div class="grid grid-rows-5 grid-flow-col gap-1 text-base">
                        <h5 class="font-bold mx-2">No.Rekening:</h5>
                         <h5 class="font-bold mx-2 text-xl">128 0812 34556 7897 <a href="#" class="font-bold text-base">SALIN</a></h5>
                        </div>
                          <div class="text-base mx-2 font-semibold">Bayar pesanan ke Virtual Account di atas sebelum</div>
                          <div class="text-base mx-2 font-semibold">membuat pesanan kembali dengan Virtual Account</div>
                        <div class="text-base mx-2 font-semibold">agar nomer tetap sama </div>
                    <div class="text-base mt-4 mx-2 font-semibold">
                       Hanya menerima dari bank BRI
                     </div>
              <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
            <span>Petunjuk Transfer mBanking</span>
                <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
        <div class="text-base mx-2 grid-cols-5 gap-5">
          <div class="m-[0_0_0.8rem_0] flex flex-row self-start w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.6rem_0.4rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <p class="font-semibold"> Masuk ke menu <a href="#" class="font-bold">Mobile Bank BRI </a> kemudian,pilih <a href="#" class="font-bold">Pembayaran > BRIVA</a></p>
          </div>
          <div class="m-[0_0_0.8rem_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0.2rem_0.3rem_0.2rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <P class="font-semibold">Masukan <a href="#" class="font-bold">Nomer BRIVA</a> 128 081234567890</P>
          </div>
          <div class="m-[0_0.2rem_0_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.3rem_2.8rem_0] w-[1.8rem] h-[0.8rem]">
            </div>
            <P class="font-semibold"> Masukan <a href="#" class="font-bold"> PIN </a> Anda kemudian pilih <a href="#"> <a href="#"> <a href="#" class="font-bold"> Send</a>
              .apabila pesan konfirmasi untuk transaksi menggunakan SMS muncul pilih <a href="#" class="font-bold"> OK. </a>Sttatus transaksi akan di kirimkan melalui SMS dan dapat sebagai bukti pembayaran.</a></P>
          </div>
        </div>
      </div>
    </div>
    <h2 id="accordion-collapse-heading-2">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
        <span>Petunjuk Transfer iBanking</span>
        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
        <div class="text-base mx-2 grid-cols-5 gap-5">
          <div class="m-[0_0_0.8rem_0] flex flex-row self-start w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.6rem_0.4rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <p class="font-semibold"> Pilih menu <a href="#" class="font-bold"> Pembayaran </a></p>
          </div>
          <div class="m-[0_0_0.8rem_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0.2rem_0.3rem_0.2rem_0] w-[0.8rem] h-[0.8rem]">
             </div>
              <P class="font-semibold">Pada kolom navigasi kiri,dalam menu<a href="#" class="font-bold"> Pembayaran,</a> pilih <a href="#" class="font-bold">BRIVA</a></P>
            </div>
           <div class="m-[0_0_0.8rem_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0.2rem_0.3rem_0.2rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <P class="font-semibold">Pilih rekening asal,lalu pilih<a href="#" class="font-bold"> Isi Kode Bayar </a> dan masukan <a href="#" class="font-bold"> Nomer Virtual Account </a> <a href="#" class= "text-red-400"> 128 081234567890</a> Kemudian pilih <a href="#" class="font-bold">Kirim.</a></P>
          </div>
          <div class="m-[0_0.2rem_0_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.3rem_2.8rem_0] w-[1.8rem] h-[0.8rem]">
            </div>
             <p class="font-semibold">Pemeriksa informasi yang tertera di layar.Pastikan Merchant adalah Ngabring. Total tagihan sudah benar dan username kamu xxxx.jika benar, masukan password iBangking and mToken kamu, kemududian klik kirim</p>
          </div>
        </div>
      </div>
    </div>
    <h2 id="accordion-collapse-heading-3">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
        <span>Petunjuk Transfer ATM</span>
        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
      <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
        <div class="text-base mx-2 grid-cols-5 gap-5">
          <div class="m-[0_0_0.8rem_0] flex flex-row self-start w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.6rem_0.4rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <p class="font-semibold"> Pilih <a href="#" class="font-bold"> Transaksi Lainnya > Pembayaran > Lainnya > BRIVA.</a></p>
          </div>
          <div class="m-[0_0_0.8rem_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0.2rem_0.3rem_0.2rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <P class="font-semibold"> Masukan <a href="#" class="font-bold"> Nomer BRIVA </a> 128 081234567890 kemudian pilih <a href="#" class="font-bold"> Benar.</a></P>
          </div>
          <div class="m-[0_0.2rem_0_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.3rem_2.8rem_0] w-[1.8rem] h-[0.8rem]">
            </div>
            <P class="font-semibold"> Periksa nomer yang tertera di layar. pastikan Marchat adalah <a href="#" class="font-bold"> Ngabring. Total Tagihan </a> Sudah benar dan usernamae kamu <a href="#" class="font-bold"> xxxx. </a> jika benar,pilih <a href="#" class="font-bold">Ya.</a></P>
          </div>
        </div>
      </div>
    </div>
    <h2 id="accordion-collapse-heading-4">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
        <span>Petunjuk Transfer Mini ATM</span>
        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
      <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
        <div class="text-base mx-2 grid-cols-5 gap-5">
          <div class="m-[0_0_0.8rem_0] flex flex-row self-start w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.6rem_0.4rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <p class="font-semibold"> Pilih <a href="#" class="font-bold"> mini ATM > Pembayaran > BRIVA</a></p>
          </div>
          <div class="m-[0_0_0.8rem_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0.2rem_0.3rem_0.2rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <P class="font-semibold">Geser Kartu debit BRI anda.</P>
          </div>
          <div class="m-[0_0.2rem_0_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.3rem_2.8rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <P class="font-semibold"> Masukan<a href="#" class="font-bold"> Nomer BRIVA</a>  128 081234567890 kemudian PILIH <a href="#" class="font-bold"> OK.</a></P>
          </div>
          <div class="m-[0_0.2rem_0_0] flex flex-row w-[fit-content] box-sizing-border">
           <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.3rem_2.8rem_0] w-[0.8rem] h-[0.8rem]">
           </div>
           <P class="font-semibold"> Masukan <a href="#" class="font-bold"> PIN </a> Anda kemudian tekan <a href="#" class="font-bold"> OK.</a></P>
         </div>
         <div class="m-[0_0.2rem_0_0] flex flex-row w-[fit-content] box-sizing-border">
           <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.3rem_2.8rem_0] w-[1.8rem] h-[0.8rem]">
           </div>
           <P class="font-semibold"> Periksa informasi yang tertera di layar. pastikan Marchat adalah <a href="#" class="font-bold"> Ngabring. Total Tagihan </a> sudah benar dan usernamae kamu <a href="#" class="font-bold"> xxxx. </a> kemudian pilih <a href="#" class="font-bold"> Lanjut </a> ketika transaksi berhasil, maka bukti transfer akan tercetak.</P>
         </div>
        </div>
      </div>
    </div>

    <h2 id="accordion-collapse-heading-5">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
        <span>Petunjuk Transfer Setor TunaI</span>
        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
        <div class="text-base mx-2 grid-cols-5 gap-5">
          <div class="m-[0_0_0.8rem_0] flex flex-row self-start w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0_0.6rem_0.4rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <p class="font-semibold"> Isi pormulir setor tumai BRI dengan detail berikut ini</p>
          </div>
          <div class="mt-4 mb-4 me-4 mx-2">
             <ul class="max-w-md space-y-1 font-semibold list-disc list-inside">
               <li>
               Nomer rekening tujuan : 128 081234567890
               </li>
               <li>
               Nama rekening tujan : <a href="#" class="font-bold"> Ngabring</a>
               </li>
               <li>
               Total rp : 200.000
              </li>
             </ul>
          </div>
          <div class="m-[0_0_0.8rem_0] flex flex-row w-[fit-content] box-sizing-border">
            <div class="rounded-[0.4rem] bg-[#D9D9D9] m-[0.2rem_0.3rem_0.2rem_0] w-[0.8rem] h-[0.8rem]">
            </div>
            <P class="font-semibold "> Bawa pormulir setor tunai ke teler dan lakukan pembayaran sesuai nominal</P>
          </div>
        </div>
         </div>
            </div>

              <button type="button" class="text-white bg-[#FFB085]  hover:bg-[#aaccf0] mb-10 my-20 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full px-5 py-2 text-center me-2 dark:bg-white dark:focus:ring-[#E1EFFE] w-60 m-24">OK</button>
              </div>
                   </div>
                </div>
            </div>
          </div>
    {{-- Artikel End --}}



    <!--Footer Start-->
<footer class="bg-black pt-20 pb-10">
    <div class="grid grid-cols-4 mx-32">
        <div class="bg-[var(-background-font,#0C0C0C)] flex flex-row p-[3.4rem_0_7.5rem_8.3rem] w-[90rem] box-sizing-border">
            <div class="w-full px-4 mb-12 text-white font-medium md:w-1/3">
                <img src="img/Logo Panjang.png" class="m-5 h-12" alt="">
                <p class="ml-5 text-based font-normal ">
                    Ngabring.id adalah penyedia layana
                </p>
                <p class="ml-5 text--based font-normal">
                    Penyelenggara tour agen yang mulai
                </p>
                <p class="ml-5 text--based font-normal">
                    Bergerak di kabupaten tasikmalaya
                </p>
            </div>
            <div class="m-[0_7.8rem_0_0] flex flex-col items-center box-sizing-border">
                <div class="m-[0_0.8rem_1.9rem_0.8rem] inline-block break-words font-['Sans Serif'] font-semibold text-[1rem] text-[#FFFFFF]">
                Ikuti kami di
                </div>
                <div class="flex flex-col items-center w-[fit-content] box-sizing-border">
                    <div class="m-[0_0.2rem_1.6rem_0] flex flex-row w-[fit-content] box-sizing-border">
                        <a href="https://tiktok.com/pinapin14"
                        target="_blank" class="w-9 h-9 mr-3 rounded-full flex
                        justify-center items-center border-slate-300 text-slate-300
                         hover:border-primary
                         hover:bg-primary hover:text-white">
                         <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                      <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF] py-2 mx-1">
                      @Ngabring.id
                      </span>
                    </div>
                  <div class="m-[0_0.2rem_1.6rem_0] flex flex-row w-[fit-content] box-sizing-border">
                    <a href="https://facebook.com/Alpin An"
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex
                    justify-center items-center border-slate-300 text-slate-300
                     hover:border-primary
                     hover:bg-primary hover:text-white">
                     <svg role="img" width="20" class="fill-current"viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                    </a>
                  <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF] py-2 mx-1">
                  @Ngabring.id
                  </span>
                </div>
                <div class="m-[0_0.2rem_1.6rem_0] flex flex-row w-[fit-content] box-sizing-border">
                    <a href="https://instagram.com/alpin_su"
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex
                    justify-center items-center border-slate-300 text-slate-300
                     hover:border-primary
                     hover:bg-primary hover:text-white">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                    </a>
                  <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF] py-2 mx-1">
                  @Ngabring.id
                  </span>
                </div>
                </div>
              </div>

              <div class="flex flex-col items-center box-sizing-border">
                <div class="m-[0_0_1.9rem_0] inline-block break-words font-['Sans Serif'] font-semibold text-[1rem] text-[#FFFFFF]">
                Lainnya
                </div>
                <div class="m-[0_0.5rem_0_0.5rem] flex flex-col items-center w-[fit-content] box-sizing-border">
                  <div class="m-[0_0.6rem_1.6rem_0] flex box-sizing-border">
                    <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF]">
                    Help
                    </span>
                  </div>
                  <div class="m-[0_0_1.6rem_0] flex box-sizing-border">
                    <span class=" my-5 break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF]">
                    About
                    </span>
                  </div>
                  <div class="m-[0_0.7rem_0_0] flex box-sizing-border">
                    <span class="break-words font-['Sans Serif'] font-medium text-[0.9rem] text-[#FFFFFF]">
                    Blog
                    </span>
                </div>
            </div>
         </div>
       </div>
    </div>
</footer>

    {{-- Footer end --}}
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
 </body>
</html>
