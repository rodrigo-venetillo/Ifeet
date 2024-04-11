(() => {
  'use strict'

  const forms = document.querySelectorAll('.needs-validation');
  const password = document.getElementById('password');
  const confirmPassword = document.getElementById('confirm-password');
  const confirm = document.getElementById('confirm');
  const passw = document.getElementById('passw');

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)



    if (password) {
      password.addEventListener('keyup', event => {
        if (password.value.length > 0)
          if (password.value.length < 8) {
            event.preventDefault()
            event.stopPropagation()
            passw.innerText = 'A senha deve ter pelo menos 8 dígitos!';
            passw.style.display = 'block';
            password.classList.add('confirm-pass');
          }
          else {
            passw.style.display = 'none';
            password.classList.remove('confirm-pass');
          }

        if (confirmPassword.value.length < 8) {
          event.preventDefault()
          event.stopPropagation()
          confirmPassword.classList.add('confirm-pass');
        }
        else {
          confirm.style.display = 'none';
          confirmPassword.classList.remove('confirm-pass');
        }
        form.classList.add('was-validated')

      }, false)
    }

    if (confirmPassword) {
      confirmPassword.addEventListener('keyup', event => {
        if (password.value !== confirmPassword.value || password.value === '') {
          event.preventDefault()
          event.stopPropagation()
          confirm.innerText = 'As senhas não conferem!';
          confirm.style.display = 'block';
          confirmPassword.classList.add('confirm-pass');
          password.classList.add('confirm-pass');
        }
        else {
          confirm.style.display = 'none';
          passw.style.display = 'none';
          confirmPassword.classList.remove('confirm-pass');
          password.classList.remove('confirm-pass');
        }

        form.classList.add('was-validated')
      }, false)
    }
  });

})()