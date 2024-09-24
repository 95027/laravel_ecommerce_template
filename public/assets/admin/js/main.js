// document.querySelectorAll('.dropdown-toggle').forEach(function (dropdownToggle) {
//     dropdownToggle.addEventListener('click', function (e) {
//         e.preventDefault();

//         const dropdown = this.parentElement;
//         const dropdownMenu = dropdown.querySelector('.dropdown-menu');
//         const chevronIcon = dropdown.querySelector('.bxs');
//         document.querySelectorAll('.dropdown').forEach(function (otherDropdown) {
//             if (otherDropdown !== dropdown && otherDropdown.classList.contains('open')) {
//                 const otherMenu = otherDropdown.querySelector('.dropdown-menu');

//                 otherMenu.style.maxHeight = 0;
//                 otherDropdown.classList.remove('open');
//             }
//         });

//         dropdown.classList.toggle('open');
//         if (dropdown.classList.contains('open')) {
//             console.log("open");
//             dropdownMenu.style.maxHeight = dropdownMenu.scrollHeight + 'px';
//         } else {
//             console.log("close");
//             dropdownMenu.style.maxHeight = 0;
//         }
//     });
// });


// Dark and Light Mode
const checkbox = document.getElementById("checkbox")
checkbox.addEventListener("change", () => {
    document.body.classList.toggle("dark")
})


$(window).on('load', function () {
    setTimeout(function () {
        $('.page-loader').fadeOut('slow');
    }, 1000);
});
