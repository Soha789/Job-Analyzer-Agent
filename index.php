<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Analyzer - Welcome</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .welcome-container {
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 500px;
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 1.2em;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .get-started-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 15px 50px;
            font-size: 1.2em;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .get-started-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }

        .app-container {
            display: none;
            width: 100vw;
            height: 100vh;
        }

        .app-container.active {
            display: block;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
    <!-- Welcome Page -->
    <div class="welcome-container" id="welcomePage">
        <h1>Welcome! 👋</h1>
        <p>Ready to analyze your job opportunities? Let's get started and find the perfect match for you!</p>
        <button class="get-started-btn" onclick="showApp()">Get Started</button>
    </div>

    <!-- App Container -->
    <div class="app-container" id="appContainer">
        <iframe src="https://v0-job-analyzer-agent-sigma.vercel.app" title="Job Analyzer"></iframe>
    </div>

    <script>
        function showApp() {
            document.getElementById('welcomePage').style.display = 'none';
            document.getElementById('appContainer').classList.add('active');
        }
    </script>
</body>
</html>
