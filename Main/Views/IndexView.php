<?php include('views/_partials/header.php'); ?>

<!-- Hero Section -->
<section class="flex flex-col lg:flex-row items-center space-y-6 lg:space-x-8 lg:space-y-0 pb-12 sm:pb-16 lg:pb-0">
  <img src="Lib/Images/Person_HomePage_cover.png" alt="Hero Image" class="w-auto h-auto pl-4 sm:pl-8 md:pl-16 lg:pl-32 xl:pl-96">
  <div class="bg-[#534B6F] text-[#FFFDFC] p-6 rounded-xl max-w-md w-full shadow-[0_10px_30px_rgba(0,0,0,0.5)] sm:w-2/3 md:w-1/2 lg:w-auto">
    <p>
      Suspendisse sagittis quam quis libero posuere finibus. Pellentesque habitant morbi tristique senectus...
    </p>
    <a href="?action=RequestEstimate">
      <button class="relative inline-flex h-12 overflow-hidden rounded-full p-[1px] focus:outline-none focus:ring-2 focus:ring-[#534B6F] focus:ring-offset-2 focus:ring-offset-[#FFFDFC] mt-4">
        <!-- Rotating gradient background -->
        <span class="absolute inset-[-1000%] animate-[spin_2s_linear_infinite] bg-[conic-gradient(from_90deg_at_50%_50%,#005887_0%,#534B6F_50%,#005887_100%)]"></span>
        
        <!-- Button content -->
        <span class="relative inline-flex h-full w-full items-center justify-center rounded-full bg-transparent text-[#FFFDFC] px-8 py-2 font-bold text-sm hover:bg-[#f0eded] transition">
          Request
        </span>
      </button>
    </a>
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
          <h2 class="text-2xl font-bold text-[#FFFDFC]">Services Offer</h2>
        </div>
        
        <!-- Service Buttons -->
        <div class="flex flex-col gap-4 lg:gap-6">
          <button onclick="location.href='Index.php?action=RequestEstimate&message=I am interested in Kitchen and Bath projects'" 
          class="bg-[#005887] px-6 py-3 rounded-lg w-96 transition-all ease-in-out duration-300 hover:scale-105 hover:ring-4 hover:ring-offset-2 relative">
          <div class="w-full h-full flex flex-col justify-center items-center text-[#FFFDFC]">
            <span class="text-center">Kitchen and Bath</span> <!-- Centered text -->
            <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 24 24" fill="none" stroke="#FFFDFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-2">
                <path d="M9 6 6.5 3.5a1.5 1.5 0 0 0-1-.5C4.683 3 4 3.683 4 4.5V17a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-5"></path>
                <line x1="10" x2="8" y1="5" y2="7"></line>
                <line x1="2" x2="22" y1="12" y2="12"></line>
                <line x1="7" x2="7" y1="19" y2="21"></line>
                <line x1="17" x2="17" y1="19" y2="21"></line>
            </svg>
          </div>
          </button>
          <button onclick="location.href='Index.php?action=RequestEstimate&message=I am interested in Refinishing Projects'" 
          class="bg-[#005887] px-6 py-3 rounded-lg w-96 transition-all ease-in-out duration-300 hover:scale-105 hover:ring-4 hover:ring-offset-2 relative">
            <div class="w-full h-full flex flex-col justify-center items-center text-[#FFFDFC]">
                <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 24 24" fill="none" stroke="#FFFDFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 12-8.373 8.373a1 1 0 1 1-3-3L12 9"></path>
                    <path d="m18 15 4-4"></path>
                    <path d="m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172V7l-2.26-2.26a6 6 0 0 0-4.202-1.756L9 2.96l.92.82A6.18 6.18 0 0 1 12 8.4V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5"></path>
                </svg>
                <span class="mt-2">Refinishing Projects</span>
            </div>
          </button>

          <button onclick="location.href='Index.php?action=RequestEstimate&message=I need help with Household Repairs'" 
          class="bg-[#005887] px-6 py-3 rounded-lg w-96 transition-all ease-in-out duration-300 hover:scale-105 hover:ring-4 hover:ring-offset-2 relative">
            <div class="w-full h-full flex flex-col justify-center items-center text-[#FFFDFC]">
                <!-- Text -->
                <span class="text-center">Household Repairs</span>

                <!-- Icon with margin-top to space it from the text -->
                <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 24 24" fill="none" stroke="#FFFDFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-2">
                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                </svg>
            </div>
          </button>

          <button onclick="location.href='Index.php?action=RequestEstimate&message=I’d like a Beautification estimate'" 
          class="bg-[#005887] px-6 py-3 rounded-lg w-96 transition-all ease-in-out duration-300 hover:scale-105 hover:ring-4 hover:ring-offset-2 relative">
            <div class="w-full h-full flex flex-col justify-center items-center text-[#FFFDFC]">
                <!-- Text -->
                <span class="text-center">Beautifications</span>

                <!-- Icon with margin-top to space it from the text -->
                <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 24 24" fill="none" stroke="#FFFDFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-2">
                    <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                    <path d="M20 3v4"></path>
                    <path d="M22 5h-4"></path>
                    <path d="M4 17v2"></path>
                    <path d="M5 18H3"></path>
                </svg>
            </div>
          </button>

        </div>

        <!-- Services Offer Box (desktop) -->
        <div class="hidden lg:block bg-[#534B6F] text-[#FFFDFC] p-10 rounded-xl max-w-md w-full">
          <h2 class="text-5xl font-bold text-[#FFFDFC]">Services Offers</h2>
        </div>

      </div>
    </div>
  </div>
</section>



<!-- Blue Thick Line -->
<div class="lg:w-1/2 h-1 bg-[#005887] my-15 ml-auto sm:w-auto h-1 bg-[#005887] my-15 ml-auto"></div>

<!-- Testimonials -->
<section class="text-[#FFFDFC] text-center py-12 mb-40"> <!-- Added mb-32 here -->
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

<!-- Blue Thick Line -->
<div class="w-1/2 h-9 bg-[#FFFDFC]"></div>

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

<?php include('views/_partials/footer.php'); ?>