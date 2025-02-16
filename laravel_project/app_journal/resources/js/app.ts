 import "./index";
 import"./temoigne";
 
 document.addEventListener("DOMContentLoaded", () => {
//     const form = document.getElementById("auth-form") as HTMLFormElement;
//     const formTitle = document.getElementById("form-title") as HTMLHeadingElement;
//     const signInBtn = document.getElementById("sign-in-btn") as HTMLButtonElement;
//     const signUpBtn = document.getElementById("sign-up-btn") as HTMLButtonElement;
//     const submitBtn = document.getElementById("submit-btn") as HTMLButtonElement;
//     const confirmPasswordGroup = document.getElementById("confirm-password-group") as HTMLDivElement;
//     const emailgroup = document.getElementById("emailgroup") as HTMLDivElement;
//     const pseudo = document.getElementById("pseudo") as HTMLInputElement;
//     const email = document.getElementById("email") as HTMLInputElement;
//     const password = document.getElementById("password") as HTMLInputElement;
//     const confirmPassword = document.getElementById("confirm-password") as HTMLInputElement;
//     const errorMessage = document.getElementById("error-message") as HTMLParagraphElement;
//     const togglePassword = document.getElementById("toggle-password") as HTMLButtonElement;
//     const eyeIcon = document.getElementById("eye-icon") as HTMLElement;

//     let isSignUp = false;

    // Toggle entre Sign In et Sign Up
    // const toggleForm = (signUp: boolean) => {
    //     isSignUp = signUp;
    //     confirmPasswordGroup.classList.toggle("hidden", !signUp);
    //     emailgroup.classList.toggle("hidden", !signUp);
    //     signUpBtn.classList.toggle("active", signUp);
    //     signInBtn.classList.toggle("active", !signUp);
    // };


    // signInBtn.addEventListener("click", () => toggleForm(false));
    // signUpBtn.addEventListener("click", () => toggleForm(true));

    // Logique de masquage/affichage du mot de passe
    // togglePassword.addEventListener("click", () => {
    //     if (password.type === "password") {
    //         password.type = "text"; // Afficher le mot de passe
    //         eyeIcon.classList.replace("fa-eye", "fa-eye-slash"); // Changer l'icône
    //     } else {
    //         password.type = "password"; // Masquer le mot de passe
    //         eyeIcon.classList.replace("fa-eye-slash", "fa-eye"); // Remettre l'icône normale
    //     }
    // });

    // Validation et soumission du formulaire
    // form.addEventListener("submit", async (event) => {
    //     event.preventDefault();
    //     errorMessage.textContent = "";

    //     if (!pseudo.value.trim()) {
    //         errorMessage.textContent = "Le pseudo est requis.";
    //         return;
    //     }

    //     if (!email.value.match(/^\S+@\S+\.\S+$/)) {
    //         errorMessage.textContent = "Veuillez entrer une adresse email valide.";
    //         return;
    //     }

    //     if (password.value.length < 8) {
    //         errorMessage.textContent = "Le mot de passe doit contenir au moins 8 caractères.";
    //         return;
    //     }

    //     if (isSignUp) {
    //         if (!confirmPassword.value) {
    //             errorMessage.textContent = "Veuillez confirmer votre mot de passe.";
    //             return;
    //         }
    //         if (password.value !== confirmPassword.value) {
    //             errorMessage.textContent = "Les mots de passe ne correspondent pas.";
    //             return;
    //         }
    //     }

    //     alert(isSignUp ? "Inscription réussie !" : "Connexion réussie !");
    // });
});
