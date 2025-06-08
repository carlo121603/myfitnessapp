<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
    <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section id="login" class="py-20 bg-gray-50">
      <div class="container mx-auto px-4">
        <div
          class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md border border-gray-200"
        >
          <div class="text-center mb-8">
            <h2 class="text-2xl font-bold mb-2">Welcome Back</h2>
            <p class="text-gray-600">Log in to continue your fitness journey</p>
          </div>
          <form>
            <div class="mb-5">
              <label
                for="login-email"
                class="block text-gray-700 font-medium mb-2"
                >Email Address</label
              >
              <input
                type="email"
                id="login-email"
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#FF4B4B]/50 focus:border-[#FF4B4B]"
                placeholder="Enter your email"
              />
            </div>
            <div class="mb-5">
              <label
                for="login-password"
                class="block text-gray-700 font-medium mb-2"
                >Password</label
              >
              <input
                type="password"
                id="login-password"
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#FF4B4B]/50 focus:border-[#FF4B4B]"
                placeholder="Enter your password"
              />
            </div>
            <div class="flex items-center justify-between mb-5">
              <label class="custom-checkbox flex items-center">
                <input type="checkbox" class="accent-[#FF4B4B] w-4 h-4"/>
                <span class="text-sm text-gray-600 ml-2">Remember me</span>
              </label>
              <a href="#" class="text-sm text-[#FF4B4B] hover:underline"
                >Forgot password?</a
              >
            </div>
            <button
              type="submit"
              class="w-full bg-[#FF4B4B] text-white py-3 rounded-xl font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap"
            >
              Log In
            </button>
            
            <div class="mt-6 text-center">
              <p class="text-gray-600 text-sm">
                Don't have an account?
                <a href="#signup" class="text-primary hover:underline"
                  >Sign Up</a
                >
              </p>
            </div>
          </form>
        </div>
      </div>
    </section>
</body>
</html>
