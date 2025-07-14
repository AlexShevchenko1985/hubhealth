import AOS from "aos";
import "aos/dist/aos.css";
const aos = () => {

    document.addEventListener("DOMContentLoaded", () => {
        AOS.init({
            duration: 1000,
            once: true,
        });
    });

    console.log("AOS initialized:", AOS);
};

export default aos;
