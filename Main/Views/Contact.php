<?php include('views/_partials/header.php'); ?>

<div class="main-content flex flex-col w-full justify-center h-auto items-center ">

    <form action="" class="inline-block MyForm drop-shadow-md drop-shadow-[#b3a7a2] mt-8 mb-13 w-full lg:w-100 md:w-100 mx-auto md:rounded-lg lg:rounded-t-lg">
        <h1 class="caret-transparent flex lg:text-4xl text-2xl capitalize bg-myPurple w-full lg:w-100 md:w-100 h-15 py-10 justify-center items-center md:rounded-t-lg lg:rounded-t-lg extend-purple-down">Contact Us</h1>

        <div class="extend-tan-down pt-2 mb-5 bg-My-Tan justify-center items-center pb-4">
            <label for="name" class="block mb-3 w-80 lg:w-100 text-sm font-medium text-black font-sans uppercase mx-3 mt-3 caret-transparent">Full Name</label>
            <input type="text" id="name" class="min-w-50 w-93 bg-transparent tan justify-center items-center px-3 flex mx-3 py-2 leading-tight rounded outline-1 outline-[#b3a7a2] border-transparent focus:border-[#807874] focus:outline-none" placeholder="John Doe" required />
        </div>

        <div class="extend-tan-down mb-5 bg-My-Tan justify-center items-center pb-4">
            <label for="phone" class="block mb-3 w-93 lg:w-100 text-sm font-medium text-black font-sans uppercase mx-3 mt-3 caret-transparent">Phone Number</label>
            <input type="phone" id="phone" class="min-w-50 w-93 bg-transparent tan justify-center items-center px-3 flex mx-3 py-2 leading-tight rounded outline-1 outline-[#b3a7a2] border-transparent focus:outline-[#807874]" placeholder="(123)-456-7890" required />
        </div>

        <div class="extend-tan-down mb-5 bg-My-Tan justify-center items-center pb-4">
            <label for="email" class="block mb-3 w-80 lg:w-100 text-sm font-medium text-black font-sans uppercase mx-3 mt-3 caret-transparent">Email</label>
            <input type="email" id="email" class="min-w-50 w-93 bg-transparent tan justify-center items-center px-3 flex mx-3 py-2 leading-tight rounded outline-1 outline-[#b3a7a2] border-transparent focus:border-[#807874] focus:outline-none" placeholder="Mail@website.com" required />
        </div>

        <div class="extend-tan-down mb-1 bg-My-Tan justify-center items-center pb-4">
            <div class="w-80 mx-3 relative">
                <div class="mb-6">
                    <label for="message" class="block mb-3 w-93 lg:w-100 text-sm font-medium text-black font-sans uppercase caret-transparent">Your message</label>
                    <?php $prefillMessage = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : ''; ?>
                    <textarea id="message" rows="4" class="block w-93 p-4 tan text-[#5a5451] border placeholder:text-[#5a5451] border-[#b3a7a2] rounded-lg bg-transparent text-base focus:border-[#807874] focus:ring-transparent focus:bg-[#e6d7d0]" placeholder="Lorem ipsum..."><?php echo $prefillMessage; ?></textarea>
                </div>
            </div>
        </div>

        <div class="extend-tan-down mb-5 bg-My-Tan flex justify-center items-center pb-4 md:rounded-b-lg lg:rounded-b-lg">
            <button type="submit" class="block mb-auto text-xl text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg w-50 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">Submit</button>
        </div>
    </form>

    <!-- Contact Info Section -->
    <div class="w-full mt-4 mb-10 flex flex-col items-center gap-4 text-center text-black font-sans bg-My-Tan py-6 px-4 rounded-md shadow-md">

        <!-- Phone -->
        <div class="flex items-center gap-2">
            <svg class="w-6 h-6 text-myPurple" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 5a2 2 0 012-2h1.586a1 1 0 01.707.293l2.828 2.828a1 1 0 010 1.414L8.414 9.586a16.021 16.021 0 006 6l2.051-2.051a1 1 0 011.414 0l2.828 2.828a1 1 0 01.293.707V19a2 2 0 01-2 2h-1c-9.389 0-17-7.611-17-17V5z" />
            </svg>
            <span class="text-base">Call us: <a href="tel:+6054004440" class="text-myPurple underline">(605) 400-4440</a></span>
        </div>

        <!-- Facebook -->
        <div class="flex items-center gap-2">
            <svg class="w-6 h-6 text-myPurple" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.988H7.898v-2.89h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.772-1.63 1.562v1.875h2.773l-.443 2.89h-2.33V21.878C18.343 21.128 22 16.991 22 12z" />
            </svg>
            <span class="text-base">Follow us on <a href="https://www.facebook.com/people/House-to-Home-Solutions/61567396322695/" target="_blank" class="text-myPurple underline">Facebook</a></span>
        </div>

        <!-- Instagram -->
        <div class="flex items-center gap-2">
            <svg class="w-6 h-6 text-myPurple" fill="currentColor" viewBox="0 0 24 24">
                <path d="M7.75 2C4.574 2 2 4.574 2 7.75v8.5C2 19.426 4.574 22 7.75 22h8.5C19.426 22 22 19.426 22 16.25v-8.5C22 4.574 19.426 2 16.25 2h-8.5zM12 7.25a4.75 4.75 0 110 9.5 4.75 4.75 0 010-9.5zM18.25 5.75a1 1 0 110 2 1 1 0 010-2zM12 9.25a2.75 2.75 0 100 5.5 2.75 2.75 0 000-5.5z" />
            </svg>
            <span class="text-base">Find us on <a href="https://www.instagram.com/h2h.solutions/#" target="_blank" class="text-myPurple underline">Instagram</a></span>
        </div>

    </div>

</div>

<?php include('views/_partials/footer.php'); ?>
