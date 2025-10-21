gsap.registerPlugin(ScrollTrigger);

if (window.innerWidth > 767) {
    const textElements = gsap.utils.toArray('h1, h2, h3, h4, h5, h6, p');

    textElements.forEach(text => {
        gsap.fromTo(
            text,
            { backgroundSize: '0% 100%' },
            {
                backgroundSize: '100% 100%',
                ease: 'none',
                scrollTrigger: {
                    trigger: text,
                    start: 'center 80%',
                    end: 'center 20%',
                    // toggleActions: 'play reverse play reverse', // play when in view, reverse on out
                    // markers: true, // uncomment for debugging
                },
            }
        );
    });
}
