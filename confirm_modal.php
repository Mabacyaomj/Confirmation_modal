<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Message</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Adding a subtle texture to the background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.toptal.com/designers/subtlepatterns/patterns/double-bubble-outline.png'), linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            opacity: 0.5;
            z-index: -1;
            background-size: cover;
            background-blend-mode: overlay;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</head>
<body class="relative flex items-center justify-center h-screen">
    <div class="relative bg-white rounded-3xl shadow-2xl w-96 h-80 flex flex-col items-center justify-center p-8 border border-gray-200 animate-fadeIn">
        <div class="bg-gray-800 h-16 w-16 rounded-full flex items-center justify-center mb-4 shadow-md">
            <img src="./asstes/img/check.png" alt="Check Icon" class="h-8 w-8">
        </div>
        <div class="text-gray-800 text-xl font-semibold mb-3">Profile Changed</div>
        <div class="text-gray-600 text-base">Your status has been changed successfully.</div>
        <div class="absolute top-4 right-4 bg-gray-100 h-10 w-10 rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-200 transition">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAApCAYAAACoYAD2AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHESURBVHgB7ZfNTsJAEIC3bSBACHAhIeGib6BvgDdvevTIa3iTN8Cbb6A+gifx5FEfgfKT1FsbOBgSWmdISWptO7s7622/hNC0u9MvbXdmRwiLxWKxVOHJDOoB/X7/stVqfW+321AwUY3nUAMGg8FJvV7/wNjwC/f7/cV6vf4UmgyHwzPP816P8Xa73XkQBPOqOS4RU4DgOA2I9PAGeCOhQU7wEA/iX1PzSEnXdWe5U1qiBYIHkiSZU3PJbzIMw3m328XPYpQ53QD5m3a7/bLZbAIqRplgHMeT1Wr1QM2XWjhRFM10RQnBOyGBlKSuqAlBJUlVUVOCypKyoiYFtSQp0U6n8wX/j6YEtSVFhajjOJj3GtmxHEFEWxIpEf0FVxBhSSKp6CkcFiX36XK5vBVMyIpDkVaeq5LLY90SmoXcYFRRtopzsDcl2k+yTBAWzltuKGtTgmhJVuVB3/dHcDjJTWGJKi8cmUTNqfVsSZVKYlJUWlKn1JkSlZLk1GIToqQk9ji1Wu1dMGpxlWiz2XymmjHVHkdZ8MhiscDxf1b9v/Q4nFpcJGqsx4Htlw9JOoKA9yA4FQzw1WfjQW1/EhaLxWJh8QO6dUgUSveJPAAAAABJRU5ErkJggg==" alt="Close Icon" class="h-5 w-5">
        </div>
    </div>
</body>
</html>
