const container = document.querySelector('.container');

const cadastro = () => {
  container.classList.toggle('ativo');
  document.title = 'Cadastro';
};

const login = () => {
  container.classList.toggle('ativo');
  document.title = 'Login';
};