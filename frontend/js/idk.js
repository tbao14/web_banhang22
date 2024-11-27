const navbarAutocomplete = document.querySelector('#navbar-search-autocomplete');
const navbarData = ['One', 'Two', 'Three', 'Four', 'Five'];
const navbarDataFilter = (value) => {
  return navbarData.filter((item) => {
    return item.toLowerCase().startsWith(value.toLowerCase());
  });
};

new mdb.Autocomplete(navbarAutocomplete, {
  filter: navbarDataFilter,
});

//-------------------------------------//

const header = document.querySelector("header")
window.addEventListener("scroll",function(){
  x = window.pageXOffset
  if(x>0){
    header.classList.add("sticky")
  }
  else {
    header.remove.add("sticky")
  }
})