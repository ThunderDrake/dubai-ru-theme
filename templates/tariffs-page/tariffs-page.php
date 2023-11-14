<?php
/**
 * Шаблон страницы тарифов
 */

 ct()->header()
?>
<?php ct()->template('/parts/inner-page-hero.php') ?>
<section class="tariffs">
  <div class="tariffs__container container">
    <div class="tariffs__header">
    Registration of corporate tax <span>as a gift</span>,<br>
    when buying an annual package of services.<br>
    Preliminary consultation of an accountant is free of charge.
    </div>
    <div class="tariffs__grid">
      <div class="tariffs__item tariff">
        <div class="tariff__title">Basic</div>
        <div class="tariff__subtitle">Small business (up to 50 operations per month) without TRN VAT</div>
        <div class="tariff__price">1500 AED/month (VAT not included)</div>
        <div class="tariff__item">initial consultation 45 minutes (Zoom or other messenger)</div>
        <div class="tariff__small-text">* We fill out a business questionnaire, discuss a convenient model of cooperation, identify important points in the taxation of your business and what you need to focus on.</div>
        <div class="tariff__item">software acquisition</div>
        <div class="tariff__small-text">* Paid separately. We give recommendations on Software products that are certified in the UAE and allowed to be used</div>
        <div class="tariff__item">weekly exchange of primary documentation via email, disk or WhatsApp, Telegram (optional)</div>
        <div class="tariff__item">daily online access to your software product, where you can track how the accounting support of your business is conducted by our specialists</div>
        <div class="tariff__item">monthly reports (balance sheet, profit and loss statement, cash flow statement)</div>
        <div class="tariff__item">one-time online session and discussion of accumulated issues (45 minutes)</div>
        <div class="tariff__item">annual preparation of the corporate tax report and financial statements</div>
        <div class="tariff__item tariff__item--stroke">quarterly preparation of the VAT tax report</div>
        <div class="tariff__item tariff__item--stroke">examination of incoming invoices for the legality of applying the VAT deduction</div>
        <div class="tariff__bordered">
          The package does not include<br>
          - daily calls<br>
          - tax planning<br>
          - examination of contracts<br>
          - consulting on business schemes<br>
          - consultations on labor law, customs law<br>
          - preparation of VAT declaration
        </div>
      </div>

      <div class="tariffs__item tariff">
        <div class="tariff__title">Standard</div>
        <div class="tariff__subtitle">Small business (up to 50 operations per month) with TRN VAT</div>
        <div class="tariff__price">2500 AED/month (VAT not included)</div>
        <div class="tariff__item">initial consultation 45 minutes (Zoom or other messenger)</div>
        <div class="tariff__small-text">* We fill out a business questionnaire, discuss a convenient model of cooperation, identify important points in the taxation of your business and what you need to focus on.</div>
        <div class="tariff__item">software acquisition</div>
        <div class="tariff__small-text">* Paid separately. We give recommendations on Software products that are certified in the UAE and allowed to be used</div>
        <div class="tariff__item">weekly exchange of primary documentation via email, disk or WhatsApp, Telegram (optional)</div>
        <div class="tariff__item">daily online access to your software product, where you can track how the accounting support of your business is conducted by our specialists</div>
        <div class="tariff__item">monthly reports (balance sheet, profit and loss statement, cash flow statement)</div>
        <div class="tariff__item">one-time online session and discussion of accumulated issues (45 minutes)</div>
        <div class="tariff__item">annual preparation of the corporate tax report and financial statements</div>
        <div class="tariff__item">quarterly preparation of the VAT tax report</div>
        <div class="tariff__item">examination of incoming invoices for the legality of applying the VAT deduction</div>
        <div class="tariff__bordered">
          The package does not include<br>
          - daily calls<br>
          - tax planning<br>
          - examination of contracts<br>
          - consulting on business schemes<br>
          - consultations on labor law, customs law
        </div>
      </div>

      <div class="tariffs__item tariff">
        <div class="tariff__title">Professional</div>
        <div class="tariff__subtitle">Medium business (up to 100 operations per month) with TRN VAT</div>
        <div class="tariff__price">3500 AED/month (VAT not included)</div>
        <div class="tariff__item">initial consultation 45 minutes (Zoom or other messenger)</div>
        <div class="tariff__small-text">* We fill out a business questionnaire, discuss a convenient model of cooperation, identify important points in the taxation of your business and what you need to focus on.</div>
        <div class="tariff__item">software acquisition</div>
        <div class="tariff__small-text">* Paid separately. We give recommendations on Software products that are certified in the UAE and allowed to be used</div>
        <div class="tariff__item">weekly exchange of primary documentation via email, disk or WhatsApp, Telegram (optional)</div>
        <div class="tariff__item">daily online access to your software product, where you can track how the accounting support of your business is conducted by our specialists</div>
        <div class="tariff__item">monthly reports (balance sheet, profit and loss statement, cash flow statement)</div>
        <div class="tariff__item">one-time online session and discussion of accumulated issues (45 minutes)</div>
        <div class="tariff__item">annual preparation of the corporate tax report and financial statements</div>
        <div class="tariff__item">quarterly preparation of the VAT tax report</div>
        <div class="tariff__item">examination of incoming invoices for the legality of applying the VAT deduction</div>
        <div class="tariff__bordered">
          The package does not include<br>
          - daily calls<br>
          - tax planning<br>
          - examination of contracts<br>
          - consulting on business schemes<br>
          - consultations on labor law, customs law<br>
          - preparation of VAT declaration
        </div>
      </div>

      <div class="tariffs__item tariff tariff--last">
        <div class="tariff__title">Maximal</div>
        <div class="tariff__subtitle">Medium business (up to 100 operations per month) with TRN VAT</div>
        <div class="tariff__price">5500 AED/month (VAT not included)</div>

        <div class="tariff__bordered">
          It includes all the points of the professional tariff, as well as full support of your business in all aspects. Compilation of financial statements on your request, assistance in any matters of interest (tax audits, examination of contracts (up to 3 sheets), assistance in preparing documents for the bank, answers to questions on actual tax changes in the tax Administration, recommendations for doing business, assistance in tax planning, communication on a daily basis in WhatsApp, Telegram, 1 session online on questions of interest to you (45 minutes), recommendations for other questions.

          <div class="tariff__bordered-footer">
            When paying for accounting support for 1 year , the first month <span>as a gift</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php ct()->template('/front-page/parts/preferences-section.php') ?>
<?php
ct()->footer();
