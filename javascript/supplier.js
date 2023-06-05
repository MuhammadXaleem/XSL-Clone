let add_supplier_btn = document.querySelector(".add-supplier-btn");
let add_supp = document.querySelector(".add-supplier-container");
let add_supp_inner = document.querySelector(".add-supplier-inner-container");

add_supplier_btn.addEventListener("click", () => {
    add_supp.classList.add("add-supplier-container-active");
    add_supp_inner.classList.add("add-supplier-inner-container-active");
})
let supplier_close = () => {
    add_supp.classList.remove("add-supplier-container-active");
    add_supp_inner.classList.remove("add-supplier-inner-container-active");
}
let add_supplier_close = document.querySelector(".add-supplier-close");
add_supplier_close.addEventListener("click", supplier_close)



// ----------Edit Supplier Form------------
let edit_supplier_btn = document.querySelectorAll(".edit-btn");
let edit_supp = document.querySelector(".edit-supplier-container");
let edit_supp_inner = document.querySelector(".edit-supplier-inner-container");

edit_supplier_btn.forEach((current_btn) => {
    current_btn.addEventListener("click", () => {
        edit_supp.classList.add("edit-supplier-container-active");
        edit_supp_inner.classList.add("edit-supplier-inner-container-active");
    })

})

let edit_form_close = () => {
    edit_supp.classList.remove("edit-supplier-container-active");
    edit_supp_inner.classList.remove("edit-supplier-inner-container-active");
}
let edit_supplier_close = document.querySelector(".edit-supplier-close");
edit_supplier_close.addEventListener("click", edit_form_close);

// ---------- Confirm Msg -------->
let confirm_msg = (msg,  color) => {
    let msg_cont = document.querySelector(".confirm-msg");
    msg_cont.innerText = msg;
    msg_cont.style.color = color;
    setTimeout( () => {
        msg_cont.innerText = "";
    }, 3000)
}
let edit_supplier = (id) => {
    alert(id);
}

// ---------- Display Suppliers ----------->
let display_supplier = () => {
    fetch("php-for-fetch/suppliers/display.php")
    .then( response => response.json())
    .then( result => {
        console.log(result);
        let table = document.querySelector(".suppliers-table");
        table.innerHTML = "";
        let counter = 0;
        result.forEach( current_ele => {
           table.innerHTML += `<tr> 
           <td>${++counter}</td>
           <td><img src="php-for-fetch/suppliers/images/${current_ele.image}" alt=""></td>
           <td>${current_ele.supplier_name}</td>
           <td>${current_ele.phone}</td>
           <td>${current_ele.email}</td>
           <td>${current_ele.address}</td>
           <td>
           <a class="edit-btn" onclick = 'edit_supplier(${current_ele.id})'><i class="fa fa-pencil-square"></i></a>
           <a class="delete-btn"><i class="fa fa-trash"></i></a>
           </td>
           </tr>`
        } )
    }).catch( error => {

    })
}
display_supplier();
// ------- Add Suppliers ------------>
let add_btn = document.querySelector(".add-supplier");
let add_supp_form = document.querySelector(".add-supp-form");
add_btn.addEventListener("click", (e) => {
    e.preventDefault();
    let form_data = new FormData(add_supp_form);
    let image = e.target.files;
    form_data.append("image", image);
    fetch("php-for-fetch/suppliers/add_data.php",{
        method:"POST",
        body:form_data
    })
    .then( response => response.json())
    .then( result => {
        console.log(result);
        if(result.confirm = "yes"){
            display_supplier();
            add_supp_form.reset();
            supplier_close();
            confirm_msg("Supplier is added.", "green");
        }
    }).catch( error => {
        confirm_msg("Supplier is not added.", "red");
    })
})