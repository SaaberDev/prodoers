(function (g) {
    var window = this;
    var GEa = function (a, b) {
            return g.Rb(a, b)
        }
        , $5 = function (a, b, c) {
            a.A.set(b, c)
        }
        , a6 = function (a) {
            $5(a, "zx", Math.floor(2147483648 * Math.random()).toString(36) + Math.abs(Math.floor(2147483648 * Math.random()) ^ g.z()).toString(36));
            return a
        }
        , b6 = function (a, b, c) {
            Array.isArray(c) || (c = [String(c)]);
            g.gn(a.A, b, c)
        }
        , HEa = function (a, b) {
            var c = [];
            g.Zi(b, function (d) {
                try {
                    var e = g.Un.prototype.u.call(this, d, !0)
                }
                catch (f) {
                    if ("Storage: Invalid value was encountered" == f) return;
                    throw f;
                }
                void 0 === e ? c.push(d) : g.Tn(e) && c.push(d)
            }, a);
            return c
        }
        , IEa = function (a, b) {
            var c = HEa(a, b);
            g.B(c, function (d) {
                g.Un.prototype.remove.call(this, d)
            }, a)
        }
        , JEa = function (a) {
            if (a.Dd) {
                if (a.Dd.locationOverrideToken) return {
                    locationOverrideToken: a.Dd.locationOverrideToken
                };
                if (null != a.Dd.latitudeE7 && null != a.Dd.longitudeE7) return {
                    latitudeE7: a.Dd.latitudeE7
                    , longitudeE7: a.Dd.longitudeE7
                }
            }
            return null
        }
        , KEa = function (a, b) {
            g.nb(a, b) || a.push(b)
        }
        , c6 = function (a) {
            var b = 0
                , c;
            for (c in a) b++;
            return b
        }
        , LEa = function (a, b) {
            var c = b instanceof g.Dc ? b : g.Jc(b, /^data:image\//i.test(b));
            a.src = g.Ec(c)
        }
        , d6 = function () {}
        , MEa = function (a) {
            try {
                return g.v.JSON.parse(a)
            }
            catch (b) {}
            a = String(a);
            if (/^\s*$/.test(a) ? 0 : /^[\],:{}\s\u2028\u2029]*$/.test(a.replace(/\\["\\\/bfnrtu]/g, "@").replace(/(?:"[^"\\\n\r\u2028\u2029\x00-\x08\x0a-\x1f]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)[\s\u2028\u2029]*(?=:|,|]|}|$)/g, "]").replace(/(?:^|:|,)(?:[\s\u2028\u2029]*\[)+/g, ""))) try {
                return eval("(" + a + ")")
            }
            catch (b) {}
            throw Error("Invalid JSON string: " + a);
        }
        , NEa = function (a) {
            if (a.Ee && "function" == typeof a.Ee) return a.Ee();
            if ("string" === typeof a) return a.split("");
            if (g.Qa(a)) {
                for (var b = [], c = a.length, d = 0; d < c; d++) b.push(a[d]);
                return b
            }
            return g.Nb(a)
        }
        , OEa = function (a, b) {
            if (a.forEach && "function" == typeof a.forEach) a.forEach(b, void 0);
            else if (g.Qa(a) || "string" === typeof a) g.B(a, b, void 0);
            else {
                if (a.Wf && "function" == typeof a.Wf) var c = a.Wf();
                else if (a.Ee && "function" == typeof a.Ee) c = void 0;
                else if (g.Qa(a) || "string" === typeof a) {
                    c = [];
                    for (var d = a.length, e = 0; e < d; e++) c.push(e)
                }
                else c = g.Ob(a);
                d = NEa(a);
                e = d.length;
                for (var f = 0; f < e; f++) b.call(void 0, d[f], c && c[f], a)
            }
        }
        , PEa = function (a, b, c, d) {
            var e = new g.Vm(null, void 0);
            a && g.Wm(e, a);
            b && g.Xm(e, b);
            c && g.Ym(e, c);
            d && (e.u = d);
            return e
        }
        , e6 = function (a, b) {
            g.Io[a] = !0;
            var c = g.Go();
            c && c.publish.apply(c, arguments);
            g.Io[a] = !1
        }
        , f6 = function (a) {
            this.app = this.name = this.id = "";
            this.type = "REMOTE_CONTROL";
            this.obfuscatedGaiaId = this.avatar = this.username = "";
            this.capabilities = new Set;
            this.experiments = new Set;
            this.theme = "u";
            new g.Sm;
            a && (this.id = a.id || a.name, this.name = a.name, this.app = a.app, this.type = a.type || "REMOTE_CONTROL", this.username = a.user || "", this.avatar = a.userAvatarUri || "", this.obfuscatedGaiaId = a.obfuscatedGaiaId || "", this.theme = a.theme || "u", QEa(this, a.capabilities || ""), REa(this, a.experiments || ""))
        }
        , QEa = function (a, b) {
            a.capabilities.clear();
            g.He(b.split(","), g.Ua(GEa, SEa)).forEach(function (c) {
                a.capabilities.add(c)
            })
        }
        , REa = function (a, b) {
            a.experiments.clear();
            b.split(",").forEach(function (c) {
                a.experiments.add(c)
            })
        }
        , g6 = function (a) {
            a = a || {};
            this.name = a.name || "";
            this.id = a.id || a.screenId || "";
            this.token = a.token || a.loungeToken || "";
            this.uuid = a.uuid || a.dialId || ""
        }
        , h6 = function (a, b) {
            return !!b && (a.id == b || a.uuid == b)
        }
        , TEa = function (a) {
            return {
                name: a.name
                , screenId: a.id
                , loungeToken: a.token
                , dialId: a.uuid
            }
        }
        , UEa = function (a) {
            return new g6(a)
        }
        , VEa = function (a) {
            return Array.isArray(a) ? g.Nc(a, UEa) : []
        }
        , i6 = function (a) {
            return a ? '{name:"' + a.name + '",id:' + a.id.substr(0, 6) + "..,token:" + (a.token ? ".." + a.token.slice(-6) : "-") + ",uuid:" + (a.uuid ? ".." + a.uuid.slice(-6) : "-") + "}" : "null"
        }
        , j6 = function (a) {
            return Array.isArray(a) ? "[" + g.Nc(a, i6).join(",") + "]" : "null"
        }
        , k6 = function () {
            return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function (a) {
                var b = 16 * Math.random() | 0;
                return ("x" == a ? b : b & 3 | 8).toString(16)
            })
        }
        , WEa = function (a) {
            return g.Nc(a, function (b) {
                return {
                    key: b.id
                    , name: b.name
                }
            })
        }
        , l6 = function (a, b) {
            return g.gb(a, function (c) {
                return c || b ? !c != !b ? !1 : c.id == b.id : !0
            })
        }
        , m6 = function (a, b) {
            return g.gb(a, function (c) {
                return h6(c, b)
            })
        }
        , XEa = function () {
            var a = (0, g.dt)();
            a && IEa(a, a.o.Ph(!0))
        }
        , n6 = function () {
            var a = g.gt("yt-remote-connected-devices") || [];
            g.Cb(a);
            return a
        }
        , YEa = function (a) {
            if (g.ob(a)) return [];
            var b = a[0].indexOf("#")
                , c = -1 == b ? a[0] : a[0].substring(0, b);
            return g.Nc(a, function (d, e) {
                return 0 == e ? d : d.substring(c.length)
            })
        }
        , ZEa = function (a) {
            g.ft("yt-remote-connected-devices", a, 86400)
        }
        , p6 = function () {
            if (o6) return o6;
            var a = g.gt("yt-remote-device-id");
            a || (a = k6(), g.ft("yt-remote-device-id", a, 31536E3));
            for (var b = n6(), c = 1, d = a; g.nb(b, d);) c++, d = a + "#" + c;
            return o6 = d
        }
        , q6 = function () {
            var a = n6()
                , b = p6();
            g.nb(a, b);
            g.it() && g.Fb(a, b);
            a = YEa(a);
            if (g.ob(a)) try {
                g.xq("remote_sid")
            }
            catch (c) {}
            else try {
                g.vq("remote_sid", a.join(","), -1)
            }
            catch (c) {}
        }
        , $Ea = function () {
            return g.gt("yt-remote-session-browser-channel")
        }
        , aFa = function () {
            return g.gt("yt-remote-local-screens") || []
        }
        , bFa = function () {
            g.ft("yt-remote-lounge-token-expiration", !0, 86400)
        }
        , cFa = function (a) {
            5 < a.length && (a = a.slice(a.length - 5));
            var b = g.Nc(aFa(), function (d) {
                    return d.loungeToken
                })
                , c = g.Nc(a, function (d) {
                    return d.loungeToken
                });
            g.fh(c, function (d) {
                return !g.nb(b, d)
            }) && bFa();
            g.ft("yt-remote-local-screens", a, 31536E3)
        }
        , dFa = function (a, b) {
            g.ft("yt-remote-session-browser-channel", a);
            g.ft("yt-remote-session-screen-id", b);
            var c = n6()
                , d = p6();
            g.nb(c, d) || c.push(d);
            ZEa(c);
            q6()
        }
        , r6 = function (a) {
            a || (g.ht("yt-remote-session-screen-id"), g.ht("yt-remote-session-video-id"));
            q6();
            a = n6();
            g.rb(a, p6());
            ZEa(a)
        }
        , eFa = function () {
            if (!s6) {
                var a = g.eo();
                a && (s6 = new g.On(a))
            }
            return s6 ? !!s6.get("yt-remote-use-staging-server") : !1
        }
        , fFa = function (a) {
            return !!document.currentScript && (-1 != document.currentScript.src.indexOf("?" + a) || -1 != document.currentScript.src.indexOf("&" + a))
        }
        , gFa = function () {
            return "function" == typeof window.__onGCastApiAvailable ? window.__onGCastApiAvailable : null
        }
        , t6 = function (a) {
            a.length ? hFa(a.shift(), function () {
                t6(a)
            }) : u6()
        }
        , iFa = function (a) {
            return "chrome-extension://" + a + "/cast_sender.js"
        }
        , hFa = function (a, b, c) {
            var d = document.createElement("script");
            d.onerror = b;
            c && (d.onload = c);
            d.src = a;
            (document.head || document.documentElement).appendChild(d)
        }
        , u6 = function () {
            var a = gFa();
            a && a(!1, "No cast extension found")
        }
        , kFa = function () {
            if (jFa) {
                var a = 2
                    , b = gFa()
                    , c = function () {
                        a--;
                        0 == a && b && b(!0)
                    };
                window.__onGCastApiAvailable = c;
                hFa("//www.gstatic.com/cast/sdk/libs/sender/1.0/cast_framework.js", u6, c)
            }
        }
        , lFa = function () {
            kFa();
            var a = window.navigator.userAgent.match(/Chrome\/([0-9]+)/);
            t6(["//www.gstatic.com/eureka/clank/" + (a ? parseInt(a[1], 10) : 0) + "/cast_sender.js", "//www.gstatic.com/eureka/clank/cast_sender.js"])
        }
        , v6 = function (a, b, c) {
            g.C.call(this);
            this.F = null != c ? (0, g.x)(a, c) : a;
            this.oe = b;
            this.C = (0, g.x)(this.HH, this);
            this.o = !1;
            this.u = 0;
            this.A = this.La = null;
            this.B = []
        }
        , w6 = function (a, b, c) {
            g.C.call(this);
            this.B = null != c ? a.bind(c) : a;
            this.oe = b;
            this.A = null;
            this.o = !1;
            this.u = 0;
            this.La = null
        }
        , x6 = function (a) {
            a.La = g.Qm(function () {
                a.La = null;
                a.o && !a.u && (a.o = !1, x6(a))
            }, a.oe);
            var b = a.A;
            a.A = null;
            a.B.apply(null, b)
        }
        , y6 = function (a) {
            if (g.v.JSON) try {
                return g.v.JSON.parse(a)
            }
            catch (b) {}
            return MEa(a)
        }
        , z6 = function () {}
        , A6 = function () {}
        , mFa = function () {}
        , oFa = function (a) {
            return (a = nFa(a)) ? new ActiveXObject(a) : new XMLHttpRequest
        }
        , nFa = function (a) {
            if (!a.u && "undefined" == typeof XMLHttpRequest && "undefined" != typeof ActiveXObject) {
                for (var b = ["MSXML2.XMLHTTP.6.0"
, "MSXML2.XMLHTTP.3.0", "MSXML2.XMLHTTP", "Microsoft.XMLHTTP"], c = 0; c < b.length; c++) {
                    var d = b[c];
                    try {
                        return new ActiveXObject(d), a.u = d
                    }
                    catch (e) {}
                }
                throw Error("Could not create ActiveXObject. ActiveX might be disabled, or MSXML might not be installed");
            }
            return a.u
        }
        , B6 = function (a, b, c, d) {
            this.o = a;
            this.A = b;
            this.J = c;
            this.G = d || 1;
            this.C = 45E3;
            this.B = new g.b1(this);
            this.u = new g.Pm;
            this.u.setInterval(250)
        }
        , qFa = function (a, b, c) {
            a.Wm = 1;
            a.Qi = a6(b.clone());
            a.jl = c;
            a.F = !0;
            pFa(a, null)
        }
        , C6 = function (a, b, c, d, e) {
            a.Wm = 1;
            a.Qi = a6(b.clone());
            a.jl = null;
            a.F = c;
            e && (a.BE = !1);
            pFa(a, d)
        }
        , pFa = function (a, b) {
            a.Pm = g.z();
            D6(a);
            a.Ij = a.Qi.clone();
            b6(a.Ij, "t", a.G);
            a.Cp = 0;
            a.Ed = a.o.xu(a.o.kp() ? b : null);
            0 < a.gv && (a.Gs = new w6((0, g.x)(a.xF, a, a.Ed), a.gv));
            a.B.ia(a.Ed, "readystatechange", a.XO);
            var c = a.yk ? g.Xb(a.yk) : {};
            a.jl ? (a.zt = "POST", c["Content-Type"] = "application/x-www-form-urlencoded", a.Ed.send(a.Ij, a.zt, a.jl, c)) : (a.zt = "GET", a.BE && !g.xe && (c.Connection = "close"), a.Ed.send(a.Ij, a.zt, null, c));
            a.o.Lg(1)
        }
        , tFa = function (a, b, c) {
            for (var d = !0; !a.ck && a.Cp < c.length;) {
                var e = rFa(a, c);
                if (e == E6) {
                    4 == b && (a.ej = 4, F6(15), d = !1);
                    break
                }
                else if (e == sFa) {
                    a.ej = 4;
                    F6(16);
                    d = !1;
                    break
                }
                else G6(a, e)
            }
            4 == b && 0 == c.length && (a.ej = 1, F6(17), d = !1);
            a.Vg = a.Vg && d;
            d || (H6(a), I6(a))
        }
        , rFa = function (a, b) {
            var c = a.Cp
                , d = b.indexOf("\n", c);
            if (-1 == d) return E6;
            c = Number(b.substring(c, d));
            if (isNaN(c)) return sFa;
            d += 1;
            if (d + c > b.length) return E6;
            var e = b.substr(d, c);
            a.Cp = d + c;
            return e
        }
        , wFa = function (a, b) {
            a.Pm = g.z();
            D6(a);
            var c = b ? window.location.hostname : "";
            a.Ij = a.Qi.clone();
            $5(a.Ij, "DOMAIN", c);
            $5(a.Ij, "t", a.G);
            try {
                a.ah = new ActiveXObject("htmlfile")
            }
            catch (n) {
                H6(a);
                a.ej = 7;
                F6(22);
                I6(a);
                return
            }
            var d = "<html><body>";
            if (b) {
                for (var e = "", f = 0; f < c.length; f++) {
                    var h = c.charAt(f);
                    if ("<" == h) e += "\\x3c";
                    else if (">" == h) e += "\\x3e";
                    else {
                        var l = h;
                        if (l in J6) h = J6[l];
                        else if (l in vFa) h = J6[l] = vFa[l];
                        else {
                            var m = l.charCodeAt(0);
                            if (31 < m && 127 > m) h = l;
                            else {
                                if (256 > m) {
                                    if (h = "\\x", 16 > m || 256 < m) h += "0"
                                }
                                else h = "\\u", 4096 > m && (h += "0");
                                h += m.toString(16).toUpperCase()
                            }
                            h = J6[l] = h
                        }
                        e += h
                    }
                }
                d += '<script>document.domain="' + e + '"\x3c/script>'
            }
            c = g.dd(g.ic("b/12014412"), d + "</body></html>");
            a.ah.open();
            a.ah.write(g.$c(c));
            a.ah.close();
            a.ah.parentWindow.m = (0, g.x)(a.lO, a);
            a.ah.parentWindow.d = (0, g.x)(a.FD, a, !0);
            a.ah.parentWindow.rpcClose = (0, g.x)(a.FD, a, !1);
            c = a.ah.createElement("DIV");
            a.ah.parentWindow.document.body.appendChild(c);
            d = g.Ic(a.Ij.toString());
            d = g.kd(g.Ec(d));
            d = g.dd(g.ic("b/12014412"), '<iframe src="' + d + '"></iframe>');
            g.ed(c, d);
            a.o.Lg(1)
        }
        , D6 = function (a) {
            a.ky = g.z() + a.C;
            xFa(a, a.C)
        }
        , xFa = function (a, b) {
            if (null != a.bn) throw Error("WatchDog timer not null");
            a.bn = K6((0, g.x)(a.wO, a), b)
        }
        , L6 = function (a) {
            a.bn && (g.v.clearTimeout(a.bn), a.bn = null)
        }
        , I6 = function (a) {
            a.o.IA() || a.ck || a.o.Wq(a)
        }
        , H6 = function (a) {
            L6(a);
            g.Zf(a.Gs);
            a.Gs = null;
            a.u.stop();
            g.Iya(a.B);
            if (a.Ed) {
                var b = a.Ed;
                a.Ed = null;
                b.abort();
                b.dispose()
            }
            a.ah && (a.ah = null)
        }
        , G6 = function (a, b) {
            try {
                a.o.wD(a, b), a.o.Lg(4)
            }
            catch (c) {}
        }
        , zFa = function (a, b, c, d, e) {
            if (0 == d) c(!1);
            else {
                var f = e || 0;
                d--;
                yFa(a, b, function (h) {
                    h ? c(!0) : g.v.setTimeout(function () {
                        zFa(a, b, c, d, f)
                    }, f)
                })
            }
        }
        , yFa = function (a, b, c) {
            var d = new Image;
            d.onload = function () {
                try {
                    M6(d), c(!0)
                }
                catch (e) {}
            };
            d.onerror = function () {
                try {
                    M6(d), c(!1)
                }
                catch (e) {}
            };
            d.onabort = function () {
                try {
                    M6(d), c(!1)
                }
                catch (e) {}
            };
            d.ontimeout = function () {
                try {
                    M6(d), c(!1)
                }
                catch (e) {}
            };
            g.v.setTimeout(function () {
                if (d.ontimeout) d.ontimeout()
            }, b);
            LEa(d, a)
        }
        , M6 = function (a) {
            a.onload = null;
            a.onerror = null;
            a.onabort = null;
            a.ontimeout = null
        }
        , AFa = function (a) {
            this.o = a;
            this.u = new z6
        }
        , BFa = function (a) {
            var b = N6(a.o, a.pn, "/mail/images/cleardot.gif");
            a6(b);
            zFa(b.toString(), 5E3, (0, g.x)(a.GG, a), 3, 2E3);
            a.Lg(1)
        }
        , P6 = function (a) {
            var b = a.o.L;
            if (null != b) F6(5), b ? (F6(11), O6(a.o, a, !1)) : (F6(12), O6(a.o, a, !0));
            else if (a.lf = new B6(a, void 0, void 0, void 0), a.lf.yk = a.ev, b = a.o, b = N6(b, b.kp() ? a.Wn : null, a.fv), F6(5), !g.ve || g.Yd(10)) b6(b, "TYPE", "xmlhttp"), C6(a.lf, b, !1, a.Wn, !1);
            else {
                b6(b, "TYPE", "html");
                var c = a.lf;
                a = !!a.Wn;
                c.Wm = 3;
                c.Qi = a6(b.clone());
                wFa(c, a)
            }
        }
        , Q6 = function (a) {
            g.fm.call(this);
            this.headers = new g.Sm;
            this.W = a || null;
            this.A = !1;
            this.T = this.o = null;
            this.na = this.L = "";
            this.F = 0;
            this.B = "";
            this.C = this.ba = this.J = this.X = !1;
            this.G = 0;
            this.O = null;
            this.ma = "";
            this.S = this.Z = !1
        }
        , CFa = function (a) {
            return g.ve && g.Xd(9) && "number" === typeof a.timeout && void 0 !== a.ontimeout
        }
        , DFa = function (a) {
            return "content-type" == a.toLowerCase()
        }
        , FFa = function (a, b) {
            a.A = !1;
            a.o && (a.C = !0, a.o.abort(), a.C = !1);
            a.B = b;
            a.F = 5;
            EFa(a);
            R6(a)
        }
        , EFa = function (a) {
            a.X || (a.X = !0, a.dispatchEvent("complete"), a.dispatchEvent("error"))
        }
        , HFa = function (a) {
            if (a.A && "undefined" != typeof g.g1)
                if (a.T[1] && 4 == S6(a) && 2 == a.getStatus()) T6(a, "Local request error detected and ignored");
                else if (a.J && 4 == S6(a)) g.Qm(a.sD, 0, a);
            else if (a.dispatchEvent("readystatechange"), 4 == S6(a)) {
                T6(a, "Request complete");
                a.A = !1;
                try {
                    var b = a.getStatus();
                    a: switch (b) {
                    case 200:
                    case 201:
                    case 202:
                    case 204:
                    case 206:
                    case 304:
                    case 1223:
                        var c = !0;
                        break a;
                    default:
                        c = !1
                    }
                    var d;
                    if (!(d = c)) {
                        var e;
                        if (e = 0 === b) {
                            var f = g.ud(1, String(a.L));
                            if (!f && g.v.self && g.v.self.location) {
                                var h = g.v.self.location.protocol;
                                f = h.substr(0, h.length - 1)
                            }
                            e = !GFa.test(f ? f.toLowerCase() : "")
                        }
                        d = e
                    }
                    if (d) a.dispatchEvent("complete"), a.dispatchEvent("success");
                    else {
                        a.F = 6;
                        try {
                            var l = 2 < S6(a) ? a.o.statusText : ""
                        }
                        catch (m) {
                            l = ""
                        }
                        a.B = l + " [" + a.getStatus() + "]";
                        EFa(a)
                    }
                }
                finally {
                    R6(a)
                }
            }
        }
        , R6 = function (a, b) {
            if (a.o) {
                IFa(a);
                var c = a.o
                    , d = a.T[0] ? g.Ma : null;
                a.o = null;
                a.T = null;
                b || a.dispatchEvent("ready");
                try {
                    c.onreadystatechange = d
                }
                catch (e) {}
            }
        }
        , IFa = function (a) {
            a.o && a.S && (a.o.ontimeout = null);
            a.O && (g.v.clearTimeout(a.O), a.O = null)
        }
        , S6 = function (a) {
            return a.o ? a.o.readyState : 0
        }
        , U6 = function (a) {
            try {
                return a.o ? a.o.responseText : ""
            }
            catch (b) {
                return ""
            }
        }
        , T6 = function (a, b) {
            return b + " [" + a.na + " " + a.L + " " + a.getStatus() + "]"
        }
        , V6 = function (a, b, c) {
            this.o = 1;
            this.u = [];
            this.B = [];
            this.C = new z6;
            this.J = a || null;
            this.L = null != b ? b : null;
            this.F = c || !1
        }
        , JFa = function (a, b) {
            this.o = a;
            this.map = b;
            this.context = null
        }
        , KFa = function (a) {
            g.Jl.call(this, "statevent", a)
        }
        , LFa = function (a, b, c, d) {
            g.Jl.call(this, "timingevent", a);
            this.size = b;
            this.bp = d
        }
        , MFa = function (a) {
            g.Jl.call(this, "serverreachability", a)
        }
        , PFa = function (a) {
            NFa(a);
            if (3 == a.o) {
                var b = a.Fo++
                    , c = a.Gq.clone();
                $5(c, "SID", a.A);
                $5(c, "RID", b);
                $5(c, "TYPE", "terminate");
                W6(a, c);
                b = new B6(a, a.A, b, void 0);
                b.Wm = 2;
                b.Qi = a6(c.clone());
                LEa(new Image, b.Qi.toString());
                b.Pm = g.z();
                D6(b)
            }
            OFa(a)
        }
        , QFa = function (a) {
            a.eH(1, 0);
            a.Gq = N6(a, null, a.dv);
            X6(a)
        }
        , NFa = function (a) {
            a.Si && (a.Si.abort(), a.Si = null);
            a.Zc && (a.Zc.cancel(), a.Zc = null);
            a.Qh && (g.v.clearTimeout(a.Qh), a.Qh = null);
            Y6(a);
            a.af && (a.af.cancel(), a.af = null);
            a.Wi && (g.v.clearTimeout(a.Wi), a.Wi = null)
        }
        , RFa = function (a, b) {
            if (0 == a.o) throw Error("Invalid operation: sending map when state is closed");
            a.u.push(new JFa(a.SK++, b));
            2 != a.o && 3 != a.o || X6(a)
        }
        , X6 = function (a) {
            a.af || a.Wi || (a.Wi = K6((0, g.x)(a.ED, a), 0), a.Ul = 0)
        }
        , TFa = function (a, b) {
            if (1 == a.o) {
                if (!b) {
                    a.Fo = Math.floor(1E5 * Math.random());
                    var c = a.Fo++
                        , d = new B6(a, "", c, void 0);
                    d.yk = a.Zl;
                    var e = Z6(a)
                        , f = a.Gq.clone();
                    $5(f, "RID", c);
                    $5(f, "CVER", "1");
                    W6(a, f);
                    qFa(d, f, e);
                    a.af = d;
                    a.o = 2
                }
            }
            else 3 == a.o && (b ? SFa(a, b) : 0 == a.u.length || a.af || SFa(a))
        }
        , SFa = function (a, b) {
            if (b)
                if (6 < a.dk) {
                    a.u = a.B.concat(a.u);
                    a.B.length = 0;
                    var c = a.Fo - 1;
                    var d = Z6(a)
                }
                else c = b.J, d = b.jl;
            else c = a.Fo++, d = Z6(a);
            var e = a.Gq.clone();
            $5(e, "SID", a.A);
            $5(e, "RID", c);
            $5(e, "AID", a.om);
            W6(a, e);
            c = new B6(a, a.A, c, a.Ul + 1);
            c.yk = a.Zl;
            c.setTimeout(1E4 + Math.round(1E4 * Math.random()));
            a.af = c;
            qFa(c, e, d)
        }
        , W6 = function (a, b) {
            if (a.le) {
                var c = a.le.jA();
                c && g.Hb(c, function (d, e) {
                    $5(b, e, d)
                })
            }
        }
        , Z6 = function (a) {
            var b = Math.min(a.u.length, 1E3)
                , c = ["count=" + b];
            if (6 < a.dk && 0 < b) {
                var d = a.u[0].o;
                c.push("ofs=" + d)
            }
            else d = 0;
            for (var e = 0; e < b; e++) {
                var f = a.u[e].o
                    , h = a.u[e].map;
                f = 6 >= a.dk ? e : f - d;
                try {
                    g.Hb(h, function (l, m) {
                        c.push("req" + f + "_" + m + "=" + encodeURIComponent(l))
                    })
                }
                catch (l) {
                    c.push("req" + f + "_type=" + encodeURIComponent("_badmap"))
                }
            }
            a.B = a.B.concat(a.u.splice(0, b));
            return c.join("&")
        }
        , UFa = function (a) {
            a.Zc || a.Qh || (a.G = 1, a.Qh = K6((0, g.x)(a.DD, a), 0), a.Hl = 0)
        }
        , $6 = function (a) {
            if (a.Zc || a.Qh || 3 <= a.Hl) return !1;
            a.G++;
            a.Qh = K6((0, g.x)(a.DD, a), VFa(a, a.Hl));
            a.Hl++;
            return !0
        }
        , O6 = function (a, b, c) {
            a.wt = c;
            a.oh = b.gi;
            a.F || QFa(a)
        }
        , Y6 = function (a) {
            null != a.ik && (g.v.clearTimeout(a.ik), a.ik = null)
        }
        , VFa = function (a, b) {
            var c = 5E3 + Math.floor(1E4 * Math.random());
            a.isActive() || (c *= 2);
            return c * b
        }
        , a7 = function (a, b) {
            if (2 == b || 9 == b) {
                var c = null;
                a.le && (c = null);
                var d = (0, g.x)(a.FP, a);
                c || (c = new g.Vm("//www.google.com/images/cleardot.gif"), a6(c));
                yFa(c.toString(), 1E4, d)
            }
            else F6(2);
            WFa(a, b)
        }
        , WFa = function (a, b) {
            a.o = 0;
            a.le && a.le.yz(b);
            OFa(a);
            NFa(a)
        }
        , OFa = function (a) {
            a.o = 0;
            a.oh = -1;
            if (a.le)
                if (0 == a.B.length && 0 == a.u.length) a.le.ku();
                else {
                    g.ub(a.B);
                    var b = g.ub(a.u);
                    a.B.length = 0;
                    a.u.length = 0;
                    a.le.ku(b)
                }
        }
        , N6 = function (a, b, c) {
            var d = g.cn(c);
            if ("" != d.o) b && g.Xm(d, b + "." + d.o), g.Ym(d, d.B);
            else {
                var e = window.location;
                d = PEa(e.protocol, b ? b + "." + e.hostname : e.hostname, +e.port, c)
            }
            a.Jn && g.Hb(a.Jn, function (f, h) {
                $5(d, h, f)
            });
            $5(d, "VER", a.dk);
            W6(a, d);
            return d
        }
        , K6 = function (a, b) {
            if ("function" !== typeof a) throw Error("Fn must not be null and must be a function");
            return g.v.setTimeout(function () {
                a()
            }, b)
        }
        , F6 = function (a) {
            b7.dispatchEvent(new KFa(b7, a))
        }
        , XFa = function () {}
        , YFa = function () {
            this.o = [];
            this.u = []
        }
        , ZFa = function (a, b) {
            this.action = a;
            this.params = b || {}
        }
        , c7 = function (a, b) {
            g.C.call(this);
            this.o = new g.G(this.eO, 0, this);
            g.E(this, this.o);
            this.oe = 5E3;
            this.u = 0;
            if ("function" === typeof a) b && (a = (0, g.x)(a, b));
            else if (a && "function" === typeof a.handleEvent) a = (0, g.x)(a.handleEvent, a);
            else throw Error("Invalid listener argument");
            this.A = a
        }
        , d7 = function (a, b, c, d) {
            c = void 0 === c ? !1 : c;
            d = void 0 === d ? function () {
                return ""
            } : d;
            this.O = a;
            this.F = b;
            this.A = new g.Nn;
            this.u = new c7(this.kP, this);
            this.o = null;
            this.rd = !1;
            this.C = null;
            this.L = "";
            this.J = this.B = 0;
            this.G = [];
            this.T = c;
            this.S = d
        }
        , $Fa = function (a) {
            return {
                firstTestResults: [""]
                , secondTestResults: !a.o.wt
                , sessionId: a.o.A
                , arrayId: a.o.om
            }
        }
        , aGa = function (a, b) {
            a.J = b || 0;
            a.u.stop();
            e7(a);
            a.o && (3 == a.o.o && TFa(a.o), PFa(a.o));
            a.J = 0
        }
        , f7 = function (a) {
            return !!a.o && 3 == a.o.o
        }
        , e7 = function (a) {
            if (a.o) {
                var b = a.S()
                    , c = a.o.Zl || {};
                b ? c["x-youtube-lounge-xsrf-token"] = b : delete c["x-youtube-lounge-xsrf-token"];
                a.o.Zl = c
            }
        }
        , bGa = function (a, b) {
            (a.F.loungeIdToken = b) || a.u.stop()
        }
        , g7 = function (a) {
            this.scheme = "https";
            this.port = this.domain = "";
            this.o = "/api/lounge";
            this.u = !0;
            a = a || document.location.href;
            var b = Number(g.ud(4, a)) || "";
            b && (this.port = ":" + b);
            this.domain = g.vd(a) || "";
            a = g.Tc;
            0 <= a.search("MSIE") && (a = a.match(/MSIE ([\d.]+)/)[1], 0 > g.Bc(a, "10.0") && (this.u = !1))
        }
        , h7 = function (a, b) {
            var c = a.o;
            a.u && (c = a.scheme + "://" + a.domain + a.port + a.o);
            return g.Jd(c + b, {})
        }
        , i7 = function (a, b, c, d, e) {
            a = {
                format: "JSON"
                , method: "POST"
                , context: a
                , timeout: 5E3
                , withCredentials: !1
                , onSuccess: g.Ua(a.B, d, !0)
                , onError: g.Ua(a.A, e)
                , Hf: g.Ua(a.C, e)
            };
            c && (a.Mb = c, a.headers = {
                "Content-Type": "application/x-www-form-urlencoded"
            });
            return g.nq(b, a)
        }
        , fGa = function () {
            var a = cGa;
            dGa();
            j7.push(a);
            eGa(j7)
        }
        , k7 = function (a, b) {
            dGa();
            var c = j7
                , d = gGa(a, String(b));
            g.ob(c) ? hGa(d) : (eGa(c), g.B(c, function (e) {
                e(d)
            }))
        }
        , dGa = function () {
            j7 || (j7 = g.La("yt.mdx.remote.debug.handlers_") || [], g.Ha("yt.mdx.remote.debug.handlers_", j7, void 0))
        }
        , hGa = function (a) {
            var b = (l7 + 1) % 50;
            l7 = b;
            m7[b] = a;
            n7 || (n7 = 49 == b)
        }
        , eGa = function (a) {
            var b = m7;
            if (b[0]) {
                var c = l7
                    , d = n7 ? c : -1;
                do {
                    d = (d + 1) % 50;
                    var e = b[d];
                    g.B(a, function (f) {
                        f(e)
                    })
                } while (d != c);
                m7 = Array(50);
                l7 = -1;
                n7 = !1
            }
        }
        , gGa = function (a, b) {
            var c = (g.z() - iGa) / 1E3;
            c.toFixed && (c = c.toFixed(3));
            var d = [];
            d.push("[", c + "s", "] ");
            d.push("[", "yt.mdx.remote", "] ");
            d.push(a + ": " + b, "\n");
            return d.join("")
        }
        , o7 = function (a) {
            g.N.call(this);
            this.F = a;
            this.screens = []
        }
        , jGa = function (a, b) {
            var c = a.get(b.uuid) || a.get(b.id);
            if (c) {
                var d = c.name;
                c.id = b.id || c.id;
                c.name = b.name;
                c.token = b.token;
                c.uuid = b.uuid || c.uuid;
                return c.name != d
            }
            a.screens.push(b);
            return !0
        }
        , kGa = function (a, b) {
            var c = a.screens.length != b.length;
            a.screens = g.He(a.screens, function (f) {
                return !!l6(b, f)
            });
            for (var d = 0, e = b.length; d < e; d++) c = jGa(a, b[d]) || c;
            return c
        }
        , lGa = function (a, b) {
            var c = a.screens.length;
            a.screens = g.He(a.screens, function (d) {
                return !(d || b ? !d != !b ? 0 : d.id == b.id : 1)
            });
            return a.screens.length < c
        }
        , p7 = function (a, b, c, d) {
            g.N.call(this);
            this.F = a;
            this.C = b;
            this.A = c;
            this.B = d;
            this.u = 0;
            this.o = null;
            this.La = NaN
        }
        , r7 = function (a) {
            o7.call(this, "LocalScreenService");
            this.u = a;
            this.o = NaN;
            q7(this);
            this.info("Initializing with " + j6(this.screens))
        }
        , mGa = function (a) {
            if (a.screens.length) {
                var b = g.Nc(a.screens, function (d) {
                        return d.id
                    })
                    , c = h7(a.u, "/pairing/get_lounge_token_batch");
                i7(a.u, c, {
                    screen_ids: b.join(",")
                }, (0, g.x)(a.QH, a), (0, g.x)(a.PH, a))
            }
        }
        , q7 = function (a) {
            var b = VEa(aFa());
            b = g.He(b, function (c) {
                return !c.uuid
            });
            return kGa(a, b)
        }
        , s7 = function (a, b) {
            cFa(g.Nc(a.screens, TEa));
            b && bFa()
        }
        , u7 = function (a, b) {
            g.N.call(this);
            this.F = b;
            var c = g.gt("yt-remote-online-screen-ids") || "";
            c = c ? c.split(",") : [];
            for (var d = {}, e = this.F(), f = 0, h = e.length; f < h; ++f) {
                var l = e[f].id;
                d[l] = g.nb(c, l)
            }
            this.o = d;
            this.C = a;
            this.A = this.B = NaN;
            this.u = null;
            t7("Initialized with " + g.Bj(this.o))
        }
        , nGa = function (a, b, c) {
            var d = h7(a.C, "/pairing/get_screen_availability");
            i7(a.C, d, {
                lounge_token: b.token
            }, (0, g.x)(function (e) {
                e = e.screens || [];
                for (var f = 0, h = e.length; f < h; ++f)
                    if (e[f].loungeToken == b.token) {
                        c("online" == e[f].status);
                        return
                    }
                c(!1)
            }, a), (0, g.x)(function () {
                c(!1)
            }, a))
        }
        , v7 = function (a, b) {
            a: if (c6(b) != c6(a.o)) var c = !1;
                else {
                    c = g.Ob(b);
                    for (var d = 0, e = c.length; d < e; ++d)
                        if (!a.o[c[d]]) {
                            c = !1;
                            break a
                        }
                    c = !0
                }c || (t7("Updated online screens: " + g.Bj(a.o)), a.o = b, a.R("screenChange"));oGa(a)
        }
        , w7 = function (a) {
            isNaN(a.A) || g.Fo(a.A);
            a.A = g.Do((0, g.x)(a.ix, a), 0 < a.B && a.B < g.z() ? 2E4 : 1E4)
        }
        , t7 = function (a) {
            k7("OnlineScreenService", a)
        }
        , pGa = function (a) {
            var b = {};
            g.B(a.F(), function (c) {
                c.token ? b[c.token] = c.id : this.Lc("Requesting availability of screen w/o lounge token.")
            });
            return b
        }
        , oGa = function (a) {
            a = g.Ob(g.Ib(a.o, function (b) {
                return b
            }));
            g.Cb(a);
            a.length ? g.ft("yt-remote-online-screen-ids", a.join(","), 60) : g.ht("yt-remote-online-screen-ids")
        }
        , x7 = function (a) {
            o7.call(this, "ScreenService");
            this.C = a;
            this.o = this.u = null;
            this.A = [];
            this.B = {};
            qGa(this)
        }
        , sGa = function (a, b, c, d, e, f) {
            a.info("getAutomaticScreenByIds " + c + " / " + b);
            c || (c = a.B[b]);
            var h = a.yf();
            if (h = (c ? m6(h, c) : null) || m6(h, b)) {
                h.uuid = b;
                var l = y7(a, h);
                nGa(a.o, l, function (m) {
                    e(m ? l : null)
                })
            }
            else c ? rGa(a, c, (0, g.x)(function (m) {
                var n = y7(this, new g6({
                    name: d
                    , screenId: c
                    , loungeToken: m
                    , dialId: b || ""
                }));
                nGa(this.o, n, function (q) {
                    e(q ? n : null)
                })
            }, a), f) : e(null)
        }
        , tGa = function (a, b) {
            for (var c = 0, d = a.screens.length; c < d; ++c)
                if (a.screens[c].name == b) return a.screens[c];
            return null
        }
        , rGa = function (a, b, c, d) {
            a.info("requestLoungeToken_ for " + b);
            var e = {
                Mb: {
                    screen_ids: b
                }
                , method: "POST"
                , context: a
                , onSuccess: function (f, h) {
                    var l = h && h.screens || [];
                    l[0] && l[0].screenId == b ? c(l[0].loungeToken) : d(Error("Missing lounge token in token response"))
                }
                , onError: function () {
                    d(Error("Request screen lounge token failed"))
                }
            };
            g.nq(h7(a.C, "/pairing/get_lounge_token_batch"), e)
        }
        , uGa = function (a) {
            a.screens = a.u.yf();
            var b = a.B
                , c = {}
                , d;
            for (d in b) c[b[d]] = d;
            b = 0;
            for (d = a.screens.length; b < d; ++b) {
                var e = a.screens[b];
                e.uuid = c[e.id] || ""
            }
            a.info("Updated manual screens: " + j6(a.screens))
        }
        , qGa = function (a) {
            z7(a);
            a.u = new r7(a.C);
            a.u.subscribe("screenChange", (0, g.x)(a.XH, a));
            uGa(a);
            a.A = VEa(g.gt("yt-remote-automatic-screen-cache") || []);
            z7(a);
            a.info("Initializing automatic screens: " + j6(a.A));
            a.o = new u7(a.C, (0, g.x)(a.yf, a, !0));
            a.o.subscribe("screenChange", (0, g.x)(function () {
                this.R("onlineScreenChange")
            }, a))
        }
        , y7 = function (a, b) {
            var c = a.get(b.id);
            c ? (c.uuid = b.uuid, b = c) : ((c = m6(a.A, b.uuid)) ? (c.id = b.id, c.token = b.token, b = c) : a.A.push(b), g.ft("yt-remote-automatic-screen-cache", g.Nc(a.A, TEa)));
            z7(a);
            a.B[b.uuid] = b.id;
            g.ft("yt-remote-device-id-map", a.B, 31536E3);
            return b
        }
        , z7 = function (a) {
            a.B = g.gt("yt-remote-device-id-map") || {}
        }
        , A7 = function (a, b, c) {
            g.N.call(this);
            this.T = c;
            this.J = a;
            this.o = b;
            this.G = null
        }
        , B7 = function (a, b) {
            k7(a.T, b)
        }
        , C7 = function (a, b) {
            A7.call(this, a, b, "CastSession");
            this.u = null;
            this.A = 0;
            this.C = (0, g.x)(this.mQ, this);
            this.B = (0, g.x)(this.EO, this);
            this.A = g.Do((0, g.x)(function () {
                vGa(this, null)
            }, this), 12E4)
        }
        , wGa = function (a) {
            a.info("sendYoutubeMessage_: getMdxSessionStatus " + g.Bj(void 0));
            var b = {
                type: "getMdxSessionStatus"
            };
            a.u ? a.u.sendMessage("urn:x-cast:com.google.youtube.mdx", b, g.Ma, (0, g.x)(function () {
                B7(this, "Failed to send message: getMdxSessionStatus.")
            }, a)) : B7(a, "Sending yt message without session: " + g.Bj(b))
        }
        , vGa = function (a, b) {
            g.Fo(a.A);
            if (b) {
                if (a.info("onConnectedScreenId_: Received screenId: " + b), !a.getScreen() || a.getScreen().id != b) {
                    var c = (0, g.x)(a.ws, a)
                        , d = (0, g.x)(a.Gf, a);
                    a.BA(b, c, d, 5)
                }
            }
            else a.Gf(Error("Waiting for session status timed out."))
        }
        , D7 = function (a, b, c) {
            A7.call(this, a, b, "DialSession");
            this.A = this.F = null;
            this.L = "";
            this.W = c;
            this.O = null;
            this.C = g.Ma;
            this.B = NaN;
            this.S = (0, g.x)(this.pQ, this);
            this.u = g.Ma
        }
        , xGa = function (a) {
            a.u = a.J.EF(a.L, a.o.label, a.o.friendlyName, (0, g.x)(function (b) {
                this.u = g.Ma;
                this.ws(b)
            }, a), (0, g.x)(function (b) {
                this.u = g.Ma;
                this.Gf(b)
            }, a))
        }
        , yGa = function (a) {
            var b = {};
            b.pairingCode = a.L;
            b.theme = a.W;
            eFa() && (b.env_useStageMdx = 1);
            return g.Hd(b)
        }
        , E7 = function (a, b) {
            A7.call(this, a, b, "ManualSession");
            this.u = g.Do((0, g.x)(this.pm, this, null), 150)
        }
        , F7 = function (a, b, c, d) {
            g.N.call(this);
            this.u = a;
            this.G = b || "233637DE";
            this.F = c || "cl";
            this.J = d || !1;
            this.o = null;
            this.C = !1;
            this.A = [];
            this.B = (0, g.x)(this.uN, this)
        }
        , zGa = function (a, b) {
            return b ? g.gb(a.A, function (c) {
                return h6(b, c.label)
            }, a) : null
        }
        , G7 = function (a) {
            k7("Controller", a)
        }
        , cGa = function (a) {
            window.chrome && chrome.cast && chrome.cast.logMessage && chrome.cast.logMessage(a)
        }
        , H7 = function (a) {
            return a.C || !!a.A.length || !!a.o
        }
        , I7 = function (a, b, c) {
            b != a.o && (g.Zf(a.o), (a.o = b) ? (c ? a.R("yt-remote-cast2-receiver-resumed", b.o) : a.R("yt-remote-cast2-receiver-selected", b.o), b.subscribe("sessionScreen", (0, g.x)(a.BD, a, b)), b.getScreen() ? a.R("yt-remote-cast2-session-change", b.getScreen()) : c && a.o.pm(null)) : a.R("yt-remote-cast2-session-change", null))
        }
        , AGa = function (a) {
            var b = a.u.DF()
                , c = a.o && a.o.o;
            a = g.Nc(b, function (d) {
                c && h6(d, c.label) && (c = null);
                var e = d.uuid ? d.uuid : d.id
                    , f = zGa(this, d);
                f ? (f.label = e, f.friendlyName = d.name) : (f = new chrome.cast.Receiver(e, d.name), f.receiverType = chrome.cast.ReceiverType.CUSTOM);
                return f
            }, a);
            c && (c.receiverType != chrome.cast.ReceiverType.CUSTOM && (c = new chrome.cast.Receiver(c.label, c.friendlyName), c.receiverType = chrome.cast.ReceiverType.CUSTOM), a.push(c));
            return a
        }
        , GGa = function (a, b, c, d, e, f, h) {
            BGa() ? CGa(b, e, f, h) && (K7(!0), window.chrome && chrome.cast && chrome.cast.isAvailable ? DGa(a, c) : (window.__onGCastApiAvailable = function (l, m) {
                l ? DGa(a, c) : (L7("Failed to load cast API: " + m), M7(!1), K7(!1), g.ht("yt-remote-cast-available"), g.ht("yt-remote-cast-receiver"), EGa(), c(!1))
            }, d ? g.Po("https://www.gstatic.com/cv/js/sender/v1/cast_sender.js") : 0 <= window.navigator.userAgent.indexOf("Android") && 0 <= window.navigator.userAgent.indexOf("Chrome/") && window.navigator.presentation ? lFa() : !window.chrome || !window.navigator.presentation || 0 <= window.navigator.userAgent.indexOf("Edge") ? u6() : (kFa(), t6(FGa.map(iFa))))) : J7("Cannot initialize because not running Chrome")
        }
        , EGa = function () {
            J7("dispose");
            var a = N7();
            a && a.dispose();
            g.Ha("yt.mdx.remote.cloudview.instance_", null, void 0);
            HGa(!1);
            g.Lo(O7);
            O7.length = 0
        }
        , P7 = function () {
            return !!g.gt("yt-remote-cast-installed")
        }
        , IGa = function () {
            var a = g.gt("yt-remote-cast-receiver");
            return a ? a.friendlyName : null
        }
        , JGa = function () {
            J7("clearCurrentReceiver");
            g.ht("yt-remote-cast-receiver")
        }
        , KGa = function () {
            return P7() ? N7() ? N7().getCastSession() : (L7("getCastSelector: Cast is not initialized."), null) : (L7("getCastSelector: Cast API is not installed!"), null)
        }
        , R7 = function () {
            P7() ? N7() ? Q7() ? (J7("Requesting cast selector."), N7().requestSession()) : (J7("Wait for cast API to be ready to request the session."), O7.push(g.Ko("yt-remote-cast2-api-ready", R7))) : L7("requestCastSelector: Cast is not initialized.") : L7("requestCastSelector: Cast API is not installed!")
        }
        , S7 = function (a, b) {
            Q7() ? N7().setConnectedScreenStatus(a, b) : L7("setConnectedScreenStatus called before ready.")
        }
        , BGa = function () {
            var a = 0 <= g.Tc.search(/ (CrMo|Chrome|CriOS)\//);
            return g.Bx || a
        }
        , LGa = function (a, b) {
            N7().init(a, b)
        }
        , CGa = function (a, b, c, d) {
            var e = !1;
            N7() || (a = new F7(a, b, c, d), a.subscribe("yt-remote-cast2-availability-change", function (f) {
                g.ft("yt-remote-cast-available", f);
                e6("yt-remote-cast2-availability-change", f)
            }), a.subscribe("yt-remote-cast2-receiver-selected", function (f) {
                J7("onReceiverSelected: " + f.friendlyName);
                g.ft("yt-remote-cast-receiver", f);
                e6("yt-remote-cast2-receiver-selected", f)
            }), a.subscribe("yt-remote-cast2-receiver-resumed", function (f) {
                J7("onReceiverResumed: " + f.friendlyName);
                g.ft("yt-remote-cast-receiver", f)
            }), a.subscribe("yt-remote-cast2-session-change", function (f) {
                J7("onSessionChange: " + i6(f));
                f || g.ht("yt-remote-cast-receiver");
                e6("yt-remote-cast2-session-change", f)
            }), g.Ha("yt.mdx.remote.cloudview.instance_", a, void 0), e = !0);
            J7("cloudview.createSingleton_: " + e);
            return e
        }
        , N7 = function () {
            return g.La("yt.mdx.remote.cloudview.instance_")
        }
        , DGa = function (a, b) {
            M7(!0);
            K7(!1);
            LGa(a, function (c) {
                c ? (HGa(!0), g.Mo("yt-remote-cast2-api-ready")) : (L7("Failed to initialize cast API."), M7(!1), g.ht("yt-remote-cast-available"), g.ht("yt-remote-cast-receiver"), EGa());
                b(c)
            })
        }
        , J7 = function (a) {
            k7("cloudview", a)
        }
        , L7 = function (a) {
            k7("cloudview", a)
        }
        , M7 = function (a) {
            J7("setCastInstalled_ " + a);
            g.ft("yt-remote-cast-installed", a)
        }
        , Q7 = function () {
            return !!g.La("yt.mdx.remote.cloudview.apiReady_")
        }
        , HGa = function (a) {
            J7("setApiReady_ " + a);
            g.Ha("yt.mdx.remote.cloudview.apiReady_", a, void 0)
        }
        , K7 = function (a) {
            g.Ha("yt.mdx.remote.cloudview.initializing_", a, void 0)
        }
        , T7 = function (a) {
            this.index = -1;
            this.videoId = this.listId = "";
            this.volume = this.playerState = -1;
            this.muted = !1;
            this.audioTrackId = null;
            this.F = this.G = 0;
            this.o = null;
            this.hasNext = this.ph = !1;
            this.L = this.J = this.u = this.C = 0;
            this.B = NaN;
            this.A = !1;
            this.reset(a)
        }
        , U7 = function (a) {
            a.audioTrackId = null;
            a.o = null;
            a.playerState = -1;
            a.ph = !1;
            a.hasNext = !1;
            a.G = 0;
            a.F = g.z();
            a.C = 0;
            a.u = 0;
            a.J = 0;
            a.L = 0;
            a.B = NaN;
            a.A = !1
        }
        , V7 = function (a) {
            return a.zb() ? (g.z() - a.F) / 1E3 : 0
        }
        , W7 = function (a, b) {
            a.G = b;
            a.F = g.z()
        }
        , X7 = function (a) {
            switch (a.playerState) {
            case 1:
            case 1081:
                return (g.z() - a.F) / 1E3 + a.G;
            case -1E3:
                return 0
            }
            return a.G
        }
        , Y7 = function (a, b, c) {
            var d = a.videoId;
            a.videoId = b;
            a.index = c;
            b != d && U7(a)
        }
        , Z7 = function (a) {
            var b = {};
            b.index = a.index;
            b.listId = a.listId;
            b.videoId = a.videoId;
            b.playerState = a.playerState;
            b.volume = a.volume;
            b.muted = a.muted;
            b.audioTrackId = a.audioTrackId;
            b.trackData = g.Yb(a.o);
            b.hasPrevious = a.ph;
            b.hasNext = a.hasNext;
            b.playerTime = a.G;
            b.playerTimeAt = a.F;
            b.seekableStart = a.C;
            b.seekableEnd = a.u;
            b.duration = a.J;
            b.loadedTime = a.L;
            b.liveIngestionTime = a.B;
            return b
        }
        , a8 = function (a, b) {
            g.N.call(this);
            this.o = 0;
            this.B = a;
            this.F = [];
            this.C = new YFa;
            this.A = this.u = null;
            this.L = (0, g.x)(this.EL, this);
            this.G = (0, g.x)(this.Jo, this);
            this.J = (0, g.x)(this.DL, this);
            this.O = (0, g.x)(this.ML, this);
            var c = 0;
            a ? (c = a.getProxyState(), 3 != c && (a.subscribe("proxyStateChange", this.my, this), MGa(this))) : c = 3;
            0 != c && (b ? this.my(c) : g.Do((0, g.x)(function () {
                this.my(c)
            }, this), 0));
            var d = KGa();
            d && $7(this, d);
            this.subscribe("yt-remote-cast2-session-change", this.O)
        }
        , b8 = function (a) {
            return new T7(a.B.getPlayerContextData())
        }
        , MGa = function (a) {
            g.B("nowAutoplaying autoplayDismissed remotePlayerChange remoteQueueChange autoplayModeChange autoplayUpNext previousNextChange".split(" "), function (b) {
                this.F.push(this.B.subscribe(b, g.Ua(this.qN, b), this))
            }, a)
        }
        , NGa = function (a) {
            g.B(a.F, function (b) {
                this.B.unsubscribeByKey(b)
            }, a);
            a.F.length = 0
        }
        , c8 = function (a, b) {
            var c = a.C;
            50 > c.o.length + c.u.length && a.C.u.push(b)
        }
        , e8 = function (a, b, c) {
            var d = b8(a);
            W7(d, c); - 1E3 != d.playerState && (d.playerState = b);
            d8(a, d)
        }
        , f8 = function (a, b, c) {
            a.B.sendMessage(b, c)
        }
        , d8 = function (a, b) {
            NGa(a);
            a.B.setPlayerContextData(Z7(b));
            MGa(a)
        }
        , $7 = function (a, b) {
            a.A && (a.A.removeUpdateListener(a.L), a.A.removeMediaListener(a.G), a.Jo(null));
            a.A = b;
            a.A && (k7("CP", "Setting cast session: " + a.A.sessionId), a.A.addUpdateListener(a.L), a.A.addMediaListener(a.G), a.A.media.length && a.Jo(a.A.media[0]))
        }
        , OGa = function (a) {
            var b = a.u.media
                , c = a.u.customData;
            if (b && c) {
                var d = b8(a);
                b.contentId != d.videoId && k7("CP", "Cast changing video to: " + b.contentId);
                d.videoId = b.contentId;
                d.playerState = c.playerState;
                W7(d, a.u.getEstimatedTime());
                d8(a, d)
            }
            else k7("CP", "No cast media video. Ignoring state update.")
        }
        , g8 = function (a, b, c) {
            return (0, g.x)(function (d) {
                this.Lc("Failed to " + b + " with cast v2 channel. Error code: " + d.code);
                d.code != chrome.cast.ErrorCode.TIMEOUT && (this.Lc("Retrying " + b + " using MDx browser channel."), f8(this, b, c))
            }, a)
        }
        , h8 = function (a, b, c) {
            g.N.call(this);
            this.C = NaN;
            this.S = !1;
            this.J = this.G = this.L = this.O = NaN;
            this.T = [];
            this.B = this.F = this.A = this.sb = this.o = null;
            this.X = a;
            this.T.push(g.$o(window, "beforeunload", (0, g.x)(this.JH, this)));
            this.u = [];
            this.sb = new T7;
            this.W = b.id;
            this.o = PGa(this, c);
            this.o.subscribe("handlerOpened", this.IL, this);
            this.o.subscribe("handlerClosed", this.FL, this);
            this.o.subscribe("handlerError", this.GL, this);
            this.o.subscribe("handlerMessage", this.HL, this);
            bGa(this.o, b.token);
            this.subscribe("remoteQueueChange", function () {
                var d = this.sb.videoId;
                g.it() && g.ft("yt-remote-session-video-id", d)
            }, this)
        }
        , i8 = function (a) {
            k7("conn", a)
        }
        , PGa = function (a, b) {
            return new d7(h7(a.X, "/bc"), b, !1, function () {
                return a.AF()
            })
        }
        , j8 = function (a, b) {
            a.R("proxyStateChange", b)
        }
        , QGa = function (a) {
            a.C = g.Do((0, g.x)(function () {
                i8("Connecting timeout");
                this.Ql(1)
            }, a), 2E4)
        }
        , k8 = function (a) {
            g.Fo(a.C);
            a.C = NaN
        }
        , l8 = function (a) {
            g.Fo(a.O);
            a.O = NaN
        }
        , RGa = function (a) {
            m8(a);
            a.L = g.Do((0, g.x)(function () {
                n8(this, "getNowPlaying")
            }, a), 2E4)
        }
        , m8 = function (a) {
            g.Fo(a.L);
            a.L = NaN
        }
        , TGa = function (a, b) {
            b && (k8(a), l8(a));
            b == (f7(a.o) && isNaN(a.C)) ? b && (j8(a, 1), n8(a, "getSubtitlesTrack")) : b ? (a.zA() && a.sb.reset(), j8(a, 1), n8(a, "getNowPlaying"), SGa(a)) : a.Ql(1)
        }
        , UGa = function (a, b) {
            var c = b.params.videoId;
            delete b.params.videoId;
            c == a.sb.videoId && (g.Ub(b.params) ? a.sb.o = null : a.sb.o = b.params, a.R("remotePlayerChange"))
        }
        , VGa = function (a, b) {
            var c = b.params.videoId || b.params.video_id
                , d = parseInt(b.params.currentIndex, 10);
            a.sb.listId = b.params.listId || a.sb.listId;
            Y7(a.sb, c, d);
            a.R("remoteQueueChange")
        }
        , XGa = function (a, b) {
            b.params = b.params || {};
            VGa(a, b);
            WGa(a, b);
            a.R("autoplayDismissed")
        }
        , WGa = function (a, b) {
            var c = parseInt(b.params.currentTime || b.params.current_time, 10);
            W7(a.sb, isNaN(c) ? 0 : c);
            c = parseInt(b.params.state, 10);
            c = isNaN(c) ? -1 : c; - 1 == c && -1E3 == a.sb.playerState && (c = -1E3);
            a.sb.playerState = c;
            c = Number(b.params.loadedTime);
            a.sb.L = isNaN(c) ? 0 : c;
            c = Number(b.params.duration);
            a.sb.J = isNaN(c) ? 0 : c;
            c = a.sb;
            var d = Number(b.params.liveIngestionTime);
            c.B = d;
            c.A = isNaN(d) ? !1 : !0;
            c = a.sb;
            d = Number(b.params.seekableStartTime);
            var e = Number(b.params.seekableEndTime);
            c.C = isNaN(d) ? 0 : d;
            c.u = isNaN(e) ? 0 : e;
            1 == a.sb.playerState ? RGa(a) : m8(a);
            a.R("remotePlayerChange")
        }
        , YGa = function (a, b) {
            if (-1E3 != a.sb.playerState) {
                var c = 1085;
                switch (parseInt(b.params.adState, 10)) {
                case 1:
                    c = 1081;
                    break;
                case 2:
                    c = 1084;
                    break;
                case 0:
                    c = 1083
                }
                a.sb.playerState = c;
                c = parseInt(b.params.currentTime, 10);
                W7(a.sb, isNaN(c) ? 0 : c);
                a.R("remotePlayerChange")
            }
        }
        , ZGa = function (a, b) {
            var c = "true" == b.params.muted;
            a.sb.volume = parseInt(b.params.volume, 10);
            a.sb.muted = c;
            a.R("remotePlayerChange")
        }
        , $Ga = function (a, b) {
            a.F = b.params.videoId;
            a.R("nowAutoplaying", parseInt(b.params.timeout, 10))
        }
        , aHa = function (a, b) {
            var c = "true" == b.params.hasNext;
            a.sb.ph = "true" == b.params.hasPrevious;
            a.sb.hasNext = c;
            a.R("previousNextChange")
        }
        , SGa = function (a) {
            g.Fo(a.J);
            a.J = g.Do((0, g.x)(a.Ql, a, 1), 864E5)
        }
        , n8 = function (a, b, c) {
            c ? i8("Sending: action=" + b + ", params=" + g.Bj(c)) : i8("Sending: action=" + b);
            a.o.sendMessage(b, c)
        }
        , o8 = function (a) {
            o7.call(this, "ScreenServiceProxy");
            this.ne = a;
            this.o = [];
            this.o.push(this.ne.$_s("screenChange", (0, g.x)(this.kQ, this)));
            this.o.push(this.ne.$_s("onlineScreenChange", (0, g.x)(this.VM, this)))
        }
        , fHa = function (a, b) {
            b = g.K("MDX_CONFIG") || b;
            XEa();
            q6();
            p8 || (p8 = new g7(b ? b.loungeApiHost : void 0), eFa() && (p8.o = "/api/loungedev"));
            q8 || (q8 = g.La("yt.mdx.remote.deferredProxies_") || [], g.Ha("yt.mdx.remote.deferredProxies_", q8, void 0));
            bHa();
            var c = r8();
            if (!c) {
                var d = new x7(p8);
                g.Ha("yt.mdx.remote.screenService_", d, void 0);
                c = r8();
                var e = !1
                    , f = void 0
                    , h = void 0
                    , l = !1;
                b && (e = !!b.loadCastApiSetupScript, f = b.appId, h = b.theme, l = !!b.disableDial);
                GGa(a, d, function (m) {
                    m ? s8() && S7(s8(), "YouTube TV") : d.subscribe("onlineScreenChange", function () {
                        e6("yt-remote-receiver-availability-change")
                    })
                }, e, f, h, l)
            }
            b && !g.La("yt.mdx.remote.initialized_") && (g.Ha("yt.mdx.remote.initialized_", !0, void 0), t8("Initializing: " + g.Bj(b)), u8.push(g.Ko("yt-remote-cast2-availability-change", function () {
                e6("yt-remote-receiver-availability-change")
            })), u8.push(g.Ko("yt-remote-cast2-receiver-selected", function () {
                v8(null);
                e6("yt-remote-auto-connect", "cast-selector-receiver")
            })), u8.push(g.Ko("yt-remote-cast2-receiver-resumed", function () {
                e6("yt-remote-receiver-resumed", "cast-selector-receiver")
            })), u8.push(g.Ko("yt-remote-cast2-session-change", cHa)), u8.push(g.Ko("yt-remote-connection-change", function (m) {
                m ? S7(s8(), "YouTube TV") : w8() || (S7(null, null), JGa())
            })), e = x8(), b.isAuto && (e.id += "#dial"), g.qo("desktop_enable_autoplay") && (e.capabilities = ["atp"]), e.name = b.device, e.app = b.app, (h = b.theme) && (e.theme = h), t8(" -- with channel params: " + g.Bj(e)), dHa(e), c.start(), s8() || eHa())
        }
        , hHa = function () {
            var a = gHa();
            P7() && g.gt("yt-remote-cast-available") && a.push({
                key: "cast-selector-receiver"
                , name: "Cast..."
            });
            return a
        }
        , gHa = function () {
            var a = r8().ne.$_gos();
            var b = y8();
            b && z8() && (l6(a, b) || a.push(b));
            return WEa(a)
        }
        , A8 = function () {
            var a = iHa();
            !a && P7() && IGa() && (a = {
                key: "cast-selector-receiver"
                , name: IGa()
            });
            return a
        }
        , iHa = function () {
            var a = gHa()
                , b = y8();
            b || (b = w8());
            return g.gb(a, function (c) {
                return b && h6(b, c.key) ? !0 : !1
            })
        }
        , y8 = function () {
            var a = s8();
            if (!a) return null;
            var b = r8().yf();
            return m6(b, a)
        }
        , cHa = function (a) {
            t8("remote.onCastSessionChange_: " + i6(a));
            if (a) {
                var b = y8();
                b && b.id == a.id ? S7(b.id, "YouTube TV") : (b && B8(), C8(a, 1))
            }
            else z8() && B8()
        }
        , B8 = function () {
            Q7() ? N7().stopSession() : L7("stopSession called before API ready.");
            var a = z8();
            a && (a.disconnect(1), D8(null))
        }
        , E8 = function () {
            var a = z8();
            return !!a && 3 != a.getProxyState()
        }
        , t8 = function (a) {
            k7("remote", a)
        }
        , r8 = function () {
            if (!F8) {
                var a = g.La("yt.mdx.remote.screenService_");
                F8 = a ? new o8(a) : null
            }
            return F8
        }
        , s8 = function () {
            return g.La("yt.mdx.remote.currentScreenId_")
        }
        , jHa = function (a) {
            g.Ha("yt.mdx.remote.currentScreenId_", a, void 0)
        }
        , kHa = function () {
            return g.La("yt.mdx.remote.connectData_")
        }
        , v8 = function (a) {
            g.Ha("yt.mdx.remote.connectData_", a, void 0)
        }
        , z8 = function () {
            return g.La("yt.mdx.remote.connection_")
        }
        , D8 = function (a) {
            var b = z8();
            v8(null);
            a || jHa("");
            g.Ha("yt.mdx.remote.connection_", a, void 0);
            q8 && (g.B(q8, function (c) {
                c(a)
            }), q8.length = 0);
            b && !a ? e6("yt-remote-connection-change", !1) : !b && a && e6("yt-remote-connection-change", !0)
        }
        , w8 = function () {
            var a = g.it();
            if (!a) return null;
            var b = r8();
            if (!b) return null;
            b = b.yf();
            return m6(b, a)
        }
        , C8 = function (a, b) {
            s8();
            y8() && y8();
            if (G8) H8 = a;
            else {
                jHa(a.id);
                var c = new h8(p8, a, x8());
                c.connect(b, kHa());
                c.subscribe("beforeDisconnect", function (d) {
                    e6("yt-remote-before-disconnect", d)
                });
                c.subscribe("beforeDispose", function () {
                    z8() && (z8(), D8(null))
                });
                D8(c)
            }
        }
        , eHa = function () {
            var a = w8();
            a ? (t8("Resume connection to: " + i6(a)), C8(a, 0)) : (r6(), JGa(), t8("Skipping connecting because no session screen found."))
        }
        , bHa = function () {
            var a = x8();
            if (g.Ub(a)) {
                a = p6();
                var b = g.gt("yt-remote-session-name") || ""
                    , c = g.gt("yt-remote-session-app") || "";
                a = {
                    device: "REMOTE_CONTROL"
                    , id: a
                    , name: b
                    , app: c
                    , mdxVersion: 3
                };
                g.Ha("yt.mdx.remote.channelParams_", a, void 0)
            }
        }
        , x8 = function () {
            return g.La("yt.mdx.remote.channelParams_") || {}
        }
        , dHa = function (a) {
            a ? (g.ft("yt-remote-session-app", a.app), g.ft("yt-remote-session-name", a.name)) : (g.ht("yt-remote-session-app"), g.ht("yt-remote-session-name"));
            g.Ha("yt.mdx.remote.channelParams_", a, void 0)
        }
        , I8 = function (a, b, c) {
            g.C.call(this);
            var d = this;
            this.module = a;
            this.H = b;
            this.bb = c;
            this.events = new g.fs(this);
            this.L = this.events.K(this.H, "onVolumeChange", this.dD);
            this.B = !1;
            this.suggestion = null;
            this.C = new g.bI(64);
            this.o = new g.G(this.KE, 500, this);
            this.u = new g.G(this.LE, 1E3, this);
            this.G = new v6(this.PP, 0, this);
            this.A = {};
            this.J = new g.G(this.mF, 1E3, this);
            this.F = new w6(this.seekTo, 1E3, this);
            this.O = g.Ma;
            g.E(this, this.events);
            this.events.K(b, "onCaptionsTrackListChanged", this.vM);
            this.events.K(b, "captionschanged", this.CL);
            this.events.K(b, "captionssettingschanged", this.OE);
            this.events.K(b, "videoplayerreset", this.xs);
            this.events.K(b, "mdxautoplaycancel", function () {
                d.bb.Qz()
            });
            a = this.bb;
            a.fa();
            a.subscribe("proxyStateChange", this.vD, this);
            a.subscribe("remotePlayerChange", this.Po, this);
            a.subscribe("remoteQueueChange", this.xs, this);
            a.subscribe("previousNextChange", this.rD, this);
            a.subscribe("nowAutoplaying", this.nD, this);
            a.subscribe("autoplayDismissed", this.NC, this);
            g.E(this, this.o);
            g.E(this, this.u);
            g.E(this, this.G);
            g.E(this, this.J);
            g.E(this, this.F);
            this.OE();
            this.xs();
            this.Po()
        }
        , lHa = function (a) {
            a.xc(0);
            a.o.stop();
            a.pd(new g.bI(64))
        }
        , K8 = function (a, b) {
            if (J8(a) && !a.B) {
                var c = null;
                b && (c = {
                    style: a.H.getSubtitlesUserSettings()
                }, g.$b(c, b));
                a.bb.BF(a.H.getVideoData(1).videoId, c);
                a.A = b8(a.bb).o
            }
        }
        , L8 = function (a, b) {
            var c = a.H.getPlaylist();
            if (c) {
                var d = c.index;
                var e = c.listId.toString()
            }
            c = a.H.getVideoData(1);
            a.bb.playVideo(c.videoId, b, d, e, c.playerParams, c.Af, JEa(c));
            a.pd(new g.bI(1))
        }
        , mHa = function (a, b) {
            if (b) {
                var c = a.H.getOption("captions", "tracklist", {
                    aB: 1
                });
                c && c.length ? (a.H.setOption("captions", "track", b), a.B = !1) : (a.H.loadModule("captions"), a.B = !0)
            }
            else a.H.setOption("captions", "track", {})
        }
        , J8 = function (a) {
            return b8(a.bb).videoId === a.H.getVideoData(1).videoId
        }
        , M8 = function () {
            g.X.call(this, {
                D: "div"
                , I: "ytp-mdx-manual-pairing-popup-dialog"
                , P: {
                    role: "dialog"
                }
                , M: [{
                    D: "div"
                    , I: "ytp-mdx-manual-pairing-popup-dialog-inner-content"
                    , M: [{
                        D: "div"
                        , I: "ytp-mdx-manual-pairing-popup-title"
                        , U: "Connecting to your TV on web using a code will be going away soon"
                    }, {
                        D: "div"
                        , I: "ytp-mdx-manual-pairing-popup-buttons"
                        , M: [{
                            D: "button"
                            , da: ["ytp-button", "ytp-mdx-manual-pairing-popup-learn-more"]
                            , U: "Learn more"
                        }, {
                            D: "button"
                            , da: ["ytp-button", "ytp-mdx-manual-pairing-popup-ok"]
                            , U: "OK"
                        }]
                    }]
                }]
            });
            this.o = new g.TN(this, 250);
            this.learnMoreButton = this.aa("ytp-mdx-manual-pairing-popup-learn-more");
            this.okButton = this.aa("ytp-mdx-manual-pairing-popup-ok");
            g.E(this, this.o);
            this.K(this.learnMoreButton, "click", this.u);
            this.K(this.okButton, "click", this.A)
        }
        , N8 = function () {
            g.X.call(this, {
                D: "div"
                , I: "ytp-mdx-popup-dialog"
                , P: {
                    role: "dialog"
                }
                , M: [{
                    D: "div"
                    , I: "ytp-mdx-popup-dialog-inner-content"
                    , M: [{
                        D: "div"
                        , I: "ytp-mdx-popup-title"
                        , U: "You're signed out"
                    }, {
                        D: "div"
                        , I: "ytp-mdx-popup-description"
                        , U: "Videos you watch may be added to the TV's watch history and influence TV recommendations. To avoid this, cancel and sign in to YouTube on your computer."
                    }, {
                        D: "div"
                        , I: "ytp-mdx-privacy-popup-buttons"
                        , M: [{
                            D: "button"
                            , da: ["ytp-button", "ytp-mdx-privacy-popup-cancel"]
                            , U: "Cancel"
                        }, {
                            D: "button"
                            , da: ["ytp-button", "ytp-mdx-privacy-popup-confirm"]
                            , U: "Confirm"
                        }]
                    }]
                }]
            });
            this.o = new g.TN(this, 250);
            this.cancelButton = this.aa("ytp-mdx-privacy-popup-cancel");
            this.confirmButton = this.aa("ytp-mdx-privacy-popup-confirm");
            g.E(this, this.o);
            this.K(this.cancelButton, "click", this.u);
            this.K(this.confirmButton, "click", this.A)
        }
        , O8 = function (a) {
            g.X.call(this, {
                D: "div"
                , I: "ytp-remote"
                , M: [{
                    D: "div"
                    , I: "ytp-remote-display-status"
                    , M: [{
                        D: "div"
                        , I: "ytp-remote-display-status-icon"
                        , M: [g.VN()]
                    }, {
                        D: "div"
                        , I: "ytp-remote-display-status-text"
                        , U: "{{statustext}}"
                    }]
                }]
            });
            this.api = a;
            this.o = new g.TN(this, 250);
            g.E(this, this.o);
            this.K(a, "presentingplayerstatechange", this.u);
            nHa(this, g.RM(a))
        }
        , nHa = function (a, b) {
            if (3 === a.api.getPresentingPlayerType()) {
                var c = {
                    RECEIVER_NAME: a.api.getOption("remote", "currentReceiver").name
                };
                c = g.U(b, 128) ? g.iD("Error on $RECEIVER_NAME", c) : b.zb() || g.U(b, 4) ? g.iD("Playing on $RECEIVER_NAME", c) : g.iD("Connected to $RECEIVER_NAME", c);
                a.ka("statustext", c);
                a.o.show()
            }
            else a.o.hide()
        }
        , P8 = function (a, b) {
            g.SR.call(this, "Play on", 0, a, b);
            this.H = a;
            this.Hj = {};
            this.K(a, "onMdxReceiversChange", this.B);
            this.K(a, "presentingplayerstatechange", this.B);
            this.B()
        }
        , Q8 = function (a) {
            g.yN.call(this, a);
            this.Fg = {
                key: k6()
                , name: "This computer"
            };
            this.eh = null;
            this.subscriptions = [];
            this.Rw = this.bb = null;
            this.Hj = [this.Fg];
            this.Ui = this.Fg;
            this.tc = new g.bI(64);
            this.tB = 0;
            this.Jd = -1;
            this.rm = null;
            this.Ro = this.Ar = !1;
            this.il = this.Lm = null;
            if (!g.fz(this.player.N())) {
                a = this.player;
                var b = g.IM(a);
                b && (b = b.uk()) && (b = new P8(a, b), g.E(this, b));
                b = new O8(a);
                g.E(this, b);
                g.kN(a, b.element, 4);
                this.Lm = new N8;
                g.E(this, this.Lm);
                g.kN(a, this.Lm.element, 4);
                g.Q(this.player.N().experiments, "pair_servlet_deprecation_warning_enabled") && (this.rm = new M8, g.E(this, this.rm), g.kN(a, this.rm.element, 4));
                this.Ro = !!w8();
                this.Ar = !!g.gt("yt-remote-manual-pairing-warning-shown")
            }
        }
        , R8 = function (a) {
            a.il && (a.player.removeEventListener("presentingplayerstatechange", a.il), a.il = null)
        }
        , oHa = function (a, b, c) {
            a.tc = c;
            a.player.R("presentingplayerstatechange", new g.ZJ(c, b))
        }
        , pHa = function (a, b, c) {
            var d = !1;
            1 === b ? d = !a.Ro : 2 === b && (d = !a.Ar);
            d && g.aK(c, 8) && (a.player.pauseVideo(), R8(a))
        }
        , S8 = function (a, b) {
            if (b.key !== a.Ui.key)
                if (b.key === a.Fg.key) B8();
                else {
                    if (a.rm && !a.Ar && b !== a.Fg && "cast-selector-receiver" !== b.key && g.oz(a.player.N())) qHa(a);
                    else {
                        var c;
                        (c = !g.Q(a.player.N().experiments, "mdx_enable_privacy_disclosure_ui")) || (c = ((c = g.K("PLAYER_CONFIG")) && c.args && void 0 !== c.args.authuser ? !0 : !(!g.K("SESSION_INDEX") && !g.K("LOGGED_IN"))) || a.Ro || !a.Lm);
                        (c ? 0 : g.oz(a.player.N()) || g.sz(a.player.N())) && rHa(a)
                    }
                    a.Ui = b;
                    var d = a.player.getPlaylistId();
                    c = a.player.getVideoData(1);
                    var e = c.videoId;
                    if (!d && !e || (2 === a.player.getAppState() || 1 === a.player.getAppState()) && g.Q(a.player.N().experiments, "should_clear_video_data_on_player_cued_unstarted")) c = null;
                    else {
                        var f = a.player.getPlaylist();
                        if (f) {
                            var h = [];
                            for (var l = 0; l < f.getLength(); l++) h[l] = f.Aa(l).videoId
                        }
                        else h = [e];
                        f = a.player.getCurrentTime(1);
                        d = {
                            videoIds: h
                            , listId: d
                            , videoId: e
                            , playerParams: c.playerParams
                            , clickTrackingParams: c.Af
                            , index: Math.max(a.player.getPlaylistIndex(), 0)
                            , currentTime: 0 === f ? void 0 : f
                        };
                        (c = JEa(c)) && (d.locationInfo = c);
                        c = d
                    }
                    t8("Connecting to: " + g.Bj(b));
                    "cast-selector-receiver" == b.key ? (v8(c || null), c = c || null, Q7() ? N7().setLaunchParams(c) : L7("setLaunchParams called before ready.")) : !c && E8() && s8() == b.key ? e6("yt-remote-connection-change", !0) : (B8(), v8(c || null), c = r8().yf(), (c = m6(c, b.key)) && C8(c, 1))
                }
        }
        , rHa = function (a) {
            g.RM(a.player).zb() ? a.player.pauseVideo() : (a.il = function (b) {
                pHa(a, 1, b)
            }, a.player.addEventListener("presentingplayerstatechange", a.il));
            a.Lm && a.Lm.dc();
            z8() || (G8 = !0)
        }
        , qHa = function (a) {
            g.RM(a.player).zb() ? a.player.pauseVideo() : (a.il = function (b) {
                pHa(a, 2, b)
            }, a.player.addEventListener("presentingplayerstatechange", a.il));
            a.rm && a.rm.dc();
            z8() || (G8 = !0)
        }
        , vFa = {
            "\x00": "\\0"
            , "\b": "\\b"
            , "\f": "\\f"
            , "\n": "\\n"
            , "\r": "\\r"
            , "\t": "\\t"
            , "\x0B": "\\x0B"
            , '"': '\\"'
            , "\\": "\\\\"
            , "<": "\\u003C"
        }
        , J6 = {
            "'": "\\'"
        }
        , sHa = {}
        , SEa = {
            QQ: "atp"
            , FT: "ska"
            , qT: "que"
            , FS: "mus"
            , ET: "sus"
            , NR: "dsp"
            , xT: "seq"
        }
        , s6, o6 = ""
        , jFa = fFa("loadCastFramework") || fFa("loadCastApplicationFramework")
        , FGa = ["pkedcjkdefgpdelpbcmbmeomcjbeemfm", "enhhojjnijigcajfphajepfemndkmdlo"];
    /*

     Copyright The Closure Library Authors.
     SPDX-License-Identifier: Apache-2.0
    */
    g.Xa(v6, g.C);
    g.k = v6.prototype;
    g.k.GH = function (a) {
        this.B = arguments;
        this.o = !1;
        this.La ? this.A = g.z() + this.oe : this.La = g.Qm(this.C, this.oe)
    };
    g.k.stop = function () {
        this.La && (g.v.clearTimeout(this.La), this.La = null);
        this.A = null;
        this.o = !1;
        this.B = []
    };
    g.k.pause = function () {
        ++this.u
    };
    g.k.resume = function () {
        this.u && (--this.u, !this.u && this.o && (this.o = !1, this.F.apply(null, this.B)))
    };
    g.k.V = function () {
        this.stop();
        v6.Qc.V.call(this)
    };
    g.k.HH = function () {
        this.A ? (this.La = g.Qm(this.C, this.A - g.z()), this.A = null) : (this.La = null, this.u ? this.o = !0 : (this.o = !1, this.F.apply(null, this.B)))
    };
    g.u(w6, g.C);
    g.k = w6.prototype;
    g.k.JB = function (a) {
        this.A = arguments;
        this.La || this.u ? this.o = !0 : x6(this)
    };
    g.k.stop = function () {
        this.La && (g.v.clearTimeout(this.La), this.La = null, this.o = !1, this.A = null)
    };
    g.k.pause = function () {
        this.u++
    };
    g.k.resume = function () {
        this.u--;
        this.u || !this.o || this.La || (this.o = !1, x6(this))
    };
    g.k.V = function () {
        g.C.prototype.V.call(this);
        this.stop()
    };
    z6.prototype.stringify = function (a) {
        return g.v.JSON.stringify(a, void 0)
    };
    z6.prototype.parse = function (a) {
        return g.v.JSON.parse(a, void 0)
    };
    A6.prototype.o = null;
    A6.prototype.getOptions = function () {
        var a;
        (a = this.o) || (a = {}, nFa(this) && (a[0] = !0, a[1] = !0), a = this.o = a);
        return a
    };
    var T8;
    g.Xa(mFa, A6);
    T8 = new mFa;
    g.k = B6.prototype;
    g.k.yk = null;
    g.k.Vg = !1;
    g.k.bn = null;
    g.k.ky = null;
    g.k.Pm = null;
    g.k.Wm = null;
    g.k.Qi = null;
    g.k.Ij = null;
    g.k.jl = null;
    g.k.Ed = null;
    g.k.Cp = 0;
    g.k.ah = null;
    g.k.zt = null;
    g.k.ej = null;
    g.k.Xn = -1;
    g.k.BE = !0;
    g.k.ck = !1;
    g.k.gv = 0;
    g.k.Gs = null;
    var sFa = {}
        , E6 = {};
    g.k = B6.prototype;
    g.k.setTimeout = function (a) {
        this.C = a
    };
    g.k.XO = function (a) {
        a = a.target;
        var b = this.Gs;
        b && 3 == S6(a) ? b.JB() : this.xF(a)
    };
    g.k.xF = function (a) {
        try {
            if (a == this.Ed) a: {
                var b = S6(this.Ed)
                    , c = this.Ed.F
                    , d = this.Ed.getStatus();
                if (g.ve && !g.Yd(10) || g.xe && !g.Xd("420+")) {
                    if (4 > b) break a
                }
                else if (3 > b || 3 == b && !g.mg && !U6(this.Ed)) break a;
                this.ck || 4 != b || 7 == c || (8 == c || 0 >= d ? this.o.Lg(3) : this.o.Lg(2));
                L6(this);
                var e = this.Ed.getStatus();
                this.Xn = e;
                var f = U6(this.Ed);
                (this.Vg = 200 == e) ? (4 == b && H6(this), this.F ? (tFa(this, b, f), g.mg && this.Vg && 3 == b && (this.B.ia(this.u, "tick", this.RO), this.u.start())) : G6(this, f), this.Vg && !this.ck && (4 == b ? this.o.Wq(this) : (this.Vg = !1, D6(this)))) : (400 == e && 0 < f.indexOf("Unknown SID") ? (this.ej = 3, F6(13)) : (this.ej = 0, F6(14)), H6(this), I6(this))
            }
        }
        catch (h) {
            this.Ed && U6(this.Ed)
        }
        finally {}
    };
    g.k.RO = function () {
        var a = S6(this.Ed)
            , b = U6(this.Ed);
        this.Cp < b.length && (L6(this), tFa(this, a, b), this.Vg && 4 != a && D6(this))
    };
    g.k.lO = function (a) {
        K6((0, g.x)(this.kO, this, a), 0)
    };
    g.k.kO = function (a) {
        this.ck || (L6(this), G6(this, a), D6(this))
    };
    g.k.FD = function (a) {
        K6((0, g.x)(this.jO, this, a), 0)
    };
    g.k.jO = function (a) {
        this.ck || (H6(this), this.Vg = a, this.o.Wq(this), this.o.Lg(4))
    };
    g.k.cancel = function () {
        this.ck = !0;
        H6(this)
    };
    g.k.wO = function () {
        this.bn = null;
        var a = g.z();
        0 <= a - this.ky ? (2 != this.Wm && this.o.Lg(3), H6(this), this.ej = 2, F6(18), I6(this)) : xFa(this, this.ky - a)
    };
    g.k.getLastError = function () {
        return this.ej
    };
    g.k = AFa.prototype;
    g.k.ev = null;
    g.k.lf = null;
    g.k.Hs = !1;
    g.k.JA = null;
    g.k.Eq = null;
    g.k.Nv = null;
    g.k.fv = null;
    g.k.Yf = null;
    g.k.gi = -1;
    g.k.Wn = null;
    g.k.pn = null;
    g.k.connect = function (a) {
        this.fv = a;
        a = N6(this.o, null, this.fv);
        F6(3);
        this.JA = g.z();
        var b = this.o.J;
        null != b ? (this.Wn = b[0], (this.pn = b[1]) ? (this.Yf = 1, BFa(this)) : (this.Yf = 2, P6(this))) : (b6(a, "MODE", "init"), this.lf = new B6(this, void 0, void 0, void 0), this.lf.yk = this.ev, C6(this.lf, a, !1, null, !0), this.Yf = 0)
    };
    g.k.GG = function (a) {
        if (a) this.Yf = 2, P6(this);
        else {
            F6(4);
            var b = this.o;
            b.oh = b.Si.gi;
            a7(b, 9)
        }
        a && this.Lg(2)
    };
    g.k.xu = function (a) {
        return this.o.xu(a)
    };
    g.k.abort = function () {
        this.lf && (this.lf.cancel(), this.lf = null);
        this.gi = -1
    };
    g.k.IA = function () {
        return !1
    };
    g.k.wD = function (a, b) {
        this.gi = a.Xn;
        if (0 == this.Yf)
            if (b) {
                try {
                    var c = this.u.parse(b)
                }
                catch (d) {
                    c = this.o;
                    c.oh = this.gi;
                    a7(c, 2);
                    return
                }
                this.Wn = c[0];
                this.pn = c[1]
            }
            else c = this.o, c.oh = this.gi, a7(c, 2);
        else if (2 == this.Yf)
            if (this.Hs) F6(7), this.Nv = g.z();
            else if ("11111" == b) {
            if (F6(6), this.Hs = !0, this.Eq = g.z(), c = this.Eq - this.JA, !g.ve || g.Yd(10) || 500 > c) this.gi = 200, this.lf.cancel(), F6(12), O6(this.o, this, !0)
        }
        else F6(8), this.Eq = this.Nv = g.z(), this.Hs = !1
    };
    g.k.Wq = function () {
        this.gi = this.lf.Xn;
        if (this.lf.Vg) 0 == this.Yf ? this.pn ? (this.Yf = 1, BFa(this)) : (this.Yf = 2, P6(this)) : 2 == this.Yf && ((!g.ve || g.Yd(10) ? !this.Hs : 200 > this.Nv - this.Eq) ? (F6(11), O6(this.o, this, !1)) : (F6(12), O6(this.o, this, !0)));
        else {
            0 == this.Yf ? F6(9) : 2 == this.Yf && F6(10);
            var a = this.o;
            this.lf.getLastError();
            a.oh = this.gi;
            a7(a, 2)
        }
    };
    g.k.kp = function () {
        return this.o.kp()
    };
    g.k.isActive = function () {
        return this.o.isActive()
    };
    g.k.Lg = function (a) {
        this.o.Lg(a)
    };
    g.Xa(Q6, g.fm);
    var GFa = /^https?$/i
        , tHa = ["POST", "PUT"];
    g.k = Q6.prototype;
    g.k.send = function (a, b, c, d) {
        if (this.o) throw Error("[goog.net.XhrIo] Object is active with another request=" + this.L + "; newUri=" + a);
        b = b ? b.toUpperCase() : "GET";
        this.L = a;
        this.B = "";
        this.F = 0;
        this.na = b;
        this.X = !1;
        this.A = !0;
        this.o = this.W ? oFa(this.W) : oFa(T8);
        this.T = this.W ? this.W.getOptions() : T8.getOptions();
        this.o.onreadystatechange = (0, g.x)(this.sD, this);
        try {
            d6(T6(this, "Opening Xhr")), this.ba = !0, this.o.open(b, String(a), !0), this.ba = !1
        }
        catch (f) {
            d6(T6(this, "Error opening Xhr: " + f.message));
            FFa(this, f);
            return
        }
        a = c || "";
        var e = this.headers.clone();
        d && OEa(d, function (f, h) {
            e.set(h, f)
        });
        d = g.gb(e.Wf(), DFa);
        c = g.v.FormData && a instanceof g.v.FormData;
        !g.nb(tHa, b) || d || c || e.set("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
        e.forEach(function (f, h) {
            this.o.setRequestHeader(h, f)
        }, this);
        this.ma && (this.o.responseType = this.ma);
        "withCredentials" in this.o && this.o.withCredentials !== this.Z && (this.o.withCredentials = this.Z);
        try {
            IFa(this), 0 < this.G && (this.S = CFa(this.o), d6(T6(this, "Will abort after " + this.G + "ms if incomplete, xhr2 " + this.S)), this.S ? (this.o.timeout = this.G, this.o.ontimeout = (0, g.x)(this.KA, this)) : this.O = g.Qm(this.KA, this.G, this)), d6(T6(this, "Sending request")), this.J = !0, this.o.send(a), this.J = !1
        }
        catch (f) {
            d6(T6(this, "Send error: " + f.message)), FFa(this, f)
        }
    };
    g.k.KA = function () {
        "undefined" != typeof g.g1 && this.o && (this.B = "Timed out after " + this.G + "ms, aborting", this.F = 8, T6(this, this.B), this.dispatchEvent("timeout"), this.abort(8))
    };
    g.k.abort = function (a) {
        this.o && this.A && (T6(this, "Aborting"), this.A = !1, this.C = !0, this.o.abort(), this.C = !1, this.F = a || 7, this.dispatchEvent("complete"), this.dispatchEvent("abort"), R6(this))
    };
    g.k.V = function () {
        this.o && (this.A && (this.A = !1, this.C = !0, this.o.abort(), this.C = !1), R6(this, !0));
        Q6.Qc.V.call(this)
    };
    g.k.sD = function () {
        this.fa() || (this.ba || this.J || this.C ? HFa(this) : this.tN())
    };
    g.k.tN = function () {
        HFa(this)
    };
    g.k.isActive = function () {
        return !!this.o
    };
    g.k.getStatus = function () {
        try {
            return 2 < S6(this) ? this.o.status : -1
        }
        catch (a) {
            return -1
        }
    };
    g.k.getLastError = function () {
        return "string" === typeof this.B ? this.B : String(this.B)
    };
    g.k = V6.prototype;
    g.k.Zl = null;
    g.k.Jn = null;
    g.k.af = null;
    g.k.Zc = null;
    g.k.dv = null;
    g.k.Gq = null;
    g.k.nz = null;
    g.k.Vq = null;
    g.k.Fo = 0;
    g.k.SK = 0;
    g.k.le = null;
    g.k.Wi = null;
    g.k.Qh = null;
    g.k.ik = null;
    g.k.Si = null;
    g.k.wt = null;
    g.k.om = -1;
    g.k.sB = -1;
    g.k.oh = -1;
    g.k.Ul = 0;
    g.k.Hl = 0;
    g.k.dk = 8;
    var b7 = new g.fm;
    g.Xa(KFa, g.Jl);
    g.Xa(LFa, g.Jl);
    g.Xa(MFa, g.Jl);
    g.k = V6.prototype;
    g.k.connect = function (a, b, c, d, e) {
        F6(0);
        this.dv = b;
        this.Jn = c || {};
        d && void 0 !== e && (this.Jn.OSID = d, this.Jn.OAID = e);
        this.F ? (K6((0, g.x)(this.Ez, this, a), 100), QFa(this)) : this.Ez(a)
    };
    g.k.Ez = function (a) {
        this.Si = new AFa(this);
        this.Si.ev = this.Zl;
        this.Si.u = this.C;
        this.Si.connect(a)
    };
    g.k.IA = function () {
        return 0 == this.o
    };
    g.k.ED = function (a) {
        this.Wi = null;
        TFa(this, a)
    };
    g.k.DD = function () {
        this.Qh = null;
        this.Zc = new B6(this, this.A, "rpc", this.G);
        this.Zc.yk = this.Zl;
        this.Zc.gv = 0;
        var a = this.nz.clone();
        $5(a, "RID", "rpc");
        $5(a, "SID", this.A);
        $5(a, "CI", this.wt ? "0" : "1");
        $5(a, "AID", this.om);
        W6(this, a);
        if (!g.ve || g.Yd(10)) $5(a, "TYPE", "xmlhttp"), C6(this.Zc, a, !0, this.Vq, !1);
        else {
            $5(a, "TYPE", "html");
            var b = this.Zc
                , c = !!this.Vq;
            b.Wm = 3;
            b.Qi = a6(a.clone());
            wFa(b, c)
        }
    };
    g.k.wD = function (a, b) {
        if (0 != this.o && (this.Zc == a || this.af == a))
            if (this.oh = a.Xn, this.af == a && 3 == this.o)
                if (7 < this.dk) {
                    try {
                        var c = this.C.parse(b)
                    }
                    catch (f) {
                        c = null
                    }
                    if (Array.isArray(c) && 3 == c.length)
                        if (0 == c[0]) a: {
                            if (!this.Qh) {
                                if (this.Zc)
                                    if (this.Zc.Pm + 3E3 < this.af.Pm) Y6(this), this.Zc.cancel(), this.Zc = null;
                                    else break a;
                                $6(this);
                                F6(19)
                            }
                        }
                        else this.sB = c[1], 0 < this.sB - this.om && 37500 > c[2] && this.wt && 0 == this.Hl && !this.ik && (this.ik = K6((0, g.x)(this.wL, this), 6E3));
                        else a7(this, 11)
                }
                else b != sHa.nR.o && a7(this, 11);
        else if (this.Zc == a && Y6(this), !g.qc(b)) {
            c = this.C.parse(b);
            for (var d = 0; d < c.length; d++) {
                var e = c[d];
                this.om = e[0];
                e = e[1];
                2 == this.o ? "c" == e[0] ? (this.A = e[1], this.Vq = e[2], e = e[3], null != e ? this.dk = e : this.dk = 6, this.o = 3, this.le && this.le.Az(), this.nz = N6(this, this.kp() ? this.Vq : null, this.dv), UFa(this)) : "stop" == e[0] && a7(this, 7) : 3 == this.o && ("stop" == e[0] ? a7(this, 7) : "noop" != e[0] && this.le && this.le.zz(e), this.Hl = 0)
            }
        }
    };
    g.k.wL = function () {
        null != this.ik && (this.ik = null, this.Zc.cancel(), this.Zc = null, $6(this), F6(20))
    };
    g.k.Wq = function (a) {
        if (this.Zc == a) {
            Y6(this);
            this.Zc = null;
            var b = 2
        }
        else if (this.af == a) this.af = null, b = 1;
        else return;
        this.oh = a.Xn;
        if (0 != this.o)
            if (a.Vg) 1 == b ? (b7.dispatchEvent(new LFa(b7, a.jl ? a.jl.length : 0, g.z() - a.Pm, this.Ul)), X6(this), this.B.length = 0) : UFa(this);
            else {
                var c = a.getLastError()
                    , d;
                if (!(d = 3 == c || 7 == c || 0 == c && 0 < this.oh)) {
                    if (d = 1 == b) this.af || this.Wi || 1 == this.o || 2 <= this.Ul ? d = !1 : (this.Wi = K6((0, g.x)(this.ED, this, a), VFa(this, this.Ul)), this.Ul++, d = !0);
                    d = !(d || 2 == b && $6(this))
                }
                if (d) switch (c) {
                case 1:
                    a7(this, 5);
                    break;
                case 4:
                    a7(this, 10);
                    break;
                case 3:
                    a7(this, 6);
                    break;
                case 7:
                    a7(this, 12);
                    break;
                default:
                    a7(this, 2)
                }
            }
    };
    g.k.eH = function (a) {
        if (!g.nb(arguments, this.o)) throw Error("Unexpected channel state: " + this.o);
    };
    g.k.FP = function (a) {
        a ? F6(2) : (F6(1), WFa(this, 8))
    };
    g.k.xu = function (a) {
        if (a) throw Error("Can't create secondary domain capable XhrIo object.");
        a = new Q6;
        a.Z = !1;
        return a
    };
    g.k.isActive = function () {
        return !!this.le && this.le.isActive(this)
    };
    g.k.Lg = function (a) {
        b7.dispatchEvent(new MFa(b7, a))
    };
    g.k.kp = function () {
        return !(!g.ve || g.Yd(10))
    };
    g.k = XFa.prototype;
    g.k.Az = function () {};
    g.k.zz = function () {};
    g.k.yz = function () {};
    g.k.ku = function () {};
    g.k.jA = function () {
        return {}
    };
    g.k.isActive = function () {
        return !0
    };
    g.k = YFa.prototype;
    g.k.isEmpty = function () {
        return g.ob(this.o) && g.ob(this.u)
    };
    g.k.clear = function () {
        this.o = [];
        this.u = []
    };
    g.k.contains = function (a) {
        return g.nb(this.o, a) || g.nb(this.u, a)
    };
    g.k.remove = function (a) {
        var b = this.o;
        var c = (0, g.Nya)(b, a);
        0 <= c ? (g.qb(b, c), b = !0) : b = !1;
        return b || g.rb(this.u, a)
    };
    g.k.Ee = function () {
        for (var a = [], b = this.o.length - 1; 0 <= b; --b) a.push(this.o[b]);
        var c = this.u.length;
        for (b = 0; b < c; ++b) a.push(this.u[b]);
        return a
    };
    g.Xa(c7, g.C);
    g.k = c7.prototype;
    g.k.eO = function () {
        this.oe = Math.min(3E5, 2 * this.oe);
        this.A();
        this.u && this.start()
    };
    g.k.start = function () {
        var a = this.oe + 15E3 * Math.random();
        this.o.qb(a);
        this.u = g.z() + a
    };
    g.k.stop = function () {
        this.o.stop();
        this.u = 0
    };
    g.k.isActive = function () {
        return this.o.isActive()
    };
    g.k.reset = function () {
        this.o.stop();
        this.oe = 5E3
    };
    g.Xa(d7, XFa);
    g.k = d7.prototype;
    g.k.subscribe = function (a, b, c) {
        return this.A.subscribe(a, b, c)
    };
    g.k.unsubscribe = function (a, b, c) {
        return this.A.unsubscribe(a, b, c)
    };
    g.k.xj = function (a) {
        return this.A.zk(a)
    };
    g.k.R = function (a, b) {
        return this.A.R.apply(this.A, arguments)
    };
    g.k.dispose = function () {
        this.rd || (this.rd = !0, g.Zf(this.A), aGa(this), g.Zf(this.u), this.u = null, this.S = function () {
            return ""
        })
    };
    g.k.fa = function () {
        return this.rd
    };
    g.k.connect = function (a, b, c) {
        if (!this.o || 2 != this.o.o) {
            this.L = "";
            this.u.stop();
            this.C = a || null;
            this.B = b || 0;
            a = this.O + "/test";
            b = this.O + "/bind";
            var d = new V6(c ? c.firstTestResults : null, c ? c.secondTestResults : null, this.T)
                , e = this.o;
            e && (e.le = null);
            d.le = this;
            this.o = d;
            e7(this);
            e ? this.o.connect(a, b, this.F, e.A, e.om) : c ? this.o.connect(a, b, this.F, c.sessionId, c.arrayId) : this.o.connect(a, b, this.F)
        }
    };
    g.k.sendMessage = function (a, b) {
        var c = {
            _sc: a
        };
        b && g.$b(c, b);
        this.u.isActive() || 2 == (this.o ? this.o.o : 0) ? this.G.push(c) : f7(this) && (e7(this), RFa(this.o, c))
    };
    g.k.Az = function () {
        this.u.reset();
        this.C = null;
        this.B = 0;
        if (this.G.length) {
            var a = this.G;
            this.G = [];
            for (var b = 0, c = a.length; b < c; ++b) RFa(this.o, a[b])
        }
        this.R("handlerOpened")
    };
    g.k.yz = function (a) {
        var b = 2 == a && 401 == this.o.oh;
        4 == a || b || this.u.start();
        this.R("handlerError", a)
    };
    g.k.ku = function (a) {
        if (!this.u.isActive()) this.R("handlerClosed");
        else if (a)
            for (var b = 0, c = a.length; b < c; ++b) {
                var d = a[b].map;
                d && this.G.push(d)
            }
    };
    g.k.jA = function () {
        var a = {
            v: 2
        };
        this.L && (a.gsessionid = this.L);
        0 != this.B && (a.ui = "" + this.B);
        0 != this.J && (a.ui = "" + this.J);
        this.C && g.$b(a, this.C);
        return a
    };
    g.k.zz = function (a) {
        "S" == a[0] ? this.L = a[1] : "gracefulReconnect" == a[0] ? (this.u.start(), PFa(this.o)) : this.R("handlerMessage", new ZFa(a[0], a[1]))
    };
    g.k.kP = function () {
        this.u.isActive();
        var a = this.o
            , b = 0;
        a.Zc && b++;
        a.af && b++;
        0 == b && this.connect(this.C, this.B)
    };
    g7.prototype.B = function (a, b, c, d) {
        b ? a(d) : a({
            text: c.responseText
        })
    };
    g7.prototype.A = function (a, b) {
        a(Error("Request error: " + b.status))
    };
    g7.prototype.C = function (a) {
        a(Error("request timed out"))
    };
    var iGa = g.z()
        , j7 = null
        , m7 = Array(50)
        , l7 = -1
        , n7 = !1;
    g.Xa(o7, g.N);
    o7.prototype.yf = function () {
        return this.screens
    };
    o7.prototype.contains = function (a) {
        return !!l6(this.screens, a)
    };
    o7.prototype.get = function (a) {
        return a ? m6(this.screens, a) : null
    };
    o7.prototype.info = function (a) {
        k7(this.F, a)
    };
    g.u(p7, g.N);
    g.k = p7.prototype;
    g.k.start = function () {
        !this.o && isNaN(this.La) && this.CF()
    };
    g.k.stop = function () {
        this.o && (this.o.abort(), this.o = null);
        isNaN(this.La) || (g.Fo(this.La), this.La = NaN)
    };
    g.k.V = function () {
        this.stop();
        g.N.prototype.V.call(this)
    };
    g.k.CF = function () {
        this.La = NaN;
        this.o = g.nq(h7(this.F, "/pairing/get_screen"), {
            method: "POST"
            , Mb: {
                pairing_code: this.C
            }
            , timeout: 5E3
            , onSuccess: (0, g.x)(this.iQ, this)
            , onError: (0, g.x)(this.hQ, this)
            , Hf: (0, g.x)(this.jQ, this)
        })
    };
    g.k.iQ = function (a, b) {
        this.o = null;
        var c = b.screen || {};
        c.dialId = this.A;
        c.name = this.B;
        this.R("pairingComplete", new g6(c))
    };
    g.k.hQ = function (a) {
        this.o = null;
        a.status && 404 == a.status ? this.u >= uHa.length ? this.R("pairingFailed", Error("DIAL polling timed out")) : (a = uHa[this.u], this.La = g.Do((0, g.x)(this.CF, this), a), this.u++) : this.R("pairingFailed", Error("Server error " + a.status))
    };
    g.k.jQ = function () {
        this.o = null;
        this.R("pairingFailed", Error("Server not responding"))
    };
    var uHa = [2E3, 2E3, 1E3, 1E3, 1E3, 2E3, 2E3, 5E3, 5E3, 1E4];
    g.Xa(r7, o7);
    g.k = r7.prototype;
    g.k.start = function () {
        q7(this) && this.R("screenChange");
        !g.gt("yt-remote-lounge-token-expiration") && mGa(this);
        g.Fo(this.o);
        this.o = g.Do((0, g.x)(this.start, this), 1E4)
    };
    g.k.add = function (a, b) {
        q7(this);
        jGa(this, a);
        s7(this, !1);
        this.R("screenChange");
        b(a);
        a.token || mGa(this)
    };
    g.k.remove = function (a, b) {
        var c = q7(this);
        lGa(this, a) && (s7(this, !1), c = !0);
        b(a);
        c && this.R("screenChange")
    };
    g.k.qt = function (a, b, c, d) {
        var e = q7(this)
            , f = this.get(a.id);
        f ? (f.name != b && (f.name = b, s7(this, !1), e = !0), c(a)) : d(Error("no such local screen."));
        e && this.R("screenChange")
    };
    g.k.V = function () {
        g.Fo(this.o);
        r7.Qc.V.call(this)
    };
    g.k.QH = function (a) {
        q7(this);
        var b = this.screens.length;
        a = a && a.screens || [];
        for (var c = 0, d = a.length; c < d; ++c) {
            var e = a[c]
                , f = this.get(e.screenId);
            f && (f.token = e.loungeToken, --b)
        }
        s7(this, !b);
        b && k7(this.F, "Missed " + b + " lounge tokens.")
    };
    g.k.PH = function (a) {
        k7(this.F, "Requesting lounge tokens failed: " + a)
    };
    g.u(u7, g.N);
    g.k = u7.prototype;
    g.k.start = function () {
        var a = parseInt(g.gt("yt-remote-fast-check-period") || "0", 10);
        (this.B = g.z() - 144E5 < a ? 0 : a) ? w7(this): (this.B = g.z() + 3E5, g.ft("yt-remote-fast-check-period", this.B), this.ix())
    };
    g.k.isEmpty = function () {
        return g.Ub(this.o)
    };
    g.k.update = function () {
        t7("Updating availability on schedule.");
        var a = this.F()
            , b = g.Ib(this.o, function (c, d) {
                return c && !!m6(a, d)
            }, this);
        v7(this, b)
    };
    g.k.V = function () {
        g.Fo(this.A);
        this.A = NaN;
        this.u && (this.u.abort(), this.u = null);
        g.N.prototype.V.call(this)
    };
    g.k.ix = function () {
        g.Fo(this.A);
        this.A = NaN;
        this.u && this.u.abort();
        var a = pGa(this);
        if (c6(a)) {
            var b = h7(this.C, "/pairing/get_screen_availability");
            this.u = i7(this.C, b, {
                lounge_token: g.Ob(a).join(",")
            }, (0, g.x)(this.ON, this, a), (0, g.x)(this.NN, this))
        }
        else v7(this, {}), w7(this)
    };
    g.k.ON = function (a, b) {
        this.u = null;
        var c = g.Ob(pGa(this));
        if (g.Eb(c, g.Ob(a))) {
            c = b.screens || [];
            for (var d = {}, e = 0, f = c.length; e < f; ++e) d[a[c[e].loungeToken]] = "online" == c[e].status;
            v7(this, d);
            w7(this)
        }
        else this.Lc("Changing Screen set during request."), this.ix()
    };
    g.k.NN = function (a) {
        this.Lc("Screen availability failed: " + a);
        this.u = null;
        w7(this)
    };
    g.k.Lc = function (a) {
        k7("OnlineScreenService", a)
    };
    g.Xa(x7, o7);
    g.k = x7.prototype;
    g.k.start = function () {
        this.u.start();
        this.o.start();
        this.screens.length && (this.R("screenChange"), this.o.isEmpty() || this.R("onlineScreenChange"))
    };
    g.k.add = function (a, b, c) {
        this.u.add(a, b, c)
    };
    g.k.remove = function (a, b, c) {
        this.u.remove(a, b, c);
        this.o.update()
    };
    g.k.qt = function (a, b, c, d) {
        this.u.contains(a) ? this.u.qt(a, b, c, d) : (a = "Updating name of unknown screen: " + a.name, k7(this.F, a), d(Error(a)))
    };
    g.k.yf = function (a) {
        return a ? this.screens : g.tb(this.screens, g.He(this.A, function (b) {
            return !this.contains(b)
        }, this))
    };
    g.k.DF = function () {
        return g.He(this.yf(!0), function (a) {
            return !!this.o.o[a.id]
        }, this)
    };
    g.k.EF = function (a, b, c, d, e) {
        this.info("getDialScreenByPairingCode " + a + " / " + b);
        var f = new p7(this.C, a, b, c);
        f.subscribe("pairingComplete", (0, g.x)(function (h) {
            g.Zf(f);
            d(y7(this, h))
        }, this));
        f.subscribe("pairingFailed", function (h) {
            g.Zf(f);
            e(h)
        });
        f.start();
        return (0, g.x)(f.stop, f)
    };
    g.k.lQ = function (a, b, c, d) {
        g.nq(h7(this.C, "/pairing/get_screen"), {
            method: "POST"
            , Mb: {
                pairing_code: a
            }
            , timeout: 5E3
            , onSuccess: (0, g.x)(function (e, f) {
                var h = new g6(f.screen || {});
                if (!h.name || tGa(this, h.name)) {
                    a: {
                        var l = h.name;
                        for (var m = 2, n = b(l, m); tGa(this, n);) {
                            m++;
                            if (20 < m) break a;
                            n = b(l, m)
                        }
                        l = n
                    }
                    h.name = l
                }
                c(y7(this, h))
            }, this)
            , onError: (0, g.x)(function (e) {
                d(Error("pairing request failed: " + e.status))
            }, this)
            , Hf: (0, g.x)(function () {
                d(Error("pairing request timed out."))
            }, this)
        })
    };
    g.k.V = function () {
        g.Zf(this.u);
        g.Zf(this.o);
        x7.Qc.V.call(this)
    };
    g.k.XH = function () {
        uGa(this);
        this.R("screenChange");
        this.o.update()
    };
    x7.prototype.dispose = x7.prototype.dispose;
    g.Xa(A7, g.N);
    g.k = A7.prototype;
    g.k.getScreen = function () {
        return this.G
    };
    g.k.ws = function (a) {
        this.G = a;
        this.R("sessionScreen", this.G)
    };
    g.k.Gf = function (a) {
        this.fa() || (a && B7(this, "" + a), this.G = null, this.R("sessionScreen", null))
    };
    g.k.info = function (a) {
        k7(this.T, a)
    };
    g.k.GF = function () {
        return null
    };
    g.k.tx = function (a) {
        var b = this.o;
        a ? (b.displayStatus = new chrome.cast.ReceiverDisplayStatus(a, []), b.displayStatus.showStop = !0) : b.displayStatus = null;
        chrome.cast.setReceiverDisplayStatus(b, (0, g.x)(function () {
            this.info("Updated receiver status for " + b.friendlyName + ": " + a)
        }, this), (0, g.x)(function () {
            B7(this, "Failed to update receiver status for: " + b.friendlyName)
        }, this))
    };
    g.k.V = function () {
        this.tx("");
        A7.Qc.V.call(this)
    };
    g.u(C7, A7);
    g.k = C7.prototype;
    g.k.sx = function (a) {
        if (this.u) {
            if (this.u == a) return;
            B7(this, "Overriding cast sesison with new session object");
            this.u.removeUpdateListener(this.C);
            this.u.removeMessageListener("urn:x-cast:com.google.youtube.mdx", this.B)
        }
        this.u = a;
        this.u.addUpdateListener(this.C);
        this.u.addMessageListener("urn:x-cast:com.google.youtube.mdx", this.B);
        wGa(this)
    };
    g.k.pm = function (a) {
        this.info("launchWithParams no-op for Cast: " + g.Bj(a))
    };
    g.k.stop = function () {
        this.u ? this.u.stop((0, g.x)(function () {
            this.Gf()
        }, this), (0, g.x)(function () {
            this.Gf(Error("Failed to stop receiver app."))
        }, this)) : this.Gf(Error("Stopping cast device witout session."))
    };
    g.k.tx = function () {};
    g.k.V = function () {
        this.info("disposeInternal");
        g.Fo(this.A);
        this.A = 0;
        this.u && (this.u.removeUpdateListener(this.C), this.u.removeMessageListener("urn:x-cast:com.google.youtube.mdx", this.B));
        this.u = null;
        A7.prototype.V.call(this)
    };
    g.k.EO = function (a, b) {
        if (!this.fa())
            if (b) {
                var c = y6(b);
                if (g.Ra(c)) {
                    var d = "" + c.type;
                    c = c.data || {};
                    this.info("onYoutubeMessage_: " + d + " " + g.Bj(c));
                    switch (d) {
                    case "mdxSessionStatus":
                        vGa(this, c.screenId);
                        break;
                    default:
                        B7(this, "Unknown youtube message: " + d)
                    }
                }
                else B7(this, "Unable to parse message.")
            }
            else B7(this, "No data in message.")
    };
    g.k.BA = function (a, b, c, d) {
        sGa(this.J, this.o.label, a, this.o.friendlyName, (0, g.x)(function (e) {
            e ? b(e) : 0 <= d ? (B7(this, "Screen " + a + " appears to be offline. " + d + " retries left."), g.Do((0, g.x)(this.BA, this, a, b, c, d - 1), 300)) : c(Error("Unable to fetch screen."))
        }, this), c)
    };
    g.k.GF = function () {
        return this.u
    };
    g.k.mQ = function (a) {
        this.fa() || a || (B7(this, "Cast session died."), this.Gf())
    };
    g.u(D7, A7);
    g.k = D7.prototype;
    g.k.sx = function (a) {
        this.A = a;
        this.A.addUpdateListener(this.S)
    };
    g.k.pm = function (a) {
        this.O = a;
        this.C()
    };
    g.k.stop = function () {
        this.u();
        this.u = g.Ma;
        g.Fo(this.B);
        this.A ? this.A.stop((0, g.x)(this.Gf, this, null), (0, g.x)(this.Gf, this, "Failed to stop DIAL device.")) : this.Gf()
    };
    g.k.V = function () {
        this.u();
        this.u = g.Ma;
        g.Fo(this.B);
        this.A && this.A.removeUpdateListener(this.S);
        this.A = null;
        A7.prototype.V.call(this)
    };
    g.k.pQ = function (a) {
        this.fa() || a || (B7(this, "DIAL session died."), this.u(), this.u = g.Ma, this.Gf())
    };
    g.k.vv = function (a) {
        this.L = k6();
        if (this.O) {
            var b = new chrome.cast.DialLaunchResponse(!0, yGa(this));
            a(b);
            xGa(this)
        }
        else this.C = (0, g.x)(function () {
            g.Fo(this.B);
            this.C = g.Ma;
            this.B = NaN;
            var c = new chrome.cast.DialLaunchResponse(!0, yGa(this));
            a(c);
            xGa(this)
        }, this), this.B = g.Do((0, g.x)(function () {
            this.C()
        }, this), 100)
    };
    g.k.nI = function (a, b, c) {
        sGa(this.J, this.F.receiver.label, a, this.o.friendlyName, (0, g.x)(function (d) {
            d && d.token ? (this.ws(d), b(new chrome.cast.DialLaunchResponse(!1))) : this.vv(b, c)
        }, this), (0, g.x)(function (d) {
            B7(this, "Failed to get DIAL screen: " + d);
            this.vv(b, c)
        }, this))
    };
    g.u(E7, A7);
    E7.prototype.stop = function () {
        this.Gf()
    };
    E7.prototype.sx = function () {};
    E7.prototype.pm = function () {
        g.Fo(this.u);
        this.u = NaN;
        var a = m6(this.J.yf(), this.o.label);
        a ? this.ws(a) : this.Gf(Error("No such screen"))
    };
    E7.prototype.V = function () {
        g.Fo(this.u);
        this.u = NaN;
        A7.prototype.V.call(this)
    };
    g.u(F7, g.N);
    g.k = F7.prototype;
    g.k.init = function (a, b) {
        chrome.cast.timeout.requestSession = 3E4;
        var c = new chrome.cast.SessionRequest(this.G);
        this.J || (c.dialRequest = new chrome.cast.DialRequest("YouTube"));
        var d = chrome.cast.AutoJoinPolicy.TAB_AND_ORIGIN_SCOPED
            , e = a ? chrome.cast.DefaultActionPolicy.CAST_THIS_TAB : chrome.cast.DefaultActionPolicy.CREATE_SESSION
            , f = (0, g.x)(this.yN, this);
        c = new chrome.cast.ApiConfig(c, (0, g.x)(this.zD, this), f, d, e);
        c.customDialLaunchCallback = (0, g.x)(this.RL, this);
        chrome.cast.initialize(c, (0, g.x)(function () {
            this.fa() || (chrome.cast.addReceiverActionListener(this.B), fGa(), this.u.subscribe("onlineScreenChange", (0, g.x)(this.FF, this)), this.A = AGa(this), chrome.cast.setCustomReceivers(this.A, g.Ma, (0, g.x)(function (h) {
                this.Lc("Failed to set initial custom receivers: " + g.Bj(h))
            }, this)), this.R("yt-remote-cast2-availability-change", H7(this)), b(!0))
        }, this), (0, g.x)(function (h) {
            this.Lc("Failed to initialize API: " + g.Bj(h));
            b(!1)
        }, this))
    };
    g.k.qP = function (a, b) {
        G7("Setting connected screen ID: " + a + " -> " + b);
        if (this.o) {
            var c = this.o.getScreen();
            if (!a || c && c.id != a) G7("Unsetting old screen status: " + this.o.o.friendlyName), I7(this, null)
        }
        if (a && b) {
            if (!this.o) {
                c = m6(this.u.yf(), a);
                if (!c) {
                    G7("setConnectedScreenStatus: Unknown screen.");
                    return
                }
                var d = zGa(this, c);
                d || (G7("setConnectedScreenStatus: Connected receiver not custom..."), d = new chrome.cast.Receiver(c.uuid ? c.uuid : c.id, c.name), d.receiverType = chrome.cast.ReceiverType.CUSTOM, this.A.push(d), chrome.cast.setCustomReceivers(this.A, g.Ma, (0, g.x)(function (e) {
                    this.Lc("Failed to set initial custom receivers: " + g.Bj(e))
                }, this)));
                G7("setConnectedScreenStatus: new active receiver: " + d.friendlyName);
                I7(this, new E7(this.u, d), !0)
            }
            this.o.tx(b)
        }
        else G7("setConnectedScreenStatus: no screen.")
    };
    g.k.rP = function (a) {
        this.fa() ? this.Lc("Setting connection data on disposed cast v2") : this.o ? this.o.pm(a) : this.Lc("Setting connection data without a session")
    };
    g.k.oQ = function () {
        this.fa() ? this.Lc("Stopping session on disposed cast v2") : this.o ? (this.o.stop(), I7(this, null)) : G7("Stopping non-existing session")
    };
    g.k.requestSession = function () {
        chrome.cast.requestSession((0, g.x)(this.zD, this), (0, g.x)(this.RN, this))
    };
    g.k.V = function () {
        this.u.unsubscribe("onlineScreenChange", (0, g.x)(this.FF, this));
        window.chrome && chrome.cast && chrome.cast.removeReceiverActionListener(this.B);
        var a = cGa
            , b = g.La("yt.mdx.remote.debug.handlers_");
        g.rb(b || [], a);
        g.Zf(this.o);
        g.N.prototype.V.call(this)
    };
    g.k.Lc = function (a) {
        k7("Controller", a)
    };
    g.k.BD = function (a, b) {
        this.o == a && (b || I7(this, null), this.R("yt-remote-cast2-session-change", b))
    };
    g.k.uN = function (a, b) {
        if (!this.fa())
            if (a) switch (a.friendlyName = chrome.cast.unescape(a.friendlyName), G7("onReceiverAction_ " + a.label + " / " + a.friendlyName + "-- " + b), b) {
            case chrome.cast.ReceiverAction.CAST:
                if (this.o)
                    if (this.o.o.label != a.label) G7("onReceiverAction_: Stopping active receiver: " + this.o.o.friendlyName), this.o.stop();
                    else {
                        G7("onReceiverAction_: Casting to active receiver.");
                        this.o.getScreen() && this.R("yt-remote-cast2-session-change", this.o.getScreen());
                        break
                    }
                switch (a.receiverType) {
                case chrome.cast.ReceiverType.CUSTOM:
                    I7(this, new E7(this.u, a));
                    break;
                case chrome.cast.ReceiverType.DIAL:
                    I7(this, new D7(this.u, a, this.F));
                    break;
                case chrome.cast.ReceiverType.CAST:
                    I7(this, new C7(this.u, a));
                    break;
                default:
                    this.Lc("Unknown receiver type: " + a.receiverType)
                }
                break;
            case chrome.cast.ReceiverAction.STOP:
                this.o && this.o.o.label == a.label ? this.o.stop() : this.Lc("Stopping receiver w/o session: " + a.friendlyName)
            }
            else this.Lc("onReceiverAction_ called without receiver.")
    };
    g.k.RL = function (a) {
        if (this.fa()) return Promise.reject(Error("disposed"));
        var b = a.receiver;
        b.receiverType != chrome.cast.ReceiverType.DIAL && (this.Lc("Not DIAL receiver: " + b.friendlyName), b.receiverType = chrome.cast.ReceiverType.DIAL);
        var c = this.o ? this.o.o : null;
        if (!c || c.label != b.label) return this.Lc("Receiving DIAL launch request for non-clicked DIAL receiver: " + b.friendlyName), Promise.reject(Error("illegal DIAL launch"));
        if (c && c.label == b.label && c.receiverType != chrome.cast.ReceiverType.DIAL) {
            if (this.o.getScreen()) return G7("Reselecting dial screen.")
                , this.R("yt-remote-cast2-session-change", this.o.getScreen()), Promise.resolve(new chrome.cast.DialLaunchResponse(!1));
            this.Lc('Changing CAST intent from "' + c.receiverType + '" to "dial" for ' + b.friendlyName);
            I7(this, new D7(this.u, b, this.F))
        }
        b = this.o;
        b.F = a;
        return b.F.appState == chrome.cast.DialAppState.RUNNING ? new Promise((0, g.x)(b.nI, b, (b.F.extraData || {}).screenId || null)) : new Promise((0, g.x)(b.vv, b))
    };
    g.k.zD = function (a) {
        if (!this.fa()) {
            G7("New cast session ID: " + a.sessionId);
            var b = a.receiver;
            if (b.receiverType != chrome.cast.ReceiverType.CUSTOM) {
                if (!this.o)
                    if (b.receiverType == chrome.cast.ReceiverType.CAST) G7("Got resumed cast session before resumed mdx connection."), b.friendlyName = chrome.cast.unescape(b.friendlyName), I7(this, new C7(this.u, b), !0);
                    else {
                        this.Lc("Got non-cast session without previous mdx receiver event, or mdx resume.");
                        return
                    }
                var c = this.o.o
                    , d = m6(this.u.yf(), c.label);
                d && h6(d, b.label) && c.receiverType != chrome.cast.ReceiverType.CAST && b.receiverType == chrome.cast.ReceiverType.CAST && (G7("onSessionEstablished_: manual to cast session change " + b.friendlyName), g.Zf(this.o), this.o = new C7(this.u, b), this.o.subscribe("sessionScreen", (0, g.x)(this.BD, this, this.o)), this.o.pm(null));
                this.o.sx(a)
            }
        }
    };
    g.k.nQ = function () {
        return this.o ? this.o.GF() : null
    };
    g.k.RN = function (a) {
        this.fa() || (this.Lc("Failed to estabilish a session: " + g.Bj(a)), a.code != chrome.cast.ErrorCode.CANCEL && I7(this, null))
    };
    g.k.yN = function (a) {
        G7("Receiver availability updated: " + a);
        if (!this.fa()) {
            var b = H7(this);
            this.C = a == chrome.cast.ReceiverAvailability.AVAILABLE;
            H7(this) != b && this.R("yt-remote-cast2-availability-change", H7(this))
        }
    };
    g.k.FF = function () {
        this.fa() || (this.A = AGa(this), G7("Updating custom receivers: " + g.Bj(this.A)), chrome.cast.setCustomReceivers(this.A, g.Ma, (0, g.x)(function () {
            this.Lc("Failed to set custom receivers.")
        }, this)), this.R("yt-remote-cast2-availability-change", H7(this)))
    };
    F7.prototype.setLaunchParams = F7.prototype.rP;
    F7.prototype.setConnectedScreenStatus = F7.prototype.qP;
    F7.prototype.stopSession = F7.prototype.oQ;
    F7.prototype.getCastSession = F7.prototype.nQ;
    F7.prototype.requestSession = F7.prototype.requestSession;
    F7.prototype.init = F7.prototype.init;
    F7.prototype.dispose = F7.prototype.dispose;
    var O7 = [];
    g.k = T7.prototype;
    g.k.reset = function (a) {
        this.listId = "";
        this.index = -1;
        this.videoId = "";
        U7(this);
        this.volume = -1;
        this.muted = !1;
        a && (this.index = a.index, this.listId = a.listId, this.videoId = a.videoId, this.playerState = a.playerState, this.volume = a.volume, this.muted = a.muted, this.audioTrackId = a.audioTrackId, this.o = a.trackData, this.ph = a.hasPrevious, this.hasNext = a.hasNext, this.G = a.playerTime, this.F = a.playerTimeAt, this.C = a.seekableStart, this.u = a.seekableEnd, this.J = a.duration, this.L = a.loadedTime, this.B = a.liveIngestionTime, this.A = !isNaN(this.B))
    };
    g.k.zb = function () {
        return 1 == this.playerState
    };
    g.k.isAdPlaying = function () {
        return 1081 == this.playerState
    };
    g.k.getDuration = function () {
        return this.A ? this.J + V7(this) : this.J
    };
    g.k.clone = function () {
        return new T7(Z7(this))
    };
    g.u(a8, g.N);
    g.k = a8.prototype;
    g.k.play = function () {
        1 == this.o ? (this.u ? this.u.play(null, g.Ma, g8(this, "play")) : f8(this, "play"), e8(this, 1, X7(b8(this))), this.R("remotePlayerChange")) : c8(this, this.play)
    };
    g.k.pause = function () {
        1 == this.o ? (this.u ? this.u.pause(null, g.Ma, g8(this, "pause")) : f8(this, "pause"), e8(this, 2, X7(b8(this))), this.R("remotePlayerChange")) : c8(this, this.pause)
    };
    g.k.seekTo = function (a) {
        if (1 == this.o) {
            if (this.u) {
                var b = b8(this)
                    , c = new chrome.cast.media.SeekRequest;
                c.currentTime = a;
                b.zb() || 3 == b.playerState ? c.resumeState = chrome.cast.media.ResumeState.PLAYBACK_START : c.resumeState = chrome.cast.media.ResumeState.PLAYBACK_PAUSE;
                this.u.seek(c, g.Ma, g8(this, "seekTo", {
                    newTime: a
                }))
            }
            else f8(this, "seekTo", {
                newTime: a
            });
            e8(this, 3, a);
            this.R("remotePlayerChange")
        }
        else c8(this, g.Ua(this.seekTo, a))
    };
    g.k.stop = function () {
        if (1 == this.o) {
            this.u ? this.u.stop(null, g.Ma, g8(this, "stopVideo")) : f8(this, "stopVideo");
            var a = b8(this);
            a.index = -1;
            a.videoId = "";
            U7(a);
            d8(this, a);
            this.R("remotePlayerChange")
        }
        else c8(this, this.stop)
    };
    g.k.setVolume = function (a, b) {
        if (1 == this.o) {
            var c = b8(this);
            if (this.A) {
                if (c.volume != a) {
                    var d = Math.round(a) / 100;
                    this.A.setReceiverVolumeLevel(d, (0, g.x)(function () {
                        k7("CP", "set receiver volume: " + d)
                    }, this), (0, g.x)(function () {
                        this.Lc("failed to set receiver volume.")
                    }, this))
                }
                c.muted != b && this.A.setReceiverMuted(b, (0, g.x)(function () {
                    k7("CP", "set receiver muted: " + b)
                }, this), (0, g.x)(function () {
                    this.Lc("failed to set receiver muted.")
                }, this))
            }
            else {
                var e = {
                    volume: a
                    , muted: b
                }; - 1 != c.volume && (e.delta = a - c.volume);
                f8(this, "setVolume", e)
            }
            c.muted = b;
            c.volume = a;
            d8(this, c)
        }
        else c8(this, g.Ua(this.setVolume, a, b))
    };
    g.k.BF = function (a, b) {
        if (1 == this.o) {
            var c = b8(this)
                , d = {
                    videoId: a
                };
            b && (c.o = {
                trackName: b.name
                , languageCode: b.languageCode
                , sourceLanguageCode: b.translationLanguage ? b.translationLanguage.languageCode : ""
                , languageName: b.languageName
                , kind: b.kind
            }, d.style = g.Bj(b.style), g.$b(d, c.o));
            f8(this, "setSubtitlesTrack", d);
            d8(this, c)
        }
        else c8(this, g.Ua(this.BF, a, b))
    };
    g.k.setAudioTrack = function (a, b) {
        if (1 == this.o) {
            var c = b.getLanguageInfo().getId();
            f8(this, "setAudioTrack", {
                videoId: a
                , audioTrackId: c
            });
            var d = b8(this);
            d.audioTrackId = c;
            d8(this, d)
        }
        else c8(this, g.Ua(this.setAudioTrack, a, b))
    };
    g.k.playVideo = function (a, b, c, d, e, f, h) {
        var l = b8(this);
        c = c || 0;
        var m = {
            videoId: a
            , currentIndex: c
        };
        Y7(l, a, c);
        void 0 !== b && (W7(l, b), m.currentTime = b);
        void 0 !== d && (m.listId = d);
        null != e && (m.playerParams = e);
        null != f && (m.clickTrackingParams = f);
        null != h && (m.locationInfo = g.Bj(h));
        f8(this, "setPlaylist", m);
        d || d8(this, l)
    };
    g.k.Cs = function (a, b) {
        if (1 == this.o) {
            if (a && b) {
                var c = b8(this);
                Y7(c, a, b);
                d8(this, c)
            }
            f8(this, "previous")
        }
        else c8(this, g.Ua(this.Cs, a, b))
    };
    g.k.nextVideo = function (a, b) {
        if (1 == this.o) {
            if (a && b) {
                var c = b8(this);
                Y7(c, a, b);
                d8(this, c)
            }
            f8(this, "next")
        }
        else c8(this, g.Ua(this.nextVideo, a, b))
    };
    g.k.Qz = function () {
        1 == this.o ? f8(this, "dismissAutoplay") : c8(this, this.Qz)
    };
    g.k.dispose = function () {
        if (3 != this.o) {
            var a = this.o;
            this.o = 3;
            this.R("proxyStateChange", a, this.o)
        }
        g.N.prototype.dispose.call(this)
    };
    g.k.V = function () {
        NGa(this);
        this.B = null;
        this.C.clear();
        $7(this, null);
        g.N.prototype.V.call(this)
    };
    g.k.my = function (a) {
        if ((a != this.o || 2 == a) && 3 != this.o && 0 != a) {
            var b = this.o;
            this.o = a;
            this.R("proxyStateChange", b, a);
            if (1 == a)
                for (; !this.C.isEmpty();) b = a = this.C, g.ob(b.o) && (b.o = b.u, b.o.reverse(), b.u = []), a.o.pop().apply(this);
            else 3 == a && this.dispose()
        }
    };
    g.k.qN = function (a, b) {
        this.R(a, b)
    };
    g.k.EL = function (a) {
        if (!a) this.Jo(null), $7(this, null);
        else if (this.A.receiver.volume) {
            a = this.A.receiver.volume;
            var b = b8(this)
                , c = Math.round(100 * a.level || 0);
            if (b.volume != c || b.muted != a.muted) k7("CP", "Cast volume update: " + a.level + (a.muted ? " muted" : "")), b.volume = c, b.muted = !!a.muted, d8(this, b)
        }
    };
    g.k.Jo = function (a) {
        k7("CP", "Cast media: " + !!a);
        this.u && this.u.removeUpdateListener(this.J);
        if (this.u = a) this.u.addUpdateListener(this.J), OGa(this), this.R("remotePlayerChange")
    };
    g.k.DL = function (a) {
        a ? (OGa(this), this.R("remotePlayerChange")) : this.Jo(null)
    };
    g.k.Kx = function () {
        f8(this, "sendDebugCommand", {
            debugCommand: "stats4nerds "
        })
    };
    g.k.ML = function () {
        var a = KGa();
        a && $7(this, a)
    };
    g.k.Lc = function (a) {
        k7("CP", a)
    };
    g.u(h8, g.N);
    g.k = h8.prototype;
    g.k.connect = function (a, b) {
        if (b) {
            var c = b.listId
                , d = b.videoId
                , e = b.playerParams
                , f = b.clickTrackingParams
                , h = b.index
                , l = {
                    videoId: d
                }
                , m = b.currentTime
                , n = b.locationInfo;
            void 0 !== m && (l.currentTime = 5 >= m ? 0 : m);
            e && (l.playerParams = e);
            n && (l.locationInfo = n);
            f && (l.clickTrackingParams = f);
            c && (l.listId = c);
            void 0 !== h && (l.currentIndex = h);
            c && (this.sb.listId = c);
            this.sb.videoId = d;
            this.sb.index = h || 0;
            this.sb.state = 3;
            W7(this.sb, m);
            this.B = "UNSUPPORTED";
            i8("Connecting with setPlaylist and params: " + g.Bj(l));
            this.o.connect({
                method: "setPlaylist"
                , params: g.Bj(l)
            }, a, $Ea())
        }
        else i8("Connecting without params"), this.o.connect({}, a, $Ea());
        QGa(this)
    };
    g.k.dispose = function () {
        this.fa() || (this.R("beforeDispose"), j8(this, 3));
        g.N.prototype.dispose.call(this)
    };
    g.k.V = function () {
        k8(this);
        m8(this);
        l8(this);
        g.Fo(this.G);
        this.G = NaN;
        g.Fo(this.J);
        this.J = NaN;
        this.A = null;
        g.ap(this.T);
        this.T.length = 0;
        this.o.dispose();
        g.N.prototype.V.call(this);
        this.B = this.F = this.u = this.sb = this.o = null
    };
    g.k.JH = function () {
        this.Ql(2)
    };
    g.k.IL = function () {
        i8("Channel opened");
        this.S && (this.S = !1, l8(this), this.O = g.Do((0, g.x)(function () {
            i8("Timing out waiting for a screen.");
            this.Ql(1)
        }, this), 15E3));
        dFa($Fa(this.o), this.W)
    };
    g.k.FL = function () {
        i8("Channel closed");
        isNaN(this.C) ? r6(!0) : r6();
        this.dispose()
    };
    g.k.GL = function (a) {
        r6();
        isNaN(this.Sn()) ? (i8("Channel error: " + a + " without reconnection"), this.dispose()) : (this.S = !0, i8("Channel error: " + a + " with reconnection in " + this.Sn() + " ms"), j8(this, 2))
    };
    g.k.HL = function (a) {
        a.params ? i8("Received: action=" + a.action + ", params=" + g.Bj(a.params)) : i8("Received: action=" + a.action + " {}");
        switch (a.action) {
        case "loungeStatus":
            a = y6(a.params.devices);
            this.u = g.Nc(a, function (c) {
                return new f6(c)
            });
            a = !!g.gb(this.u, function (c) {
                return "LOUNGE_SCREEN" == c.type
            });
            TGa(this, a);
            break;
        case "loungeScreenDisconnected":
            g.sb(this.u, function (c) {
                return "LOUNGE_SCREEN" == c.type
            });
            TGa(this, !1);
            break;
        case "remoteConnected":
            var b = new f6(y6(a.params.device));
            g.gb(this.u, function (c) {
                return b ? c.id == b.id : !1
            }) || KEa(this.u, b);
            break;
        case "remoteDisconnected":
            b = new f6(y6(a.params.device));
            g.sb(this.u, function (c) {
                return b ? c.id == b.id : !1
            });
            break;
        case "gracefulDisconnect":
            break;
        case "playlistModified":
            VGa(this, a);
            break;
        case "nowPlaying":
            XGa(this, a);
            break;
        case "onStateChange":
            WGa(this, a);
            break;
        case "onAdStateChange":
            YGa(this, a);
            break;
        case "onVolumeChanged":
            ZGa(this, a);
            break;
        case "onSubtitlesTrackChanged":
            UGa(this, a);
            break;
        case "nowAutoplaying":
            $Ga(this, a);
            break;
        case "autoplayDismissed":
            this.R("autoplayDismissed");
            break;
        case "autoplayUpNext":
            this.F = a.params.videoId || null;
            this.R("autoplayUpNext", this.F);
            break;
        case "onAutoplayModeChanged":
            this.B = a.params.autoplayMode;
            this.R("autoplayModeChange", this.B);
            "DISABLED" == this.B && this.R("autoplayDismissed");
            break;
        case "onHasPreviousNextChanged":
            aHa(this, a);
            break;
        case "requestAssistedSignIn":
            this.R("assistedSignInRequested", a.params.authCode);
            break;
        default:
            i8("Unrecognized action: " + a.action)
        }
    };
    g.k.gP = function () {
        if (this.A) {
            var a = this.A;
            this.A = null;
            this.sb.videoId != a && n8(this, "getNowPlaying")
        }
    };
    g.k.zH = function () {
        var a = 3;
        this.fa() || (a = 0, isNaN(this.Sn()) ? f7(this.o) && isNaN(this.C) && (a = 1) : a = 2);
        return a
    };
    g.k.Ql = function (a) {
        i8("Disconnecting with " + a);
        k8(this);
        this.R("beforeDisconnect", a);
        1 == a && r6();
        aGa(this.o, a);
        this.dispose()
    };
    g.k.xH = function () {
        var a = this.sb;
        this.A && (a = this.sb.clone(), Y7(a, this.A, a.index));
        return Z7(a)
    };
    g.k.sP = function (a) {
        var b = new T7(a);
        b.videoId && b.videoId != this.sb.videoId && (this.A = b.videoId, g.Fo(this.G), this.G = g.Do((0, g.x)(this.gP, this), 5E3));
        var c = [];
        this.sb.listId == b.listId && this.sb.videoId == b.videoId && this.sb.index == b.index || c.push("remoteQueueChange");
        this.sb.playerState == b.playerState && this.sb.volume == b.volume && this.sb.muted == b.muted && X7(this.sb) == X7(b) && g.Bj(this.sb.o) == g.Bj(b.o) || c.push("remotePlayerChange");
        this.sb.reset(a);
        g.B(c, function (d) {
            this.R(d)
        }, this)
    };
    g.k.zA = function () {
        var a = this.o.F.id
            , b = g.gb(this.u, function (c) {
                return "REMOTE_CONTROL" == c.type && c.id != a
            });
        return b ? b.id : ""
    };
    g.k.Sn = function () {
        var a = this.o;
        return a.u.isActive() ? a.u.u - g.z() : NaN
    };
    g.k.mH = function () {
        return this.B || "UNSUPPORTED"
    };
    g.k.nH = function () {
        return this.F || ""
    };
    g.k.gQ = function () {
        if (!isNaN(this.Sn())) {
            var a = this.o.u;
            g.pn(a.o);
            a.start()
        }
    };
    g.k.oP = function (a, b) {
        n8(this, a, b);
        SGa(this)
    };
    g.k.AF = function () {
        var a = g.wq("SID", "") || ""
            , b = g.wq("SAPISID", "") || "";
        if (!a && !b) return "";
        a = g.lf(g.Re(a), 2);
        b = g.lf(g.Re(b), 2);
        return g.lf(g.Re(a + "," + b), 2)
    };
    h8.prototype.subscribe = h8.prototype.subscribe;
    h8.prototype.unsubscribeByKey = h8.prototype.xj;
    h8.prototype.getProxyState = h8.prototype.zH;
    h8.prototype.disconnect = h8.prototype.Ql;
    h8.prototype.getPlayerContextData = h8.prototype.xH;
    h8.prototype.setPlayerContextData = h8.prototype.sP;
    h8.prototype.getOtherConnectedRemoteId = h8.prototype.zA;
    h8.prototype.getReconnectTimeout = h8.prototype.Sn;
    h8.prototype.getAutoplayMode = h8.prototype.mH;
    h8.prototype.getAutoplayVideoId = h8.prototype.nH;
    h8.prototype.reconnect = h8.prototype.gQ;
    h8.prototype.sendMessage = h8.prototype.oP;
    h8.prototype.getXsrfToken = h8.prototype.AF;
    g.u(o8, o7);
    g.k = o8.prototype;
    g.k.yf = function (a) {
        return this.ne.$_gs(a)
    };
    g.k.contains = function (a) {
        return !!this.ne.$_c(a)
    };
    g.k.get = function (a) {
        return this.ne.$_g(a)
    };
    g.k.start = function () {
        this.ne.$_st()
    };
    g.k.add = function (a, b, c) {
        this.ne.$_a(a, b, c)
    };
    g.k.remove = function (a, b, c) {
        this.ne.$_r(a, b, c)
    };
    g.k.qt = function (a, b, c, d) {
        this.ne.$_un(a, b, c, d)
    };
    g.k.V = function () {
        for (var a = 0, b = this.o.length; a < b; ++a) this.ne.$_ubk(this.o[a]);
        this.o.length = 0;
        this.ne = null;
        o7.prototype.V.call(this)
    };
    g.k.kQ = function () {
        this.R("screenChange")
    };
    g.k.VM = function () {
        this.R("onlineScreenChange")
    };
    x7.prototype.$_st = x7.prototype.start;
    x7.prototype.$_gspc = x7.prototype.lQ;
    x7.prototype.$_gsppc = x7.prototype.EF;
    x7.prototype.$_c = x7.prototype.contains;
    x7.prototype.$_g = x7.prototype.get;
    x7.prototype.$_a = x7.prototype.add;
    x7.prototype.$_un = x7.prototype.qt;
    x7.prototype.$_r = x7.prototype.remove;
    x7.prototype.$_gs = x7.prototype.yf;
    x7.prototype.$_gos = x7.prototype.DF;
    x7.prototype.$_s = x7.prototype.subscribe;
    x7.prototype.$_ubk = x7.prototype.xj;
    var H8 = null
        , G8 = !1
        , p8 = null
        , q8 = null
        , F8 = null
        , u8 = [];
    g.u(I8, g.C);
    g.k = I8.prototype;
    g.k.V = function () {
        g.C.prototype.V.call(this);
        this.o.stop();
        this.u.stop();
        this.G.stop();
        this.O();
        var a = this.bb;
        a.unsubscribe("proxyStateChange", this.vD, this);
        a.unsubscribe("remotePlayerChange", this.Po, this);
        a.unsubscribe("remoteQueueChange", this.xs, this);
        a.unsubscribe("previousNextChange", this.rD, this);
        a.unsubscribe("nowAutoplaying", this.nD, this);
        a.unsubscribe("autoplayDismissed", this.NC, this);
        this.bb = this.module = null
    };
    g.k.ZB = function (a, b) {
        for (var c = [], d = 1; d < arguments.length; ++d) c[d - 1] = arguments[d];
        if (2 != this.bb.o)
            if (J8(this)) {
                if (!b8(this.bb).isAdPlaying() || "control_seek" !== a) switch (a) {
                case "control_toggle_play_pause":
                    b8(this.bb).zb() ? this.bb.pause() : this.bb.play();
                    break;
                case "control_play":
                    this.bb.play();
                    break;
                case "control_pause":
                    this.bb.pause();
                    break;
                case "control_seek":
                    this.F.JB(c[0], c[1]);
                    break;
                case "control_subtitles_set_track":
                    K8(this, c[0]);
                    break;
                case "control_set_audio_track":
                    this.setAudioTrack(c[0])
                }
            }
            else switch (a) {
            case "control_toggle_play_pause":
            case "control_play":
            case "control_pause":
                c = this.H.getCurrentTime();
                L8(this, 0 === c ? void 0 : c);
                break;
            case "control_seek":
                L8(this, c[0]);
                break;
            case "control_subtitles_set_track":
                K8(this, c[0]);
                break;
            case "control_set_audio_track":
                this.setAudioTrack(c[0])
            }
    };
    g.k.CL = function (a) {
        this.G.GH(a)
    };
    g.k.PP = function (a) {
        this.ZB("control_subtitles_set_track", g.Ub(a) ? null : a)
    };
    g.k.OE = function () {
        var a = this.H.getOption("captions", "track");
        g.Ub(a) || K8(this, a)
    };
    g.k.xc = function (a) {
        this.module.xc(a, this.H.getVideoData().lengthSeconds)
    };
    g.k.dD = function (a) {
        if (J8(this)) {
            this.bb.unsubscribe("remotePlayerChange", this.Po, this);
            var b = Math.round(a.volume);
            a = !!a.muted;
            var c = b8(this.bb);
            if (b !== c.volume || a !== c.muted) this.bb.setVolume(b, a), this.J.start();
            this.bb.subscribe("remotePlayerChange", this.Po, this)
        }
    };
    g.k.vM = function () {
        g.Ub(this.A) || mHa(this, this.A);
        this.B = !1
    };
    g.k.vD = function (a, b) {
        this.u.stop();
        2 === b && this.LE()
    };
    g.k.Po = function () {
        if (J8(this)) {
            this.o.stop();
            var a = b8(this.bb);
            switch (a.playerState) {
            case 1080:
            case 1081:
            case 1084:
            case 1085:
                this.module.Jd = 1;
                break;
            case 1082:
            case 1083:
                this.module.Jd = 0;
                break;
            default:
                this.module.Jd = -1
            }
            switch (a.playerState) {
            case 1081:
            case 1:
                this.pd(new g.bI(8));
                this.KE();
                break;
            case 1085:
            case 3:
                this.pd(new g.bI(9));
                break;
            case 1083:
            case 0:
                this.pd(new g.bI(2));
                this.F.stop();
                this.xc(this.H.getVideoData().lengthSeconds);
                break;
            case 1084:
                this.pd(new g.bI(4));
                break;
            case 2:
                this.pd(new g.bI(4));
                this.xc(X7(a));
                break;
            case -1:
                this.pd(new g.bI(64));
                break;
            case -1E3:
                this.pd(new g.bI(128, {
                    errorCode: "mdx.remoteerror"
                    , errorMessage: "This video is not available for remote playback."
                }))
            }
            a = b8(this.bb).o;
            var b = this.A;
            (a || b ? a && b && a.trackName == b.trackName && a.languageCode == b.languageCode && a.languageName == b.languageName && a.kind == b.kind : 1) || (this.A = a, mHa(this, a));
            a = b8(this.bb); - 1 === a.volume || Math.round(this.H.getVolume()) === a.volume && this.H.isMuted() === a.muted || this.J.isActive() || this.mF()
        }
        else lHa(this)
    };
    g.k.rD = function () {
        this.H.R("mdxpreviousnextchange")
    };
    g.k.xs = function () {
        J8(this) || lHa(this)
    };
    g.k.nD = function (a) {
        isNaN(a) || this.H.R("mdxnowautoplaying", a)
    };
    g.k.NC = function () {
        this.H.R("mdxautoplaycanceled")
    };
    g.k.setAudioTrack = function (a) {
        J8(this) && this.bb.setAudioTrack(this.H.getVideoData(1).videoId, a)
    };
    g.k.seekTo = function (a, b) {
        -1 === b8(this.bb).playerState ? L8(this, a) : b && this.bb.seekTo(a)
    };
    g.k.mF = function () {
        if (J8(this)) {
            var a = b8(this.bb);
            this.events.tb(this.L);
            a.muted ? this.H.mute() : this.H.unMute();
            this.H.setVolume(a.volume);
            this.L = this.events.K(this.H, "onVolumeChange", this.dD)
        }
    };
    g.k.KE = function () {
        this.o.stop();
        if (!this.bb.fa()) {
            var a = b8(this.bb);
            a.zb() && this.pd(new g.bI(8));
            this.xc(X7(a));
            this.o.start()
        }
    };
    g.k.LE = function () {
        this.u.stop();
        this.o.stop();
        var a = this.bb.B.getReconnectTimeout();
        2 == this.bb.o && !isNaN(a) && this.u.start()
    };
    g.k.pd = function (a) {
        this.u.stop();
        var b = this.C;
        if (!g.gI(b, a)) {
            var c = g.U(a, 2);
            c !== g.U(this.C, 2) && g.CT(this.H.app, c);
            this.C = a;
            oHa(this.module, b, a)
        }
    };
    g.u(M8, g.X);
    M8.prototype.dc = function () {
        this.o.show()
    };
    M8.prototype.Ta = function () {
        this.o.hide()
    };
    M8.prototype.u = function () {
        g.EO("https://support.google.com/youtube/answer/7640706")
    };
    M8.prototype.A = function () {
        e6("mdx-manual-pairing-popup-ok");
        this.Ta()
    };
    g.u(N8, g.X);
    N8.prototype.dc = function () {
        this.o.show()
    };
    N8.prototype.Ta = function () {
        this.o.hide()
    };
    N8.prototype.u = function () {
        e6("mdx-privacy-popup-cancel");
        this.Ta()
    };
    N8.prototype.A = function () {
        e6("mdx-privacy-popup-confirm");
        this.Ta()
    };
    g.u(O8, g.X);
    O8.prototype.u = function (a) {
        nHa(this, a.state)
    };
    g.u(P8, g.SR);
    P8.prototype.B = function () {
        var a = this.H.getOption("remote", "receivers");
        a && 1 < a.length && !this.H.getOption("remote", "quickCast") ? (this.Hj = g.Gb(a, this.o, this), g.TR(this, g.Nc(a, this.o)), a = this.H.getOption("remote", "currentReceiver"), this.jc(this.o(a)), this.enable(!0)) : this.enable(!1)
    };
    P8.prototype.o = function (a) {
        return a.key
    };
    P8.prototype.Ig = function (a) {
        return "cast-selector-receiver" === a ? "Cast..." : this.Hj[a].name
    };
    P8.prototype.Vd = function (a) {
        g.SR.prototype.Vd.call(this, a);
        this.H.setOption("remote", "currentReceiver", this.Hj[a]);
        this.Ka.Ta()
    };
    g.u(Q8, g.yN);
    g.k = Q8.prototype;
    g.k.create = function () {
        var a = this.player.N()
            , b = g.Wy(a);
        a = {
            device: "Desktop"
            , app: "youtube-desktop"
            , loadCastApiSetupScript: g.Q(a.experiments, "mdx_load_cast_api_bootstrap_script")
        };
        fHa(b, a);
        this.subscriptions.push(g.Ko("yt-remote-before-disconnect", this.AL, this));
        this.subscriptions.push(g.Ko("yt-remote-connection-change", this.zN, this));
        this.subscriptions.push(g.Ko("yt-remote-receiver-availability-change", this.tD, this));
        this.subscriptions.push(g.Ko("yt-remote-auto-connect", this.xN, this));
        this.subscriptions.push(g.Ko("yt-remote-receiver-resumed", this.wN, this));
        this.subscriptions.push(g.Ko("mdx-privacy-popup-confirm", this.VO, this));
        this.subscriptions.push(g.Ko("mdx-privacy-popup-cancel", this.UO, this));
        this.subscriptions.push(g.Ko("mdx-manual-pairing-popup-ok", this.BI, this));
        this.tD()
    };
    g.k.load = function () {
        this.player.cancelPlayback();
        g.yN.prototype.load.call(this);
        this.eh = new I8(this, this.player, this.bb);
        var a = (a = kHa()) ? a.currentTime : 0;
        var b = E8() ? new a8(z8(), void 0) : null;
        0 == a && b && (a = X7(b8(b)));
        0 !== a && this.xc(a);
        oHa(this, this.tc, this.tc);
        g.JT(this.player.app, 6)
    };
    g.k.unload = function () {
        this.player.R("mdxautoplaycanceled");
        this.Ui = this.Fg;
        g.$f(this.eh, this.bb);
        this.bb = this.eh = null;
        g.yN.prototype.unload.call(this);
        g.JT(this.player.app, 5);
        R8(this)
    };
    g.k.V = function () {
        g.Lo(this.subscriptions);
        g.yN.prototype.V.call(this)
    };
    g.k.Dh = function (a, b) {
        for (var c = [], d = 1; d < arguments.length; ++d) c[d - 1] = arguments[d];
        this.loaded && this.eh.ZB.apply(this.eh, [a].concat(g.la(c)))
    };
    g.k.getAdState = function () {
        return this.Jd
    };
    g.k.CH = function () {
        return this.loaded ? this.eh.suggestion : null
    };
    g.k.ph = function () {
        return this.bb ? b8(this.bb).ph : !1
    };
    g.k.hasNext = function () {
        return this.bb ? b8(this.bb).hasNext : !1
    };
    g.k.xc = function (a, b) {
        this.tB = a || 0;
        this.player.R("progresssync", a, b)
    };
    g.k.getCurrentTime = function () {
        return this.tB
    };
    g.k.getProgressState = function () {
        var a = b8(this.bb)
            , b = this.player.getVideoData();
        return {
            allowSeeking: g.Q(this.player.N().experiments, "web_player_mdx_allow_seeking_change_killswitch") ? this.player.Id() : !a.isAdPlaying() && this.player.Id()
            , clipEnd: b.clipEnd
            , clipStart: b.clipStart
            , current: this.getCurrentTime()
            , displayedStart: -1
            , duration: a.getDuration()
            , ingestionTime: a.A ? a.B + V7(a) : a.B
            , isAtLiveHead: 1 >= (a.A ? a.u + V7(a) : a.u) - this.getCurrentTime()
            , loaded: a.L
            , seekableEnd: a.A ? a.u + V7(a) : a.u
            , seekableStart: 0 < a.C ? a.C + V7(a) : a.C
        }
    };
    g.k.nextVideo = function () {
        this.bb && this.bb.nextVideo()
    };
    g.k.Cs = function () {
        this.bb && this.bb.Cs()
    };
    g.k.AL = function (a) {
        1 === a && (this.Rw = this.bb ? b8(this.bb) : null)
    };
    g.k.zN = function () {
        var a = E8() ? new a8(z8(), void 0) : null;
        if (a) {
            var b = this.Ui;
            this.loaded && this.unload();
            this.bb = a;
            this.Rw = null;
            b.key !== this.Fg.key && (this.Ui = b, this.load())
        }
        else g.Zf(this.bb), this.bb = null, this.loaded && (this.unload(), (a = this.Rw) && a.videoId === this.player.getVideoData().videoId && this.player.cueVideoById(a.videoId, X7(a)));
        this.player.R("videodatachange", "newdata", this.player.getVideoData(), 3)
    };
    g.k.tD = function () {
        this.Hj = [this.Fg].concat(hHa());
        var a = A8() || this.Fg;
        S8(this, a);
        this.player.la("onMdxReceiversChange")
    };
    g.k.xN = function () {
        var a = A8();
        S8(this, a)
    };
    g.k.wN = function () {
        this.Ui = A8()
    };
    g.k.VO = function () {
        this.Ro = !0;
        R8(this);
        G8 = !1;
        H8 && C8(H8, 1);
        H8 = null
    };
    g.k.UO = function () {
        this.Ro = !1;
        R8(this);
        S8(this, this.Fg);
        this.Ui = this.Fg;
        G8 = !1;
        H8 = null;
        this.player.playVideo()
    };
    g.k.BI = function () {
        this.Ar = !0;
        R8(this);
        g.ft("yt-remote-manual-pairing-warning-shown", !0, 2592E3);
        G8 = !1;
        H8 && C8(H8, 1);
        H8 = null
    };
    g.k.Fd = function (a, b) {
        switch (a) {
        case "casting":
            return this.loaded;
        case "receivers":
            return this.Hj;
        case "currentReceiver":
            return b && ("cast-selector-receiver" === b.key ? R7() : S8(this, b)), this.loaded ? this.Ui : this.Fg;
        case "quickCast":
            return 2 === this.Hj.length && "cast-selector-receiver" === this.Hj[1].key ? (b && R7(), !0) : !1
        }
    };
    g.k.Kx = function () {
        this.bb.Kx()
    };
    g.k.Ug = function () {
        return !1
    };
    g.k.getOptions = function () {
        return ["casting", "receivers", "currentReceiver", "quickCast"]
    };
    g.JN.remote = Q8;
})(_yt_player);