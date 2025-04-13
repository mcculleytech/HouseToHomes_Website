 // tailwind.config.js
 const flowbite = require('flowbite/plugin');
 const forms = require('@tailwindcss/forms');
 const flowbiteDatepicker = require('flowbite-datepicker');
 
 module.exports = {
     darkMode: 'false',
   content: [
     "./path-to-your-html/**/*.html",
     "./node_modules/flowbite/**/*.js",
     "./node_modules/flowbite-datepicker/**/*.js"
   ],
   theme: {
     extend: {
       colors: {
         'primary-tan': '#ffefe7',
         'primary-light-tan': '#fff7f3',
         'primary-purple': '#534B6F',
       }
     }
   },
   plugins: [
     forms,
     flowbite,
     flowbiteDatepicker
   ],
 }
 