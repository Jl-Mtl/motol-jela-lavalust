<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Student Profile</title>

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

        /* NAVIGATION */

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

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

        .nav-links a:hover {
            color: #69a7ff;
        }


        /* MAIN */

        .container {
            max-width: 900px;
            margin: 45px auto;
            padding: 0 25px;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .page-title h1 {
            color: #173b70;
            font-size: 30px;
        }

        .page-title p {
            color: #777;
            margin-top: 7px;
        }


        /* PROFILE CARD */

        .profile-card {
            background: white;
            border-radius: 18px;

            box-shadow: 0 5px 25px rgba(0,0,0,0.08);

            overflow: hidden;
        }


        /* PROFILE HEADER */

        .profile-header {
            background: #173b70;
            color: white;

            padding: 30px;

            display: flex;
            align-items: center;
            gap: 20px;
        }

        .avatar {
            width: 80px;
            height: 80px;

            background: #69a7ff;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 32px;
            font-weight: bold;
        }

        .profile-header h2 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .profile-header p {
            opacity: 0.85;
        }


        /* INFORMATION */

        .information {
            padding: 30px;
        }

        .information h3 {
            color: #173b70;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .info-item {
            background: #f6f8fc;

            padding: 18px;

            border-radius: 10px;

            border-left: 4px solid #173b70;
        }

        .info-item label {
            display: block;

            color: #888;

            font-size: 12px;

            margin-bottom: 6px;

            text-transform: uppercase;
        }

        .info-item p {
            color: #333;

            font-size: 16px;

            font-weight: bold;
        }


        /* BUTTON */

        .back-btn {
            display: inline-block;

            margin-top: 25px;

            padding: 12px 20px;

            background: #173b70;

            color: white;

            text-decoration: none;

            border-radius: 8px;

            font-weight: bold;

            transition: 0.3s;
        }

        .back-btn:hover {
            background: #24589d;
        }


        /* FOOTER */

        footer {
            text-align: center;

            color: #888;

            padding: 30px;

            font-size: 13px;
        }


        /* MOBILE */

        @media (max-width: 700px) {

            .navbar {
                padding: 0 20px;
            }

            .nav-links {
                display: none;
            }

            .profile-header {
                padding: 25px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<!-- NAVIGATION BAR -->

<div class="navbar">

    <div class="logo">
        Student<span>Info</span>
    </div>

    <div class="nav-links">

        <a href="<?= site_url('student'); ?>">
            Home
        </a>

        <a href="<?= site_url('student/profile'); ?>">
            My Profile
        </a>

    </div>

</div>



<!-- MAIN CONTENT -->

<div class="container">


    <div class="page-title">

        <h1>My Student Profile</h1>

        <p>
            View and manage your student information.
        </p>

    </div>



    <!-- PROFILE CARD -->

    <div class="profile-card">


        <!-- PROFILE HEADER -->

        <div class="profile-header">

            <div class="avatar">
                JM
            </div>

            <div>

                <h2><?= $name ?></h2>

                <p>
                    <?= $course ?>
                </p>

            </div>

        </div>



        <!-- INFORMATION -->

        <div class="information">

            <h3>Student Information</h3>


            <div class="info-grid">


                <div class="info-item">

                    <label>Student ID</label>

                    <p>
                        <?= $student_id ?>
                    </p>

                </div>



                <div class="info-item">

                    <label>Full Name</label>

                    <p>
                        <?= $name ?>
                    </p>

                </div>



                <div class="info-item">

                    <label>Course</label>

                    <p>
                        <?= $course ?>
                    </p>

                </div>



                <div class="info-item">

                    <label>Year Level</label>

                    <p>
                        <?= $year ?>
                    </p>

                </div>



                <div class="info-item">

                    <label>Section</label>

                    <p>
                        <?= $section ?>
                    </p>

                </div>



                <div class="info-item">

                    <label>Email Address</label>

                    <p>
                        <?= $email ?>
                    </p>

                </div>


            </div>


            <a class="back-btn"
               href="<?= site_url('student'); ?>">

                ← Back to Home

            </a>


        </div>

    </div>

</div>



<footer>

    © 2026 Student Information System | LavaLust

</footer>


</body>

</html>