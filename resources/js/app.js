import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    // Theme toggle functionality
    const toggleThemeButtons = document.querySelectorAll(".toggle-theme");

    toggleThemeButtons.forEach((button) => {
        button.addEventListener("click", function () {
            // Check if body has dark class
            const isDark = document.body.classList.contains("dark");
            const newTheme = isDark ? "light" : "dark";

            fetch(`/language/theme/${newTheme}`, {
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                method: "GET",
            }).then((response) => {
                if (response.ok) {
                    // Toggle the dark class on body
                    document.body.classList.toggle("dark");

                    // Update theme button icons
                    document.querySelectorAll(".theme-icon").forEach((icon) => {
                        if (newTheme === "dark") {
                            icon.src = "/moon.png";
                        } else {
                            icon.src = "/sun.png";
                        }
                    });

                    // Store in localStorage
                    localStorage.setItem("theme", newTheme);
                }
            });
        });
    });

    // Language selector functionality (desktop only)
    const desktopLanguageSelector =
        document.getElementById("language-selector");
    if (desktopLanguageSelector) {
        desktopLanguageSelector.addEventListener("change", function () {
            const locale = this.value;
            switchLanguage(locale);
        });
    }

    // Helper function to switch language
    function switchLanguage(locale) {
        fetch(`/language/${locale}`, {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            method: "GET",
        }).then((response) => {
            if (response.ok) {
                window.location.reload();
            }
        });
    }
});
