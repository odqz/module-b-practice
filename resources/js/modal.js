console.log('iscalled')

window.openModal = function (modal) {
  console.log('open')
  document.querySelector(`#${modal}`).style.display = 'block';
}

window.closeModal = function (modal) {
  document.querySelector(`#${modal}`).style.display = 'none';
}