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


        <section class="py-40 bg-gray-50">
          <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">

              <div class="p-6 border-b border-gray-200">
                <h2 class="text-2xl font-bold">Dashboard Preview</h2>
                <p class="text-gray-600">See what awaits after you sign up</p>
              </div>

              <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-64 bg-gray-50 p-4 border-r border-gray-200">

                <!-- User Profile -->
                  <div class="flex items-center mb-6">
                    <div
                      class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3 bg-[#F9E8E9]">
                      <i class="ri-user-line text-[rgba(255,75,75,1)]"></i>
                    </div>
                    <div>
                      <p class="font-medium">Alexander Chen</p>
                      <p class="text-xs text-gray-500">Premium Member</p>
                    </div>
                  </div>

                <!-- Nav links -->
                  <nav>
                    <a
                      href="#"
                      class="flex items-center py-2 px-3 rounded-md bg-primary/10 text-primary mb-1 bg-[#F9E8E9]">
                      <i class="ri-dashboard-line mr-3 text-[rgba(255,75,75,1)]"></i>
                      <span class="text-[rgba(255,75,75,1)]">Dashboard</span>
                    </a>
                    <a
                      href="https://readdy.ai/home/4e85c255-9e9d-45ca-b338-73609ef7ce38/8eac195b-f7ee-4f66-a53f-67e9c7de5219"
                      data-readdy="true"
                      class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-100 mb-1">
                      <i class="ri-calendar-line mr-3"></i>
                      <span>Workout Plan</span>
                    </a>
                    <a
                      href="#"
                      class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-100 mb-1">
                      <i class="ri-restaurant-line mr-3"></i>
                      <span>Meal Plan</span>
                    </a>
                    <a
                      href="#"
                      class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-100 mb-1">
                      <i class="ri-line-chart-line mr-3"></i>
                      <span>Progress Tracker</span>
                    </a>
                    <a
                      href="#"
                      class="flex items-center py-2 px-3 rounded-md text-gray-700 hover:bg-gray-100 mb-1">
                      <i class="ri-settings-line mr-3"></i>
                      <span>Settings</span>
                    </a>
                  </nav>

                  
                </div>
                <div class="flex-1 p-6">
                  <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-4">
                      Welcome back, Alexander!
                    </h3>
                    <div
                      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                      <div
                        class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                          <div
                            class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="ri-scales-line text-blue-500"></i>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500">Current Weight</p>
                            <p class="font-semibold">182 lbs</p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                          <div
                            class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="ri-target-line text-green-500"></i>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500">Target Weight</p>
                            <p class="font-semibold">170 lbs</p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                          <div
                            class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="ri-calendar-check-line text-purple-500"></i>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500">Workouts This Week</p>
                            <p class="font-semibold">3 of 5</p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                          <div
                            class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <i class="ri-fire-line text-orange-500"></i>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500">Calories Today</p>
                            <p class="font-semibold">1,850 / 2,200</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-4">Weight Progress</h3>
                    <div
                      class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 h-64"
                      id="weight-chart"
                    ></div>
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                      <h3 class="text-lg font-semibold mb-4">Today's Workout</h3>
                      <div
                        class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                          <div>
                            <h4 class="font-medium">Upper Body Strength</h4>
                            <p class="text-sm text-gray-500">
                              45 minutes • 5 exercises
                            </p>
                          </div>
                          <button
                            class="bg-primary text-white px-4 py-2 !rounded-button text-sm hover:bg-opacity-90 transition-colors whitespace-nowrap">
                            Start
                          </button>
                        </div>
                        <div class="space-y-3">
                          <div class="flex items-center">
                            <div
                              class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                              <span class="text-xs font-medium">1</span>
                            </div>
                            <div class="flex-1">
                              <p class="font-medium">Bench Press</p>
                              <p class="text-sm text-gray-500">3 sets × 10 reps</p>
                            </div>
                          </div>
                          <div class="flex items-center">
                            <div
                              class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                              <span class="text-xs font-medium">2</span>
                            </div>
                            <div class="flex-1">
                              <p class="font-medium">Shoulder Press</p>
                              <p class="text-sm text-gray-500">3 sets × 12 reps</p>
                            </div>
                          </div>
                          <div class="flex items-center">
                            <div
                              class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                              <span class="text-xs font-medium">3</span>
                            </div>
                            <div class="flex-1">
                              <p class="font-medium">Tricep Extensions</p>
                              <p class="text-sm text-gray-500">3 sets × 15 reps</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <h3 class="text-lg font-semibold mb-4">Today's Meals</h3>
                      <div
                        class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                        <div class="space-y-4">
                          <div>
                            <div class="flex items-center justify-between mb-2">
                              <h4 class="font-medium">Breakfast</h4>
                              <span class="text-sm text-gray-500">520 cal</span>
                            </div>
                            <div class="flex items-start">
                              <div
                                class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="ri-cup-line text-yellow-500"></i>
                              </div>
                              <div>
                                <p>Greek Yogurt with Berries and Granola</p>
                                <div
                                  class="flex space-x-2 text-xs text-gray-500 mt-1">
                                  <span>Protein: 24g</span>
                                  <span>Carbs: 65g</span>
                                  <span>Fat: 12g</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="flex items-center justify-between mb-2">
                              <h4 class="font-medium">Lunch</h4>
                              <span class="text-sm text-gray-500">650 cal</span>
                            </div>
                            <div class="flex items-start">
                              <div
                                class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="ri-restaurant-line text-green-500"></i>
                              </div>
                              <div>
                                <p>Grilled Chicken Salad with Avocado</p>
                                <div
                                  class="flex space-x-2 text-xs text-gray-500 mt-1">
                                  <span>Protein: 42g</span>
                                  <span>Carbs: 35g</span>
                                  <span>Fat: 28g</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

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