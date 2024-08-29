const imagenes = document.querySelectorAll(".img-galeria");
const imagenLight = document.querySelector(".agregar-imagen");
const contenedorLight = document.querySelector(".imagen-light");
const closeLight = document.querySelector(".close");

imagenes.forEach((imagen) => {
    imagen.addEventListener("click", () => {
        aparecerImagen(imagen.getAttribute("src"));
    });
});

contenedorLight.addEventListener("click", (e) => {
    if (e.target !== imagenLight) {
        contenedorLight.classList.toggle("show");
        imagenLight.classList.toggle("showImage");
        hamburguer.style.opacity = "1";
    }
});

const aparecerImagen = (imagen) => {
    imagenLight.src = imagen;
    contenedorLight.classList.toggle("show");
    imagenLight.classList.toggle("showImage");
    hamburguer.style.opacity = "0";
};

// show image with description
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".img-galeria");
    const lightboxImage = document.querySelector(".agregar-imagen");
    const lightboxDescription = document.querySelector(".imagen-description");
    const lightbox = document.querySelector(".imagen-light");
    const closeLightbox = document.querySelector(".close");

    images.forEach((image) => {
        image.addEventListener("click", () => {
            lightboxImage.src = image.src;
            lightboxDescription.textContent =
                image.getAttribute("data-description");
            lightbox.classList.add("show");
            lightboxImage.classList.add("showImage");
        });
    });

    closeLightbox.addEventListener("click", () => {
        lightbox.classList.remove("show");
        lightboxImage.classList.remove("showImage");
    });

    lightbox.addEventListener("click", (e) => {
        if (e.target !== lightboxImage && e.target !== lightboxDescription) {
            lightbox.classList.remove("show");
            lightboxImage.classList.remove("showImage");
        }
    });
});
