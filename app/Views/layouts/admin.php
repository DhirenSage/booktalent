<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



    <title>BookTalent Admin</title>
</head>
<body>

<body>

<div class="container-fluid">
    
    <div class="row">
        
        <div class="col-2 bg-dark text-white vh-100 p-3">
            <h3>BookTalent</h3>

            <hr>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Artists</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Bookings</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Payments</a>
                </li>
            </ul>
        </div>

        <div class="col-10 p-4">
            <?= $this->renderSection('content') ?>
        </div>

    </div>

</div>

</body>

</body>
</html>