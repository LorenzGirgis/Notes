<x-app-layout>
  <section class="bg-white min-h-screen flex items-center justify-center">
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
          <div class="w-full bg-white rounded-lg shadow-lg sm:max-w-md xl:p-0">
              <div class="p-6 space-y-6 sm:p-8">
                  <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 text-center">
                      Sign in to your Notes
                  </h1>
                  <form class="space-y-6" action="{{ route('login') }}" method="POST">
                      @csrf   
                      <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                          <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                      </div>
                      <div class="flex items-center justify-between">
                          <a href="#" class="text-sm font-medium text-blue-600 hover:underline">Forgot password?</a>
                      </div>
                      <button type="submit" class="w-full text-white bg-black hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign In</button>
                      <p class="text-sm font-light text-gray-500 text-center">
                          Don’t have an Notes account? <a href="register" class="font-medium text-blue-600 hover:underline">Create yours now</a>
                      </p>
                  </form>
              </div>
          </div>
      </div>
  </section>
</x-app-layout>
