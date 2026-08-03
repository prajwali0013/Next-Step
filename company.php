<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Top Companies</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #eef6ff;
            color: #123;
        }

        /* Header */

        header {
            background: linear-gradient(135deg, #003b73, #0074cc);
            color: white;
            padding: 25px;
            text-align: center;
        }

        header h1 {
            font-size: 35px;
            margin-bottom: 8px;
        }

        header p {
            font-size: 16px;
        }

        /* Main */

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .container h2 {
            text-align: center;
            color: #003b73;
            font-size: 30px;
            margin-bottom: 30px;
        }

        /* Cards */

        .company-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .company-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            transition: 0.3s;
        }

        .company-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
        }

        .company-card img {
            width: 110px;
            height: 110px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .company-card h3 {
            color: #003b73;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .company-card p {
            color: #555;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background: #0074cc;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: #003b73;
        }

        /* Responsive */

        @media(max-width: 900px) {
            .company-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width: 600px) {
            .company-container {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>

<body>

<!-- Header -->

<header>
    <h1>Top Hiring Companies</h1>
    <p>Explore Company Information, Careers, Salaries & Interview Questions</p>
</header>


<!-- Main Content -->

<div class="container">

    <h2>Explore Top 8 Companies</h2>

    <div class="company-container">


        <!-- Google -->

        <div class="company-card">

            <img src="https://cdn.simpleicons.org/google">

            <h3>Google</h3>

            <p>
                Explore Google history, jobs, salary,
                branches and interview questions.
            </p>

            <a href="google.php" class="btn">
                View Details
            </a>

        </div>


        <!-- Microsoft -->

        <div class="company-card">

		<img src="https://icons.iconarchive.com/icons/simpleicons-team/simple/128/microsoft-icon.png" alt="Microsoft Logo">
            <h3>Microsoft</h3>

            <p>
                Learn about Microsoft company,
                careers, salary and opportunities.
            </p>

            <a href="microsoft.php" class="btn">
                View Details
            </a>

        </div>


        <!-- Amazon -->

        <div class="company-card">

		<img src="https://icons.iconarchive.com/icons/simpleicons-team/simple/128/amazon-icon.png" alt="Amazon Logo">            <h3>Amazon</h3>

            <p>
                Explore Amazon history, jobs,
                salary and career opportunities.
            </p>

            <a href="amazon.php" class="btn">
                View Details
            </a>

        </div>


        <!-- TCS -->

        <div class="company-card">

            <img src="https://cdn.simpleicons.org/tcs">

            <h3>TCS</h3>

            <p>
                Know about TCS jobs, salary,
                branches and career growth.
            </p>

            <a href="tcs.php" class="btn">
                View Details
            </a>

        </div>


        <!-- Infosys -->

        <div class="company-card">

            <img src="https://cdn.simpleicons.org/infosys">

            <h3>Infosys</h3>

            <p>
                Explore Infosys company,
                job profiles and salary details.
            </p>

            <a href="infosys.php" class="btn">
                View Details
            </a>

        </div>


        <!-- Wipro -->

        <div class="company-card">

		<img src="https://icons.iconarchive.com/icons/simpleicons-team/simple/128/wipro-icon.png" alt="Wipro Logo">
            <h3>Wipro</h3>

            <p>
                Learn about Wipro careers,
                jobs and salary information.
            </p>

            <a href="wipro.php" class="btn">
                View Details
            </a>

        </div>


        <!-- Cognizant -->

        <div class="company-card">

		<img src="https://icons.iconarchive.com/icons/simpleicons-team/simple/128/cognizant-icon.png" alt="Cognizant Logo">
            <h3>Cognizant</h3>

            <p>
                Explore Cognizant jobs,
                career and interview information.
            </p>

            <a href="cognizant.php" class="btn">
                View Details
            </a>

        </div>


        <!-- Accenture -->

        <div class="company-card">

            <img src="https://cdn.simpleicons.org/accenture">

            <h3>Accenture</h3>

            <p>
                Know about Accenture jobs,
                salary and career opportunities.
            </p>

            <a href="accenture.php" class="btn">
                View Details
            </a>

        </div>


    </div>

</div>

</body>
</html>