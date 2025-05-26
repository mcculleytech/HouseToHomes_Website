<?php include('Views/_partials/header.php'); ?>
<div  class=" text-black gap-10 lg:w-[90%] m-auto">
<!-- hero section -->
<section class="m-2 mt-8 rounded-2xl bg-My-Tan drop-shadow-2xl ">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">Lorem ipsum dolor </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod ipsa impedit sit quasi? Sit natus non ipsa. Amet magni molestiae, atque, ab neque placeat ad alias tempore quisquam delectus quia.</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white bg-blue-700 hover:bg-blue-800 rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">
                Get Started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="?action=RequestEstimate" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-[#ccc6c2] rounded-lg hover:bg-[#e6dedb] focus:ring-4 focus:ring-gray-100">
                Request an Estimate
            </a> 
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rounded-2xl">
            <img src="Lib/Images/DSC_9048.jpg" alt="mockup" class="rounded-2xl drop-shadow-sm">
        </div>                
    </div>
</section>
</div>
<!-- Services cards -->
<section id="features" class="container mx-auto px-4 space-y-6 bg-My-Tan py-8 md:py-12 lg:py-20 ">
    <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center text-[#534B6F]">

        <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Services</h2>

        <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
            Take a look at the range of services we offer. we're here to make your life a little easier!
        </p>

    </div>

    <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3 text-[#534B6F]">

        <div
            class="relative overflow-hidden rounded-xl border-2 bg-[#fffaf8] select-none hover:shadow hover:shadow-[#ccc6c2] p-2">
            <div class="flex h-[180px] flex-col justify-between rounded-xl p-6">

                <div class="space-y-2">
                    <h3 class="font-bold">Plumbing & Electrical Help</h3>
                    <p class="text-sm text-muted-foreground">From dripping faucets to flickering lights, Charlie can tackle minor plumbing and electrical jobs like replacing fixtures, unclogging drains, and installing outlets or dimmers.</p>
                </div>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-xl border-2 bg-[#fffaf8] select-none hover:shadow hover:shadow-[#ccc6c2] p-2">
            <div class="flex h-[180px] flex-col justify-between rounded-xl p-6">

                <div class="space-y-2">
                    <h3 class="font-bold">General Repairs</h3>
                    <p class="text-sm">Loose hinges, leaky faucets, cracked drywall, or squeaky doors? Charlie handles all the common household fixes that keep your home in top shape.</p>
                </div>
                                  <a href="?action=RequestEstimate&message=<?= urlencode('I\'m interested in Window & Door Repairs')?>" aria-label=""
                      class=" inline-flex items-center font-semibold text-[#00aeff] hover:text-green-800">Learn
                      more
                  </a>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-xl border-2 bg-[#fffaf8] select-none hover:shadow hover:shadow-[#ccc6c2] p-2">
            <div class="flex h-[180px] flex-col justify-between rounded-xl p-6">
                <div class="space-y-2">
                    <h3 class="font-bold">Outdoor & Seasonal Maintenance</h3>
                    <p class="text-sm text-muted-foreground">From gutter cleaning and deck repair to pressure washing and siding fixes, Charlie helps maintain your home's exterior and can handle indoor seasonal tasks like air filter changes and caulking, too.</p>
                </div>
                                  <a href="?action=RequestEstimate&message=<?= urlencode('I\'m interested in Window & Door Repairs')?>" aria-label=""
                      class=" inline-flex items-center font-semibold text-[#00aeff] hover:text-green-800">Learn
                      more
                  </a>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-xl border-2 bg-[#fffaf8] select-none hover:shadow hover:shadow-[#ccc6c2] p-2">
            <div class="flex h-[180px] flex-col justify-between rounded-xl p-6">
                <div class="space-y-2">
                    <h3 class="font-bold">Installation & Mounting</h3>
                    <p class="text-sm text-muted-foreground">Whether it's hanging blinds, mounting a TV, or installing appliances and vanities, Charlie ensures everything is safely and securely installed, just the way you want it.</p>
                </div>
                                  <a href="?action=RequestEstimate&message=<?= urlencode('I\'m interested in Caulking & Sealing')?>" aria-label=""
                      class=" inline-flex items-center font-semibold text-[#00aeff] hover:text-green-800">Learn
                      more
                  </a>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-xl border-2 bg-[#fffaf8] select-none hover:shadow hover:shadow-[#ccc6c2] p-2">
            <div class="flex h-[180px] flex-col justify-between rounded-xl p-6">
                <div class="space-y-2">
                    <h3 class="font-bold">Carpentry & Custom Builds</h3>
                    <p class="text-sm text-muted-foreground">Need shelves, trim work, or even a small shed? From fixing fences to custom carpentry and crown molding, Charlie brings precision and craftsmanship to every woodwork task.</p>
                </div>
                  <a href="?action=RequestEstimate&message=<?= urlencode('I\'m interested in Window & Door Repairs')?>" aria-label=""
                      class=" inline-flex items-center font-semibold text-[#00aeff] hover:text-green-800">Learn
                      more
                  </a>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-xl border-2 bg-[#fffaf8] select-none hover:shadow hover:shadow-[#ccc6c2] p-2">
            <div class="flex h-[180px] flex-col justify-between rounded-xl p-6">

                    <div class="space-y-2">
                    <h3 class="font-bold">Painting & Surface Finishing</h3>
                    <p class="text-sm text-muted-foreground">Freshen up your space with light painting, deck staining, or touch-ups. Charlie makes your interiors and exteriors look clean and polished again.</p>
                </div>
                  <a href="?action=RequestEstimate&message=<?= urlencode('I\'m interested in Home Maintenance.')?>" aria-label=""
                      class=" mt-2 inline-flex items-center font-semibold transition-colors duration-200 text-green-400 hover:text-green-800">Learn
                      more
                  </a>
            </div>
        </div>











    
</section>



<!-- Testimonials -->
<section class="text-black body-font"> 
  <div class="container px-5 py-24 mx-auto">
    <h1 class="text-3xl font-medium title-font text-[#534B6F] mb-12 text-center">Testimonials</h1>
    <div class="flex flex-wrap -m-4">
      <!-- Testimonial -->
      <div class="p-4 md:w-1/2 w-full text-[#534B6F]">
        <div class="h-full bg-[#f8f0eb] p-8 rounded-xl border-2 border-[#d4cac3]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="black" class="block w-5 h-5 text-[#534B6F] mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">WOW, is all I can say!! Charlie is very kind, hon-est, thorough, extremely reasonably priced, and he wired boot covers while in the house! He diagnosed the issue with our washer, we ordered the part, and he was here the day after we received it and bing, bang, boom, we were doing laundry! If Charlie can't help you remedy or repair your problem, he knows other knowledgeable and reputable people who can. Call Charlie, the owner of House to Home Solutions</p>
          <a class="inline-flex items-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-[#534B6F]">- Darcey M.</span>
            </span>
          </a>
        </div>
      </div>
      <!-- Testimonial -->
      <div class="p-4 md:w-1/2 w-full text-[#534B6F]">
        <div class="h-full bg-[#f8f0eb] p-8 rounded-xl border-2 border-[#d4cac3]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="black" class="block w-5 h-5 text-[#534B6F] mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Charlie was absolutely amazing! He installed floor ceiling curtains flawlessly, fixed the lights that were too high for me to reach even with a ladder, installed a TV, assembled two beds, and tackled so much more with incredible skill and efficiency. Hiring Charlie was truly the best decision I could have made---he exceeded my expectations in every way. His attention to detail  and ability to handle such a wide variety of tasks made it worth every penny. I couldn't be happier with my results. Highly recommend his services!</p>
          <a class="inline-flex items-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-[#534B6F]">- Rori O.</span>
            </span>
          </a>
        </div>
      </div>

      <!-- Testimonial -->
      <div class="p-4 md:w-1/2 w-full text-[#534B6F] ">
        <div class="h-full bg-[#f8f0eb] p-8 rounded-xl border-2 border-[#d4cac3]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="black" class="block w-5 h-5 text-[#534B6F] mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Charlie was super quick to respond, and he was knowledgeable and very reasonably priced! 10/10 recommend!</p>
          <a class="inline-flex items-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-[#534B6F]">- Catherine M.</span>
            </span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Contact Info Section -->
<div class="w-full mt-4 mb-10 flex flex-col items-center gap-4 text-center text-[#005887] font-sans bg-My-Tan py-6 px-4 rounded-md ">

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

<?php include('Views/_partials/footer.php'); ?>