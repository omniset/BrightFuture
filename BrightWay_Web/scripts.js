// Toggle sliding menu
document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.menu-button');
    const slidingMenu = document.querySelector('.sliding-menu');

    menuButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the click from bubbling up
        if (slidingMenu.style.transform === 'translateX(0%)') {
            slidingMenu.style.transform = 'translateX(-100%)'; // Slide out
        } else {
            slidingMenu.style.transform = 'translateX(0%)'; // Slide in
        }
    });

    // Close the menu when clicking outside
    document.addEventListener('click', function () {
        slidingMenu.style.transform = 'translateX(-100%)'; // Slide out
    });

    // Prevent the menu from closing when clicking inside it
    slidingMenu.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    // Attach the search function to the search input
    document.getElementById('search-bar').addEventListener('keyup', searchTable);
});

// Function to search the table
function searchTable() {
    var input = document.getElementById('search-bar');
    var filter = input.value.toLowerCase();
    var table = document.getElementById('violations-table');
    var tr = table.getElementsByTagName('tr');
    
    // Loop through all table rows (skipping the first row - headers)
    for (var i = 1; i < tr.length; i++) {
        var tdName = tr[i].getElementsByTagName('td')[0];  // Student Name
        var tdViolation = tr[i].getElementsByTagName('td')[1];  // Violation Description
        if (tdName || tdViolation) {
            var txtValueName = tdName.textContent || tdName.innerText;
            var txtValueViolation = tdViolation.textContent || tdViolation.innerText;
            if (txtValueName.toLowerCase().indexOf(filter) > -1 || txtValueViolation.toLowerCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
