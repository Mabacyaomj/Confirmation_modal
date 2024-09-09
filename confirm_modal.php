<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Message</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-blue-50 to-blue-200">
    <!-- Modal Container -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
        <div class="relative bg-white rounded-lg shadow-lg max-w-md w-full p-6 border border-gray-300 flex flex-col items-center justify-center">
            <div class="bg-indigo-600 h-16 w-16 rounded-full flex items-center justify-center mb-6 shadow-md">
                <img src="./assets/img/check.png" alt="Check Icon" class="h-8 w-8">
            </div>
            <div class="text-gray-900 text-2xl font-semibold mb-4 text-center">Profile Updated</div>
            <div class="text-gray-700 text-base text-center mb-6">Your profile has been updated successfully.</div>
            <button id="close-btn" class="absolute top-4 right-4 bg-gray-200 h-10 w-10 rounded-full flex items-center justify-center hover:bg-gray-300 transition">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAApCAYAAACoYAD2AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHESURBVHgB7ZfNTsJAEIC3bSBACHAhIeGib6BvgDdvevTIa3iTN8Cbb6A+gifx5FEfgfKT1FsbOBgSWmdISWptO7s7622/hNC0u9MvbXdmRwiLxWKxVOHJDOoB/X7/stVqfW+321AwUY3nUAMGg8FJvV7/wNjwC/f7/cV6vf4UmgyHwzPP816P8Xa73XkQBPOqOS4RU4DgOA2I9PAGeCOhQU7wEA/iX1PzSEnXdWe5U1qiBYIHkiSZU3PJbzIMw3m328XPYpQ53QD5m3a7/bLZbAIqRplgHMeT1Wr1QM2XWjhRFM10RQnBOyGBlKSuqAlBJUlVUVOCypKyoiYFtSQp0U6n8wX/j6YEtSVFhajjOJj3GtmxHEFEWxIpEf0FVxBhSSKp6CkcFiX36XK5vBVMyIpDkVaeq5LLY90SmoXcYFRRtopzsDcl2k+yTBAWzltuKGtTgmhJVuVB3/dHcDjJTWGJKi8cmUTNqfVsSZVKYlJUWlKn1JkSlZLk1GIToqQk9ji1Wu1dMGpxlWiz2XymmjHVHkdZ8MhiscDxf1b9v/Q4nFpcJGqsx4Htlw9JOoKA9yA4FQzw1WfjQW1/EhaLxWJh8QO6dUgUSveJPAAAAABJRU5ErkJggg==" alt="Close Icon" class="h-5 w-5">
            </button>
        </div>
    </div>

    <!-- Trigger Button -->
    <button id="open-btn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Confirm</button>

    <script>
        document.getElementById('open-btn').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });

        document.getElementById('close-btn').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });
    </script>
</body>
</html>
