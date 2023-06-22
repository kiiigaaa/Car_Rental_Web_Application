let preContainer = document.querySelector('.vehicle-preview');
let previewBox = preContainer.querySelectorAll('.preview');


document.querySelectorAll('.vehicle-container .vhcl').forEach(vhcl =>{
  vhcl.onclick = () => {
    preContainer.style.display = 'flex';
    let name = vhcl.getAttribute('data-name');
    previewBox.forEach(preview => {
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.close').onclick = () =>{
    close.classList.remove('active');
    preContainer.style.display = 'none';
  };
});