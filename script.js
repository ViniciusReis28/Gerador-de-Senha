function toggleDarkMode() {
    const body = document.body;
    body.classList.toggle("dark-mode");

    const button = document.querySelector(".toggle-button");
    if (body.classList.contains("dark-mode")) {
        button.innerHTML = "☀️";
        localStorage.setItem("theme", "dark");
    } else {
        button.innerHTML = "🌙";
        localStorage.setItem("theme", "light");
    }
}

window.onload = function () {
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
        document.querySelector(".toggle-button").innerHTML = "☀️";
    }
};