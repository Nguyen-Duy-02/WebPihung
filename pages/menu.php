<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP CÂY CẢNH PI HƯNG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .primary-background {
            background-color: #4CAF50; /* Nền của thanh điều hướng */
        }
        .logo {
            height: 70px; /* Chiều cao của logo */
        }
        .logos {
            height: 20px;
        }
        .kc {
            height: 20px; /* Chiều cao của hình ảnh chèn */
        }
        .main-titles {
            color: #ffffff; /* Màu chữ trắng */
            font-family: 'Georgia', serif;
            text-align: center;
            margin: 0 auto;
            position: relative;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.6);
            animation: glow 1s infinite alternate;
        }
        @keyframes glow {
            from {
                text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.6);
            }
            to {
                text-shadow: 3px 3px 15px rgba(255, 255, 255, 1);
            }
        }
        .nav-link {
            font-size: 0.9rem;
            transition: color 0.1s, background-color 0.1s;
        }
        .nav-link:hover {
            color: #FFD700; /* Màu vàng khi hover */
            background-color: rgba(0, 0, 0, 0.2); /* Nền hơi tối khi hover */
        }
        .dropdown-menu {
            background-color: #f8f9fa;
        }
        .dropdown-item:hover {
            background-color: #e9ecef; /* Nền xám nhạt khi hover */
        }
        .btn-search {
            background-color: #ffffff;
            border: none;
        }
        .btn-search img {
            height: 35px;
            width: 35px;
        }
        /* Dùng flexbox và justify-content: space-between để các mục menu cách đều nhau */
        .navbar-nav {
            display: flex;
            justify-content: space-between;
            width: 100%; /* Đảm bảo menu chiếm hết chiều ngang của thanh điều hướng */
            padding-left: 0; /* Xóa padding nếu có */
        }
    </style>
</head>
<body>
    <div class="menu sticky-top">
        <nav class="navbar navbar-expand-lg primary-background">
            <div class="container-fluid font-weight-bold">
                <a class="navbar-brand" href="./index.php">
                    <img class="logo" src="./assets/image/logo/l5.png" alt="Shop Logo"/>
                </a>
                <h1 class="main-titles">SHOP CÂY CẢNH PI HƯNG</h1>
                <a class="navbar-brand" href="./index.php">
                    <img class="logos" src="./assets/image/logo/kcc.png" alt="Shop Logo"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./about.php">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./index.php?navigate=showProducts">Danh mục cây</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./articles.php">Bài viết</a>
                        </li>
                        <li class="nav-item">
                            <?php if(isset($_SESSION['TenDangNhap'])) { ?>
                            <a class="nav-link text-light" href="./index.php?navigate=cart">Giỏ hàng</a>
                            <?php } else { ?>
                                <a class="nav-link text-light" href="./index.php?navigate=login">Giỏ hàng</a>
                            <?php } ?>
                        </li>
                        <?php if(isset($_SESSION['TenDangNhap'])) { ?>
                        <li class="nav-item">
                            <div class="dropdown show">
                                <a class="nav-link text-light dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                                    Tài khoản
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="./index.php?navigate=profile">Tài khoản của tôi</a>
                                    <a class="dropdown-item" href="./index.php?navigate=orderHistory">Lịch sử đặt hàng</a>
                                    <a class="dropdown-item" href="#" id="logoutBtn">Đăng xuất</a>
                                </div>
                            </div>
                        </li>
                        <?php } else {?>
                        <li class="nav-item">
                        <div class="dropdown show">
                                <a class="nav-link text-light dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                                    Tài khoản
                                </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="./index.php?navigate=login">Đăng nhập</a>
                                    <a class="dropdown-item" href="./index.php?navigate=signup">Đăng ký</a>
                                    
                                </div>
                            </div>
                        </li>
                        <?php }?>
                        <li class="nav-item">
                            <form action="index.php?navigate=timkiem" class="d-flex align-items-center" role="search" method="POST">
                                <button type="submit" class="btn btn-search">
                                    <img src="./assets/image/logo/timkiem.jpg" alt="Tìm kiếm">
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <script>
        document.getElementById('logoutBtn').addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn không cho liên kết thực hiện hành động mặc định
            Swal.fire({
                title: 'Bạn có chắc chắn?',
                text: "Bạn muốn đăng xuất khỏi tài khoản?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đăng xuất',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = './pages/main/account/logout.php'; // Chuyển hướng đến trang đăng xuất
                }
            });
        });
    </script>
</body>
</html>
