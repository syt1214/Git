webpackJsonp([10], { 0: function(e, n, o) {
        var t = o(1),
            i = o(4);
        o(72), t(function() { t("#dowebok").fullpage({ navigation: !0, navigationPosition: "right", afterLoad: function(e, n) { t(".section" + n + " .animate").addClass("show"), t(".section" + n + " .animate").removeClass("hide") }, onLeave: function(e, n, o) { t(".section" + e + " .animate").removeClass("show"), t(".section" + e + " .animate").addClass("hide") } }), t(document).on("click", ".pg-next-page", function() { t("#dowebok").fullpage.moveSectionDown() }), t(document).on("click", ".pg-to-top", function() { t("#dowebok").fullpage.moveTo(1) }), t(document).on("click", "#dt-login-page", function() {
                var e = t("#dt-login-page").attr("data-next");
                t(".modal").remove(), i.PopOut.login(e) }), t(document).on("click", ".become-lifer", function() { t.ajax({ url: "/napi/life_artist/profile/create/", type: "POST", data: "", mysuccess: function(e, n) { window.location.href = "/life_artist/index/" } }) }), t(document).on("click", "#cofirm-to-be-lifer", function() { i.PopOut.alert(["堆糖生活家", '<div class="prompt" style="text-align:center;"><div>该账号已绑定手机，点击完成立刻成为堆糖生活家</div><div class="become-lifer" style="margin-top: 10px;display: inline-block;width: 100px;height: 40px;line-height: 40px;font-size: 20px;color: #fff;background: #ff7d7c;cursor: pointer;text-align:center;">完成</div></div>']) }), t(document).on("mousedown", ".to-be-lifer", function() { t.G.hmt("/_trc/shenghuojia/apply") }) }) }, 72: function(e, n, o) {
        var t, i;
        (function(l) {! function(l, a) { "use strict";
                t = [o(1)], i = function(e) {
                    return a(e, l, l.document, l.Math) }.apply(n, t), !(void 0 !== i && (e.exports = i)) }("undefined" != typeof window ? window : this, function(e, n, o, t, i) { "use strict";
                var a = "fullpage-wrapper",
                    r = "." + a,
                    s = "fp-scrollable",
                    c = "." + s,
                    d = "fp-responsive",
                    f = "fp-notransition",
                    u = "fp-destroyed",
                    p = "fp-enabled",
                    h = "fp-viewing",
                    v = "active",
                    m = "." + v,
                    g = "fp-completely",
                    S = "." + g,
                    w = ".section",
                    y = "fp-section",
                    b = "." + y,
                    x = b + m,
                    C = b + ":first",
                    T = b + ":last",
                    k = "fp-tableCell",
                    I = "." + k,
                    L = "fp-auto-height",
                    A = "fp-normal-scroll",
                    E = "fp-nav",
                    M = "#" + E,
                    H = "fp-tooltip",
                    O = "." + H,
                    z = "fp-show-active",
                    B = ".slide",
                    R = "fp-slide",
                    D = "." + R,
                    P = D + m,
                    F = "fp-slides",
                    V = "." + F,
                    U = "fp-slidesContainer",
                    W = "." + U,
                    Y = "fp-table",
                    N = "fp-slidesNav",
                    X = "." + N,
                    q = X + " a",
                    _ = "fp-controlArrow",
                    K = "." + _,
                    j = "fp-prev",
                    G = "." + j,
                    J = _ + " " + j,
                    Q = K + G,
                    Z = "fp-next",
                    $ = "." + Z,
                    ee = _ + " " + Z,
                    ne = K + $,
                    oe = e(n),
                    te = e(o),
                    ie = { scrollbars: !0, mouseWheel: !0, hideScrollbars: !1, fadeScrollbars: !1, disableMouse: !0, interactiveScrollbars: !0 };
                e.fn.fullpage = function(l) {
                    function s() { l.css3 && (l.css3 = Ln()), l.scrollBar = l.scrollBar || l.hybrid, G(), Z(), _n.setAllowScrolling(!0), _n.setAutoScrolling(l.autoScrolling, "internal");
                        var n = e(x).find(P);
                        n.length && (0 !== e(x).index(b) || 0 === e(x).index(b) && 0 !== n.index()) && Dn(n), an(), In(), "complete" === o.readyState && We(), oe.on("load", We) }

                    function c() { oe.on("scroll", ge).on("hashchange", Ye).blur(Ge).resize(ln), te.keydown(Ne).keyup(qe).on("click touchstart", M + " a", Je).on("click touchstart", q, Qe).on("click", O, Xe), e(b).on("click touchstart", K, je), l.normalScrollElements && (te.on("mouseenter", l.normalScrollElements, function() { _n.setMouseWheelScrolling(!1) }), te.on("mouseleave", l.normalScrollElements, function() { _n.setMouseWheelScrolling(!0) })) }

                    function _(e) {
                        var o = e.replace("fp_", "").replace("Extension", "");
                        _n[o] = "undefined" != typeof n[e] ? new n[e] : null }

                    function G() {
                        var n = $n.find(l.sectionSelector);
                        l.anchors.length || (l.anchors = n.filter("[data-anchor]").map(function() {
                            return e(this).data("anchor").toString() }).get()), l.navigationTooltips.length || (l.navigationTooltips = n.filter("[data-tooltip]").map(function() {
                            return e(this).data("tooltip").toString() }).get()) }

                    function Z() { $n.css({ height: "100%", position: "relative" }), $n.addClass(a), e("html").addClass(p), eo = oe.height(), $n.removeClass(u), se(), e(b).each(function(n) {
                            var o = e(this),
                                t = o.find(D),
                                i = t.length;
                            ae(o, n), re(o, n), i > 0 ? $(o, t, i) : l.verticalCentered && vn(o) }), l.fixedElements && l.css3 && e(l.fixedElements).appendTo(qn), l.navigation && de(), ue(), pe(), l.scrollOverflow ? ("complete" === o.readyState && fe(), oe.on("load", fe)) : me() }

                    function $(n, o, t) {
                        var i = 100 * t,
                            a = 100 / t;
                        o.wrapAll('<div class="' + U + '" />'), o.parent().wrap('<div class="' + F + '" />'), n.find(W).css("width", i + "%"), t > 1 && (l.controlArrows && ce(n), l.slidesNavigation && xn(n, t)), o.each(function(n) { e(this).css("width", a + "%"), l.verticalCentered && vn(e(this)) });
                        var r = n.find(P);
                        r.length && (0 !== e(x).index(b) || 0 === e(x).index(b) && 0 !== r.index()) ? Dn(r) : o.eq(0).addClass(v) }

                    function ae(n, o) { o || 0 !== e(x).length || n.addClass(v), n.css("height", eo + "px"), l.paddingTop && n.css("padding-top", l.paddingTop), l.paddingBottom && n.css("padding-bottom", l.paddingBottom), "undefined" != typeof l.sectionsColor[o] && n.css("background-color", l.sectionsColor[o]), "undefined" != typeof l.anchors[o] && n.attr("data-anchor", l.anchors[o]) }

                    function re(n, o) { "undefined" != typeof l.anchors[o] && n.hasClass(v) && fn(l.anchors[o], o), l.menu && l.css3 && e(l.menu).closest(r).length && e(l.menu).appendTo(qn) }

                    function se() { $n.find(l.sectionSelector).addClass(y), $n.find(l.slideSelector).addClass(R) }

                    function ce(e) { e.find(V).after('<div class="' + J + '"></div><div class="' + ee + '"></div>'), "#fff" != l.controlArrowColor && (e.find(ne).css("border-color", "transparent transparent transparent " + l.controlArrowColor), e.find(Q).css("border-color", "transparent " + l.controlArrowColor + " transparent transparent")), l.loopHorizontal || e.find(Q).hide() }

                    function de() { qn.append('<div id="' + E + '"><ul></ul></div>');
                        var n = e(M);
                        n.addClass(function() {
                            return l.showActiveTooltip ? z + " " + l.navigationPosition : l.navigationPosition });
                        for (var o = 0; o < e(b).length; o++) {
                            var t = "";
                            l.anchors.length && (t = l.anchors[o]);
                            var i = '<li><a href="#' + t + '"><span></span></a>',
                                a = l.navigationTooltips[o]; "undefined" != typeof a && "" !== a && (i += '<div class="' + H + " " + l.navigationPosition + '">' + a + "</div>"), i += "</li>", n.find("ul").append(i) }
                        e(M).css("margin-top", "-" + e(M).height() / 2 + "px"), e(M).find("li").eq(e(x).index(b)).find("a").addClass(v) }

                    function fe() { e(b).each(function() {
                            var n = e(this).find(D);
                            n.length ? n.each(function() { hn(e(this)) }) : hn(e(this)) }), me() }

                    function ue() { $n.find('iframe[src*="youtube.com/embed/"]').each(function() { he(e(this), "enablejsapi=1") }) }

                    function pe() { $n.find('iframe[src*="player.vimeo.com/"]').each(function() { he(e(this), "api=1") }) }

                    function he(e, n) {
                        var o = e.attr("src");
                        e.attr("src", o + ve(o) + n) }

                    function ve(e) {
                        return /\?/.test(e) ? "&" : "?" }

                    function me() {
                        var n = e(x);
                        n.addClass(g), l.scrollOverflowHandler.afterRender && l.scrollOverflowHandler.afterRender(n), De(n), Pe(n), e.isFunction(l.afterLoad) && l.afterLoad.call(n, n.data("anchor"), n.index(b) + 1), e.isFunction(l.afterRender) && l.afterRender.call($n) }

                    function ge() {
                        var n;
                        if (!l.autoScrolling || l.scrollBar) {
                            var t = oe.scrollTop(),
                                i = we(t),
                                a = 0,
                                r = t + oe.height() / 2,
                                s = qn.height() - oe.height() === t,
                                c = o.querySelectorAll(b);
                            if (s) a = c.length - 1;
                            else
                                for (var d = 0; d < c.length; ++d) {
                                    var f = c[d];
                                    f.offsetTop <= r && (a = d) }
                            if (Se(i) && (e(x).hasClass(g) || e(x).addClass(g).siblings().removeClass(g)), n = e(c).eq(a), !n.hasClass(v)) { ho = !0;
                                var u = e(x),
                                    p = u.index(b) + 1,
                                    h = un(n),
                                    m = n.data("anchor"),
                                    S = n.index(b) + 1,
                                    w = n.find(P);
                                if (w.length) var y = w.data("anchor"),
                                    C = w.index();
                                to && (n.addClass(v).siblings().removeClass(v), e.isFunction(l.onLeave) && l.onLeave.call(u, p, S, h), e.isFunction(l.afterLoad) && l.afterLoad.call(n, m, S), Ve(u), De(n), Pe(n), fn(m, S - 1), l.anchors.length && (Kn = m), Cn(C, y, m, S)), clearTimeout(co), co = setTimeout(function() { ho = !1 }, 100) }
                            l.fitToSection && (clearTimeout(fo), fo = setTimeout(function() { to && l.fitToSection && (e(x).is(n) && (no = !0), Me(e(x)), no = !1) }, l.fitToSectionDelay)) } }

                    function Se(n) {
                        var o = e(x).position().top,
                            t = o + oe.height();
                        return "up" == n ? t >= oe.scrollTop() + oe.height() : o <= oe.scrollTop() }

                    function we(e) {
                        var n = e > vo ? "down" : "up";
                        return vo = e, bo = e, n }

                    function ye(e, n) {
                        if (lo.m[e]) {
                            var o = "down" === e ? "bottom" : "top",
                                t = "down" === e ? _n.moveSectionDown : _n.moveSectionUp;
                            if (_n.scrollHorizontally && (t = _n.scrollHorizontally.getScrollSection(e, t)), n.length > 0) {
                                if (!l.scrollOverflowHandler.isScrolled(o, n)) return !0;
                                t() } else t() } }

                    function be(n) {
                        var o = n.originalEvent,
                            i = e(o.target).closest(b);
                        if (!xe(n.target) && Ce(o)) { l.autoScrolling && n.preventDefault();
                            var a = l.scrollOverflowHandler.scrollable(i);
                            if (to && !Jn) {
                                var r = Rn(o);
                                So = r.y, wo = r.x, i.find(V).length && t.abs(go - wo) > t.abs(mo - So) ? t.abs(go - wo) > oe.outerWidth() / 100 * l.touchSensitivity && (go > wo ? lo.m.right && _n.moveSlideRight(i) : lo.m.left && _n.moveSlideLeft(i)) : l.autoScrolling && t.abs(mo - So) > oe.height() / 100 * l.touchSensitivity && (mo > So ? ye("down", a) : So > mo && ye("up", a)) } } }

                    function xe(n, o) { o = o || 0;
                        var t = e(n).parent();
                        return o < l.normalScrollElementTouchThreshold && t.is(l.normalScrollElements) ? !0 : o == l.normalScrollElementTouchThreshold ? !1 : xe(t, ++o) }

                    function Ce(e) {
                        return "undefined" == typeof e.pointerType || "mouse" != e.pointerType }

                    function Te(e) {
                        var n = e.originalEvent;
                        if (l.fitToSection && Xn.stop(), Ce(n)) {
                            var o = Rn(n);
                            mo = o.y, go = o.x } }

                    function ke(e, n) {
                        for (var o = 0, i = e.slice(t.max(e.length - n, 1)), l = 0; l < i.length; l++) o += i[l];
                        return t.ceil(o / n) }

                    function Ie(o) {
                        var i = (new Date).getTime(),
                            a = e(S).hasClass(A);
                        if (l.autoScrolling && !Gn && !a) { o = o || n.event;
                            var r = o.wheelDelta || -o.deltaY || -o.detail,
                                s = t.max(-1, t.min(1, r)),
                                c = "undefined" != typeof o.wheelDeltaX || "undefined" != typeof o.deltaX,
                                d = t.abs(o.wheelDeltaX) < t.abs(o.wheelDelta) || t.abs(o.deltaX) < t.abs(o.deltaY) || !c;
                            io.length > 149 && io.shift(), io.push(t.abs(r)), l.scrollBar && (o.preventDefault ? o.preventDefault() : o.returnValue = !1);
                            var f = e(x),
                                u = l.scrollOverflowHandler.scrollable(f),
                                p = i - yo;
                            if (yo = i, p > 200 && (io = []), to) {
                                var h = ke(io, 10),
                                    v = ke(io, 70),
                                    m = h >= v;
                                m && d && (0 > s ? ye("down", u) : ye("up", u)) }
                            return !1 }
                        l.fitToSection && Xn.stop() }

                    function Le(n, o) {
                        var t = "undefined" == typeof o ? e(x) : o,
                            i = t.find(V),
                            a = i.find(D).length;
                        if (!(!i.length || Jn || 2 > a)) {
                            var r = i.find(P),
                                s = null;
                            if (s = "left" === n ? r.prev(D) : r.next(D), !s.length) {
                                if (!l.loopHorizontal) return;
                                s = "left" === n ? r.siblings(":last") : r.siblings(":first") }
                            Jn = !0, en(i, s, n) } }

                    function Ae() { e(P).each(function() { Dn(e(this), "internal") }) }

                    function Ee(e) {
                        var n = e.position(),
                            o = n.top,
                            t = n.top > bo,
                            i = o - eo + e.outerHeight(),
                            a = l.bigSectionsDestination;
                        return e.outerHeight() > eo ? (!t && !a || "bottom" === a) && (o = i) : (t || no && e.is(":last-child")) && (o = i), bo = o, o }

                    function Me(n, o, t) {
                        if ("undefined" != typeof n) {
                            var i = Ee(n),
                                a = { element: n, callback: o, isMovementUp: t, dtop: i, yMovement: un(n), anchorLink: n.data("anchor"), sectionIndex: n.index(b), activeSlide: n.find(P), activeSection: e(x), leavingSection: e(x).index(b) + 1, localIsResizing: no };
                            if (!(a.activeSection.is(n) && !no || l.scrollBar && oe.scrollTop() === a.dtop && !n.hasClass(L))) {
                                if (a.activeSlide.length) var r = a.activeSlide.data("anchor"),
                                    s = a.activeSlide.index();
                                l.autoScrolling && l.continuousVertical && "undefined" != typeof a.isMovementUp && (!a.isMovementUp && "up" == a.yMovement || a.isMovementUp && "down" == a.yMovement) && (a = ze(a)), (!e.isFunction(l.onLeave) || a.localIsResizing || l.onLeave.call(a.activeSection, a.leavingSection, a.sectionIndex + 1, a.yMovement) !== !1) && (Ve(a.activeSection), n.addClass(v).siblings().removeClass(v), De(n), l.scrollOverflowHandler.onLeave(), to = !1, Cn(s, r, a.anchorLink, a.sectionIndex), He(a), Kn = a.anchorLink, fn(a.anchorLink, a.sectionIndex)) } } }

                    function He(n) {
                        if (l.css3 && l.autoScrolling && !l.scrollBar) {
                            var o = "translate3d(0px, -" + n.dtop + "px, 0px)";
                            gn(o, !0), l.scrollingSpeed ? ro = setTimeout(function() { Re(n) }, l.scrollingSpeed) : Re(n) } else {
                            var t = Oe(n);
                            e(t.element).animate(t.options, l.scrollingSpeed, l.easing).promise().done(function() { l.scrollBar ? setTimeout(function() { Re(n) }, 30) : Re(n) }) } }

                    function Oe(e) {
                        var n = {};
                        return l.autoScrolling && !l.scrollBar ? (n.options = { top: -e.dtop }, n.element = r) : (n.options = { scrollTop: e.dtop }, n.element = "html, body"), n }

                    function ze(n) {
                        return n.isMovementUp ? e(x).before(n.activeSection.nextAll(b)) : e(x).after(n.activeSection.prevAll(b).get().reverse()), Pn(e(x).position().top), Ae(), n.wrapAroundElements = n.activeSection, n.dtop = n.element.position().top, n.yMovement = un(n.element), n }

                    function Be(n) { n.wrapAroundElements && n.wrapAroundElements.length && (n.isMovementUp ? e(C).before(n.wrapAroundElements) : e(T).after(n.wrapAroundElements), Pn(e(x).position().top), Ae()) }

                    function Re(n) { Be(n), e.isFunction(l.afterLoad) && !n.localIsResizing && l.afterLoad.call(n.element, n.anchorLink, n.sectionIndex + 1), l.scrollOverflowHandler.afterLoad(), l.resetSliders && _n.resetSliders && _n.resetSliders.apply(n), Pe(n.element), n.element.addClass(g).siblings().removeClass(g), to = !0, e.isFunction(n.callback) && n.callback.call(this) }

                    function De(n) {
                        var n = Ue(n);
                        n.find("img[data-src], source[data-src], audio[data-src], iframe[data-src]").each(function() { e(this).attr("src", e(this).data("src")), e(this).removeAttr("data-src"), e(this).is("source") && e(this).closest("video").get(0).load() }) }

                    function Pe(n) {
                        var n = Ue(n);
                        n.find("video, audio").each(function() {
                            var n = e(this).get(0);
                            n.hasAttribute("data-autoplay") && "function" == typeof n.play && n.play() }), n.find('iframe[src*="youtube.com/embed/"]').each(function() {
                            var n = e(this).get(0);
                            Fe(n), n.onload = function() { Fe(n) } }) }

                    function Fe(e) { e.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', "*") }

                    function Ve(n) {
                        var n = Ue(n);
                        n.find("video, audio").each(function() {
                            var n = e(this).get(0);
                            n.hasAttribute("data-keepplaying") || "function" != typeof n.pause || n.pause() }), n.find('iframe[src*="youtube.com/embed/"]').each(function() {
                            var n = e(this).get(0); /youtube\.com\/embed\//.test(e(this).attr("src")) && !n.hasAttribute("data-keepplaying") && e(this).get(0).contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', "*") }) }

                    function Ue(n) {
                        var o = n.find(P);
                        return o.length && (n = e(o)), n }

                    function We() {
                        var e = n.location.hash.replace("#", "").split("/"),
                            o = decodeURIComponent(e[0]),
                            t = decodeURIComponent(e[1]);
                        o && (l.animateAnchor ? yn(o, t) : _n.silentMoveTo(o, t)) }

                    function Ye() {
                        if (!ho && !l.lockAnchors) {
                            var e = n.location.hash.replace("#", "").split("/"),
                                o = decodeURIComponent(e[0]),
                                t = decodeURIComponent(e[1]),
                                i = "undefined" == typeof Kn,
                                a = "undefined" == typeof Kn && "undefined" == typeof t && !Jn;
                            o.length && (o && o !== Kn && !i || a || !Jn && jn != t) && yn(o, t) } }

                    function Ne(n) { clearTimeout(uo);
                        var o = e(":focus");
                        if (!o.is("textarea") && !o.is("input") && !o.is("select") && "true" !== o.attr("contentEditable") && "" !== o.attr("contentEditable") && l.keyboardScrolling && l.autoScrolling) {
                            var t = n.which,
                                i = [40, 38, 32, 33, 34];
                            e.inArray(t, i) > -1 && n.preventDefault(), Gn = n.ctrlKey, uo = setTimeout(function() { Ze(n) }, 150) } }

                    function Xe() { e(this).prev().trigger("click") }

                    function qe(e) { oo && (Gn = e.ctrlKey) }

                    function _e(e) { 2 == e.which && (xo = e.pageY, $n.on("mousemove", $e)) }

                    function Ke(e) { 2 == e.which && $n.off("mousemove") }

                    function je() {
                        var n = e(this).closest(b);
                        e(this).hasClass(j) ? lo.m.left && _n.moveSlideLeft(n) : lo.m.right && _n.moveSlideRight(n) }

                    function Ge() { oo = !1, Gn = !1 }

                    function Je(n) { n.preventDefault();
                        var o = e(this).parent().index();
                        Me(e(b).eq(o)) }

                    function Qe(n) { n.preventDefault();
                        var o = e(this).closest(b).find(V),
                            t = o.find(D).eq(e(this).closest("li").index());
                        en(o, t) }

                    function Ze(n) {
                        var o = n.shiftKey;
                        switch (n.which) {
                            case 38:
                            case 33:
                                lo.k.up && _n.moveSectionUp();
                                break;
                            case 32:
                                if (o && lo.k.up) { _n.moveSectionUp();
                                    break }
                            case 40:
                            case 34:
                                lo.k.down && _n.moveSectionDown();
                                break;
                            case 36:
                                lo.k.up && _n.moveTo(1);
                                break;
                            case 35:
                                lo.k.down && _n.moveTo(e(b).length);
                                break;
                            case 37:
                                lo.k.left && _n.moveSlideLeft();
                                break;
                            case 39:
                                lo.k.right && _n.moveSlideRight();
                                break;
                            default:
                                return } }

                    function $e(e) { to && (e.pageY < xo && lo.m.up ? _n.moveSectionUp() : e.pageY > xo && lo.m.down && _n.moveSectionDown()), xo = e.pageY }

                    function en(n, o, t) {
                        var i = n.closest(b),
                            a = { slides: n, destiny: o, direction: t, destinyPos: o.position(), slideIndex: o.index(), section: i, sectionIndex: i.index(b), anchorLink: i.data("anchor"), slidesNav: i.find(X), slideAnchor: kn(o), prevSlide: i.find(P), prevSlideIndex: i.find(P).index(), localIsResizing: no };
                        return a.xMovement = pn(a.prevSlideIndex, a.slideIndex), to = !1, l.onSlideLeave && !a.localIsResizing && "none" !== a.xMovement && e.isFunction(l.onSlideLeave) && l.onSlideLeave.call(a.prevSlide, a.anchorLink, a.sectionIndex + 1, a.prevSlideIndex, a.xMovement, a.slideIndex) === !1 ? void(Jn = !1) : (Ve(a.prevSlide), o.addClass(v).siblings().removeClass(v), a.localIsResizing || De(o), !l.loopHorizontal && l.controlArrows && (i.find(Q).toggle(0 !== a.slideIndex), i.find(ne).toggle(!o.is(":last-child"))), i.hasClass(v) && Cn(a.slideIndex, a.slideAnchor, a.anchorLink, a.sectionIndex), _n.continuousHorizontal && _n.continuousHorizontal.apply(a), on(n, a, !0), void(l.interlockedSlides && _n.interlockedSlides && _n.interlockedSlides.apply(a))) }

                    function nn(n) { _n.continuousHorizontal && _n.continuousHorizontal.afterSlideLoads(n), tn(n.slidesNav, n.slideIndex), n.localIsResizing || (e.isFunction(l.afterSlideLoad) && l.afterSlideLoad.call(n.destiny, n.anchorLink, n.sectionIndex + 1, n.slideAnchor, n.slideIndex), to = !0), Pe(n.destiny), Jn = !1, _n.interlockedSlides && _n.interlockedSlides.apply(n) }

                    function on(e, n, o) {
                        var i = n.destinyPos;
                        if (l.css3) {
                            var a = "translate3d(-" + t.round(i.left) + "px, 0px, 0px)";
                            rn(e.find(W)).css(Fn(a)), so = setTimeout(function() { o && nn(n) }, l.scrollingSpeed, l.easing) } else e.animate({ scrollLeft: t.round(i.left) }, l.scrollingSpeed, l.easing, function() { o && nn(n) }) }

                    function tn(e, n) { e.find(m).removeClass(v), e.find("li").eq(n).find("a").addClass(v) }

                    function ln() {
                        if (an(), Qn) {
                            var n = e(o.activeElement);
                            if (!n.is("textarea") && !n.is("input") && !n.is("select")) {
                                var i = oe.height();
                                t.abs(i - Co) > 20 * t.max(Co, i) / 100 && (_n.reBuild(!0), Co = i) } } else clearTimeout(ao), ao = setTimeout(function() { _n.reBuild(!0) }, 350) }

                    function an() {
                        var e = l.responsive || l.responsiveWidth,
                            n = l.responsiveHeight,
                            o = e && oe.outerWidth() < e,
                            t = n && oe.height() < n;
                        e && n ? _n.setResponsive(o || t) : e ? _n.setResponsive(o) : n && _n.setResponsive(t) }

                    function rn(e) {
                        var n = "all " + l.scrollingSpeed + "ms " + l.easingcss3;
                        return e.removeClass(f), e.css({ "-webkit-transition": n, transition: n }) }

                    function sn(e) {
                        return e.addClass(f) }

                    function cn(n, o) { l.navigation && (e(M).find(m).removeClass(v), n ? e(M).find('a[href="#' + n + '"]').addClass(v) : e(M).find("li").eq(o).find("a").addClass(v)) }

                    function dn(n) { l.menu && (e(l.menu).find(m).removeClass(v), e(l.menu).find('[data-menuanchor="' + n + '"]').addClass(v)) }

                    function fn(e, n) { dn(e), cn(e, n) }

                    function un(n) {
                        var o = e(x).index(b),
                            t = n.index(b);
                        return o == t ? "none" : o > t ? "up" : "down" }

                    function pn(e, n) {
                        return e == n ? "none" : e > n ? "left" : "right" }

                    function hn(e) {
                        if (!e.hasClass("fp-noscroll")) { e.css("overflow", "hidden");
                            var n, o = l.scrollOverflowHandler,
                                t = o.wrapContent(),
                                i = e.closest(b),
                                a = o.scrollable(e);
                            a.length ? n = o.scrollHeight(e) : (n = e.get(0).scrollHeight, l.verticalCentered && (n = e.find(I).get(0).scrollHeight));
                            var r = eo - parseInt(i.css("padding-bottom")) - parseInt(i.css("padding-top"));
                            n > r ? a.length ? o.update(e, r) : (l.verticalCentered ? e.find(I).wrapInner(t) : e.wrapInner(t), o.create(e, r)) : o.remove(e), e.css("overflow", "") } }

                    function vn(e) { e.addClass(Y).wrapInner('<div class="' + k + '" style="height:' + mn(e) + 'px;" />') }

                    function mn(e) {
                        var n = eo;
                        if (l.paddingTop || l.paddingBottom) {
                            var o = e;
                            o.hasClass(y) || (o = e.closest(b));
                            var t = parseInt(o.css("padding-top")) + parseInt(o.css("padding-bottom"));
                            n = eo - t }
                        return n }

                    function gn(e, n) { n ? rn($n) : sn($n), $n.css(Fn(e)), setTimeout(function() { $n.removeClass(f) }, 10) }

                    function Sn(n) {
                        var o = $n.find(b + '[data-anchor="' + n + '"]');
                        return o.length || (o = e(b).eq(n - 1)), o }

                    function wn(e, n) {
                        var o = n.find(V),
                            t = o.find(D + '[data-anchor="' + e + '"]');
                        return t.length || (t = o.find(D).eq(e)), t }

                    function yn(e, n) {
                        var o = Sn(e); "undefined" == typeof n && (n = 0), e === Kn || o.hasClass(v) ? bn(o, n) : Me(o, function() { bn(o, n) }) }

                    function bn(e, n) {
                        if ("undefined" != typeof n) {
                            var o = e.find(V),
                                t = wn(n, e);
                            t.length && en(o, t) } }

                    function xn(e, n) { e.append('<div class="' + N + '"><ul></ul></div>');
                        var o = e.find(X);
                        o.addClass(l.slidesNavPosition);
                        for (var t = 0; n > t; t++) o.find("ul").append('<li><a href="#"><span></span></a></li>');
                        o.css("margin-left", "-" + o.width() / 2 + "px"), o.find("li").first().find("a").addClass(v) }

                    function Cn(e, n, o, t) {
                        var i = "";
                        l.anchors.length && !l.lockAnchors && (e ? ("undefined" != typeof o && (i = o), "undefined" == typeof n && (n = e), jn = n, Tn(i + "/" + n)) : "undefined" != typeof e ? (jn = n, Tn(o)) : Tn(o)), In() }

                    function Tn(e) {
                        if (l.recordHistory) location.hash = e;
                        else if (Qn || Zn) n.history.replaceState(i, i, "#" + e);
                        else {
                            var o = n.location.href.split("#")[0];
                            n.location.replace(o + "#" + e) } }

                    function kn(e) {
                        var n = e.data("anchor"),
                            o = e.index();
                        return "undefined" == typeof n && (n = o), n }

                    function In() {
                        var n = e(x),
                            o = n.find(P),
                            t = kn(n),
                            i = kn(o),
                            l = String(t);
                        o.length && (l = l + "-" + i), l = l.replace("/", "-").replace("#", "");
                        var a = new RegExp("\\b\\s?" + h + "-[^\\s]+\\b", "g");
                        qn[0].className = qn[0].className.replace(a, ""), qn.addClass(h + "-" + l) }

                    function Ln() {
                        var e, t = o.createElement("p"),
                            l = { webkitTransform: "-webkit-transform", OTransform: "-o-transform", msTransform: "-ms-transform", MozTransform: "-moz-transform", transform: "transform" };
                        o.body.insertBefore(t, null);
                        for (var a in l) t.style[a] !== i && (t.style[a] = "translate3d(1px,1px,1px)", e = n.getComputedStyle(t).getPropertyValue(l[a]));
                        return o.body.removeChild(t), e !== i && e.length > 0 && "none" !== e }

                    function An() { o.addEventListener ? (o.removeEventListener("mousewheel", Ie, !1), o.removeEventListener("wheel", Ie, !1), o.removeEventListener("MozMousePixelScroll", Ie, !1)) : o.detachEvent("onmousewheel", Ie) }

                    function En() {
                        var e, t = "";
                        n.addEventListener ? e = "addEventListener" : (e = "attachEvent", t = "on");
                        var l = "onwheel" in o.createElement("div") ? "wheel" : o.onmousewheel !== i ? "mousewheel" : "DOMMouseScroll"; "DOMMouseScroll" == l ? o[e](t + "MozMousePixelScroll", Ie, !1) : o[e](t + l, Ie, !1) }

                    function Mn() { $n.on("mousedown", _e).on("mouseup", Ke) }

                    function Hn() { $n.off("mousedown", _e).off("mouseup", Ke) }

                    function On() {
                        if (Qn || Zn) {
                            var n = Bn();
                            e(r).off("touchstart " + n.down).on("touchstart " + n.down, Te).off("touchmove " + n.move).on("touchmove " + n.move, be) } }

                    function zn() {
                        if (Qn || Zn) {
                            var n = Bn();
                            e(r).off("touchstart " + n.down).off("touchmove " + n.move) } }

                    function Bn() {
                        var e;
                        return e = n.PointerEvent ? { down: "pointerdown", move: "pointermove" } : { down: "MSPointerDown", move: "MSPointerMove" } }

                    function Rn(e) {
                        var n = [];
                        return n.y = "undefined" != typeof e.pageY && (e.pageY || e.pageX) ? e.pageY : e.touches[0].pageY, n.x = "undefined" != typeof e.pageX && (e.pageY || e.pageX) ? e.pageX : e.touches[0].pageX, Zn && Ce(e) && l.scrollBar && (n.y = e.touches[0].pageY, n.x = e.touches[0].pageX), n }

                    function Dn(e, n) { _n.setScrollingSpeed(0, "internal"), "undefined" != typeof n && (no = !0), en(e.closest(V), e), "undefined" != typeof n && (no = !1), _n.setScrollingSpeed(po.scrollingSpeed, "internal") }

                    function Pn(e) {
                        if (l.scrollBar) $n.scrollTop(e);
                        else if (l.css3) {
                            var n = "translate3d(0px, -" + e + "px, 0px)";
                            gn(n, !1) } else $n.css("top", -e) }

                    function Fn(e) {
                        return { "-webkit-transform": e, "-moz-transform": e, "-ms-transform": e, transform: e } }

                    function Vn(e, n, o) {
                        switch (n) {
                            case "up":
                                lo[o].up = e;
                                break;
                            case "down":
                                lo[o].down = e;
                                break;
                            case "left":
                                lo[o].left = e;
                                break;
                            case "right":
                                lo[o].right = e;
                                break;
                            case "all":
                                "m" == o ? _n.setAllowScrolling(e) : _n.setKeyboardScrolling(e) } }

                    function Un() { Pn(0), $n.find("img[data-src], source[data-src], audio[data-src], iframe[data-src]").each(function() { e(this).attr("src", e(this).data("src")), e(this).removeAttr("data-src") }), e(M + ", " + X + ", " + K).remove(), e(b).css({ height: "", "background-color": "", padding: "" }), e(D).css({ width: "" }), $n.css({ height: "", position: "", "-ms-touch-action": "", "touch-action": "" }), Xn.css({ overflow: "", height: "" }), e("html").removeClass(p), qn.removeClass(d), e.each(qn.get(0).className.split(/\s+/), function(e, n) { 0 === n.indexOf(h) && qn.removeClass(n) }), e(b + ", " + D).each(function() { l.scrollOverflowHandler.remove(e(this)), e(this).removeClass(Y + " " + v) }), sn($n), $n.find(I + ", " + W + ", " + V).each(function() { e(this).replaceWith(this.childNodes) }), Xn.scrollTop(0);
                        var n = [y, R, U];
                        e.each(n, function(n, o) { e("." + o).removeClass(o) }) }

                    function Wn(e, n, o) { l[e] = n, "internal" !== o && (po[e] = n) }

                    function Yn() {
                        return e("html").hasClass(p) ? void Nn("error", "Fullpage.js can only be initialized once and you are doing it multiple times!") : (l.continuousVertical && (l.loopTop || l.loopBottom) && (l.continuousVertical = !1, Nn("warn", "Option `loopTop/loopBottom` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled")), l.scrollBar && l.scrollOverflow && Nn("warn", "Option `scrollBar` is mutually exclusive with `scrollOverflow`. Sections with scrollOverflow might not work well in Firefox"), l.continuousVertical && l.scrollBar && (l.continuousVertical = !1, Nn("warn", "Option `scrollBar` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled")), void e.each(l.anchors, function(n, o) {
                            var t = te.find("[name]").filter(function() {
                                    return e(this).attr("name") && e(this).attr("name").toLowerCase() == o.toLowerCase() }),
                                i = te.find("[id]").filter(function() {
                                    return e(this).attr("id") && e(this).attr("id").toLowerCase() == o.toLowerCase() });
                            (i.length || t.length) && (Nn("error", "data-anchor tags can not have the same value as any `id` element on the site (or `name` element for IE)."), i.length && Nn("error", '"' + o + '" is is being used by another element `id` property'), t.length && Nn("error", '"' + o + '" is is being used by another element `name` property')) })) }

                    function Nn(e, n) { console && console[e] && console[e]("fullPage: " + n) }
                    if (e("html").hasClass(p)) return void Yn();
                    var Xn = e("html, body"),
                        qn = e("body"),
                        _n = e.fn.fullpage;
                    l = e.extend({ menu: !1, anchors: [], lockAnchors: !1, navigation: !1, navigationPosition: "right", navigationTooltips: [], showActiveTooltip: !1, slidesNavigation: !1, slidesNavPosition: "bottom", scrollBar: !1, hybrid: !1, css3: !0, scrollingSpeed: 700, autoScrolling: !0, fitToSection: !0, fitToSectionDelay: 1e3, easing: "easeInOutCubic", easingcss3: "ease", loopBottom: !1, loopTop: !1, loopHorizontal: !0, continuousVertical: !1, continuousHorizontal: !0, scrollHorizontally: !0, interlockedSlides: !1, resetSliders: !1, normalScrollElements: null, scrollOverflow: !1, scrollOverflowHandler: le, scrollOverflowOptions: null, touchSensitivity: 5, normalScrollElementTouchThreshold: 5, bigSectionsDestination: null, keyboardScrolling: !0, animateAnchor: !0, recordHistory: !0, controlArrows: !0, controlArrowColor: "#fff", verticalCentered: !0, sectionsColor: [], paddingTop: 0, paddingBottom: 0, fixedElements: null, responsive: 0, responsiveWidth: 0, responsiveHeight: 0, sectionSelector: w, slideSelector: B, afterLoad: null, onLeave: null, afterRender: null, afterResize: null, afterReBuild: null, afterSlideLoad: null, onSlideLeave: null }, l);
                    var Kn, jn, Gn, Jn = !1,
                        Qn = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|playbook|silk|BlackBerry|BB10|Windows Phone|Tizen|Bada|webOS|IEMobile|Opera Mini)/),
                        Zn = "ontouchstart" in n || navigator.msMaxTouchPoints > 0 || navigator.maxTouchPoints,
                        $n = e(this),
                        eo = oe.height(),
                        no = !1,
                        oo = !0,
                        to = !0,
                        io = [],
                        lo = {};
                    lo.m = { up: !0, down: !0, left: !0, right: !0 }, lo.k = e.extend(!0, {}, lo.m);
                    var ao, ro, so, co, fo, uo, po = e.extend(!0, {}, l);
                    Yn(), ie.click = Zn, ie = e.extend(ie, l.scrollOverflowOptions), e.extend(e.easing, { easeInOutCubic: function(e, n, o, t, i) {
                            return (n /= i / 2) < 1 ? t / 2 * n * n * n + o : t / 2 * ((n -= 2) * n * n + 2) + o } }), _n.setAutoScrolling = function(n, o) { Wn("autoScrolling", n, o);
                        var t = e(x);
                        l.autoScrolling && !l.scrollBar ? (Xn.css({ overflow: "hidden", height: "100%" }), _n.setRecordHistory(po.recordHistory, "internal"), $n.css({ "-ms-touch-action": "none", "touch-action": "none" }), t.length && Pn(t.position().top)) : (Xn.css({ overflow: "visible", height: "initial" }), _n.setRecordHistory(!1, "internal"), $n.css({ "-ms-touch-action": "", "touch-action": "" }), Pn(0), t.length && Xn.scrollTop(t.position().top)) }, _n.setRecordHistory = function(e, n) { Wn("recordHistory", e, n) }, _n.setScrollingSpeed = function(e, n) { Wn("scrollingSpeed", e, n) }, _n.setFitToSection = function(e, n) { Wn("fitToSection", e, n) }, _n.setLockAnchors = function(e) { l.lockAnchors = e }, _n.setMouseWheelScrolling = function(e) { e ? (En(), Mn()) : (An(), Hn()) }, _n.setAllowScrolling = function(n, o) { "undefined" != typeof o ? (o = o.replace(/ /g, "").split(","), e.each(o, function(e, o) { Vn(n, o, "m") })) : n ? (_n.setMouseWheelScrolling(!0), On()) : (_n.setMouseWheelScrolling(!1), zn()) }, _n.setKeyboardScrolling = function(n, o) { "undefined" != typeof o ? (o = o.replace(/ /g, "").split(","), e.each(o, function(e, o) { Vn(n, o, "k") })) : l.keyboardScrolling = n }, _n.moveSectionUp = function() {
                        var n = e(x).prev(b);
                        n.length || !l.loopTop && !l.continuousVertical || (n = e(b).last()), n.length && Me(n, null, !0) }, _n.moveSectionDown = function() {
                        var n = e(x).next(b);
                        n.length || !l.loopBottom && !l.continuousVertical || (n = e(b).first()), n.length && Me(n, null, !1) }, _n.silentMoveTo = function(e, n) { _n.setScrollingSpeed(0, "internal"), _n.moveTo(e, n), _n.setScrollingSpeed(po.scrollingSpeed, "internal") }, _n.moveTo = function(e, n) {
                        var o = Sn(e); "undefined" != typeof n ? yn(e, n) : o.length > 0 && Me(o) }, _n.moveSlideRight = function(e) { Le("right", e) }, _n.moveSlideLeft = function(e) { Le("left", e) }, _n.reBuild = function(n) {
                        if (!$n.hasClass(u)) { no = !0, eo = oe.height(), e(b).each(function() {
                                var n = e(this).find(V),
                                    o = e(this).find(D);
                                l.verticalCentered && e(this).find(I).css("height", mn(e(this)) + "px"), e(this).css("height", eo + "px"), l.scrollOverflow && (o.length ? o.each(function() { hn(e(this)) }) : hn(e(this))), o.length > 1 && en(n, n.find(P)) });
                            var o = e(x),
                                t = o.index(b);
                            t && _n.silentMoveTo(t + 1), no = !1, e.isFunction(l.afterResize) && n && l.afterResize.call($n), e.isFunction(l.afterReBuild) && !n && l.afterReBuild.call($n) } }, _n.setResponsive = function(n) {
                        var o = qn.hasClass(d);
                        n ? o || (_n.setAutoScrolling(!1, "internal"), _n.setFitToSection(!1, "internal"), e(M).hide(), qn.addClass(d)) : o && (_n.setAutoScrolling(po.autoScrolling, "internal"), _n.setFitToSection(po.autoScrolling, "internal"), e(M).show(), qn.removeClass(d)) }, _n.getFullpageData = function() {
                        return { options: l, internals: { getXmovement: pn, removeAnimation: sn, getTransforms: Fn, lazyLoad: De, addAnimation: rn, performHorizontalMove: on, silentLandscapeScroll: Dn } } }, e(this).length && (_("fp_continuousHorizontalExtension"), _("fp_scrollHorizontallyExtension"), _("fp_resetSlidersExtension"), _("fp_interlockedSlidesExtension"), s(), c());
                    var ho = !1,
                        vo = 0,
                        mo = 0,
                        go = 0,
                        So = 0,
                        wo = 0,
                        yo = (new Date).getTime(),
                        bo = 0,
                        xo = 0,
                        Co = eo;
                    _n.destroy = function(n) { _n.setAutoScrolling(!1, "internal"), _n.setAllowScrolling(!1), _n.setKeyboardScrolling(!1), $n.addClass(u), clearTimeout(so), clearTimeout(ro), clearTimeout(ao), clearTimeout(co), clearTimeout(fo), oe.off("scroll", ge).off("hashchange", Ye).off("resize", ln), te.off("click", M + " a").off("mouseenter", M + " li").off("mouseleave", M + " li").off("click", q).off("mouseover", l.normalScrollElements).off("mouseout", l.normalScrollElements), e(b).off("click", K), clearTimeout(so), clearTimeout(ro), n && Un() } }, "undefined" != typeof IScroll && (IScroll.prototype.wheelOn = function() { this.wrapper.addEventListener("wheel", this), this.wrapper.addEventListener("mousewheel", this), this.wrapper.addEventListener("DOMMouseScroll", this) }, IScroll.prototype.wheelOff = function() { this.wrapper.removeEventListener("wheel", this), this.wrapper.removeEventListener("mousewheel", this), this.wrapper.removeEventListener("DOMMouseScroll", this) });
                var le = { refreshId: null, iScrollInstances: [], onLeave: function() {
                        var n = e(x).find(c).data("iscrollInstance"); "undefined" != typeof n && n && n.wheelOff() }, afterLoad: function() {
                        var n = e(x).find(c).data("iscrollInstance"); "undefined" != typeof n && n && n.wheelOn() }, create: function(n, o) {
                        var t = n.find(c);
                        t.height(o), t.each(function() {
                            var n = l(this),
                                o = n.data("iscrollInstance");
                            o && e.each(le.iScrollInstances, function() { e(this).destroy() }), o = new IScroll(n.get(0), ie), le.iScrollInstances.push(o), n.data("iscrollInstance", o) }) }, isScrolled: function(e, n) {
                        var o = n.data("iscrollInstance");
                        return o ? "top" === e ? o.y >= 0 && !n.scrollTop() : "bottom" === e ? 0 - o.y + n.scrollTop() + 1 + n.innerHeight() >= n[0].scrollHeight : void 0 : !0 }, scrollable: function(e) {
                        return e.find(V).length ? e.find(P).find(c) : e.find(c) }, scrollHeight: function(e) {
                        return e.find(c).children().first().get(0).scrollHeight }, remove: function(e) {
                        var n = e.find(c);
                        if (n.length) {
                            var o = n.data("iscrollInstance");
                            o.destroy(), n.data("iscrollInstance", null) }
                        e.find(c).children().first().children().first().unwrap().unwrap() }, update: function(n, o) { clearTimeout(le.refreshId), le.refreshId = setTimeout(function() { e.each(le.iScrollInstances, function() { e(this).get(0).refresh() }) }, 150), n.find(c).css("height", o + "px").parent().css("height", o + "px") }, wrapContent: function() {
                        return '<div class="' + s + '"><div class="fp-scroller"></div></div>' } } }) }).call(n, o(1)) } });
