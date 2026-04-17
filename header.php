<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="bg-white">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">

        <!-- Logo -->
        <div class="text-2xl font-bold text-gray-800">
            <a href="<?php echo home_url('/'); ?>" class="hover:text-blue-500">
                FloBloom
            </a>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center space-x-6">

            <a href="#" class="text-gray-700 hover:text-blue-500 transition">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-500 transition">All Item</a>
            <a href="#" class="text-gray-700 hover:text-blue-500 transition">About Us</a>
            <a href="#" class="text-gray-700 hover:text-blue-500 transition">Contact Us</a>

            <!-- Cart Icon -->
            <a href="#" class="relative text-gray-700 hover:text-blue-500">
                <!-- Heroicons cart -->
                <svg xmlns="http://www.w3.org/2000/svg" 
                     class="h-6 w-6" 
                     fill="none" 
                     viewBox="0 0 24 24" 
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h13M7 13L5.4 5M16 21a1 1 0 100-2 1 1 0 000 2zM9 21a1 1 0 100-2 1 1 0 000 2z"/>
                </svg>
            </a>

        </nav>

        <!-- Mobile Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                ☰
            </button>
        </div>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">

        <a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Home</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-blue-500">All Item</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-blue-500">About Us</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-blue-500">Contact Us</a>

        <a href="#" class="flex items-center py-2 text-gray-700 hover:text-blue-500">
            🛒 <span class="ml-2">My Cart</span>
        </a>

    </div>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>