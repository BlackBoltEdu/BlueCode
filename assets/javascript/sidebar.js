var links = document.getElementsByClassName('link')

for(var i = 0; i <= links.length; i++)
   addClass(i)

function addClass(id){
   setTimeout(function(){
      if(id > 0) links[id-1].classList.remove('hover');
   },
   id*750);
}

const toggle = document.getElementById('toggle');
const sidebar = document.getElementById('sidebar');

document.onclick = function(e){
    if(e.target.id !== 'sidebar' && e.target.id !== 'toggle'){ 
        toggle.classList.remove('active');
        sidebar.classList.remove('active');
    }
}

toggle.onclick = function(){
    toggle.classList.toggle('active');
    sidebar.classList.toggle('active');
};