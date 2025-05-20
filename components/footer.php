    <footer class="text-white bg-cyan-900">
        <div class=" text-center py-4">
            &copy; <?php echo date("Y"); ?> Mark Jordan. All rights reserved.
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
        });

        const toggleBtn = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        toggleBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>

</body>
</html> 