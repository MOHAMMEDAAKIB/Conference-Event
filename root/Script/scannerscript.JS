// Improved passarry with error handling
function passarry(dataArray) {
    const formData = new FormData();
    formData.append("array", JSON.stringify(dataArray));

    return fetch("chak.php", {
        method: "POST", 
        body: formData, 
    })
        .then(response => {
            if (!response.ok) {
                throw new Error("Server responded with status " + response.status);
            }
            return response.text();
        })
        .then(data => {
            console.log("Response from PHP:", data);
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Failed to send data to the server.");
        });
}

// Improved startCameraScan with better error handling
function startCameraScan() {
    qrReaderElement.style.display = "block"; 

    const html5QrCode = new Html5Qrcode("qr-reader");

    html5QrCode
        .start(
            { facingMode: "environment" },
            { fps: 10, qrbox: 250 },
            (decodedText) => {
                const dataArray = decodedText.split(" ");
                passarry(dataArray)
                    .then(() => {
                        alert("QR code data successfully sent to the server.");
                        location.replace("chak.php");
                    })
                    .catch(() => {
                        alert("Error occurred while processing QR code data.");
                    })
                    .finally(() => {
                        html5QrCode.stop();
                    });
            },
            (error) => {
                console.warn("Error scanning:", error);
            }
        )
        .catch((err) => {
            console.error("Unable to start QR code scanner:", err);
            alert("Failed to open camera.");
        });
}
