import Swiper from "swiper";
import { Navigation } from 'swiper/modules';

const stepsSlider = new Swiper('.team__slider', {
  modules: [Navigation],
  navigation: {
    nextEl: '.team__slider-button--next',
    prevEl: '.team__slider-button--prev',
  },

  breakpoints: {
    320: {
      slidesPerView: 'auto',
      spaceBetween: 20,
      loop: true
    },
    575: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    769: {
      slidesPerView: 4,
      spaceBetween: 30,
    }
  }
})
