<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Marketplace - DoD</title>
    <link rel="icon" type="image"
        href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj45tT9dVq02APE03yaoloPfShuGgyFyDX8LJ3Frm7-8_21iTxPB9CWf-gJtyDndIShtPLC7Y242C_UbcBjTct7NDdTWweApzARKjVcejjtERyFnvM0UX98HHH2-TEWEY2lMpMUkmdHJGDNYSguqus1TZvoFLcIP7QRmB6nl3Wfhp8_nsJ4x3fzUjWzRC9l/s400/Frame_1__4_-removebg-preview.png">
    <link href="style.css" rel="stylesheet">
    
 
</head>

<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="bg-white shadow-md text-black p-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold">DoD Market</a>

            <!-- Menu Items -->
            <div class="space-x-4 css-1v8yyhn  ">
                <!-- Shopping Cart -->
                <div class=" dropdown" style="cursor:pointer;  ">
                    <span class="css-f6vcps">
                        <span class="css-f6vcps" onclick="window.location.replace('https://www.google.com')">
                            <i class="css-1v1v7wxz  "></i>
                        </span>
                        <span class="css-a0uk68" id="totalItems"></span>
                        <div class="dropdown-content">
                            <ul id="cartItems" class="list-disc pl-8"></ul>
                        </div>
                    </span>
                </div>
                <!-- notifikasi -->
                <div class=" dropdown" onclick="window.location.replace('https://www.google.com')"
                    style="cursor:pointer;  ">
                    <div class="css-f6vcps">
                        <i class="css-1v1v7wx "></i>
                        <span class="css-a0uk68z">3</span>
                        <div class="dropdown-content">
                            <a href="https://www.googlea.com">Link 1</a>
                            <a href="https://www.googleb.com">Link 2</a>
                            <a href="https://www.googlec.com">Link 3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container mx-auto p-4">

        <!-- Main Content - List of Products -->
        <section class="my-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Produk di Marketplace</h2>

            <!-- Product Cards -->
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Nama Produk 1</h3>
                        <p class="text-gray-600">Deskripsi singkat produk. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.</p>
                        <p class="text-indigo-700 font-bold mt-2">Harga: $100</p>
                        <button onclick="addToCart('Nama Produk 1', 100)"
                            class="mt-3 inline-block px-4 py-2 bg-indigo-600 text-white rounded">Tambah ke
                            Keranjang</button>
                    </div>
                </div>
                <!-- Add more product cards as needed -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Nama Produk 2</h3>
                        <p class="text-gray-600">Deskripsi singkat produk. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.</p>
                        <p class="text-indigo-700 font-bold mt-2">Harga: $120</p>
                        <button onclick="addToCart('Nama Produk 2', 120)"
                            class="mt-3 inline-block px-4 py-2 bg-indigo-600 text-white rounded">Tambah ke
                            Keranjang</button>
                    </div>
                </div>
                <!-- Add more product cards as needed -->
            </div>

        </section>
    </div>
   
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p id="demo"></p>
    </footer>

   
</body>
<script src="main.js"></script>
</html>