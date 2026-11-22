  <?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
$message = '';

// Handle form submission to add address
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Null check in PHP
    if (
        empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['address']) ||
        empty($_POST['city']) || empty($_POST['country']) || empty($_POST['province']) ||
        empty($_POST['phone'])
    ) {
        $message = "Address not saved. Please fill out all fields.";
        $messageType = "error";
    } else {
        $stmt = $pdo->prepare("INSERT INTO addresses (username, first_name, last_name, address, city, country, province, phone)
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $username,
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['address'],
            $_POST['city'],
            $_POST['country'],
            $_POST['province'],
            $_POST['phone']
        ]);
        $message = "Address added successfully!";
        $messageType = "success";
    }

    if (isset($_POST['delete_address_id'])) {
        $stmt = $pdo->prepare("DELETE FROM addresses WHERE id = ? AND username = ?");
        $stmt->execute([$_POST['delete_address_id'], $username]);
        $message = "Address deleted successfully.";
    }
}

// Fetch all addresses for the user
$stmt = $pdo->prepare("SELECT * FROM addresses WHERE username = ?");
$stmt->execute([$username]);
$addresses = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Address</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e6f2ff;
            color: #003366;
            margin: 0;
            padding: 0;
        }

        nav {
            width: 100%;
            background-color: #003366;
            color: white;
            padding: 10px 0;
        }

        .container {
            max-width: 700px;
            margin: 100px auto 60px;
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 51, 102, 0.2);
        }

        h2 {
            color: #0059b3;
            margin-bottom: 20px;
            text-align: center;
        }

        .return-link {
            margin-bottom: 20px;
            text-align: center;
        }

        .return-link a {
            color: #0059b3;
            text-decoration: none;
            font-weight: bold;
        }

        form label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #b3d1ff;
            border-radius: 5px;
        }

        .submit-btn {
            margin-top: 20px;
            text-align: center;
        }

        .submit-btn button {
            background-color: #0059b3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn button:hover {
            background-color: #004080;
        }

        .message {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
        }

        .message.success {
            color: green;
            background-color: #e6ffe6;
            border: 1px solid #00cc00;
        }

        .message.error {
            color: red;
            background-color: #ffe6e6;
            border: 1px solid #ff3333;
        }

        .address-list {
            margin-top: 30px;
        }

        .address-item {
            border: 1px solid #cce0ff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 6px;
            background-color: #f7fbff;
            position: relative;
        }

        .delete-form {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .delete-form button {
            background-color: #cc0000;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .delete-form button:hover {
            background-color: #990000;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 30px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 10px;
            text-align: center;
        }

        .modal-buttons button {
            margin: 10px;
            padding: 8px 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal-buttons .yes {
            background-color: #cc0000;
            color: white;
        }

        .modal-buttons .no {
            background-color: #e6e6e6;
            color: black;
        }
    </style>
</head>
<body>

<nav>
    <?php include 'navbar_update.php'; ?>
</nav>

<div class="container">
    <h2>Your Address</h2>

    <div class="return-link">
        <a href="account.php">← Return to account details</a>
    </div>

    <h3 style="color: #003366;">Add A New Address</h3>
    <form id="addAddressForm" method="post">
        <label>First Name:</label>
        <input type="text" name="first_name" required>

        <label>Last Name:</label>
        <input type="text" name="last_name" required>

        <label>Address:</label>
        <input type="text" name="address" required>

        <label>City:</label>
        <input type="text" name="city" required>

        <label>Country/Region:</label>
        <input type="text" name="country" required>

        <label>Province:</label>
        <input type="text" name="province" required>

        <label>Phone:</label>
        <input type="text" name="phone" required>

        <div class="submit-btn">
            <button type="button" onclick="confirmAdd()">Add a New Address</button>
        </div>
        <input type="hidden" name="add_address" value="1">

        <?php if ($message): ?>
            <div class="message <?= $messageType ?>"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>
    </form>

    <?php if ($addresses): ?>
        <div class="address-list">
            <h3 style="color: #003366;">Your Saved Addresses</h3>
            <?php foreach ($addresses as $addr): ?>
                <div class="address-item">
                    <form method="post" class="delete-form" onsubmit="return confirmDelete(this);">
                        <input type="hidden" name="delete_address_id" value="<?= $addr['id'] ?>">
                        <button type="submit">Delete</button>
                    </form>
                    <?= htmlspecialchars($addr['first_name'] . ' ' . $addr['last_name']) ?><br>
                    <?= htmlspecialchars($addr['address']) ?><br>
                    <?= htmlspecialchars($addr['city']) ?>, <?= htmlspecialchars($addr['province']) ?><br>
                    <?= htmlspecialchars($addr['country']) ?><br>
                    Phone: <?= htmlspecialchars($addr['phone']) ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<!-- Confirmation Modal -->
<div id="confirmModal" class="modal">
    <div class="modal-content">
        <p id="modalMessage">Are you sure?</p>
        <div class="modal-buttons">
            <button class="yes" onclick="modalConfirm()">Yes</button>
            <button class="no" onclick="closeModal()">No</button>
        </div>
    </div>
</div>

<script>
    let formToSubmit = null;

    function confirmDelete(form) {
        formToSubmit = form;
        document.getElementById('modalMessage').innerText = 'Are you sure you want to delete this address?';
        document.getElementById('confirmModal').style.display = 'block';
        return false;
    }

    function confirmAdd() {
        const form = document.getElementById('addAddressForm');
        const inputs = form.querySelectorAll('input[type="text"]');
        let isValid = true;

        inputs.forEach(input => {
            input.style.border = "";
            if (input.value.trim() === "") {
                input.style.border = "2px solid red";
                isValid = false;
            }
        });

        if (isValid) {
            formToSubmit = form;
            document.getElementById('modalMessage').innerText = 'Are you sure you want to add this address?';
            document.getElementById('confirmModal').style.display = 'block';
        }
    }

    function modalConfirm() {
        if (formToSubmit) {
            formToSubmit.submit();
        }
    }

    function closeModal() {
        document.getElementById('confirmModal').style.display = 'none';
        formToSubmit = null;
    }

    window.onclick = function(event) {
        const modal = document.getElementById('confirmModal');
        if (event.target === modal) {
            modal.style.display = "none";
            formToSubmit = null;
        }
    }
</script>

<?php include 'footer.php'; ?>
</body>
</html>   