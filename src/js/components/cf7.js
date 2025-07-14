
const cf7 = () => {

  const popupWrapper = document.getElementById('popup-wrapper');
  const popupClose   = document.getElementById('popup-close');
  const btnClose     = document.getElementById('popup-btn-close');
  const popupTitle   = document.getElementById('popup-title');
  const popupText    = document.getElementById('popup-text');

  const body         = document.body;

  if(!popupWrapper){
    return;
  }

  document.addEventListener( 'wpcf7mailsent', function( event ) {

    let contactFormId = event.detail.contactFormId;
    let popupData     = sigmaData.optionPopup[contactFormId];

    if(!popupData){
      return;
    }
    const message = document.querySelector('[data-wpcf7-id="' + contactFormId + '"] .wpcf7-response-output');
    if (message) {
      message.style.display = 'none';
    }

    popupTitle.textContent = popupData.popup_title;
    popupText.textContent  = popupData.popup_text;
    btnClose.textContent  = popupData.popup_text_btn;

    popupWrapper.style.display = 'flex';
    body.style.overflow        = 'hidden';
    popupWrapper.classList.add('active');

  }, false );

  popupClose.addEventListener('click', function() {
    popupWrapper.style.display = 'none';
    body.style.overflow = 'auto';
    popupWrapper.classList.remove('active');
  })

  btnClose.addEventListener('click', function() {
    popupWrapper.style.display = 'none';
    body.style.overflow = 'auto';
    popupWrapper.classList.remove('active');
  })

};

export default cf7;
