$('#exampleModal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var nome = button.data('nome');
  
  var modal = $(this)
  
  modal.find('.modal-title').text('New message to  ' + nome)
  modal.find('#emailTeste').val(recipient)
  modal.find('#teste1').val(nome)

})