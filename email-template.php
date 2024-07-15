<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phenom Talent Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles can be added here */
        body {
            font-family: 'Roboto', sans-serif;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f3f4f6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .logo {
            max-width: 150px;
            margin: 0 auto;
        }
        .header-text {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .section-heading {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333333;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .cost-item {
            margin-bottom: 10px;
        }
        .footer {
            text-align: center;
            color: #777777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <img src="https://phenomtalentmanagement.com/assets/images/logo.png"  alt="Phenom Talent Management Logo" class="mx-auto w-20 mb-4">
        <div class="header-text">
            <h1 class="text-2xl font-bold text-gray-800">Phenom Talent Management</h1>
        </div>

        <div class="content">
            <p class="text-gray-800 mb-4">Dear {TO_NAME},</p>
            <p class="text-gray-800 mb-4">
                We acknowledge receipt of your proposal for a meet and greet with Lindsay Brewer. We also recognize her involvement in facilitating this event. However, we regret to inform you that due to the current racing season, we are unable to schedule a meeting at this time. Our primary focus is on our racer’s development and performance throughout the ongoing season.
            </p>
            <p class="text-gray-800 mb-4">
                That being said, we value your proposal and the interest it has generated. Once the season concludes, your proposal will be given top priority, as we consider our racer’s interest in participating. We look forward to revisiting this opportunity in the near future and appreciate your understanding and patience during this busy time.
            </p>
            <p class="text-gray-800 mb-4">
                As discussed, the total cost associated with Lindsay Brewer's attendance, detailed below, amounts to $75,800. Please arrange for the payment of this amount prior to the scheduled meet and greet to confirm her participation.
            </p>
            <p class="text-gray-800 mb-4">Thank you for your support and dedication.</p>
            <p class="text-gray-800 font-bold mb-4">Best regards,</p>
            <p class="text-gray-800 font-bold mb-4">Phenom Talent Management Team</p>
        </div>

        <div class="content">
            <h2 class="section-heading">Breakdown of Costs</h2>
            <div class="cost-item">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Event Management</h3>
                <ul class="list-disc list-inside text-gray-800 mb-4">
                    <li>Event Planning and Coordination: $19,800</li>
                    <li>Staff and Security: $13,000</li>
                </ul>
            </div>
            <div class="cost-item">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Hospitality</h3>
                <ul class="list-disc list-inside text-gray-800 mb-4">
                    <li>Catering (Food and Beverages): $20,000</li>
                    <li>VIP Services: $10,000</li>
                </ul>
            </div>
            <div class="cost-item">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Travel and Accommodation</h3>
                <ul class="list-disc list-inside text-gray-800 mb-4">
                    <li>Flights: $8,000</li>
                    <li>Local Transportation: $2,800</li>
                </ul>
            </div>
            <div class="cost-item">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Miscellaneous</h3>
                <ul class="list-disc list-inside text-gray-800 mb-4">
                    <li>Contingency Fund: $2,200</li>
                </ul>
            </div>
            <p class="text-gray-800 font-bold">Total: $75,800</p>
        </div>

        <div class="footer">
            <p>Phenom Talent Management &copy; 2024. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
