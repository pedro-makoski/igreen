function isMobileDevice() {
  if (navigator.userAgentData) {
    return navigator.userAgentData.mobile;
  }

  return /Android|iPhone|iPad|iPod|Opera Mini|IEMobile|Mobile/i.test(
    navigator.userAgent,
  );
}

function animate() {
  if (isMobileDevice()) return;
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText);
  Animations.headerAnimate();
  Animations.smoothScroll();
  Animations.animateWhyIgreen();
  Animations.animateVideoSection();
  Animations.animateProgress();
  Animations.animateLaw();
  Animations.doYourLogin();
  Animations.animateFaq();
  Animations.animateFooter();

  ScrollTrigger.config({
    autoRefreshEvents: "visibilitychange,DOMContentLoaded,load,resize",
  });
  scrollToFocusSmooth()
}

function scrollToFocusSmooth() {
  window.addEventListener(
    "focusin",
    (e) => {
      const smoother = ScrollSmoother.get();
      if (smoother) {
        smoother.scrollTo(e.target, true, "center center");
      }
    },
    { passive: false },
  );
}

class Animations {
  static smoothScroll() {
    ScrollSmoother.create({
      smooth: 1,
      effects: true,
      keyboard: true,
    });
  }

  static headerAnimate() {
    this.animateText(".hero h1", ".hero", false);

    this.animateText(".hero > p", ".hero", false);

    gsap.to(".header-image", {
      y: -750,
      scrollTrigger: {
        trigger: "header",
        start: "top top",
        end: "bottom top",
        scrub: true,
      },
    });
  }

  static getTextSplit(className) {
    return SplitText.create(className, {
      type: "lines, words, chars",
      mark: "lines",
      linesClass: "split-line",
    });
  }

  static animateWhyIgreen() {
    gsap.from(".why-igreen h2, .why-igreen > p", {
      x: -20,
      filter: "blur(20px)",
      duration: 1,
      scrollTrigger: {
        scrub: true,
        trigger: ".why-igreen h2",
        end: "100% 95%",
      },
    });

    gsap.from(".why-igreen li", {
      y: 50,
      opacity: 0,
      filter: "blur(20px)",
      duration: 1.5,
      stagger: 0.5,
      scrollTrigger: {
        scrub: true,
        trigger: ".why-igreen",
        start: "0% 60%",
        end: "100% 100%",
      },
    });
  }

  static animateVideoSection() {
    this.animateText(".video h2", ".video-content h2");

    gsap.from(".video-content iframe", {
      opacity: 0,
      x: -50,
      scrollTrigger: {
        trigger: ".video iframe",
        scrub: true,
        end: "bottom 20%",
      },
    });
  }

  static animateText(queryText, trigger, hasTrigger = true, mark = false) {
    gsap.from(this.getTextSplit(queryText).chars, {
      y: 10,
      opacity: 0,
      stagger: 0.02,
      duration: 0.1,
      scrollTrigger: hasTrigger
        ? {
            markers: mark,
            trigger: trigger,
            scrub: true,
            end: "bottom 20%",
          }
        : undefined,
    });
  }

  static animateProgress() {
    document.querySelectorAll(".process li").forEach((process) => {
      gsap.from(process, {
        opacity: 0,
        y: 50,
        scrollTrigger: {
          trigger: process,
          scrub: true,
          end: "bottom 20%",
        },
      });
    });

    gsap.from(".process .progresso", {
      height: 10,
      borderBottomLeftRadius: 0,
      borderBottomRightRadius: 0,
      scrollTrigger: {
        trigger: ".process",
        scrub: true,
        start: "top center",
        end: "bottom center",
        invalidateOnRefresh: true,
      },
    });
  }

  static animateLaw() {
    document.querySelectorAll(".law h2, .law p").forEach((text) => {
      gsap.from(text, {
        y: -50,
        opacity: 0,
        scrollTrigger: {
          trigger: ".law",
          scrub: true,
          start: "top bottom",
          end: "bottom center",
          invalidateOnRefresh: true,
        },
      });
    });
  }

  static doYourLogin() {
    this.animateText(".do-your-login h2", ".do-your-login h2");

    gsap.from(".formas-de-cadastro li", {
      opacity: 0,
      y: 30,
      stagger: 0.1,
      scrollTrigger: {
        trigger: ".formas-de-cadastro",
        scrub: true,
        start: "top bottom",
        end: "bottom center",
      },
    });
  }

  static animateFaq() {
    this.animateText(".faq h2", ".faq h2");

    document.querySelectorAll(".faq article").forEach((article) => {
      gsap.from(article, {
        y: 20,
        opacity: 0,
        scrollTrigger: {
          trigger: ".faq > div",
          start: "top 85%",
          end: "bottom 60%",
          scrub: true,
        },
      });
    });
  }

  static animateFooter() {
    gsap.from("footer", {
      y: -100,
      scrollTrigger: {
        trigger: "footer",
        start: "start bottom",
        end: "center center",
        scrub: true,
      },
    });
  }
}

animate();
