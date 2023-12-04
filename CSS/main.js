
// register popup
function register_ok() {
    // window.alert(" ثبت نام شما با موفقیت انجام شد");
}

//     derk mode

// Get prefers-color-scheme media query
if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
    window.localStorage.setItem("isDarkMode", "true");
}

// When browser window loads, check dark mode
window.onload = function() {
    const isDarkMode = window.localStorage.getItem("isDarkMode") === "true";

    if (isDarkMode) {
        document.body.style.background = "#000000";
        document.getElementById("courses").style.background = "#233303"
        document.getElementById("courses_mode").style.background = "#233303"
        document.getElementById("contact_us").style.background = "#233303"
        document.getElementById("contact_form").style.background = "#000000"
        document.getElementById("text").style.color = "#EBF094"
        document.getElementById("checkbox").checked = false;
    } else {
        document.body.style.background = "#ffffff";
        document.getElementById("text").style.color = "#BCC41C"
        document.getElementById("courses").style.background = "#f4facb"
        document.getElementById("courses_mode").style.background = "#f4facb"
        document.getElementById("contact_us").style.background = "#f4facb"
        document.getElementById("contact_form").style.background = "#ffffff"
        document.getElementById("checkbox").checked = true;
    }
}

// Toggle dark mode
function toggle() {
    const isDarkMode = window.localStorage.getItem("isDarkMode") === "true";

    if (isDarkMode) {
        window.localStorage.setItem("isDarkMode", "false");
        document.body.style.background = "#ffffff";
        document.getElementById("text").style.color = "#567C09"
        document.getElementById("courses").style.background = "#BCC41C"
        document.getElementById("courses_mode").style.background = "#f4facb"
        document.getElementById("contact_us").style.background = "#f4facb"
        document.getElementById("contact_form").style.background = "#ffffff"
        document.getElementById("checkbox").checked = true;
    } else {
        window.localStorage.setItem("isDarkMode", "true");
        document.body.style.background = "#000000";
        document.getElementById("courses").style.background = "#233303"
        document.getElementById("courses_mode").style.background = "#233303"
        document.getElementById("contact_us").style.background = "#233303"
        document.getElementById("contact_form").style.background = "#000000"
        document.getElementById("text").style.color = "#EBF094"
        document.getElementById("checkbox").checked = false;
    }
}