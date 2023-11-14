import Swiper from "swiper";
import { Navigation } from 'swiper/modules';

if(window.matchMedia("(max-width: 768px").matches) {
  const stepsSlider = new Swiper('.steps__slider', {
    modules: [Navigation],
    navigation: {
      nextEl: '.steps__slider-button--next',
      prevEl: '.steps__slider-button--prev',
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      575: {
        slidesPerView: 2,
        spaceBetween: 30,
      }
    }
  })
}
