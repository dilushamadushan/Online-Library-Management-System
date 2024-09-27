<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/admin-pannel.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script defer src="../assets/js/admin-pannel.js"></script>

</head>
<body>
    <div class="admin-pannel-container">
        <div class="menues-admin">
            <aside id="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="#">Admin Pannel</a>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i id="sidebar-i" class="lni lni-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i id="sidebar-ai" class="lni lni-agenda"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="lni lni-book"></i>
                            <span>Books</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                            <i id="sidebar-ai1" class="lni lni-layout"></i>
                            <span>E-resources</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i id="sidebar-ai2" class="lni lni-popup"></i>
                            <span>Past Paper</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i id="sidebar-ai3" class="lni lni-cog"></i>
                            <span>Articles and Megacine</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="#" class="sidebar-link">
                        <i id="sidebar-ai4" class="lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </aside>
            <div class="show-details p-3">
                <div class="profile-info">
                    <h1>Personal Information</h1>
                    <h2>Admin Name:</h2>
                    <input type="text" name="name" id="name" value="Hajith">
                    <h2>Admin email:</h2>
                    <input type="e-mail" name="mail" id="mail" value="hanoufaatif@gmail.com">
                    <h2>Mobile No:</h2>
                    <input type="text" name="mobile" id="mobile" value="0740523954">
                    <h2>Adsress:</h2>
                    <input type="text" name="addr" id="addr" value="Central Beach Road, Palamunai-11,Arayampathy, Batticaloa.">
                    <input type="button" value="Ubdate" name="btn">
                </div>
            </div>
        </div>
        </div>
</body>
</html>