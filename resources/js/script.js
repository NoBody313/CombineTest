function redirExcel() {
    var excelButton = document.getElementById("redirExcel");

    if (excelButton) {
        excelButton.addEventListener("click", function () {
            setTimeout(function () {
                window.location.href = "http://localhost:2000/views/dashboard.php";
            }, 2000);
        });
    }
}

function redirLaravel() {
    var excelButton = document.getElementById("redirLaravel");

    if (excelButton) {
        excelButton.addEventListener("click", function () {
            setTimeout(function () {
                window.location.href = "http://localhost:3000";
            }, 2000);
        });
    }
}

function redirDVWA() {
    var dvwaButton = document.getElementById("redirDVWA");

    if (dvwaButton) {
        dvwaButton.addEventListener("click", function () {
            setTimeout(function () {
                window.location.href = "http://localhost:8000/";
            }, 2000);
        });
    }
}

// Panggil Fun nya di akhir
redirExcel();
redirDVWA();
redirLaravel();