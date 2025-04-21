

<?php include('Views/_partials/header.php'); ?>

<div class="bg-myNav py-24 sm:py-32">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Section 1: Header centered -->
    <div class="grid gap-4 p-4" style="grid-template-columns: 1fr auto 1fr;">
      <div></div>

      <div class="col-span-3 max-w-xl text-center p-4">
        <h2 class="text-3xl font-semibold tracking-tight text-black sm:text-3xl">Meet our Team</h2>
        <p class="mt-6 text-lg text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div></div>
    </div>

    <!-- Section 2: CEO -->
    <div class="grid gap-4 mt-4" style="grid-template-columns: 1fr 1fr;">
      <!-- Image on the left, aligned to the right inside its box -->
      <div class="p-4 flex items-center justify-end">
        <div class="relative overflow-hidden w-32 h-32 rounded-full border-2 transform hover:scale-110 transition-transform duration-500 ease-in-out">
        <img src="Lib/Images/Charlie_Face_image.png" alt="Charlie_Image" class="w-auto h-auto">
        </div>
      </div>

      <!-- Text on the right -->
      <div class="p-4 flex items-center gap-x-4">
        <div>
          <h3 class="text-base font-semibold tracking-tight text-gray-900">Charlie Tibbetts</h3>
          <p class="text-sm font-semibold text-indigo-600">Owners</p>
        </div>
      </div>
    </div>

    <!-- Section 3: Our Team label centered -->
    <div class="grid gap-2 mt-8 p-4" style="grid-template-columns: 1fr auto 1fr;">
      <div></div>
      <div class="text-2xl text-black text-center p-2">Our Team</div>
      <div></div>
    </div>


    <!-- Team Members -->
    <div class="grid gap-4 mt-4" style="grid-template-columns: 1fr 1fr;">
      <!-- Team Member 1: Text left, Image right (Right-aligned) -->
      <div class="p-4 flex items-center gap-x-6 justify-end">
        <div class="p-10"> <!-- Added padding here for text -->
          <h3 class="text-base font-medium text-gray-900">John Doe</h3>
          <p class="text-sm text-indigo-600">CTO</p>
        </div>
        <img class="size-5 rounded-full" src="Lib/Images/Charlie_Face_image.png" alt="">
      </div>

      <!-- Team Member 2: Image left, Text right (Left-aligned) -->
      <div class="p-4 flex items-center gap-x-6 justify-start">
        <img class="size-12 rounded-full" src="Lib/Images/Charlie_Face_image.png" alt="">
        <div class="p-10"> <!-- Added padding here for text -->
          <h3 class="text-base font-medium text-gray-900">Jane Smith</h3>
          <p class="text-sm text-indigo-600">Head of Design</p>
        </div>
      </div>

      <!-- Add more team members below as needed -->
    </div>
  </div>
</div>

<?php include('Views/_partials/footer.php'); ?>