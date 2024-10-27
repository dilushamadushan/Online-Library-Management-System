<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="assets/css/user-register.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .otp-verify {
            width: 100%;
            max-width: 500px;
            border-radius: 12px;
            box-shadow: -3px 3px 10px -5px rgba(0,0,0,0.25);
            padding: 30px;
            text-align: center;
        }
        .otp-verify h2 {
            font-size: 30px;
            font-weight: 700;
        }
        .otp-verify p {
            font-size: 14px;
            padding-bottom: 8px;
        }
        #error-text {
            color: #851923;
            padding: 4px 6px;
            text-align: center;
            border-radius: 4px;
            background: #ffe3e5;
            border: 1px solid #dfa5ab;
            margin-bottom: 8px;
            display: none;
        } 
        .button {
            height: 45px;
            border: none;
            color: #f2f3f7;
            width: 100%;
            background: #006692;
            font-size: 17px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 13px;
            border: 2px solid #2983aa;
        }
        .fields-of-input {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 15px 0;
        }
        .otp-field {
            border-radius: 5px;
            font-size: 60px;
            height: 100px;
            width: 80px;
            border: 3px solid #cacaca;
            margin: 1%;
            text-align: center;
            font-weight: 600;
            outline: none;
        }
        .otp-field:valid {
            border-color: #3095d8;
            box-shadow: 0 10px 10px -5px rgba(0,0,0,0.25);
        }
        .otp-field::-webkit-inner-spin-button,
        .otp-field::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

    </style>
</head>
<body>
    <div class="otp-verify">
        <h2>Verify Your Account</h2>
        <p>We emailed you the four-digit OTP code. Enter the code below to confirm your email address.</p>
        <div id="error-text"></div>
        <form id="otp-form" action="otp-verify.php" method="post">
            <div class="fields-of-input">
                <input type="number" id="otp1" class="otp-field" min="0" max="9" required>
                <input type="number" id="otp2" class="otp-field" min="0" max="9" required>
                <input type="number" id="otp3" class="otp-field" min="0" max="9" required>
                <input type="number" id="otp4" class="otp-field" min="0" max="9" required>
            </div>
            <button type="submit" class="button" name="verify">Verify</button>
        </form>
    </div>
    <script>
        const otps = document.querySelectorAll('.otp-field');
        const errorText = document.querySelector("#error-text");
        const otpForm = document.getElementById('otp-form');

        otps.forEach((field, index) => {
            field.addEventListener("keydown", (e) => {
                if (e.key >= 0 && e.key <= 9) {
                    otps[index].value = "";
                    setTimeout(() => {
                        if (index < otps.length - 1) {
                            otps[index + 1].focus();
                        }
                    }, 4);
                } else if (e.key === "Backspace") {
                    setTimeout(() => {
                        if (index > 0) {
                            otps[index - 1].focus();
                        }
                    }, 4);
                }
            });
        });

        otpForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const otp = `${otps[0].value}${otps[1].value}${otps[2].value}${otps[3].value}`;
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "otp-verify.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        const data = xhr.responseText.trim();
                        if (data === "success") {
                            window.location.href = "user-account.php";
                        } else {
                            errorText.textContent = data;
                            errorText.style.display = "block";
                        }
                    }
                }
            };
            xhr.send(`otp=${otp}&verify=1`);
        });
    </script>
</body>
</html>
