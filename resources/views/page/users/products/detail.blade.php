<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail</title>

    <!-- bootstrap  -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="/../assetsindex/css/styles.css" />
    <link rel="stylesheet" href="/../assetsindex/sass/_variables.scss" />
</head>

<body class="background">
    <div>
        <header class="header-bar">
            <img src="/../assetsindex/images/background1.jpg" class="background" alt="background" />
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-warning py-3">
            <div class="container-fluid">
                <div class="me-2">
                    <img src="/../assetsindex/images/person-circle.svg" class="rounded-circle" style="width: 40px"
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

                    </ul>

                </div>
            </div>
        </nav>

        <main class="my-5 container-lg">


            <div class="card mb-3 p-4">
                <div class="row g-0">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <figure class="figure">
                            <img src="{{ asset($Product->image1) }}" class="figure-img img-fluid rounded"
                                alt="..." />
                            <figcaption class="figure-caption">{{ $Product->name }}</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body py-0 px-4">
                            <h5 class="card-title">รายละเอียด</h5>
                            <p class="mb-2"><b>ประเภท</b> : เหรียญ</p>
                            <p class="mb-2"><b>ราคา</b> : {{ $Product->price }}</p>
                            <p class="mb-3"><b>คงเหลือ</b> : {{ $Product->total }}</p>
                            <p class="card-text text-indent">
                                {{ $Product->description }}
                            </p>
                            <!-- <p class="card-text"><small class="text-muted">ราคา: 999</small></p> -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="card mb-3 p-4">
                <div class="row g-0">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset($Product->image5) }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($Product->image2) }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($Product->image3) }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($Product->image4) }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($Product->image5) }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>

        </main>

        <footer></footer>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
