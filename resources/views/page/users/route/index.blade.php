<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Main</title>

    <!-- bootstrap  -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assetsindex/css/styles.css" />
    <link rel="stylesheet" href="../assetsindex/sass/_variables.scss" />
</head>

<body class="background">
    <div>
        <header class="header-bar">
            <img src="../assetsindex/images/background1.jpg" class="background" alt="background" />
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-warning py-3">
            <div class="container-fluid">
                <div class="me-2">
                    <img src="../assetsindex/images/person-circle.svg" class="rounded-circle" style="width: 40px"
                        alt="user" />

                </div>
                <a class="navbar-brand" href="#"> สวัสดี :พงศธร</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                        <li class="nav-item">
                            <a class="nav-link active bg-light rounded-2" aria-current="page"
                                href="{{ route('index') }}">หน้าหลัก</a>
                        </li>

                        {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle bg-light rounded-2" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown">
                                    ประเภทสินค้า
                                </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">else</a></li>
                                <li><a class="dropdown-item" href="#">here</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> --}}
                        {{-- {{-- <li class="nav-item">
                            <a class="nav-link bg-light rounded-2" href="{{ route('register') }}">สมัตรสมาชิก</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link bg-light rounded-2" href="#">รายการสั่งซื้อของฉัน</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class=" btn btn-primary   " href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                                    ออกจากระบบ
                                </a>
                            </form>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button type="button" class="btn btn-dark position-relative me-4">
                            <img src="../assetsindex/images/shopping-cart.svg" alt="cart" />
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                5
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-success" type="submit">Search</button> -->
                    </form>
                </div>
            </div>
        </nav>

        <main class="my-5 container-lg">
            <section class="d-flex flex-wrap justify-content-evenly gap-4">

                @foreach ($product as $item)
                    <div class="card shadow" style="width: 18rem">
                        <img src="{{ asset($item->image1) }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text line-clamp-3">
                                {{ $item->description }}
                            </p>
                            <div class="d-flex gap-3">
                                <a href="{{ url('/products/' . $item->id) }}" class="btn btn-success">รายละเอียด</a>
                                <a href="{{ route('login') }}" class="btn btn-dark text-white"><img
                                        src="../assetsindex/images/shopping-cart.svg" alt="cart" /> +</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </main>

        <footer></footer>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
