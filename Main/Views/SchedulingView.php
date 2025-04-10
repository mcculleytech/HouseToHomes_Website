<?php include('views/_partials/header.php'); ?>

<div class="flex w-full justify-center h-auto items-center ">


<form action="" class="inline-block MyForm drop-shadow-md drop-shadow-[#b3a7a2] my-8 w-100 mx-auto rounded-t-lg">
    <h1 class="flex lg:text-4xl text-2xl capitalize bg-myPurple w-100 h-15 justify-center items-center rounded-t-lg extend-purple-down">Request an Estimate</h1>
    <div class="pt-5 extend-tan-down mb-5 bg-My-Darker-Tan justify-center items-center pb-4">
      <label for="name" class="block mb-3 w-80 lg:w-100 text-sm font-medium text-black font-sans uppercase mx-3 mt-3">Full Name</label>
      <input type="text" id="name" class=" min-w-50 w-80 tan justify-center items-center  px-3 flex mx-3 py-2 leading-tight rounded outline-1 outline-[#b3a7a2]   focus:outline-none" placeholder="John Doe" required />
    </div>
    <div class="extend-tan-down mb-5 bg-My-Darker-Tan justify-center items-center pb-4">
      <label for="email" class="block mb-3 w-80 lg:w-100 text-sm font-medium text-black font-sans uppercase mx-3 mt-3">Email Address</label>
      <input type="email" id="email" class=" min-w-50 w-80 tan justify-center items-center  px-3 flex mx-3 py-2 leading-tight rounded outline-1 outline-[#b3a7a2]   focus:outline-none" placeholder="Mail@website.com" required />
    </div>
    <div class="extend-tan-down mb-5 bg-My-Darker-Tan justify-center items-center pb-4">
      <label for="phone" class="block mb-3 w-80 lg:w-100 text-sm font-medium text-black font-sans uppercase mx-3 mt-3">Phone Number</label>
      <input type="phone" id="phone" class=" min-w-50 w-80 tan justify-center items-center  px-3 flex mx-3 py-2 leading-tight rounded outline-1 outline-[#b3a7a2]   focus:outline-none" placeholder="Mail@website.com" required />
    </div>
    <div class="extend-tan-down mb-5 bg-My-Darker-Tan justify-center items-center pb-4">
      <div class="w-80 mx-3 relative">
      <div class="absolute top-0  py-3 pl-3 pointer-events-none">
        <svg class="w-4 h-4" style="color:#5a5451;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
        </svg>
      </div>
      <input datepicker id="default-datepicker" type="text" style="padding-left:2.5rem;" class="color-primary-light-tan tan outline-1 outline-[#b3a7a2] text-sm rounded-lg focus:ring-[#5a5451]  block w-full ps-10 p-2.5" placeholder="Select date">

      </div>
    </div>

</form>

</div>




<?php include('views/_partials/footer.php'); ?>
