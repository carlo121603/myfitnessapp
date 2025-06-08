<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
    <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="mx-auto py-5 px-4">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md border border-gray-200">
      <!-- top portion of the form -->
      <div class="text-center mb-8">
        <h1 class="text-2xl font-bold mb-2">Create Your Account</h1>
        <p class="text-[#4b5563]">Start your fitness journey today</p>
      </div>

      <form action="">
        <div class="mb-5">
          <label for="fullname" class="block text-gray-700 font-medium mb-2">Full Name</label>
          <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#FF4B4B]/50 focus:border-[#FF4B4B]" placeholder="e.g. Juan Dela Cruz">
        </div>

        <div class="mb-5">
          <label for="emailaddress" class="block text-gray-700 font-medium mb-2">Email Address</label>
          <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#FF4B4B]/50 focus:border-[#FF4B4B]" placeholder="e.g. example123@gmail.com">
        </div>

        <div class="mb-5">
          <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
          <input type="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#FF4B4B]/50 focus:border-[#FF4B4B]" placeholder="Enter your password">

          <!-- Strength bar -->
          <div class="h-2 w-full bg-gray-200 rounded mt-2">
            <div id="strength-bar" class="h-full rounded transition-all duration-300"></div>
          </div>
          <p id="strength-text" class="text-sm mt-1 text-gray-600"></p>
        </div>

        <div class="mb-5">
          <label for="fitnessgoallabel" class="block text-gray-700 font-medium mb-2">Your Fitness Goal</label>
          <select class="w-full px-4 py-2 border border-gray-300 rounded appearance-none focus:outline-none focus:ring-2 focus:ring-[#FF4B4B]/50 focus:border-[#FF4B4B] bg-white pr-8">
            <option disabled selected>Select your primary goal</option>
            <option value="Lose Fat">Lose Fat</option>
            <option value="Gain Muscle">Gain Muscle</option>
            <option value="Gain Muscle & Lose Fat">Gain Muscle & Lose Fat</option>
          </select>
        </div>

        <div class="mb-5">
          <label class="custom-checkbox flex items-center">
            <input type="checkbox" class="accent-[#FF4B4B] w-4 h-4">
            <span class="checkmark"></span>
            <span class="text-sm text-gray-600 ml-2">
              I agree to the <a href="" class="text-[#FF4B4B]">Terms of Service</a> and
              <a href="" class="text-[#FF4B4B]">Privacy Policy</a>
            </span>
          </label>
        </div>
        
        <div>
          <button type="submit" class="w-full bg-[#FF4B4B] text-white py-3 rounded-xl font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">
            Create Account
          </button>
        </div>

        <div class="mt-6 text-center">
          <p class="text-gray-600 text-sm">
            Already have an account? <a href="" class="text-[#FF4B4B]">Log in</a>
          </p>
        </div>
      </form>

    </div>
  </div>


  <script>
  const password = document.getElementById("password");
  const strengthBar = document.getElementById("strength-bar");
  const strengthText = document.getElementById("strength-text");

  password.addEventListener("input", () => {
    const val = password.value;
    let strength = 0;

    if (val.length >= 6) strength++;
    if (val.length >= 8) strength++;
    if (/[A-Z]/.test(val)) strength++;
    if (/[0-9]/.test(val)) strength++;
    if (/[^A-Za-z0-9]/.test(val)) strength++;

    switch (strength) {
      case 0:
        strengthBar.style.width = "0%";
        strengthBar.className = "";
        strengthText.textContent = "";
        break;
      case 1:
        strengthBar.style.width = "20%";
        strengthBar.className = "h-full bg-red-500 rounded";
        strengthText.textContent = "Very Weak";
        break;
      case 2:
        strengthBar.style.width = "40%";
        strengthBar.className = "h-full bg-orange-500 rounded";
        strengthText.textContent = "Weak";
        break;
      case 3:
        strengthBar.style.width = "60%";
        strengthBar.className = "h-full bg-yellow-500 rounded";
        strengthText.textContent = "Moderate";
        break;
      case 4:
        strengthBar.style.width = "80%";
        strengthBar.className = "h-full bg-blue-500 rounded";
        strengthText.textContent = "Strong";
        break;
      case 5:
        strengthBar.style.width = "100%";
        strengthBar.className = "h-full bg-green-500 rounded";
        strengthText.textContent = "Very Strong";
        break;
    }
  });
</script>
</body>
</html>
