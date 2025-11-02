<?php
include_once "lib/load.php";
if (isset($_FILES['slider_img']) and isset($_FILES['slider_img']['tmp_name'])) {
    if (slider_img::slider_img_uploader($_FILES['slider_img']['tmp_name'])) {
?><script>
            alert("Image Uploaded..")
        </script>
        <script>
            window.location.href = "admin_panel.php"
        </script><?php
                } else {
                    ?><script>
            alert("Upload Failed..")
        </script>
        <script>
            window.location.href = "admin_panel.php"
        </script><?php
                }
            }
            if (isset($_FILES['product_img']) and $_POST['product_price'] and $_POST['product_title']) {
                echo $_POST['category']."<br>".$_POST['ornaments'];
                // product_img::slider_img_uploader($_FILES['product_img']['tmp_name'],$_POST['product_title'],$_POST['product_price']);
            }
                    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Media Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>
        <aside id="sidebar" class="fixed lg:static inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-200 flex flex-col transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
            <div class="h-16 flex items-center justify-between px-4 border-b border-gray-200">
                <h1 class="text-lg md:text-xl font-bold text-gray-800">Admin Panel</h1><button id="close-sidebar" class="lg:hidden p-2 text-gray-600 hover:bg-gray-100 rounded-lg"><i class="fas fa-times"></i></button>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto"><a href="#slider" class="flex items-center px-4 py-3 text-gray-700 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors touch-manipulation"><i class="fas fa-images w-5 mr-3 text-blue-600"></i><span class="font-medium">Slider Management</span></a><a href="#products" class="flex items-center px-4 py-3 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors touch-manipulation"><i class="fas fa-box w-5 mr-3 text-gray-500"></i><span class="font-medium">Product Management</span></a><a href="#" class="flex items-center px-4 py-3 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors touch-manipulation"><i class="fas fa-chart-line w-5 mr-3 text-gray-500"></i><span class="font-medium">Analytics</span></a><a href="#" class="flex items-center px-4 py-3 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors touch-manipulation"><i class="fas fa-cog w-5 mr-3 text-gray-500"></i><span class="font-medium">Settings</span></a></nav>
            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center"><img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop" alt="Admin" class="w-10 h-10 rounded-full object-cover">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">Admin User</p>
                        <p class="text-xs text-gray-500">admin@panel.com</p>
                    </div>
                </div>
            </div>
        </aside>
        <main class="flex-1 overflow-y-auto lg:ml-0">
            <header style="position: fixed;z-index: 2;" class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-4 md:px-8">
                <div class="flex items-center"><button id="menu-toggle" class="lg:hidden p-2 text-gray-600 hover:bg-gray-100 rounded-lg mr-3 touch-manipulation"><i class="fas fa-bars text-xl"></i></button>
                    <h2 class="text-lg md:text-2xl font-bold text-gray-800">Media Management</h2>
                </div>
                <!-- <div class="flex items-center space-x-2 md:space-x-4"><button class="p-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors touch-manipulation"><i class="fas fa-bell text-lg md:text-xl"></i></button><button class="px-3 py-2 md:px-4 md:py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium text-sm md:text-base touch-manipulation"><i class="fas fa-plus mr-1 md:mr-2"></i><span class="hidden sm:inline">New Item</span><span class="sm:hidden">New</span></button></div> -->
            </header>
            <div class="p-4 md:p-8" style="margin-top: 40px;">
                <section id="slider" class="mb-8 md:mb-12">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <div class="px-4 md:px-6 py-4 border-b border-gray-200 bg-gray-50">
                            <h3 class="text-lg font-bold text-gray-800"><i class="fas fa-images mr-2 text-blue-600"></i>Slider Management</h3>
                            <p class="text-sm text-gray-600 mt-1">Upload and manage homepage slider images</p>
                        </div>
                        <div class="p-4 md:p-6">
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 md:p-8 text-center hover:border-blue-500 transition-colors cursor-pointer bg-gray-50 hover:bg-blue-50 touch-manipulation">
                                <!-- <input type="file" id="sliderUpload" class="hidden" accept="image/*" multiple>
                                <label for="sliderUpload" class="cursor-pointer">
                                    <i class="fas fa-cloud-upload-alt text-4xl md:text-5xl text-gray-400 mb-4"></i>
                                    <p class="text-base md:text-lg font-medium text-gray-700 mb-2">Drag & Drop Slider Images</p>
                                    <p class="text-sm text-gray-500 mb-4">or tap to browse files</p><span class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium text-sm md:text-base touch-manipulation">Select Files</span>
                                </label> -->
                                <form action="admin_panel.php" method="post" enctype="multipart/form-data">
                                    <label style="color: black;" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload image file</label>
                                    <input name="slider_img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" required>
                                    <p class="mt-1 text-sm" style="color: black;" id="file_input_help">SVG, PNG, JPG or GIF</p>
                                    <hr><button style="padding: 8px; background-color: rgb(29,78,216);color: white;border: 1px solid blur;border-radius: 7px;margin-top: 15px;" type="submit">submit</button>
                                </form>
                            </div>
                            <div class="mt-6">
                                <h4 class="text-md font-semibold text-gray-800 mb-4">Uploaded Slider Images (6)</h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-4">
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=800&h=500&fit=crop" alt="Slider 1" class="w-full h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-3 py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1 md:mr-2"></i>Delete</button></div>
                                        <div class="p-3 bg-white">
                                            <p class="text-sm font-medium text-gray-700 truncate">slider-image-1.jpg</p>
                                            <p class="text-xs text-gray-500">1920x1080 • 2.4 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=800&h=500&fit=crop" alt="Slider 2" class="w-full h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-3 py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1 md:mr-2"></i>Delete</button></div>
                                        <div class="p-3 bg-white">
                                            <p class="text-sm font-medium text-gray-700 truncate">slider-image-2.jpg</p>
                                            <p class="text-xs text-gray-500">1920x1080 • 1.8 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=500&fit=crop" alt="Slider 3" class="w-full h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-3 py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1 md:mr-2"></i>Delete</button></div>
                                        <div class="p-3 bg-white">
                                            <p class="text-sm font-medium text-gray-700 truncate">slider-image-3.jpg</p>
                                            <p class="text-xs text-gray-500">1920x1080 • 3.1 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=500&fit=crop" alt="Slider 4" class="w-full h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-3 py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1 md:mr-2"></i>Delete</button></div>
                                        <div class="p-3 bg-white">
                                            <p class="text-sm font-medium text-gray-700 truncate">slider-image-4.jpg</p>
                                            <p class="text-xs text-gray-500">1920x1080 • 2.7 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&h=500&fit=crop" alt="Slider 5" class="w-full h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-3 py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1 md:mr-2"></i>Delete</button></div>
                                        <div class="p-3 bg-white">
                                            <p class="text-sm font-medium text-gray-700 truncate">slider-image-5.jpg</p>
                                            <p class="text-xs text-gray-500">1920x1080 • 2.2 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&h=500&fit=crop" alt="Slider 6" class="w-full h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-3 py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1 md:mr-2"></i>Delete</button></div>
                                        <div class="p-3 bg-white">
                                            <p class="text-sm font-medium text-gray-700 truncate">slider-image-6.jpg</p>
                                            <p class="text-xs text-gray-500">1920x1080 • 1.9 MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="products">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <div class="px-4 md:px-6 py-4 border-b border-gray-200 bg-gray-50">
                            <h3 class="text-lg font-bold text-gray-800"><i class="fas fa-box mr-2 text-green-600"></i>Product Management</h3>
                            <p class="text-sm text-gray-600 mt-1">Upload and manage product images</p>
                        </div>
                        <div class="p-4 md:p-6">
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 md:p-8 text-center hover:border-green-500 transition-colors cursor-pointer bg-gray-50 hover:bg-green-50 touch-manipulation">
                                <form action="admin_panel.php" method="post" enctype="multipart/form-data">
                                    <label style="color: black;" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                                    <input name="product_img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" required>
                                    <p style="margin-bottom: 35px;" class="mt-1 text-sm" style="color: black;" id="file_input_help">SVG, PNG, JPG or GIF</p>
                                    <div class="mb-6" style="margin-bottom: 35px;">
                                        <label style="color: black;" for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                        <input  name="product_title" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title" required>
                                    </div>
                                    <div class="mb-6" style="margin-bottom: 35px;">
                                        <label style="color: black;" for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                        <input name="product_price" style="width: 100%;" type="tel" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Price" required>
                                    </div>
                                    <label style="color: black;" for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gold or Diamonds</label>
                                    <select style="margin-bottom: 35px;" name="ornaments" style="width: 100%;margin-bottom: 20px;" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        <option value="gold">Gold</option>
                                        <option value="diamonds">Diamonds</option>
                                    </select>
                                    <label style="color: black;" for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select category</label>
                                    <select name="category" style="width: 100%;margin-bottom: 20px;" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        <option value="Necklaces">Necklaces</option>
                                        <option value="Bracelets">Bracelets</option>
                                        <option value="Bangles">Bangles</option>
                                        <option value="Earrings">Earrings</option>
                                        <option value="Rings">Rings</option>
                                        <option value="Pendants">Pendants</option>
                                        <option value="Nose pins">Nose pins</option>
                                    </select>

                                    <hr><button style="padding: 8px; background-color: rgb(29,78,216);color: white;border: 1px solid blur;border-radius: 7px;margin-top: 15px;" type="submit">submit</button>
                                </form>
                            </div>
                            <div class="mt-6">
                                <h4 class="text-md font-semibold text-gray-800 mb-4">Uploaded Product Images (8)</h4>
                                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-4">
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600&h=600&fit=crop" alt="Product 1" class="w-full h-32 sm:h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 sm:px-3 sm:py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-xs sm:text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1"></i><span class="hidden sm:inline">Delete</span></button></div>
                                        <div class="p-2 md:p-3 bg-white">
                                            <p class="text-xs sm:text-sm font-medium text-gray-700 truncate">product-watch.jpg</p>
                                            <p class="text-xs text-gray-500">800x800 • 1.2 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=600&h=600&fit=crop" alt="Product 2" class="w-full h-32 sm:h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 sm:px-3 sm:py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-xs sm:text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1"></i><span class="hidden sm:inline">Delete</span></button></div>
                                        <div class="p-2 md:p-3 bg-white">
                                            <p class="text-xs sm:text-sm font-medium text-gray-700 truncate">product-sunglasses.jpg</p>
                                            <p class="text-xs text-gray-500">800x800 • 980 KB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&h=600&fit=crop" alt="Product 3" class="w-full h-32 sm:h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 sm:px-3 sm:py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-xs sm:text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1"></i><span class="hidden sm:inline">Delete</span></button></div>
                                        <div class="p-2 md:p-3 bg-white">
                                            <p class="text-xs sm:text-sm font-medium text-gray-700 truncate">product-headphones.jpg</p>
                                            <p class="text-xs text-gray-500">800x800 • 1.5 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?w=600&h=600&fit=crop" alt="Product 4" class="w-full h-32 sm:h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 sm:px-3 sm:py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-xs sm:text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1"></i><span class="hidden sm:inline">Delete</span></button></div>
                                        <div class="p-2 md:p-3 bg-white">
                                            <p class="text-xs sm:text-sm font-medium text-gray-700 truncate">product-sneakers.jpg</p>
                                            <p class="text-xs text-gray-500">800x800 • 1.1 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?w=600&h=600&fit=crop" alt="Product 5" class="w-full h-32 sm:h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 sm:px-3 sm:py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-xs sm:text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1"></i><span class="hidden sm:inline">Delete</span></button></div>
                                        <div class="p-2 md:p-3 bg-white">
                                            <p class="text-xs sm:text-sm font-medium text-gray-700 truncate">product-perfume.jpg</p>
                                            <p class="text-xs text-gray-500">800x800 • 890 KB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=600&h=600&fit=crop" alt="Product 6" class="w-full h-32 sm:h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 sm:px-3 sm:py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-xs sm:text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1"></i><span class="hidden sm:inline">Delete</span></button></div>
                                        <div class="p-2 md:p-3 bg-white">
                                            <p class="text-xs sm:text-sm font-medium text-gray-700 truncate">product-sneakers-2.jpg</p>
                                            <p class="text-xs text-gray-500">800x800 • 1.3 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600&h=600&fit=crop" alt="Product 7" class="w-full h-32 sm:h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 sm:px-3 sm:py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-xs sm:text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1"></i><span class="hidden sm:inline">Delete</span></button></div>
                                        <div class="p-2 md:p-3 bg-white">
                                            <p class="text-xs sm:text-sm font-medium text-gray-700 truncate">product-sneakers-3.jpg</p>
                                            <p class="text-xs text-gray-500">800x800 • 1.4 MB</p>
                                        </div>
                                    </div>
                                    <div class="relative group rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow"><img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=600&h=600&fit=crop" alt="Product 8" class="w-full h-32 sm:h-40 md:h-48 object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all flex items-center justify-center"><button class="opacity-0 group-hover:opacity-100 px-2 py-1 sm:px-3 sm:py-2 md:px-4 md:py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all transform scale-90 group-hover:scale-100 text-xs sm:text-sm md:text-base touch-manipulation"><i class="fas fa-trash mr-1"></i><span class="hidden sm:inline">Delete</span></button></div>
                                        <div class="p-2 md:p-3 bg-white">
                                            <p class="text-xs sm:text-sm font-medium text-gray-700 truncate">product-sneakers-4.jpg</p>
                                            <p class="text-xs text-gray-500">800x800 • 1.6 MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const closeSidebar = document.getElementById('close-sidebar');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
        }

        function closeSidebarFunc() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        }
        menuToggle.addEventListener('click', openSidebar);
        closeSidebar.addEventListener('click', closeSidebarFunc);
        sidebarOverlay.addEventListener('click', closeSidebarFunc);
        const navLinks = document.querySelectorAll('nav a[href^="#"]');
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = link.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    if (window.innerWidth < 1024) {
                        closeSidebarFunc();
                    }
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>