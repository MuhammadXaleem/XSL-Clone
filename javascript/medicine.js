// ---------- Fetch category----------->
let fetch_cat = () => {
    document.querySelector(".add-cat").innerHTML = "";
    document.querySelector(".add-cat").innerHTML = "<option disabled>Select Category</option>";
    fetch("php-for-fetch/medicine/fetch-cat.php").then(response => response.json())
        .then(result => {
            result.forEach(current_cat => {

                document.querySelector(".add-cat").innerHTML += `<option value="${current_cat.category_id}">${current_cat.name}</option>`;
            })
        }).catch(error => {

        })
}

// Fetch Category to Edit the medicine
let fetch_cat_to_edit = (selected_id) => {
   
    let edit_cat = document.querySelector(".edit-cat");
    edit_cat.innerHTML = "";
    edit_cat.innerHTML = "<option disabled>Select Category</option>";

    fetch("php-for-fetch/medicine/fetch-cat.php").then(response => response.json())
        .then(result => {
            result.forEach(current_cat => {
                if (current_cat.category_id == selected_id) {
                    console.log("category " + current_cat.category_id);
                    console.log("selected " + selected_id);
                    edit_cat.innerHTML += `<option selected value="${current_cat.category_id} ">${current_cat.name}</option>`;
                }
                    edit_cat.innerHTML += `<option  value="${current_cat.category_id} ">${current_cat.name}</option>`;
                
            })
        }).catch(error => {

        })
}
// model to add medicine
let add_outter_cont = document.querySelector(".add-medicine-form-container");
let add_inner_cont = document.querySelector(".add-medicine-form-inner-section");

document.querySelector(".medicine-btn1").addEventListener("click", () => {
    fetch_cat();
    add_outter_cont.classList.add("add-medicine-form-container-active");
    add_inner_cont.classList.add("add-medicine-form-inner-section-active");
})

let add_med_close = () => {
    add_outter_cont.classList.remove("add-medicine-form-container-active");
    add_inner_cont.classList.remove("add-medicine-form-inner-section-active");
}

document.querySelector(".add-medicine-close").addEventListener("click", () => {
    add_med_close();
})

// Model to edit Medicine

let edit_outter_cont = document.querySelector(".edit-medicine-form-container");
let edit_inner_cont = document.querySelector(".edit-medicine-form-inner-section");

let edit_medi_form = () => {
    edit_outter_cont.classList.add("edit-medicine-form-container-active");
    edit_inner_cont.classList.add("edit-medicine-form-inner-section-active");
}
let edit_close = () => {
    edit_outter_cont.classList.remove("edit-medicine-form-container-active");
    edit_inner_cont.classList.remove("edit-medicine-form-inner-section-active");
}
document.querySelector(".edit-medicine-close").addEventListener("click", edit_close)

// ----------confirm msg-------->
let confirm_msg = (msg, color) => {
    let msgText = document.querySelector(".confirm-msg");
    msgText.innerText = msg;
    msgText.style.color = color;
    setTimeout(() => {
        msgText.innerText = "";
        msgText.style.color = "";
    }, 3000)
}



// ------- Display All Medicines ------------>
let medicine_table = document.querySelector(".medicine-table-body");
let display_medicine = () => {
    
    medicine_table.innerHTML = "";
    fetch("php-for-fetch/medicine/display-medi.php")
        .then(response => response.json())
        .then(result => {
            if (result.confirm != "No") {
                let counter = 0;
                result.forEach(current_med => {
                    medicine_table.innerHTML += `<tr>
                <td>${++counter}</td>
                <td><img src='php-for-fetch/medicine/images/${current_med.image}' alt=""></td>
                <td>${current_med.nnn}</td>
                <td>${current_med.description}</td> 
                <td>${current_med.purchase_price}</td>
                <td>${current_med.Sale_price}</td>
                <td>${current_med.name}</td>
                <td>${current_med.quantity}</td>
                <td class="">
                <a class="edit-btn" onclick="edit_medi(${current_med.medicine_id})"><i class="fa fa-pencil-square"></i></a>
                <a class="delete-btn" onclick="delete_medi(${current_med.medicine_id})" ><i class="fa fa-trash"></i></a>
                </td>
                </tr>`;
                })
            } else {
                confirm_msg("No Medicine Found", "red")
            }
        }).catch(error => {
            console.log(error);
        })
}
display_medicine();

