import "./bootstrap";
import gsap from "gsap";

import { ScrollTrigger } from "gsap/ScrollTrigger";
window.addEventListener("load", () => {
    gsap.registerPlugin(ScrollTrigger);
    ScrollTrigger.batch(".card", {
        onEnter: (batch) => {
            gsap.to(batch, {
                opacity: 1,
                duration: 0.4,
                stagger: { each: 0.2 },
            });
        },
    });
    gsap.to("h1", { opacity: 1, left: 0, duration: 0.8, ease: "ease" });
});
