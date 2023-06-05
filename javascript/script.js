// -------- Side Bar Menu----------
let toggle = document.querySelector(".mobile-nav-toggle i");
let close_btn = document.querySelector(".close-btn i");
toggle.addEventListener("click", () => {
    document.querySelector(".mobile-menu-wrapper").style.display = "flex";
})
close_btn.addEventListener("click", () => {
    document.querySelector(".mobile-menu-wrapper").style.display = "none";
})



// --------------- Top Drop Down Starts here--------
let dropmenu=document.querySelector(".dropdown-menu");
let dropdown= ()=>{
    
    dropmenu.classList.toggle("dropdown-menu-active");
}
document.querySelector(".profile-dropdown").addEventListener("click", (e)=>{
    e.stopPropagation(); 
    dropdown();
})

document.addEventListener("click", ()=>{
    
    if(dropmenu.classList.contains("dropdown-menu-active")){
     dropdown();
     console.log("contans");
    }
    
})
// ---------Search Result-------->
let search_result = document.querySelector(".search-result");
let erase_search = document.querySelector(".erase-search");

// ------------- Main  Searching  --------------->
let search_input = document.querySelector(".search-input"); 
search_input.addEventListener("input", () => {

    search(search_input.value);

    search_result.style.display="block";
    erase_search.style.visibility = "visible";
    if(search_input.value == ""){
        search_result.style.display = "";
        erase_search.style.visibility = "";
    }
    
})
document.querySelector(".erase-search").addEventListener("click", () => {
    search_input.value = "";
    erase_search.style.visibility = "";
    search_result.style.display = "";
})

let cart = [];
let add_to_cart = (id, name, price, image) => {
  
    let search = cart.find( ele => ele.id === id);
    if(search !== undefined){
        alert("Medicine already in cart");
    }else{
        cart.push({
            id:id,
            name:name,
            price:price,
            updated_price: price,
            image:image,
            qty: 1
        });
        localStorage.setItem("cart",JSON.stringify(cart));
        update();
    }
 }
 var update =() => {
    let cart_price = document.querySelector(".cart-price");
    let sidebar_cart_price = document.querySelector(".bill span");
    let cart_item_cont = document.querySelector(".cart-item-cont");

    sidebar_cart_price.innerText = "";
    cart_item_cont.innerHTML = "";
    cart_price.innerText = "";
    cart_value = 0;
    let medi_qty = 0;

    let data = JSON.parse(localStorage.getItem("cart"));
    cart = [...data];
    data.forEach( ele => {
        let {id, name, price, updated_price,  image, qty} = ele;

        cart_item_cont.innerHTML +=`
        
        <div class="cart-items">
        <div class="item">
            <div class="img">
                <img src="php-for-fetch/medicine/images/${image}" alt="">
            </div>
            <div class="item-details">
                <h4>${name}</h4>
                <h5>$ <span class="price">${updated_price}</span></h5>
                <span  onclick="remove(${id})" class="remove">Remove</span>
            </div>
        </div>
        <div class="inc-dec">

            <span><i onclick="increament(${id})" class="fa-solid fa-chevron-up inc"></i></span>
            <span class="counter">${qty}</span>
            <span><i onclick="decreament(${id})" class="fa-solid fa-chevron-down dec"></i></span>

        </div>
    </div>

        `;
        medi_qty = medi_qty+qty;
        cart_value = cart_value+ele.updated_price; 
    })
    console.log("medi"+medi_qty);
    cart_price.innerText = `${cart_value}`;
    sidebar_cart_price.innerText = `${cart_value}`;
 }

var increament = (id) =>{
    let data = JSON.parse(localStorage.getItem("cart"));
    cart = [...data];
    let search = cart.find( ele => ele.id ===id);
    if(search!==undefined){
       search.qty++;
       search.updated_price = search.price*search.qty;
       localStorage.setItem("cart",JSON.stringify(cart));
        update();
    }
}
var decreament = (id) =>{
    let data = JSON.parse(localStorage.getItem("cart"));
    cart = [...data];
    let search = cart.find( ele => ele.id ===id);
    if(search!==undefined){
       if(search.qty>1){
        search.qty--;
       }
       search.updated_price = search.price*search.qty;
       localStorage.setItem("cart",JSON.stringify(cart));
        update();
    }
}
var remove = (id) =>{
    
    let search = cart.filter( ele => ele.id !==id);
    cart = search;
    localStorage.setItem("cart",JSON.stringify(cart));
    update();
}

let  check_out = () => {
    let data = JSON.stringify(cart);
    console.log(data);
    fetch("php-for-fetch/checkout/checkout.php", {
        method: "POST",
        body: data,
        headers:{"content-type":"application/json"}
    }).then( res => res.json()).
    then( result => {
        console.log("successfully");
        console.log(result);
    }).catch( error => {
        console.log("unsuccesful");
    });

}
let checkbtn = document.querySelector(".check-btn");
checkbtn.addEventListener("click", check_out)

// ----------- Fetch and Display Search data -------->

var search = (input_data) => {
    let medicine_table = document.querySelector(".search-body");
    medicine_table.innerHTML = "";
    let data = JSON.stringify({
        input: input_data
    })
    fetch("php-for-fetch/medicine/search.php", {
        method: "POST",
        body: data,
        headers:{"content-type":"application/json"}
    }).then( res => res.json())
    .then( result => {
        if(result.no_output=="No"){
            
            medicine_table.innerHTML="Sorry No Result Found";
        }else{
            let counter = 0;
            medicine_table.innerHTML="";
                result.forEach(current_med => {
                    
                    medicine_table.innerHTML += `<tr>
                <td>${++counter}</td>
                <td><img src='php-for-fetch/medicine/images/${current_med.image}' alt=""></td>
                <td>${current_med.name}</td>
                <td>${current_med.Sale_price}</td>
                
                <td>${current_med.quantity}</td>
                <td class="">
                <a class="add-to-cart" onclick="add_to_cart(${current_med.medicine_id}, '${current_med.name}', ${current_med.Sale_price}, '${current_med.image}')">Add to Cart</a>
                </td>
                </tr>`;
                })
        }
        
    }).catch( error => {
        console.log(error);
    })
}



// --------------Rigth side bar ------------>
let sidebar = document.querySelector(".right-side-bar");
let sidebar_close = document.querySelector(".sidebar-close");
let cart_btn = document.querySelector(".cart");
cart_btn.addEventListener("click", () => {
    sidebar.style.right = `${0}%`;
    
})
sidebar_close.addEventListener("click", () => {
    sidebar.style.right = "";
})
