let icon = document.getElementById("icon-eye");
let buttonLogout = document.getElementById("btnLogout");
let menu = document.querySelector(".navbar");
let buttonMenu = document.getElementById("icon__nav");

// Animations AOS
AOS.init({
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 900, // values from 0 to 3000, with step 50ms
    easing: "ease", // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
});

buttonMenu?.addEventListener("click", () => {
    menu.classList.toggle("navbar__links--menu");
});
// Hidden and show password in login
icon?.addEventListener("click", () => {
    let input = document.getElementById("inputPassword");
    if (input.type == "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
});

buttonLogout?.addEventListener("click", () => {
    document.getElementById("formLogout").submit();
});

// Image preview
let inputFile = document.getElementById("file-ip-1");
let preview = document.getElementById("file-ip-1-preview");
function showPreview(e) {
    if (e.target.files.length > 0) {
        console.log(e.target.files);
        let src = URL.createObjectURL(e.target.files[0]);
        console.log(src);
        preview.src = src;
        preview.style.display = "block";
    }
}

inputFile?.addEventListener("change", (e) => {
    showPreview(e);
});
// Datatable
let table = document.getElementById('myTable'); 
if (typeof(table) != null ) {
    let dataTable = new DataTable(table, {labels:{
        placeholder: "Buscar...",
        perPage: "Mostrar {select} por página",
        noRows: "No hay datos para mostrar",
        info: "Mostrando de {start} a {end} de {rows} ",
      }});
}
