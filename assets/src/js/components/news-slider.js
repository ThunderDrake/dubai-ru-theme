import Swiper from "swiper";
import { Navigation } from 'swiper/modules';

const newsSlider = new Swiper('.news-section__slider', {
  modules: [Navigation],
  navigation: {
    nextEl: '.news-section__slider-button--next',
    prevEl: '.news-section__slider-button--prev',
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
