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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

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
    
  </style>
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
            <h2 class="text-3xl font-bold text-[#2d3748]">Success Stories</h2>
            <p class="my-4 text-[#4b5563] max-w-2xl mx-auto">
              Hear from our users who have transformed their fitness journey with FitGoal Tracker.
            </p>
          </div>

          <!-- Swiper Carousel -->
          <div class="swiper mySwiper pb-16">
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4 w-xl">
                  <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4">
                    <div class="w-full h-full flex items-center justify-center bg-[rgba(255,75,75,0.2)] text-primary">
                      <i class="ri-user-line ri-lg text-[rgba(255,75,75,1)]"></i>
                    </div>
                  </div>
                  <div>
                    <h4 class="font-semibold">Emily Robertson</h4>
                    <p class="text-sm text-gray-500"></p>
                  </div>
                </div>
                <p class="text-gray-600">"FitGoal Tracker completely changed my approach to fitness. The meal planning feature helped me stay consistent with my nutrition, which was always my biggest challenge."</p>
                <div class="mt-4 flex">
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="swiper-slide bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                  <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4">
                    <div class="w-full h-full flex items-center justify-center bg-[rgba(255,75,75,0.2)] text-primary">
                      <i class="ri-user-line ri-lg text-[rgba(255,75,75,1)]"></i>
                    </div>
                  </div>
                  <div>
                    <h4 class="font-semibold">Michael Donovan</h4>
                    <p class="text-sm text-gray-500"></p>
                  </div>
                </div>
                <p class="text-gray-600">"As someone who struggled with staying consistent at the gym, the workout plans and progress tracking have been game-changers. I can actually see my improvements week by week."</p>
                <div class="mt-4 flex">
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="swiper-slide bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                  <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4">
                    <div class="w-full h-full flex items-center justify-center bg-[rgba(255,75,75,0.2)] text-primary">
                      <i class="ri-user-line ri-lg text-[rgba(255,75,75,1)]"></i>
                    </div>
                  </div>
                  <div>
                    <h4 class="font-semibold">Sophia Martinez</h4>
                    <p class="text-sm text-gray-500"></p>
                  </div>
                </div>
                <p class="text-gray-600">"The running program in FitGoal Tracker helped me train for my first marathon. The structured approach and progress tracking kept me accountable throughout my training."</p>
                <div class="mt-4 flex">
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-half-fill text-yellow-400 text-xl"></i>
                </div>
              </div>

              <!-- Slide 4 -->
              <div class="swiper-slide bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                  <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4">
                    <div class="w-full h-full flex items-center justify-center bg-[rgba(255,75,75,0.2)] text-primary">
                      <i class="ri-user-line ri-lg text-[rgba(255,75,75,1)]"></i>
                    </div>
                  </div>
                  <div>
                    <h4 class="font-semibold">Emily Robertson</h4>
                    <p class="text-sm text-gray-500"></p>
                  </div>
                </div>
                <p class="text-gray-600">"FitGoal Tracker completely changed my approach to fitness. The meal planning feature helped me stay consistent with my nutrition, which was always my biggest challenge."</p>
                <div class="mt-4 flex">
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                  <i class="ri-star-fill text-yellow-400 text-xl"></i>
                </div>
              </div>
            </div>
          </div>
        </section>



        <section class="pt-[80px] bg-gray-50">
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
                    <span
                      href="#"
                      class="flex items-center py-2 px-3 rounded-md bg-primary/10 text-primary mb-1 bg-[#F9E8E9]">
                      <i class="ri-dashboard-line mr-3 text-[rgba(255,75,75,1)]"></i>
                      <span class="text-[rgba(255,75,75,1)]">Dashboard</span>
                    </span>
                    <span
                      href="https://readdy.ai/home/4e85c255-9e9d-45ca-b338-73609ef7ce38/8eac195b-f7ee-4f66-a53f-67e9c7de5219"
                      data-readdy="true"
                      class="flex items-center py-2 px-3 rounded-md text-gray-700 mb-1">
                      <i class="ri-calendar-line mr-3"></i>
                      <span>Workout Plan</span>
                    </span>
                    <span
                      href="#"
                      class="flex items-center py-2 px-3 rounded-md text-gray-700 mb-1">
                      <i class="ri-restaurant-line mr-3"></i>
                      <span>Meal Plan</span>
                    </span>
                    <span
                      href="#"
                      class="flex items-center py-2 px-3 rounded-md text-gray-700 mb-1">
                      <i class="ri-line-chart-line mr-3"></i>
                      <span>Progress Tracker</span>
                    </span>
                    <span
                      href="#"
                      class="flex items-center py-2 px-3 rounded-md text-gray-700 mb-1">
                      <i class="ri-settings-line mr-3"></i>
                      <span>Settings</span>
                    </span>
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
                              class="bg-[#DC2626] text-white px-4 py-2 rounded text-sm transition-colors whitespace-nowrap">
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
        

        <section id="faq" class="py-40 bg-gray-50">
          <div class="container mx-auto px-4">
            <div class="text-center mb-16">
              <h2 class="text-3xl font-bold mb-4">Frequently Asked Questions</h2>
              <p class="text-gray-600 max-w-2xl mx-auto">
                Find answers to common questions about FitGoal Tracker
              </p>
            </div>
            <div class="max-w-3xl mx-auto">
              <div class="mb-6">
                <button
                  class="flex items-center justify-between w-full text-left p-4 bg-white rounded-lg shadow-sm focus:outline-none"
                  id="faq-1-btn"
                >
                  <h3 class="font-semibold">
                    How do I get started with FitGoal Tracker?
                  </h3>
                  <i class="ri-arrow-down-s-line text-gray-400" id="faq-1-icon"></i>
                </button>
                <div
                  class="hidden bg-white px-4 pb-4 rounded-b-lg"
                  id="faq-1-content"
                >
                  <p class="text-gray-600">
                    Getting started is easy! Simply sign up for an account, complete
                    your fitness profile, and set your goals. Our system will guide
                    you through the process and recommend workout and meal plans
                    based on your objectives. You can start tracking your progress
                    right away.
                  </p>
                </div>
              </div>
              <div class="mb-6">
                <button
                  class="flex items-center justify-between w-full text-left p-4 bg-white rounded-lg shadow-sm focus:outline-none"
                  id="faq-2-btn"
                >
                  <h3 class="font-semibold">Can I customize my workout plans?</h3>
                  <i class="ri-arrow-down-s-line text-gray-400" id="faq-2-icon"></i>
                </button>
                <div
                  class="hidden bg-white px-4 pb-4 rounded-b-lg"
                  id="faq-2-content"
                >
                  <p class="text-gray-600">
                    Yes, absolutely! While we provide pre-made workout plans, you
                    can customize them to fit your preferences, available equipment,
                    and schedule. Premium and Elite members can create completely
                    custom workout plans from scratch.
                  </p>
                </div>
              </div>
              <div class="mb-6">
                <button
                  class="flex items-center justify-between w-full text-left p-4 bg-white rounded-lg shadow-sm focus:outline-none"
                  id="faq-3-btn"
                >
                  <h3 class="font-semibold">
                    How accurate is the calorie tracking?
                  </h3>
                  <i class="ri-arrow-down-s-line text-gray-400" id="faq-3-icon"></i>
                </button>
                <div
                  class="hidden bg-white px-4 pb-4 rounded-b-lg"
                  id="faq-3-content"
                >
                  <p class="text-gray-600">
                    Our calorie tracking is based on industry-standard nutritional
                    databases. While no calorie tracking system is 100% accurate, we
                    strive for the highest possible precision. Premium and Elite
                    members can access more detailed nutritional information and
                    customization options.
                  </p>
                </div>
              </div>
              <div class="mb-6">
                <button
                  class="flex items-center justify-between w-full text-left p-4 bg-white rounded-lg shadow-sm focus:outline-none"
                  id="faq-4-btn"
                >
                  <h3 class="font-semibold">
                    Can I cancel my subscription anytime?
                  </h3>
                  <i class="ri-arrow-down-s-line text-gray-400" id="faq-4-icon"></i>
                </button>
                <div
                  class="hidden bg-white px-4 pb-4 rounded-b-lg"
                  id="faq-4-content"
                >
                  <p class="text-gray-600">
                    Yes, you can cancel your subscription at any time. Your premium
                    features will remain active until the end of your current
                    billing period. There are no cancellation fees or hidden
                    charges.
                  </p>
                </div>
              </div>
              <div class="mb-6">
                <button
                  class="flex items-center justify-between w-full text-left p-4 bg-white rounded-lg shadow-sm focus:outline-none"
                  id="faq-5-btn"
                >
                  <h3 class="font-semibold">Is my data secure?</h3>
                  <i class="ri-arrow-down-s-line text-gray-400" id="faq-5-icon"></i>
                </button>
                <div
                  class="hidden bg-white px-4 pb-4 rounded-b-lg"
                  id="faq-5-content"
                >
                  <p class="text-gray-600">
                    We take data security very seriously. All your personal
                    information and fitness data is encrypted and stored securely.
                    We never share your information with third parties without your
                    explicit consent. You can review our privacy policy for more
                    details.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="py-16 bg-[#FF4B4B]">
          <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">
              Ready to Transform Your Fitness Journey?
            </h2>
            <p class="text-white text-lg mb-8 max-w-2xl mx-auto">
              Join thousands of users who have achieved their fitness goals with
              FitGoal Tracker.
            </p>
            <a
              href="#signup"
              class="bg-white text-[#FF4B4B] px-8 py-3 rounded font-medium hover:bg-gray-100 hover:-translate-y-1 transition-transform duration-900 transition-colors inline-block whitespace-nowrap"
              >Start Free Today</a
            >
          </div>
        </section>
      </main>

      <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
              <h3 class="text-xl font-['Pacifico'] mb-4">FitGoal</h3>
              <p class="text-gray-400 mb-4">
                Your all-in-one fitness companion for tracking workouts, planning
                meals, and achieving your goals.
              </p>
              <div class="flex space-x-4">
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  <i class="ri-instagram-line ri-lg"></i>
                </a>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  <i class="ri-facebook-line ri-lg"></i>
                </a>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  <i class="ri-twitter-x-line ri-lg"></i>
                </a>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  <i class="ri-youtube-line ri-lg"></i>
                </a>
              </div>
            </div>
            <div>
              <h4 class="font-semibold mb-4">Company</h4>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors"
                    >About Us</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors"
                    >Careers</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors"
                    >Blog</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors"
                    >Press</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h4 class="font-semibold mb-4">Support</h4>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors"
                    >Help Center</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors"
                    >Contact Us</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors"
                    >Privacy Policy</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors"
                    >Terms of Service</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h4 class="font-semibold mb-4">Stay Updated</h4>
              <p class="text-gray-400 mb-4">
                Subscribe to our newsletter for tips and updates.
              </p>
              <form class="flex">
                <input
                  type="email"
                  placeholder="Your email"
                  class="px-4 py-2 w-full rounded-l border-none focus:outline-none text-gray-900"
                />
                <button
                  type="submit"
                  class="bg-[#FF4B4B] text-white px-4 py-2 rounded-r hover:bg-opacity-90 transition-colors whitespace-nowrap"
                >
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div
            class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center"
          >
            <p class="text-gray-400 text-sm mb-4 md:mb-0">
              © 2025 FitGoal Tracker. All rights reserved.
            </p>
            <!-- <div class="flex space-x-6">
              <div class="flex items-center">
                <i class="ri-visa-fill text-gray-300 ri-lg mr-2"></i>
                <i class="ri-mastercard-fill text-gray-300 ri-lg mr-2"></i>
                <i class="ri-paypal-fill text-gray-300 ri-lg mr-2"></i>
                <i class="ri-apple-fill text-gray-300 ri-lg"></i>
              </div>
            </div> -->
          </div>
        </div>
      </footer>


      <button 
        id="backToTopBtn" 
        class="fixed bottom-8 right-8 w-12 h-12 rounded-full bg-[#FF4B4B] text-white shadow-lg hover:bg-red-600 transition-all duration-300 opacity-0 invisible flex items-center justify-center z-40"
        aria-label="Back to top">
        <i class="ri-arrow-up-line text-xl"></i>
      </button>


      <script> 
        const backToTopBtn = document.getElementById('backToTopBtn');
        
        window.addEventListener('scroll', () => {
          if (window.pageYOffset > 300) {
            backToTopBtn.classList.remove('opacity-0', 'invisible');
            backToTopBtn.classList.add('opacity-100', 'visible');
          } else {
            backToTopBtn.classList.remove('opacity-100', 'visible');
            backToTopBtn.classList.add('opacity-0', 'invisible');
          }
        });

        backToTopBtn.addEventListener('click', () => {
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        });
      </script>

      <script id="faq-accordion">
        document.addEventListener("DOMContentLoaded", function () {
          const faqButtons = document.querySelectorAll('[id^="faq-"][id$="-btn"]');
          faqButtons.forEach((button) => {
            button.addEventListener("click", function () {
              const id = this.id.replace("-btn", "");
              const content = document.getElementById(`${id}-content`);
              const icon = document.getElementById(`${id}-icon`);
              if (content.classList.contains("hidden")) {
                content.classList.remove("hidden");
                icon.classList.remove("ri-arrow-down-s-line");
                icon.classList.add("ri-arrow-up-s-line");
              } else {
                content.classList.add("hidden");
                icon.classList.remove("ri-arrow-up-s-line");
                icon.classList.add("ri-arrow-down-s-line");
              }
            });
          });
        });
      </script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
      <script id="chart-initialization">
      document.addEventListener("DOMContentLoaded", function () {
        // Initialize weight chart
        const weightChart = document.getElementById("weight-chart");
        if (weightChart) {
          const chart = echarts.init(weightChart);
          const option = {
            animation: false,
            grid: {
              top: 20,
              right: 20,
              bottom: 40,
              left: 50,
            },
            tooltip: {
              trigger: "axis",
              backgroundColor: "rgba(255, 255, 255, 0.8)",
              borderColor: "#E2E8F0",
              textStyle: {
                color: "#1f2937",
              },
            },
            xAxis: {
              type: "category",
              data: [
                "May 22",
                "May 24",
                "May 26",
                "May 28",
                "May 30",
                "Jun 1",
                "Jun 3",
                "Jun 5",
                "Jun 7",
                "Jun 9",
                "Jun 11",
                "Jun 13",
              ],
              axisLine: {
                lineStyle: {
                  color: "#E2E8F0",
                },
              },
              axisLabel: {
                color: "#1f2937",
              },
            },
            yAxis: {
              type: "value",
              min: 175,
              max: 190,
              axisLine: {
                lineStyle: {
                  color: "#E2E8F0",
                },
              },
              axisLabel: {
                color: "#1f2937",
                formatter: "{value} lbs",
              },
              splitLine: {
                lineStyle: {
                  color: "#E2E8F0",
                  type: "dashed",
                },
              },
            },
            series: [
              {
                name: "Weight",
                type: "line",
                data: [
                  189, 188, 187, 186.5, 185, 184.5, 184, 183.5, 183, 182.5, 182, 182,
                ],
                smooth: true,
                symbol: "none",
                lineStyle: {
                  color: "rgba(87, 181, 231, 1)",
                  width: 3,
                },
                areaStyle: {
                  color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                    {
                      offset: 0,
                      color: "rgba(87, 181, 231, 0.3)",
                    },
                    {
                      offset: 1,
                      color: "rgba(87, 181, 231, 0.1)",
                    },
                  ]),
                },
              },
              {
                name: "Target",
                type: "line",
                data: [170, 170, 170, 170, 170, 170, 170, 170, 170, 170, 170, 170],
                lineStyle: {
                  color: "rgba(252, 141, 98, 0.7)",
                  type: "dashed",
                  width: 2,
                },
                symbol: "none",
              },
            ],
          };
          chart.setOption(option);
          window.addEventListener("resize", function () {
            chart.resize();
          });
        }
      });
    </script>

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

      <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        },
        speed: 800,
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });
    </script>

  </body>
</html>