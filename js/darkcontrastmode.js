const btnDarkModeToggle = document.getElementById("dark-mode-button");

const themeSystem = localStorage.getItem("themeSystem") || "light"; //p pegar do sistema o tema preferido

btnDarkModeToggle.addEventListener("click", () => {
    let oldTheme = localStorage.getItem("themeSystem") || "light";
    let newTheme = oldTheme == "light" ? "dark" : "light";

    localStorage.setItem("themeSystem", newTheme);
    defineCurrentTheme(newTheme);
});

function defineCurrentTheme(theme) {
    const darkSvg = "<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 256 256'><path fill='#FAD92B' d='M120 40V16a8 8 0 0 1 16 0v24a8 8 0 0 1-16 0m8 24a64 64 0 1 0 64 64a64.07 64.07 0 0 0-64-64m-69.66 5.66a8 8 0 0 0 11.32-11.32l-16-16a8 8 0 0 0-11.32 11.32Zm0 116.68l-16 16a8 8 0 0 0 11.32 11.32l16-16a8 8 0 0 0-11.32-11.32M192 72a8 8 0 0 0 5.66-2.34l16-16a8 8 0 0 0-11.32-11.32l-16 16A8 8 0 0 0 192 72m5.66 114.34a8 8 0 0 0-11.32 11.32l16 16a8 8 0 0 0 11.32-11.32ZM48 128a8 8 0 0 0-8-8H16a8 8 0 0 0 0 16h24a8 8 0 0 0 8-8m80 80a8 8 0 0 0-8 8v24a8 8 0 0 0 16 0v-24a8 8 0 0 0-8-8m112-88h-24a8 8 0 0 0 0 16h24a8 8 0 0 0 0-16'/></svg>";

    const lightSvg = "<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><rect width='24' height='24' fill='none'/><path fill='white' d='M12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709m.497-1.017q3.09-.202 5.295-2.459T20 12t-2.185-5.505T12.5 4.017z'/></svg>";

    document.documentElement.setAttribute("data-theme", theme);

    if(theme =="light"){
        btnDarkModeToggle.innerHTML = darkSvg;
    }
    else {
        btnDarkModeToggle.innerHTML = lightSvg;
    }
}

defineCurrentTheme(themeSystem);

// const darkSvg = "<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><rect width='24' height='24' fill='none'/><path fill='white' d='M12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709m.497-1.017q3.09-.202 5.295-2.459T20 12t-2.185-5.505T12.5 4.017z'/></svg>";