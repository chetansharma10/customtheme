// Read all dropdown-toggle
let dropdowns = document.querySelectorAll('.dropdown-toggle');

// Read dropdown-toggle items
dropdowns.forEach((dd)=>{

    // Attach dropdown-toggle click listener
    dd.addEventListener('click', function (e) {

        // Reading nextSibling
        let el = this.nextElementSibling;

        // If it is block then none visa versa
        el.style.display = (el.style.display==='block')?'none':'block'
    })
})