<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
        <h2 class="text-2xl font-bold mb-6 text-center">Email Form</h2>
        <form action="send-email.php" method="post" class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title or Subject Of Email</label>
                <input type="text" id="title" name="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div>
                <label for="fullname" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Email Content</label>
                <textarea id="content" name="content" rows="8" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" name="submit" class="w-full bg-indigo-600 text-white py-3 px-4 rounded-md hover:bg-indigo-700">Send Email</button>
            </div>
        </form>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                // Adjust the height of the editor
                minHeight: '300px', // Uncomment and set your desired minHeight
                maxHeight: '600px' // Uncomment and set your desired maxHeight
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>
