<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/profile.css')}}" />
</head>
<body>
<header>
    <nav>
        <div class="nav__logo">
            <img src="{{ asset('img/logo.svg')}}" alt="" />
        </div>
        <div class="nav__button">
            <button href="#">Log out</button>
        </div>
    </nav>
</header>
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar__container">
            <ul class="sidebar__navbar">
                <li class="sidebar__subscription" menu-item id="subscription">
                    <span class="img" id="subscription"></span>
                    <span class="text" id="subscription">Subscription</span>
                </li>
                <li class="sidebar__setting" menu-item id="settings">
                    <span class="img" id="settings"></span>
                    <span class="text"id="settings">Settings</span>
                </li>
                <li class="sidebar__support" menu-item id="support">
                    <span class="img"  id="support"></span>
                    <span class="text"  id="support">Support</span>
                </li>
                <li class="sidebar_affiliation" menu-item  id="affiliation">
                    <span class="img" id="affiliation"></span>
                    <span class="text" id="affiliation">Affiliation</span>
                </li>
            </ul>
        </div>
    </div>
    <main>
        <section class="plan" id="subscription">
            <div class="main__container">
                <h2>My plan</h2>
                <p>Trial - Premium</p>
                <a href="">Purchase subscription</a>
            </div>
        </section>
        <section class="settings hidden" id="settings">
            <div class="main__container">
                <h2>Settings</h2>
                <p class="desc">Basic information</p>
                <form action="">
                    <div>
                        <p class="placeholder">Full name</p>
                        <input type="text" value="Art Kor" />
                        <a href="" class="change"></a>
                    </div>
                    <div>
                        <p class="placeholder">User name</p>
                        <input type="text" value="name123456789" />
                        <a href="" class="change"></a>
                    </div>
                    <div>
                        <p class="placeholder">Email</p>
                        <input type="text" value="example@gmail.com" disabled  />
                        <a href="" class="change"></a>
                    </div>
                    <div>
                        <p class="placeholder">Password</p>
                        <input type="text" />
                        <a href="" class="change">Change</a>
                    </div>
                </form>
                <p class="desc second">External accounts</p>
                <form action="">
                    <div>
                        <p class="placeholder">Telegram</p>
                        <input type="text" value="Not connected" class="c-red" />
                        <a href="" class="change">Connect</a>
                    </div>
                    <div>
                        <p class="placeholder">Discord</p>
                        <input type="text" value="Not connected" class="c-red" />
                        <a href="" class="change">Connect</a>
                    </div>
                </form>
            </div>
        </section>
        <section class="support hidden" id="support">
            <div class="main__container">
                <h2>Support</h2>
                <div class="support__container">
                    <div class="support__item first">
                        <p class="desc">Contact us</p>
                        <a href="" class="support__button">Support in Telegram</a>
                    </div>
                    <div class="support__item second">
                        <p>Or leave your contact</p>
                        <form action="">
                            <div>
                                <p class="placeholder">You name</p>
                                <input type="text" value="Art Kor" />
                                <a href="" class="change"></a>
                            </div>
                            <div>
                                <p class="placeholder">Your Email</p>
                                <input type="text" value="example@gmail.com" disabled  />
                                <a href="" class="change"></a>
                            </div>
                            <div>
                                <p class="placeholder">Your phone</p>
                                <input type="text" />
                                <a href="" class="change"></a>
                            </div>
                            <button class="support__button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="affiliation hidden" id="affiliation">
            <div class="main__container">
                <h2>Affiliation</h2>
                <p>This page is under development</p>
            </div>
        </section>

        <div class="cube"></div>
    </main>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('js/profile.js')}}"></script>
</body>
</html>
