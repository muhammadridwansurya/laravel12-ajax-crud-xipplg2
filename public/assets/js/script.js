
$(document).ready(function () {
    // Fungsi untuk mengganti tema
    function setTheme(theme) {
        $('body').attr('data-bs-theme', theme);
        localStorage.setItem('theme', theme);

        if (theme === 'dark') {
            $('.hide-theme-dark').hide();
            $('.hide-theme-light').show();
        } else {
            $('.hide-theme-dark').show();
            $('.hide-theme-light').hide();
        }
    }

    // Cek tema yang tersimpan di localStorage
    let savedTheme = localStorage.getItem('theme') || 'dark'; // Default ke dark mode
    setTheme(savedTheme);

    // Event saat tombol diklik
    $('.hide-theme-dark').on('click', function (e) {
        e.preventDefault();
        setTheme('dark');
    });

    $('.hide-theme-light').on('click', function (e) {
        e.preventDefault();
        setTheme('light');
    });
});
