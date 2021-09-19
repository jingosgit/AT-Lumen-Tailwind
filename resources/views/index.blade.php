<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SSLSMSTEST</title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div class="flex justify-center">
	<div class="grid grid-cols-1 border rounded">
		
		<header class="text-gray-600 body-font bg-gray-300">
		  <div class="container mx-auto p-5 text-center">
		    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
		     <h1 class="text-4xl text-black mx-auto">SEND SMS</h1>
		    </a>
		
		  </div>
		</header>


	
		<section class="text-gray-600 body-font relative">
		  <div class="container px-5 py-3 mx-auto">
		    <div class="flex flex-col text-center w-full mb-12">
		      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Start Sending SMS's</h1>
		      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
		      Lighting Speed SMS Integration!</p>
		    </div>
		    <div class="w-full mx-auto">
		      <div class="flex flex-wrap -m-2">
		        <div class="p-2 w-full">
		          <div class="mx-auto">
		          <!--  -->
		          <form action="{{ route('send_sms')}}" method="POST">	          	
		          
		        
		            <label for="phone" class="leading-7 text-sm text-gray-600">Enter your phone number</label>
		            <input type="text" id="phone" name="phone" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
		          </div>
		      
		          <div class="">
		            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
		            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
		          </div>
		        </div>
		        <div class="p-2 w-full">
		          <button class="flex mx-auto text-black bg-gray-300 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg">Send SMS</button>
		        </div>

		        </form>
		    
		      </div>
		    </div>
		  </div>
		</section>
	</div>
</div>
	

</body>
</html>