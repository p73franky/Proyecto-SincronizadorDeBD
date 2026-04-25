//Array con los contenidos de cada uno de los posibles PopUps
const contenidos = {
  'Sincronizador':   'Esto es un sincronizador de bases de datos en la que podrás sincronizar las bases de datos que tu quieras.',
  'Solicitar Citas': 'Gestor para poder gestionar las posibles citas que se piden por la pagina web para el taller .',
  'Permisos':        'Texto de permisos.'
};

//Generar el titulo con texto de cada PopUp
document.querySelectorAll('main > div > div:not(#cajapopup)').forEach(caja => {
  caja.addEventListener('click', () => {
    const nombre = caja.querySelector('h2').textContent.trim();
    document.getElementById('popup-titulo').textContent = nombre;
    document.getElementById('popup-texto').textContent  = contenidos[nombre] || 'Sin información.';
    document.getElementById('cajapopup').classList.add('activo');
  });
});
//Cerrar el PopUp.
document.getElementById('boton-cerrar').addEventListener('click', () => {
  document.getElementById('cajapopup').classList.remove('activo');
});