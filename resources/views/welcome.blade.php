<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}"/>
</head>
<body>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="font-size: 40px; font-weight: 800; color: black">{{ $error}} </div>
    @endforeach
@endif
<header class="header">
    <nav class="nav">
        <div class="logo">
            <img src="{{ asset('img/logo.svg')}}" alt="AEROX VISION"/>
        </div>
        <ul class="navbar">
            <li class="link link-black"><a href="#Aboutbot">About bot</a></li>
            <li class="link link-black"><a href="#Aboutus">About us</a></li>
            <li class="link link-black"><a href="#Team">Team</a></li>
            <li class="link link-black">
                <a href="#Plans&Access">Plans & Access</a>
            </li>
        </ul>
        <a class="btn-login" {{(Auth::check()) ? 'href=/profile' : 'data=btn-login' }}>
            <span class="btn-login__btn"> Log in </span>
        </a>
    </nav>

    <div class="title">
        <h1>
            Aerox.bot – your <span class="accent">ultimate</span> <br/>
            trading assistant.
        </h1>
    </div>
    <div class="text">
        <div class="left">
            <h2>It reads signals for you.</h2>
        </div>
        <div>
            <h2>Shows only what matters.</h2>
            <div>
                <p>
                    Our bot combines advanced parsing with market analysis – all in
                    one. We gather signals from private Telegram channels, cross-check
                    them against news sentiment and global volatility.
                </p>
                <p>The result? Clear, actionable signals.</p>
                <p>
                    In a world where trading often feels like guesswork, we don't
                    offer a magic button – we offer a systematic approach. Our product
                    isn’t just a Telegram bot shouting “buy/sell” signals. It’s a
                    full-fledged ecosystem designed to help you understand, analyze,
                    and make informed decisions.
                </p>
            </div>
        </div>
    </div>
</header>
<section class="bot">
    <div class="container">
        <h3 class="bot__title">This is not just a signal bot.</h3>
        <h3 class="bot__title bold accent">It’s a system.</h3>
        <div class="bot__blocks need">
            <div class="bot__block need mobile-none"></div>
            <div class="bot__block need">
                <h4>
                    We've brought everything you need for effective and mindful
                    trading into one place:
                </h4>
                <ul>
                    <li>
                        <div>
                            <div class="check" src="./img/check.svg"></div>
                        </div>
                        <p>Signals from private Telegram channels</p>
                    </li>
                    <li>
                        <div>
                            <div class="check" src="./img/check.svg"></div>
                        </div>
                        <p>Market and news analysis for the selected time period</p>
                    </li>
                    <li>
                        <div>
                            <div class="check"></div>
                        </div>
                        <p>Access to a proven trading knowledge base</p>
                    </li>
                    <li>
                        <div>
                            <div class="check"></div>
                        </div>
                        <p>Private community on Discord</p>
                    </li>
                    <li>
                        <div>
                            <div class="check"></div>
                        </div>
                        <p>
                            Approach based on risk management and real-world experience
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bot__blocks bots">
            <div class="bot__block item gray">
                <h4>Regular bot</h4>
                <ul>
                    <li>
                        <div>
                            <div class="minus" alt=""></div>
                        </div>
                        <p>Dry "BUY" / "SELL" signal</p>
                    </li>
                    <li>
                        <div>
                            <div class="minus" alt=""></div>
                        </div>
                        <p>There is no understanding of logic</p>
                    </li>
                    <li>
                        <div>
                            <div class="minus" alt=""></div>
                        </div>
                        <p>There is no escort</p>
                    </li>
                    <li>
                        <div>
                            <div class="minus" alt=""></div>
                        </div>
                        <p>Risks are not taken into account</p>
                    </li>
                    <li>
                        <div>
                            <div class="minus" alt=""></div>
                        </div>
                        <p>Random signals</p>
                    </li>
                </ul>
            </div>
            <div class="bot__block item black">
                <h4>Our system</h4>
                <ul>
                    <li>
                        <div>
                            <div class="plus" alt=""></div>
                        </div>
                        <p>A reasoned recommendation with an analysis</p>
                    </li>
                    <li>
                        <div>
                            <div class="plus" alt=""></div>
                        </div>
                        <p>There is access to strategy, explanations, and training</p>
                    </li>
                    <li>
                        <div>
                            <div class="plus" alt=""></div>
                        </div>
                        <p>There is a community + library + methodology</p>
                    </li>
                    <li>
                        <div>
                            <div class="plus" alt=""></div>
                        </div>
                        <p>We rely on risk management and a sound approach.</p>
                    </li>
                    <li>
                        <div>
                            <div class="plus" alt=""></div>
                        </div>
                        <p>Noise filter, focus on quality and consistency</p>
                    </li>
                </ul>
                <a href="#" class="learn-btn"> Learn more </a>
            </div>
        </div>
    </div>
    <div class="shell">
        <img src="./img/cube.png" alt=""/>
    </div>
    <div class="shell-mobile">
        <img src="./img/350/cube.png" alt=""/>
    </div>
