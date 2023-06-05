// -----------Add category-------
let add_cat = document.querySelector(".category-form-main-wrapper");
document.querySelector(".add-category-btn").addEventListener("click", () => {
    add_cat.style.display = "flex";
})

// -----------Close category-------
let close_add_form = () => { add_cat.style.display = "none"; }
document.querySelector(".close-add-cat-btn").addEventListener("click", close_add_form)

// -----------Close edit category form-------
let edit_cat = document.querySelector(".edit-category-form-main-wrapper");
let close_edit_cat_form = () => {
    edit_cat.style.display = "none";
}
document.querySelector(".close-edit-cat-btn").addEventListener("click", close_edit_cat_form)

// -----------Show Edit category form-------
let show_edit_cat_form = () => {
    edit_cat.style.display = "flex";
}













// --------------main display Function-------->
let pagi_inner = document.querySelector(".pagi_inner");


let display_cat = (result) => {

    let category_list = document.querySelector(".category-list");

   let btnWorking = (from, to, id) => {
        console.log(`from is ${from} to is ${to}, id is ${id}`);
      for(let j=from; j<=to; j++){
        console.log(result[j].name)
      } 

    }

    let page = 5, from = 0, to = 7;
    let upto = result.length / page;

    for (let i = 0; i < upto; i++) {
        pagi_inner.innerHTML += `<li> <span class="pagi-btns btn${i}" onclick="btnWorking(${from}, ${to}, ${i})">${i + 1}</span></li>`;

        from = from + 5;
        to = to + 5;
    }


}















//----------  display record  ------------>
let display_record = () => {
    
    
    fetch("php-for-fetch/category/display-record.php").then(response => {
        return response.json();
    }).then(result => {
        display_cat(result);

        let num = "0";
        result.forEach(current_reslut => {
            category_list.innerHTML += `<tr>
            <td>${++num} </td>
            <td>${current_reslut.name}</td>
            <td>${current_reslut.description}</td>
            <td class="cat-action">
            <a class="edit-btn" onclick="edit(${current_reslut.category_id})"><i class="fa fa-pencil-square"></i></a>
            <a class="delete-btn" onclick="Delete(${current_reslut.category_id})"><i class="fa fa-trash"></i></a>
            </td>
            </tr>`;
        })
    }).catch(error => {
        console.log(error);
        console.log("Not working");
    })
}
display_record();

// ----------- Update data Form ---------->
let name_in_edit_form = document.querySelector(".name-in-edit-form");
let desc_in_edit_form = document.querySelector(".desc-in-edit-form");
let main_id;
let edit = id => {
    show_edit_cat_form();
    main_id = id;
    fetch(`php-for-fetch/category/display-to-edit.php?id=${id}`).then(response => {
        return response.json();
    }).then(result => {
        show_edit_cat_form(); // Calling the function to show the edit form.
        name_in_edit_form.value = result[0].name;
        desc_in_edit_form.value = result[0].description;
    }).catch(error => {

    })
}

document.querySelector(".edit_btn").addEventListener("click", (e) => {
    e.preventDefault();
    $data = JSON.stringify(
        {
            name: name_in_edit_form.value,
            desc: desc_in_edit_form.value
        }
    )
    fetch(`php-for-fetch/category/insert-to-edit.php?id=${main_id}`, {
        method: "PUT",
        body: $data,
        headers: { "content-type": "application/json" }
    }).then(response => response.json()).
        then(result => {
            if (result.confirm === "YES") {
                display_record();
                document.querySelector(".update-form").reset();
                show_confirm_msg("Data Updated", "green");
                close_edit_cat_form();
            } else {
                show_confirm_msg("Data not Updated", "red");
            }
        }).catch(error => {
            console.log(error);
        })
})

// -----------Submit Form to insert category ---------
let submit_btn = document.querySelector(".submit_btn");
let name = document.querySelector(".name");
let desc = document.querySelector(".desc");
let confirm_msg = document.querySelector(".confirm-msg");

//-----------Confrim Msg after submit data-------->
var show_confirm_msg = (txt, color) => {
    confirm_msg.style.color = color;
    confirm_msg.innerText = txt;
    setTimeout(() => {
        confirm_msg.innerText = "";
    }, 3000);
}

submit_btn.addEventListener("click", (e) => {
    e.preventDefault();
    if (name.value == "" || desc.value == "") {
        alert("Please Fill All Input Fields.")
    } else {
        let form_data = JSON.stringify(
            {
                name: name.value,
                desc: desc.value
            }
        )
        //-----------  Fetch function to inserted data ----------->
        fetch("php-for-fetch/category/add-category.php", {
            method: "POST",
            body: form_data,
            headers: { 'content-type': 'application/json', }
        }).then(response => {
            return response.json();
        }).then(result => {
            if (result.Confirm == "YES") {
                display_record();
                document.querySelector(".cat-add-form").reset();
                close_add_form();
                show_confirm_msg("Category is insrted successfully.", "green")
            } else {
                close_add_form();
                show_confirm_msg("Category is not inserted.", "red")
            }
        }).catch(error => {
            close_add_form();
            show_confirm_msg("Something Wrong with server.", "red")
        })
    }
});

// ------------- Delete Function to delete the record ---------------->
let Delete = delete_id => {
    if (confirm("Are you sure to delete?")) {
        fetch(`php-for-fetch/category/delete.php?delete_id=${delete_id}`)
            .then(response => response.json())
            .then(result => {
                if (result.confirm === "yes") {
                    display_record();
                    show_confirm_msg("Category has been deleted successfully.", "green")
                } else {
                    show_confirm_msg("Something Wrong.", "red")
                }
            }).catch(error => {
                show_confirm_msg("Something Wrong. Server Error" + error, "red")
            });
    }
}
// --------- Search category------->
let seach_input = document.querySelector(".search-cat");
let category_list = document.querySelector(".category-list");
seach_input.addEventListener("input", () => {

    category_list.innerHTML = "";
    $input = JSON.stringify(
        {
            input: seach_input.value
        }
    )

    fetch("php-for-fetch/category/search.php", {
        method: "POST",
        body: $input,
        headers: { "Content-type": "application/json" }
    }).then(response => response.json())
        .then(result => {
            if (result.output != "No") {
                let num = "0";
                result.forEach(current_reslut => {
                    category_list.innerHTML += `<tr>
                <td>${++num} </td>
                <td>${current_reslut.name}</td>
                <td>${current_reslut.description}</td>
                <td class="cat-action">
                <a class="edit-btn" onclick="edit(${current_reslut.category_id})"><i class="fa fa-pencil-square"></i></a>
                <a class="delete-btn" onclick="Delete(${current_reslut.category_id})"><i class="fa fa-trash"></i></a>
                </td>
                </tr>`;
                })
            } else {
                show_confirm_msg("No Category Found!.", "Red");
            }
        }).catch(error => {
            show_confirm_msg("Something Wrong with Server", "Red");
        })
}) 