const toggle = document.getElementById('toggle');
const sidebar = document.getElementById('sidebar');

    document.onclick = function(e){
      if(e.target.id !== 'sidebar' && e.target.id !== 'toggle')
      {
         toggle.classList.remove('active');
         sidebar.classList.remove('active')
      }
    }

    toggle.onclick = function(){
      toggle.classList.toggle('active');
      sidebar.classList.toggle('active')
    }

    let searchBox = document.querySelector('#search-box');
let images = document.querySelectorAll('.container .image-container .image');

searchBox.oninput = () =>{
   images.forEach(hide => hide.style.display = 'none');
   let value = searchBox.value;
   images.forEach(filter =>{
      let title = filter.getAttribute('data-title');
      if(value == title){
         filter.style.display = 'block';
      }
      if(searchBox.value == ''){
         filter.style.display = 'block';
      }
   });
};