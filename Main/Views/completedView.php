<?php include('Views/_partials/header.php'); ?>


<div class="flex items-center justify-center min-h-[45rem] bg-gradient-to-b ">
    <div
        class="w-full max-w-2xl p-12 mx-4 text-center transition-all transform bg-white shadow-lg rounded-xl hover:shadow-xl">
        <!-- Success Icon -->
        <div class="flex items-center justify-center w-24 h-24 mx-auto mb-8 bg-green-100 rounded-full">
            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <!-- Main Content -->
        <h1 class="mb-6 text-4xl font-extrabold text-green-600">
            You're all set!
        </h1>


        <div class="p-6 mb-8 rounded-lg bg-blue-50">
            <p class="text-lg font-medium text-blue-700">
               Charlie’s on it. Expect a follow-up soon to chat about your project and set up a time that works for you.
            </p>
        </div>



        <!-- Back to Home Button -->
        <div class="mt-12">
            <a href="."
                class="inline-block px-8 py-4 text-lg font-semibold text-white transition-colors duration-200 bg-green-600 rounded-lg hover:bg-green-700">
                Return to Home
            </a>
        </div>
    </div>
</div>


<?php include('Views/_partials/footer.php'); ?>
