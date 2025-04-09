<!DOCTYPE html>
<html lang="en">
<head>
hi
© 2025 Made by Yasin Sisto, Will Broui
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>House to Home Solutions</title>
  <link rel="stylesheet" href="Lib\CSS\styles.css">
  <script src="/Main/Lib/JS/main.js" defer></script>
</head>
<body class="bg-gradient-to-r from-[#FFFDFC] via-[#D8E8F0] to-[#A3C9D9] font-sans">
<!-- Top Bar -->
  <div class="bg-[#534B6F] text-[#FFFDFC] flex justify-between items-center p-4">   <!-- Logo -->
  <img src="/Project_3/Main/Lib/Images/Logo_No_Background.png" alt="Logo_Image" class="w-22 h-28 mx-auto pl-12 sm:mx-0">
  
  <!-- Title Text -->
  <div class="text-3xl font-semibold flex-grow text-left pl-8 hidden sm:block">House to HOME Solutions</div>
  
  <!-- Hamburger Button (for mobile) -->
  <button class="lg:hidden flex flex-col items-center space-y-1" id="hamburger-btn">
    <span class="w-6 h-0.5 bg-[#FFFDFC]"></span>
    <span class="w-6 h-0.5 bg-[#FFFDFC]"></span>
    <span class="w-6 h-0.5 bg-[#FFFDFC]"></span>
  </button>

  <!-- Dropdown Menu -->
  <div class="hidden lg:flex space-x-12 pr-64">
    <a href="?action=RequestEstimate" class="hover:underline text-[#FFFDFC]">Request an Estimate</a>
    <a href="#" class="hover:underline text-[#FFFDFC]">Write a review</a>
    <a href="#" class="hover:underline text-[#FFFDFC]">Contact us</a>
  </div>

  <!-- Mobile Dropdown (hidden by default) -->
  <div class="lg:hidden absolute top-16 right-4 bg-[#534B6F] text-[#FFFDFC] p-4 rounded-xl hidden" id="dropdown-menu">
    <a href="#" class="block hover:underline py-2 text-[#FFFDFC]">Request an Estimate</a>
    <a href="#" class="block hover:underline py-2 text-[#FFFDFC]">Write a review</a>
    <a href="#" class="block hover:underline py-2 text-[#FFFDFC]">Contact us</a>
  </div>
</div>

<script>
  // Toggle dropdown menu on hamburger click
  const hamburgerBtn = document.getElementById('hamburger-btn');
  const dropdownMenu = document.getElementById('dropdown-menu');

  hamburgerBtn.addEventListener('click', () => {
    dropdownMenu.classList.toggle('hidden');
  });
</script>

<!-- Hero Section -->
<section class="flex flex-col lg:flex-row items-center space-y-6 lg:space-x-8 lg:space-y-0 pb-12 sm:pb-16 lg:pb-0">
  <img src="/Project_3/Main/Lib/Images/Person_HomePage_cover.png" alt="Hero Image" class="w-auto h-auto pl-4 sm:pl-8 md:pl-16 lg:pl-32 xl:pl-96">
  <div class="bg-[#534B6F] text-[#FFFDFC] p-6 rounded-xl max-w-md w-full shadow-[0_10px_30px_rgba(0,0,0,0.5)] sm:w-2/3 md:w-1/2 lg:w-auto">
    <p>
      Suspendisse sagittis quam quis libero posuere finibus. Pellentesque habitant morbi tristique senectus...
    </p>
    <button class="relative inline-flex h-12 overflow-hidden rounded-full p-[1px] focus:outline-none focus:ring-2 focus:ring-[#534B6F] focus:ring-offset-2 focus:ring-offset-[#FFFDFC] mt-4">
      <!-- Rotating gradient background with the specific color scheme -->
      <span class="absolute inset-[-1000%] animate-[spin_2s_linear_infinite] bg-[conic-gradient(from_90deg_at_50%_50%,#005887_0%,#534B6F_50%,#005887_100%)]"></span>
      
      <!-- Button content -->
      <span class="relative inline-flex h-full w-full items-center justify-center rounded-full bg-transparent text-[#FFFDFC] px-8 py-2 font-bold text-sm hover:bg-[#f0eded] transition">
        Request
      </span>
    </button>

  </div>
</section>

<!-- Blue Thick Line -->
<div class="lg:w-1/2 h-9 bg-[#005887] my-15 mr-auto shadow-[0_10px_30px_rgba(0,0,0,0.5)] sm:w-auto h-9 bg-[#005887] my-15 mr-auto shadow-2xl"></div>

