<?php include('views/_partials/header.php'); ?>

<div class="main-content flex w-full justify-center h-auto items-center ">

<form action="" method="post" class="inline-block MyForm drop-shadow-md drop-shadow-[#b3a7a2] mt-8 mb-13 w-full lg:w-100 md:w-100 mx-auto md:rounded-lg lg:rounded-t-lg">
    <h1 class="caret-transparent flex lg:text-4xl text-2xl capitalize bg-myPurple w-full lg:w-100 md:w-100 h-15 py-10 justify-center items-center md:rounded-t-lg lg:rounded-t-lg extend-purple-down">
        Write a Review
    </h1>

    <!-- Full Name -->
    <div class="extend-tan-down pt-2 mb-5 bg-My-Tan justify-center items-center pb-4">
        <label for="name" class="block mb-3 w-80 text-sm font-medium text-black font-sans uppercase mx-3 mt-3 caret-transparent">Full Name</label>
        <input type="text" id="name" name="name" required
            class="min-w-50 w-93 bg-transparent tan px-3 mx-3 py-2 rounded outline-1 outline-[#b3a7a2] border-transparent focus:border-[#807874] focus:outline-none"
            placeholder="Jane Smith" />
    </div>

    <!-- Email -->
    <div class="extend-tan-down mb-5 bg-My-Tan justify-center items-center pb-4">
        <label for="email" class="block mb-3 w-80 text-sm font-medium text-black font-sans uppercase mx-3 mt-3 caret-transparent">Email</label>
        <input type="email" id="email" name="email" required
            class="min-w-50 w-93 bg-transparent tan px-3 mx-3 py-2 rounded outline-1 outline-[#b3a7a2] border-transparent focus:outline-[#807874]"
            placeholder="example@mail.com" />
    </div>

    <!-- Star Rating -->
    <div class="extend-tan-down mb-5 bg-My-Tan justify-center items-center pb-4">
        <label for="rating" class="block mb-3 w-80 text-sm font-medium text-black font-sans uppercase mx-3 mt-3 caret-transparent">Rating</label>
        <select id="rating" name="rating" required
            class="block w-93 bg-transparent tan px-3 mx-3 py-2 rounded outline-1 outline-[#b3a7a2] border-transparent focus:outline-[#807874]">
            <option value="">Select rating</option>
            <option value="5">★★★★★ - Excellent</option>
            <option value="4">★★★★☆ - Good</option>
            <option value="3">★★★☆☆ - Average</option>
            <option value="2">★★☆☆☆ - Fair</option>
            <option value="1">★☆☆☆☆ - Poor</option>
        </select>
    </div>

    <!-- Message -->
    <div class="extend-tan-down mb-1 bg-My-Tan justify-center items-center pb-4">
        <div class="w-80 mx-3 relative">
            <label for="message" class="block mb-3 w-93 text-sm font-medium text-black font-sans uppercase caret-transparent">Your Review</label>
            <textarea id="message" name="message" rows="4" required
                class="block w-93 p-4 tan text-[#5a5451] border border-[#b3a7a2] rounded-lg bg-transparent text-base placeholder:text-[#5a5451] focus:border-[#807874] focus:ring-transparent focus:bg-[#e6d7d0]"
                placeholder="Share your experience with us..."></textarea>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="extend-tan-down mb-5 bg-My-Tan flex justify-center items-center pb-4 md:rounded-b-lg lg:rounded-b-lg">
        <button type="submit"
            class="text-xl text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg w-50 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">
            Submit Review
        </button>
    </div>
</form>

</div>

<?php include('views/_partials/footer.php'); ?>
