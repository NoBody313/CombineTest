function redirExcel() {
    var excelButton = document.getElementById("redirExcel");

    if (excelButton) {
        excelButton.addEventListener("click", function () {
            setTimeout(function () {
                window.location.href = "https://88d6-103-233-100-229.ngrok-free.app/views/home.php";
            }, 2000);
        });
    }
}

function redirDVWA() {
    var dvwaButton = document.getElementById("redirDVWA");

    if (dvwaButton) {
        dvwaButton.addEventListener("click", function () {
            setTimeout(function () {
                window.location.href = "/views/testing.php";
            }, 2000);
        });
    }
}

// Panggil Fun nya di akhir
redirExcel();
redirDVWA();