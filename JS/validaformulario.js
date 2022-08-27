function validaForm(frm) {
  if (frm.name.value == "" || frm.name.value == null || frm.name.value.lenght < 10) {
    alert("Por favor, escreva seu nome completo.")
    frm.name.focus();
    return false;
  }
  if (frm.email.value == "" || frm.email.value == null || frm.email.value.indexOf("@") == -1 || frm.email.value.indexOf(".") == -1){
    alert("Por favor, escreva seu e-mail corretamente.")
    frm.email.focus();
    return false;
  }
  if (frm.assunto.value == "" || frm.assunto.value == null) {
    alert("Por favor, escreva o assunto da mensagem.")
    frm.assunto.focus();
    return false;
  }
  if (frm.mensagem.value == "" || frm.mensagem.value == null) {
    alert("Por favor, escreva uma mensagem.")
    frm.mensagem.focus();
    return false;
  }
}