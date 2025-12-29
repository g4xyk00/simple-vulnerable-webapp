<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h2>Enter Password</h2>

<input type="password" id="passwordInput" placeholder="Password">
<button onclick="checkPassword()">Login</button>

<p id="message"></p>

<script>
    const correctHash = "2ae868079d293e0a185c671c7bcdac51df36e385";

    async function hashPassword(string) {
        const utf8 = new TextEncoder().encode(string);
        const hashBuffer = await crypto.subtle.digest('SHA-1', utf8);
        const hashArray = Array.from(new Uint8Array(hashBuffer));
        const hashHex = hashArray.map(bytes => bytes.toString(16).padStart(2, '0')).join('');
        return hashHex;
    }

    async function checkPassword() {
        const password = document.getElementById('passwordInput').value;
        const inputHash = await hashPassword(password);
        const message = document.getElementById('message');

        if (inputHash === correctHash) {
            window.location.href = "viewLog.php";
        } else {
            message.textContent = "Incorrect password. Access denied.";
        }
    }
</script>
</body>
</html>