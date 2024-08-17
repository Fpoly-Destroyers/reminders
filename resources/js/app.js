import "./bootstrap";
import "flowbite";

// Toast messages set timeout
setTimeout(() => {
    document.querySelectorAll(".toast-message").forEach((toast) => {
        setTimeout(() => {
            toast.style.display = "none";
        }, 3000);
    });
}, 3000);