<!-- Services Section -->
<section class="text-[#FFFDFC] py-12 text-center">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <!-- Outer Transparent Box with Border and Shadow -->
    <div class="border-0 border-[#B9A9D0] rounded-2xl shadow-2xl bg-transparent p-8">
      <div class="flex justify-center items-center flex-wrap gap-8 lg:gap-48">

        <!-- Services Offer Box (mobile) -->
        <div class="lg:hidden bg-[#534B6F] text-[#FFFDFC] p-10 rounded-xl max-w-md w-full sm:w-2/3 md:w-1/2">
          <h2 class="text-2xl font-bold text-[#B9A9D0]">Services Offer</h2>
        </div>
        
        <!-- Service Buttons -->
        <div class="flex flex-col gap-4 lg:gap-6">
          <button class="bg-[#005887] px-6 py-3 rounded-lg w-96 transition-all ease-in-out duration-300 hover:scale-105 hover:ring-4 hover:ring-offset-2 relative">
            <div class="w-full h-full flex flex-col justify-center text-[#FFFDFC]">Kitchen and Bath</div>
          </button>
          <button class="bg-[#005887] px-6 py-3 rounded-lg w-96 transition-all ease-in-out duration-300 hover:scale-105 hover:ring-4 hover:ring-offset-2 relative">
            <div class="w-full h-full flex flex-col justify-center text-[#FFFDFC]">Refinishing Projects</div>
          </button>
          <button class="bg-[#005887] px-6 py-3 rounded-lg w-96 transition-all ease-in-out duration-300 hover:scale-105 hover:ring-4 hover:ring-offset-2 relative">
            <div class="w-full h-full flex flex-col justify-center text-[#FFFDFC]">Household Repairs</div>
          </button>
          <button class="bg-[#005887] px-6 py-3 rounded-lg w-96 transition-all ease-in-out duration-300 hover:scale-105 hover:ring-4 hover:ring-offset-2 relative">
            <div class="w-full h-full flex flex-col justify-center text-[#FFFDFC]">Beautifications</div>
          </button>
        </div>

        <!-- Services Offer Box (desktop) -->
        <div class="hidden lg:block bg-[#534B6F] text-[#FFFDFC] p-10 rounded-xl max-w-md w-full">
          <h2 class="text-5xl font-bold text-[#B9A9D0]">Services Offers</h2>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- Blue Thick Line -->
<div class="lg:w-1/2 h-1 bg-[#005887] my-15 ml-auto sm:w-auto h-1 bg-[#005887] my-15 ml-auto"></div>

<!-- Testimonials -->
<section class="text-[#FFFDFC] text-center py-12">
  <div class="flex flex-col sm:flex-row justify-center items-center gap-8 px-4 overflow-x-auto scroll-smooth">
    <!-- Testimonial Box 1 -->
    <div class="bg-[#1a1a1a] p-6 rounded-xl w-[300px] flex-shrink-0">
      <p class="text-xl font-bold" contenteditable="true">John Doe</p>
      <p class="text-yellow-400 text-lg" contenteditable="true">★★★★★</p>
      <p class="italic mt-2" contenteditable="true">“Amazing Service”</p>
    </div>
    
    <!-- Testimonial Box 2 -->
    <div class="bg-[#1a1a1a] p-6 rounded-xl w-[300px] flex-shrink-0">
      <p class="text-xl font-bold" contenteditable="true">Jane Smith</p>
      <p class="text-yellow-400 text-lg" contenteditable="true">★★★★★</p>
      <p class="italic mt-2" contenteditable="true">“Wonderful experience!”</p>
    </div>
    
    <!-- Testimonial Box 3 -->
    <div class="bg-[#1a1a1a] p-6 rounded-xl w-[300px] flex-shrink-0">
      <p class="text-xl font-bold" contenteditable="true">Sam Wilson</p>
      <p class="text-yellow-400 text-lg" contenteditable="true">★★★★★</p>
      <p class="italic mt-2" contenteditable="true">“Highly recommend!”</p>
    </div>
    
    <!-- Testimonial Box 4 -->
    <div class="bg-[#1a1a1a] p-6 rounded-xl w-[300px] flex-shrink-0">
      <p class="text-xl font-bold" contenteditable="true">Emily Johnson</p>
      <p class="text-yellow-400 text-lg" contenteditable="true">★★★★★</p>
      <p class="italic mt-2" contenteditable="true">“Fantastic job!”</p>
    </div>
  </div>
</section>
</body>
</html>
