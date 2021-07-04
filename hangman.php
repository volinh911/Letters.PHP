<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--Progress bar-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!--using FontAwesome--------------->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- ===== CSS ===== -->
    <title>HangMan Game</title>

    <!-- <link rel="stylesheet" href="./hangman.css"> -->
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico">
    <link rel="manifest" href="hangmanthegame/manifest.json" />
    <link rel="stylesheet" href="hangmanthegame/hangman.css">
    <link rel="stylesheet" href="css/sub_header_footer_styles.css">
    <link href="hangmanthegame/static/css/main.e4514703.chunk.css" rel="stylesheet">
</head>

<body>

    <!--===== HEADER =====-->
    <?php include 'includes/sub_header.php' ?>

    <section class="empty">

    </section>

    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <script>
            ! function(e) {
                function r(r) {
                    for (var n, u, i = r[0], c = r[1], l = r[2], s = 0, p = []; s < i.length; s++) u = i[s], Object.prototype.hasOwnProperty.call(o, u) && o[u] && p.push(o[u][0]), o[u] = 0;
                    for (n in c) Object.prototype.hasOwnProperty.call(c, n) && (e[n] = c[n]);
                    for (f && f(r); p.length;) p.shift()();
                    return a.push.apply(a, l || []), t()
                }

                function t() {
                    for (var e, r = 0; r < a.length; r++) {
                        for (var t = a[r], n = !0, i = 1; i < t.length; i++) {
                            var c = t[i];
                            0 !== o[c] && (n = !1)
                        }
                        n && (a.splice(r--, 1), e = u(u.s = t[0]))
                    }
                    return e
                }
                var n = {},
                    o = {
                        1: 0
                    },
                    a = [];

                function u(r) {
                    if (n[r]) return n[r].exports;
                    var t = n[r] = {
                        i: r,
                        l: !1,
                        exports: {}
                    };
                    return e[r].call(t.exports, t, t.exports, u), t.l = !0, t.exports
                }
                u.e = function(e) {
                    var r = [],
                        t = o[e];
                    if (0 !== t)
                        if (t) r.push(t[2]);
                        else {
                            var n = new Promise((function(r, n) {
                                t = o[e] = [r, n]
                            }));
                            r.push(t[2] = n);
                            var a, i = document.createElement("script");
                            i.charset = "utf-8", i.timeout = 120, u.nc && i.setAttribute("nonce", u.nc), i.src = function(e) {
                                return u.p + "static/js/" + ({} [e] || e) + "." + {
                                    3: "3a7df85f"
                                } [e] + ".chunk.js"
                            }(e);
                            var c = new Error;
                            a = function(r) {
                                i.onerror = i.onload = null, clearTimeout(l);
                                var t = o[e];
                                if (0 !== t) {
                                    if (t) {
                                        var n = r && ("load" === r.type ? "missing" : r.type),
                                            a = r && r.target && r.target.src;
                                        c.message = "Loading chunk " + e + " failed.\n(" + n + ": " + a + ")", c.name = "ChunkLoadError", c.type = n, c.request = a, t[1](c)
                                    }
                                    o[e] = void 0
                                }
                            };
                            var l = setTimeout((function() {
                                a({
                                    type: "timeout",
                                    target: i
                                })
                            }), 12e4);
                            i.onerror = i.onload = a, document.head.appendChild(i)
                        } return Promise.all(r)
                }, u.m = e, u.c = n, u.d = function(e, r, t) {
                    u.o(e, r) || Object.defineProperty(e, r, {
                        enumerable: !0,
                        get: t
                    })
                }, u.r = function(e) {
                    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                        value: "Module"
                    }), Object.defineProperty(e, "__esModule", {
                        value: !0
                    })
                }, u.t = function(e, r) {
                    if (1 & r && (e = u(e)), 8 & r) return e;
                    if (4 & r && "object" == typeof e && e && e.__esModule) return e;
                    var t = Object.create(null);
                    if (u.r(t), Object.defineProperty(t, "default", {
                            enumerable: !0,
                            value: e
                        }), 2 & r && "string" != typeof e)
                        for (var n in e) u.d(t, n, function(r) {
                            return e[r]
                        }.bind(null, n));
                    return t
                }, u.n = function(e) {
                    var r = e && e.__esModule ? function() {
                        return e.default
                    } : function() {
                        return e
                    };
                    return u.d(r, "a", r), r
                }, u.o = function(e, r) {
                    return Object.prototype.hasOwnProperty.call(e, r)
                }, u.p = "./", u.oe = function(e) {
                    throw console.error(e), e
                };
                var i = this["webpackJsonphangman-game"] = this["webpackJsonphangman-game"] || [],
                    c = i.push.bind(i);
                i.push = r, i = i.slice();
                for (var l = 0; l < i.length; l++) r(i[l]);
                var f = c;
                t()
            }([])
        </script>
        <script src="hangmanthegame/static/js/2.db971a00.chunk.js"></script>
        <script src="hangmanthegame/static/js/main.792cbbec.chunk.js"></script>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small primary-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center mb-3">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1">
                        <i class="fab fa-instagram"> </i>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="#"> Letters</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!-- Scripts -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script type="text/javascript" src="js/sub_header.js"></script>


</body>

</html>