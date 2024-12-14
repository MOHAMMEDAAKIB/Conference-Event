const params = new URLSearchParams(window.location.search);
const name = params.get('name');
const phone = params.get('phone');
const email = params.get('email');
const address = params.get('address');

if (!name || !phone || !email || !address) {
    alert("Required parameters are missing in the URL!");
} else {
    qrgen();
}

let qrImage = document.getElementById('qrimage');
let qrApiUrl = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(name + " " + phone + " " + email + " " + address)}`;

// Generate QR Code
function qrgen() {
    qrImage.src = qrApiUrl; // Set the image src
}

// Download QR Code as an Image
document.getElementById('download-btn').addEventListener('click', function () {
    const qrContainer = document.getElementById('qr-code');
    html2canvas(qrContainer).then((canvas) => {
        const link = document.createElement('a');
        link.href = canvas.toDataURL('image/png');
        link.download = 'qr-code.png';
        link.click();
    });
});

// Initialize EmailJS
emailjs.init("YOUR_USER_ID");

// Send Email with QR Code
function sendMail() {
    var params = {
        name: name,
        email: email,
        message: qrApiUrl, // Pass the QR Code URL
    };

    const serviceID = "YOUR_SERVICE_ID";
    const templateID = "YOUR_TEMPLATE_ID";

    emailjs
        .send(serviceID, templateID, params)
        .then((res) => {
            console.log(res);
            alert("Your message was sent successfully!");
        })
        .catch((err) => console.error(err));
}