</section>
<section class="profi" id="Aboutbot">
    <div class="container">
        <h4>
            Insights from Professionals —
            <span class="accent">Delivered Daily</span>
        </h4>
        <p>
            Our crypto bot is more than just a collection of signals. It’s a
            carefully structured system that scans over 10+ private Telegram
            channels every day — where trading teams and seasoned analysts share
            their ideas. We curate only the most valuable signals and patterns,
            presenting them in a clear and user-friendly format.
        </p>
        <div class="bottom">
            <div class="graph">
                <img src="{{ asset('img/profi-grap.png')}}" alt=""/>
            </div>
            <div class="profi__list">
                <h5>
                    Users also get access to our comprehensive Notion library, which
                    includes:
                </h5>
                <ul>
                    <li>
                        <div>
                            <div class="check"></div>
                        </div>
                        Trading guides and literature
                    </li>
                    <li>
                        <div>
                            <div class="check"></div>
                        </div>
                        Risk management FAQs
                    </li>
                    <li>
                        <div>
                            <div class="check"></div>
                        </div>
                        Strategies, technical analysis, and behavioral patterns
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="questions" id="Aboutus">
    <div class="container">
        <div class="questions__choose">
            <div class="active">
                <h5>Why Choose Us?</h5>
                <p>
                    We are the first and only service of its kind in the Latin
                    American market. Since 2019, our team has been operating from
                    Cyprus, successfully working with clients across Europe and the
                    CIS.
                </p>
            </div>
            <div></div>
        </div>
        <div class="questions__only">
            <div>
                <p class="accent">
                    We don’t offer “copies” — only unique tools and honest access to
                    insights from private trading communities.
                </p>
            </div>
        </div>
    </div>
    <div class="shell">
        <img src="{{ asset('img/questions-back.png')}}" alt=""/>
    </div>
