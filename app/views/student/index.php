<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Information System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f7fb;
            color: #333;
        }

        .navbar {
            height: 70px;
            background: #173b70;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .logo span {
            color: #69a7ff;
        }

        .student-label {
            font-size: 14px;
            opacity: 0.9;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 25px;
        }

        .welcome {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            margin-bottom: 25px;
        }

        .welcome h1 {
            color: #173b70;
            font-size: 32px;
            margin-bottom: 12px;
        }

        .welcome p {
            color: #666;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .profile-btn {
            display: inline-block;
            background: #173b70;
            color: white;
            text-decoration: none;
            padding: 13px 22px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .profile-btn:hover {
            background: #24589d;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
        }

        .card-icon {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #173b70;
            margin-bottom: 8px;
        }

        .card p {
            color: #777;
            font-size: 14px;
            line-height: 1.5;
        }

        footer {
            text-align: center;
            color: #888;
            padding: 30px;
            font-size: 13px;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 0 20px;
            }

            .student-label {
                display: none;
            }

            .welcome {
                padding: 25px;
            }

            .welcome h1 {
                font-size: 26px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="logo">
            Student<span>Info</span>
        </div>

        <div class="student-label">
            Student Information System
        </div>
    </div>


    <!-- Main Content -->
    <div class="container">

        <div class="welcome">

            <h1>Welcome, Jela! 👋</h1>

            <p>
                Welcome to your Student Information System.
                Manage and view your student information easily.
            </p>

            <a class="profile-btn"
               href="<?= site_url('student/profile'); ?>">
                View My Profile →
            </a>

        </div>


        <!-- Information Cards -->
        <div class="cards">

            <div class="card">
                <div class="card-icon">👤</div>

                <h3>My Profile</h3>

                <p>
                    View your personal and academic information.
                </p>
            </div>


            <div class="card">
                <div class="card-icon">🎓</div>

                <h3>Academic Information</h3>

                <p>
                    Keep track of your course, year level,
                    and section.
                </p>
            </div>


            <div class="card">
                <div class="card-icon">📋</div>

                <h3>Student Records</h3>

                <p>
                    Access your basic student information
                    in one convenient place.
                </p>
            </div>

        </div>

    </div>


    <footer>
        © 2026 Student Information System | LavaLust
    </footer>

</body>
</html>