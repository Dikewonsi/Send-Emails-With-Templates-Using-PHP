<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <div class="text-center">
            <h1 class="text-3xl font-bold mb-4">
                <a href="{SITE_ADDR}" target="_blank">                    
                    <img src="https://phenomtalentmanagement.com/assets/images/logo.png" alt="Phenom" width="100" height="900" class="h-16 mx-auto">
                </a>
            </h1>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-lg border-t-4 border-600" style="border-color:#093e4eff;">            
            <p class="text-gray-800 mt-4">Hello {TO_NAME},</p>
            <p class="text-gray-800 mt-4">{EMAIL_CONTENT}</p>
        </div>
    </div>
</body>
</html>
