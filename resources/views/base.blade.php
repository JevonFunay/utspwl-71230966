<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center mt-4">
        <div class="row no-gutters">
            <div class="col border border-dark p-3">
                LEFT HEADER
            </div>
            <div class="col border border-dark p-3">
                RIGHT HEADER
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col border border-dark p-3">
                <h5>LEFT NAVIGATION</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/courses') }}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/students') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/grades') }}">Grades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/assignments') }}">Assignments</a>
                    </li>
                </ul>
            </div>

            <div class="col border border-dark p-3">
                @yield('content')
            </div>

            <div class="col border border-dark p-3">
                <h5>RIGHT NAVIGATION</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/mahasiswa') }}">Form Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col border border-dark p-3">
                FOOTER
            </div>
        </div>
    </div>
</body>
</html>
