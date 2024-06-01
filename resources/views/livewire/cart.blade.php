 <!-- start product cart row -->
 <div id="carttable">
 </div>
 <!-- End product cart row -->

 <script>
     function getCart() {
         document.getElementById('carttable').innerHTML = "";
         const cart = JSON.parse(localStorage.getItem('cart'));

         for (let i in cart) {
             const cartRow = document.createElement('div');
             cartRow.className = 'row tableproduct';
             cartRow.innerHTML = `
             <div class="col-5 cart-container">
                 <div class="row">
                     <div class="col text-end">
                         <span class="smimg">
                             <img src="${cart[i].image}" alt="image">
                         </span>
                     </div>
                     <div class="col dtimg text-start">
                     <span>${cart[i].name}</span>
                     <span>${cart[i].description}</span>
                     </div>
                 </div>
             </div>
             <div class="col-2">
                 <div class="incr-decr">
                     <span  onclick="dec(${cart[i].id})">-</span>
                     <span>${cart[i].quantity}</span>
                     <span onclick="inc(${cart[i].id})">+</span>
                 </div>
             </div>
     
             <div class="col-2"> <span class="tbprice">${cart[i].price}$</span> </div>
             
             <div class="col-2"> <span class="tbprice">${cart[i].price}</span></div>
             
             <div class="col-1">
                 <span class="xicon" style="cursor:pointer"  onclick="x(${cart[i].id})">
                     <i class="fa-regular fa-circle-xmark"></i>
                 </span>
             </div>
             
             `;
             document.getElementById('carttable').appendChild(cartRow);
         }
     }


     getCart()


     function inc(id) {
         let cart = JSON.parse(localStorage.getItem('cart'));
         const cartItem = cart[id];
         cartItem.quantity++;
         cart = {
             ...cart,
             [id]: cartItem
         }
         localStorage.setItem('cart', JSON.stringify(cart));
         getCart();

     }

     function dec(id) {
         let cart = JSON.parse(localStorage.getItem('cart'));
         const cartItem = cart[id];
         if (cartItem.quantity > 1) {
             cartItem.quantity--;
         } else {
             cartItem.quantity = 1;
         }
         cart = {
             ...cart,
             [id]: cartItem
         }
         localStorage.setItem('cart', JSON.stringify(cart));
         getCart();

     }

     function x(id) {
         let cart = JSON.parse(localStorage.getItem('cart'));
         const cartItem = cart[id];
         delete cart[id];
         localStorage.setItem('cart', JSON.stringify(cart));
         getCart();

     }
 </script>