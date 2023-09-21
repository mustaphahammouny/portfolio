import "./bootstrap";

import { loadFull } from "tsparticles";
import "jquery-particles";

import "./plugins.min";

import "./theme";

import "./init";

class App {
    static init() {
        this.initScroll();
        this.initSwitchMode();
        this.initParticles();
    }

    static initScroll() {
        $(document).on("click", "#nav a", function () {
            const id = $(this).attr("href");
            $("html").animate(
                {
                    scrollTop: $(id).offset().top - 70,
                },
                1000
            );
        });
    }

    static initSwitchMode() {
        $(document).on("click", ".btn-switch-mode", function () {
            const bodyElement = $("body");
            if (bodyElement.attr("theme") == "dark") {
                bodyElement.removeAttr("theme");
            } else {
                bodyElement.attr("theme", "dark");
            }
        });
    }

    static async initParticles() {
        await loadFull(tsParticles);

        $("#tsparticles")
            .particles()
            .init({
                fullScreen: {
                    enable: false,
                },
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 600,
                        },
                    },
                    color: {
                        value: "#0088cc",
                    },
                    shape: {
                        type: "circle",
                        stroke: {
                            width: 0,
                            color: "#000000",
                        },
                        polygon: {
                            nb_sides: 5,
                        },
                        image: {
                            src: "img/github.svg",
                            width: 100,
                            height: 100,
                        },
                    },
                    opacity: {
                        value: 0.5,
                        random: false,
                        anim: {
                            enable: false,
                            speed: 1,
                            opacity_min: 0.1,
                            sync: false,
                        },
                    },
                    size: {
                        value: 3,
                        random: true,
                        anim: {
                            enable: false,
                            speed: 40,
                            size_min: 0.1,
                            sync: false,
                        },
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: "#0088cc",
                        opacity: 0.4,
                        width: 1,
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: "none",
                        random: false,
                        straight: false,
                        out_mode: "out",
                        bounce: false,
                        attract: {
                            enable: false,
                            rotateX: 600,
                            rotateY: 1200,
                        },
                    },
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        // onhover: {
                        //     enable: true,
                        //     mode: "repulse",
                        // },
                        onclick: {
                            enable: true,
                            mode: "push",
                        },
                        resize: true,
                    },
                    modes: {
                        grab: {
                            distance: 400,
                            line_linked: {
                                opacity: 1,
                            },
                        },
                        bubble: {
                            distance: 400,
                            size: 40,
                            duration: 2,
                            opacity: 8,
                            speed: 3,
                        },
                        repulse: {
                            distance: 200,
                            duration: 0.4,
                        },
                        push: {
                            particles_nb: 4,
                        },
                        remove: {
                            particles_nb: 2,
                        },
                    },
                },
                retina_detect: true,
            });
    }
}

document.addEventListener("DOMContentLoaded", () => {
    App.init();
});
