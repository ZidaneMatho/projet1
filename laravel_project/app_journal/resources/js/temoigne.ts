const stars = document.querySelectorAll(".star") as NodeListOf<HTMLSpanElement>;
const criteriaButtons = document.querySelectorAll(".criteria") as NodeListOf<HTMLButtonElement>;
const annulerBtn = document.querySelector("#annuler") as HTMLButtonElement;
const publierBtn = document.querySelector("#publier") as HTMLButtonElement;
let note = 0;
let selectedCriteria: string[] = [];

// Gestion des étoiles
stars.forEach((star, index) => {
    star.addEventListener("click", () => {
        note = index + 1;
        // Mise à jour de l'affichage des étoiles
        stars.forEach((s, i) => {
            if (i < note) {
                s.classList.add("text-yellow-500", "fa-solid");
                s.classList.remove("text-gray-400", "fa-regular");
            } else {
                s.classList.add("text-gray-400", "fa-regular");
                s.classList.remove("text-yellow-500", "fa-solid");
            }
        });
    });
});
// Gestion des critères appréciés
criteriaButtons.forEach(button => {
    button.addEventListener("click", () => {
        const value = button.getAttribute("data-value");
        if (selectedCriteria.includes(value!)) {
            selectedCriteria = selectedCriteria.filter(c => c !== value);
            button.classList.remove("bg-blue-300");
            button.classList.add("bg-gray-200");
        } else {
            selectedCriteria.push(value!);
            button.classList.remove("bg-gray-200");
            button.classList.add("bg-blue-300");
        }
    });
});

// Réinitialiser le formulaire avec "Annuler"
annulerBtn.addEventListener("click", () => {
    (document.querySelector("textarea[name='commentaire']") as HTMLTextAreaElement).value = "";
    (document.querySelector("input[name='date']") as HTMLInputElement).value = new Date().toISOString().split("T")[0];
    note = 0;
    selectedCriteria = [];

    // Réinitialisation des étoiles
    stars.forEach(star => {
        star.classList.add("text-gray-400", "fa-regular");
        star.classList.remove("text-yellow-500", "fa-solid");
    });
        // Réinitialisation des critères
        criteriaButtons.forEach(button => {
            button.classList.remove("bg-blue-300");
            button.classList.add("bg-gray-200");
        });
    });

    // Envoyer l'avis en base avec "Publier"
    publierBtn.addEventListener("click", async () => {
        const commentaire = (document.querySelector("textarea[name='commentaire']") as HTMLTextAreaElement).value;
        const date = (document.querySelector("input[name='date']") as HTMLInputElement).value;
        const nom = (document.querySelector("input[name='nom']") as HTMLInputElement)?.value || "";
        const prenom = (document.querySelector("input[name='prenom']") as HTMLInputElement)?.value || "";

        if (note === 0 || commentaire.trim() === "") {
            alert("Veuillez donner une note et écrire un commentaire.");
            return;
        }

        const formData = new FormData();
        formData.append("note", note.toString());
        formData.append("commentaire", commentaire);
        formData.append("date", date);
        formData.append("criteres", JSON.stringify(selectedCriteria));
        formData.append("nom", nom);
        formData.append("prenom", prenom);
        const fileInput = document.querySelector("input[name='photo']") as HTMLInputElement;
        if (fileInput?.files?.length) {
            formData.append("photo", fileInput.files[0]);
        }

        try {
            const response = await fetch("/ajouter-avis", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": (document.querySelector('meta[name="csrf-token"]') as HTMLMetaElement).content
                }
            });

            if (!response.ok) throw new Error("Erreur lors de l'envoi.");

            alert("Avis enregistré avec succès !");
            window.location.reload();
        } catch (error) {
            console.error("Erreur:", error);
            alert("Une erreur est survenue.");
      }
   });
