function dateTime() {
    const now = new Date(); // Get the current date and time
    const date = now.toLocaleDateString(); // Format the date (e.g., "12/4/2024")
    const time = now.toLocaleTimeString(); // Format the time (e.g., "5:45:30 PM")

    const cont = document.getElementById('date');
    const dateArray = date.split("/"); // Splits "12/5/2024" into ["12", "5", "2024"]

    const day = dateArray[1]; 
    const month = Number(dateArray[0]); // Get the month (adjusted to locale settings)
    const year = dateArray[2]; // Get the year

    const monthName = monthfinder(month); // Get the month name
    cont.textContent = `${day} ${monthName} ${year} ${time}`; // Combine and display date and time
}

// Function to map month numbers to names
function monthfinder(x) {
    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    return months[x - 1]; // Return the correct month name
}

//Buy ticket for locaton chnge in register 
function registerForm(){
    location.replace('Page/Registation/User_deatails_Registr_Form.html');
}



// navigation bar function 

let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');
window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
        if(top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });
};




// Call the dateTime function when the document is loaded
document.addEventListener('DOMContentLoaded', () => {
    dateTime();
});
