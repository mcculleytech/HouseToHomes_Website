<?php include('Views/_partials/header.php'); ?>

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

<div class="extend-tan-down mb-4 bg-My-Tan flex flex-col items-start pb-4 px-3">
  <label class="block mb-2 text-sm font-medium uppercase text-black">Available Days</label>

  <div id="days" class="relative w-93">
    <button
      type="button"
      id="daysBtn"
      class="w-full text-[#5a5451] bg-transparent px-3 py-2 rounded outline-1 outline-[#b3a7a2] focus:outline-2 focus:outline-[#5a5451] flex justify-between items-center"
    >
      <span id="daysBtnLabel">Select Days</span>
      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"/></svg>
    </button>

    <ul
      class="absolute left-0 right-0 mt-1 max-h-48 overflow-auto bg-white rounded-lg shadow z-10 hidden"
      id="daysMenu"
    >
      <!-- NOTE: unique IDs for each checkbox -->
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="days[]" value="Monday"> Monday</label></li>
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="days[]" value="Tuesday"> Tuesday</label></li>
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="days[]" value="Wednesday"> Wednesday</label></li>
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="days[]" value="Thursday"> Thursday</label></li>
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="days[]" value="Friday"> Friday</label></li>
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="days[]" value="Saturday"> Saturday</label></li>
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="days[]" value="Sunday"> Sunday</label></li>
    </ul>

    <!-- error message, hidden by default -->
    <p id="daysError" class="mt-1 text-red-500 hidden" style="color:#a83232">
      Please select at least one day.
    </p>
  </div>
</div>

<!-- Available Times -->
<div class="extend-tan-down mb-5 bg-My-Tan flex flex-col items-start pb-4  px-3">
  <label class="block mb-2 text-sm font-medium uppercase text-black">Available Times</label>

  <div id="hours" class="relative w-93">
    <button
      type="button"
      id="hoursBtn"
      class="w-full text-[#5a5451] bg-transparent px-3 py-2 rounded outline outline-1 outline-[#b3a7a2] focus:outline-2 focus:outline-[#5a5451] flex justify-between items-center"
    >
      <span id="hoursBtnLabel">Select Times</span>
      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"/></svg>
    </button>

    <ul
      class="absolute left-0 right-0 mt-1 max-h-48 overflow-auto bg-white rounded-lg shadow z-10 hidden"
      id="hoursMenu"
    >
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="hours[]" value="Mornings"> Mornings</label></li>
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="hours[]" value="Evenings"> Evenings</label></li>
      <li class="px-4 py-2 text-black bg-[#fff7f3]"><label><input type="checkbox" name="hours[]" value="Nights"> Nights</label></li>
    </ul>

    <p id="hoursError" class="mt-1 text-[#a83232] hidden" style="color:#a83232">
      Please select at least one time.
    </p>
  </div>
</div>

        
    <div class="extend-tan-down mb-5 bg-My-Tan flex justify-center items-center pb-4 md:rounded-b-lg lg:rounded-b-lg">

      <button type="submit" 
              class=" block mb-auto text-xl text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                      focus:ring-blue-300 font-medium rounded-lg  w-50 sm:w-auto px-5 py-2.5 text-center 
                      dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">Submit</button>
        </div>
</form>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const widgets = [
      {
        btn: document.getElementById('daysBtn'),
        menu: document.getElementById('daysMenu'),
        labelEl: document.getElementById('daysBtnLabel'),
        errorEl:  document.getElementById('daysError'),
        name:     'days[]',
        placeholder: 'Select Days'
      },
      {
        btn: document.getElementById('hoursBtn'),
        menu: document.getElementById('hoursMenu'),
        labelEl: document.getElementById('hoursBtnLabel'),
        errorEl:  document.getElementById('hoursError'),
        name:     'hours[]',
        placeholder: 'Select Times'
      }
    ];

    widgets.forEach(w => {
      let selected = [];

      // toggle open/closed
      w.btn.addEventListener('click', () => {
        w.menu.classList.toggle('hidden');
      });

      // update on any checkbox change
      w.menu.addEventListener('change', e => {
        const cb = e.target;
        if (cb.name === w.name) {
          if (cb.checked)      selected.push(cb.value);
          else                  selected = selected.filter(v => v !== cb.value);
          // update button text
          w.labelEl.textContent = selected.length
            ? selected.join(', ')
            : w.placeholder;
          // hide error once they've chosen something
          if (selected.length) w.errorEl.classList.add('hidden');
        }
      });

      // block form submit if nothing picked
      form.addEventListener('submit', e => {
        if (selected.length === 0) {
          e.preventDefault();
          w.errorEl.classList.remove('hidden');
          w.btn.focus();
        }
      });
    });
  });
</script>


</div>



<?php include('Views/_partials/footer.php'); ?>
