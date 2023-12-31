<?php

require "../koneksi.php";

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/landing.css">

    <title>Landing Page</title>
</head>

<body>

    <div class="screen-cover d-none"></div>

    <div class="nav col-right-sidebar">
        <aside class="cart-sidebar">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex flex-column justify-content-start align-items-start">
                    <h2 class="nav-title">My Carts</h2>
                    <h5 class="nav-desc">Pay now and just sit tight</h5>
                </div>

                <button class="nav-btn" onclick="toggleRightSidebar()">
                        <img src="../assets/img/global/cart/fi_x-1.svg" alt="">
                    </button>
            </div>

            <div class="w-100 food-card1 d-flex justify-content-between align-items-center">
                <div class="w-100 d-flex justify-content-start align-items-center">
                    <div class="food-img">
                        <img src="../assets/img/global/food/photo-3.png" alt="">
                    </div>

                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class="food-name">Burger King</h3>
                        <h5 class="food-price">$19,500</h5>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-center">
                    <button class="btn-number decrease" onclick="decreaseNumber(this)">
                            <img src="../assets/img/global/cart/minus.svg" alt="">
                        </button>
                    <input class="input-number" type="text" value="" disabled>
                    <button class="btn-number" onclick="increaseNumber(this)">
                            <img src="../assets/img/global/cart/fi_x.svg" alt="">
                        </button>
                </div>
            </div>

            <!-- <div class="w-100 food-card1 d-flex justify-content-between align-items-center">
                <div class="w-100 d-flex justify-content-start align-items-center">
                    <div class="food-img">
                        <img src="./assets/img/global/food/photo-4.png" alt="">
                    </div>

                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class="food-name">Latte Sumatra</h3>
                        <h5 class="food-price">$800</h5>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-center">
                    <button class="btn-number decrease" onclick="decreaseNumber(this)">
                            <img src="./assets/img/global/cart/minus.svg" alt="">
                        </button>
                    <input class="input-number" type="text" value="3" disabled>
                    <button class="btn-number" onclick="increaseNumber(this)">
                            <img src="./assets/img/global/cart/fi_x.svg" alt="">
                        </button>
                </div>
            </div>

            <div class="w-100 food-card1 d-flex justify-content-between align-items-center">
                <div class="w-100 d-flex justify-content-start align-items-center">
                    <div class="food-img">
                        <img src="./assets/img/global/food/photo-2.png" alt="">
                    </div>

                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class="food-name">Cake</h3>
                        <h5 class="food-price">$52,000</h5>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-center">
                    <button class="btn-number decrease" onclick="decreaseNumber(this)">
                            <img src="./assets/img/global/cart/minus.svg" alt="">
                        </button>
                    <input class="input-number" type="text" value="55" disabled>
                    <button class="btn-number" onclick="increaseNumber(this)">
                            <img src="./assets/img/global/cart/fi_x.svg" alt="">
                        </button>
                </div>
            </div>

            <div class="w-100 food-card1 d-flex justify-content-between align-items-center">
                <div class="w-100 d-flex justify-content-start align-items-center">
                    <div class="food-img">
                        <img src="./assets/img/global/food/photo-5.png" alt="">
                    </div>

                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class="food-name">Lite Fruits</h3>
                        <h5 class="food-price">$22,000</h5>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-center">
                    <button class="btn-number decrease" onclick="decreaseNumber(this)">
                            <img src="./assets/img/global/cart/minus.svg" alt="">
                        </button>
                    <input class="input-number" type="text" value="85" disabled>
                    <button class="btn-number" onclick="increaseNumber(this)">
                            <img src="./assets/img/global/cart/fi_x.svg" alt="">
                        </button>
                </div>
            </div>

            <div class="w-100 food-card1 d-flex justify-content-between align-items-center">
                <div class="w-100 d-flex justify-content-start align-items-center">
                    <div class="food-img">
                        <img src="./assets/img/global/food/photo-3.png" alt="">
                    </div>

                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <h3 class="food-name">Burger King</h3>
                        <h5 class="food-price">$99</h5>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-center">
                    <button class="btn-number decrease" onclick="decreaseNumber(this)">
                            <img src="./assets/img/global/cart/minus.svg" alt="">
                        </button>
                    <input class="input-number" type="text" value="21" disabled>
                    <button class="btn-number" onclick="increaseNumber(this)">
                            <img src="./assets/img/global/cart/fi_x.svg" alt="">
                        </button>
                </div>
            </div> -->

            <!-- <div class="mt-5 w-100 d-flex justify-content-between align-items-center cart-details">
                <h4 class="cart-label">Sub Total</h4>
                <h4 class="cart-value">$290,000</h4>
            </div>

            <div class="w-100 d-flex justify-content-between align-items-center cart-details">
                <h4 class="cart-label">Discount</h4>
                <h4 class="cart-value">BlackFriday</h4>
            </div>

            <div class="w-100 d-flex justify-content-between align-items-center cart-details">
                <h4 class="cart-label">VAT 25%</h4>
                <h4 class="cart-value">$3,000</h4>
            </div> -->

            <div class="w-100 d-flex justify-content-between align-items-center cart-details">
                <h4 class="cart-label">Total</h4>
                <h4 class="cart-value fw-bold">$455,000</h4>
            </div>

            <button class="w-100 food-btn">Bayar</button>

            <!-- <div class="d-flex justify-content-center align-items-center">
                <a href="#" class="food-link">Read Terms & Conditions</a>
            </div> -->

        </aside>
    </div>

    <div class="row position-relative">


        <div class="col-12 col-lg-2 col-xl-1 col-navbar d-block">

            <aside class="sidebar">
                <div class="d-flex flex-column justify-content-center align-items-center sidebar-top">

                    <a href="#">
                        <img src="../assets/img/global/logo.svg" alt="">
                    </a>

                </div>


                <div class="sidebar-item-container d-flex flex-column justify-content-center align-items-center">

                    <a href="#" class="sidebar-item active" onclick="toggleActive(this)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 14H14V21H21V14Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 14H3V21H10V14Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M21 3H14V10H21V3Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 3H3V10H10V3Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="#" class="sidebar-item" onclick="toggleActive(this)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 6H21" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="#" class="sidebar-item" onclick="toggleActive(this)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 12V22H4V12" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M22 7H2V12H22V7Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 22V7" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M12 7H16.5C17.163 7 17.7989 6.73661 18.2678 6.26777C18.7366 5.79893 19 5.16304 19 4.5C19 3.83696 18.7366 3.20107 18.2678 2.73223C17.7989 2.26339 17.163 2 16.5 2C13 2 12 7 12 7Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12 7H7.5C6.83696 7 6.20107 6.73661 5.73223 6.26777C5.26339 5.79893 5 5.16304 5 4.5C5 3.83696 5.26339 3.20107 5.73223 2.73223C6.20107 2.26339 6.83696 2 7.5 2C11 2 12 7 12 7Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="#" class="sidebar-item" onclick="toggleActive(this)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 4H3C1.89543 4 1 4.89543 1 6V18C1 19.1046 1.89543 20 3 20H21C22.1046 20 23 19.1046 23 18V6C23 4.89543 22.1046 4 21 4Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 10H23" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="#" class="sidebar-item" onclick="toggleActive(this)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M19.4 15C19.2669 15.3016 19.2272 15.6362 19.286 15.9606C19.3448 16.285 19.4995 16.5843 19.73 16.82L19.79 16.88C19.976 17.0657 20.1235 17.2863 20.2241 17.5291C20.3248 17.7719 20.3766 18.0322 20.3766 18.295C20.3766 18.5578 20.3248 18.8181 20.2241 19.0609C20.1235 19.3037 19.976 19.5243 19.79 19.71C19.6043 19.896 19.3837 20.0435 19.1409 20.1441C18.8981 20.2448 18.6378 20.2966 18.375 20.2966C18.1122 20.2966 17.8519 20.2448 17.6091 20.1441C17.3663 20.0435 17.1457 19.896 16.96 19.71L16.9 19.65C16.6643 19.4195 16.365 19.2648 16.0406 19.206C15.7162 19.1472 15.3816 19.1869 15.08 19.32C14.7842 19.4468 14.532 19.6572 14.3543 19.9255C14.1766 20.1938 14.0813 20.5082 14.08 20.83V21C14.08 21.5304 13.8693 22.0391 13.4942 22.4142C13.1191 22.7893 12.6104 23 12.08 23C11.5496 23 11.0409 22.7893 10.6658 22.4142C10.2907 22.0391 10.08 21.5304 10.08 21V20.91C10.0723 20.579 9.96512 20.258 9.77251 19.9887C9.5799 19.7194 9.31074 19.5143 9 19.4C8.69838 19.2669 8.36381 19.2272 8.03941 19.286C7.71502 19.3448 7.41568 19.4995 7.18 19.73L7.12 19.79C6.93425 19.976 6.71368 20.1235 6.47088 20.2241C6.22808 20.3248 5.96783 20.3766 5.705 20.3766C5.44217 20.3766 5.18192 20.3248 4.93912 20.2241C4.69632 20.1235 4.47575 19.976 4.29 19.79C4.10405 19.6043 3.95653 19.3837 3.85588 19.1409C3.75523 18.8981 3.70343 18.6378 3.70343 18.375C3.70343 18.1122 3.75523 17.8519 3.85588 17.6091C3.95653 17.3663 4.10405 17.1457 4.29 16.96L4.35 16.9C4.58054 16.6643 4.73519 16.365 4.794 16.0406C4.85282 15.7162 4.81312 15.3816 4.68 15.08C4.55324 14.7842 4.34276 14.532 4.07447 14.3543C3.80618 14.1766 3.49179 14.0813 3.17 14.08H3C2.46957 14.08 1.96086 13.8693 1.58579 13.4942C1.21071 13.1191 1 12.6104 1 12.08C1 11.5496 1.21071 11.0409 1.58579 10.6658C1.96086 10.2907 2.46957 10.08 3 10.08H3.09C3.42099 10.0723 3.742 9.96512 4.0113 9.77251C4.28059 9.5799 4.48572 9.31074 4.6 9C4.73312 8.69838 4.77282 8.36381 4.714 8.03941C4.65519 7.71502 4.50054 7.41568 4.27 7.18L4.21 7.12C4.02405 6.93425 3.87653 6.71368 3.77588 6.47088C3.67523 6.22808 3.62343 5.96783 3.62343 5.705C3.62343 5.44217 3.67523 5.18192 3.77588 4.93912C3.87653 4.69632 4.02405 4.47575 4.21 4.29C4.39575 4.10405 4.61632 3.95653 4.85912 3.85588C5.10192 3.75523 5.36217 3.70343 5.625 3.70343C5.88783 3.70343 6.14808 3.75523 6.39088 3.85588C6.63368 3.95653 6.85425 4.10405 7.04 4.29L7.1 4.35C7.33568 4.58054 7.63502 4.73519 7.95941 4.794C8.28381 4.85282 8.61838 4.81312 8.92 4.68H9C9.29577 4.55324 9.54802 4.34276 9.72569 4.07447C9.90337 3.80618 9.99872 3.49179 10 3.17V3C10 2.46957 10.2107 1.96086 10.5858 1.58579C10.9609 1.21071 11.4696 1 12 1C12.5304 1 13.0391 1.21071 13.4142 1.58579C13.7893 1.96086 14 2.46957 14 3V3.09C14.0013 3.41179 14.0966 3.72618 14.2743 3.99447C14.452 4.26276 14.7042 4.47324 15 4.6C15.3016 4.73312 15.6362 4.77282 15.9606 4.714C16.285 4.65519 16.5843 4.50054 16.82 4.27L16.88 4.21C17.0657 4.02405 17.2863 3.87653 17.5291 3.77588C17.7719 3.67523 18.0322 3.62343 18.295 3.62343C18.5578 3.62343 18.8181 3.67523 19.0609 3.77588C19.3037 3.87653 19.5243 4.02405 19.71 4.21C19.896 4.39575 20.0435 4.61632 20.1441 4.85912C20.2448 5.10192 20.2966 5.36217 20.2966 5.625C20.2966 5.88783 20.2448 6.14808 20.1441 6.39088C20.0435 6.63368 19.896 6.85425 19.71 7.04L19.65 7.1C19.4195 7.33568 19.2648 7.63502 19.206 7.95941C19.1472 8.28381 19.1869 8.61838 19.32 8.92V9C19.4468 9.29577 19.6572 9.54802 19.9255 9.72569C20.1938 9.90337 20.5082 9.99872 20.83 10H21C21.5304 10 22.0391 10.2107 22.4142 10.5858C22.7893 10.9609 23 11.4696 23 12C23 12.5304 22.7893 13.0391 22.4142 13.4142C22.0391 13.7893 21.5304 14 21 14H20.91C20.5882 14.0013 20.2738 14.0966 20.0055 14.2743C19.7372 14.452 19.5268 14.7042 19.4 15V15Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="#" class="sidebar-item" onclick="toggleActive(this)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 17H12.01" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M9.09003 8.99996C9.32513 8.33163 9.78918 7.76807 10.4 7.40909C11.0108 7.05012 11.7289 6.9189 12.4272 7.03867C13.1255 7.15844 13.7588 7.52148 14.2151 8.06349C14.6714 8.60549 14.9211 9.29148 14.92 9.99996C14.92 12 11.92 13 11.92 13"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="#" class="sidebar-item" onclick="toggleActive(this)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 17L21 12L16 7" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M21 12H9" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                </div>

            </aside>

        </div>

        <div class="col-12 col-lg-10 col-xl-11">
            <div class="nav">
                <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                    <div class="d-flex justify-content-start align-items-start">
                        <button id="toggle-navbar" onclick="toggleNavbar()">
                            <img src="../assets/img/global/logo.svg" alt="">
                        </button>

                        <div class="d-none d-sm-flex flex-column justify-content-start align-items-start">
                            <h2 class="nav-title">Hy,Anna </h2>
                            <h5 class="nav-desc">9/25/2022</h5>
                        </div>
                    </div>


                    <div class="d-flex justify-content-start align-items-center">
                        <button class="nav-btn">
                            <img src="../assets/img/global/navbar/bell.svg" alt="">
                        </button>
                        <button class="nav-btn cart" onclick="toggleRightSidebar()">
                            <img src="../assets/img/global/navbar/shopping-cart.svg" alt="">
                        </button>
                    </div>
                </div>

                <div class="d-flex d-sm-none flex-column justify-content-start align-items-start mt-4">
                    <h2 class="nav-title">Order Foods</h2>
                    <h5 class="nav-desc">Your happiness starts here</h5>
                </div>

            </div>

            <div class="content">
                <ul class="nav nav-tabs d-flex justify-content-start align-items-start" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="Landing.php" style="text-decoration: none;">
                            <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new-tab-pane" type="button" role="tab" aria-controls="new-tab-pane" aria-selected="true">Semua Produk </button>
                        </a>
                    </li>
                    <?php
                            
                        $sql = "SELECT *FROM nama_jenis";
                        $result = mysqli_query($koneksi, $sql);
                        while ($row = $result->fetch_assoc()) : ?> 
                    <li class="nav-item" role="presentation">
                    <li class="nav-item" role="presentation">
                            <a href="kategori.php?category=<?= $row['idJenis']; ?>" style="display: flex; justify-content: space-evenly; width: 150px; color: #fff; font-family: Montserrat; font-weight: medium; text-decoration: none;" class="">
                                <!-- <button class="nav-link" id="my-tab" data-bs-toggle="tab" data-bs-target="#my-tab-pane" type="button" role="tab" aria-controls="my-tab-pane" aria-selected="false"></button> -->
                                <?= $row['nama_jenis']; ?>
                            </a>
                        </li>

                    </li>
                    <?php endwhile; ?>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="new-tab-pane" role="tabpanel" aria-labelledby="new-tab" tabindex="0">

                        <div class="row">
                            <?php
                            
                            $kat = $_GET["category"];
                            $sql = "SELECT barang.*, nama_jenis.nama_jenis FROM barang, nama_jenis WHERE barang.idJenis = nama_jenis.idJenis AND barang.idJenis = '$kat' ORDER BY barang.kode_barang ASC";
                            $result = mysqli_query($koneksi, $sql);
                            while ($row = $result->fetch_assoc()) : ?> 
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="food-card d-flex justify-content-center align-items-center flex-column">
                                    <div class="food-img">
                                        <img src="../product/<?= $row['gambar'] ?>" alt="<?= $row['nama_barang'] ?>" style="border-radius: 90px;">
                                    </div>

                                    <p hidden><?= $row['kode_barang']; ?></p>
                                    <p hidden><?= $row['idJenis']; ?></p>
                                    <p hidden><?= $row['nama_jenis']; ?></p>
                                    <h3 class="food-name"><?= $row['nama_barang']; ?></h3>
                                    <h5 class="food-price"><?= $row['stock']; ?></h5>
                                    <h5 class="food-price"><?= $row['harga_jual']; ?></h5>

                                    <button class="food-btn">Add to Cart</button>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        const right = document.querySelector('.col-right-sidebar')
        const navbar = document.querySelector('.col-navbar')
        const cover = document.querySelector('.screen-cover')

        const sidebar_items = document.querySelectorAll('.sidebar-item')

        function toggleNavbar() {
            navbar.classList.toggle('appear')
            cover.classList.toggle('d-none')
        }

        function toggleRightSidebar() {
            right.classList.toggle('appear')
            cover.classList.toggle('d-none')
        }

        cover.addEventListener('click', e => {
            cover.classList.add('d-none')
            right.classList.remove('appear')
            navbar.classList.remove('appear')
        })

        function toggleActive(e) {
            sidebar_items.forEach(function(v, k) {
                v.classList.remove('active')
            })
            e.closest('.sidebar-item').classList.add('active')
        }

        function increaseNumber(e) {
            let inp = e.closest('div').querySelector('.input-number')
            let current = inp.value

            inp.value = ++current
        }

        function decreaseNumber(e) {
            let inp = e.closest('div').querySelector('.input-number')
            let current = inp.value

            if (current !== "0") {
                inp.value = --current
            }
        }
    </script>
</body>

</html>