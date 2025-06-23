 


document.addEventListener("DOMContentLoaded", function () {
    // Get all necessary elements
    const btnSimpan = document.querySelector(".btn-simpan");
    const btnKembali = document.querySelector(".btn-kembali");
    const inputFile = document.getElementById("laporan-file");
    const errorMsg = document.getElementById("error-msg");
    

   

    // Back button
    btnKembali.addEventListener("click", function (e) {
        e.preventDefault();
        showTableView();
    });

    // Save button validation
    btnSimpan.addEventListener("click", function (e) {
        e.preventDefault();
        validateAndSubmit();
    });

    // Helper functions
    function resetForm() {
        inputFile.value = "";
        hideError();
    }

   

    function showError(message) {
        errorMsg.textContent = message;
        errorMsg.style.display = "block";
    }

    function hideError() {
        errorMsg.style.display = "none";
        errorMsg.textContent = "";
    }

    function validateAndSubmit() {
        const file = inputFile.files[0];
        hideError();

        // Validation checks
        if (!file) {
            showError("Silakan unggah file laporan akhir.");
            return;
        }

        // Check file type (PDF)
        if (!file.name.toLowerCase().endsWith(".pdf")) {
            showError("File harus berformat PDF (.pdf)");
            return;
        }

        // Check file size (max 2MB)
        const maxSizeBytes = 2 * 1024 * 1024;
        if (file.size > maxSizeBytes) {
            showError("Ukuran file maksimal 2 MB.");
            return;
        }

        // If validation passes
        alert("Laporan berhasil disimpan!");
        showTableView();

            }

        });