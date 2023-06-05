let update_medi = () => {
    fetch("php-for-fetch/dashboard/medicine.php")
    .then( response => response.json())
    .then( res => {
        console.log(res);
        document.querySelector(".total-medi-value").innerText=res;
    })
}
let update_medi_cat = () => {
    fetch("php-for-fetch/dashboard/medicine_category.php")
    .then( response => response.json())
    .then( res => {
        document.querySelector(".total-cat-value").innerText=res;
    })
}
let update_supp = () => {
    fetch("php-for-fetch/dashboard/supplier.php")
    .then( response => response.json())
    .then( res => {
        document.querySelector(".total-supplier-value").innerText=res;
    })
}
update_medi();
update_medi_cat();
update_supp();