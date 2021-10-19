<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap');
      </style>
</head>
<body>
 <!-- header start -->
 <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
    <img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-parking-airport-kiranshastry-lineal-color-kiranshastry.png"/>
    <span class="ml-2 font-extrabold antialiased text-xl">Parking Mangement</span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
   <a href="loginpage.php"><button class="inline-flex items-center font-bold bg-red-100 border-2 py-1 px-3 focus:outline-none hover:bg-red-500 rounded text-lg ml-3 mt-4 mr-2 md:mt-0"><img src="https://img.icons8.com/color-glass/25/000000/home.png"/>Home</button></a>
   <a href="loginpage.php"><button  class="inline-flex items-center font-bold bg-red-100 border-2 py-1 px-3 focus:outline-none hover:bg-red-500 rounded text-lg mt-4 mr-2 md:mt-0"><img src="https://img.icons8.com/color/25/000000/about.png"/>About us</button>
   <a href="loginpage.php"><button class="inline-flex items-center  font-bold bg-red-100 border-2 py-1 px-3 focus:outline-none hover:bg-red-500 rounded text-lg mt-4 mr-1 md:mt-0"><img src="https://img.icons8.com/ios-filled/25/4a90e2/address--v1.png"/>Contact Us</button>
            
</nav>
         <a href="login.php"><button  class=" mr-3 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700  hover:border-blue-500 rounded">
            Login
          </button>
         <a  href="signup.php"> <button  class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
            Signup
          </button>
</header>
    <!-- header end -->
    
      
    <section class="text-gray-600 body-font bg-indigo-100">
        <div class=" container mx-auto flex flex-col px-2 py-12 justify-center items-center">
          <img class="  lg:w-1/4 md:w-4/4 w-5/6 mb-5 object-cover object-center rounded" alt="hero" src="card image/profile-2.jpeg">
          <div class="justify-center mt-auto ">
            <button class="inline-flex text-white bg-green-500 border-0 py-0 px-0 focus:outline-none hover:bg-green-600 padding-20 rounded text-lg">Change Profile Photo</button>
        </div>
          <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Basic Information</h1>
            <p class="mb-8 leading-relaxed"></p>
            <div class="flex w-full justify-center items-end">
              <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                <label for="hero-field" class="leading-7 text-2xl text-blue-600">Name: </label>
                <input type="text" id="hero-field"  value="Nishant Bhagat" name="hero-field" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-blue-200 focus:bg-transparent border border-gray-300 focus:border-blue-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Edit</button>
            </div>
            <div class="flex w-full justify-center items-end">
                <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                  <label for="hero-field" class="leading-7 text-2xl text-blue-600">Email:</label>
                  <input type="text" id="hero-field"  value="6464964646@gmail.com" name="hero-field" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-blue-200 focus:bg-transparent border border-gray-300 focus:border-blue-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Edit</button>
              </div>
              <div class="flex w-full justify-center items-end">
                <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                  <label for="hero-field" class="leading-7 text-2xl text-blue-600">Mobail No.</label>
                  <input type="text" id="hero-field"  value="8888552266" name="hero-field" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-blue-200 focus:bg-transparent border border-gray-300 focus:border-blue-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Edit</button>
              </div>
              <div class="flex w-full justify-center items-end">
                <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                  <label for="hero-field" class="leading-7 text-2xl text-blue-600">Dob:</label>
                  <input type="text" id="hero-field"  value="12/02/2003" name="hero-field" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-blue-200 focus:bg-transparent border border-gray-300 focus:border-blue-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Edit</button>
              </div>
              <div class="flex w-full justify-center items-end">
                <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                  <label for="hero-field" class="leading-7 text-2xl text-blue-600">Education:</label>
                  <input type="text" id="hero-field"  value="BCA" name="hero-field" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-blue-200 focus:bg-transparent border border-gray-300 focus:border-blue-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Edit</button>
              </div>
            <div class="justify-center mt-5">
                <button class="inline-flex text-white bg-red-500  border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Save</button>
            </div>
            <div class="justify-center mt-5">
              <button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">LogOut Profile</button>
          </div>
             <div class="flex">
              <button class="bg-green-100 inline-flex py-3 px-5 mr-5 mt-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
                <span class="ml-4 flex items-start flex-col leading-none">
                  <span class="title-font font-medium mr-3"><a href="file:///C:/Users/VIPRANT/Desktop/education%204%20ol/history%20page/history%20page.html">(History)</a></span>
                  <span class="title-font font-medium">Entrolled Course</span>
                </span>
              </button>
              <button class="bg-green-100 inline-flex py-3 px-5 mr-5 mt-5 rounded-lg items-center ml-4 hover:bg-gray-200 focus:outline-none">
                <span class="ml-6 flex items-start flex-col leading-none">
                 <span class="title-font font-medium mr-3"><a href="file:///C:/Users/VIPRANT/Desktop/education%204%20ol/home%20page/home.html"></a> Explore </a></span>
                 <span class="title-font font-medium">Courses</span> </span>
              </button>
            </div>
          </div>
        </div>
      </section>
      <footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Tailblocks</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@knyttneve</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>
    
</body>
</html>