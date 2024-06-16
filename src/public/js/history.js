
document.addEventListener('DOMContentLoaded', function () {
  const openModal = document.querySelector('.myProfile-name');
  const dialogModal = document.querySelector('.modal');
  const { body } = document;
  const MODAL_CLASS = "is-modal";

  openModal.addEventListener('click', () => {
    body.classList.add(MODAL_CLASS);
    dialogModal.classList.add('show');
    dialogModal.showModal();
  });

  dialogModal.addEventListener('cancel', () => {
    body.classList.remove(MODAL_CLASS);
    dialogModal.classList.remove('show');
  });

  dialogModal.addEventListener('click', (event) => {
    if (!event.target.closest('.modal-inner')) {
      body.classList.remove(MODAL_CLASS);
      dialogModal.classList.remove('show');
      dialogModal.close();
    }
  })

});
