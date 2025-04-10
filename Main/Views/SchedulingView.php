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


    
    </div>

</form>

</div>




<?php include('views/_partials/footer.php'); ?>
