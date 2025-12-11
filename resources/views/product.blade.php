 @extends('layouts.app')

 @section('title', 'Products - Veridan Roots')

 @section('content')


 <!-- <div id="loader">
     <div class="loader-box">
         <div class="first loader-column">
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 HERBS
             </span>
             <span>
                 CARE
             </span>
             <span>
                 GROW
             </span>
             <span>
                 PURE
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 SHINE
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 HERBS
             </span>
             <span>
                 CARE
             </span>
             <span>
                 GROW
             </span>
             <span>
                 PURE
             </span>
         </div>
         <div class="second loader-column">
             <span>
                 HERBS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 PURE
             </span>
             <span>
                 CARE
             </span>
             <span>
                 GROW
             </span>
             <span>
                 SHINE
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 HERBS
             </span>
             <span>
                 PURE
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 CARE
             </span>
             <span>
                 GROW
             </span>
         </div>
         <div class="first loader-column">
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 HERBS
             </span>
             <span>
                 CARE
             </span>
             <span>
                 GROW
             </span>
             <span>
                 PURE
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 SHINE
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 HERBS
             </span>
             <span>
                 CARE
             </span>
             <span>
                 GROW
             </span>
             <span>
                 PURE
             </span>
         </div>
         <div class="second loader-column">
             <span>
                 HERBS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 PURE
             </span>
             <span>
                 CARE
             </span>
             <span>
                 GROW
             </span>
             <span>
                 SHINE
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 HERBS
             </span>
             <span>
                 PURE
             </span>
             <span>
                 ROOTS
             </span>
             <span>
                 WASH
             </span>
             <span>
                 CARE
             </span>
             <span>
                 GROW
             </span>
         </div>
         <div class="loader-image">
             <img src="{{ url('images/product-loader.png') }}" alt="Root Herb Care" class="loader-img">
         </div>
     </div>
 </div> -->


 <!-- banner start -->
 <section class="product_banner">
 </section>
 <!-- banner end -->




 <!-- banner end -->

 <!-- about_sec start -->
 <!-- about_sec start -->
 <section class="about_sec sec">
     <span class="about-healz">Veridan Roots</span>

     <img src="{{ asset('images/about-bg.png') }}" alt="about-bg" class="background-bg" />

     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                 <div class="about-text">
                     <img src="{{ asset('images/green-line.png') }}" alt="green-line" class="green-line">
                     <img src="{{ asset('images/green-line1.png') }}" alt="green-line1" class="green-line1">

                     <p class="black">The Earth's Finest Ingredients, Rooted in Hair Science</p>

                     <h2>Shop the Veridan Roots Collection</h2>

                     <p>
                         Explore our complete catalog of herbal hair grooming solutions. Each formula is meticulously crafted with natural extracts, essential oils, and potent botanicals to deliver visible health, shine, and vitality to your hair. Find your perfect routine and begin your journey to a naturally beautiful mane.
                     </p>

                     <img src="{{ asset('images/product_about.png') }}" alt="about" class="about" data-aos="fade-up" />

                     <a href="#products" class="theme-btn" data-aos="fade-up">
                         Call to Action
                         <span class="leaf-icon">
                             <i class="fa-solid fa-leaf"></i>
                         </span>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- about_sec end -->

 <!-- about_sec end -->

 <!-- section start -->


 <!-- product-sec start -->
 <section class="product-sec sec product_product-sec" id="products">
     <img src="{{ asset('images/product-bg.png') }}" alt="about-bg" class="background-bg" />

     <div class="container">
         <div class="row ">
             <div class="col-lg-12" style="margin-bottom: 30px;">
                 <div class="product-heading text-center">
                     <img src="{{ asset('images/product-leaf.png') }}" alt="product-leaf" class="product-leaf1">
                     <p>Life And Leaf Healz Lifestyle</p>
                     <h2>Healthy living with Leaf Healzs</h2>
                 </div>
             </div>

             {{-- Search Bar & Sort --}}
             <div class="col-lg-12 mb-4">
                 <div class="product-search-container" style="max-width: 800px; margin: 0 auto; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                     <div class="input-group" style="flex: 1; min-width: 300px;">
                         <input type="text" id="productPageSearch" class="form-control" placeholder="Search products by name, category, description, or price..." style="border-radius: 25px 0 0 25px; padding: 12px 20px; border: 2px solid #377f52;">
                         <button class="btn" type="button" style="background: #377f52; color: white; border-radius: 0 25px 25px 0; padding: 12px 20px; border: 2px solid #377f52; border-left: none;">
                             <i class="fa-solid fa-search"></i>
                         </button>
                     </div>

                     <select id="productPageSort" class="form-select" style="width: auto; flex: 0 0 200px; border-radius: 25px; padding: 10px 20px; border: 2px solid #377f52; color: #377f52; font-weight: bold;">
                         <option value="newest">New Arrivals</option>
                         <option value="price_low">Price: Low to High</option>
                         <option value="price_high">Price: High to Low</option>
                         <option value="name_asc">Name: A to Z</option>
                         <option value="name_desc">Name: Z to A</option>
                         <option value="oldest">Oldest First</option>
                     </select>

                     <div id="productSearchLoading" style="display: none; width: 100%; text-align: center; margin-top: 10px;">
                         <small style="color: #377f52;"><i class="fa-solid fa-spinner fa-spin"></i> Searching...</small>
                     </div>
                 </div>
             </div>



             {{-- Products Container --}}
             <div id="productPageContainer" class="row">
                 {{-- Dynamic Products from Database --}}
                 @forelse($products as $product)
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     @php
                     $inStock = $product->stock > 0;
                     $linkAttr = $inStock ? 'href="' . route('product.detail', $product->id) . '"' : 'href="javascript:void(0)"';
                     $btnClass = $inStock ? 'theme-btn' : 'theme-btn disabled';
                     @endphp
                     <div class="product-card" data-aos="fade-up" @if(!$inStock) style="opacity: 0.7; pointer-events: none;" @endif>
                         <div class="product-card-image">
                             <span class="price">
                                 <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                                 @if($inStock)
                                 <h6 class="black">{{ $product->stock }} <br> in stock</h6>
                                 @else
                                 <h6 class="text-danger out-of-stock-label">Out of<br>Stock</h6>
                                 @endif
                             </span>
                             <a {!! $linkAttr !!}>
                                 @if($product->image)
                                 <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-img">
                                 @else
                                 <img src="{{ asset('images/product2.png') }}" alt="{{ $product->name }}" class="product-img">
                                 @endif
                             </a>
                         </div>
                         <div class="product-card-text">
                             <h6>{{ $product->name }}</h6>
                             <a {!! $linkAttr !!} class="{{ $btnClass }}">${{ number_format($product->price, 2) }}
                                 <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                             </a>
                         </div>
                     </div>
                 </div>
                 @empty
                 <div class="col-12">
                     <p class="text-center">No products available at the moment.</p>
                 </div>
                 @endforelse
             </div>{{-- End Products Container --}}

         </div>
     </div>

     <img src="{{ asset('images/product-leaf2.png') }}" alt="product-leaf" class="product-leaf2">
 </section>
 <!-- product-sec end -->


 <!-- gallery_sec start -->
 <section class="gallery-sec sec">
     <img src="{{ asset('images/about-bg.png') }}" alt="about-bg" class="background-bg" />
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="gallery-heading text-center gallery_product">
                     <h2>
                         Our Gallery
                     </h2>
                 </div>
             </div>
         </div>
         <div class="gallery-row product_gallery_row">
             <img src="{{ asset('images/lines.png') }}" alt="lines-img" class="lines-img">
             <img src="{{ asset('images/green-line.png') }}" alt="gallery-shape1-img_product" class="gallery-shape1-img">
             <img src="{{ asset('images/green-line1.png') }}" alt="gallery-shape2-img" class="gallery-shape2-img_product">

             <div class="gallery-column">
                 <div class="gallery-image">
                     <a href="{{ asset('images/about_tatto.png') }}" data-fancybox="gallery">
                         <img src="{{ asset('images/about_tatto.png') }}" class="gallery1" alt="gallery1" />
                     </a>
                 </div>
             </div>

             <div class="gallery-column">
                 <div class="gallery-image">
                     <a href="{{ asset('images/about_testi2.png') }}" data-fancybox="gallery">
                         <img src="{{ asset('images/about_testi2.png') }}" class="gallery2" alt="gallery2" />
                     </a>
                 </div>
             </div>

             <div class="gallery-column">
                 <div class="gallery-image">
                     <a href="{{ asset('images/contact-slider1.png') }}" data-fancybox="gallery">
                         <img src="{{ asset('images/contact-slider1.png') }}" class="gallery3" alt="gallery3" />
                     </a>
                 </div>
             </div>

             <div class="gallery-column">
                 <div class="gallery-image">
                     <a href="{{ asset('images/contact-slider2.png') }}" data-fancybox="gallery">
                         <img src="{{ asset('images/contact-slider2.png') }}" class="gallery4" alt="gallery4" />
                     </a>
                 </div>
             </div>

             <div class="gallery-column">
                 <div class="gallery-image">
                     <a href="{{ asset('images/home-box-3.png') }}" data-fancybox="gallery">
                         <img src="{{ asset('images/home-box-3.png') }}" class="gallery5" alt="gallery5" />
                     </a>
                 </div>
             </div>

             <div class="gallery-column">
                 <div class="gallery-image">
                     <a href="{{ asset('images/product-banner.png') }}" data-fancybox="gallery">
                         <img src="{{ asset('images/product-banner.png') }}" class="gallery6" alt="gallery6" />
                     </a>
                 </div>
             </div>

             <div class="gallery-column">
                 <div class="gallery-image">
                     <a href="{{ asset('images/contact-slider3.png') }}" data-fancybox="gallery">
                         <img src="{{ asset('images/contact-slider3.png') }}" class="gallery7" alt="gallery7" />
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- gallery_sec end -->
 <!-- gallery_sec end -->
 <!-- section gallery-sec end  -->




 @endsection

 <script>
     // Product Page Product Search with AJAX
     document.addEventListener('DOMContentLoaded', function() {
         const searchInput = document.getElementById('productPageSearch');
         const productsContainer = document.getElementById('productPageContainer');
         const loadingIndicator = document.getElementById('productSearchLoading');
         let searchTimeout;

         if (searchInput) {
             // Search Input Listener
             searchInput.addEventListener('input', function() {
                 clearTimeout(searchTimeout);
                 const query = this.value.trim();
                 const sort = document.getElementById('productPageSort') ? document.getElementById('productPageSort').value : 'newest';

                 // Debounce search - wait 500ms after user stops typing
                 searchTimeout = setTimeout(() => {
                     performSearch(query, sort);
                 }, 500);
             });

             // Sort Dropdown Listener
             const sortSelect = document.getElementById('productPageSort');
             if (sortSelect) {
                 sortSelect.addEventListener('change', function() {
                     const query = searchInput.value.trim();
                     performSearch(query, this.value);
                 });
             }
         }

         function performSearch(query, sort = 'newest') {
             // Show loading indicator
             loadingIndicator.style.display = 'block';
             console.log('Performing search for:', query, 'Sort:', sort);

             fetch(`/search-products?q=${encodeURIComponent(query)}&sort=${sort}`)
                 .then(response => {
                     if (!response.ok) {
                         throw new Error('Network response was not ok');
                     }
                     return response.json();
                 })
                 .then(data => {
                     // Hide loading indicator
                     loadingIndicator.style.display = 'none';
                     console.log('Search results:', data);

                     if (data.success) {
                         renderProducts(data.products);
                     }
                 })
                 .catch(error => {
                     console.error('Search error:', error);
                     loadingIndicator.style.display = 'none';
                     productsContainer.innerHTML = '<div class="col-12"><p class="text-center" style="color: #dc3545;">Error loading products. Please try again.</p></div>';
                 });
         }

         function renderProducts(products) {
             if (products.length === 0) {
                 productsContainer.innerHTML = '<div class="col-12"><p class="text-center">No products found matching your search.</p></div>';
                 return;
             }

             let html = '';
             products.forEach(product => {
                 let stockHtml = '';
                 let linkAttr = `href="/product-detail/${product.id}"`;
                 let btnClass = 'theme-btn';
                 let cardStyle = '';

                 // Stock Logic
                 if (product.stock > 0) {
                     stockHtml = `<h6 class="black" style="color: #000; font-weight: bold;">${product.stock} <br> in stock</h6>`;
                 } else {
                     stockHtml = `<h6 class="text-danger out-of-stock-label">Out of<br>Stock</h6>`;
                     linkAttr = 'href="javascript:void(0)"'; // Disable link
                     btnClass += ' disabled'; // Bootstrap disabled class or custom
                     cardStyle = 'opacity: 0.7; pointer-events: none;'; // Dim and disable click
                 }

                 html += `
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card" style="${cardStyle}">
                        <div class="product-card-image">
                            <span class="price">
                                <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                                ${stockHtml}
                            </span>
                            <a ${linkAttr}>
                                <img src="${product.image}" alt="${product.name}" class="product-img">
                            </a>
                        </div>
                        <div class="product-card-text">
                            <h6>${product.name}</h6>
                            <a ${linkAttr} class="${btnClass}">$${parseFloat(product.price).toFixed(2)}
                                <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            `;
             });

             productsContainer.innerHTML = html;

             // Refresh AOS to animate new elements
             if (typeof AOS !== 'undefined') {
                 setTimeout(() => {
                     AOS.refresh();
                 }, 100);
             }
         }
     });
 </script>