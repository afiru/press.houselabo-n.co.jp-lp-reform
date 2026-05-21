<script defer src="js/jquery.min.js"></script>
<script>
    window.addEventListener('load', function() {

        // Lenis
        const lenisScript = document.createElement('script');
        lenisScript.src = "js/lenis.min.js";

        lenisScript.onload = function() {

            const lenis = new Lenis({
                smooth: true
            });

            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }
            requestAnimationFrame(raf);

            // ▼ ここから順番読み込み
            loadScripts([
                "js/swiper-bundle.min.js",
                "js/inview.min.js",
                "js/inview_setting.js",
                "js/lightbox.min.js",
                "js/config.js?v=5"
            ]);

        };

        document.body.appendChild(lenisScript);


        function loadScripts(scripts) {
            if (scripts.length === 0) return;

            const src = scripts.shift();
            const s = document.createElement('script');
            s.src = src;

            s.onload = function() {
                loadScripts(scripts);
            };

            document.body.appendChild(s);
        }

    });
</script>
</body>

</html>