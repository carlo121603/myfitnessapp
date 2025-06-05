<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FitGoal - Achieve Your Fitness Goals with Confidence</title>
    <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font for Logo -->
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <!-- Remix icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

  <style>
    .font-lobster {
      font-family: 'Lobster', cursive;
      color:#FF4B4B;
    }

    nav{
      color: rgb(55 65 81);
    }

    body{
      font-family: 'Inter', sans-serif;
    }

    /*.feature:hover,
    .testimonials:hover,
    .faqs:hover
    {
      color: #FF4B4B;
      transition: 0.3 ease;
    }*/


  </style>
</head>
  <body>
      <nav class="px-4 lg:px-18 py-2.5 bg-white relative z-50">
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
          class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out md:hidden"
        >
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



      <main>
        <div class="relative bg-[url('Images/exercise.jpg')] bg-cover bg-center h-[600px] w-full">
          <div 
          class="absolute inset-0
          bg-[linear-gradient(to_right,rgba(255,255,255,1)_0%,rgba(255,255,255,1)_50%,rgba(255,255,255,0.2)_80%,rgba(255,255,255,0)_100%)]">

            <div class="flex items-center h-full mx-3 px-3">
              <div class="flex flex-col items-start max-w-2xl w-full">
                
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">
                  Achieve Your Fitness Goals with Confidence
                </h1>

                <p class="text-gray-900 text-xl mb-8 text-shadow-[0_1px_3px_rgba(255,255,255,0.6)]">
                  Track your workouts, plan your meals, and monitor your progress all in one place. Join thousands of users who have transformed their fitness journey.
                </p>

                
                <a href="#" class="text-white px-7 py-3 rounded-xl w-full md:w-auto text-center bg-[#FF4B4B] hover:bg-red-600 transition">
                  Start your journey
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="pt-20 mb-16 text-center">
          <h2 class="text-3xl font-bold text-[#2d3748]">
            Everything You Need to Succeed
          </h2>

          <p class="my-4 text-[#4b5563] max-w-2xl mx-auto">
            Our comprehensive platform provides all the tools you need to track your fitness journey
            and achieve your goals.
          </p>
        </div>


        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 mb-20">
          <div class="feature-card bg-white p-6 rounded-lg shadow-md border border-gray-100 transition-all duration-300 hover:-translate-y-1
          hover:shadow-xl">
            <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4 bg-[rgba(255,75,75,0.2)]">
              <img src="Images/icons/target.png" alt="target picture">
            </div>
            <div class="mb-2 text-xl font-semibold text-[#2d3748]">Smart Goal Setting</div>
            <div class="text-gray-600">Set personalized fitness goals based on your body type, experience level, and preferences.</div>
          </div>

          <div class="feature-card bg-white p-6 rounded-lg shadow-md border border-gray-100 transition-all duration-300 hover:-translate-y-1
          hover:shadow-xl">
          <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4 bg-[rgba(255,75,75,0.2)]">
              <img src="Images/icons/calendar.png" alt="calendar picture">
            </div>
            <div class="mb-2 text-xl font-semibold text-[#2d3748]">Customize Workout Plans</div>
            <div class="text-gray-600">Get tailored workout routines that adapt to your progress and schedule.</div>
          </div>

          <div class="feature-card bg-white p-6 rounded-lg shadow-md border border-gray-100 transition-all duration-300 hover:-translate-y-1
          hover:shadow-xl">
          <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4 bg-[rgba(255,75,75,0.2)]">
              <img src="Images/icons/fork.png" alt="fork picture">
            </div>
            <div class="mb-2 text-xl font-semibold text-[#2d3748]">Nutrition Guidance</div>
            <div class="text-gray-600">Receive meal suggestions and track your nutrition to fuel your workouts effectively.</div>
          </div>
          
          <div class="feature-card bg-white p-6 rounded-lg shadow-md border border-gray-100 transition-all duration-300 hover:-translate-y-1
          hover:shadow-xl">
          <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4 bg-[rgba(255,75,75,0.2)]">
              <img src="Images/icons/progress.png" alt="progress picture">
            </div>
            <div class="mb-2 text-xl font-semibold text-[#2d3748]">Progress Tracking</div>
            <div class="text-gray-600">Visualize your progress with detailed charts and metrics to stay motivated.</div>
          </div>
        </section>

        <!-- Icons 
        <div> Icons made by <a href="https://www.flaticon.com/authors/vectorsmarket15" title="vectorsmarket15"> vectorsmarket15 </a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com'</a></div> 

        <div> Icons made by <a href="https://www.freepik.com" title="Freepik"> Freepik </a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com'</a></div>

        <div> Icons made by <a href="https://www.freepik.com" title="Freepik"> Freepik </a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com'</a></div>

        <div> Icons made by <a href="https://www.freepik.com" title="Freepik"> Freepik </a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com'</a></div>
        -->

        <section class="bg-[#F9FAFB] px-4">
          <div class="pt-16 mb-16 text-center">
            <h2 class="text-3xl font-bold text-[#2d3748]">
             Success Stories
            </h2>

            <p class="my-4 text-[#4b5563] max-w-2xl mx-auto">
              Hear from our users who have transformed their fitness journey with FitGoal Tracker.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
              <div class="flex items-center mb-4">
                <!-- user's icon -->
                 <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4">
                  <div class="w-full h-full flex items-center justify-center bg-[rgba(255,75,75,0.2)] text-primary"><i class="ri-user-line ri-lg text-[rgba(255,75,75,1)]"></i></div>
                 </div>
                 <!-- user's name -->
                  <div>
                    <h4 class="font-semibold">Emily Robertson</h4>
                    <p class="text-sm text-gray-500"></p>
                  </div>
              </div>
              <!-- Testimonial -->
              <p class="text-gray-600">"FitGoal Tracker completely changed my approach to fitness. The meal planning feature helped me stay consistent with my nutrition, which was always my biggest challenge."</p>
              <div class="mt-4 flex">
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              </div>
            </div>


            <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
                <!-- user's icon -->
                 <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4">
                  <div class="w-full h-full flex items-center justify-center bg-[rgba(255,75,75,0.2)] text-primary"><i class="ri-user-line ri-lg text-[rgba(255,75,75,1)]"></i></div>
                 </div>
                 <!-- user's name -->
                  <div>
                    <h4 class="font-semibold">Michael Donovan</h4>
                    <p class="text-sm text-gray-500"></p>
                  </div>
              </div>  
              <!-- Testimonial -->
              <p class="text-gray-600">"As someone who struggled with staying consistent at the gym, the workout plans and progress tracking have been game-changers. I can actually see my improvements week by week."</p>
              <div class="mt-4 flex">
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
                <!-- user's icon -->
                 <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4">
                  <div class="w-full h-full flex items-center justify-center bg-[rgba(255,75,75,0.2)] text-primary"><i class="ri-user-line ri-lg text-[rgba(255,75,75,1)]"></i></div>
                 </div>
                 <!-- user's name -->
                  <div>
                    <h4 class="font-semibold">Sophia Martinez</h4>
                    <p class="text-sm text-gray-500"></p>
                  </div>
              </div> 
              <!-- Testimonial -->
              <p class="text-gray-600">"The running program in FitGoal Tracker helped me train for my first marathon. The structured approach and progress tracking kept me accountable throughout my training."</p>
              <div class="mt-4 flex">
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-fill text-yellow-400 text-xl"></i>
              <i class="ri-star-half-fill text-yellow-400 text-xl"></i>
              </div>
            </div>
          </div>
        </section>


        <section>
          <div class="container mx-auto px-4">
            <div class="p-6 border-b border-gray-20">
              <h2>Dashboard Preview</h2>
              <p>See what awaits after you sign up</p>
            </div>

          </div>
        </section>
        
      </main>




    <script>
      const menuBtn = document.getElementById('menu-btn');
      const closeBtn = document.getElementById('close-btn');
      const mobileMenu = document.getElementById('mobile-menu');

      menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
      });

      closeBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('translate-x-full');
      });
    </script>


  </body>
</html>