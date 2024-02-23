import "./bootstrap";

import { tsParticles } from '@tsparticles/engine';
import { loadSlim } from '@tsparticles/slim';
import particlesOptions from "./particles.json";

import "./plugins.min";

import "./theme";

import "./init";

import.meta.glob(["../images/**", "../fonts/**"]);

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
        const bodyElement = $("body");
        const theme = localStorage.getItem("theme");
        if (theme == "dark") {
            bodyElement.attr("theme", "dark");
        }

        $(document).on("click", ".btn-switch-mode", function () {
            if (bodyElement.attr("theme") == "dark") {
                bodyElement.removeAttr("theme");
                localStorage.removeItem("theme");
            } else {
                bodyElement.attr("theme", "dark");
                localStorage.setItem("theme", "dark");
            }
        });
    }

    static async initParticles() {
        await loadSlim(tsParticles);

        await tsParticles.load({
            id: 'tsparticles',
            options: particlesOptions,
        });
    }
}

document.addEventListener("DOMContentLoaded", () => {
    App.init();
});