</section>
<section class="project" id="Team">
    <div class="container">
        <h4 class="project__title">Team Behind the Project</h4>
        <div class="project__persons">
            <div class="project__person">
                <div class="project__img">
                    <img src="{{ asset('img/person.png')}}" alt=""/>
                </div>
                <div class="text">
                    <h5 style="display: block">Lucas Harrington</h5>
                    <p style="display: block">CEO. Trading since 2016, former analyst at Binance</p>
                </div>
            </div>
            <div class="project__person reverse">
                <div class="project__img">
                    <img src="{{ asset('img/person.png')}}" alt=""/>
                </div>
                <div class="text">
                    <h5>Sam Wiolski</h5>
                    <p>
                        Strategy Lead. 7+ years of experience in institutional trading
                    </p>
                </div>
            </div>
            <div class="project__person">
                <div class="project__img">
                    <img src="{{ asset('img/person.png')}}" alt=""/>
                </div>
                <div class="text">
                    <h5>Juan Lazaro</h5>
                    <p>LATAM Strategist. Responsible for regional signal insights</p>
                </div>
            </div>
            <div class="project__person reverse">
                <div class="project__img">
                    <img src="{{ asset('img/person.png')}}" alt=""/>
                </div>
                <div class="text">
                    <h5>Anton Lyapin</h5>
                    <p>
                        Financial Analyst. Over 5 years of trading experience on Wall
                        Street
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="access" id="Plans&Access">
    <div class="container">
        <h4 class="access__title">Plans & Access</h4>
        <div class="plans">
            <div class="plan gray">
                <div class="plan__container">
                    <div class="plan__top">
                        <h5>Basic Access</h5>
                        <span class="price">$24.99 / month</span>
                    </div>
                    <p class="plan__description">
                        Ideal for those who want to receive valuable information and
                        make decisions independently.
                    </p>
                    <p class="plan__includes">Includes:</p>
                    <ul>
                        <li>
                            <div>
                                <div class="plus"></div>
                            </div>
                            <p>Access to the Telegram bot with daily signals</p>
                        </li>
                        <li>
                            <div>
                                <div class="plus"></div>
                            </div>
                            <p>
                                Personal dashboard with API integration to your exchange
                            </p>
                        </li>
                        <li>
                            <div>
                                <div class="plus"></div>
                            </div>
                            <p>
                                Full access to the Notion library (FAQs, literature,
                                patterns, technical analysis)
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="plan black">
                <div class="plan__container">
                    <div class="plan__top">
                        <h5>Premium Access</h5>
                        <span class="price">$79.99 / month</span>
                    </div>
                    <p class="plan__description">
                        For those who want to walk hand-in-hand with our expert team and
                        deepen their trading skills
                    </p>
                    <p class="plan__includes">Everything in Basic, plus:</p>
                    <ul>
                        <li>
                            <div>
                                <div class="plus"></div>
                            </div>
                            <p>
                                Personal mentorship from a trader with 7+ years of
                                experience
                            </p>
                        </li>
                        <li>
                            <div>
                                <div class="plus"></div>
                            </div>
                            <p>Weekly live streams with market analysis and breakdowns</p>
                        </li>
                        <li>
                            <div>
                                <div class="plus"></div>
                            </div>
                            <p>Access to a private Discord community, where:</p>
                        </li>
                        <li>
                            <div>
                                <div class="plus" alt=""></div>
                            </div>
                            <p>Members share insights and trading ideas</p>
                        </li>
                        <li>
                            <div>
                                <div class="plus" alt=""></div>
                            </div>
                            <p>Q&A sessions are held regularly</p>
                        </li>
                        <li>
                            <div>
                                <div class="plus"></div>
                            </div>
                            <p>Trips to crypto summits are organized</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <ul class="footer__nav">
            <li class="footer__navlink link">
                <a href="#Aboutbot">About bot</a>
            </li>
            <li class="footer__navlink link"><a href="#Aboutus">About us</a></li>
            <li class="footer__navlink link"><a href="#Team">Team</a></li>
            <li class="footer__navlink link">
                <a href="#Plans&Access">Plans & Access</a>
            </li>
            <li class="footer__navlink link"><a href="#">Support</a></li>
        </ul>
        <a href="#" class="contact btn" data="btn-contact"> Contact me </a>
    </div>
</footer>
<div class="centered">
    <form class="hidden form-contact form">
        <div class="form__container">
            <h6 class="form__title">Leave your contact</h6>
            <div>
                <input
                    name="email"
                    type="text"
                    class="form__input"
                    placeholder="Name"
                />
            </div>
            <div>
                <input
                    name="email"
                    type="email"
                    class="form__input"
                    placeholder="Your Email"
                />
            </div>

            <div>
                <input
                    name="email"
                    type="text"
                    class="form__input"
                    placeholder="Your phone"
                />
            </div>
            <button type="submit" class="form__btn">Submit</button>
        </div>
        <div class="cross">
            <img src="{{ asset('img/cross.svg')}}" alt=""/>
        </div>
    </form>
    <form class="hidden form-create form " method="post" action="{{route('register')}}">
        @csrf
        <div class="form__container">
            <h6 class="form__title">Create account</h6>
            <div>
                <input
                    name="email"
                    type="email"
                    class="form__input"
                    placeholder="Your Email"
                />
            </div>
            <div>
                <input
                    name="password"
                    type="password"
                    class="form__input"
                    placeholder="Your Password"
                />
            </div>

            <button type="submit" class="form__btn">Create</button>
            <a href="{{ route('login.google') }}" class="form__btn login">Log in with Google</a>
            <p>
                I already have an account. <a data="btn-login" href="#">Log in.</a>
            </p>
        </div>
        <div class="cross">
            <img src="{{ asset('img/cross.svg')}}" alt=""/>
        </div>
    </form>
    <form class="hidden form-login form" method="post" action="{{route('login')}}">
        @csrf
        <div class="form__container">
            <h6 class="form__title">Log in</h6>
            <div>
                <input
                    name="email"
                    type="email"
                    class="form__input"
                    placeholder="Your Email"
                />
            </div>
            <div>
                <input
                    name="password"
                    type="password"
                    class="form__input"
                    placeholder="Your Password"
                />
            </div>
            <button type="submit" class="form__btn">Log in</button>
            <p>
                Don't have an account? <a data="btn-create" href="#">Register</a>
            </p>
        </div>
        <div class="cross">
            <img src="{{ asset('img/cross.svg')}}" alt=""/>
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
