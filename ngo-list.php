<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO List - Donation Management System</title>
    <link rel="stylesheet" href="logstyle.css">
    <style>
        body {
            <?php include("partials/_nav.php"); ?>
            font-family: Arial, sans-serif;
            background: url('about_back.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        .ngo-list-container {
            width: 100%;
            max-width: 90%;
            max-height: 100vh; /* Adjust the height as needed */
            overflow-y: auto;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .ngo-item {
            background-color: rgba(255, 255, 255, 0.8);
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            width: 100%;
        }

        .ngo-item h3 {
            margin-bottom: 10px;
        }

        .ngo-item button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .ngo-item button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    
    <h2>NGO List</h2>
    <div class="ngo-list-container" id="ngo-list"></div>

    <!-- The Modal -->
    <div id="ngoModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="ngoModalName"></h2>
            <p id="ngoModalDescription"></p>
            <p><strong>Address:</strong> <span id="ngoModalAddress"></span></p>
            <p><strong>Contact:</strong> <span id="ngoModalContact"></span></p>
            <p><strong>Accepting Donations:</strong> <span id="ngoModalDonations"></span></p>
            <p><strong>UPI Barcode:</strong></p>
            <img id="ngoModalUpi" src="" alt="UPI Barcode" style="width: 100%; max-width: 300px;">
            <form id="donationForm">
                <div class="form-group">
                    <label for="donationAmount">Donation Amount</label>
                    <input type="number" id="donationAmount" name="donationAmount" required>
                </div>
                <div class="form-group">
                    <label for="userId">User ID</label>
                    <input type="text" id="userId" name="userId" required>
                </div>
                <button type="submit">Donate</button>
            </form>
        </div>
    </div>

    <script>
        // Example data: Replace this with a real API call to fetch data from your backend
        const ngos = [
    {
        name: "NGO 1",
        address: "123 Street, City, Country",
        contact: "1234567890",
        description: "Description of NGO 1",
        donations: "Clothes, Food, Money",
        upi: "barc.png" // Ensure this file exists in the same directory as your HTML file
    },
    {
        name: "NGO 2",
        address: "456 Avenue, City, Country",
        contact: "0987654321",
        description: "Description of NGO 2",
        donations: "Books, Toys, Money",
        upi: "about_back.jpg" // This is not a barcode, just for testing
    }
    // Add more NGOs as needed
];

function loadNgos() {
    const ngoList = document.getElementById('ngo-list');
    ngoList.innerHTML = ngos.map(ngo => `
        <div class="ngo-item">
            <h3>${ngo.name}</h3>
            <p>${ngo.address}</p>
            <p>${ngo.contact}</p>
            <button onclick="showDetails('${ngo.name}')">View Details</button>
        </div>
    `).join('');
}

function showDetails(name) {
    const ngo = ngos.find(ngo => ngo.name === name);
    if (ngo) {
        console.log("Showing details for:", ngo);
        document.getElementById('ngoModalName').innerText = ngo.name;
        document.getElementById('ngoModalDescription').innerText = ngo.description;
        document.getElementById('ngoModalAddress').innerText = ngo.address;
        document.getElementById('ngoModalContact').innerText = ngo.contact;
        document.getElementById('ngoModalDonations').innerText = ngo.donations;
        document.getElementById('ngoModalUpi').src = ngo.upi;
        console.log("UPI image source set to:", ngo.upi);
        document.getElementById('ngoModal').style.display = "flex";
    } else {
        console.error("NGO not found:", name);
    }
}

document.addEventListener('DOMContentLoaded', loadNgos);

// Get the modal
var modal = document.getElementById("ngoModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Handle donation form submission
document.getElementById('donationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const amount = document.getElementById('donationAmount').value;
    const userId = document.getElementById('userId').value;
    const ngoName = document.getElementById('ngoModalName').innerText;

    // Send donation data to the backend
    fetch('donate.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            ngoName: ngoName,
            amount: amount,
            userId: userId
        })
    })
    .then(response => response.json())
    .then(data => {
        alert(`Thank you for your donation of ${amount}!`);
        modal.style.display = "none";
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error processing your donation.');
    });
});
    </script>
</body>
</html>
