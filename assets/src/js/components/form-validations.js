import JustValidate from 'just-validate';
import Inputmask from "inputmask";
import intlTelInput from 'intl-tel-input';
import * as utils from "../../../../node_modules/intl-tel-input/build/js/utils";
import * as countryList from "countries-phone-masks";

const validateForms = (selector, rules, url, nonce, action, afterSend) => {
  const form = document?.querySelector(selector);
  const telSelector = form?.querySelector('input[type="tel"]');

  if (!form) {
    console.error('Нет такого селектора!');
    return false;
  }

  if (!rules) {
    console.error('Вы не передали правила валидации!');
    return false;
  }

  if (telSelector) {
    const telInput = intlTelInput(telSelector, {
      utilsScript: utils,
      separateDialCode: true,
      hiddenInput: "full",
      initialCountry: 'ae'
    })

    function getCodeMask(selector) {
      let country = selector.getSelectedCountryData();
      let countryData = countryList.find(({ iso }) => iso === country.iso2.toUpperCase());
      let countryMask = countryData.mask
      let maskValue;

      if(Array.isArray(countryMask)) {
        maskValue = countryMask[0]
      } else {
        maskValue = countryMask
      }

      const inputMask = new Inputmask(maskValue.replace(/#/g, '9').toString());
      inputMask.mask(telSelector);
    }

    getCodeMask(telInput);

    telSelector.addEventListener("countrychange", function(e) {
      getCodeMask(telInput);
    });

    for (let item of rules) {
      if (item.tel) {
        item.rules.push({
          rule: 'function',
          validator: function() {
            const phone = telSelector.inputmask.unmaskedvalue();
            return phone;
          },
          errorMessage: item.telError
        });
      }
    }
  }

  const validation = new JustValidate(selector);

  for (let item of rules) {
    validation
      .addField(item.ruleSelector, item.rules);
  }

  validation.onSuccess((ev) => {
    let formData = new FormData(ev.target);
    formData.append('action', action);
    formData.append('nonce', nonce);

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          form.querySelector('.btn-reset').insertAdjacentHTML('afterend', `<p class="form-success">Спасибо за заявку! Мы скоро с вами свяжемся</p>`)
          console.log('Отправлено');
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
          'event': 'formsubmit_all',
          });
        } else {
          form.querySelector('.btn-reset').insertAdjacentHTML('afterend', `<p class="just-validate-error-label">Что-то пошло не так!</p>`)
          console.log('Ошибка');
        }
      }
    }

    xhr.open('POST', url, true);
    xhr.send(formData);

    ev.target.reset();
  })

};

const footerFormRules = [
  {
    ruleSelector: '.footer__form-input--name',
    rules: [
      {
        rule: 'minLength',
        value: 3
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '.footer__form-input--tel',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
];

const sectionFormRules = [
  {
    ruleSelector: '.preferences-section__form-input--name',
    rules: [
      {
        rule: 'minLength',
        value: 3
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '.preferences-section__form-input--tel',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
];

const serviceLegalFormRules = [
  {
    ruleSelector: '.service-modal--legal .service-modal__form-input--name',
    rules: [
      {
        rule: 'minLength',
        value: 3
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '.service-modal--legal .service-modal__form-input--tel',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
];

const serviceAccountingFormRules = [
  {
    ruleSelector: '.service-modal--accounting .service-modal__form-input--name',
    rules: [
      {
        rule: 'minLength',
        value: 3
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '.service-modal--accounting .service-modal__form-input--tel',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
];

const guideFormRules = [
  {
    ruleSelector: '.form-section__form-input--mail',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните email!'
      }
    ]
  },
  {
    ruleSelector: '.form-section__form-checkbox .custom-checkbox__field',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Согласитесь на обработку!'
      }
    ]
  },
];

validateForms('[data-form="footer-form"]', footerFormRules, form_object.url, form_object.nonce, 'form_action');
validateForms('[data-form="section-form"]', sectionFormRules, form_object.url, form_object.nonce, 'form_action');
validateForms('[data-form="legal-form"]', serviceLegalFormRules, form_object.url, form_object.nonce, 'form_action');
validateForms('[data-form="accounting-form"]', serviceAccountingFormRules, form_object.url, form_object.nonce, 'form_action');
validateForms('[data-form="guide-form"]', guideFormRules, form_object.url, form_object.nonce, 'form_action');
