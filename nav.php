<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FitGoal - Achieve Your Fitness Goals with Confidence</title>
   <!-- Tailwind CSS CDN -->
   <!-- <script src="https://cdn.tailwindcss.com"></script> -->
   <!-- <style>
      nav{
      color: rgb(55 65 81);
    } 
  </style> -->
</head>
<body>
<nav class="px-4 lg:px-18 py-2.5 bg-white relative z-50 border-b border-gray-200">
        <div class="flex justify-between items-center text-lg py-4">

          <div class="flex items-center space-x-8">
            <a href="#" class="font-lobster text-2xl sm:text-3xl md:text-4xl">FitGoal</a>
            <ul class="hidden md:flex space-x-4 text-base">
              <li><a href="#" class="hover:no-underline feature hover:text-[#FF4B4B] transition duration-400">Features</a></li>
              <li><a href="#" class="hover:no-underline testimonials hover:text-[#FF4B4B] transition duration-400">Testimonials</a></li>
              <li><a href="#" class="hover:no-underline faqs hover:text-[#FF4B4B] transition duration-400">FAQs</a></li>
            </ul>
          </div>

          <!-- Desktop Right Side -->
          <div class="hidden md:flex items-center space-x-8 text-base">
            <a href="#" class="text-base hover:text-[#FF4B4B] transition duration-400">Login</a>
            <button class="bg-[#FF4B4B] text-white sm:px-5 md:px-6 py-2 rounded-xl hover:bg-red-600 transition duration-300">Sign Up Free</button>
          </div>

          <!-- Burger Icon -->
          <button class="md:hidden text-2xl" id="menu-btn">☰</button>
        </div>

        <!-- Mobile Slide Menu -->
        <div
          id="mobile-menu"
          class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
          <div class="p-4 flex flex-col space-y-4 text-base">
            <button id="close-btn" class="text-2xl self-end">×</button>
            <a href="#" class="block">Features</a>
            <a href="#" class="block">Testimonials</a>
            <a href="#" class="block">FAQs</a>
            <a href="#" class="block">Login</a>
            <button class="w-full bg-[#FF4B4B] text-white px-5 py-2 rounded-xl mt-2 hover:bg-red-600 transition duration-400">Sign Up Free</button>
          </div>
        </div>
      </nav>
</body>
</html>
