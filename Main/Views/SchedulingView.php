<?php include('views/_partials/header.php'); ?>

<div class="main-content flex w-full justify-center h-auto items-center ">


<form action="Models\ScheduleManager.php" method="POST" class="inline-block MyForm drop-shadow-md drop-shadow-[#b3a7a2] mt-8 mb-13 w-full lg:w-100 md:w-100 mx-auto md:rounded-lg lg:rounded-t-lg">
    <h1 class="caret-transparent flex lg:text-4xl text-2xl capitalize bg-myPurple w-full lg:w-100 md:w-100 h-15 py-10 justify-center items-center md:rounded-t-lg lg:rounded-t-lg extend-purple-down">Request an Estimate</h1>

    <div class="extend-tan-down pt-2 mb-5 bg-My-Tan justify-center items-center pb-4">
    <label for="name" class="block mb-3 w-80 lg:w-100 text-sm font-medium text-black font-sans uppercase mx-3 mt-3 caret-transparent">Full Name</label>
    <input  type="text" 
            id="name" 
            name="name"
            class=" min-w-50 w-93 bg-transparent tan justify-center items-center
                    px-3 flex mx-3 py-2 leading-tight rounded outline-1 outline-[#b3a7a2] 
                    border-transparent focus:border-[#807874] focus:outline-none" 
            placeholder="John Doe" required />
    </div>
    <div class="extend-tan-down mb-5 bg-My-Tan justify-center items-center pb-4">
      <label for="phone" class="block mb-3 w-93 lg:w-100 text-sm font-medium text-black font-sans uppercase mx-3 mt-3 caret-transparent">Phone Number</label>
      <input  type="phone" 
              id="phone" 
              name="phone"
              class=" min-w-50 w-93 bg-transparent tan justify-center items-center  
                      px-3 flex mx-3 py-2 leading-tight rounded outline-1 outline-[#b3a7a2] 
                      border-transparent focus:outline-[#807874] " 
              placeholder="(123)-456-7890" required />
    </div>
    <div class="extend-tan-down mb-5 bg-My-Tan justify-center items-center pb-4">
      <label for="email" class="block mb-3 w-80 lg:w-100 text-sm font-medium text-black font-sans uppercase mx-3 mt-3 caret-transparent">Email</label>
      <input  type="email" 
              id="email" 
              name="email"
              class=" min-w-50 w-93 bg-transparent tan justify-center items-center  px-3 flex 
                      mx-3 py-2 leading-tight rounded outline-1 outline-[#b3a7a2] border-transparent 
                    focus:border-[#807874]  focus:outline-none" 
              placeholder="Mail@website.com" required />
    </div>
    <div class="extend-tan-down mb-1 bg-My-Tan justify-center items-center pb-4 ">
      <div class="w-80 mx-3 relative">
      <div class="mb-6">
        <label for="message" class="block mb-3 w-93 lg:w-100 text-sm font-medium text-black font-sans uppercase caret-transparent">Your message</label>
        <?php
                $prefillMessage = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
        ?>
        <textarea id="message" 
                  rows="4" 
                  name="message"
                  class=" block w-93 p-4 tan text-[#5a5451] border placeholder:text-[#5a5451] 
                        border-[#b3a7a2] rounded-lg bg-transparent text-base  focus:border-[#807874] focus:ring-transparent
                          focus:bg-[#e6d7d0]" 
                  placeholder="Lorem ipsum..."><?php echo $prefillMessage; ?></textarea>
      </div>
      </div>
    </div>
    <div class="extend-tan-down mb-5 bg-My-Tan flex justify-center items-center pb-4 md:rounded-b-lg lg:rounded-b-lg">

      <button type="submit" 
              class=" block mb-auto text-xl text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                      focus:ring-blue-300 font-medium rounded-lg  w-50 sm:w-auto px-5 py-2.5 text-center 
                      dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">Submit</button>
        </div>
</form>





</div>



<?php include('views/_partials/footer.php'); ?>
