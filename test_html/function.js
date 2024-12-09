const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("id_card");

togglePassword.addEventListener("click", function () {
    // Toggle the type of the input field
    const type = passwordInput.type === "password" ? "text" : "password";
    passwordInput.type = type;

    // Toggle the icon
    this.innerHTML = type === "password"
        ? '<i class="fa-regular fa-eye-slash"></i>'
        : '<i class="fa-regular fa-eye"></i>';
});

function showpass() {
    document.querySelectorAll('#pass, #pass1, #pass2').forEach(pass => pass.type = pass.type === 'password' ? 'text' : 'password');
}