// document.addEventListener("DOMContentLoaded", function () {
//   const form = document.getElementById("loginForm");
//   const emailInput = document.getElementById("email");
//   const passwordInput = document.getElementById("password");
//   const errorMsg = document.getElementById("errorMsg");

//   form.addEventListener("submit", function (e) {
//     e.preventDefault();

//     const email = emailInput.value.trim();
//     const password = passwordInput.value.trim();
//     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//     if (email === "" || password === "") {
//       errorMsg.textContent = "Email dan Password wajib diisi.";
//     } else if (!emailPattern.test(email)) {
//       errorMsg.textContent = "Format email tidak valid.";
//     } else if (password.length < 6) {
//       errorMsg.textContent = "Password minimal 6 karakter.";
//     } else if (email !== "danielosidabutar@gmail.com" || password !== "rahasia123") {
//       errorMsg.textContent = "Email atau Password salah.";
//     } else {
//       errorMsg.textContent = "";
//       alert("Login berhasil!");
//     }
    
//   });
// });
// document.addEventListener("DOMContentLoaded", function () {
//   const form = document.getElementById("loginForm");
//   const emailInput = document.getElementById("email");
//   const passwordInput = document.getElementById("password");
//   const errorMsg = document.getElementById("errorMsg");
//   const togglePassword = document.getElementById("togglePassword");
//   const roleSection = document.getElementById("roleSelection");
//   const confirmRole = document.getElementById("confirmRole");

//   // Event ketika login dikirim
//   form.addEventListener("submit", function (e) {
//     e.preventDefault();

//     const email = emailInput.value.trim();
//     const password = passwordInput.value.trim();
//     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//     if (email === "" || password === "") {
//       errorMsg.textContent = "Email dan Password wajib diisi.";
//     } else if (!emailPattern.test(email)) {
//       errorMsg.textContent = "Format email tidak valid.";
//     } else if (password.length < 6) {
//       errorMsg.textContent = "Password minimal 6 karakter.";
//     } else if (email !== "danielosidabutar@gmail.com" || password !== "rahasia123") {
//       errorMsg.textContent = "Email atau Password salah.";
//     } else {
//       // Login berhasil
//       errorMsg.textContent = "";
//       form.style.display = "none";
//       roleSection.style.display = "block";
//     }
//   });

//   // Toggle password show/hide
//   togglePassword.addEventListener("click", function () {
//     const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
//     passwordInput.setAttribute("type", type);
//     togglePassword.src = type === "password"
//       ? "https://icon-library.com/images/eye-icon-png/eye-icon-png-5.jpg"
//       : "https://icon-library.com/images/eye-icon-png/eye-icon-png-3.jpg";
//   });

//   // Event ketika tombol lanjut ditekan setelah memilih role
//   confirmRole.addEventListener("click", function () {
//     const selectedRole = document.getElementById("roleDropdown").value;

//     if (selectedRole === "") {
//       alert("Silakan pilih peran terlebih dahulu.");
//     } else {
//       // Arahkan ke halaman sesuai role
//       window.location.href = `${selectedRole}.html`;
//     }
//   });
// });
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("loginForm");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");
  const errorMsg = document.getElementById("errorMsg");
  const togglePassword = document.getElementById("togglePassword");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "" || password === "") {
      errorMsg.textContent = "Email dan Password wajib diisi.";
    } else if (!emailPattern.test(email)) {
      errorMsg.textContent = "Format email tidak valid.";
    } else if (email !== "123@gmail.com" || password !== "123") {
      errorMsg.textContent = "Email atau Password salah.";
    } else {
      errorMsg.textContent = "";
      document.getElementById("roleModal").style.display = "flex";
    }
  });

  togglePassword.addEventListener("click", function () {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
    togglePassword.src =
      type === "password"
        ? "https://icon-library.com/images/eye-icon-png/eye-icon-png-5.jpg"
        : "https://icon-library.com/images/eye-icon-png/eye-icon-png-3.jpg";
  });

  document.getElementById("confirmRole").addEventListener("click", function () {
    const selectedRole = document.getElementById("roleDropdown").value;

    if (selectedRole === "") {
      alert("Silakan pilih peran terlebih dahulu.");
    } else {
      window.location.href = `../${selectedRole}.html`;
    }
  });
});