let add_med_form = document.querySelector(".add-med-form");
add_med_form.addEventListener("submit", (e) => {
    e.preventDefault();

    let formdata = new FormData(add_med_form);
    let file = e.target.files;
    formdata.append('file', file);

    fetch("php-for-fetch/medicine/add-med.php", {
        method: "POST",
        body: formdata
    }).then(response => response.json())
        .then(result => {
            if (result.confirm === "yes") {
                add_med_form.reset();
                add_med_close();
                display_medicine();
                confirm_msg("Medicine added.", "green");
            }
            else {
                confirm_msg("Medicine can't added.", "red");
            }
        }).catch(error => {
            confirm_msg("Medicine can't added. Server error", "red");
        })
})

// -------------- Display to Edit medicine from
let id_to_update;
let edit_medi = (medi_id) => {
    id_to_update = medi_id;
    let name = document.querySelector(".edit-name");
    let p_price = document.querySelector(".edit-purchase-price");
    let s_price = document.querySelector(".edit-sale-price");
    let qnty = document.querySelector(".edit-quantity");
    let desc = document.querySelector(".edit-desc");
    edit_medi_form();

    fetch(`php-for-fetch/medicine/display-to-edit.php?id=${medi_id}`)
        .then(response => response.json())
        .then(result => {
            console.log(result[0].medi_name)
            name.value = result[0].medi_name;
            p_price.value = result[0].purchase_price;
            s_price.value = result[0].Sale_price;
            qnty.value = result[0].quantity;
            desc.value = result[0].description;
            fetch_cat_to_edit(result[0].category);

        }).catch(error => {
            console.log(" Server Error");
        })
}
// -------------- Insert data to Edit medicine from
document.querySelector(".edit-medicine-form").addEventListener("submit", (e) => {
    e.preventDefault();
    let data = JSON.stringify(
        {
            name: document.querySelector(".edit-name").value,
            p_price: document.querySelector(".edit-purchase-price").value,
            s_price: document.querySelector(".edit-sale-price").value,
            qnty: document.querySelector(".edit-quantity").value,
            desc: document.querySelector(".edit-desc").value,
            cat: document.querySelector(".edit-cat").value
        }
    );
    fetch(`php-for-fetch/medicine/update.php?id=${id_to_update}`, {
        method: "PUT",
        body: data,
        headers: { "content-type": "application/json" }
    }).then(response => response.json())
        .then(result => {
            if (result.confirm === 'yes') {
                display_medicine();
                edit_close();
                confirm_msg("Medicine Update", "green");
            }
        }).catch(error => {
            confirm_msg("Medicine didnt Update", "green");
        });

})
// -----------> Delete Medicine------------>
let delete_medi= id => {
    if(confirm("Are you sure to delte the medicine")){
        fetch(`php-for-fetch/medicine/delete.php?id=${id}`).then( response => response.json())
        .then( result => {
           if(result.confirm=="yes"){
            display_medicine();
            confirm_msg("medicine deleted.", "green");
           }else{
            confirm_msg("medicine not deleted.", "red");
           }
        }).catch( error =>{
            confirm_msg("medicine not deleted, Server error", "red");
        })
    }
}
//------------ Search ------------->
let search= document.querySelector(".medi-search");
search.addEventListener("input", () => {
    medicine_table.innerHTML="";
    let data = JSON.stringify({
        input:search.value
    })
    console.log(data);
    fetch("php-for-fetch/medicine/search.php", {
        method: "POST",
        body: data,
        headers:{"content-type":"application/json"}
    }).then( res => res.json())
    .then( result => {
        if(result.no_output=="No"){
            
            confirm_msg("Sorry, No Medicine Found.", "red");
        }else{
            let counter = 0;
            medicine_table.innerHTML="";
                result.forEach(current_med => {
                    medicine_table.innerHTML += `<tr>
                <td>${++counter}</td>
                <td><img src='php-for-fetch/medicine/images/${current_med.image}' alt=""></td>
                <td>${current_med.name}</td>
                <td>${current_med.description}</td> 
                <td>${current_med.purchase_price}</td>
                <td>${current_med.Sale_price}</td>
                <td>${current_med.name}</td>
                <td>${current_med.quantity}</td>
                <td class="">
                <a class="edit-btn" onclick="edit_medi(${current_med.medicine_id})"><i class="fa fa-pencil-square"></i></a>
                <a class="delete-btn" onclick="delete_medi(${current_med.medicine_id})" ><i class="fa fa-trash"></i></a>
                </td>
                </tr>`;
                })
        }
        
    }).catch( error => {
        console.log(error);
    })
})
